@extends('template.index')

@section('content')

<style>
    #bulan-filter {
        max-width: 200px;
    }
</style>

<div class="container">
    <h3 class="text-center text-secondary">DATA BALITA
    </h3>
    @if ($messege = Session::get('success_delete'))
    <div class="alert alert-danger alert-dismissible " role="alert">
        <strong>{{$messege}}
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif ($messege= Session::get('success_add'))
    <div class="alert alert-success alert-dismissible " role="alert">
        <strong>{{$messege}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif ($messege= Session::get('failed_add'))
    <div class="alert alert-danger alert-dismissible " role="alert">
        <strong>{{$messege}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif ($messege= Session::get('success_edit'))
    <div class="alert alert-warning alert-dismissible text-white" role="alert">
        <strong>{{$messege}}
            <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif ($messege= Session::get('success_delete'))
    <div class="alert alert-danger alert-dismissible text-white" role="alert">
        <strong>{{$messege}}
            <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Dosen Mata Kuliah</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/dosenMataKuliah/create" enctype="multipart/form-data">
            @csrf
            <div class="card-body">


                <div class="form-group">
                    <label for="dosen_id">Nama Dosen</label>
                    <select name="dosen_id" class=" form-control" id="select22" style="width: 100%;">

                        <option value="">-- Pilih Dosen --</option>
                        @foreach ($data_dosen as $dts)
                        <option value="{{$dts->id}}">{{$dts->user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mata Kuliah</label>
                    <select class=" form-control" name="mata_kuliah_id" id="select22" style="width: 100%;">
                        <option value="">-- Pilih Mata Kuliah --</option>
                        @foreach ($data_mata_kuliah as $dtk)
                        <option value="{{$dtk->id}}">{{$dtk->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" name="kode" id="kode">
                </div>

                <div class="form-group">
                    <label for="nama">Semester</label>
                    <select class=" form-control" name="semester" id="select22" style="width: 100%;">
                        <option value="">-- Pilih Semester --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>

                    </select>
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>

</div>
<script>
    const getSelect2 = document.getElementById("select2");
</script>


</div>
@endsection