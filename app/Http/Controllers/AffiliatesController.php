<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Our_affiliates;

class AffiliatesController extends Controller
{
     public function index()
    {
        $data = Our_affiliates::all();
         
        return view('admin.admin_affiliates',['data'=>$data]);
    }
     public function add(Request $request)
    {

            if($request->hasfile('img')){
            $file = $request->file('img');
            $index_img_name=$file->getClientOriginalName();
            $file->move(public_path('img/logo'),$index_img_name);
        }else
            {
              return  redirect()->back();
            }
         $insert = Our_affiliates::create([
        'text_am'=>$request['text_am'],
        'text_en'=>$request['text_en'],
        'imgpath'=>$index_img_name,
             ]); 
        
       
         
         return redirect()->route('admin_affiliates_add');
     
    }
     public function edit()
    {
         
        return redirect()->route('admin_affiliates_add');
    }
     public function update()
    {
         
        return redirect()->route('admin_affiliates_add');
    }
     public function delete($id)
    {

        $delete = Our_affiliates::where('id',$id)->delete();
         
        return redirect()->route('admin_affiliates_add');
    }
}
