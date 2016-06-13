<?php

use Illuminate\Database\Seeder;
use App\tenant;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	tenant::create(array('name'=>'Pune City','area'=>'Kothrud','city'=>'Pune','state'=>'Maharashtra','address'=>'RTO office Pune','office_contact'=>'02027490073','pin_code'=>411019,'status'=>1));
	tenant::create(array('name'=>'Pimpri City','area'=>'Pimpri','city'=>'Pune','state'=>'Maharashtra','address'=>'Pimpri bazzar','office_contact'=>'02027490073','pin_code'=>411018,'status'=>1));
	tenant::create(array('name'=>'Hadpsar','area'=>'Hadpsar','city'=>'Pune','state'=>'Maharashtra','address'=>'Fatima nagar','office_contact'=>'02027490073','pin_code'=>411012,'status'=>1));
	tenant::create(array('name'=>'Wagholi','area'=>'Wagholi','city'=>'Pune','state'=>'Maharashtra','address'=>'Havad road, murur','office_contact'=>'02027490073','pin_code'=>411014,'status'=>1));
	//User::create(array('email' => 'kiran@gmail.com','password'=>'userauthentication'));
        // $this->call(UsersTableSeeder::class);
    }
}
