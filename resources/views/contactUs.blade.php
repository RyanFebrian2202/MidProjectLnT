@extends('layouts.frame')
@section('content')

<!-- CONTACT BANNER -->
<div class="container bg-light banner p-4 rounded-3">
    <h1 style="font-weight: bold">Contact Us! 📞</h1>
    <p class="mb-4">Halo, saya adalah administrator untuk website ini. Apabila ada pertanyaan dan keluhan, anda dapat
        menghubungi saya melalui WhatsApp maupun Email yang ada di bawah. </p>
    <a href="https://wa.link/i1dy0u" target="_blank" class="btn btn-success" style="font-weight: bold">Chat Me!</a>
</div>
<br>

<!-- Mail -->
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 py-3">
            <form action="{{route('sendEmail')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="email" style="font-weight: bold; margin-bottom: 5px">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="ex: ryan22febrian@gmail.com">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="name" style="font-weight: bold; margin-bottom: 5px">Nama Lengkap</label>
                        <input name="name" type="text" class="form-control" placeholder="ex: Ryan Febrian">
                    </div>
                    @error('email')
                    <div class="alert alert-danger form-group col-md-6 mb-3">{{ $message }}</div>
                    @enderror
                    @error('name')
                    <div class="alert alert-danger form-group col-md-6 mb-3">{{ $message }}</div>
                    @enderror
                    <div class="form-group col-md-12 mb-3">
                        <label for="subject" style="font-weight: bold; margin-bottom: 5px">Subject</label>
                        <input name="subject" type="text" class="form-control" placeholder="ex: View Error">
                    </div>
                    @error('subject')
                    <div class="alert alert-danger form-group col-md-12 mb-3">{{ $message }}</div>
                    @enderror
                    <div class="form-group col-md-12 mb-3">
                        <label for="message" style="font-weight: bold; margin-bottom: 5px">Pesan / Keluhan</label>
                        <textarea name="message" class="form-control" placeholder="Masukkan pesan disini"
                            rows="5"></textarea>
                    </div>
                    @error('message')
                    <div class="alert alert-danger form-group col-md-12 mb-3">{{ $message }}</div>
                    @enderror
                </div>
                <div style="display: flex; justify-content: center; align-self: center">
                    <button type="submit" class="btn btn-dark btn-sm p-2" style="font-weight: bold"><b>Send
                            Now</b></button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection
