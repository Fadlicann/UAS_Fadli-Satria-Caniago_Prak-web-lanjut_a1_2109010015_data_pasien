@extends('layouts.master')
@section('content')
    <h1>Edit data pasien</h1>
    @if (session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif
    @php
        $no = 0;
    @endphp
    <style>
        label {
            color: rgb(0, 0, 0);
        }


        ;
    </style>
    <div class="main" style="height: 90vh;background-color: ;">
        <div class="main-content" style="padding-top: 0% ;height: 80vh;">
            <!-- MAIN CONTENT -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel"
                            style="height: 100%; width: 100%;   background-color: rgba(255, 255, 255, 0.7); background-size: cover; background-position: center; ">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="color: rgb(0, 0, 0)">Edit Data Pasien</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/pasien/{{ $pasien->id }}/update" method="POST">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Pasien</label>
                                        <input name="nama" type="text" class="form-control" id="brg_kirim"
                                            aria-describedby="emailHelp" required value="{{ $pasien->nama }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="umur" class="form-label">umur</label>
                                        <input name="umur" type="text" class="form-control" id="brg_kirim"
                                            aria-describedby="emailHelp" required value="{{ $pasien->umur }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nomor_telepon" class="form-label">nomor_telepon</label>
                                        <input name="nomor_telepon" type="text" class="form-control" id="brg_kirim"
                                            aria-describedby="emailHelp" required value="{{ $pasien->nomor_telepon }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">alamat</label>
                                        <input name="alamat" type="text" class="form-control" id="brg_kirim"
                                            aria-describedby="emailHelp" required value="{{ $pasien->alamat }}">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-warning"
                                            style="background-color: ; ">Update data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
