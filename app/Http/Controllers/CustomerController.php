<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Customer_addresses;
 
 use App\Http\Resources\Customer as CustomerResource;

 class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 



    public function index(Request $request)
    {

        if($request->get('search')){
          $customers = Customer::where('Sname',$request->get('search'))->paginate(50);
        }else{
          $customers = Customer::oldest('id')->paginate(50);

        }
        return view('customers.index',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function api($id)
    {
        if($id !='ALL'){
            return new CustomerResource(Customer::leftjoin('customer_addresses', 'customer_addresses.ca_id', '=', 'customers.id')
             ->select('customers.*', 'customer_addresses.*')
             ->find($id));
        }else{
             return new CustomerResource(Customer::leftjoin('customer_addresses', 'customer_addresses.ca_id', '=', 'customers.id')
             ->select('customers.*', 'customer_addresses.*')
             ->find($id));
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate([
            'Fname' => 'required',
            'Sname' => 'required',
        ]);
        Customer::create($request->all());
        return redirect()->route('customers.index')
                        ->with('success','New Customer created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $customer = Customer::find($id);
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $customer = Customer::find($id);

/*
        $customer = Customer::
        where('id', $id)
        ->join('customer_addresses','customer_addresses.customer_id','=','customers.id')
        ->first();
        */
       
      $customer = Customer::
            leftjoin('customer_addresses', 'customer_addresses.ca_id', '=', 'customers.id')
             ->select('customers.*', 'customer_addresses.*')
             ->find($id);
            
         return view('customers.edit',compact('customer'));
    }

 
     public function update(Request $request, $id)
    {
        request()->validate([
            'Fname' => 'required',
            'Sname' => 'required',
        ]);
 
        // update customer table
        Customer::where('id', $id)
        ->update(['Fname' => $request->get("Fname"),'Sname' => $request->get("Sname"),'Email' => $request->get("Email")]);

        //update address table
        Customer_addresses::where('customer_id', $id)
        ->update(['Country' => $request->get("Country"),'State' => $request->get("State"),'Zip' => $request->get("Zip"),'Street' => $request->get("Street"),'House' => $request->get("House")]);


        return redirect()->route('customers.index')
        ->with('success','Customer updated successfully');
        /*
        Customer::find($id)->update($request->all());
        return redirect()->route('customers.index')
        ->with('success','Customer updated successfully');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Customer::find($id)->delete();
        return redirect()->route('customers.index')
        ->with('success','Customer deleted successfully');
    }
}
