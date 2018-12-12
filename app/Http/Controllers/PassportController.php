<?php

namespace App\Http\Controllers;
use App\customeContanctRequest;
use App\customerQuoteRequest;
use App\customerQueryResponse;
use App\Http\Controllers\Controller;
use Mail;
use DB;
use App\Mail\QuotationEmail;

use App\User;

use Illuminate\Support\Facades\Auth;

use Validator;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    //
    public $successStatus = 200;



    /**

     * login api

     *

     * @return \Illuminate\Http\Response

     */

    public function login(){

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){

            $user = Auth::user();

            $success['token'] =  $user->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], $this->successStatus);

        }else{

            return response()->json(['error'=>'Unauthorised'], 401);

        }

    }



    /**

     * Register api

     *

     * @return \Illuminate\Http\Response

     */

    public function register(Request $request)

    {

        $validator = Validator::make($request->all(), [

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required',

            'c_password' => 'required|same:password',

        ]);



        if ($validator->fails()) {

            return response()->json(['error'=>$validator->errors()], 401);

        }



        $input = $request->all();

        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $success['token'] =  $user->createToken('MyApp')->accessToken;

        $success['name'] =  $user->name;



        return response()->json(['success'=>$success], $this->successStatus);

    }



    /**

     * details api

     *

     * @return \Illuminate\Http\Response

     */

    public function getDetails()

    {

        $user = Auth::user();

        return response()->json(['success' => $user], $this->successStatus);

    }




    public function logCustomerContactRequest(Request $request){

        $rule = [
            'name' => 'required|string|max:255',
            'phonenumber' => 'required|numeric|digits:12',
            'subject' => 'string|max:255',
            'message' => 'required|string|max:255'
        ];

        Validator::make($request->all(),$rule);


        $customeContanctRequest = new customeContanctRequest();

        $customeContanctRequest->customerName = $request['name'];
        $customeContanctRequest->customerPhoneNumber = $request['phonenumber'];
        $customeContanctRequest->subject = $request['subject'];
        $customeContanctRequest->message = $request['message'];
        $customeContanctRequest->contact_requests_status = 'pending';

        if($customeContanctRequest->save()){

            return response()->json([
                'response' =>  'Contact request have been received ',
                'Status_description' => 'Success',
                'Status_code' => 200]);

        }else{

            return response()->json([
                'response' =>  'Request could not be completed ',
                'Status_description' => 'error',
                'Status_code' => 300]);

        }


    }


    public function customerQuoteRequest(Request $request){

        $rule = [
            'requesterName' => 'required|string|max:255',
            'requesterEmail' => 'required|email|max:500',
            'requesterMobilenumber' => 'required|numeric|digits:12',
            'requesterProduct' => 'required|string|max:255',
            'requesterLocation' => 'required|string|max:255',
            'requesterJob' => 'required|string|max:255',
            'requesterJobLocation'=> 'required|string|max:255'
        ];

        Validator::make($request->all(),$rule);

        $customerQuoterequest = new customerQuoteRequest();

        $customerQuoterequest->requesterName = $request['requesterName'];
        $customerQuoterequest->requesterEmail = $request['requesterEmail'];
        $customerQuoterequest->requesterMobilenumber = $request['requesterMobilenumber'];
        $customerQuoterequest->requesterProduct = $request['requesterProduct'];
        $customerQuoterequest->requesterLocation = $request['requesterLocation'];
        $customerQuoterequest->requesterJob = $request['requesterJob'];
        $customerQuoterequest->requesterJobLocation = $request['requesterJobLocation'];
        $customerQuoterequest->quote_requests_status = 'pending';




        if($customerQuoterequest->save()) {

            Mail::to($request['requesterEmail'])->send(new QuotationEmail($request['requesterName']));

            return response()->json([
                'response' => 'Contact request have been received ',
                'Status_description' => 'Success',
                'Status_code' => 200]);



        }else{

            return response()->json([
                'response' =>  'Request could not be completed ',
                'Status_description' => 'error',
                'Status_code' => 300]);

        }

    }

    public function customerContactResponse(Request $request){




    }

    public function customerQuoteResponse(Request $request){

        $rule = [
            'numberAvailability' => 'required',
            'numberOfDials' => 'required',
            'customerType' => 'required',
            'customerLocation' => 'required|string',
            'customerProduct' => 'required',
            'customerGender' => 'required',
            'customerQueryDsc'=> 'required',
            'requestAssignedTo' => 'required'
        ];

        Validator::make($request->all(),$rule);

        $customerQueryResponse = new customerQueryResponse();

        /*$requestID = DB::table('custommer_query_trackers')
            ->where('')*/

        $customerQueryResponse->customerNumberAvailability = $request['numberAvailability'];
        $customerQueryResponse->numberOfDials = $request['numberOfDials'];
        $customerQueryResponse->customerType = $request['customerType'];
        $customerQueryResponse->customerLocation = $request['customerLocation'];
        $customerQueryResponse->productChoice = $request['customerProduct'];
        $customerQueryResponse->gender = $request['customerGender'];
        $customerQueryResponse->queryDescription = $request['customerQueryDsc'];
        $customerQueryResponse->assignedTo = $request['requestAssignedTo'];
        $customerQueryResponse->customerQueryTrackerID = $request['requestID'];




        if($customerQueryResponse->save()) {

            #Update quote request status
            if(DB::table('customer_quote_requests')
                ->where('id', $request['requestID'])
                ->update([  'quote_requests_status' => 'responded'
                ])){

                return response()->json([
                    'response' => 'Contact request have been received ',
                    'Status_description' => 'Success',
                    'Status_code' => 200]);
            }


            #Mail::to($request['requesterEmail'])->send(new QuotationEmail($request['requesterName']));





        }else{

            return response()->json([
                'response' =>  'Request could not be completed ',
                'Status_description' => 'error',
                'Status_code' => 300]);

        }


    }


}
