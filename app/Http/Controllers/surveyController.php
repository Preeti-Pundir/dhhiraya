<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\User;
use Auth;

class surveyController extends Controller
{
    public function store(Request $req){


          $this->validate($req,[
            'que_1' => 'required',
            'que_2' => 'required',
            'que_3' => 'required',
            'que_4' => 'required',
            'que_5' => 'required',

        ]);

        $data = $req->all();
        $data['user_id'] = Auth::user()->id;
        Survey::create($data);
        // User::where('id',auth()->user()->id)->update(['survey'=>'done']);
        request()->session()->flash('success','Thank you ');
        return back();

   }
}