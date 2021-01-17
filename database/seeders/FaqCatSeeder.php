<?php

namespace Database\Seeders;
use App\Models\FaqCategories;
use Illuminate\Database\Seeder;

class FaqCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FaqCategories::create([
            'name'=>"Cat1"
        ]);
        FaqCategories::create([
            'name'=>"Cat2"
        ]);
    }
}
