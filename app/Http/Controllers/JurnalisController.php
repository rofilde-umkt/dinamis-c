<?php

namespace App\Http\Controllers;

use App\Models\Jurnalis;
use App\Models\User;
use Illuminate\Http\Request;

class JurnalisController extends Controller
{
    public function buat()
    {
        return view("jurnalis.form-input");
    }

    public function simpan(Request $request)
    {
        $user = new User();
        $user->username = $request->get('username');
        $user->nama = $request->get('nama');
        $user->password = $request->get('password');
        $user->level = $request->get('level');
        $user->save();

        $jurnalis = new Jurnalis();
        $jurnalis->nama = $request->get('nama');
        $jurnalis->alamat = $request->get('alamat');
        $jurnalis->kelamin = $request->get('kelamin');
        $jurnalis->user_id = $user->id;
        $jurnalis->save();
    }
}
