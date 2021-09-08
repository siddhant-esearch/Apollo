<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\KnowTyer;
use App\Banner;
class KnowTyerManagementController extends Controller
{
     //
     public function listtyers()
     {
    $databanner = Banner::select('know_banner','know_details')->where('id',1)->first();
    $dataproduct = KnowTyer::get();
    return view('admin/knowtyers/list-tyers',compact(['databanner','dataproduct']));
     }

     public function updateknowbanner(Request $request)
{
     $image = $request->file('know_banner');
 $uimage = time().'.'.$image->getClientOriginalExtension();
 $destinationPath = public_path('/images/banner');
 $image->move($destinationPath, $uimage);
 Banner::where('id',1)->update(['know_banner' => $uimage]);

 return back()->with('message','Picture change Successfully!');
}


}
