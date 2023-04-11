@extends('layout.app')

@section('title', 'Dashboard')
@extends('layout.sidebar')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="col-lg-12" width="100%">
                    @if ($count == 0)
                        <section class="content-header">
                            <div class="container-fluid">
                                <div class="col-lg-12">
                                    <div class="card bg-info text-black shadow">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <h1 class="text-white ml-5 mt-5">Hi, Apa kabar, silahkan
                                                            isi biodata anda, setelah itu kembali ke dashboard, maka
                                                            dashboard akan menampilkan CV
                                                            anda.</h1>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-center">
                                                    <img src="{{ asset('img/illustration-2.png') }}" width="400px">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                    <div class="row">
                        <div class="bg-danger">

                            @foreach ($profil as $p)
                                <div class="container mt-3 bg-info">
                                    <div class="row">
                                        <div class="col-md-4 text-center mt-3 mb-2">
                                            <img class="" src="{{ asset('storage/' . $p->photo) }}" width="300"
                                                height="400" alt="">
                                        </div>
                                        <div class="col-md-8 mt-2">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <h1 class="text-dark"><strong>{{ $p->nama_depan }}</strong></h1>
                                                    <h1 class="text-danger"><strong>{{ $p->nama_belakang }}</strong>
                                                    </h1>
                                                    <h5 class="text-warning btn bg-dark badge-dark">
                                                        <strong>{{ $p->passion }}
                                                        </strong>
                                                    </h5>
                                                </div>

                                            </div>

                                            <ul class="list-group list-group-flush">
                                                <table class="table table-sm table-borderless ">
                                                    <thead>
                                                        <tr>
                                                            <th>PROFIL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td align="justify"><span>{{ $p->profil }}</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </ul>

                                            <small class="text-danger">{{ $p->tempatlahir }},
                                                {{ date('d/m/Y', strtotime($p->tgllahir)) }}
                                            </small>
                                            <br>
                                            <ul class="list-group list-group-flush mt-2">
                                                <table class="table table-sm table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td align="right" width="36px"><a
                                                                    href="mailto:{{ $p->email }}"><i
                                                                        class="fa-solid fa-envelope"></i></a> </td>
                                                            <td>{{ $p->email }}</td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class=""> &nbsp; {{ $p->alamat }}
                                                </p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row bg-warning">
                                        <div class="col-md-6">
                                            <ul class="list-group list-group-flush ">
                                                <table class="table table-sm table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th><span></span></th>
                                                            <th align="left"><span>PENDIDIKAN</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="5" align="left" width="36px"> <img
                                                                    class="" src="{{ asset('photo/R.png') }}"
                                                                    width="120" height="120" alt="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left">
                                                                <strong>{{ date('Y', strtotime($p->tahunmasuk)) }}-{{ date('Y', strtotime($p->tahunlulus)) }}
                                                                </strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left">
                                                                <strong>{{ $p->pendidikan }}-{{ $p->studi }} </strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"><strong>{{ $p->uni }}
                                                                </strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"><span>Lulus dengan IPK {{ $p->ipk }}
                                                                </span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                            <div class="row bg-light" style="margin-left: 2px;">
                                @foreach ($pengalaman as $p)
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush ">
                                            <table class="table table-sm table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>{{ $p->pengalaman }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td align="left">
                                                            <strong>{{ date('F Y', strtotime($p->tahunmulai)) }}
                                                                |
                                                                @if ($p->tahunberakhir == null)
                                                                    Masih Bekerja
                                                                @else
                                                                    {{ date('F Y', strtotime($p->tahunberakhir)) }}
                                                                @endif
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left"><strong>{{ $p->company }}
                                                            </strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="text-danger"><strong>
                                                                <em>{{ $p->posisi }}</em>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="justify"><span> {{ $p->deskripsi }} </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </ul>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <br>


                    </div>

                </div>
            </div>
        </section>

    </div>
@endsection
