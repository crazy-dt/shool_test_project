<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\StudentResult;

class StudentResultController extends Controller{
    public function index(){
        return view('resultList');
    }

    public function resultData(){
        return StudentResult::get();
    }

    public function updateData($id){
        return StudentResult::where('id',$id)->first();
    }

    public function saveResult(Request $request){
        
        $this->validate($request, [
            'student_name' => ['required'],
            'ct1h'         => ['required'],
            'ct2h'         => ['required'],
            'ct3h'         => ['required'],
            'half'         => ['required'],
            'ct1f'         => ['required'],
            'ct2f'         => ['required'],
            'ct3f'         => ['required'],
            'final'        => ['required']
        ]);
        
        $data = [
            'student_name' => $request->student_name,
            'ct1h'         => $request->ct1h,
            'ct2h'         => $request->ct2h,
            'ct3h'         => $request->ct3h,
            'half'         => $request->half,
            'ct1f'         => $request->ct1f,
            'ct2f'         => $request->ct2f,
            'ct3f'         => $request->ct3f,
            'final'        => $request->final
        ];

        $result = StudentResult::create($data);
        return $result;
    }

    public function updateResult(Request $request, $id){
        $this->validate($request, [
            'student_name' => ['required'],
            'ct1h'         => ['required'],
            'ct2h'         => ['required'],
            'ct3h'         => ['required'],
            'half'         => ['required'],
            'ct1f'         => ['required'],
            'ct2f'         => ['required'],
            'ct3f'         => ['required'],
            'final'        => ['required']
        ]);

        $data = [
            'student_name' => $request->student_name,
            'ct1h'         => $request->ct1h,
            'ct2h'         => $request->ct2h,
            'ct3h'         => $request->ct3h,
            'half'         => $request->half,
            'ct1f'         => $request->ct1f,
            'ct2f'         => $request->ct2f,
            'ct3f'         => $request->ct3f,
            'final'        => $request->final
        ];

        $result = StudentResult::where('id',$id)->update($data);
        return $result;
    }
}
