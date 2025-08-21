<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController
{
    public function show(Request $request)
    {
        $response = $this->buildResponse(
            $request->input('start'),
            $request->input('end'),
            $request->input('timezone')
        );

        return response()->json($response, 200);
    }

    public function buildResponse(string $start, string $end, string $timezone): array
    {
        return [
            'start' => $start,
            'end' => $end,
            'timezone' => $timezone,
        ];
    }
}
