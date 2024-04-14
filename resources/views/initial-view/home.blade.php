@extends('initial-view.main')

@section('container')

<div class="container-fluid pt-5">
    <div class="container pb-3">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Kategori</span>
        </p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="h1 font-weight-normal text-primary mb-3"
            ></i>
            <img src="assets/img/food.png" style="height:50px" alt="">
            <div class="pl-4">
              <h4>Makanan</h4>
              {{-- <p class="m-0">
                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                lorem amet elitr vero...
              </p> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="h1 font-weight-normal text-primary mb-3"
            ></i>
            <img src="assets/img/soda.png" style="height:50px" alt="">
            <div class="pl-4">
              <h4>Minuman</h4>
              {{-- <p class="m-0">
                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                lorem amet elitr vero...
              </p> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="h1 font-weight-normal text-primary mb-3"
            ></i>
            <img src="assets/img/ice-cream.png" style="height:50px" alt="">
            <div class="pl-4">
              <h4>Ice Cream</h4>
              {{-- <p class="m-0">
                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                lorem amet elitr vero...
              </p> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="h1 font-weight-normal text-primary mb-3"
            ></i>
            <img src="assets/img/grain.png" style="height:50px" alt="">
            <div class="pl-4">
              <h4>Toping</h4>
              {{-- <p class="m-0">
                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                lorem amet elitr vero...
              </p> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="h1 font-weight-normal text-primary mb-3"
            ></i>
            <img src="assets/img/cafe.png" style="height:50px" alt="">
            <div class="pl-4">
              <h4>Toko</h4>
              {{-- <p class="m-0">
                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                lorem amet elitr vero...
              </p> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="h1 font-weight-normal text-primary mb-3"
            ></i>
            <img src="assets/img/event.png" style="height:50px" alt="">
            <div class="pl-4">
              <h4>Acara</h4>
              {{-- <p class="m-0">
                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                lorem amet elitr vero...
              </p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
      <!-- Blog Start -->
      <div class="container-fluid pt-5">
        <div class="container">
          <div class="text-center pb-2">
            <p class="section-title px-5">
              <span class="px-2">Foto Terbaru</span>
            </p>
          </div>
          <div class="row pb-3">
            <div class="col-lg-4 mb-4">
              <div class="card border-0 shadow-sm mb-2">
                <img class="card-img-top mb-2" src="assets/img/people1.jpg" alt="" />
                <div class="card-body bg-light text-center p-4">
                  <h4 class="">Diam amet eos at no eos</h4>
                  <div class="d-flex justify-content-center mb-3">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                  <p>
                    Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                    eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                    lorem. Tempor ipsum justo amet stet...
                  </p>
                  <a href="" class="btn btn-primary px-4 mx-auto my-2"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="card border-0 shadow-sm mb-2">
                <img class="card-img-top mb-2" src="assets/img/people2.jpg" alt="" />
                <div class="card-body bg-light text-center p-4">
                  <h4 class="">Diam amet eos at no eos</h4>
                  <div class="d-flex justify-content-center mb-3">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                  <p>
                    Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                    eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                    lorem. Tempor ipsum justo amet stet...
                  </p>
                  <a href="" class="btn btn-primary px-4 mx-auto my-2"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="card border-0 shadow-sm mb-2">
                <img class="card-img-top mb-2" src="assets/img/people3.jpg" alt="" />
                <div class="card-body bg-light text-center p-4">
                  <h4 class="">Diam amet eos at no eos</h4>
                  <div class="d-flex justify-content-center mb-3">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                  <p>
                    Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                    eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                    lorem. Tempor ipsum justo amet stet...
                  </p>
                  <a href="" class="btn btn-primary px-4 mx-auto my-2"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Blog End -->
@endsection