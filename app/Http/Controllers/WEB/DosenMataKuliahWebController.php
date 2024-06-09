<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\DosenMataKuliah;
use Illuminate\Http\Request;

class DosenMataKuliahWebController extends Controller
{
    public function create(Request $request)
    {
        DosenMataKuliah::create([
            'dosen_id' => $request->dosen_id,
            'mata_kuliah_id' => $request->mata_kuliah_id,
            'kode' => $request->kode,
            'semester' => $request->semester,
        ]);
        return redirect("/dosenMataKuliah/index")->with("success_create", "success create data");
    }
    public function update(Request $request)
    {
        DosenMataKuliah::where("id", $request->id)->update([
            'dosen_id' => $request->dosen_id,
            'mata_kuliah_id' => $request->mata_kuliah_id,
            'kode' => $request->kode,
            'semester' => $request->semester,
        ]);
        $data_dosen_mata_kuliah = DosenMataKuliah::where("id", $request->id)->first();


        return redirect("/dosenMataKuliah/index")->with("success_update", "success update data");
    }

    public function delete($id)
    {
        $data_dosen_mata_kuliah = DosenMataKuliah::where("id", $id)->first();
        $data_dosen_mata_kuliah->delete();
        return redirect("/dosenMataKuliah/index")->with("success_delete", "success delete data");
    }
}
