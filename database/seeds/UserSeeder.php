<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::statement("SET FOREIGN_KEY_CHECKS=0;");
        DB::table('users')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1;");
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'is_admin'=>'1'
        ]);

        User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('user1234'),
            'is_admin'=>'0'
        ]);
    }
}
