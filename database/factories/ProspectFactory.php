<?php

namespace Database\Factories;

use App\Models\Prospect;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProspectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prospect::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'designation' => $this->faker->unique()->name(),
            'email' => $this->faker->unique()->email(),
            'tel' => $this->faker->e164PhoneNumber(),
            'csp' =>  $this->faker->randomElement($array = array ('Particulier','Société')),
            'pays' => $this->faker->country(),
            'ville'=> $this->faker->city(),
            'zip'=>   'BP'.$this->faker->buildingNumber(),
            'secteurAct' => $this->faker->word(),
            'profession' => $this->faker->jobTitle(),
            'ppe' => $this->faker->randomElement([1,0]),
            'originProspect' => $this->faker->text($maxNbChars = 200),
            'presentation' => $this->faker->text($maxNbChars = 200),
            'potentielRelation' => $this->faker->text($maxNbChars = 200),
            'status' => $this->faker->randomElement([1,0]),

        ];
    }
}
