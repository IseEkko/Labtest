<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish($student_name, $student_num, $student_class, $experiment_name)
    {

        try {
            $res = Student::create(
                [
                    'student_name' => $student_name,
                    'student_num' => $student_num,
                    'student_class' => $student_class,
                    'experiment_name' => $experiment_name
                ]

            );

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function grade($student_id, $grade)
    {


        try {


            $res = Student::where('student.id', '=', $student_id)

                ->update(['grade' => $grade]);



            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }


    public static function show($student_id)
    {
        try {


            $res = Student::where('id', '=', $student_id)
                ->join('completion', 'studen.id', '=', 'completion.id')
                ->select(
                    'studen.student_name',
                    'studen.student_num',
                    'studen.student_class',
                    'studen.grade',
                    'completion.completion_1',
                    'completion.completion_2',
                    'completion.completion_3',
                    'completion.completion_4',
                    'completion.completion_5',
                    'completion.completion_6',
                    'completion.completion_l1',
                    'completion.completion_l2',
                    'completion.completion_l3',
                    'completion.completion_m',
                    'completion.completion_d',
                    'completion.completion_xz1',
                    'completion.completion_xz2',
                    'completion.completion_pd1',
                    'completion.completion_pd2',
                    'completion.completion_pd3'
                    
                )
                ->get();



            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }

        echo 1;
    }
}