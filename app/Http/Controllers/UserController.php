<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
	
	 $data=["A"=>"Kiran"];
	return view('user.showProfile')->with('data',json_decode('{name:kiran}'));

	
	/*        return view('user.profile', ['user' => User::findOrFail($id)]);*/
    }
}
 
