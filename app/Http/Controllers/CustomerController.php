<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = DB::table('customers')
            ->get();

        
        return view('customers.index', ['customers' => $customers]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.add');
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
        $request->validate([

            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phonenumber' => 'required|integer',
        ]);

        DB::table('customers')->insert([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phonenumber'=> $request->phonenumber,
        ]);

        return redirect()->route('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $id = $request->id;

        $customers = DB::table('customers')
            ->where('id', $id)
            ->get();

        return view('customers.edit', ['customers' => $customers]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request->id;

        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phonenumber' => 'required|integer',
            
        ]);

        $update_query = DB::table('customers')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
            ]);

        return redirect()->route('customers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }

    public function delete(Request $request)
    {
        //
        $id=$request->id;

        Customer::destroy($id);

        return redirect()->route('customers');
    }
}