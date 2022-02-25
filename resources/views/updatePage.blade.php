@extends('layouts.frame')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 bg-light p-4 rounded-3">
            <h1 style="font-weight: bold; display: flex; justify-content: center; align-self: center">Update Buku</h1>
            <br>

            <form action="{{ route('updateBook', ['id'=> $book -> id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="mb-3">
                    <label for="judul" class="form-label" style="font-weight: bold">Judul</label>
                    <input name="judul" type="text" class="form-control" id="formGroupExampleInput"
                        value="{{$book->judul}}" placeholder="Input Judul Buku">
                </div>
                @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="penulis" class="form-label" style="font-weight: bold">Penulis</label>
                    <input name='penulis' type="text" class="form-control" id="formGroupExampleInput"
                        value="{{$book->penulis}}" placeholder="Input Nama Penulis">
                </div>
                @error('penulis')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="jumlah_halaman" class="form-label" style="font-weight: bold">Jumlah Halaman</label>
                    <input name='jumlah_halaman' type="numeric" class="form-control" id="formGroupExampleInput"
                        value="{{$book->jumlah_halaman}}" placeholder="Input Jumlah Halaman">
                </div>
                @error('jumlah_halaman')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label" style="font-weight: bold">Tahun Terbit</label>
                    <input name='tahun_terbit' type="numeric" class="form-control" id="formGroupExampleInput"
                        value="{{$book->tahun_terbit}}" placeholder="Input Tahun Terbit">
                </div>
                @error('tahun_terbit')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div style="display: flex; justify-content: center; align-self: center">
                    <button class="btn btn-success p-2 px-3" type="submit"
                        style="font-weight: bold"><b>Update</b></button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection
