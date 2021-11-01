<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Auth;
use Image;
use Intervention\Image\Exception\NotReadableException;


class UserController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
    
    public function index()
    {
        $users = User::where('level', '=', 2)->get();

        return view('backend.users.v_index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User;
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
        $user->password = bcrypt($request->get('password'));
        $user->level = $request->level;
        $user->save();
        
        return redirect()->route('users.index')->with('success', 'Data pengelola berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
        ]);
        
        $user = User::find($id);
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
    
        return redirect()->route('users.index')->with('success','Data pengelola berhasil diperbarui');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        Storage::delete($user->foto_profil);
        $user->delete();
        
        return redirect()->route('users.index')->with('success', 'Data pengelola berhasil dihapus');
    }
}
