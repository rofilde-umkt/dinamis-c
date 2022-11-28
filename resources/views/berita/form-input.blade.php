@extends("blank")

@section("konten")

    <form action="{{ route('simpan_berita') }}" method="post">
        @csrf

        Judul : <input type="text" name="judul"> <br>
        Gambar: <input type="text" name="gambar"> <br>
        Berita <textarea name="berita" id="" cols="30" rows="10"></textarea> <br>

        Pilih Kategori:

        @foreach($kategori as $kat)
            <input type="checkbox" name="kategori[]" value="{{ $kat->id }}"> {{ $kat->nama }}
        @endforeach
        <br>


        <button type="submit">Simpan</button>
    </form>


@endsection
