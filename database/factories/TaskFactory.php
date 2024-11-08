<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name'=> fake()->name(),
            'description'=> fake()->realText(),
            'dueDate'=> fake()->dateTimeBetween('now', '+1 year'),
            'status'=> fake()->randomElement(['Pending','Inprogress', 'Completed']),
            'priority'=> fake()->randomElement(['Low','Medium', 'High']),
            'imgPath'=> fake()->imageUrl(),
            'assigned_user_id'=> 1,
            'created_by'=> 1,
            'updated_by'=> 1, 
            'created_at'=> time(), 
            'updated_at'=> time(), 
        ];
    }
}
