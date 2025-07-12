<?php

namespace App\Http\Controllers;

use App\Models\Klinik;
use Illuminate\Http\Request;

class KlinikController extends Controller
{
    public function index() {
        return response()->json(Klinik::all());
    }

    public function store(Request $request) {
        $klinik = Klinik::create($request->all());
        return response()->json($klinik, 201);
    }

    public function show($id) {
        return response()->json(Klinik::findOrFail($id));
    }

    public function update(Request $request, $id) {
        $klinik = Klinik::findOrFail($id);
        $klinik->update($request->all());
        return response()->json($klinik);
    }

    public function destroy($id) {
        Klinik::destroy($id);
        return response()->json(null, 204);
    }
}

