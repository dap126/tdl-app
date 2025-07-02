<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tugas;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $totalTugas = Tugas::where('user_id', $userId)->count();
        $tugasSelesai = Tugas::where('user_id', $userId)->where('status', 'Selesai')->count();
        $tugasAktif = Tugas::where('user_id', $userId)->whereIn('status', ['Belum Selesai', 'Dikerjakan'])->count();

        return view('dashboard', compact('totalTugas', 'tugasSelesai', 'tugasAktif'));
    }
}
