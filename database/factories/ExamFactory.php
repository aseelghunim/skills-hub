<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $i=0;
        $i++;

        return [
            'title'=>$this->faker->word(),
            'desc'=>$this->faker->word(1000),
            'img'=>"exams/$i.png",
            'question_no'=>15,
            'difficulty'=>$this->faker->numberBetween(1,5),
            'duration_mins'=>$this->faker->numberBetween(1,3) * 30,
        ];
    }
}
