@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            <form action="{{ route('supprimerCat') }}" method="post" id="suppCat">
                @csrf
                <div class="form-group mt-3">
                    <select id="chooseCat" name="chooseCat" class="form-control @error('chooseCat') is-invalid @enderror">
                        @foreach ($categories as $pdt)
                            <option value="{{ $pdt->id }}"{{ (0 == $pdt->id) ? 'selected' : '' }}>{{ $pdt->name }}</option>
                        @endforeach
                    </select>
                    @error('chooseCat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </form>
            <div class="">
                <button type="submit" form="suppCat" class="btn btn-danger">Supprimer</button>
            </div>
        </div> --}}


       <div class="col-md-8 mt-3">
            <form {{-- action="{{ route('ceCat') }}" --}} method="post" id="createEditDesc">
                @csrf
                <label for="">Editer ou créer une catégorie</label>
                <div class="form-group">
                    <input id="nomCat" type="text" placeholder="Nom ici" name="nomCat" value="" class="form-control @error('nomCat') is-invalid @enderror" required>
        
                        @error('nomCat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <input id="descCat" type="text" placeholder="Desc ici" name="nomCat" value="" class="form-control @error('descCat') is-invalid @enderror" required>
        
                        @error('descCat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
            </form>

            <div class="">
                <button type="submit" form="createEditDesc" class="btn btn-success">Modifier ou créer</button>
            </div>
       </div>

       {{-- <div class="col-md-8 mt-3">
            <form action="{{ route('uploadFile') }}" method="post" id="uploadImage" enctype='multipart/form-data' >
                @csrf
                <div class="form-group mt-3 col-md-8">
                    <div>
                        <label for="avatar">Choose a profile picture:</label>
                    </div>
                    <div>
                        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                    </div>
               </div>
            </form>

            <div class="">
                <button type="submit" form="uploadImage" class="btn btn-success">Enregistrer</button>
            </div>

        </div>
    </div>
    <img src="{{ asset('storage/images/tcpYrMTrETJPNKP246UZ18dDMWd9pdoWJ8CwUojH.png') }}" width="200" height="100" alt=""> --}}

</div>
@endsection