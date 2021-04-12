<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
/**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequest()
    {
        return view('ajaxExample');
    }


    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequestStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'=>'required'
            'password' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        if ($validator->passes()) {

            // Store Data in DATABASE from HERE 

            return response()->json(['success'=>'Added new records.']);
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }
}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\CustomerController  $customerController
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerController $customerController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerController  $customerController
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerController $customerController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerController  $customerController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerController $customerController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerController  $customerController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerController $customerController)
    {
        //
    }
}
