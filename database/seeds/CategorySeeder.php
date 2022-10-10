<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['label' => 'HTML', 'color' => 'danger'],
            ['label' => 'CSS', 'color' => 'primary'],
            ['label' => 'ES6', 'color' => 'warning'],
            ['label' => 'Bootstrap', 'color' => 'success'],
            ['label' => 'PHP', 'color' => 'dark']
        ];

        foreach($categories as $category){
            $new_category = new Category();
            
            $new_category->label = $category['label'];
            $new_category->color = $category['color'];
            $new_category->save();
        }
    }
}
