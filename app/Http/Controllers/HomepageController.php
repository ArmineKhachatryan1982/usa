<?php

namespace App\Http\Controllers;
use App\Models\Aboutindex;
use App\Models\News_and_event;
use App\Models\Our_affiliates;
use App\Models\Partners;
use App\Models\Title;



use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        app()->setLocale($locale);

        $about=Aboutindex::where('id','1000')->first();

        $News= News_and_event::where('status','0')->skip(0)->take(6)->get();

        $Affiliates=Our_affiliates::all();

        $Partners=Partners::whereNotNull('id')->skip(0)->take(4)->get();

        $Title = Title::where('id','1001')->first();

        return view('pages.homepage',compact('about','News','Affiliates','Partners','Title'));
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
        //
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
