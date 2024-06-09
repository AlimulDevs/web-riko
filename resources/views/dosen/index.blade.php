@extends('template.index')

@section('content')

<style>
    #bulan-filter {
        max-width: 200px;
    }
</style>

<div class="container">
    <h3 class="text-center text-secondary">DATA DOSEN
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

    <div class="card">
        <div class="card-header">
            <h1 class="text-center">TABEL DOSEN</h1>

            <div class="text-right">
                <a class="btn btn-primary" href="/dosen/create-index">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
            </div>

        </div>


        <div class="card-body">


            <div class="table-responsive">
                <table class="table table-striped" id="example2">
                    <thead class="text-center">
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>NIDN</th>
                            <th>Email</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($data_dosen as $dtm )
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$dtm->user->name}}</td>
                            <td>{{$dtm->nidn}}</td>
                            <td>{{$dtm->user->email}}</td>



                            <td>

                                <a href="/dosen/edit-index/{{$dtm->id}}" class="btn btn-sm btn-warning"><i class="fas fa-edit text-white"></i></a>

                                <a href="/dosen/delete/{{$dtm->user->id}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
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

    const getBulanFilter = document.getElementById("bulan-filter");

    bulanArray.map((data) => {
        getBulanFilter.innerHTML += ` <option value="${data}">${data}</option>`
    })

    getBulanFilter.addEventListener("change", function() {
        var selectedMonth = this.value;
        var tableRows = document.querySelectorAll("#example2 tbody tr");

        if (selectedMonth === "all") {
            tableRows.forEach(function(row) {
                row.style.display = "table-row";
            });
        } else {
            tableRows.forEach(function(row) {
                var monthCell = row.querySelectorAll("td")[3].innerText; // Kolom ke-4 berisi bulan
                if (monthCell === selectedMonth) {
                    row.style.display = "table-row";
                } else {
                    row.style.display = "none";
                }
            });
        }
    });
</script>


</div>
@endsection