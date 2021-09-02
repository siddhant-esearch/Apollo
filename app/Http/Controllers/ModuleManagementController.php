<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use App\Gallery;
use App\Banner;
use App\AboutContent;
class ModuleManagementController extends Controller
{


//gallery Module

//view Gallery
public function viewgallery()
{

    $data = Gallery::get();
    $databanner = Banner::where('id',1)->first();
    $gallerycontent = AboutContent::where('id',1)->first();
  return view('admin/module/gallery/amdgallery',compact(['data','databanner','gallerycontent']));
}

//add image in gallery
public function addimage(Request $request)
{
        $image = $request->file('image');
        $uimage = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/gallery');
        $image->move($destinationPath, $uimage);
   $Gallery = new Gallery();
   $Gallery->image = $uimage;          
   $Gallery->save();
   return back()->with('message','Image Added Successfully!');
}

public function updategallery(Request $request)
{
     $id = $request->input('tblid');
   if($request->has('picture')){  

         $image = $request->file('picture');
        $uimage = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/gallery');
        $image->move($destinationPath, $uimage);
  
          
    $row = Gallery::select('image')->where('id', $id)->where('image', $uimage)->first();
   if(!empty($row))
        {
          $sameimage = $row->image;
           Gallery::where('id', $id)->update(['image' => $sameimage]);
        }
        else{
           Gallery::where('id', $id)->update(['image' => $uimage]);

        }
        
   }
  
        return back()->with('message','Image Updated Successfully!');
}

public function imagedelete($id)
{
   Gallery::where('id', $id)->delete();
      return back()->with('message3','Image Deleted Successfully!');
}
  public function updategallerybanner(Request $request)
     {
      $image = $request->file('banner');
        $uimage = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/banner');
        $image->move($destinationPath, $uimage);
        Banner::where('id',1)->update(['gallery_banner' => $uimage]);
      
       return back()->with('message1','Banner change Successfully!');
     }


     public function updategallerycontent(Request $request)
     {
       AboutContent::where('id',1)->update(['warranty' => $request->input('warranty'),'responsive_service' => $request->input('responsive_service'),'road_protection' => $request->input('road_protection')]);
     return back()->with('message','Content Update Successfully!');
     }

}
