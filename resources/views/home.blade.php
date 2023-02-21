@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h6 style="text-transform: capitalize">anda login sebagai {{ Auth::user()->level }}</h6>
                    <div>
                        <a href="/pengaduan" class="btn btn-primary">Lapor</a>
                        @if (Auth::user()->level == 'petugas' or Auth::user()->level == 'admin')
                        <a href="/tanggapan" class="btn btn-primary">Tanggapan</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
