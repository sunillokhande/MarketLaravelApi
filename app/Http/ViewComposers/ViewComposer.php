<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Users\Repository as UserRepository;

App::before(function($request)  
{
     $headers=array('Access-control-allow-origin'=>'*','Cache-Control'=>'no-cache, no-store, max-age=0, must-revalidate','Pragma'=>'no-cache','Expires'=>'Fri, 01 Jan 1990 00:00:00 GMT');

     View::share('headers', $headers);
}); 
View::composer('/', function($view)
{
	$headers=array('Cache-Control'=>'no-cache, no-store, max-age=0, must-revalidate','Pragma'=>'no-cache','Expires'=>'Fri, 01 Jan 1990 00:00:00 GMT');

     View::share('headers', $headers);

});
?>
