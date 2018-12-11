<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Redirect;

//Enables us to output flash messaging
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *::user()
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {


        #Auth::user()->givePermissionTo('add Job');

        #$userJson = Auth::user();
        #return ($userJson);

     if(Auth::user()->hasPermissionTo('add Job') && $id == null){



         if(DB::table('nominations')
             ->where('nominationStatus','=','open')->exists()){

             $nominationID = DB::table('nominations')
                 ->where('nominationStatus','=','open')->pluck('id');

             if(DB::table('nomination_votes')
                    ->where('nomination_votes.nominationID','=',$nominationID)
                    ->exists()){


                 #for nomination
                 $candidateList = DB::table('nomination_votes')
                     #->join('users','users.email','=','nomination_votes.nomineeEmail')
                     ->where('nomination_votes.nominationID','=',$nominationID)
                     ->select('nomination_votes.nomineeEmail',DB::raw('count(nomination_votes.id) as voteCount'))
                     ->groupBy('nomination_votes.nomineeEmail')
                     ->orderBy('voteCount','desc')
                     ->first();

                 $user = DB::table('users')
                     ->where('email','=',$candidateList->nomineeEmail)
                     ->value('name');

                 $numberOfVote = DB::table('nomination_votes')
                     ->where('nomination_votes.nominationID','=',$nominationID)
                     ->select(DB::raw('count(nomination_votes.id) as voteCount'))
                     ->value('voteCount');

                 $parameters = array(
                     'nominationData' => array(
                         'leadingCandidateName' =>  $user,
                         'numberOfVote' => $candidateList->voteCount,
                         'leadingCandidateMail' => $candidateList->nomineeEmail,
                         'totalVote' => $numberOfVote
                     ),
                     'appliedJobs' => '',
                     'passport'=> ''
                 );

                 //abort('401');
                 //return redirect()->route('admin');
                 return view('adminFolder/adminMain')->with('parameters',$parameters);


             }



         }




         #return ($numberOfVote);
        /* $users = DB::table(DB::raw("({$candidateList->toSql()}) as sub"))
             ->max('voteCount');*

         $users = DB::table('users')
             ->join(DB::raw("({$candidateList->toSql()}) as sub"),'sub.nomineeEmail','=','users.email')
             ->havingRaw('max(sub.voteCount)')
             ->get();

        /* DB::table('users')
             ->join('contacts', function ($join) {
                 $join->on('users.id', '=', 'contacts.user_id')->orOn(...);
             })
             ->get();*/

         $parameters = array(
             'nominationData' => array(
                 'leadingCandidateName' =>  '',
                 'numberOfVote' => '',
                 'leadingCandidateMail' => '',
                 'totalVote' => ''
             ),
             'appliedJobs' => '',
             'passport'=> ''
         );

         //abort('401');
         //return redirect()->route('admin');
         return view('adminFolder/adminMain')->with('parameters',$parameters);


        }elseif(Auth::user()->hasPermissionTo('view staff page') && $id == null){


         $jobs = DB::table('jobs')
             #->join('users', 'jobs.userID', '=', 'users.id')
             #->select('jobs.*','users.name')
             ->where('jobs.expireDate','>',now())->get();

         return view('welcome1')->with('jobs',$jobs);

	}elseif(Auth::user()->hasPermissionTo('adminview') && $id == 'adminview'){

         $userJson = Auth::user();
         $userID = $userJson["id"];


         $customerContactRequest = DB::table('custome_contanct_requests')
                    ->orderBy('id','desc')
                    ->take(8)
                    ->get();
         $customerQuoterequest = DB::table('customer_quote_requests')
                    ->orderBy('id','desc')
                    ->take(8)
                    ->get();
         $adminviewData = array(
             'customerContactQuery'=>$customerContactRequest,
             'customerQuoterequest'=>$customerQuoterequest
         );


	    return view('adminFolder/adminView')->with('adminviewData',$adminviewData);

     } else{
          #####User ID
          $userJson = Auth::user();
          $userID = $userJson["id"];

          $CVdata = DB::table('user_c_vs')
              ->where('user_c_vs.userId','=',$userID)
              ->value('passprtPicture');

          $jobs = DB::table('jobs')
              #->join('users', 'jobs.userID', '=', 'users.id')
              #->select('jobs.*','users.name')
              ->where('jobs.expireDate','>',now())->get();

          $appliedJob = DB::table('applied_jobs')
              ->join('jobs','jobs.id','=','applied_jobs.jobID')
              ->join('users','users.id','=','applied_jobs.userId')
              ->select('users.*','jobs.*')
              ->where('applied_jobs.userId','=',$userID)
              ->get();

          $parameters = array(
              'jobs' => $jobs,
              'appliedJobs' => $appliedJob,
              'passport'=> $CVdata
          );

          #alert()->success('You have been logged out.', 'Good !');
          #alert()->flash('Welcome back!', 'success');
          return view('home')->with('parameters',$parameters);
          #return json_encode($parameters);
        }


      //  alert()->success('You have been logged out.', 'Good bye!');

      /*  return redirect()->action(
            'cvController@index'
        );*/


    }

    public function StaffPage(){

            $jobs = DB::table('jobs')
                #->join('users', 'jobs.userID', '=', 'users.id')
                #->select('jobs.*','users.name')
                ->where('jobs.expireDate','>',now())->get();

            return view('welcome1')->with('jobs',$jobs);

    }


   public function Paytan(){
        return redirect::to('http://154.72.81.110:8082/paytan/');
    }




    public function backEnd(){
        return view('adminFolder/adminMain');
    }
}
