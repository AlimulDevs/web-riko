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

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title text-white">Ubah Data Mahasiswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/mahasiswa/edit">
            @csrf
            @foreach ($data_mahasiswa as $dtm)
            <input type="hidden" name="id" value="{{$dtm->id}}">
            <input type="hidden" name="user_id" value="{{$dtm->user->id}}">


            <div class="card-body">

                <input type="hidden" name="role" value="mahasiswa">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input value="{{$dtm->user->name}}" type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input value="{{$dtm->nim}}" type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="{{$dtm->user->email}}" type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email">
                </div>




            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-warning text-white">Ubah Data</button>
            </div>
            @endforeach
        </form>
    </div>

</div>
<script>
    var bulanArray = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    ];

    const getSelectBulan = document.getElementById("bulan")
    bulanArray.map((data) => {
        getSelectBulan.innerHTML += `<option value="${data}">${data}</option>`
    })
</script>


</div>
@endsection