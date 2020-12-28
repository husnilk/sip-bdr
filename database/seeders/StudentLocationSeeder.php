<?php

namespace Database\Seeders;

use App\Models\StudentLocation;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::where('id', '<=', '45')->get();

        foreach($students as $student){
            StudentLocation::factory(1)->create(['student_id' => $student->id]);
        }
    }
}
