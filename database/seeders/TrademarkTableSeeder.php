<?php

namespace Database\Seeders;

use App\Models\Trademark;
use Illuminate\Database\Seeder;

class TrademarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trademark::factory()->count(10)->create();
    }
}
