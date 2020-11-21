@extends('layouts.base')

@section('header')
    @include('common.navbar')
@endsection

@section('contents')
    <div class="container">
        <div class="row justify-content-center pt-4">
            <div class="col-md-8">
                <form action="{{ route('envoyerMail') }}" method="post" id="envMail">
                    @csrf

                    <div class="form-group">
                    <input id="env-mail" type="email" placeholder="Mail ici" name="env-mail" value="{{ old('env-mail') }}" class="form-control @error('env-mail') is-invalid @enderror" required>

                        @error('env-mail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea id="env-msg" name="env-msg" value="{{ old('env-msg') }}" class="form-control @error('env-msg') is-invalid @enderror" required> </textarea>

                        @error('env-msg')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </form>

                <div class="">
                    <button type="submit" form="envMail" class="btn btn-success"> Envoyer !</button>
                </div>
            </div>
        </div>
    </div>
@endsection
