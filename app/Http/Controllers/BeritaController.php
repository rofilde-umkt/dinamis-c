<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function formInput()
    {
        return view("berita.form-input");
    }

    public function simpan(Request $request)
    {
        $berita = new Berita();
        $berita->judul = $request->get("judul");
        $berita->gambar = $request->get("gambar");
        $berita->berita = $request->get("berita");
        $berita->jurnalis_id = auth()->user()->jurnalis->id;
        $berita->save();

        return redirect(route("tampil_berita", ['id' => $berita->id]));
    }

    public function tampil($id)
    {
        $berita = Berita::find($id);
        return view("berita.tampil", ['berita' => $berita]);
    }
}
