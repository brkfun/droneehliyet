@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ana Sayfa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Kayıtlı Ehliyet Sayısı : {{ $droneUserCount }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
