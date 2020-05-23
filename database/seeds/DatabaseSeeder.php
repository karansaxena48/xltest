<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(['name' => 'India', 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('countries')->insert(['name' => 'Us', 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);

        DB::table('states')->insert(['name' => 'up', 'country_id'=>1, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('states')->insert(['name' => 'mh', 'country_id'=>1, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('states')->insert(['name' => 'Us1', 'country_id'=>2, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('states')->insert(['name' => 'Us2', 'country_id'=>2, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);

        DB::table('cities')->insert(['name' => 'ald', 'state_id'=>1, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('cities')->insert(['name' => 'noida', 'state_id'=>1, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('cities')->insert(['name' => 'mumbai', 'state_id'=>2, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('cities')->insert(['name' => 'pune', 'state_id'=>2, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('cities')->insert(['name' => 'usct1', 'state_id'=>3, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('cities')->insert(['name' => 'usct2', 'state_id'=>3, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('cities')->insert(['name' => 'usct3', 'state_id'=>4, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
        DB::table('cities')->insert(['name' => 'usct4', 'state_id'=>4, 'created_at'=> date('Y-m-d'), 'updated_at'=> date('Y-m-d')]);
    }
}
