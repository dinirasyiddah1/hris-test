<?php

namespace Database\Factories;

use App\Models\Kehadiran;
use Illuminate\Database\Eloquent\Factories\Factory;

class KehadiranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kehadiran::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $in = $this->faker->randomElement(["2021-04-23 08:06:22", "2021-04-23 09:06:22"]);
        $out = $this->faker->randomElement(["2021-04-24 08:06:22", "2021-04-24 09:06:22"]);
        $hour = $this->faker->randomElement([8, 9]);
        $location = $this->faker->randomElement(["-0.9339786,100.4305793"]);
        $deviceid = $this->faker->randomElement(["C112C3FB-3097-42AC-9BF2-45F1EDFFD459"]);
        return [
            'in' => $in,
            'out' => $out,
            'hour' => $hour,
            'location' => $location,
            'deviceid' => $deviceid

        ];
    }
}
