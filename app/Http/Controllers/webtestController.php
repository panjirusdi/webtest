<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inputform;

class webtestController extends Controller
{
    public function store(Request $request) {

        $form = new inputform();

        //$form->code = $request->code;
        $form->year = $request->year;
        $form->category = $request->category;
        $form->title = $request->title;
        $form->topic = $request->topic;
        $form->subtopic = $request->subtopic;
        $form->reference = $request->reference;

        $form->save();

        return redirect('/');
    }

    public function index(request $request) {

        /* $inputform = inputform::table('code') 
        inputform::raw("CONCAT(year,'/', category,'/', title, '/', topic, '/', subtopic) as code"))
        ->get(); */


        $data_input = new inputform();
        if (!empty($request->keyword)) {
            $data_input = $data_input->where('title', 'like', '%'.$request->keyword.'%')
                                     ->orWhere('topic', 'like', '%'.$request->keyword.'%')
                                     ->orWhere('subtopic', 'like', '%'.$request->keyword.'%')
                                     ->orWhere('year', 'like', '%'.$request->keyword.'%');
        }
        
        $data_input = $data_input->paginate(5);
        
        return view('home', compact('data_input'));
    }

    public function code() {
       
    }

}

