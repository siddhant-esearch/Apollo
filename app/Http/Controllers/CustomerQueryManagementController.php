<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\ProductForm;
use App\Query;
use App\ContactForm;
class CustomerQueryManagementController extends Controller
{
    //backend

     public function customerqueries()
     {
          $data= ContactForm::orderBy('id', 'desc')->get();
       return view('admin/queries/customer-queries',compact('data'));
     }


 public function productpagequeries()
     {
          $data= ProductForm::orderBy('id', 'desc')->get();
       return view('admin/queries/product-page-queries',compact('data'));
     }



 public function customerenquiries()
     {
          $data= Query::orderBy('id', 'desc')->get();
       return view('admin/queries/customer-enquiries',compact('data'));
     }







    //frontend
    public function submitenquriyform(Request $request)
    {
    $Query = new Query();
    $Query->customer_name = $request->input('customer_name');
    $Query->customer_email = $request->input('customer_email');
    $Query->subject = $request->input('subject');
    $Query->message = $request->input('message');
    $Query->save();
   return back()->with('message','Thank You! We will contact with you shortly.');
    }

    public function submitproductqueryform(Request $request)
    {
    $ProductForm = new ProductForm();
    $ProductForm->name = $request->input('name');
    $ProductForm->email = $request->input('email');
    $ProductForm->mobile = $request->input('mobile');
    $ProductForm->city = $request->input('city');
    $ProductForm->save();
   return back()->with('message','Thank You! We will contact with you shortly.');
    }

    public function submitcontactqueryform(Request $request)
    {
    $ContactForm = new ContactForm();
    $ContactForm->name = $request->input('name');
    $ContactForm->email = $request->input('email');
    $ContactForm->mobile = $request->input('mobile');
    $ContactForm->message = $request->input('message');
    $ContactForm->save();
     return back()->with('message','Thank You! We will contact with you shortly.');
    }



}
