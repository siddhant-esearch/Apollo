<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use App\FAQIMG;
use App\Banner;
use App\Service;
use App\CustomerQus;
use App\ServiceDetail;

class ServiceManagementController extends Controller
{
    //

    //service

public function amdservicesview()
{    
    $databanner = Banner::select('service_banner','service_from_pic','service_dis','service_details_banner','service_banner_dis')->where('id',1)->first();
     $dataservice = Service::get();
    return view('admin/service/list-services',compact(['databanner','dataservice']));

}

public function updateservicebanner(Request $request)
{
     $image = $request->file('service_banner');
 $uimage = time().'.'.$image->getClientOriginalExtension();
 $destinationPath = public_path('/images/banner');
 $image->move($destinationPath, $uimage);
 Banner::where('id',1)->update(['service_banner' => $uimage]);

 return back()->with('message','Picture change Successfully!');
}

public function updateservicepicture(Request $request)
{
     $image = $request->file('service_from_pic');
 $uimage = time().'.'.$image->getClientOriginalExtension();
 $destinationPath = public_path('/images/banner');
 $image->move($destinationPath, $uimage);
 Banner::where('id',1)->update(['service_from_pic' => $uimage]);

 return back()->with('message','Picture change Successfully!');
}

public function updateservicedis(Request $request)
{
     Banner::where('id', 1)->update(['service_dis' => $request->input('service_dis')]);
  return back()->with('message', 'Service Discription Updated successfully!');
}


public function addservicedata(Request $request)
{
     $image = $request->file('service_image');
 $uimage = time().'.'.$image->getClientOriginalExtension();
 $destinationPath = public_path('/images/service');
 $image->move($destinationPath, $uimage);

    $Service = new Service();
    $Service->service_image = $uimage;
    $Service->service_name = $request->input('service_name');
    $Service->service_discription = $request->input('service_discription');
    $Service->save();
     return redirect()->route('list-services')->with('message', 'Service Added Successfully!');
}



public function customerview()
{
   $imgdata = FAQIMG::select('c_pic1','c_pic2','c_pic3')->where('id',1)->first();
   $data = CustomerQus::orderBy('id', 'desc')->get();
   return view('admin/service/customer-questions',compact(['data','imgdata']));
}



public function updatecuspicture1(Request $request)
{
    $image = $request->file('c_pic1');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/faq');
    $image->move($destinationPath, $uimage);
    FAQIMG::where('id',1)->update(['c_pic1' => $uimage]);

    return back()->with('message','Picture1 change Successfully!');
}
public function updatecuspicture2(Request $request)
{
    $image = $request->file('c_pic2');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/faq');
    $image->move($destinationPath, $uimage);
    FAQIMG::where('id',1)->update(['c_pic2' => $uimage]);

    return back()->with('message','Picture2 change Successfully!');
}
public function updatecuspicture3(Request $request)
{
    $image = $request->file('c_pic3');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/faq');
    $image->move($destinationPath, $uimage);
    FAQIMG::where('id',1)->update(['c_pic3' => $uimage]);

    return back()->with('message','Picture3 change Successfully!');
}


public function addcustomerdata(Request $request)
{
 $CustomerQus = new CustomerQus();
 $CustomerQus->question = $request->input('question');
 $CustomerQus->answer = $request->input('answer');
 $CustomerQus->save();
return redirect()->route('customer-questions')->with('message', 'Question Added Successfully!');
}


public function customerquestionedit($id)
{
 $data = CustomerQus::where('id',$id)->first();
 return view('admin/service/customer-question-edit',compact('data'));
}

public function editcustomerdata(Request $request)
{
     CustomerQus::where('id',$request->input('tblid'))->update(['question' => $request->input('question'),'answer' => $request->input('answer')]);
    return redirect()->route('customer-questions')->with('message', 'Question Updated Successfully!');
}

public function customerquestiondelete($id)
{
  CustomerQus::where('id', $id)->delete();
  return back()->with('message3','Discount Deleted Successfully!');
}

public function updateservice(Request $request)
{
  $id = $request->input('tblid');
    if($request->has('service_image')){  
       $image = $request->file('service_image');
       $uimage = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('/images/discountimages');
       $image->move($destinationPath, $uimage);
       $row = Service::select('service_image')->where('id', $id)->where('service_image', $uimage)->first();
       if(!empty($row))
       {
          $sameimage = $row->service_image;
          Service::where('id', $id)->update(['service_image' => $sameimage]);
      }
      else{
         Service::where('id', $id)->update(['service_image' => $uimage]);
     }
 }
 Service::where('id', $id)->update(['service_name' => $request->input('service_name'),'service_discription' =>  $request->input('service_discription')]);
 return back()->with('message', 'Service Updated successfully!');
}

public function updateservicedetailbanner(Request $request)
{
    $image = $request->file('service_details_banner');
 $uimage = time().'.'.$image->getClientOriginalExtension();
 $destinationPath = public_path('/images/banner');
 $image->move($destinationPath, $uimage);
 Banner::where('id',1)->update(['service_details_banner' => $uimage]);

 return back()->with('message','Banner change Successfully!');

}
public function updateservicebannerdis(Request $request)
{
    Banner::where('id', 1)->update(['service_banner_dis' => $request->input('service_banner_dis')]);
    return back()->with('message', 'Service Discription Updated successfully!');
}
public function addservicedetails($id)
{
    return view('admin/service/add-service-details',compact('id'));
}
public function submitservicedetails(Request $request)
{

    $image = $request->file('image1');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/service/img1');
    $image->move($destinationPath, $uimage);

    $image = $request->file('image2');
    $uimage1 = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/service/img2');
    $image->move($destinationPath, $uimage1);

    $image = $request->file('video');
    $videoimg = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/service/video');
    $image->move($destinationPath, $videoimg);


    $image = $request->file('left_image');
    $leftimg = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/service/imgleft');
    $image->move($destinationPath, $leftimg);

    $image = $request->file('right_image');
    $rightimg = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/service/imgright');
    $image->move($destinationPath, $rightimg);

    $ServiceDetail = new ServiceDetail();
    $ServiceDetail->description1 = $request->input('description1');
    $ServiceDetail->description2 = $request->input('description2');
    $ServiceDetail->image1 = $uimage;
    $ServiceDetail->image2 = $uimage1;
    $ServiceDetail->video = $videoimg;
    $ServiceDetail->heading_after_video = $request->input('heading_after_video');
    $ServiceDetail->description_after_video = $request->input('description_after_video');
    $ServiceDetail->left_image = $leftimg;
    $ServiceDetail->left_heading = $request->input('left_heading');
    $ServiceDetail->left_description = $request->input('left_description');
    $ServiceDetail->right_image = $rightimg;
    $ServiceDetail->right_heading = $request->input('right_heading');
    $ServiceDetail->right_description = $request->input('right_description');
    $ServiceDetail->save();
    $detailid=$ServiceDetail->id;
    Service::where('id',$request->input('tblid'))->update(['detail_id' => $detailid,'details_status' => 1]);
    return redirect()->route('list-services')->with('message', 'Service Details Added Successfully!');
}

public function editservicedetails($id)
{
 $data = ServiceDetail::where('id',$id)->first();
 return view('admin/service/edit-service-details',compact('data'));
}

public function updateservicedetails(Request $request)
{
    if($request->has('image1')){  
        $image = $request->file('image1');
        $uimage = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/service/img1');
        $image->move($destinationPath, $uimage);
        $row = ServiceDetail::select('image1')->where('id', $id)->where('image1', $uimage)->first();
        if(!empty($row))
        {
           $sameimage = $row->image1;
           ServiceDetail::where('id', $id)->update(['image1' => $sameimage]);
       }
       else{
        ServiceDetail::where('id', $id)->update(['image1' => $uimage]);
      }
  }


  if($request->has('image2')){  
    $image = $request->file('image2');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/service/img2');
    $image->move($destinationPath, $uimage);
    $row = ServiceDetail::select('image2')->where('id', $id)->where('image2', $uimage)->first();
    if(!empty($row))
    {
       $sameimage = $row->image1;
       ServiceDetail::where('id', $id)->update(['image2' => $sameimage]);
   }
   else{
    ServiceDetail::where('id', $id)->update(['image2' => $uimage]);
  }
}


if($request->has('video')){  
    $image = $request->file('video');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/service/video');
    $image->move($destinationPath, $uimage);
    $row = ServiceDetail::select('video')->where('id', $id)->where('video', $uimage)->first();
    if(!empty($row))
    {
       $sameimage = $row->video;
       ServiceDetail::where('id', $id)->update(['video' => $sameimage]);
   }
   else{
    ServiceDetail::where('id', $id)->update(['video' => $uimage]);
  }
}

if($request->has('left_image')){  
    $image = $request->file('left_image');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/service/imgleft');
    $image->move($destinationPath, $uimage);
    $row = ServiceDetail::select('left_image')->where('id', $id)->where('left_image', $uimage)->first();
    if(!empty($row))
    {
       $sameimage = $row->left_image;
       ServiceDetail::where('id', $id)->update(['left_image' => $sameimage]);
   }
   else{
    ServiceDetail::where('id', $id)->update(['left_image' => $uimage]);
  }
}


if($request->has('right_image')){  
    $image = $request->file('right_image');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/service/imgright');
    $image->move($destinationPath, $uimage);
    $row = ServiceDetail::select('right_image')->where('id', $id)->where('right_image', $uimage)->first();
    if(!empty($row))
    {
       $sameimage = $row->right_image;
       ServiceDetail::where('id', $id)->update(['right_image' => $sameimage]);
   }
   else{
    ServiceDetail::where('id', $id)->update(['right_image' => $uimage]);
  }
}

ServiceDetail::where('id',$request->input('tblid'))->update(['description1' => $request->input('description1'),
'description2' => $request->input('description2'),
'heading_after_video' => $request->input('heading_after_video'),
'description_after_video' => $request->input('description_after_video'),
'left_heading' => $request->input('left_heading'),
'left_description' => $request->input('left_description'),
'right_heading' => $request->input('right_heading'),
'right_description' => $request->input('right_description'),
]);
return redirect()->route('list-services')->with('message', 'Service Details Updated Successfully!');

}

public function servicedetailsdelete($id,$detailid){
      Service::where('id', $id)->delete();
    ServiceDetail::where('id', $detailid)->delete();
    return back()->with('message3','Service Details Deleted Successfully!');
}
//close service
}
