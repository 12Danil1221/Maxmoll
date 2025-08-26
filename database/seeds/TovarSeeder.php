<?php

use App\Tovar;
use Illuminate\Database\Seeder;

class TovarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tovar::create([
            'name'=>'Пример товара
XL-12412', 	
            'category'=>'TestTovarCategory', 
            'slug'=>'TestTovarSlug', 
            'price'=>1337, 
            'image'=>'TestTovarImage' ,
            'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae aut et aliquam laboriosam esse saepe reprehenderit, illum, rem ipsum minus possimus illo laudantium debitis neque fugiat labore. Impedit, totam cum!'
        ]);

    }
}