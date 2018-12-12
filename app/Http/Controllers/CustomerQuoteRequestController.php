<?php

namespace App\Http\Controllers;

use DB;
use App\customerQuoteRequest;
use Illuminate\Http\Request;

class CustomerQuoteRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      /*  $customerQuoterequest = DB::table('customer_quote_requests')
            ->get();
        return view('adminFolder/viewQouteRequest')->with('customerQuoterequest',$customerQuoterequest);*/

       if($customerQuoterequest = DB::table('customer_quote_requests')
            ->join('customer_query_responses','customer_query_responses.customerQueryTrackerID','=','customer_quote_requests.id','left outer')
            ->select('customer_query_responses.customerNumberAvailability',
                'customer_query_responses.numberOfDials',
                'customer_query_responses.customerType',
                'customer_query_responses.customerLocation',
                'customer_query_responses.productChoice',
                'customer_query_responses.gender',
                'customer_query_responses.queryDescription',
                'customer_query_responses.assignedTo',
                'customer_quote_requests.requesterName',
                'customer_quote_requests.requesterEmail',
                'customer_quote_requests.requesterMobilenumber',
                'customer_quote_requests.requesterProduct',
                'customer_quote_requests.requesterLocation',
                'customer_quote_requests.requesterJob',
                'customer_quote_requests.requesterJobLocation',
                'customer_quote_requests.quote_requests_status',
                'customer_quote_requests.created_at')
            ->get()){

            #return json_encode($customerQuoterequest);

            return view('adminFolder/viewQouteRequest')
                ->with('customerQuoterequest',$customerQuoterequest);

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
     * @param  \App\customerQuoteRequest  $customerQuoteRequest
     * @return \Illuminate\Http\Response
     */
    public function show(customerQuoteRequest $customerQuoteRequest)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customerQuoteRequest  $customerQuoteRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(customerQuoteRequest $customerQuoteRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customerQuoteRequest  $customerQuoteRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customerQuoteRequest $customerQuoteRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customerQuoteRequest  $customerQuoteRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(customerQuoteRequest $customerQuoteRequest)
    {
        //
    }
}
