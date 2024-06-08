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
            'name' => 'Chicken Salad',
            'picture' => 'https://i.postimg.cc/rDMYhc98/gambar-2024-05-29-222819587.png', // Add the picture URL here
            'calories' => 209,
            'ingredients' => '2 cangkir ayam matang, dipotong dadu atau disuwir
            1 cangkir seledri, cincang
            1/2 cangkir bawang merah, cincang halus
            1/2 cangkir wortel, parut
            1/2 cangkir paprika merah atau hijau, cincang
            1/2 cangkir kacang almond atau kenari, cincang (opsional)
            1/2 cangkir kismis atau cranberi kering (opsional)
            1/2 cangkir mayones
            2 sendok makan yoghurt Yunani (opsional untuk kelezatan tambahan)
            1 sendok teh mustard Dijon (opsional)
            1 sendok makan jus lemon
            Garam dan lada hitam secukupnya
            Selada atau roti untuk penyajian',
            'servings' => 6,
            'prep_time' => '25 mins',
            'meal' => 'Breakfast',
            'health' => 'Vegan',
            'detail_resep' => 'Mulailah dengan mempersiapkan ayam matang yang telah dipotong dadu atau disuwir, kemudian campurkan dengan seledri cincang, bawang merah cincang halus, wortel parut, dan paprika merah atau hijau cincang. Untuk tambahan tekstur dan rasa, Anda bisa menambahkan kacang almond atau kenari cincang serta kismis atau cranberi kering. Untuk sausnya, campurkan mayones, yoghurt Yunani untuk kelezatan tambahan, mustard Dijon jika suka, dan jus lemon dalam mangkuk kecil. Setelah itu, tuangkan saus ke dalam campuran ayam dan sayuran, lalu aduk hingga rata. Bumbui dengan garam dan lada hitam secukupnya, kemudian cicipi dan sesuaikan bumbunya. Chicken salad ini bisa disajikan di atas daun selada sebagai hidangan utama yang segar dan sehat, atau sebagai isian sandwich dengan roti favorit Anda. Tambahan apel yang dipotong dadu atau herba segar seperti peterseli dan daun bawang bisa ditambahkan untuk variasi rasa yang lebih segar dan aroma yang lebih tajam.',
            'like' => 0,
        ]);
    }
}
