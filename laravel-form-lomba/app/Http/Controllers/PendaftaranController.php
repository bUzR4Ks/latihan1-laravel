<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function showForm()
    {
        return view('pendaftaran.form');
    }

    public function processForm(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'judul_poster' => 'required|string|max:255',
            'file_poster' => 'required|image|mimes:jpg,png|max:2048',
        ]);

        $fileName = $request->file('file_poster')->store('posters', 'public');

        $data = [
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul_poster' => $request->judul_poster,
            'file_poster' => $fileName,
        ];

        return view('pendaftaran.konfirmasi', compact('data'));
    }
}
