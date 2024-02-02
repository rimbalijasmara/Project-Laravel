@extends('layouts.main')
@extends('layouts.navbar')

@section('title', $title)

<div class="container-fluid pt-5 pb-5 Kontak & Alamat">
    <form action="{{ route('template.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h2 class="display-3 text-center" id="Kontak & Alamat">Contact us</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, laboriosam.</p>
        <div class="form-floating mb-3">
            <textarea class="form-control @error('message') is-invalid @enderror" name="pesan" rows="5" placeholder="Masukkan Konten Post">{{ old('pesan', $contact->message) }}</textarea>
            <label for="pesan">pesan</label>
            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
        </div>
        
        <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
    </form>
</div>

@extends('layouts.footer')