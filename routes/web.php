<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//frontend section
Route::get('/', 'FrontendManagementController@welcomedata');
Route::get('/about', 'FrontendManagementController@aboutdataview');
Route::get('/gallery', 'FrontendManagementController@galleryview');
Route::get('/contact-us', 'FrontendManagementController@contactusview');
Route::get('/services', 'FrontendManagementController@servicesview');
Route::get('/service-details/{id}','FrontendManagementController@servicedetailsview');
Route::get('/product', 'FrontendManagementController@productview');
Route::get('/product-details/{id}','FrontendManagementController@productdetailsview');

//query form
Route::post('/submit-enquriy-form','CustomerQueryManagementController@submitenquriyform');
Route::post('/submit-product-query-form','CustomerQueryManagementController@submitproductqueryform');
Route::post('/submit-contact-query-form','CustomerQueryManagementController@submitcontactqueryform');

Auth::routes();
Route::get('/home', function () {
   if(Auth::user()->user_type == 1)
   {
   return view('admin/dashboard'); 
   } 
   else
   {
   return view('home'); 
   }
 });


 //admin section
 Route::group(['middleware' => ['auth', 'user_type']], function () {

//slider
 Route::get('/slider', 'ContentManagementController@sliderview')->name('slider');
 Route::get('/add-slider', function () {
 return view('admin/slider/add-slider');
 });
  Route::post('/add-slider-details', 'ContentManagementController@addsliderdetails');
 Route::get('/slider-edit/{id}', 'ContentManagementController@slideredit');
 Route::post('/update-slider-details', 'ContentManagementController@updatesliderdetails');
  Route::get('/slider-delete/{id}', 'ContentManagementController@deleteslider');
//close slider


//contact-us
    Route::get('/contactus', 'ContentManagementController@contactus');
    Route::post('/update-logo1', 'ContentManagementController@updatelogo1');
    Route::post('/update-logo2', 'ContentManagementController@updatelogo2');
    Route::post('/update-favicon', 'ContentManagementController@updatefavicon');
    Route::post('/save-contact-details', 'ContentManagementController@savecontactdetails');
    Route::post('/save-contact-data', 'ContentManagementController@savecontactdata'); 

    Route::post('/update-contact-content', 'ContentManagementController@updateafterheadingcontactcontent'); 
    Route::post('/update-contact-banner', 'ContentManagementController@updatecontactbanner'); 
    Route::post('/update-contact-picture', 'ContentManagementController@updatecontactfrompic'); 

// close contact-us

//faq
    Route::get('/faq', 'ContentManagementController@faqview')->name('faq');
    Route::post('/update-picture1', 'ContentManagementController@updatepicture1'); 
    Route::post('/update-picture2', 'ContentManagementController@updatepicture2');  
    Route::post('/update-picture3', 'ContentManagementController@updatepicture3');  
    Route::get('/ add-faq', function () {
    return view('admin/content/faq/add-faq');
    });
    Route::post('/add-faq-data', 'ContentManagementController@addfaqdata');  
    Route::get('/faq-edit/{id}', 'ContentManagementController@faqedit');
    Route::post('/edit-faq-data', 'ContentManagementController@editfaqdata');
     Route::get('/faq-delete/{id}', 'ContentManagementController@faqdelete');  
//close faq

//gallery module
Route::get('/amdgallery', 'ModuleManagementController@viewgallery');
Route::post('/add-image', 'ModuleManagementController@addimage');
Route::post('/update-gallery', 'ModuleManagementController@updategallery');
Route::get('/image-delete/{id}', 'ModuleManagementController@imagedelete');
Route::post('/update-gallery-banner', 'ModuleManagementController@updategallerybanner');
Route::post('/update-gallerycontent', 'ModuleManagementController@updategallerycontent');



//close gallery module

//about
Route::get('/aboutus', 'ContentManagementController@aboutusview');
Route::post('/update-banner', 'ContentManagementController@updatebanner');
Route::post('/update-picture', 'ContentManagementController@updatepicture');


Route::post('/update-aboutpic', 'ContentManagementController@updateaboutpic');
Route::post('/update-aboutcontent', 'ContentManagementController@updateaboutcontent');


Route::post('/update-whypicture', 'ContentManagementController@updatewhypicture');
Route::post('/update-whycontant', 'ContentManagementController@updatewhycontant');


Route::post('/update-contactpicture', 'ContentManagementController@updatecontactpicture');
Route::post('/update-contactcontent', 'ContentManagementController@updatecontactcontent');

//close about

//index data
Route::get('/indexdata', 'ContentManagementController@indexdataview');
Route::post('/update-index-pic1', 'ContentManagementController@updateindexpic1');
Route::post('/update-index-pic2', 'ContentManagementController@updateindexpic2');
Route::post('/update-index-content', 'ContentManagementController@updateindexcontent');

Route::post('/update-we-have-content', 'ContentManagementController@updatewehavecontent');


Route::post('/update-after-we-have-pic', 'ContentManagementController@updateafterwehavepic');
Route::post('/update-after-we-details', 'ContentManagementController@updateafterwedetails');


Route::post('/update-last-index-details', 'ContentManagementController@updatelastindexdetails');


Route::post('/add-discount', 'ContentManagementController@adddiscount');
Route::get('/edit-discount/{tblid}','ContentManagementController@editdiscount');
Route::post('/update-discount', 'ContentManagementController@updatediscount');
Route::get('/delete-discount/{id}', 'ContentManagementController@deletediscount');

//close index data



//service

Route::get('/list-services', 'ServiceManagementController@amdservicesview')->name('list-services');
Route::post('/update-service-banner', 'ServiceManagementController@updateservicebanner');
Route::post('/update-service-picture', 'ServiceManagementController@updateservicepicture');
Route::post('/update-service-dis', 'ServiceManagementController@updateservicedis');

  Route::get('/add-service', function () {
    return view('admin/service/add-service');
    });
Route::post('/add-service-data', 'ServiceManagementController@addservicedata');
Route::post('/update-service', 'ServiceManagementController@updateservice');

Route::get('/customer-questions', 'ServiceManagementController@customerview')->name('customer-questions');
Route::post('/update-cus-picture1', 'ServiceManagementController@updatecuspicture1'); 
Route::post('/update-cus-picture2', 'ServiceManagementController@updatecuspicture2');  
Route::post('/update-cus-picture3', 'ServiceManagementController@updatecuspicture3');  
Route::get('/add-customer-question', function () {
    return view('admin/service/add-customer-question');
    });

Route::post('/add-customer-data', 'ServiceManagementController@addcustomerdata'); 
Route::get('/customer-question-edit/{id}', 'ServiceManagementController@customerquestionedit');
Route::post('/edit-customer-data', 'ServiceManagementController@editcustomerdata'); 
Route::get('/customer-question-delete/{id}', 'ServiceManagementController@customerquestiondelete');

Route::post('/update-service-details-banner', 'ServiceManagementController@updateservicedetailbanner');
  Route::post('/update-service-banner-dis', 'ServiceManagementController@updateservicebannerdis');
  Route::get('/add-service-details/{id}', 'ServiceManagementController@addservicedetails');
  Route::post('/submit-service-details', 'ServiceManagementController@submitservicedetails');
  Route::get('/edit-service-details/{id}', 'ServiceManagementController@editservicedetails');
  Route::post('/update-service-details', 'ServiceManagementController@updateservicedetails');
  Route::get('/service-details-delete/{id}/{detailid}', 'ServiceManagementController@servicedetailsdelete');
 //close service


//product
Route::get('/list-products', 'ProductManagementController@listproductview')->name('list-products');
Route::post('/update-product-banner', 'ProductManagementControllre@updateproductbanner');
Route::get('/add-product', function () {
    return view('admin/product/add-product');
    });

Route::post('/add-product-data', 'ProductManagementController@addproductdata');
Route::post('/update-product', 'ProductManagementController@updateproduct');
Route::get('/product-delete/{id}', 'ProductManagementController@productdelete');
Route::get('/add-product-details/{id}', 'ProductManagementController@addproductdetails');
Route::post('/add-product-details-data', 'ProductManagementController@addproductdetailsdata');
Route::get('/edit-product-details/{id}', 'ProductManagementController@editproductdetails');
Route::post('/update-product-details-data', 'ProductManagementController@updateproductdetailsdata');
 Route::get('/product-details-delete/{id}/{detailid}', 'ProductManagementController@productdetailsdelete');
//close product


 //query
Route::get('/customer-queries','CustomerQueryManagementController@customerqueries');
Route::get('/product-page-queries','CustomerQueryManagementController@productpagequeries');
Route::get('/customer-enquiries','CustomerQueryManagementController@customerenquiries');

//close query

 });
