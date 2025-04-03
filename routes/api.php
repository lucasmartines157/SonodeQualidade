<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\UserSleepData;

Route::middleware('api')->group(function () {
    Route::post('/register', function (Request $request) {
        $data = UserSleepData::create($request->all());
        return response()->json($data, 201);
    });

    Route::get('/user/{id}', function ($id) {
        return response()->json(UserSleepData::findOrFail($id));
    });

    Route::put('/user/{id}', function (Request $request, $id) {
        $data = UserSleepData::findOrFail($id);
        $data->update($request->all());
        return response()->json($data);
    });

    Route::delete('/user/{id}', function ($id) {
        UserSleepData::findOrFail($id)->delete();
        return response()->json(['message' => 'Registro excluído com sucesso']);
    });
});