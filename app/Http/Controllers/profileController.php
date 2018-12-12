<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use Image;

class profileController extends Controller
{
    public function index($id)
    {
      $user = Auth::user();
      return view('profiles.profile', compact(['id', 'user']));
   }

   public function update(Request $req, $id)
   {
      $user = Auth::user();
      if ($req->password == null) {
         $pass = $user->password;
      }else{
         $pass = Hash::make($req->password);
      }

      $data = [
         'username' => $req->username,
         'email' => $req->email,
         'password' => $pass
      ];

      // dd($data);

      User::find($id)->update($data);

      return redirect()->back()->with(['warning' => 'Data Profile Telah di Update.']);
   }

   public function update_avatar(Request $req)
   {
      if ($req->hasFile('avatar')) {
         $user = Auth::user();
         $avatar = $req->file('avatar');
         $filename = time() . "." . $avatar->getClientOriginalExtension();
         Image::make($avatar)->resize(200, 200)->save(public_path('/uploads/' . $filename));

         $user->avatar = $filename;
         $user->save();

         return redirect()->back()->with(['warning' => 'Foto Profile Telah di Update.']);
      }
   }

   public function del_avatar(Request $req)
   {
      $user = Auth::user();
      $user->avatar = "default.jpg";
      $user->save();

      return redirect()->back()->with(['error' => 'Foto Profile Telah di Hapus.']);
   }
}
