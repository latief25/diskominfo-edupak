<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  protected $model = User::class;
  public function definition()
  {
    return [
      'nip' => $this->faker->creditCardNumber() . "99",
      'nama' => $this->faker->name(),
    ];
  }

  /**
   * Indicate that the model's email address should be unverified.
   *
   * @return \Illuminate\Database\Eloquent\Factories\Factory
   */
}
