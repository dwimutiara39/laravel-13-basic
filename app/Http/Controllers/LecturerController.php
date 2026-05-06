<?php

namespace App\Http\Controllers;

use App\Models\Departmen;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lecturer.index', [
            'title' => 'Lecturer',
            'lecturer' => Lecturer::latest()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('lecturer.create', [
            'title' => 'Create Lecturer',
            'departmens' => Departmen::latest()->get(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
        'name' => 'required|max:255',
        'departmen_id' => 'required|exists:departmens,id',
    ], [
        'name.required' => 'Nama Tidak Boleh Kosong',
        'name.max' => 'Nama Maksimal 255 Karakter',
        'departmen_id.required' => 'Program Studi Tidak Boleh Kosong',
        'departmen_id.exists' => 'Program studi yang dipilih tidak ditemukan',
    ]
    );

    Lecturer::create($validated);

    return to_route('lecturer.index')->withSuccess('Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lecturer $lecturer)
    {
        return view('lecturer.edit', [
            'title' => 'Edit Lecturer',
            'departmens' => Departmen::latest()->get(),
            'lecturer' => $lecturer,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lecturer $lecturer)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        'departmen_id' => 'required|exists:departmens,id',
    ], [
        'name.required' => 'Nama Tidak Boleh Kosong',
        'name.max' => 'Nama Maksimal 255 Karakter',
        'departmen_id.required' => 'Program Studi Tidak Boleh Kosong',
        'departmen_id.exists' => 'Program studi yang dipilih tidak ditemukan',
    ]);

    $lecturer->update($validated);
    return to_route('lecturer.index')->withSuccess('Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lecturer $lecturer)
    {
        $lecturer->delete($lecturer);
        return to_route('lecturer.index')->withSuccess('Data Berhasil Dihapus');
    }
}
