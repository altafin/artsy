<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receipt>
 */
class ReceiptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'issuer_name' => $this->faker->name()
            , 'issuer_type' => $this->faker->randomElement(['F', 'J'])
            , 'issuer_document' => $this->faker->numerify('###########')
            , 'issuer_address' => $this->faker->address()
            , 'issuer_complement' => $this->faker->title()
            , 'issuer_reference' => $this->faker->title()
            , 'issuer_city' => $this->faker->city()
            , 'issuer_state' => $this->faker->streetSuffix()
            , 'issuer_zipcode' => $this->faker->numerify('#########')
            , 'issuer_telephone' => $this->faker->phoneNumber()
            , 'issuer_email' => $this->faker->email()
            , 'payer_name' => $this->faker->name()
            , 'payer_type' => $this->faker->randomElement(['F', 'J'])
            , 'payer_document' => $this->faker->numerify('###########')
            , 'payer_address' => $this->faker->address()
            , 'payer_complement' => $this->faker->title()
            , 'payer_reference' => $this->faker->title()
            , 'payer_city' => $this->faker->city()
            , 'payer_state' => $this->faker->streetSuffix()
            , 'payer_zipcode' => $this->faker->numerify('#########')
            , 'payer_telephone' => $this->faker->phoneNumber()
            , 'payer_email' => $this->faker->email()
            , 'date' => $this->faker->dateTime()
            , 'value' => $this->faker->randomFloat(2)
            , 'referent' => $this->faker->paragraph()
        ];
    }
}
