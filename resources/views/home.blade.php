@extends('layouts.frame')
@section('content')

{{-- Banner --}}
<div class="container banner p-4 mb-3 rounded-3 bg-light">
    <h1 style="font-weight: bold">Selamat Datang di Perpustakaan Digital 📚</h1>
    <p class="mb-4">Di website ini anda dapat mengecek setiap daftar buku secara digital. Selain itu, anda juga dapat
        menambahkan, memperbarui, dan menghapus buku dari database. Apabila ada kendala maka anda dapat menghubungi
        kontak saya dengan menekan tombol hubungi admin. Terima kasih! </p>
    <a href="{{route('getBooksPage')}}" class="btn btn-primary" style="font-weight: bold">Explore Book</a>
    <a href="{{route('getContactPage')}}" class="btn btn-secondary" style="font-weight: bold">Hubungi Admin</a>
</div>

{{-- Book Content --}}
<div class="container">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-3 mb-4">
            <div class="col-md-12 p-2 book-content rounded-3 bg-light">
                <h3 class="judul" style="font-weight: bold">{{$book->judul}}</h3>
                <span class="badge bg-info mb-3" style="font-weight: bold">Tahun Terbit {{$book->tahun_terbit}}</span>
                <span class="d-block">Penulis: {{$book->penulis}}</span>
                <span class="d-block">Jumlah Halaman: {{$book->jumlah_halaman}}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
