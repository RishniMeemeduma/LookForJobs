<?php

namespace App\Http\Controllers;

use App\Http\Requests\questionValidation;
use Illuminate\Http\Request;

class LookForJobsController extends Controller
{
    public function __construct(){

    }

    public function sendOpenAIRequest(questionValidation $question)
    {
        $question = $question->get('question');
        dd($question);
    }
}
