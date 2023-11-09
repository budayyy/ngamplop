<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Amplop;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $amplop = Amplop::where('user_id', auth()->user()->id)->latest()->limit(10)->get();
        $jumlahUser = User::where('role', 0)->count();
        $jumlahKondangan = Amplop::where('user_id', auth()->user()->id)->count();
        $jumlahPengeluaran = Amplop::where('user_id', auth()->user()->id)->sum('nominal');
        return view('dashboard', [
            'amplop' => $amplop,
            'jumlahUser' => $jumlahUser,
            'jumlahKondangan' => $jumlahKondangan,
            'jumlahPengeluaran' => $jumlahPengeluaran
        ]);
    }
}
