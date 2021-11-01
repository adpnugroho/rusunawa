<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;

class ChangePasswordController extends Controller
{
	public function __construct()
	{
	 $this->middleware('auth');
	}
	 
	public function showChangePasswordForm()
	{
		return view('backend.auth.v_changepassword');
	}
		 
	public function changePassword(Request $request)
	{ 
		if (!(Hash::check($request->get('current-password'), Auth::user()->password))) 
		{
		return redirect()->route('changePassword')->with("error","Kata sandi saat ini salah. Silahkan coba lagi.");
		}
		 
		if(strcmp($request->get('current-password'), $request->get('new-password')) == 0)
		{
		return redirect()->route('changePassword')->with("error","Kata sandi baru tidak boleh sama dengan kata sandi saat ini.");
		}

		if(!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0)
		{
		return redirect()->route('changePassword')->with("error","Konfirmasi kata sandi tidak sama. Silahkan coba lagi.");
		}

		$user = Auth::user();
		$user->password = bcrypt($request->get('new-password'));
		$user->save();
		 
		return redirect()->route('changePassword')->with("success","Kata sandi berhasil diubah!"); 
	}
}