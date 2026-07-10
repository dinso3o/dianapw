@extends('layout.app')

@section('content')
    <!-- Iframe ini hanya akan muncul saat menu UTS diklik -->
    <iframe src="{{ asset('Pendaftaran/form.html') }}" width="100%" height="500" frameborder="0"></iframe>
@endsection