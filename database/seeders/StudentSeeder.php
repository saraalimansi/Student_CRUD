<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                'Sname' => 'John Doe',
                'Semail' => 'johndoe@example.com',
                'Smobile' => '1234567890',
                'Sgender' => 'M',
                'Status' => true,
            ],
            [
                'Sname' => 'Jane Doe',
                'Semail' => 'janedoe@example.com',
                'Smobile' => '0987654321',
                'Sgender' => 'F',
                'Status' => true,
            ],
            [
                'Sname' => 'Bob Smith',
                'Semail' => 'bobsmith@example.com',
                'Smobile' => null,
                'Sgender' => 'M',
                'Status' => false,
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}

//php artisan db:seed --class=StudentSeeder
//php artisan migrate:rollback
