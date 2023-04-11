@extends('layout.app')

@section('title', 'Dashboard')
@extends('layout.sidebar')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <!-- /.card-header -->
                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="30">No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Tempat/Tgl Lahir</th>
                                            <th>Posisi Dilamar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($profil as $ac)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ac->nama_depan }} {{ $ac->nama_belakang }}</td>
                                                <td>{{ $ac->email }}</td>
                                                <td>{{ $ac->tempatlahir }}/{{ date('d/m/Y', strtotime($ac->tgllahir)) }}
                                                </td>
                                                <td>{{ $ac->passion }}</td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center">
                                            <th width="30">No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Tempat/Tgl Lahir</th>
                                            <th>Posisi Dilamar</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.container-fluid -->

        </section>



    </div>
@endsection
