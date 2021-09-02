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
class ContentManagementController extends Controller
{
   //slider 

 public function sliderview()
  {
       $data= Slider::orderBy('id', 'desc')->get();
       return view('admin/slider/slider',compact('data'));
   }

   public function addsliderdetails(Request $request)
   {
    $image = $request->file('banner');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/slider');
    $image->move($destinationPath, $uimage);

    $Slider = new Slider();
    $Slider->heading = $request->input('heading');
    $Slider->description = $request->input('description');
    $Slider->banner = $uimage;
    $Slider->save();

    return redirect()->route('slider')->with('message', 'Slider Added successfully!');
}

public function slideredit($id)
{
  $data = Slider::where('id',$id)->first();
  return view('admin/slider/slider-edit',compact('data'));
}
public function updatesliderdetails(Request $request)
{
    $id = $request->input('tblid');

    if($request->has('banner')){  

       $image = $request->file('banner');
       $uimage = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('/images/slider');
       $image->move($destinationPath, $uimage);


       $row = Slider::select('banner')->where('id', $id)->where('banner', $uimage)->first();
       if(!empty($row))
       {
          $sameimage = $row->entry_pdf_file;
          Slider::where('id', $id)->update(['banner' => $sameimage]);
      }
      else{
         Slider::where('id', $id)->update(['banner' => $uimage]);

     }

 }
 Slider::where('id', $id)->update(['heading' => $request->input('heading'),'description' =>  $request->input('description')]);
 return redirect()->route('slider')->with('message', 'Slider Details Updated successfully!');
}

public function deleteslider($id)
{
  Slider::where('id', $id)->delete();
  return back()->with('message3','Slider Deleted Successfully!');
}


//website contact details
public function contactus()
{
 $data = Contact::select('logo1','logo2','favicon','mobile','email','address','facebook_url','instagram_url','youtube_url','twitter_url','linkedin_url','free_shipping','cash_on_delivery','special_gift','customer_service','after_email','after_mobile','contact_banner','contact_pic','contact_dis','map_url')->where('id',1)->first();
  return view('admin/contact/contactus',compact('data'));
}


public function updatelogo1(Request $request)
{
    $image = $request->file('logo1');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/logo');
    $image->move($destinationPath, $uimage);
    Contact::where('id',1)->update(['logo1' => $uimage]);

    return back()->with('message','Logo1 change Successfully!');
}

public function updatelogo2(Request $request)
{
    $image = $request->file('logo2');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/logo');
    $image->move($destinationPath, $uimage);
    Contact::where('id',1)->update(['logo2' => $uimage]);

    return back()->with('message','Logo2 change Successfully!');
}

public function updatefavicon(Request $request)
{
    $image = $request->file('favicon');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/logo');
    $image->move($destinationPath, $uimage);
    Contact::where('id',1)->update(['favicon' => $uimage]);

    return back()->with('message','Favicon change Successfully!');
}

public function savecontactdetails(Request $request)
{
 Contact::where('id',1)->update(['mobile' => $request->input('mobile'),'after_mobile' => $request->input('after_mobile'),'email' => $request->input('email'),'after_email' => $request->input('after_email'),'address' => $request->input('address'), 'facebook_url' => $request->input('facebook_url'),'twitter_url' => $request->input('twitter_url'),'instagram_url' => $request->input('instagram_url'),'linkedin_url' => $request->input('linkedin_url'),'youtube_url' => $request->input('youtube_url')]);
 return back()->with('message','Website Details Update Successfully!');
}

public function savecontactdata(Request $request)
{
  Contact::where('id',1)->update(['free_shipping' => $request->input('free_shipping'),'cash_on_delivery' => $request->input('cash_on_delivery'),'special_gift' => $request->input('special_gift'),'customer_service' => $request->input('customer_service')]);
  return back()->with('message','Website Details Update Successfully!');
}

public function updatecontactbanner(Request $request)
{
    $image = $request->file('contact_banner');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/contact');
    $image->move($destinationPath, $uimage);
    Contact::where('id',1)->update(['contact_banner' => $uimage]);

    return back()->with('message','Picture1 change Successfully!');
}
public function updatecontactfrompic(Request $request)
{
    $image = $request->file('contact_pic');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/contact');
    $image->move($destinationPath, $uimage);
    Contact::where('id',1)->update(['contact_pic' => $uimage]);

    return back()->with('message','Picture1 change Successfully!');
}

public function updateafterheadingcontactcontent(Request $request)
{
  Contact::where('id',1)->update(['contact_dis' => $request->input('contact_dis'),'map_url' => $request->input('map_url')]);
  return back()->with('message','Content Update Successfully!');
}
//close website contact


//faq
public function faqview()
{
   $imgdata = FAQIMG::select('pic1','pic2','pic3')->where('id',1)->first();
   $data = FAQ::orderBy('id', 'desc')->get();
   return view('admin/faq/faq',compact(['data','imgdata']));
}

public function updatepicture1(Request $request)
{
    $image = $request->file('pic1');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/faq');
    $image->move($destinationPath, $uimage);
    FAQIMG::where('id',1)->update(['pic1' => $uimage]);

    return back()->with('message','Picture1 change Successfully!');
}
public function updatepicture2(Request $request)
{
    $image = $request->file('pic2');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/faq');
    $image->move($destinationPath, $uimage);
    FAQIMG::where('id',1)->update(['pic2' => $uimage]);

    return back()->with('message','Picture2 change Successfully!');
}
public function updatepicture3(Request $request)
{
    $image = $request->file('pic3');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/faq');
    $image->move($destinationPath, $uimage);
    FAQIMG::where('id',1)->update(['pic3' => $uimage]);

    return back()->with('message','Picture3 change Successfully!');
}

public function addfaqdata(Request $request)
{
 $FAQ = new FAQ();
 $FAQ->heading = $request->input('heading');
 $FAQ->description = $request->input('description');
 $FAQ->save();
       //return back()->with('message','FAQ Added Successfully!');
 $imgdata = FAQIMG::select('pic1','pic2','pic3')->where('id',1)->first();
 $data = FAQ::orderBy('id', 'desc')->get();
 return redirect()->route('faq')->with(['imgdata', 'data']);
}

public function faqedit($id)
{
 $data = FAQ::where('id',$id)->first();
 return view('admin/faq/faq-edit',compact('data'));
}

public function editfaqdata(Request $request)
{
    FAQ::where('id',$request->input('tblid'))->update(['heading' => $request->input('heading'),'description' => $request->input('description')]);
    return redirect()->route('faq')->with(['imgdata', 'data']);
}

public function faqdelete($id) {
    FAQ::where('id', $id)->delete();
    return back()->with('message3','FAQ Deleted Successfully!');
}
//close faq

// about
public function aboutusview()
{
   $databanner = Banner::select('about_banner','about_form_img')->where('id',1)->first();

   $data = AboutContent::select('about_pic','about_heading','about_dis','point1','point2','point3','point4','point5','point6','whypicture','why_heading','why_description','contact_pic','contact_dis1','contact_dis2')->where('id',1)->first();

   return view('admin/aboutus/aboutus',compact(['databanner','data']));
}

public function updatebanner(Request $request)
{
    $image = $request->file('banner');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/banner');
    $image->move($destinationPath, $uimage);
    Banner::where('id',1)->update(['about_banner' => $uimage]);

    return back()->with('message','Banner change Successfully!');
}
public function updatepicture(Request $request)
{
    $image = $request->file('picture');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/banner');
    $image->move($destinationPath, $uimage);
    Banner::where('id',1)->update(['about_form_img' => $uimage]);

    return back()->with('message','Picture change Successfully!');
}

public function updateaboutpic(Request $request)
{
    $image = $request->file('about_pic');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/about');
    $image->move($destinationPath, $uimage);
    AboutContent::where('id',1)->update(['about_pic' => $uimage]);
    return back()->with('message','Picture change Successfully!');
}

public function updateaboutcontent(Request $request)
{
   AboutContent::where('id',1)->update(['about_heading' => $request->input('about_heading'),'about_dis' => $request->input('about_dis'),'point1' => $request->input('point1'),'point2' => $request->input('point2'),'point3' => $request->input('point3'),'point4' => $request->input('point4'),'point5' => $request->input('point5'),'point6' => $request->input('point6')]);
   return back()->with('message','Content Update Successfully!');
}

public function updatewhypicture(Request $request)
{
    $image = $request->file('whypicture');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/about');
    $image->move($destinationPath, $uimage);
    AboutContent::where('id',1)->update(['whypicture' => $uimage]);
    return back()->with('message','Picture change Successfully!');
}

public function updatewhycontant(Request $request)
{
 AboutContent::where('id',1)->update(['why_heading' => $request->input('why_heading'),'why_description' => $request->input('why_description')]);
 return back()->with('message','Content Update Successfully!');
}

public function updatecontactpicture(Request $request)
{
    $image = $request->file('contact_pic');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/about');
    $image->move($destinationPath, $uimage);
    AboutContent::where('id',1)->update(['contact_pic' => $uimage]);
    return back()->with('message','Picture change Successfully!');
}


public function updatecontactcontent(Request $request)
{
 AboutContent::where('id',1)->update(['contact_dis1' => $request->input('contact_dis1'),'contact_dis2' => $request->input('contact_dis2')]);
 return back()->with('message','Content Update Successfully!');
}

//close about

//index data
public function indexdataview()
{
  $data = IndexData::where('id',1)->first();
  $discountdata = Discount::get();
  return view('admin/aboutus/indexdata',compact(['data','discountdata']));
}

public function updateindexpic1(Request $request)
{
    $image = $request->file('pic1');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/indexpics');
    $image->move($destinationPath, $uimage);
    IndexData::where('id',1)->update(['pic1' => $uimage]);

    return back()->with('message','Picture change Successfully!');
}

public function updateindexpic2(Request $request)
{
 $image = $request->file('pic2');
 $uimage = time().'.'.$image->getClientOriginalExtension();
 $destinationPath = public_path('/images/indexpics');
 $image->move($destinationPath, $uimage);
 IndexData::where('id',1)->update(['pic2' => $uimage]);

 return back()->with('message','Picture change Successfully!');
}

public function updateindexcontent(Request $request)
{
   IndexData::where('id',1)->update(['heading_after_slide' => $request->input('heading_after_slide'),'description_after_slide' => $request->input('description_after_slide')]);
   return back()->with('message','Content Update Successfully!');
}


public function updatewehavecontent(Request $request)
{
   IndexData::where('id',1)->update(['we_have_description' => $request->input('we_have_description')]);
   return back()->with('message','Content Update Successfully!');
}

public function updateafterwehavepic(Request $request)
{
    $image = $request->file('after_we_have_pic');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/indexpics');
    $image->move($destinationPath, $uimage);
    IndexData::where('id',1)->update(['after_we_have_pic' => $uimage]);
    return back()->with('message','Image change Successfully!');
}

public function updateafterwedetails(Request $request)
{
   IndexData::where('id',1)->update(['after_we_have_heading' => $request->input('after_we_have_heading'),'after_we_have_description' => $request->input('after_we_have_description')]);
   return back()->with('message','Content Update Successfully!');
}

public function updatelastindexdetails(Request $request)
{
   IndexData::where('id',1)->update(['inspection_dis' => $request->input('inspection_dis'),'diagnostic_dis' => $request->input('diagnostic_dis'),'upgrades_dis' => $request->input('upgrades_dis')]);
   return back()->with('message','Content Update Successfully!');
}

public function adddiscount(Request $request)
{
    $image = $request->file('discount_image');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/discountimages');
    $image->move($destinationPath, $uimage);
    $Discount = new Discount();
    $Discount->image = $uimage;
    $Discount->discount_for = $request->input('discount_for');
    $Discount->discount = $request->input('discount');
    $Discount->save();
    return back()->with('message','Discount data Update Successfully!');
}

public function editdiscount($tblid)
{
    $discountdata = Discount::where('id',$tblid)->first();
    return view('admin/aboutus/edit-discount',compact('discountdata'));
}

public function updatediscount(Request $request)
{
    $id = $request->input('tblid');
    if($request->has('discount_image')){  
       $image = $request->file('discount_image');
       $uimage = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('/images/discountimages');
       $image->move($destinationPath, $uimage);
       $row = Slider::select('discount_image')->where('id', $id)->where('discount_image', $uimage)->first();
       if(!empty($row))
       {
          $sameimage = $row->discount_image;
          Slider::where('id', $id)->update(['discount_image' => $sameimage]);
      }
      else{
         Slider::where('id', $id)->update(['discount_image' => $uimage]);
     }
 }
 Discount::where('id', $id)->update(['discount_for' => $request->input('discount_for'),'discount' =>  $request->input('discount')]);
 return back()->with('message', 'Discount Details Updated successfully!');
}

public function deletediscount($id)
{
  Discount::where('id', $id)->delete();
  return back()->with('message3','Discount Deleted Successfully!');
}
//index data close





}
