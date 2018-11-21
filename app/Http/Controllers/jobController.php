<?php

namespace App\Http\Controllers;

use App\Mail\PlatinumaCredit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\job;
use App\appliedJob;
use Mail;
use Input;
use Auth;
use App\Utils\Utilfunctions;
use Mockery\CountValidator\Exception;


class jobController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($parameters = null)
    {
        if($parameters == null ){
            return view('readMore/jobDetails');
        }else{


        }

    }



    public function viewJob(){

        $jobs = DB::table('jobs')
            ->join('users', 'jobs.userID', '=', 'users.id')
            ->select('jobs.*','users.name')
            ->where('jobs.expireDate','>',now())->get();

        //Get all users and pass it to the view
       // $jobs = job::all();
        return view('adminFolder/viewJobs')->with('jobs',$jobs);
    }


    public function applay($id){

        if(Auth::user()->hasPermissionTo('apply Job')){

            $parameters = array(
                'errorNote' => '',
                'jobID' => $id
            );

            #return json_encode($parameters);

            return view('readMore/applayJob')->with('parameters',$parameters);

        }else{


            $userJson = Auth::user();
            $userID = $userJson["id"];

            $cvData = DB::table('user_c_vs')
                ->select('user_c_vs.*')
                ->where('user_c_vs.userId', '=' ,$userID )->get();

            if(count($cvData) > 0){

                $parameters = array(
                    'errorNote' => 'uncomplete_notification',
                    'tabData' => 'non',
                    'id' => ''
                );
                return view('LoadCV/createClient')->with('parameters',$parameters);

            }

            $parameters = array(
                'errorNote' => 'notification',
                'tabData' => 'non',
                'id' => ''
            );
            return view('LoadCV/createClient')->with('parameters',$parameters);
        }



    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parameters = array(
            'errorNote' => '',
            'tabData' => '',
            'id' => ''
        );

        return view('adminFolder/createJob')->with('parameters',$parameters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            //Validating title and body field
            $this->validate($request, [
                'Job' => 'required|max:250',
                'jobShortDesc' => 'required|max:250',
                'jobDescriptionDoc' => 'required|max:500',
                'finish' => 'required|max:500'

            ]);

            #####User ID
            $userJson = Auth::user();
            $userID = $userJson["id"];


            ###insert into a table User CV
            $Job_id = DB::table('jobs')->insertGetId(
                array(
                    'jobTitle' => $request['Job'],
                    'jobDescription' => $request['jobShortDesc'],
                    'jobDescriptionDoc' => $request['jobDescriptionDoc'],
                    'expireDate' => $request['finish'],
                    'userID' => $userID
                )
            );



        ###insert into a table User CV
        $test_id = DB::table('ampitetude_tests')->insertGetId(
            array(
                'testName' => $request['aptitudeName'],
                'testLink' => $request['aptitudeLink'],
                'jobID' => $Job_id
            )
        );

            if (isset($Job_id)) {

                $parameters = array(
                    'errorNote' => 'success',
                    'id' => $Job_id
                );
            }

            return view('adminFolder/createJob')->with('parameters',$parameters);


    }


    public function userApplay(Request $request){

        try {

            #####User ID
            $userJson = Auth::user();
            $userMail = $userJson["email"];
            $userID = $userJson["id"];

            $this->validate($request, [
                'FrontFile' => 'required|max:500'
            ]);

            $appliedJob = new appliedJob();

            $coverletter = null;

            $coverletter = $request->file('FrontFile')->getPathname();
            $imageName = $request->file('FrontFile')->getClientOriginalName();
            $destinationPath = public_path('assets/coverletter/');
            $request->file('FrontFile')->move($destinationPath, $imageName);
            $CoverletterPath = $imageName;

            $aptituseID = DB::table('ampitetude_tests')
                ->where('ampitetude_tests.jobID', '=', $request['jobid'])
                ->value('id');

            $appliedJob->jobID = $request['jobid'];
            $appliedJob->coverLetter = $CoverletterPath;
            $appliedJob->userId = $userID;
            $appliedJob->amptitudeID = $aptituseID;

            #$appliedJob->save();

            $address = $userMail;

            Mail::to($address)->send(new PlatinumaCredit());



            if ($appliedJob->save()) {

                $parameters = array(
                    'errorNote' => 'success',
                    'jobID' => $request['jobid']
                );

            }
        }catch (Exception $e){

            #abort('404');
            $parameters = array(
                'errorNote' => 'fail',
                'jobID' => $request['jobid']
            );
        }


        return view('readMore/applayJob')->with('parameters',$parameters);

        
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
        $job = DB::table('jobs')
            ->where('jobs.id','=',$id)->get();
       #return json_encode($job);

        return view('readMore/jobDetails')->with('job',$job[0]);

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
        $job = DB::table('jobs')
            ->select('jobs.*')
            ->where('id','=',$id)->get();

        $parameters = array(
            'errorNote' => '',
            'tabData' => '',
            'job' => $job[0],
            'id' => ''
        );
        return view('adminFolder/editJob')->with('parameters',$parameters);
        #return json_encode($parameters);
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
