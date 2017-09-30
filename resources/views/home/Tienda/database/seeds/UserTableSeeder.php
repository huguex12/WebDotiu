<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array(
    [
      'name' 		=> 'Fabio',
      'last_name' => 'Diaz',
      'email' 	=> 'fabioedp15@gmail.com',
      'user' 		=> 'fabioedp15',
      'password' 	=> \Hash::make('123456'),
      'type' 		=> 'admin',
      'active' 	=> 1,
      'address' 	=> 'Esparza,Puntarenas',
      'created_at'=> new DateTime,
      'updated_at'=> new DateTime
    ],
    [
      'name' 		=> 'Sussy',
      'last_name' => 'Barrantes',
      'email' 	=> 'sussybarrantes@gmail.com',
      'user' 		=> 'sussy',
      'password' 	=> \Hash::make('123456'),
      'type' 		=> 'user',
      'active' 	=> 1,
      'address' 	=> 'Esparza,Puntarenas',
      'created_at'=> new DateTime,
      'updated_at'=> new DateTime
    ],

  );

  User::insert($data);
    }
}
