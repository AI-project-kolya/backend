<?php

namespace App\Http\Controllers;

use App\Http\Requests\InputRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InputController extends Controller
{
    public function getInput(InputRequest $request)
    {
        $userInput =  array_values($request->validated());

        $response = Http::post('https://python-ml-test.onrender.com/predict_price_range', [
            'user_input' => $userInput,
        ]);

        if ($response->successful()) {
            return response()->json([
                'message' => 'Prediction successful.',
                'price_range' => $response->json()['price_range']
            ]);
        } else {
            return response()->json([
                'message' => 'Prediction failed.',
                'error' => $response->json()['message']
            ], $response->status());
        }
    }
}
