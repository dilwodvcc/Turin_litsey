<?php

namespace App\Http\Controllers\API;

use App\Models\DB;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Result;
use App\Traits\Validator;
use Src\Auth;

class ResultController
{
    use Validator;
    public function store()
    {
        $resultItems = $this->validate([
            'quiz_id' => 'required|integer'
        ]);
        $quiz = (new Quiz())->find($resultItems['quiz_id']);

        if ($quiz) {
            $result = new Result();
            $result->create(
                Auth::user()->id,
                $quiz->id,
                $quiz->time_limit
            );
            apiResponse([
                'massage' => "Quiz created successfully!"
                ], 201);
        }
        apiResponse([
            'error' =>
            ['massage' => 'Quiz not found :('],
        ],404);
    }
}