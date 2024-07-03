<?php

namespace Database\Factories;

use App\Models\Kost;
use App\Models\User\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
            'alamat' => $this->faker->address,
            'deskripsi' => $this->faker->sentence,
            'harga' => $this->faker->numberBetween(500000, 5000000),
            'member_id' => Member::factory(),
        ];
    }
}
