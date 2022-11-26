<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::paginate();
        return view('koleksi.daftarKoleksi',compact('collections'));
    }
    public function create()
    {
        return view('koleksi.registrasi');
    }
    public function show(Collection $collection)
    {
        # code...
    }
    public function store(Request $request)
    {

        $request->validate(
            [
                'namaKoleksi' => ['required', 'string', 'max:255', 'unique:collections'],
                'jumlahKoleksi' => ['required', 'string', 'max:255'],
                'jenisKoleksi' => ['required', 'numeric'],
            ],
        );

        $collection = Collection::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi
        ]);

        $collections = Collection::paginate();

        return view('koleksi.daftarKoleksi', compact('collections'));
    }
}
