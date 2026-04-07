<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
    public function create()
    {
        return view('aspirasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori'   => 'required|string',
            'lokasi'     => 'required|string',
            'keterangan' => 'required|string',
            'foto'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            // simpan ke storage/app/public/aspirasi
            $fotoPath = $request->file('foto')->store('aspirasi', 'public');
        }

        Aspirasi::create([
            'user_id'    => Auth::id(),
            'kategori'   => $validated['kategori'],
            'lokasi'     => $validated['lokasi'],
            'keterangan' => $validated['keterangan'],
            'foto'       => $fotoPath,
            'status'     => 'Pending',
        ]);

        return redirect()->route('dashboard')->with('success', 'Aspirasi berhasil dikirim.');
    }

    public function edit($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        return view('aspirasi.edit', compact('aspirasi'));
    }

    public function showFeedbackForm($id)
    {
        $aspirasi = Aspirasi::with('user')->findOrFail($id);
        return view('siswa.feedback', compact('aspirasi'));
    }

    public function feedback($id, Request $request)
    {
        $request->validate([
            'feedback' => 'required|string',
            'status'   => 'required|in:Pending,Diproses,Selesai'
        ]);

        $aspirasi = Aspirasi::findOrFail($id);
        $aspirasi->feedback = $request->feedback;
        $aspirasi->status   = $request->status;
        $aspirasi->save();

        return redirect()->route('dashboard')->with('success', 'Umpan balik berhasil disimpan.');
    }
}
