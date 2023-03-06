@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Aves'])
    <div class="container-fluid py-4">
        <div class="row mt-4">
          <div class="col-lg-4">
              <div class="card h-100">
                  <div class="card-body">
                      <h5 class="font-weight-bolder">Imagen del ave</h5>
                      <div class="row">
                          <div class="col-12">
                          <img class="w-100 border-radius-lg shadow-lg mt-3" src="https://images.pexels.com/photos/2491642/pexels-photo-2491642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="bird_img">
                      </div>
                      <div class="col-12 mt-5">
                          <div class="d-flex">
                            <!-- <button class="btn btn-success mb-0 me-2" type="file" name="button">Subir archivo</button> -->
                            <input class="form-control" type="file" id="formFile">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-lg-8 mt-lg-0 mt-4">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bolder mb-3">Información del ave</h5>
              <div class="row">
                <div class="col-6">
                  <label class="form-label">Nombre común</label>
                  <div class="input">
                    <input id="" name="" class="form-control" type="text"  placeholder="Nombre común" onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
                </div>
                  <div class="col-6">
                    <label class="form-label">Nombre cientifíco</label>
                    <div class="input">
                      <input id="" name="" class="form-control" type="text"  placeholder="Nombre cientifíco" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                  </div>
              </div>
              <h5 class="font-weight-bolder mt-4">Area de observación</h5>
              <div class="row">
                <div class="col-3">
                  <label class="mt-2">Antropica</label>
                  <input class="form-control" type="number" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="col-3">
                  <label class="mt-2">Acuicultura</label>
                  <input class="form-control" type="number"  onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="col-3">
                  <label class="mt-2">Ganadaría</label>
                  <input class="form-control" type="number"  onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="col-3">
                  <label class="mt-2">Vivero</label>
                  <input class="form-control" type="number"  onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="col-4 mt-2">
                  <label class="mt-2">Esp. Menores</label>
                  <input class="form-control" type="number"  onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="col-4 mt-2">
                  <label class="mt-2">Cultivo</label>
                  <input class="form-control" type="number"  onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="col-4 mt-2">
                  <label class="mt-2">Bosque</label>
                  <input class="form-control" type="number"  onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 mt-4">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bolder">Socials</h5>
              <label>Shoppify Handle</label>
              <input class="form-control" type="text" placeholder="https://" onfocus="focused(this)" onfocusout="defocused(this)">
              <label class="mt-4">Facebook Account</label>
              <input class="form-control" type="text" placeholder="https://" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
          </div>
        </div>
        <div class=" mt-4 text-end">
          <a class="btn btn-success mb-0" ><i class="fas fa-save"></i></i>&nbsp;&nbsp;Guardar</a>
        </div>
      </div>
    </div>
@endsection
