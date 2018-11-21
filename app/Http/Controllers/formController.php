<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\nominationVote;
use Auth;
use DB;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function nomintaionform(){

        $parameters = ['errorNote' => '','data' => '', 'tabData' => ''];

        return view('form/nominationForm')->with('parameters',$parameters);
    }


    public function postnomintaionform(Request $request){

        $this->validator($request->all())->validate();

        $nominationVote = new nominationVote();

        $userJson = Auth::user();
        $userID = $userJson["id"];

        $data = $request->all();

        if(DB::table('nominations')
            ->where('nominationStatus','=','open')->exists()){

            $nominationID = DB::table('nominations')
                ->where('nominationStatus','=','open')->value('id');


            #return json_encode($data['nomineeName']);

            $nominationVote->nomineeName = $data['nomineeName'];
            $nominationVote->nomineeEmail = $data['nomineeEmail'];
            $nominationVote->nomineeTitle = $data['nomineeTitle'];
            $nominationVote->departmentID = $data['departmentID'];
            $nominationVote->nominationID = $nominationID;
            $nominationVote->teamworkCriteria = $data['teamworkCriteria'];
            $nominationVote->perfomanceCriteria = $data['perfomanceCriteria'];
            $nominationVote->generlaCoonductCriteria = $data['generlaCoonductCriteria'];
            $nominationVote->customerServiceCriteria = $data['customerServiceCriteria'];
            $nominationVote->accomplishmentCriteria = $data['accomplishmentCriteria'];
            $nominationVote->voterID = $userID;


            if(DB::table('nomination_votes')
                    ->where('nomination_votes.voterID','=',$userID)
                    ->where('nomination_votes.nominationID','=',$nominationID)->exists()){

                $parameters = ['errorNote' => 'notification','data' => $data['nomineeEmail'], 'tabData' => 'repeater'];
                return view('form/nominationForm')->with('parameters',$parameters);


            }else {

                if((DB::table('registeredStaffs')
                        ->where('registeredStaffs.staffMail','=',$data['nomineeEmail'])) &&
                    (DB::table('users')
                        ->where('users.email','=',$data['nomineeEmail'])->exists())){

                    if($nominationVote->save()){
                        $parameters = ['errorNote' => 'success','data' => 'Your vote has been casted', 'tabData' => ''];
                        return view('form/nominationForm')->with('parameters',$parameters);

                    }else{

                        $parameters = ['errorNote' => '','data' => '', 'tabData' => ''];

                        return redirect()->back()->with($parameters);

                    }

                }else{

                    $parameters = ['errorNote' => 'notification','data' => $data['nomineeEmail'], 'tabData' => 'NotPCLStaff'];
                    return view('form/nominationForm')->with('parameters',$parameters);
                }

            }



        }else{

            $parameters = ['errorNote' => 'notification','data' => $data['nomineeEmail'], 'tabData' => 'Notchallenge'];
            return view('form/nominationForm')->with('parameters',$parameters);

        }


    }


    protected function validator(array $data)
    {

        $rule = [
            'nomineeName' => 'required|string|max:255',
            'nomineeEmail' => 'required|string|email|max:255',
            'nomineeTitle' => 'required|string|max:255',
            'departmentID' => 'numeric',
            'teamworkCriteria' => 'required|string|max:1500',
            'perfomanceCriteria' => 'required|string|max:1500',
            'generlaCoonductCriteria' => 'required|string|max:1500',
            'customerServiceCriteria' => 'required|string|max:1500',
            'accomplishmentCriteria' => 'required|string|max:1500'
        ];

        /* $messages = [
           'firstname.string' => 'The mame must be alphabetical.'
         ];*/

        return Validator::make($data,$rule);

    }


    public function viewNomination(){

        $nominationID = DB::table('nominations')
            ->where('nominationStatus','=','open')->pluck('id');

        #for nomination
        $candidateList = DB::table('nomination_votes')
            #->join('users','users.email','=','nomination_votes.nomineeEmail')
            ->where('nomination_votes.nominationID','=',$nominationID)
            ->select('nomination_votes.nomineeEmail',DB::raw('count(nomination_votes.id) as voteCount'))
            ->groupBy('nomination_votes.nomineeEmail')
            ->orderBy('voteCount','desc')
            ->first();


       $nominationlist = DB::table('nomination_votes')
           ->join('users','nomination_votes.voterID','=','users.id')
           ->join('departments','departments.id','=','nomination_votes.departmentID')
           ->select('nomination_votes.nomineeName','users.name',
               'users.email','nomination_votes.created_at','nomination_votes.departmentID',
               'departments.departmentName','nomination_votes.id')
           ->where('nomination_votes.nomineeEmail','=',$candidateList->nomineeEmail)
           ->get();




        $parameters = [
                'errorNote' => '',
                'data' => $nominationlist,
                'tabData' => ''
            ];

        #return json_encode($parameters);

        return view('adminFolder/viewNominationReport')->with('parameters',$parameters);;
    }

    public function viewNominationvote($id){

        $nominationlist = DB::table('nomination_votes')
            ->join('departments','departments.id','=','nomination_votes.departmentID')
            ->select('nomination_votes.*','departments.departmentName')
            ->where('nomination_votes.id','=',$id)
            ->get();
        #return json_encode($nominationlist);
        $parameters = [
            'errorNote' => '',
            'data' => $nominationlist,
            'tabData' => ''
        ];

        return view('adminFolder/viewNominationVote')->with('parameters',$parameters);
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
