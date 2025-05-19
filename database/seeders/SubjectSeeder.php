<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        $subjects = [
            'Business',
            'Engineering',
            'Computer Science',
            'Health',
            'Math and Logic',
            'Language Learning',
            'Social Science',
            'Personal Development',
            'Data Science'
        ];

        foreach ($subjects as $subject) {
            Subject::firstOrCreate(['name' => $subject]);
        }
    }
}
