@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Mon compte</div>

            <div class="card-body">

                <?php
                $current_user = Auth::user();
                ?>
                <div id="first_line">
                    <div id="left-column justify-content-start col-md-6">
                        <div class="d-flex flex-row">
                            <div id="img-profil" class="p-3">
                                <img src="https://lorempixel.com/640/480/cats/?39257" alt="photo_de_profil" style="width:150px; height:auto">
                            </div>
                            <div id="infos" class="column p-3 align-self-stretch">
                                <p>Thomas Dumont</p>
                                <p>21 ans</p>
                                <p>thomas.dumont15@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection