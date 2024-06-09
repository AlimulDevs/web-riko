<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_mata_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("dosen_id");
            $table->unsignedBigInteger("mata_kuliah_id");
            $table->string("kode");
            $table->integer("semester");
            $table->foreign("mata_kuliah_id")->references("id")->on("mata_kuliahs")->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign("dosen_id")->references("id")->on("dosens")->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen_mata_kuliahs');
    }
}
