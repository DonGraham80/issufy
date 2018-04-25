<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Customer_addresses;
 
 use App\Http\Resources\Customer as CustomerResource;

 class Intro extends Controller
{
   
  public function index()
    {
         print "hi";
         //return view('Introduction.index',compact('Introduction'))
    }

   }
