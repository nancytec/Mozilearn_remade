<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Model;
use App\Models\User;
use App\Models\WishList;
use Illuminate\Database\Eloquent\Factories\Factory;

class WishListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WishList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id'  => Course::inRandomOrder()->first()->id,
            'user_id'    => User::inRandomOrder()->first()->id,
        ];
    }
}
