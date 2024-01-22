@include('layouts.main')
@extends('layouts.navbar')
<title>{{ $title }}</title>
<div class="container-fluid pt-5 pb-5 Kontak & Alamat">
    <div class="container">
      <h2 class="display-3 text-center" id="Kontak & Alamat">Contact us</h2>
      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, laboriosam.</p>
      <div class="row pb-3">
        <div class="col-md-6">
          <input  class="form-control form-control-lg mb-3" 
                  type="text" 
                  placeholder="Nama">
          <input  class="form-control form-control-lg mb-3" 
                  type="text" 
                  placeholder="Email">
          <input  class="form-control form-control-lg mb-3" 
                  type="Number" 
                  placeholder="Nomor">
           <div class="form-check mb-3">
            <input class="form-check-input mb-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Laki laki
            </label>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
             Perempuan
            </label>
          </div>
          <select class="form-select mb-3" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>                      
        </div>
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.205145394649!2d106.977201774764!3d-6.236668893751563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d21f23894cd%3A0x54ea838beac73d1d!2sSMK%20Teratai%20Putih%20Global%202%20Bekasi!5e0!3m2!1sid!2sid!4v1690354510826!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-3 mx-auto text-center">
          <button type="button" class="btn btn-warning btn-lg">
            Submit
          </button>
        </div>
        
      </div>
    </div>
  </div>
  @extends('layouts.footer')