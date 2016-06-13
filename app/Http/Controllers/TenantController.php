<?php
/**
 * Created by PhpStorm.
 * User: KuNaL
 * Date: 06-06-2016
 * Time: 3:18 PM
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Tenant;

class TenantController extends Controller
{
    protected function getAllTenants(){
//        $tenants1 = DB::table('tenants')->get();
        $tenants2 = Tenant::all();
        $tenantList = Array();
        foreach ($tenants2 as $tenantItem){
            $temp=array(
                'id'=>$tenantItem['id'],
                'name'=>$tenantItem['name'],
                'address'=>$tenantItem['address'],
            );
            array_push($tenantList,$temp);
            //echo $tenantItem->name;

        }

        return response()->json($tenantList);
    }

}