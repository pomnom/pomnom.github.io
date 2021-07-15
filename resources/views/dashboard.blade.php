@extends('layout.app')

@section('content')
    <div class="parallax-container valign-wrapper" style="height: 400px">
        <div class="section no-pad-bot" style="width: 100%">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 white-text" style="font-family: 'Roboto Mono', monospace;">
                        Selamat Datang di Sistem Informasi Geografis
                        Pemetaaan Flora
                        dan Fauna</h5>
                    <h1 style="font-family: 'Montserrat', sans-serif;" class="header center white-text">Taman Hutan
                        Raya
                        Nuraksa
                    </h1>
                </div>
            </div>
        </div>
        <div class="parallax" style="filter: brightness(80%)"><img src="{{ url('/img/bg3.jpg') }}"></div>
    </div>

    <div class="section">
        <br>
        <div class="row container">
            <div class="col s12 m4">
                <div class="card-panel hoverable">
                    <a href="">
                        <div class="card-content center-align">
                            <h5><b>Support</b></h5>
                            <i class="material-icons md-48 red-text">favorite_border</i>
                            <p class="mb-2 black-text">Synonyms for support with free online thesaurus, antonyms.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel hoverable">
                    <a href="">
                        <div class="card-content center-align">
                            <h5><b>Licensing</b></h5>
                            <i class="material-icons md-48 amber-text">filter_none</i>
                            <p class="mb-2 black-text">A Licensing agreement is an arrangement whereby a licensor.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel hoverable">
                    <a href="">
                        <div class="card-content center-align">
                            <h5><b>your Account</b></h5>
                            <i class="material-icons md-48 blue-text">aspect_ratio</i>
                            <p class="mb-2 black-text">Your Google Account gives you quick access to settings and tools
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="card">
                <table id="example1" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th class="center">No</th>
                            <th class="center">Nama</th>
                            <th class="center">Deskripsi</th>
                            <th class="center">Jumlah</th>
                            <th class="center">Status</th>
                        </tr>

                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($dataFloras as $p)
                            <tr>
                                <td class="center"><a style="text-decoration: none; color: black"
                                        href="#">{{ $no++ }}</a></td>
                                <td class="center"><a style="text-decoration: none; color: black"
                                        href="#">{{ $p['nama_flora'] }}</a></td>
                                <td class="center"><a style="text-decoration: none; color: black"
                                        href="#"><i>{{ Str::limit($p['deskripsi'], 50) }}</i></a></td>
                                <td class="center"><a style="text-decoration: none; color: black"
                                        href="#">{{ $p['jumlah'] }}</a></td>
                                <td class="center"><a style="text-decoration: none; color: black"
                                        href="#">@if ($p['status']===true)
                                            Langka
                                        @else
                                            Banyak
                                        @endif</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="center">No</th>
                            <th class="center">Nama</th>
                            <th class="center">Deskripsi</th>
                            <th class="center">Jumlah</th>
                            <th class="center">Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="parallax-container valign-wrapper" style="height: 400px">
        <div class="section no-pad-bot" style="width: 100%">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 white-text" style="font-family: 'Roboto Mono', monospace;">
                        Selamat Datang di Sistem Informasi Geografis
                        Pemetaaan Flora
                        dan Fauna</h5>
                </div>
                <h1 style="font-family: 'Montserrat', sans-serif;" class="header center white-text">Taman Hutan
                    Raya
                    Nuraksa
                </h1>
            </div>
        </div>
        <div class="parallax" style="filter: brightness(80%)"><img src="{{ url('/img/bg2.jpg') }}"></div>
    </div>
    <script>
        $('#flora').dataTable({
            "scrollX": true,
            // "searching": false
        });
    </script>
@endsection
