<?php

namespace Database\Factories;

use App\Models\Activite;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActiviteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'typeActivity' => $this->faker->randomElement(['Rendez-vous','call']),
            'dateEcheance' => $this->faker->dateTime(),
            'resume' =>  $this->faker->word(),
            'observation' =>  $this->faker->text(),
            'besoinDuClient' =>  $this->faker->word(),
            'objectifDeCollecte' => $this->faker->randomDigit(),
            'ressourceCollecte' => $this->faker->randomElement([1,2]),
            'produitsCom' =>$this->faker->text(),
            'actionEntreprendre' =>$this->faker->text(),
            'statut' =>'RDV',
        ];
    }
}
