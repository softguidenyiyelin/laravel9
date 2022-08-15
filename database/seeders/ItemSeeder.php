<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate();
        DB::table('items')->insert([
            [
                'id'          => 1,
                'code_no'     => 'P-001',
                'name'        => 'Oishi',
                'category_id' => '1',
                'photo'       => '',
                'price'       => '300',
            ],
            [
                'id'          => 2,
                'code_no'     => 'P-002',
                'name'        => 'Good Morning',
                'category_id' => '1',
                'photo'       => '',
                'price'       => '500',
            ],
        ]);
    }
}
