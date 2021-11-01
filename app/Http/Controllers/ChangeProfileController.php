<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Auth;
Use Image;
use Intervention\Image\Exception\NotReadableException;

class ChangeProfileController extends Controller
{
    public function __construct()
	{
	 $this->middleware('auth');
	}

	public function showChangeProfileForm(Request $request){
	return view('backend.auth.v_changeprofile', [
            'user' => $request->user()
        ]);
	}
	 
	public function changeProfile(Request $request){
		$request->validate([
            'name' => ['required'],
            'email' => ['required'],
        ]);
        
        $user = Auth::user();

        if($request->hasFile('foto_profil')){
            $request->validate([
              'foto_profil' => 'image|mimes:jpg,png,jpeg,gif,svg',
            ]);
            $file = $request->file('foto_profil');
            $path = $request->file('foto_profil')->store('public/foto-profil');
            $image = Image::make($file)->resize(null, 150, function ($constraint) {
                    $constraint->aspectRatio();
                    });
            Storage::put($path, (string) $image->encode());
            $user->foto_profil = $path;
        }
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    
       	return redirect()->route('changeProfile')->with("success","Data profil berhasil diubah!");

    }	 
}
