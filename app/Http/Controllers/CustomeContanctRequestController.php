<?php

namespace App\Http\Controllers;

use DB;
use App\customeContanctRequest;
use Illuminate\Http\Request;

class CustomeContanctRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if($customerContactrequest = DB::table('custome_contanct_requests')
            ->join('customer_query_responses','customer_query_responses.customerQueryTrackerID','=','custome_contanct_requests.id','left outer')
            ->select('customer_query_responses.customerNumberAvailability',
                'customer_query_responses.numberOfDials',
                'customer_query_responses.customerType',
                'customer_query_responses.customerLocation',
                'customer_query_responses.productChoice',
                'customer_query_responses.gender',
                'customer_query_responses.queryDescription',
                'customer_query_responses.assignedTo',
                'custome_contanct_requests.customerName',
                'custome_contanct_requests.customerPhoneNumber',
                'custome_contanct_requests.subject',
                'custome_contanct_requests.message',
                'custome_contanct_requests.contact_requests_status',
                'custome_contanct_requests.created_at')
            ->get()){

            #return json_encode($customerContactrequest);

            return view('adminFolder/viewCustomerContactRequest')
                ->with('customerContactrequest',$customerContactrequest);

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
     * @param  \App\customeContanctRequest  $customeContanctRequest
     * @return \Illuminate\Http\Response
     */
    public function show(customeContanctRequest $customeContanctRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customeContanctRequest  $customeContanctRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(customeContanctRequest $customeContanctRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customeContanctRequest  $customeContanctRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customeContanctRequest $customeContanctRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customeContanctRequest  $customeContanctRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(customeContanctRequest $customeContanctRequest)
    {
        //
    }
}
