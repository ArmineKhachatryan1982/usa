<?php

namespace App\Http\Controllers;
use App\Models\Home_page;
use App\Models\Home_page_about_text;
use App\models\Home_page_text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminhomepageupdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $result=DB::table('home_pages')
            ->join('home_page_texts','home_pages.id','=','home_page_texts.home_page_id')
            ->join('home_page_about_texts','home_pages.id','=','home_page_about_texts.home_page_id')
            ->select('home_pages.*','home_page_texts.*','home_page_about_texts.*')
            ->get();


        return view('admin.tableupdatedelete',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

//        $result=DB::table('home_pages')
//            ->join('home_page_texts','home_pages.id','=','home_page_texts.home_page_id')
//            ->join('home_page_about_texts','home_pages.id','=','home_page_about_texts.home_page_id')
//            ->select('home_pages.*','home_page_texts.*','home_page_about_texts.*')->where( 'home_pages.id',$id)
//            ->get();

//dd($result);

        return view('admin.edithomepage',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd(_METHOD_);
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
