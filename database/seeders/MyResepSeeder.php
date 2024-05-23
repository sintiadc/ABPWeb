<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MyResep;
use App\Models\User;
use App\Models\Resep;

class MyResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Misalnya Anda memiliki beberapa pengguna dan resep yang telah dibuat sebelumnya
        $user = User::first();
        $resep = Resep::first();

        MyResep::create([
            'Tipe' => 'Bookmark',
            'id_user' => $user->id,
            'id_resep' => $resep->id,
        ]);
    }
}
