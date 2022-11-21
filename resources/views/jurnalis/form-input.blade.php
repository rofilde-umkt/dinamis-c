@extends("blank")

@section("konten")

    <form action="{{ route("simpan_jurnalis") }}" method="post">
        @csrf

        Nama : <input type="text" name="nama"> <br>
        Alamat: <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br>
        Kelamin:
            <input type="radio" name="kelamin" value="pria"> Pria
            <input type="radio" name="kelamin" value="wanita"> Wanita
        <br>


        Username : <input type="text" name="username"> <br>
        Password : <input type="password" name="password"> <br>
        Level : <input type="text" name="level"> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection
