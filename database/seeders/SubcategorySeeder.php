<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            [
                'id'          => 1,
                'name'        => 'potato',
                'category_id' => 1,
            ],
            [
                'id'          => 2,
                'name'        => 'bread',
                'category_id' => 1,
            ],
            [
                'id'          => 3,
                'name'        => 'pepsi',
                'category_id' => 2,
            ],
            [
                'id'          => 4,
                'name'        => 'Cola',
                'category_id' => 2,
            ],
        ]);
    }
}
