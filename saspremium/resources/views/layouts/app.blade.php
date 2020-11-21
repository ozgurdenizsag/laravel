@extends('layouts.base')

@section('header')
    @include('layouts.navbar')
@endsection

@section('infos')
    @include('layouts.infos')
@endsection

@section('content')
<div id="app">
    <main class="py-4">
        @yield('contents')
    </main>
</div>
@endsection