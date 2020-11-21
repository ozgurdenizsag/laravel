@extends('layouts.app')

@section('content')
    <div class="container pt-5 pb-5">
        <div class="text-center mb-4">
            @include('admin.manage_products.create_modal')
            <a href="" class="btn btn-sm btn-info">Exporter la liste des produits.</a>
        </div>
        <div class="card p-2 mb-3">
            <div class="row">
                <div class="col-4">
                    <span class="font-weight-bold">NOM DU PRODUIT</span>
                </div>
                <div class="col-6">
                    <span class="font-weight-bold">CAT&Eacute;GORIE DU PRODUIT</span>
                </div>   
                <div class="col-2 text-right">
                    <span class="font-weight-bold">ACTIONS</span>
                </div>             
            </div>
        </div>
        @foreach ($products as $pdt)
            <div class="card p-2">
                <div class="row">
                    <div class="col-4">
                        {{ $pdt -> name }}
                    </div>
                    <div class="col-6">
                        {{ $pdt->category->name}}
                    </div>   
                    <div class="col-2 text-right">
                        @include('admin.manage_products.edit_modal')
                        @include('admin.manage_products.delete_modal')
                    </div>             
                </div>
            </div>
        @endforeach
    </div>

<script>
    function fetchCategories(id){
        fetch("admin/product/getCatSup/"+id)
        .then(res => res.json())
        .then(listCat => {
            var selectCat = $("#create-category");
            selectCat.empty();
            array.forEach(element => {
                
            });
        })
    }
</script>

@endsection