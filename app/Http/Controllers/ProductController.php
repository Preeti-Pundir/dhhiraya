<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Arr;
use App\Image;

use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::getAllProduct();
        // return $products;
        return view('backend.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $brand=Brand::get();
        $category=Category::where('is_parent',1)->get();
        // return $category;
        return view('backend.product.create')->with('categories',$category)->with('brands',$brand);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|required',
            'description'=>'string|required',
            'developer'=>'string|required',
            'area'=>'string|required',
            'rooms'=>'string|required',
            "brochure" => "mimes:pdf",
            'photo'=>'string|required',
            'cat_id'=>'required|exists:categories,id',
            'brand_id'=>'required|exists:brands,id',
            'status'=>'required|in:active,inactive',
            'pr_condition'=>'required|in:Ready to move in,Under Construction',
            'price'=>'required|numeric',
        ]);

        $data=$request->all();

        $data = Arr::except($data,['ss']);

        $slug=Str::slug($request->title);
        $count=Product::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['is_featured']=$request->input('is_featured',0);
        $size=$request->input('size');
        if($size){
            $data['size']=implode(',',$size);
        }
        else{
            $data['size']='';
        }

        if($request->hasfile('brochure')){

            $name = $request->file('brochure')->getClientOriginalName();
            $path = $request->file('brochure')->storeAs('/public/brochure',$name);
            $data['brochure'] = ('storage'.preg_replace('/public/','', $path));

        }



        $status=Product::create($data);
        $details = [
            'subject' => 'New Property  Has Been  Add .'
        ];

        // $job = (new \App\Jobs\SendQueueEmail($details))
        // ->delay(now()->addSeconds(2));

        // dispatch($job);
        // echo "Mail send successfully !!";


        if($request->hasfile('ss')){
            foreach ($request->file('ss') as $imagefile) {
                $image = new Image;
               $path = $imagefile->store('/public/images/resource');
               $image->url = $path;
               $image->product_id = $status->id;
               $IM =  $image->save();
           }
        }


        if($status){
            request()->session()->flash('success','Product Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product-grids');



    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::get();
        $product=Product::findOrFail($id);
        $category=Category::where('is_parent',1)->get();
        $items=Product::where('id',$id)->get();
        // return $items;
        return view('backend.product.edit')->with('product',$product)
                    ->with('brands',$brand)
                    ->with('categories',$category)->with('items',$items);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|required',
            'description'=>'string|required',
            'developer'=>'string|required',
            'area'=>'string|required',
            'rooms'=>'string|required',
            'developersite'=>'string|required',
            'photo'=>'string|required',
            "brochure" => "mimes:pdf",
            'cat_id'=>'required|exists:categories,id',
            'brand_id'=>'required|exists:brands,id',
            'status'=>'required|in:active,inactive',
            'pr_condition'=>'required|in:Ready to move in,Under Construction',
            'price'=>'required|numeric',
        ]);

        $data=$request->all();
        $data['is_featured']=$request->input('is_featured',0);
        $size=$request->input('size');
        if($size){
            $data['size']=implode(',',$size);
        }
        else{
            $data['size']='';
        }

        if($request->hasfile('brochure')){

            $name = $request->file('brochure')->getClientOriginalName();
            $path = $request->file('brochure')->storeAs('/public/brochure',$name);
            $data['brochure'] = ('storage'.preg_replace('/public/','', $path));

        }



        $data = Arr::except($data,['ss']);
        if($request->hasfile('ss')){
            foreach ($request->file('ss') as $imagefile) {
                $image = new Image;
               $path = $imagefile->store('/public/images/resource');
               $image->url = $path;
               $image->product_id = $id;
               $IM =  $image->save();
           }
        }


        $status=$product->fill($data)->update();

        if($status){
            request()->session()->flash('success','Product Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $status=$product->delete();

        if($status){
            request()->session()->flash('success','Product successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('product.index');
    }
}
