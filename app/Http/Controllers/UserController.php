<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $usr = User::get();
        return view('page.user.user',compact('usr'));
    }

    public function update(Request $request,$id)
    {
        $duplikat = User::where('email', $request->email)->first();
        if($duplikat)
        {
            // gagal
            return redirect()->route('');
        }else
        {
            $user = new User;
            $user->prodi_id= $request->prodi_id;
            $user->nama= $request->nama;
            $user->email= $request->email;
            $user->password= bcrypt($request->password);
            $user->status= $request->status;
            $user->save();
            return redirect()->route('');
        }
    }

}
