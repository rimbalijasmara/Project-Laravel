@include('layouts.main')
@include('layouts.navbar')

<title>{{ $title }}</title>
<div class="container-fluid pt-5 pb-5 Kontak & Alamat">
    @foreach ($items as $item)
  <form action="/contact" method="post" id="ContactForm" data-sb-form-api-token="API_TOKEN">
    @csrf
    <div class="container">
      <h2 class="display-3 text-center" id="Kontak & Alamat">Contact us</h2>
      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, laboriosam.</p>
      <div class="row pb-3">
        <div class="col-md-6">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" name="komen" id="komen" class="komen" rows="4">{{ $item ->komen }}</textarea><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>@endforeach
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
  @extends('layouts.footer')