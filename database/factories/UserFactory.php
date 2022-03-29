<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $array = [1, 2, 3, 4, 5];

        // $random = Arr::random($array);

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'sex' => $this->faker->randomElement(['M','F']),
            'telephone1' => $this->faker->e164PhoneNumber(),
            'telephone2' => $this->faker->e164PhoneNumber(),
            'pays' => $this->faker->country(),
            'pieceIdentite' => $this->faker->randomElement(['CNI','Passport']),
            'numerosPieceIdentite' => $this->faker->swiftBicNumber,
            'photo' => $this->faker->imageUrl(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => $this->faker->randomElement([1,2]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
