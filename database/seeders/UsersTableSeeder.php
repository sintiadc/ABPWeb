<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'username' => 'johndoe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
            'umur' => 30,
            'jenis_kelamin' => 'Laki-laki',
            'berat_badan' => 70,
            'tinggi_badan' => 175,
        ]);
    }
}
