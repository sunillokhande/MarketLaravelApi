<?php

namespace App\Http\Controllers;

use Log;
use App\User;

use JWTAuth;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use JWTAuthException;

class AuthController extends Controller
{

    private $user;
    private $jwtauth;
    public function __construct(User $user,JWTAuth $jwtauth)
    {
   	 $this->user = $user;
	 $this->jwtauth = $jwtauth;    
    }
    public function authenticate(Request $request)
    {
	// get user credentials: email, password
	Log::info("*******************************************".$request);
	Log::info($request['data']);
		
	  $credentials = $request['data'];
	  $token = null;
      $temp= null;
	  try {
    		$token = JWTAuth::attempt($credentials);
    		if (!$token) {
          		return response()->json(['invalid_email_or_password'], 422);
    		}
          else{
            $user = User::where('email','umar505@gmail.com')->first();
             $temp=array(
                 'user_id'=>$user['id'],
                 'email'=>$user['email'],
                 'full_name'=>$user['full_name'],
                 'mobile'=>$user['mobile'],
      			 'username'=>$user['username'],
      			 'status'=>$user['status'],							// 1 : active, 0:blocked 	
				 'token'=>$token
             );
          }
          
  	} catch (JWTAuthException $e) {
	    	return response()->json(['failed_to_create_token'], 500);
  	}

  	return response()->json($temp);

    }

	protected function register(Request $request){
		return "Success";
	}

    protected function create(Request $request)
    {
		$data=$request["data"];
		
        //try{
			
		/*//validation
			$this->validate($request, [
				'email' => 'unique:email',
				'mobile' => 'unique:mobile',
				'username' => 'unique:username'
		]);*/
       
           $newUser=new User();
           $validate=$newUser->validate($data);
		
        if(!$validate)
        {
            return response()->json([$newUser->getErrors()], 422);
        }
        
        //creating new user
			$newUser = $this->user->create([
      			"full_name" => $data['full_name'],
      			"email" => $data['email'],
      			"mobile"=>$data['mobile'],
      			"username"=>$data['username'],
      			"status"=>"1",							// 1 : active, 0:blocked 	
				"password" => bcrypt($data["password"]),
		    	"tenant_id"=>"0",									//by default no tenant or outlet selected	
			]);

			if (!$newUser) {
				return response()->json(['failed_to_create_new_user'], 500);
				}

		//$newUser["token"]=JWTAuth::fromUser($newUser);
		
			$userObj=["user_id"=>$newUser["id"],"full_name"=>$newUser["full_name"],"email"=>$newUser["email"],"token"=>JWTAuth::fromUser($newUser)];

	 		return response()->json([$userObj]);
		//}
		//catch(Exception $e){
		//	return response()->json([$e->getMessage()], 422);
		//}
    }
}
