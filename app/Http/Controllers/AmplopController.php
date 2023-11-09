<?php

namespace App\Http\Controllers;

use App\Models\Amplop;
use Illuminate\Http\Request;

class AmplopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amplop = Amplop::where('user_id', auth()->user()->id)->latest()->paginate(10);
        return view('amplop.index', [
            'amplop' => $amplop
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('amplop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'tanggal' => ['required', 'date'],
            'nominal' => ['required', 'integer', 'min:0'],
            'keterangan' => ['required', 'string', 'max:255'],
        ]);

        Amplop::create([
            'user_id' => auth()->user()->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'nominal' => $request->nominal,
            'keterangan' => $request->keterangan,
        ]);

        return to_route('amplop.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $amplop = Amplop::find($id);
        return view('amplop.edit', [
            'amplop' => $amplop
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'tanggal' => ['required', 'date'],
            'nominal' => ['required', 'integer', 'min:0'],
            'keterangan' => ['required', 'string', 'max:255'],
        ]);

        $amplop = Amplop::find($id);

        $amplop->nama = $request->nama;
        $amplop->alamat = $request->alamat;
        $amplop->tanggal = $request->tanggal;
        $amplop->nominal = $request->nominal;
        $amplop->keterangan = $request->keterangan;
        $amplop->save();

        return to_route('amplop.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Amplop $amplop)
    {
        $amplop->delete();
        return to_route('amplop.index');
    }
}
