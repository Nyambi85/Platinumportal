<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class activitiesController extends Controller
{
    public function __construct() {
        #$this->middleware('isAdmin'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('activities');
    }


    public function mainPage(){

        $jobs = DB::table('jobs')
            #->join('users', 'jobs.userID', '=', 'users.id')
            #->select('jobs.*','users.name')
            ->where('jobs.expireDate','>',now())->get();

        return view('welcome')->with('jobs',$jobs);

    }


    public function branchlocation(){

        return view('branch');
    }

    public function showTrainingMS(){


        return view('Training/viewTraining3');
    }

    public function showMoreTrainingMS($id){


        if($id == '1') {
            $video = 1;
            return view('Training/viewTrainingVideo')->with('video', $video);
        } elseif ($id == '2') {
            $video = 2;
            return view('Training/viewTrainingVideo')->with('video', $video);
        }


        #return view('Training/viewTrainingVideo');
    }


    public function showTraining(){

        return view('Training/viewTraining');
    }

    public function showTraining2(){

        return view('Training/viewTraining2');
    }

    public function showBlog(){

        return view('blog/blogView');
    }

    public function blogMore(){

        return view('blog/blogMoreDetails1');

    }

    public function blogMore2(){

        return view('blog/blogMoreDetails2');

    }
    public function blogMore3(){

        return view('blog/blogMoreDetails3');

    }

    public function blogMore4(){

        return view('blog/blogMoreDetails4');

    }


    public function blogMore5(){

        return view('blog/blogMoreDetails5');

    }

    public function blogMore6(){

        return view('blog/blogMoreDetails6');
    }


    public function blogMore7(){

        return view('blog/blogMoreDetails7');

    }

    public function blogMore8(){

        return view('blog/blogMoreDetails8');
    }

    public function blogMore9(){

        return view('blog/blogMoreDetails9');
    }

    public function blogMore10(){

        return view('blog/blogMoreDetails10');
    }

    public function lbfpage(){

        return view('product/lbfProduct');
    }


    public function cspage(){

        return view('product/csProduct');
    }

    public function kukloanpage(){

        return view('product/kukuloan');
    }

    public function ujasiriamaliloanpage(){

        return view('product/ujasiriamali');
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



    public function about(){

        return view('About/about');

    }

    public function about2(){

        return view('About/about2');
    }

    public function about3(){
        return view('About/about3');
    }

    public function mainhome(){

        $jobs = DB::table('jobs')
            #->join('users', 'jobs.userID', '=', 'users.id')
            #->select('jobs.*','users.name')
            ->where('jobs.expireDate','>',now())->get();

        return view('welcome1')->with('jobs',$jobs);;
    }
}
