<?php

use Illuminate\Database\Seeder;
use App\Size;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create(['size' => '16 oz', 'Price' => '69']);
        Size::create(['size' => '22 oz', 'Price' => '75']);
    }
}
