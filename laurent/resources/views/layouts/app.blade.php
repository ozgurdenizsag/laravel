@extends('layouts.base')

@section('header')
    @include('common.navbar')
@endsection

@section('infos')
    @include('common.infos')    
@endsection

@section('contents')
    <main class="py-4">
        @yield('content')
    </main>
@endsection

@section('footer')
    @include('common.footer')
@endsection