<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    //

    public function profile()
	{
		$profiledata = User::where('id',Auth::user()->id)->first();
		return view('admin/profile',compact('profiledata'));
	}
	public function update_profile(Request $request)
	{
		
		$name = $request->input('name');
		$email = $request->input('email');
		$mobile = $request->input('mobile');
		$updated_at = date('Y-m-d H:i:s');
		User::where('id',Auth::user()->id)->update(['name' => $name,'email' => $email, 'mobile' => $mobile,'updated_at' => $updated_at]);

		return back()->with('message','Profile update Successfully!');

	}

	public function update_profile_password(Request $request)
	{     
		DB::table('users')->where('id',Auth::user()->id)
		->update(['password' => Hash::make($request->input('new_password'))]);
		return back()->with('message','Profile Password change Successfully!');

	}
	public function update_profile_pic(Request $request)
	{
		$image = $request->file('profile_picture');
		$uimage = time().'.'.$image->getClientOriginalExtension();
		$destinationPath = public_path('/images/user_picture');
		$image->move($destinationPath, $uimage);

		User::where('id',Auth::user()->id)->update(['profile_picture' => $uimage,'profile_picture_status' => 1 ]);
		return back()->with('message','Profile Picture Change Successfully!');
	}
}
