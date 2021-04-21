<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    // all questions
    public function index()
    {
        $questions = Question::all()->toArray();
        return array_reverse($questions);
    }

    // add question
    public function add(Request $request)
    {
        $question = new Question([
            'question' => $request->input('question'),
            'reponse' => $request->input('reponse')
        ]);
        $question->save();

        return response()->json('The question successfully added');
    }

    // edit question
    public function edit($id)
    {
        $question = Question::find($id);
        return response()->json($question);
    }

    // update question
    public function update($id, Request $request)
    {
        $question = Question::find($id);
        $question->update($request->all());

        return response()->json('The question successfully updated');
    }

    // delete question
    public function delete($id)
    {
        $question = Question::find($id);
        $question->delete();

        return response()->json('The question successfully deleted');
    }
}