<?php

namespace App\Http\Controllers;

use App\Models\Completion;
use App\Models\Student;

use Illuminate\Http\Request;
use Mpdf;

class ExperimentController extends Controller
{
    public function student(Request $request)
    {

        $student_name = $request['student_name'];
        $student_num = $request['student_num'];
        $student_class = $request['student_class'];
        $experiment_name = $request['experiment_name'];

        $res = Student::establish($student_name, $student_num, $student_class, $experiment_name);

        return $res ?
            json_success('操作成功!', $res, 200) :
            json_fail('操作失败!', null, 100);
    }


    public function completion(Request $request)
    {

        $completion_1 = $request['completion_1'];
        $completion_2 = $request['completion_2'];
        $completion_3 = $request['completion_3'];
        $completion_4 = $request['completion_4'];
        $completion_5 = $request['completion_5'];
        $completion_6 = $request['completion_6'];
        $completion_l1 = $request['completion_l1'];
        $completion_l2 = $request['completion_l2'];
        $completion_l3 = $request['completion_l3'];
        $completion_m = $request['completion_m'];
        $completion_d = $request['completion_d'];
        $completion_xz1 = $request['completion_xz1'];
        $completion_xz2 = $request['completion_xz2'];
        $completion_pd1 = $request['completion_pd1'];
        $completion_pd2 = $request['completion_pd2'];
        $completion_pd3 = $request['completion_pd3'];
        $grade_xp = $request['grade_xp'];
        $student_id = $request['student_id'];




        $res1 = Completion::establish(
            $completion_1,
            $completion_2,
            $completion_3,
            $completion_4,
            $completion_5,
            $completion_6,
            $completion_l1,
            $completion_l2,
            $completion_l3,
            $completion_m,
            $completion_d,
            $completion_xz1,
            $completion_xz2,
            $completion_pd1,
            $completion_pd2,
            $completion_pd3,
            $student_id
        );

        $grade = 0;

        if ((strlen($completion_1 - (int)$completion_1) - 2) == 3) {
            $grade += 6;
        }
        if ((strlen($completion_2 - (int)$completion_2) - 2) == 3) {
            $grade += 6;
        }
        if ((strlen($completion_3 - (int)$completion_3) - 2) == 3) {
            $grade += 6;
        }
        if ((strlen($completion_4 - (int)$completion_4) - 2) == 3) {
            $grade += 6;
        }
        if ((strlen($completion_5 - (int)$completion_5) - 2) == 3) {
            $grade += 6;
        }
        if ((strlen($completion_6 - (int)$completion_6) - 2) == 3) {
            $grade += 6;
        }
        if ($completion_l1 == ($completion_4 - $completion_1)) {
            $grade += 6;
        }
        if ($completion_l2 == ($completion_5 - $completion_2)) {
            $grade += 6;
        }
        if ($completion_l3 == ($completion_6 - $completion_3)) {
            $grade += 6;
        }
        $ls = $completion_l1 + $completion_l2 + $completion_l3;
        if ($completion_m == (180 / $ls)) {
            $grade += 6;
        }
        if ($completion_d == sprintf("%.3f", 0.01178 * $completion_m)) {
            $grade += 10;
        }


        $grade = $grade + $grade_xp;


        $res2 = Student::grade($student_id, $grade);




        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }

    public function pdf(Request $request)
    {


        $student_id = $request['student_id'];


        $student_a = Student::show($student_id);

        $student_b = json_decode($student_a);

        $completion_1 = $student_b->completion_1;
        $completion_2 = $student_b->completion_2;
        $completion_3 = $student_b->completion_3;
        $completion_4 = $student_b->completion_4;
        $completion_5 = $student_b->completion_5;
        $completion_6 = $student_b->completion_6;
        $completion_l1 = $student_b->completion_l1;
        $completion_l2 = $student_b->completion_l2;
        $completion_l3 = $student_b->completion_l3;
        $completion_m = $student_b->completion_m;
        $completion_d = $student_b->completion_d;
        $completion_xz1 = $student_b->completion_xz1;
        $completion_xz2 = $student_b->completion_xz1;
        $completion_pd1 = $student_b->completion_pd1;
        $completion_pd2 = $student_b->completion_pd2;
        $completion_pd3 = $student_b->completion_pd3;

        $student_name = $student_b->student_name;
        $student_num = $student_b->student_num;
        $student_class = $student_b->student_class;
        $grade = $student_b->grade;







        $res = view('invoice', [
            'name' => $student_name,
            'student_num' => $student_num,
            'student_class' => $student_class,
            'grade' => $grade,
            'completion_1' => $completion_1,
            'completion_2' => $completion_2,
            'completion_3' => $completion_3,
            'completion_4' => $completion_4,
            'completion_5' => $completion_5,
            'completion_6' => $completion_6,
            'completion_l1' => $completion_l1,
            'completion_l2' => $completion_l2,
            'completion_l3' => $completion_l3,
            'completion_m' => $completion_m,
            'completion_d' => $completion_d,
            'completion_xz1' => $completion_xz1,
            'completion_xz2' => $completion_xz2,
            'completion_pd1' => $completion_pd1,
            'completion_pd2' => $completion_pd2,
            'completion_pd3' => $completion_pd3,

        ]);



        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);
        $mpdf->useAdobeCJK = TRUE;
        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output('实验报告', "i");

        exit;
    }
}