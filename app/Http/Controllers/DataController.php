<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestData; // Импортируйте модель TestData

class DataController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        // Валидация данных
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:test_data,email',
        ]);

        TestData::create($validatedData);

        return response()->json(['message' => 'Данные успешно сохранены']);
    }
}