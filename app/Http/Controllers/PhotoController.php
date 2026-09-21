<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PhotoController extends Controller implements HasMiddleware
{

    public function index()
    {
        return "Ini daftar foto";
    }

    public function create()
    {
        return "Ini form tambah foto ";
    }

    public function store(Request $request)
    {
        return "Foto berhasil disimpan";
    }

    public function show(string $id)
    {
        return "Ini detail foto nomor $id ";
    }

    public function edit(string $id)
    {
        return "Ini form edit foto nomor $id ";
    }

    public function update(Request $request, string $id)
    {
        return "Foto nomor $id berhasil diupdate ";
    }

    public function destroy(string $id)
    {
        return "Foto nomor $id berhasil dihapus ";
    }
}