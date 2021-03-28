<?php

namespace Database\Factories;

use App\Models\Bank;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bank::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bank' => $this->faker->randomElement($array =  array ('FBC Bank','Stanbic Bank','ZB Bank')),
            'branch' => $this->faker->city,
            'branch_code' => strtoupper($this->faker->unique()->bothify('###')),
            'account_number' => $this->faker->bankAccountNumber,
        ];
    }
}
