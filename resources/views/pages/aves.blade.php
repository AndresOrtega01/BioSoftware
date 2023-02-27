@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-4">
                <div class="row ">
                  <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Payment Method</h6>
                  </div>
                  <div class="col-6 text-end">
                  <a class="btn btn-success mb-0 {{ str_contains(request()->url(), 'creates') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'creates']) }}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Agregar Nueva Ave</a>
                  </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                        <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7"></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">Nombre Común</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-4">Nombre Científico</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Antropica <br><span class="text-primary text-xxl">99</span></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Acuicultura <br><span class="text-primary text-xxl">56</span></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Espc. Menores <br><span class="text-primary text-xxl">149</span></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Ganadaría <br><span class="text-primary text-xxl">77</span></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Vivero <br><span class="text-primary text-xxl">46</span></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Cultivo <br><span class="text-primary text-xxl">456</span></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Bosque <br><span class="text-primary text-xxl">83</span></th>
                        <th class="text-uppercase text-primary text-xxs font-weight-bolder text-center opacity-7 ps-2">Total de individuos <br>por especie</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="align-middle text-center" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="antropica">
                            <div class="d-flex align-items-center justify-content-center">
                            <span class="me-1 text-xs font-weight-bold">1</span>
                            </div>
                        </td>
                        <td>
                        
                        <div class="d-flex ">
                          <div>
                            <img src="https://images.pexels.com/photos/792416/pexels-photo-792416.jpeg?auto=compress&cs=tinysrgb&w=1600" style="width: 120px; height:100px; " class="avatar me-3" alt="GUACAMAYA  ">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 me-2 text-sm text-capitalize">Gua giyyuouboiubiup</h6>
                          </div>
                        </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0 text-capitalize text-center">Ara ararauna</p>
                      </td>
                      <td class="align-middle text-center" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="antropica">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">12</span>
                          </div>
                      </td>

                      <td class="align-middle text-center" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Acuicultura">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">43</span>
                          </div>
                      </td>

                      <td class="align-middle text-center" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Espc. Menores">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">33</span>
                          </div>
                      </td>

                      <td class="align-middle text-center" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Ganadaría">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">50</span>
                          </div>
                      </td>

                      <td class="align-middle text-center" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Vivero">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">14</span>
                          </div>
                      </td>

                      <td class="align-middle text-center" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Cultivo">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">7</span>
                          </div>
                      </td>

                      <td class="align-middle text-center" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Bosque">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">21</span>
                          </div>
                      </td>

                      <td class="align-middle text-center" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Total por especies">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs text-primary font-weight-bold">65</span>
                          </div>
                      </td>

                      <td class="align-middle  text-center">
                        <a class="btn btn-link text-dark px-2 mb-0" href="javascript:;"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-link text-dark px-2 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>
                        <a class="btn btn-link text-danger text-gradient px-2 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i></a>
                      </td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
@endsection
