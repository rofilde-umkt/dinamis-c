@extends("blank")

@section("konten")

    <h2>{{ $berita->judul }}</h2>
    <div>
        Created at {{ $berita->created_at }} by {{ $berita->jurnalis->nama }}
    </div>
    <img src="{{ $berita->gambar }}" alt="">

    <div>
        {!! $berita->berita !!}
    </div>
@endsection
