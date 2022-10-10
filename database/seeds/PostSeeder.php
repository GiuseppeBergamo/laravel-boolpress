<?php

use App\User;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user_ids = User::pluck('id')->toArray();
        
        for($i = 0; $i < 10; $i++){
            $new_post = new Post();
            
            $new_post->title = $faker->text(15);
            $new_post->user_id = Arr::random($user_ids);
            $new_post->content = $faker->paragraphs(2, true);
            $new_post->image = $faker->imageUrl(250, 250);


            $new_post->save();
        }
    }
}
