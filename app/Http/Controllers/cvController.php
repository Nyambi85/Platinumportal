<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Validator;
use ValidatesRequests;
use App\jobHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\UserCV;
use App\education;
use App\skills;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class cvController extends Controller
{
    public function __construct() {
        $this->middleware('auth'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




#####User ID
        $userJson = Auth::user();
        $userID = $userJson["id"];



      if(!Auth::user()->hasPermissionTo('apply Job')){
        #####User ID
        $userJson = Auth::user();
        $userID = $userJson["id"];

        #$cvData = null;
           $cvData = DB::table('user_c_vs')
               ->select('user_c_vs.*')
               ->where('user_c_vs.userId', '=' ,$userID )->get();

           $parametersdata = DB::table('education')
               ->select('education.*')
               ->where('education.userCVID','=',$cvData[0]->id);

           if(count($parametersdata) == 0 ){

               $parametersdata = array( array(
                   # 'personalMobileNumber' => '',
                   # 'homeNumber' => '',
                   #'mail' => '',
                   #'officeMail' => '',
                   #'country' => '',
                   #'region' => '',
                   #'district' => '',
                   'educationLevel' => '',
                   'institutionName' => '',
                   'course'=> '',
                   'skillName' => '',
                   'SkillDescription' => '',
                   'skillName' => '',
                   'SkillDescription' => ''

               ));
               $parametersdata = json_decode(json_encode($parametersdata),true);
               $parameters = array(
                   'errorNote' => '',
                   'tabData' => '',
                   'id' => '',
                   'data' =>  $cvData,
                   'moreData' => 0
               );

               #$parameters = json_encode($parameters);
               return view('LoadCV/viewCv')->with('parameters',$parameters);
           }


           $parameters = array(
               'errorNote' => '',
               'tabData' => '',
               'id' => '',
               'data' =>  $cvData,
               'moreData' => $parametersdata
           );

#return $parameters;

           return view('LoadCV/viewCv')->with('parameters',$parameters);


        }else{

           $parameters = array(
               'errorNote' => '',
               'tabData' => '',
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
        //
    }


    public function viewfile(){

        $userDetail = DB::table('userAccounts')->where('userId',$userID)->get();
        $clientCompany = DB::table('clientCompanies')->get();
        $products = DB::table('products')->get();

        $parameters = [
            'errorNote' => '',
            'data' => [
                'clientCompanies' => $clientCompany,
                'userdetails' => $userDetail,
                'products' => $products],
            'tabData' => ''];

        $pdf = PDF::loadView('loan/viewloanForm',['parameters'=>$parameters]);
        return $pdf->download('Loan_Application_Contract.pdf');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //Candidate personal details
        if($request->pageForm == 'persanalDetails'){



            $validator = \Validator::make($request->all(),
                [
                    'firstName'=>'required|max:250',
                    'Surname' => 'required|max:250',
                    'dateOfBirth' => 'require|max:250',
                    'passprtPicture' => 'required|max:500',
                    'nationality' => 'required|max:250',
                    'gender' => 'required',
                    'applicatRace' => 'required',
                    'birthPassport' => 'required',
                    'maritalStatus' => 'required',
                    'numberOfDependency' => 'required'
                ]);



            if($validator->fails()){
                $parameters = array(
                    'errorNote' => 'fail',
                    'tabData' => 'persanalDetails',
                    'id' => ''
                );
                return view('LoadCV/createClient')->with('parameters',$parameters);
            }

            #####User ID
            $userJson = Auth::user();
            $userID = $userJson["id"];


            $passPortPicture = $request->file('passprtPicture')->getPathname();
            $imageName = $request->file('passprtPicture')->getClientOriginalName();
            $destinationPath = public_path('assets/passPortPicture/');
            $request->file('passprtPicture')->move($destinationPath , $imageName);
            $passPortPicturePath = $imageName;

            $passPortBirthCertificate = $request->file('birthPassport')->getPathname();
            $imageName = $request->file('birthPassport')->getClientOriginalName();
            $destinationPath = public_path('assets/birthCertificatOrPassport/');
            $request->file('birthPassport')->move($destinationPath , $imageName);
            $passPortBirthCertificatePath = $imageName;

            if(isset($request['driverLisense'])){

                $driverLisense = $request->file('driverLisense')->getPathname();
                $imageName = $request->file('driverLisense')->getClientOriginalName();
                $destinationPath = public_path('assets/driverLisence/');
                $request->file('driverLisense')->move($destinationPath , $imageName);
                $driverLisense = $imageName;
            }else{

                $driverLisense = '';
            }


         /*   $passPortBirthCertificate = $request->file('birthPassport')->getPathname();
            $imageName = $request->file('birthPassport')->getClientOriginalName();
            $destinationPath = public_path('assets/birthCertificatOrPassport/');
            $request->file('birthPassport')->move($destinationPath , $imageName);
            $passPortBirthCertificatePath = $destinationPath;*/



            ###insert into a table User CV
        /*    $User_CV_id = DB::table('user_c_vs')->insertGetId(
                array(
                    'firstName' => $request['firstName'],
                    'middleName' => $request['middleName'],
                    'Surname' => $request['Surname'],
                    'passprtPicture' => $passPortPicturePath,
                    'dateOfBirth' => $request['start'],
                    'nationality' => $request['nationality'],
                    'gender' => $request['gender'],
                    'race' => $request['applicatRace'],
                    'birthPassport' => $passPortBirthCertificatePath,
                    'martalStatus' => $request['maritalStatus'],
                    'numberOfDependencies' => $request['numberOfDependency'],
                    'driverLissence' => $driverLisense,
                    'userId' => $userID
                        )
            );*/


            $userCV = new UserCV();

            $userCV->firstName = $request['firstName'];
            $userCV->middleName = $request['middleName'];
            $userCV->Surname = $request['Surname'];
            $userCV->passprtPicture = $passPortPicturePath;
            $userCV->dateOfBirth = $request['start'];
            $userCV->nationality = $request['nationality'];
            $userCV->gender = $request['gender'];
            $userCV->race = $request['applicatRace'];
            $userCV->birthPassport = $passPortBirthCertificatePath;
            $userCV->martalStatus = $request['maritalStatus'];
            $userCV->numberOfDependencies = $request['numberOfDependency'];
            $userCV->driverLissence = $driverLisense;
            $userCV->userId = $userID;




            if($userCV->save()){

                $parameters = array(
                    'errorNote' => 'success',
                    'tabData' => 'persanalDetails',
                    'id' => $userCV->id
                );

            }else{

                $parameters = array(
                    'errorNote' => 'fail',
                    'tabData' => 'persanalDetails',
                    'id' => ''
                );

            }

            return view('LoadCV/createClient')->with('parameters',$parameters);

        }elseif ($request->pageForm == 'contactDetails'){

            $this->validate($request, [
                'mobileNumber'=>'required|max:250',
                'officalMail' => 'required|max:250',
                'country' => 'required|max:250',
                'region' => 'required',
                'district' => 'required|max:250'
            ]);



            ###insert into a table User CV
            $User_CV_id = DB::table('user_c_vs')
                ->where('id' , $request['id'])
                ->update(
                    array(
                        'personalMobileNumber' => $request['mobileNumber'],
                        'homeNumber' => $request['homeNumber'],
                        'mail' => $request['email'],
                        'officeMail' => $request['officalMail'],
                        'country' => $request['country'],
                        'region' => $request['region'],
                        'district' => $request['district']
                    )
            );


            if(isset($User_CV_id)){

                $parameters = array(
                    'errorNote' => 'success',
                    'tabData' => 'contactDetails',
                    'id' => $User_CV_id
                );

            }else{

                $parameters = array(
                    'errorNote' => 'fail',
                    'tabData' => 'contactDetails',
                    'id' => $request['id']
                );
            }

            return view('LoadCV/createClient')->with('parameters',$parameters);
            #return json_encode($parameters);

        }elseif($request->pageForm == 'educationDetails'){

            $this->validate($request, [
                'collegeName'=>'required|max:250',
               'courseName' => 'required|max:250',
              'mainCourseCertificateCopy' => 'required|max:250'
            ]);

            #$request['id'] = 1;
            $CVid = '';

            if(empty($request['id']) || $request['id'] == ""){

                #####User ID
                $userJson = Auth::user();
                $userID = $userJson["id"];

                $CVid = DB::table('user_c_vs')
                    ->where('user_c_vs.userId','=',$userID)->value('id');

               # return ($CVid);

            }else{

                $CVid =  $request['id'];

            }


            $mainCourseCertificateCopy = $request->file('mainCourseCertificateCopy')->getPathname();
            $imageName = $request->file('mainCourseCertificateCopy')->getClientOriginalName();
            $destinationPath = public_path('assets/mainCourseCertificateCopy/');
            $request->file('mainCourseCertificateCopy')->move($destinationPath , $imageName);
            $mainCourseCertificateCopyPath = $imageName;

            $education = new education();
            $education->educationLevel = $request['eductionLevel'];
            $education->institutionName = $request['collegeName'];
            $education->course = $request['courseName'];
            $education->certificateCopy = $mainCourseCertificateCopyPath;
            $education->startYear = $request['start'];
            $education->finalYear = $request['finish'];
            $education->userCVID = $CVid;

            $education->save();


            ############GIve permission to apply for Job
            $user = DB::table('users')
                ->where('id','=',$userID);

            Auth::user()->givePermissionTo('apply Job');


            ###insert into a table Education
        /*    $id = DB::table('education')->insertGetId(
                array(
                    'educationLevel' => $request['eductionLevel'],
                    'institutionName' => $request['collegeName'],
                    'course' => $request['courseName'],
                    'certificateCopy' => $request['mainCourseCertificateCopy'],
                    'startYear' => $request['start'],
                    'finalYear' => $request['finish'],
                    'userCVID' => $CVid
                )
            );*/

            ####if we have additional Education
            if(isset($request['addtionCollegeName']) && $request['addtionCollegeName'] != null &&
                $request['addtionCollegeName'] != ''){

                $additionCourseCertificateCopyCopy = $request->file('additionCourseCertificateCopy')->getPathname();
                $imageName = $request->file('additionCourseCertificateCopy')->getClientOriginalName();
                $destinationPath = public_path('assets/additionCourseCertificateCopy/');
                $request->file('additionCourseCertificateCopy')->move($destinationPath , $imageName);
                $additionCourseCertificateCopyPath = $destinationPath;

                $education = new education();
                $education->educationLevel = $request['additioEductionLevel'];
                $education->institutionName = $request['addtionCollegeName'];
                $education->course = $request['additionCourseName'];
                $education->certificateCopy = $additionCourseCertificateCopyPath;
                $education->userCVID = $CVid;

                $education->save();

            }





            if(isset($request['skillOne']) && $request['skillOne'] != null
            && $request['skillOne'] != ''){

                $skill = new skills();
                $skill->skillName = $request['skillOne'];
                $skill->SkillDescription = $request['skillOneDesc'];
                $skill->userCVID = $CVid;

                $skill->save();

            }elseif (isset($request['skillTwo']) && $request['skillTwo'] != null
                && $request['skillTwo'] != ''){

                $skill = new skills();
                $skill->skillName = $request['skillTwo'];
                $skill->SkillDescription = $request['skillTwoDesc'];
                $skill->userCVID = $CVid;

                $skill->save();

            }



            ######insert into Skills table
     /*       $id = DB::table('skills')->insertGetId(
                array(
                    'skillName' => $request['skillOne'],
                    'SkillDescription' => $request['collegeName'],
                    'userCVID' => $request['id']
            )
        );*/



            ###if we have addition Skills


            if(isset($id)){

                $parameters = array(
                    'errorNote' => 'success',
                    'tabData' => 'contactDetails',
                    'id' => $CVid
                );

            }else{

                $parameters = array(
                    'errorNote' => 'fail',
                    'tabData' => 'contactDetails',
                    'id' => $CVid
                );
            }
            return view('LoadCV/createClient')->with('parameters',$parameters);


        }elseif ($request->pageForm == 'jobHistoryDetails'){


            $this->validate($request, [
                'companyName'=>'required|max:250',
                'companyLocation' => 'required|max:250',
                'start' => 'required',
                'finish' => 'required',
                'natureOfBussiness' => 'required',
                'jobTitle' => 'required',
                'jobType' => 'required|max:250',
                'jobSalary' => 'required',
                'resonForLeaving' => 'required'
            ]);

            $request['id'] = 1;

            $jobHistory = new jobHistory();

            $jobHistory->companyName = $request['companyName'];
            $jobHistory->Location = $request['companyLocation'];
            $jobHistory->natureOfBussinaes = $request['natureOfBussiness'];
            $jobHistory->start = $request['start'];
            $jobHistory->finish = $request['finish'];
            $jobHistory->jobTitle = $request['jobTitle'];
            $jobHistory->jobType = $request['jobType'];
            $jobHistory->salary = $request['jobSalary'];
            $jobHistory->reasonForLeaving = $request['resonForLeaving'];
            $jobHistory->userCVID = $request['id'];



            ###if we have addition Skills


            if($jobHistory->save()){

                $parameters = array(
                    'errorNote' => 'success',
                    'tabData' => 'contactDetails',
                    'id' => ''
                );

            }else{

                $parameters = array(
                    'errorNote' => 'fail',
                    'tabData' => 'contactDetails',
                    'id' => ''
                );
            }
            return view('LoadCV/createClient')->with('parameters',$parameters);



        }






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


        $parameters = array(
            'errorNote' => '',
            'tabData' => '',
            'id' => ''
        );
        return view('LoadCV/createClient')->with('parameters',$parameters);
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

