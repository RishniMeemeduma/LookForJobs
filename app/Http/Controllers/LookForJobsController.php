<?php

namespace App\Http\Controllers;

use OpenAI;
use Illuminate\Http\Request;
use App\Http\Requests\questionValidation;

class LookForJobsController extends Controller
{
    public function __construct(){

    }

    public function sendOpenAIRequest(questionValidation $question)
    {
        $question = $question->get('question');
        
        $client = OpenAI::client(env('OPENAI_API_KEY'));
        
        $result = $client->completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 600,
            'prompt' => sprintf('Write article about: %s', $question),
        ]);

        $content = trim($result['choices'][0]['text']);

        dd($content);
    }
}
