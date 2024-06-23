@extends('layouts.master')

@section('content')
    @php
        $no = 0;
    @endphp
    <div class="main" style="background-color: ;">
        <style>
            td {
                color: #000000;
            }


            th {
                color: #000000;
            }



            ;
        </style>

        <div class="main-content"
            style=" height: 1000%; width: 200; background-color: ; background-size: cover; background-position: center; ">
            <div class="panel-heading" style="">
                <h1 class="panel-title" style="color: black; font-size: 4ch; padding-bottom: 4%; padding-top: 0px">
                    Rumah Sakit {{ $users }}</h1>
            </div>
            <div class="container-fluid" style="color: ; ">
                <div class="row">
                    <div class="col-md-12">
                        <!-- TABLE HOVER -->
                        <div class="panel" style="  background-color: rgba(255, 255, 255, 0.7);">
                            <div class="panel-heading">

                                <h1 class="panel-title" style="color: #000000; font-size: 4ch;">Data Pasien</h1>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding-top: 20px">
                                <div style="width: 100%; padding-left: 40px ">
                                    <h4>Total Pasien {{ $jumlah_pasien }} orang </h4>
                                </div>
                                <div style="width: 100%; padding-top: 20px; padding-left: 120px">
                                    <button type="button" class="btn btn-primary" style="background-color: ; color: black"
                                        data-toggle="modal" data-target="#exampleModal">
                                        Tambah Data Pasien
                                    </button>
                                </div>
                            </div>
                            <div class="panel-body">



                                <table class="table table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nama pasien</th>
                                            <th>Umur Pasien</th>
                                            <th>alamat pasien</th>
                                            <th>nomor telepon pasien</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_pasien as $pasien)
                                            <tr>
                                                <td>{{ ++$no }}</td>
                                                <td>{{ $pasien->nama }}</td>
                                                <td>{{ $pasien->umur }}</td>
                                                <td>{{ $pasien->alamat }}</td>
                                                <td>{{ $pasien->nomor_telepon }}</td>
                                                <td>
                                                    <a href="/pasien/{{ $pasien->id }}/edit"
                                                        class="btn btn-primary btn-sm"
                                                        style="background-color:  ; color: black">Edit
                                                    </a>
                                                    <a href="/pasien/{{ $pasien->id }}/delete"
                                                        class="btn btn-primary btn-sm"
                                                        style="background-color: ; color: black"
                                                        onclick="return confirm('Yakin mau dihapus?')">Hapus </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <div style=" width: 80%; padding-left: 8px">
                                    {{ $data_pasien->links('pagination.default') }}
                                </div>


                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true" id="exampleModal">


                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pasien</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/pasien/create" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama </label>
                                                        <input name="nama" type="text" class="form-control"
                                                            id="nama" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="umur" class="form-label">umur </label>
                                                        <input name="umur" type="text" class="form-control"
                                                            id="umur" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label">alamat</label>
                                                        <input name="alamat" type="text" class="form-control"
                                                            id="alamat" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nomor_telepon" class="form-label">nomor_telepon</label>
                                                        <input name="nomor_telepon" type="text" class="form-control"
                                                            id="nomor_telepon" aria-describedby="emailHelp" required>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"
                                                    style="background-color: ; ">Simpan</button>
                                            </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
        </div>


    </div>
    </div>
@endsection
