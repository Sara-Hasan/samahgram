<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      
            return [
                'user_id'=> User::factory()->make(),
                'post_img'=>'https://source.unsplash.com/random/500x500?sig'."=".random_int(1,1000),
                'post_text'=>$this->faker->paragraph(),
            ];
        
    }

}

