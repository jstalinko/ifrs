<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Helper;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *    $table->string('code' , 50)->unique();
            $table->string('name' , 100);
            $table->string('description' , 255)->nullable();
            $table->integer('price');
            $table->integer('price_modal');
            $table->string('image' , 255)->nullable();
            $table->integer('stock')->default(1);

            $table->integer('category_id');
            $table->text('supplier_id');
     */
    public function run(): void
    {
        $products = [
            [
                'code' => Helper::genCode('product'),
                'name' => 'Es Teh',
                'description' => 'Es Teh',
                'price' => 5000,
                'price_modal' => 3000,
                'image' => 'https://www.masakapahariini.com/wp-content/uploads/2019/04/Resep-Es-Teh-Manis.jpg',
                'stock' => 10,
                'category_id' => 2,
                'supplier_id' => json_encode([1,2,3,4,5])
            ],
            [
                'code' => Helper::genCode('product'),
                'name' => 'Es Jeruk',
                'description' => 'Es Jeruk',
                'price' => 5000,
                'price_modal' => 3000,
                'image' => 'https://www.masakapahariini.com/wp-content/uploads/2019/04/Resep-Es-Jeruk.jpg',
                'stock' => 10,
                'category_id' => 2,
                'supplier_id' => json_encode([1,2,3,4,5])
            ],
            [
                'code' => Helper::genCode('product'),
                'name' => 'Es Campur',
                'description' => 'Es Campur',
                'price' => 5000,
                'price_modal' => 3000,
                'image' => 'https://www.masakapahariini.com/wp-content/uploads/2019/04/Resep-Es-Campur.jpg',
                'stock' => 10,
                'category_id' => 2,
                'supplier_id' => json_encode([1,2,3,4,5])
            ],
            [
                'code' => Helper::genCode('product'),
                'name' => 'Es Cincau',
                'description' => 'Es Cincau',
                'price' => 5000,
                'price_modal' => 3000,
                'image' => 'https://www.masakapahariini.com/wp-content/uploads/2019/04/Resep-Es-Cincau.jpg',
                'stock' => 10,
                'category_id' => 2,
                'supplier_id' => json_encode([1,2,3,4,5])
            ],
            [
                'code' => Helper::genCode('product'),
                'name' => 'Es Cendol',
                'description' => 'Es Cendol',
                'price' => 5000,
                'price_modal' => 3000,
                'image' => 'https://www.masakapahariini.com/wp-content/uploads/2019/04/Resep-Es-Cendol.jpg',
                'stock' => 10,
                'category_id' => 2,
                'supplier_id' => json_encode([1,2,3,4,5])
            ]
        ];


        foreach($products as $product){
            \App\Models\Product::create($product);
        }
    }
}
