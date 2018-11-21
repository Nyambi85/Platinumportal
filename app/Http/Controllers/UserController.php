<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//Enables us to output flash messaging
use Session;


class UserController extends Controller
{
    public function __construct() {
        //$this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //Get all users and pass it to the view
       # $users = User::all();

        $users = DB::table('users')
            ->join('model_has_permissions','model_has_permissions.model_id','=','users.id')
            ->select('users.*')
            ->where('model_has_permissions.permission_id','<>',2)
            ->groupBy('users.id')
            ->get();

       return view('manageUsers.listUsers')->with('users', $users);
       # return json_encode($users);


    }





    public function viewApplicant(){

        $jobs = DB::table('jobs')
            ->where('jobs.expireDate','>',now())->get();


        $jobs1 = DB::table('applied_jobs')->get();

        $permission = DB::table('model_has_permissions')
            ->select('model_has_permissions.*')
            ->where('model_has_permissions.permission_id','=',2)->get();


        $users = DB::table('user_c_vs')
            ->join('users','users.id','=','user_c_vs.userId')
            ->select('users.*','user_c_vs.*')
            ->get();


        /*->select('users.*','user_c_vs.nationality','user_c_vs.gender','user_c_vs.dateOfBirth',
            'user_c_vs.region','jobs.jobTitle','education.educationLevel','applied_jobs.*')
            ->where('model_has_permissions.permission_id','=',2)*/

        $parameters = array(
            'job' => $jobs,
            'users' => $users
        );

        return view('manageApplicant.viewApplicant')->with('parameters', $parameters);
        #return json_encode($jobs);

    }





    public function filterApllicant(Request $request){

        $jobs = DB::table('jobs')
            ->where('jobs.expireDate','>',now())->get();

        $users = DB::table('users')
            ->join('model_has_permissions','model_has_permissions.model_id','=','users.id')
            ->join('user_c_vs','user_c_vs.userId','=','users.id')
            ->join('education','education.userCVID','=','user_c_vs.id')
            ->join('applied_jobs','applied_jobs.userId','=','users.id')
            ->join('jobs','jobs.id','=','applied_jobs.jobID')
            ->select('users.*','user_c_vs.nationality','user_c_vs.gender','user_c_vs.dateOfBirth',
                'user_c_vs.region','jobs.jobTitle','education.educationLevel','applied_jobs.coverLetter','applied_jobs.ampitutudeResult',
                'applied_jobs.resultStatus')
            ->where('model_has_permissions.permission_id','=',2)
            ->where('applied_jobs.jobID','like','%'.$request['job'].'%')
          #  ->where('user_c_vs.gender','=',$request['gender'])
         #   ->where('user_c_vs.nationality','like','%'.$request['nationality'].'%')
         #   ->where('education.educationLevel','like','%'.$request['educationLevel'].'%')
         #   ->where('applied_jobs.resultStatus','like','%'.$request['aptitudeResult'].'%')
            ->get();

        $parameters = array(
            'job' => $jobs,
            'users' => $users
        );


        return view('manageApplicant.viewApplicant')->with('parameters', $parameters);
        #return json_encode($users);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //Get all roles and pass it to the view
        $roles = Role::get();
        return view('users.create', ['roles'=>$roles]);
    }


    public function editUser()
    {
        $permission = Permission::all();

        $parameters = array(
            'errorNote' => '',
            'tabData' => '',
            'permission' => $permission,
            'id' => ''
        );

        return view('manageUsers/editUser')->with('parameters',$parameters);

        #return json_encode($parameters);

    }


    public function editProfile(Request $request){

        $this->validate($request, [
            'firstName'=>'required|max:250',
            'Surname' => 'required|max:250',
            'passprtPicture' => 'required|max:500',
            ]);

        foreach ($request['check'] as $permission){

            $user = User::where('id','=',$request['id'])->first();
            $user->givePermissionTo($permission);

        }



        $User = DB::table('users')
            ->where('id' , $request['id'])
            ->update(
                array(
                    'name' => $request['firstName'],
                    'middleName' => $request['middleName'],
                    'surName' => $request['Surname'],
                    'profilePicture' => $request['passprtPicture']
                )
            );


        if(isset($User_CV_id)){

            $parameters = array(
                'errorNote' => 'success'
            );

        }else{

            $parameters = array(
                'errorNote' => 'fail'
            );
        }

        return view('manageUsers/editUser')->with('parameters',$parameters);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //Validate name, email and password fields
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);

        $user = User::create($request->only('email', 'name', 'password')); //Retrieving only the email and password data

        $roles = $request['roles']; //Retrieving the roles field
        //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r); //Assigning role to user
            }
        }
        //Redirect to the users.index view and display message
        return redirect()->route('users.index')
            ->with('flash_message',
                'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $permission = DB::table('permissions')
            ->join('model_has_permissions','model_has_permissions.permission_id','=','permissions.id')
            ->select('permissions.*')
            ->where('model_has_permissions.model_id','=',$id)->get();

        $users = DB::table('users')
            ->join('model_has_permissions','model_has_permissions.model_id','=','users.id')
            ->select('users.*')
            ->where('users.id','=',$id)->get();

        $parameters = array(
            'permission' => $permission,
            'user' => $users[0]
        );

        #return json_encode($permission);

        return view('manageUsers/viewUser')->with('parameters', $parameters);
        #return json_encode($parameters);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $user = User::findOrFail($id); //Get user with specified id
        $roles = Role::get(); //Get all roles

        return view('users.edit', compact('user', 'roles')); //pass user and roles data to view

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id) {
        $user = User::findOrFail($id); //Get role specified by id

        //Validate name, email and password fields
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:6|confirmed'
        ]);
        $input = $request->only(['name', 'email', 'password']); //Retreive the name, email and password fields
        $roles = $request['roles']; //Retreive all roles
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
        }
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        return redirect()->route('users.index')
            ->with('flash_message',
                'User successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //Find a user with a given id and delete
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('flash_message',
                'User successfully deleted.');
    }
}
