@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    {{ table_name($table) }}
                </div>
                <div class="card">
                    @if($data !== null)
                        <div class="card-body">
                            @foreach($cols as $col)
                                <div>
                                    {{ $col }} :
                                    @if($col === 'image')
                                        <img src="/{{ $data->{$col} }}" height="100">
                                    @else
                                        {{ $data->{$col} }}
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="card-body">
                            <div class="alert alert-info">
                                Kayıt Bulunamadı. <a href="{{ route(route_name($table).'.create') }}"> Ekle</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
