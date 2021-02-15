<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentResult;

class GenerateReportController extends Controller{

    public function index(request $request){
        $this->validate($request, [
            'ct'    => ['required'],
            'final' => ['required']
        ]);

        $ct    = $request->ct;
        $final = $request->final;

        $data = [
            'resultData' => StudentResult::get(),
            'ct'         => $ct, 
            'final'      => $final,
        ];

        return view('resultReport')->with($data);
    }
}
