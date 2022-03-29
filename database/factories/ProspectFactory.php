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
            'telephone1' => $this->faker->e164PhoneNumber(),
            'telephone2' => $this->faker->e164PhoneNumber(),
            'csp' =>  $this->faker->randomElement($array = array ('Particulier','Société')),
            'pays' => $this->faker->country(),
            'ville' => $this->faker->city(),
            'rue' => $this->faker->city(),
            'zipcode' => $this->faker->city(),
            'profession' => $this->faker->jobTitle(),
            'secteurActivite' => $this->faker->word(),
            'ppe' => $this->faker->boolean(),
            'societe' => $this->faker->company(),
            'pieceIdentite' => $this->faker->randomElement(['CNI','PASSEPORT']),
            'numerosPieceIdentite' => $this->faker->swiftBicNumber,
            'presentation' => $this->faker->text($maxNbChars = 200),
            'originProspect' => $this->faker->text($maxNbChars = 200),
            'potentielRelation' => $this->faker->text($maxNbChars = 200),
            'clientAt' => $this->faker->dateTime(),

        ];
    }
}
