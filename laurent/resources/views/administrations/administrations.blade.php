@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <fieldset class="col-md-6">
        <legend>Gestionaire de catégorie</legend>
        <div class="col-md-8" >
                <form action="{{ route('createCat') }}" method="post" id="createDesc">
                    @csrf
                    <label for="">Créer une catégorie</label>
                    <div class="form-group">
                        <input id="nomCat" type="text" placeholder="Nom ici" name="nomCat" value="" class="form-control @error('nomCat') is-invalid @enderror" required>
                            @error('nomCat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input id="descCat" type="text" placeholder="Desc ici" name="descCat" value="" class="form-control @error('descCat') is-invalid @enderror" required>
            
                            @error('descCat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </form>

                <div class="">
                    <button type="submit" form="createDesc" class="btn btn-success">Créer</button>
                </div>
        </div>

            <div class="col-md-8 mt-3">
                <form action="{{ route('deleteCat') }}" method="post" id="deleteDesc">
                    @csrf
                    <label for="">Supprimer une catégorie</label>
                    <div class="form-group">
                        <select id="idCat" name="idCat" class="form-control @error('idCat') is-invalid @enderror">
                            <option value={{ -1 }} style="display: none" disabled selected >Choisissez une catégorie à supprimer</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        @error('idCat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </form>

                <div class="">
                    <button type="submit" form="deleteDesc" class="btn btn-danger">Supprimer</button>
                </div>
            </div>

            <div class="col-md-8 mt-3">
                <form action="{{ route('editCat') }}" method="post" id="editCat">
                    @csrf
                    <label for="">Modifier une catégorie</label>
                    <div class="form-group">
                        <select id="idCat" name="idCat" class="form-control @error('idCat') is-invalid @enderror">
                            <option value={{ -1 }} style="display: none" disabled selected >Choisissez une catégorie à modifier</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        @error('idCat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="nomCat" type="text" placeholder="Nom ici" name="nomCat" value="" class="form-control @error('nomCat') is-invalid @enderror" required>
                            @error('nomCat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <input id="descCat" type="text" placeholder="Desc ici" name="descCat" value="" class="form-control @error('descCat') is-invalid @enderror" required>
            
                            @error('descCat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                </form>

                <div class="">
                    <button type="submit" form="editCat" class="btn btn-info">Modifier</button>
                </div>
            </div>
        </fieldset>
        <fieldset class="col-md-6">
            <legend>Gestionaire de photo</legend>
            <div class="col-md-8">
                <form action="{{ route('uploadPhoto') }}" method="post" id="uploadImage" enctype='multipart/form-data'>
                    <label for="">Ajouter une photo</label>
                    @csrf
                    <div class="form-group">
                        <select id="idCat" name="idCat" class="form-control @error('idCat') is-invalid @enderror">
                            <option value={{ -1 }} style="display: none" disabled selected >Choisissez une catégorie à modifier</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        @error('idCat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <input type="file" id="choosePhoto" name="choosePhoto" accept="image/png, image/jpeg">
                   </div>
                   <div class="form-group">
                        <input id="nomPhoto" type="text" placeholder="Nom ici" name="nomPhoto" value="" class="form-control @error('nomPhoto') is-invalid @enderror" required>
            
                        @error('nomPhoto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="descPhoto" type="text" placeholder="Desc ici" name="descPhoto" value="" class="form-control @error('descPhoto') is-invalid @enderror" required>
            
                        @error('descPhoto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>  
                    <img src="{{ asset('storage/images/tcpYrMTrETJPNKP246UZ18dDMWd9pdoWJ8CwUojH.png') }}" name="uploadedPhoto" id="uploadedPhoto" width="200" height="100" alt="">
                </form>
                <div class="">
                    <button type="submit" form="uploadImage" class="btn btn-success">Enregistrer</button>
                </div>
            </div>
            <div class="col-md-8 mt-3">
                <form action="{{ route('deletePhoto') }}" method="post" id="supprimerPhoto">
                    @csrf
                    <label for="">Supprimer une photo</label>
                    <div class="form-group">
                        <select id="idCat" name="idCat" class="form-control @error('idCat') is-invalid @enderror">
                            <option value={{ -1 }} style="display: none" disabled selected >Choisissez une catégorie à modifier</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        @error('idCat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select id="idPhoto" name="idPhoto" class="form-control @error('idPhoto') is-invalid @enderror">
                            <option value={{ -1 }} style="display: none" disabled selected >Choisissez une photo à modifier</option>
                        </select>
                        @error('idPhoto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </form>

                <div class="">
                    <button type="submit" form="supprimerPhoto" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
            <div class="col-md-8 mt-3">
                <form action="{{ route('editPhoto') }}" method="post" id="editPhoto">
                    @csrf
                    <label for="">Modifier une photo</label>
                    <div class="form-group">
                        <select id="idCat" name="idCat" class="form-control @error('idCat') is-invalid @enderror">
                            <option value={{ -1 }} style="display: none" disabled selected >Choisissez une catégorie à modifier</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        @error('idCat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select id="idPhoto" name="idPhoto" class="form-control @error('idPhoto') is-invalid @enderror">
                            <option value={{ -1 }} style="display: none" disabled selected >Choisissez une photo à modifier</option>
                        </select>
                        @error('idPhoto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="nomPhoto" type="text" placeholder="Nom ici" name="nomPhoto" value="" class="form-control @error('nomPhoto') is-invalid @enderror" required>
                            @error('nomPhoto')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <input id="descPhoto" type="text" placeholder="Desc ici" name="descPhoto" value="" class="form-control @error('descPhoto') is-invalid @enderror" required>
            
                            @error('descPhoto')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </form>@section('header')
                @include('common.navbar')
            @endsection

                <div class="">
                    <button type="submit" form="editPhoto" class="btn btn-info">Modifier</button>
                </div>
            </div>
        </fieldset>
</div>

<script>
    $(function() {
        $('select[name=idCat]').change(function() {
            var url = '{{ url('category') }}' + '/' + $(this).val() + '/photos';
            $.get(url, function(data) {
                var select = $('select[name=idPhoto]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });
    });

    $(function() {
        $('select[name=idPhoto]').change(function() {
            var url = '{{ url('photo') }}' + '/' + $(this).val() + '/datas';
            $.get(url, function(data) {
                var name = $('input[name=nomPhoto');
                var desc = $('input[name=descPhoto');
                name.empty();
                desc.empty();
                name.val(data.name);
                desc.val(data.desc);
            });
        });
    });

    /* $(function() {
        
        //const selectedFile = document.getElementById('ChoosePhoto').files[0];
        //console.log(selectedFile);
        const inputElement = document.getElementById("ChoosePhoto");
        inputElement.addEventListener("change", handleFiles, false);
        function handleFiles() {
        const fileList = this.files;
        console.log(fileList[0]);
        }
    }); */

    function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#uploadedPhoto').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#choosePhoto").change(function() {
        readURL(this);
    });
</script>

@endsection