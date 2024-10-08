@extends('layouts.aap')
@section('content')
<div class="container">
    <h1>QR Code for URL</h1>

    <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">Scan the QR Code to visit the URL</h5>

            <!-- Generate and display the QR code for the URL -->
            {!! QrCode::size(200)->generate($url) !!}

            <p class="mt-3">
                {{-- <strong>URL:</strong> <a href="{{ $url }}" target="_blank">{{ $url }}</a> --}}
            </p>
        </div>
    </div>
</div>
@endsection
