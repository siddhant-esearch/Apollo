<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Slider;
use DB;
use Auth;
use App\Contact;
use App\FAQ;
use App\FAQIMG;
use App\Gallery;
use App\Banner;
use App\AboutContent;
use App\IndexData;
use App\Discount;
use App\Service;
use App\CustomerQus;
use App\ServiceDetail;
use App\Product;
use App\ProductDetail;
class FrontendManagementController extends Controller
{
    //

    public function welcomedata()
    {

   $fslide = Slider::where('id',1)->first();
   $allslide = Slider::where('id','!=',1)->get();
   $gallerydata = Gallery::take(4)->get();
   $faqimage = FAQIMG::where('id',1)->first();
   $faqdata = FAQ::get();
   $datacontact = Contact::where('id',1)->first();
   $indexdata = IndexData::where('id',1)->first();
   $discountdata = Discount::get();
   $dataservice = Service::get();
   return view('/frontend/welcome',compact(['fslide','allslide','gallerydata','faqimage','faqdata','datacontact','indexdata','discountdata','dataservice']));

    }

    public function aboutdataview()
    {
    $aboutbanner = Banner::where('id',1)->first();
    $aboutdata = AboutContent::where('id',1)->first();
    $discountdata = Discount::get();
     return view('/frontend/about',compact(['aboutbanner','aboutdata','discountdata']));
    }

    public function galleryview()
    {
     $gallerbanner = Banner::where('id',1)->first();
     $galleryimg = Gallery::get();
     $aboutdata = AboutContent::where('id',1)->first();
     $gallerycontent = AboutContent::where('id',1)->first();
      return view('/frontend/gallery',compact(['gallerbanner','galleryimg','aboutdata','gallerycontent']));
    }

    public function contactusview()
    {
       $datacontact = Contact::where('id',1)->first();
        return view('/frontend/contact-us',compact('datacontact'));
    }

    public function servicesview(){
        $aboutdata = AboutContent::where('id',1)->first();
          $dataservice = Service::get();
          $aboutbanner = Banner::where('id',1)->first();
           $faqimage = FAQIMG::where('id',1)->first();
           $customerquestions = CustomerQus::get();
        return view('/frontend/services',compact(['aboutdata','dataservice','aboutbanner','customerquestions','faqimage']));
    }

    public function servicedetailsview($id)
    {
        $aboutbanner = Banner::where('id',1)->first();
        $servicedetails = ServiceDetail::where('id',$id)->first();
        $servicename = Service::where('detail_id',$id)->first();
        return view('/frontend/service-details',compact(['aboutbanner','servicedetails','servicename']));  
    }

    public function productview()
    {
         $aboutbanner = Banner::where('id',1)->first();
         $indexdata = IndexData::where('id',1)->first();
         $feturesdata = Product::where('product_type',"Featured Products")->get();
         $newdata = Product::where('product_type',"New Products")->get();
        return view('/frontend/product',compact(['aboutbanner','indexdata','feturesdata','newdata']));
    }

    public function productdetailsview($id){
        
        $productdetails = ProductDetail::where('id',$id)->first();
        $productname = Product::where('details_id',$id)->first();
        return view('/frontend/product-details',compact(['productdetails','productname']));
    }

    public function knowyourtyre()
    {
    $aboutdata = AboutContent::where('id',1)->first();
    return view('/frontend/know-your-tyre',compact(['aboutdata']));

    }
}
