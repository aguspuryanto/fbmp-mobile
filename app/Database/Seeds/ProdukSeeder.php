<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        // 'akun','title','description','label','target','price','category','condition','gambar'
        
        // $produk = [];
        for ($i = 0; $i <= 20; $i++) {
            $data = [
                'akun' => $faker->name(),
                'title' => $faker->title(),
                'description' => $faker->text(),
                'label' => $faker->title(),
                'target' => $faker->randomElement(['Sidoarjo', 'Surabaya', 'Malang', 'Mojokerto']),
                'price' => $faker->randomNumber(2),
                'category' => $faker->randomElement(['Kamera', 'Laptop', 'Smartphone']),
                'condition' => $faker->randomElement(['Baru', 'Bekas']),
                'gambar' => $faker->name() . '.jpg'
            ];

            $this->db->table('products')->insert($data);
        }
    }
}
