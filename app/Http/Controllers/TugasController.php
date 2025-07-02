<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tugas;
use App\Models\DaftarTugas;
use App\Models\MataKuliah;

class TugasController extends Controller
{
        public function index()
    {
        $userId = Auth::id();
        $daftarTugas = DaftarTugas::with(['tugas' => function ($query) use ($userId) {
            $query->where('user_id', $userId);
        }])->get();
        return view('list-tugas', ['daftarTugas' => $daftarTugas]);
    }
    public function create()
    {
        $daftarTugas = DaftarTugas::all();
        return view('input-tugas', [
            'daftarTugas' => $daftarTugas
        ]);
    }
    public function store(Request $request)
    {
        $validatedDate = $request->validate([
            'judul_tugas' => 'required|string',
            'daftar_id' => 'required|exists:daftar_tugas,daftar_id',
            'nama_matakuliah' => 'nullable|string|max:100',
            'deskripsi_tugas' => 'nullable|string',
            'tanggal_deadline' => 'nullable|date',
            'prioritas' => 'required|in:Rendah,Sedang,Tinggi',
        ]);
            $matakuliahId = null;
            if ($request->filled('nama_matakuliah')) {
                $mataKuliah = \App\Models\MataKuliah::firstOrCreate(    
                ['nama_matakuliah' => $request->nama_matakuliah], 
                ['sks' => 3] 
        );
        $matakuliahId = $mataKuliah->matkul_id;
    }
        $dataToCreate = [
            'judul_tugas' => $validatedDate['judul_tugas'],
            'daftar_id' => $validatedDate['daftar_id'],
            'matkul_id' => $matakuliahId,
            'deskripsi_tugas' => $validatedDate['deskripsi_tugas'],
            'tanggal_deadline' => $validatedDate['tanggal_deadline'],
            'prioritas' => $validatedDate['prioritas'],
            'user_id' => \Illuminate\Support\Facades\Auth::id(),
            'status' => 'Belum Selesai',
    ];

        $validatedDate['user_id'] = Auth::id();
        $validatedDate['status'] = 'Belum Selesai';

        \App\Models\Tugas::create($dataToCreate);

        return redirect()->route('list-tugas')->with('success', 'Tugas baru berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $tugas = Tugas::findOrFail($id);
        $daftarTugas = DaftarTugas::all();
        $mataKuliah = MataKuliah::all();
        return view('edit-tugas', compact('tugas', 'daftarTugas', 'mataKuliah'));
    }
    public function update(Request $request, $id)
    {
        $tugas = Tugas::findOrFail($id);
        
        if ($request->has('status') && count($request->all()) == 3) { // _token, _method, status
            $tugas->update(['status' => $request->status]);
            return redirect()->route('list-tugas')->with('success', 'Status tugas berhasil diupdate!');
        }

        $validatedData = $request->validate([
            'judul_tugas' => 'required|string',
            'daftar_id' => 'required|exists:daftar_tugas,daftar_id',
            'nama_matakuliah' => 'nullable|string|max:100',
            'deskripsi_tugas' => 'nullable|string',
            'tanggal_deadline' => 'nullable|date',
            'prioritas' => 'required|in:Rendah,Sedang,Tinggi',
        ]);
        $matakuliahId = null;
        if ($request->filled('nama_matakuliah')) {
            $mataKuliah = MataKuliah::firstOrCreate(
                ['nama_matakuliah' => $request->nama_matakuliah],
                ['sks' => 3]
            );
            $matakuliahId = $mataKuliah->matkul_id;
        }
        $tugas->update([
            'judul_tugas' => $validatedData['judul_tugas'],
            'daftar_id' => $validatedData['daftar_id'],
            'matkul_id' => $matakuliahId,
            'deskripsi_tugas' => $validatedData['deskripsi_tugas'],
            'tanggal_deadline' => $validatedData['tanggal_deadline'],
            'prioritas' => $validatedData['prioritas'],
        ]);
        return redirect()->route('list-tugas')->with('success', 'Tugas berhasil diupdate!');
    }

    public function destroy($id)
    {
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();
        return redirect()->route('list-tugas')->with('success', 'Tugas berhasil dihapus!');
    }
}
