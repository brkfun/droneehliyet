@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    {{ table_name($table) }} Ekle
                </div>
                <div class="card">
                    <form enctype="multipart/form-data" method="post" action="{{ route('drone-users.store') }}">
                        @csrf
                        <div class="card-body">
                            @foreach($cols as $col)
                                @if($col !== 'id')
                                <div>
                                    {{ $col }} : <input name="{{ $col }}" type="{{$col !== 'image' ? 'text' : 'file'}}" {{ $col !== 'image' ? 'minlength=11 maxlength=11' : 'accept=image/jpeg'}} required>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button>Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
