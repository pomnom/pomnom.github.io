@extends('layout.app')

@section('content')
    <div class="parallax-container valign-wrapper" style="height: 400px">
        <div class="section no-pad-bot" style="width: 100%">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 white-text" style="font-family: 'Roboto Mono', monospace;">
                        Daftar Flora Yang Hidup di</h5>
                    <h1 style="font-family: 'Montserrat', sans-serif;" class="header center white-text">Taman Hutan
                        Raya
                        Nuraksa
                    </h1>
                </div>
            </div>
        </div>
        <div class="parallax" style="filter: brightness(80%)"><img src="{{ url('/img/bg4.jpg') }}"></div>
    </div>
    <br><br>
    <div class="container">
        <div class="card">
            <table id="example" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th class="center">No</th>
                        <th class="center">Nama</th>
                        <th class="center">Nama Latin</th>
                        <th class="center">Jumlah</th>
                        <th class="center">Status</th>
                        <th class="center">Aksi</th>
                    </tr>

                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $p)
                        <tr>
                            <td class="center"><a style="text-decoration: none; color: black"
                                    href="/flora/{{ $p['slug'] }}">{{ $no++ }}</a></td>
                            <td class="center"><a style="text-decoration: none; color: black"
                                    href="/flora/{{ $p['slug'] }}">{{ $p['nama_flora'] }}</a></td>
                            <td class="center"><a style="text-decoration: none; color: black"
                                    href="/flora/{{ $p['slug'] }}"><i>{{ $p['nama_latin'] }}</i></a></td>
                            <td class="center"><a style="text-decoration: none; color: black"
                                    href="/flora/{{ $p['slug'] }}">{{ $p['jumlah'] }}</a></td>
                            <td class="center"><a style="text-decoration: none; color: black"
                                    href="/flora/{{ $p['slug'] }}">{{ $p['status'] }}</a></td>
                            <td class="center">
                                <a id="b4" class="waves-effect waves-light red lighten-1 btn"><i
                                        class="material-icons left">delete</i>Hapus</a>
                                <a class="waves-effect waves-light blue lighten-1 btn"><i
                                        class="material-icons left">edit_note</i>Ubah</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="center">No</th>
                        <th class="center">Nama</th>
                        <th class="center">Nama Latin</th>
                        <th class="center">Jumlah</th>
                        <th class="center">Status</th>
                        <th class="center">Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- Add Button -->
        <div class="fixed-action-btn">
            <a href="/flora/tambah" class="btn-floating btn-large waves-effect teal darken-1 pulse"><i
                    class="material-icons">add</i></a>
        </div>
    </div>

@endsection
