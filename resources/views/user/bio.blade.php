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
                            <h3 class="card-title">Profil</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ url('user/profil/' . $email . '/post') }}" enctype="multipart/form-data"
                                method="post">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="email" value="{{ $email }}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>Nama Depan</label>
                                                    <input type="text" name="nama_depan" class="form-control"
                                                        placeholder="Enter ..." required>
                                                </div>
                                            </div>
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>Nama Belakang</label>
                                                    <input type="text" name="nama_belakang" class="form-control"
                                                        placeholder="Enter ..."required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- text input -->

                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Profil</label>
                                            <textarea class="form-control" name="profil" rows="3" placeholder="Enter ..." required></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>Tempat Lahir</label>
                                                    <input type="text" name="tempatlahir" class="form-control"
                                                        placeholder="Enter ..." required>
                                                </div>
                                            </div>
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date" name="tgllahir" class="form-control"
                                                        placeholder="Enter ..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat" rows="3" placeholder="Enter ..." required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="photo" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Pendidikan</label>
                                            <input type="text" name="pendidikan" class="form-control"
                                                placeholder="Enter ..." required>
                                        </div>
                                        <div class="row">
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>Tahun Masuk</label>
                                                    <input type="date" name="tahunmasuk" class="form-control"
                                                        placeholder="Enter ..." required>
                                                </div>
                                            </div>
                                            <div class="col sm-6">
                                                <div class="form-group">
                                                    <label>Tahun Lulus</label>
                                                    <input type="date" name="tahunlulus" class="form-control"
                                                        placeholder="Enter ..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <input type="text" name="studi" class="form-control"
                                                placeholder="Enter ..." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Universitas</label>
                                            <input type="text" name="uni" class="form-control"
                                                placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label>IPK</label>
                                            <input type="text" name="ipk" class="form-control"
                                                placeholder="Enter ..." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Passion</label>
                                            <input type="text" name="passion" class="form-control"
                                                placeholder="Enter ..." required>
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
