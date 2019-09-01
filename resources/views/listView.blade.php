@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    {{ table_name($table) }}
                </div>
                <div class="card">
                    @if($data->count() > 0)
                        <table>
                            <thead>
                            @foreach($cols as $col)
                                <td>
                                    {{ $col }}
                                </td>
                            @endforeach
                            <td>
                                Ayarlar
                            </td>
                            </thead>
                            <tbody>
                            @foreach($data as $datum)
                                <tr>
                                    @foreach($cols as $col)
                                        <td>
                                            @if($col === 'image')
                                                <img src="/{{ $datum->$col }}" height="100">
                                            @else
                                                {{ $datum->$col }}
                                            @endif
                                        </td>
                                    @endforeach
                                    <td>
                                        <a href="{{ route(route_name($table).'.show',$datum->id) }}">Görüntüle</a>
                                        <a href="{{ route(route_name($table).'.edit',$datum->id) }}">Düzenle</a>
                                        <a href="{{ route(route_name($table).'.destroy',$datum->id) }}">Sil</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
