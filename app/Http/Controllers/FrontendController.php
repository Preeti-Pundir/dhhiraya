<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Cart;
use App\Models\Brand;
use App\User;
use App\Newsletter;
use Auth;
use Session;
// use Newsletter;
use DB;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class FrontendController extends Controller
{

    public function index(Request $request){
        return redirect()->route($request->user()->role);
    }

    public function home(){

        $featured=Product::where('status','active')->where('is_featured',1)->orderBy('price','DESC')->limit(2)->get();
        $posts=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $banners = Banner::where('status','active')->limit(3)->orderBy('id','DESC')->get();
        // return $banner;
        $products=Product::where('status','active')->orderBy('id','DESC')->limit(1)->get();
        $category=Category::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
        $brand=Brand::where('status','active')->orderBy('id','ASC')->withCount('products')->get();
        // $random = Product::where('status', 'active')->inRandomOrder('products')->limit(1)->get();


        // return $category;
        return view('frontend.index')
                ->with('featured',$featured)
                ->with('posts',$posts)
                ->with('banners',$banners)
                ->with('product_lists',$products)
                ->with('brands',$brand)
                ->with('category_lists',$category);

    }

    public function aboutUs(){
        return view('frontend.pages.about-us');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function accountdetails(){
        return view('frontend.pages.myaccount');

    }

    public function productDetail($slug){
        $product_detail= Product::getProductBySlug($slug);
        // dd($product_detail);
        return view('frontend.pages.product_detail')->with('product_detail',$product_detail);
    }

    public function download($slug)
    {

        try {
            $product = Product::where('slug', $slug)->firstOrFail();
            $filePath = $product->brochure;
            $publicPath = public_path($filePath);

            if (file_exists($publicPath)) {
                return response()->download($publicPath);
            } else {
                abort(404, 'Brochure not found');
            }
        } catch (\Exception $e) {
           echo "Brochure not found";
        }

    }

    public function developerlink($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $filePath = $product->developersite;
        // dd($filePath);
        $world = 'http';
        if (Str::startsWith($filePath, $world)) {
            return redirect()->to($filePath);
        }

        echo "Link is not available";


    }


    public function productGrids(){
        $products=Product::query();
        $category =Category::select('id', 'title')->pluck('title', 'id')->toArray();
        $brands = Brand::select('id', 'title')->pluck('title', 'id')->toArray();
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids);
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $products->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }


        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));


            $products->whereBetween('price',$price);
        }


        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(9);
        }
        // Sort by name , price, category
        // $products['category'] = $category;




        return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products)->with('categorys', $category)->with('brands', $brands);
    }


    public function productLists(){
        // dd("asdf");
        $products=Product::query();
        $category = Category::select('id', 'title')->pluck('title', 'id')->toArray();
        $brands = Brand::select('id', 'title')->pluck('title', 'id')->toArray();



        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $products->whereIn('brand_id', $slugs);
        }
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            $products->whereIn('cat_id', $slug);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }


        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));


            $products->whereBetween('price',$price);
        }


        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(6);
        }
        // Sort by name , price, category




        return view('frontend.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products)->with('categorys', $category)->with('brands', $brands);
    }
    public function productFilter(Request $request){
        // dd($request->all());
            $data= $request->all();
            // return $data;
            $showURL="";
            if(!empty($data['show'])){
                $showURL .='&show='.$data['show'];
            }


            $sortByURL='';
            if(!empty($data['sortBy'])){
                $sortByURL .='&sortBy='.$data['sortBy'];
            }



            $brandURL="";
            if(!empty($request['brand'])){


                    if(empty($brandURL)){
                        $brandURL .='&brand='. $request['brand'];
                    }
                    else{
                        $brandURL .=','. $request['brand'];
                    }
            }
            // return $brandURL;

            $catURL="";
            if (!empty($request['category'])) {
                if (empty($brandURL)) {
                    $catURL .= '&category=' . $request['category'];
                } else {
                    $catURL .= ',' . $request['category'];
                }
            }

            $priceRangeURL="";
            if(!empty($data['price_range'])){
                $priceRangeURL .='&price='.$data['price_range'];
            }


            if(request()->is('/product-grids')){
                return redirect()->route('product-grids',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
            else{
                return redirect()->route('product-lists',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
    }
    public function productSearch(Request $request){
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->get();

        $category = Category::select('id', 'title')->pluck('title', 'id')->toArray();
        $brands = Brand::select('id', 'title')->pluck('title', 'id')->toArray();

        $brandss = Brand::orwhere('slug','like','%'.$request->search.'%');

        // $singleCategory = Category::all();
        $products=Product::orwhere('title','like','%'.$request->search.'%')
                    ->orwhere('slug','like','%'.$request->search.'%')
                    ->orwhere('description','like','%'.$request->search.'%')
                    ->orwhere('area','like','%'.$request->search.'%')
                    ->orwhere('rooms','like','%'.$request->search.'%')
                    ->orwhere('summary','like','%'.$request->search.'%')
                    ->orwhere('price','like','%'.$request->search.'%')
                    ->orderBy('id','DESC')
                    ->paginate('9');
        return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products)->with('categorys', $category)->with('brands', $brands)->with('brandss', $brandss);
    }

    public function productBrand(Request $request){
        $products=Brand::getProductByBrand($request->slug);
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $category = Category::select('id', 'title')->pluck('title', 'id')->toArray();
        $brands = Brand::select('id', 'title')->pluck('title', 'id')->toArray();
        if(request()->is('/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products)->with('categorys', $category)->with('brands', $brands);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->products)->with('recent_products',$recent_products)->with('categorys', $category)->with('brands', $brands);
        }

    }
    public function productCat(Request $request){
        $products=Category::getProductByCat($request->slug);
        // return $request->slug;
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $category = Category::select('id', 'title')->pluck('title', 'id')->toArray();
        $brands = Brand::select('id', 'title')->pluck('title', 'id')->toArray();


        if(request()->is('/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products)->with('categorys', $category)->with('brands', $brands);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->products)->with('recent_products',$recent_products)->with('categorys', $category)->with('brands', $brands);
        }

    }
    public function productSubCat(Request $request){
        $products=Category::getProductBySubCat($request->sub_slug);
        // return $products;
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->sub_products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->sub_products)->with('recent_products',$recent_products);
        }

    }

    public function blog(){
        $post=Post::query();

        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=PostCategory::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            return $cat_ids;
            $post->whereIn('post_cat_id',$cat_ids);
            // return $post;
        }
        if(!empty($_GET['tag'])){
            $slug=explode(',',$_GET['tag']);
            // dd($slug);
            $tag_ids=PostTag::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // return $tag_ids;
            $post->where('post_tag_id',$tag_ids);
            // return $post;
        }

        if(!empty($_GET['show'])){
            $post=$post->where('status','active')->orderBy('id','DESC')->paginate($_GET['show']);
        }
        else{
            $post=$post->where('status','active')->orderBy('id','DESC')->paginate(9);
        }
        // $post=Post::where('status','active')->paginate(8);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    }

    public function blogDetail($slug){
        $post=Post::getPostBySlug($slug);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // return $post;
        return view('frontend.pages.blog-detail')->with('post',$post)->with('recent_posts',$rcnt_post);
    }

    public function blogSearch(Request $request){
        // return $request->all();
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $posts=Post::orwhere('title','like','%'.$request->search.'%')
            ->orwhere('quote','like','%'.$request->search.'%')
            ->orwhere('summary','like','%'.$request->search.'%')
            ->orwhere('description','like','%'.$request->search.'%')
            ->orwhere('slug','like','%'.$request->search.'%')
            ->orderBy('id','DESC')
            ->paginate(8);
        return view('frontend.pages.blog')->with('posts',$posts)->with('recent_posts',$rcnt_post);
    }

    public function blogFilter(Request $request){
        $data=$request->all();
        // return $data;
        $catURL="";
        if(!empty($data['category'])){
            foreach($data['category'] as $category){
                if(empty($catURL)){
                    $catURL .='&category='.$category;
                }
                else{
                    $catURL .=','.$category;
                }
            }
        }

        $tagURL="";
        if(!empty($data['tag'])){
            foreach($data['tag'] as $tag){
                if(empty($tagURL)){
                    $tagURL .='&tag='.$tag;
                }
                else{
                    $tagURL .=','.$tag;
                }
            }
        }
        // return $tagURL;
            // return $catURL;
        return redirect()->route('blog',$catURL.$tagURL);
    }

    public function blogByCategory(Request $request){
        $post=PostCategory::getBlogByCategory($request->slug);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts',$post->post)->with('recent_posts',$rcnt_post);
    }

    public function blogByTag(Request $request){
        // dd($request->slug);
        $post=Post::getBlogByTag($request->slug);
        // return $post;
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    }

    // Login
    public function login(){
        return view('frontend.pages.login');
    }
    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active'])){
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully login');
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin');
            }
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Invalid email and password pleas try again!');
            return redirect()->back();
        }
    }

    public function logout(){
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success','Logout successfully');
        return redirect()->route('login.form');
    }

    public function register(){
        return view('frontend.pages.register');
    }
    public function registerSubmit(Request $request){
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $data=$request->all();
        // dd($data);
        $check=$this->create($data);
        Session::put('user',$data['email']);
        if($check){
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active'])){
                    Session::put('user',$data['email']);
                    request()->session()->flash('success','Registered & Successfully login');
                    if (Auth::user()->role === 'admin') {
                        return redirect()->route('admin');
                    }
                    return redirect()->route('home');
            }
            else{
                    request()->session()->flash('error','Please try again!');
                    return redirect()->back();
            }
            // // request()->session()->flash('success','Successfully Registered');
            // return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }
    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'status'=>'active'
            ]);
    }
    // Reset password
    public function showResetForm(){
        return view('auth.passwords.old-reset');
    }

    public function subscribe(Request $request){

        Newsletter::create($request->all());
        request()->session()->flash('success', 'Subscribed! Please check your email');
        return redirect()->route('home');

    }
}