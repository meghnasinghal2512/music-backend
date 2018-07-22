<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(TalentCategoryTableSeeder::class);
         $this->call(RoleTableSeeder::class);
    }
}


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array(
          array('name'=>'admin','permission' => 'all','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'manager','permission' => 'read,write','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'buyer','permission' => 'read,write','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'seller','permission' => 'read,write','created_at'=> Carbon::now(),'updated_at'=> Carbon::now())

      );
      DB::table('roles')->insert($data);
    }
}

class TalentCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array(
          array('name'=>'tattoo artist','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'music artist','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'tattoo_artist','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'fitness trainer','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'models','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'producers','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'movie producers','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'author','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'photographer','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()),
          array('name'=>'nutritionists','created_at'=> Carbon::now(),'updated_at'=> Carbon::now())

      );
      DB::table('talent_categories')->insert($data);
    }

}
