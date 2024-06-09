<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanWebController extends Controller
{
    public function create(Request $request)
    {
        Pertanyaan::create([
            'pertanyaan' => $request->pertanyaan,
        ]);
        return redirect("/pertanyaan/index")->with("success_create", "success create data");
    }
    public function update(Request $request)
    {
        Pertanyaan::where("id", $request->id)->update([
            'pertanyaan' => $request->pertanyaan,
        ]);
        $data_pertanyaan = Pertanyaan::where("id", $request->id)->first();


        return redirect("/pertanyaan/index")->with("success_update", "success update data");
    }

    public function delete($id)
    {
        $data_pertanyaan = Pertanyaan::where("id", $id)->first();
        $data_pertanyaan->delete();
        return redirect("/pertanyaan/index")->with("success_delete", "success delete data");
    }
}
