<?php

namespace App\Database\Seeds;

use Faker\Factory;
use CodeIgniter\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        for($i=0;$i<10;$i++){
            $this->db->table('client')->insert($this->generateClient());
        }
    }

    public function generateClient():array
    {
        $faker=Factory::create();

        return[
            'name'=>$faker->name(),
            'email'=>$faker->email,
            'retainer_fee'=>random_int(10000,10000000)
        ];

    }
}
