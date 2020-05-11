<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order_model;
use App\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;


class ProfileController extends Controller
{
    public function index()
    {
    	return view('profile.index');
    }


    public function password()
    {
    	return view('profile.updatePassword') ;
    }

    public function updatePassword(Request $request)
    {
    	$oldPassword = $request->oldPassword;
    	$newPassword = $request->newPassword;

    	if (!Hash::check($oldPassword,Auth::user()->password)) {
    		return back()->with('msg','Password incorrect');
    	}else{

    		$request->user()->fill(['password'=>Hash::make($newPassword)])->save();

    		return back()->with('msg','Password has been Updated');
    	}
    }
}
