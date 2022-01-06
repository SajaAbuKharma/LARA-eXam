<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
public function add(Request $request)
{
    $validate=$request->validate([
        'question'=>'required',
        'opa'=>'required',
        'opb'=>'required',
        'opc'=>'required',
        'opd'=>'required',
    ]);
    $q=new question();
    $q->question=$request->question;
    $q->a=$request->opa;
    $q->b=$request->opb;
    $q->c=$request->opc;
    $q->d=$request->opd;
    $q->ans=$request->ans;
    $q->save();
    session::put('successMsg',Question success add);
    return redirect(to:'question');
}
}
