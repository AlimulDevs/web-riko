<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MahasiswaWebController extends Controller
{
    public function create(Request $request)
    {
        $getUser = User::where("email", $request->email)->first();
        if ($getUser != null) {
            return redirect("/registerIndex")->with("failed", "email sudah terdaftar");
        }

        $data_user =  User::create([
            "name" => $request->name,
            "role" => $request->role,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            'remember_token' => Str::random(60),
        ]);

        $data_mahasiswa = Mahasiswa::create([
            "user_id" => $data_user->id,
            "nim" => $request->nim,
        ]);





        return redirect("/mahasiswa/index")->with("success_add", "Berhasil Membuat Akun");
    }
    public function update(Request $request)
    {


        $data_user =  User::where("id", $request->user_id)->update([
            "name" => $request->name,
            "email" => $request->email,
        ]);

        $data_mahasiswa = Mahasiswa::where("id", $request->id)->update([
            "nim" => $request->nim,
        ]);





        return redirect("/mahasiswa/index")->with("success_edit", "Berhasil Mengubah Akun");
    }


    public function delete($id)
    {
        User::where("id", $id)->delete();
        return redirect("/mahasiswa/index")->with("success_delete", "Berhasil Menghapus Akun");
    }
}
