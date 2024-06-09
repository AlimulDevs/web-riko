<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahWebController extends Controller
{
    public function create(Request $request)
    {
        MataKuliah::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
        ]);
        return redirect("/mataKuliah/index")->with("success_create", "success create data");
    }
    public function update(Request $request)
    {
        MataKuliah::where("id", $request->id)->update([
            'nama' => $request->nama,
            'kode' => $request->kode,
        ]);
        $data_mata_kuliah = MataKuliah::where("id", $request->id)->first();


        return redirect("/mataKuliah/index")->with("success_update", "success update data");
    }

    public function delete($id)
    {
        $data_mata_kuliah = MataKuliah::where("id", $id)->first();
        $data_mata_kuliah->delete();
        return redirect("/mataKuliah/index")->with("success_delete", "success delete data");
    }
}
