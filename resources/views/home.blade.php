@extends('layouts.app')
@section('style')
    <style>
        .card{
            background-color: rgb(136, 238, 238);
            box-shadow: gray 3px 3px 3px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.5em;
        }

    </style>
@endsection
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Félicitations!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Votre connexion a reussi!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
