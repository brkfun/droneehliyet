@include('voyager-frontend::modules.auth.login')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            İHA Ehliyet Sorgulama
        </div>
        <div class="">
            <form action="{{ route('searchReport') }}" method="post">
                @csrf
                <input name="tc" type="text">
                <button>Gönder</button>
            </form>
        </div>
        @if($data)
            <div>
                <label>tc</label> : {{ $data->tc }}
            </div><div>
                <label>resim</label> : <img src="{{ $data->image }}" height="100">
            </div>
        @elseif($data === false)
            Bulunamadı.
        @endif
    </div>
</div>
</body>
</html>
