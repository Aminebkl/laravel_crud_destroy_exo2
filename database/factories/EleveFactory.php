<?php

namespace Database\Factories;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eleve::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                "nom" => $this->faker->name(),
                "prenom"=> $this->faker->name(),
                "age"=> $this->faker->randomNumber(),
                "ddn"=> $this->faker->date(),
                "belge"=> $this->faker->boolean()
            ];
    }
}
