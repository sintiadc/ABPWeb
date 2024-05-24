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
            'name' => 'Sintia Dwi Cahya',
            'username' => 'sintiadc',
            'email' => 'sintia@gmail.com',
            'password' => bcrypt('sintia123'),
            'umur' => 15,
            'jenis_kelamin' => 'Perempuan',
            'berat_badan' => 50,
            'tinggi_badan' => 165,
        ]);
    }
}
