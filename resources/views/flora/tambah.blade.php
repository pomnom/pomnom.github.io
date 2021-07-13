@extends('layout.app')

@section('content')
    <div class="container">
        <br>
        <div id="basic-form" class="card card card-default scrollspy">
            <div class="card-content">
                <h4 class="card-title">Formulir Tambah Flora</h4>
                <form action="/flora.store" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="text" name="nama" control-id="ControlID-1">
                            <label for="text" class="">Nama Flora</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="message" name="deskripsi" class="materialize-textarea"
                                control-id="ControlID-4"></textarea>
                            <label for="message">Deskripsi</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" name="jumlah" type="number" control-id="ControlID-2">
                            <label for="text">Jumlah</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <p>Status</p>
                            <p>
                                <label>
                                    <input class="validate" required="1" name="status" type="radio" checked=""
                                        control-id="ControlID-9">
                                    <span>Langka</span>
                                </label>
                            </p>
                            <label>
                                <input class="validate" required="0" name="status" type="radio" control-id="ControlID-10">
                                <span>Banyak</span>
                            </label>
                            <div class="input-field">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn teal waves-effect waves-light right" type="submit" name="action"
                                control-id="ControlID-5">Tambah
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Back Button -->
        <div class="fixed-action-btn">
            <a href="/flora" class="btn-floating btn-large waves-effect red"><i class="material-icons">arrow_back</i></a>
        </div>
    </div>
@endsection
