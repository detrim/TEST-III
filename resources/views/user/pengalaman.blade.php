@extends('layout.app')

@section('title', 'Biodata Data')
@extends('layout.sidebar')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Pengalaman</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ url('user/pengalaman/' . $email . '/post') }}" enctype="multipart/form-data"
                                method="post">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="email" value="{{ $email }}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>Pengalaman</label>
                                                    <input type="text" name="pengalaman" class="form-control"
                                                        placeholder="MAGANG/PENGALAMAN KERJA" required>
                                                </div>
                                            </div>
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>POSISI</label>
                                                    <input type="text" name="posisi" class="form-control"
                                                        placeholder="Enter ..."required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- text input -->

                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" rows="3" placeholder="Enter ..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input type="text" name="company" class="form-control" placeholder="PT. ..."
                                                required>
                                        </div>
                                        <div class="row">
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>Tahun Mulai</label>
                                                    <input type="month" name="tahunmulai" class="form-control"
                                                        placeholder="Enter ..." required>
                                                </div>
                                            </div>
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>Tahun Berakhir</label>
                                                    <input type="month" name="tahunberakhir" class="form-control"
                                                        placeholder="Enter ...">
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Masih Bekerja
                                                        Disini</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-danger">Create</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
