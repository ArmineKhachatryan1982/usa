<?php

namespace App\Http\Controllers;
use App\Models\Alumni_association;
use App\Models\Alumni_association_img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AAimageController extends Controller
{
     public function index()
    {
         
        return view('admin.alumni_association_image');
    }
     public function insert(Request $request)
    {
        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename=$file->getClientOriginalName();
            $file->move(public_path('img/img_alumini'),$filename);
        }else
            {
              return  redirect()->back();
            }


         $insert =  Alumni_association_img::create([
        'alumni_associations_id'=>'1000',
        'img_url'=>$filename,
        ]);
        
        return redirect()->route('admin_Alumni_Association_image');
    }
     public function delete($id)
    {
        


         return redirect()->route('admin_Alumni_Association_image');
    }
}
