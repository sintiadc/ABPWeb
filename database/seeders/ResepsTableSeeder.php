<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resep;

class ResepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resep::create([
            'name' => 'Capcay',
            'picture' => 'https://cdns.klimg.com/merdeka.com/i/w/news/2021/07/02/1325227/content_images/670x335/20210702114648-1-capcay-goreng-008-tantiya-nimas-nuraini.jpg', // Add the picture URL here
            'calories' => 109,
            'ingredients' => '10 bh bakso,potong tipis-tipis5 lbr daun kol, potong-potong150 gram jamur bundar, potong jadi 4 bagian130 gram udang ukuran besar, kupas kulitnya70 gram caisim,iris kasar-kasar150 gram kembang kol, dipotong-potong3 bh wortel segar,iris tipis-tipis140 gram cumi-cumi segar, potong melingkar70 gram sawi, irisBahan bumbu:4 sdm saus tiramAir secukupnya4 bh cabai merah segar3 siung bawang putih, haluskanGula pasir secukupnyaPenyedap rasa secukupnyaGaram secukupnya6 btr bawang merah, haluskanMinyak secukupnya',
            'servings' => 3,
            'prep_time' => '20 mins',
            'meal' => 'Lunch',
            'health' => 'Vegan',
            'detail_resep' => 'Tumis bumbu sampai harum. Masukan bakso, udang dan cumi. Tumis dan aduk sampai berubah warna dan bumbu meresap. Masukan semua sayuran, tumis sampai layu.
Tambahkan gula, garam, saus tiram dan penyedap rasa. Aduk rata.
Tuang air secukupnya, tunggu hingga mendidih.',
            'like' => 999,
        ]);

        Resep::create([
            'name' => 'Trancam',
            'picture' => 'https://cdns.klimg.com/merdeka.com/i/w/news/2021/07/02/1325227/content_images/670x335/20210702114649-1-trancam-001-tantiya-nimas-nuraini.jpg', // Add the picture URL here
            'calories' => 122,
            'ingredients' => 'KemangiKubis secukupnya, iris tipis1/4 butir kelapa parut2 buah kacang panjang, iris kecil1 buah mentimun, kupas7 buah petai cina, kupasTauge pendek sesuai seleraBumbu halus:Sedikit kencur2 buah cabai rawit1-2 siung bawang putih1 buah cabai merah besarSedikit garam',
            'servings' => 2,
            'prep_time' => '2 hours 5 mins',
            'meal' => 'Lunch',
            'health' => 'Vegan',
            'detail_resep' => 'Campur semua sayuran dan dipotong sesuai selera.
Campurkan bumbu halus dengan kelapa parut.
Campur dan aduk rata sayuran dengan kelapa yang sudah dibumbui.',
            'like' => 25,
        ]);

        Resep::create([
            'name' => 'Sup Sengkel Bening',
            'picture' => 'https://cdns.klimg.com/merdeka.com/i/w/news/2021/07/02/1325227/content_images/670x335/20210702114651-1-resep-sup-daging-untuk-menu-sahur-lezat-segar-dan-menyehatkan-007-ayu-isti.jpg', // Add the picture URL here
            'calories' => 300,
            'ingredients' => '500 gram daging bagian sengkel, potong-potong

3 siung bawang putih, haluskan

3 butir bawang merah, haluskan

air secukupnya

garam dan penyedap rasa

lada bubuk

2 sdt bawang merah goreng

3 daun bawang potong kecil',
            'servings' => 1,
            'prep_time' => '45 mins',
            'meal' => 'Dinner',
            'health' => 'Vegan',
            'detail_resep' => 'Tumis bawang merah dan putih sampai kuning dan wangi.
Masukkan air secukupnya, tunggu sampai mendidih, masukkan daging sengkel.
Tambahkan garam, penyedap dan lada bubuk,masak sampai daging sengkel empuk. Tes rasa.
Sajikan bersama taburan bawang goreng dan daun bawang di atasnya.',
            'like' => 199,
        ]);

        
    }
}
