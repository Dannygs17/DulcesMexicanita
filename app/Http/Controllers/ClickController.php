<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Log;  // <-- Agrega esta línea

class ClickController extends Controller
{
    public function store(Request $request)
    {
        Log::info('ClickController@store fue llamado');  // <-- Aquí

        $data = [
            'fecha' => now()->toDateTimeString(),
            'etiqueta' => $request->input('tag'),
            'id' => $request->input('id'),
            'clases' => $request->input('classes'),
            'texto' => $request->input('text')
        ];

        $logLine = json_encode($data) . "\n";

        Storage::append('logs/clicks.txt', $logLine);

        return response()->json(['message' => 'Click guardado correctamente.']);
    }
}
