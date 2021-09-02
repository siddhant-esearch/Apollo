<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use App\Banner;
use App\Product;
use App\ProductDetail;
class ProductManagementController extends Controller
{
    //
public function listproductview()
{
    $databanner = Banner::select('product_banner','product_add')->where('id',1)->first();
    $dataproduct = Product::get();
    return view('admin/product/list-products',compact(['databanner','dataproduct']));

}

   public function updateproductbanner(Request $request)
   {
    $image = $request->file('product_banner');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/banner');
    $image->move($destinationPath, $uimage);
    Banner::where('id',1)->update(['product_banner' => $uimage]);
  
    return back()->with('message','Picture change Successfully!');

}

    public function addproductdata(Request $request)
   {
     $image = $request->file('product_image');
     $uimage = time().'.'.$image->getClientOriginalExtension();
     $destinationPath = public_path('/images/product');
     $image->move($destinationPath, $uimage);

    $Product = new Product();
    $Product->product_image = $uimage;
    $Product->product_number = $request->input('product_number');
    $Product->product_name = $request->input('product_name');
    $Product->product_rate = $request->input('product_rate');
    $Product->product_dis = $request->input('product_dis');
    $Product->product_type = $request->input('product_type');
    $Product->save();
     return redirect()->route('list-products')->with('message', 'Product Added Successfully!');
    }

    public function updateproduct(Request $request)
    {
     $id = $request->input('tblid');
    if($request->has('product_image')){  
       $image = $request->file('product_image');
       $uimage = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('/images/product');
       $image->move($destinationPath, $uimage);
       $row = Product::select('product_image')->where('id', $id)->where('product_image', $uimage)->first();
       if(!empty($row))
       {
          $sameimage = $row->product_image;
          Product::where('id', $id)->update(['product_image' => $sameimage]);
      }
      else{
         Product::where('id', $id)->update(['product_image' => $uimage]);
     }
 }
 Product::where('id', $id)->update(['product_number' => $request->input('product_number'),'product_rate' => $request->input('product_rate'),'product_name' =>  $request->input('product_name'),'product_dis' =>  $request->input('product_dis'),'product_type' => $request->input('product_type')]);
 return back()->with('message', 'Product Updated successfully!');
}

public function productdelete($id){
    Product::where('id', $id)->delete();
    return back()->with('message3','Product Deleted Successfully!');
}


public function addproductdetails($id)
{
    return view('admin/product/add-product-details',compact('id'));
}


public function addproductdetailsdata(Request $request)
{

    $image = $request->file('product_page_banner');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/product/pagebanner');
    $image->move($destinationPath, $uimage);

    $image = $request->file('banner_tags');
    $uimage1 = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/product/tagbanner');
    $image->move($destinationPath, $uimage1);

    $ProductDetail = new ProductDetail();
    $ProductDetail->product_page_banner = $uimage;
    $ProductDetail->banner_tags = $uimage1;
    $ProductDetail->discount_rate = $request->input('discount_rate');
    $ProductDetail->save_percentage = $request->input('save_percentage');
    $ProductDetail->short_details = $request->input('short_details');
    $ProductDetail->description = $request->input('description');
    $ProductDetail->reviews = $request->input('reviews');
    $ProductDetail->product_details = $request->input('product_details');
    $ProductDetail->tag1 = $request->input('tag1');
    $ProductDetail->tag2 = $request->input('tag2');
    $ProductDetail->tag3 = $request->input('tag3');
    $ProductDetail->width = $request->input('width');
    $ProductDetail->aspect_ratio = $request->input('aspect_ratio');
    $ProductDetail->rim_diameter = $request->input('rim_diameter');
    $ProductDetail->tube_type = $request->input('tube_type');
    $ProductDetail->save();
    $detailid=$ProductDetail->id;
    Product::where('id',$request->input('tblid'))->update(['details_id' => $detailid,'details_status' => 1]);
    return redirect()->route('list-products')->with('message', 'Service Details Added Successfully!');
}

public function editproductdetails($id)
{
     $data = ProductDetail::where('id',$id)->first();
 return view('admin/product/edit-product-details',compact('data'));
} 

public function updateproductdetailsdata(Request $request)
{
    if($request->has('product_page_banner')){  
    $image = $request->file('product_page_banner');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/product/pagebanner');
    $image->move($destinationPath, $uimage);
    $row = ProductDetail::select('product_page_banner')->where('id', $id)->where('product_page_banner', $uimage)->first();
    if(!empty($row))
    {
       $sameimage = $row->product_page_banner;
       ProductDetail::where('id', $id)->update(['product_page_banner' => $sameimage]);
   }
   else{
    ProductDetail::where('id', $id)->update(['product_page_banner' => $uimage]);
  }
}


if($request->has('banner_tags')){  
    $image = $request->file('banner_tags');
    $uimage = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/product/tagbanner');
    $image->move($destinationPath, $uimage);
    $row = ProductDetail::select('banner_tags')->where('id', $id)->where('banner_tags', $uimage)->first();
    if(!empty($row))
    {
       $sameimage = $row->banner_tags;
       ProductDetail::where('id', $id)->update(['banner_tags' => $sameimage]);
   }
   else{
    ProductDetail::where('id', $id)->update(['banner_tags' => $uimage]);
  }
}

ProductDetail::where('id',$request->input('tblid'))->update(['discount_rate' => $request->input('discount_rate'),
'save_percentage' => $request->input('save_percentage'),
'short_details' => $request->input('short_details'),
'description' => $request->input('description'),
'reviews' => $request->input('reviews'),
'product_details' => $request->input('product_details'),
'tag1' => $request->input('tag1'),
'tag2' => $request->input('tag2'),
'tag3' => $request->input('tag3'),
'width' => $request->input('width'),
'aspect_ratio' => $request->input('aspect_ratio'),
'rim_diameter' => $request->input('rim_diameter'),
'tube_type' => $request->input('tube_type'),
]);
return redirect()->route('list-products')->with('message', 'Product Details Updated Successfully!');
}

public function productdetailsdelete($id,$detailid){
      Product::where('id', $id)->delete();
    ProductDetail::where('id', $detailid)->delete();
    return back()->with('message3','Product Details Deleted Successfully!');
}
}
