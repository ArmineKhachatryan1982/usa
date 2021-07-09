<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Steering_img;
use App\Models\Steering_committee;

class SteeringCommitteeImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//       $tableuploadform =DB::table('steering_committees')
//            ->join('steering_imgs','steering_committees.id','=','steering_imgs.steering_committees_id')
//           ->select('steering_committees.*','steering_imgs.*')
//           ->get();
//       dump($tableuploadform);
        $tableuploadform =DB::table('steering_committees')->where('id','1000')->value('id');

        return view('admin.admin_steering_committe_img_form',compact('tableuploadform'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->file('img_name'));
      //  dd($request->input('steering_committees_id'));

//        $request->validate([
//            'steering_img_file'=>'required',
//        ]);


        $request->input('steering_committees_id');
      $steering_committees_id = $request->input('steering_committees_id');
      $img_name = $request->file('img_name');

//        if($request->hasfile('steering_img_file')){
//            $file=$request->file('steering_img_file');
//            echo $filename=$file->getClientOriginalName();
//            $file->move(public_path('img/img_steering'),$filename);
//        }
//        $steering_img = New Steering_img();
//        $steering_img -> steering_committees_id = $steering_committees_id;
//        $steering_img -> img_name = "$filename";
//        $steering_img ->save();

//      echo  $creat = Steering_img::create(['$steering_img'=>$steering_committees_id,'img_name'=>"hello"]);

        $creat= DB::table('steering_imgs')->insert([
            'steering_committees_id'=>$steering_committees_id,'img_name'=>"u"
        ]);

die;
        return redirect()->back()->with('success','Image successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return  "hellow";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
