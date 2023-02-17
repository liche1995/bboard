<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classify;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classify>
 */
class ClassifyFactory extends Factory
{
    protected $model = Classify::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /*"name" => fake()->name,*/
            "name" => $this->classify(),
        ];
    }

    protected function classify(){
        $list = [
            "breaking_news",
            "game",
            "ainme",
            "comic",
            "travel",
            "others",
            "sport",
            "movie",
            "music",
            "local",
            "ouch",
        ];
        return $list[rand(0, count($list)-1)];
    }
}
