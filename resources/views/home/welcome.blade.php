
@extends('layouts.main.main')





{{-- INICIO DA SEÇÃO DA NAVBAR --}}

@section('navbar')

  @include('components.navbar')

@endsection

{{-- FIM DA SEÇÃO DA NAVBAR --}}





{{-- INICIO DA SEÇÃO DA BANNER --}}

@section('inicio')

  <style>
    /* Carousel styling */
    #introCarousel,
    .carousel-inner-J,
    .carousel-item-J,
    .carousel-item-J.active {
      height: 100vh;
    }

    .carousel-item-J:nth-child(1) {
      background-image: url('img/background/test.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    .carousel-item-J:nth-child(2) {
      background-image: url('img/background/test.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    .carousel-item-J:nth-child(3) {
      background-image: url('img/background/test.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #introCarousel {
        margin-top: -58.59px;
      }
      #introCarousel,
      .carousel-inner-J,
      .carousel-item-J,
      .carousel-item-J.active {
        height: 50vh;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }
  </style>


  <!-- Carousel wrapper -->
  <section id=inicio>
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
      </ol>
    
      <!-- Inner -->
      <div class="carousel-inner carousel-inner-J">
        <!-- Single item -->
        <div class="carousel-item active carousel-item-J">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
                <h5 class="mb-4">Best & free guide of responsive web design</h5>
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                  role="button"
                  rel="nofollow"
                  target="_blank"
                  >Start tutorial</a
                >
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href="https://mdbootstrap.com/docs/standard/"
                  target="_blank"
                  role="button"
                  >Download MDB UI KIT</a
                >
              </div>
            </div>
          </div>
        </div>
    
        <!-- Single item -->
        <div class="carousel-item carousel-item-J">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h2>You can place here any content</h2>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Single item -->
        <div class="carousel-item carousel-item-J">
          <div
            class="mask"
            style="
              background: linear-gradient(
                45deg,
                rgba(29, 236, 197, 0.7),
                rgba(91, 14, 214, 0.7) 100%
              );
            "
          >
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h2>And cover it with any mask</h2>
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href="https://mdbootstrap.com/docs/standard/content-styles/masks/"
                  target="_blank"
                  role="button"
                  >Learn about masks</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Inner -->
    
      <!-- Controls -->
      <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Carousel wrapper -->
  </section>
  <!--Section: Content-->

  <hr class="my-5" />

  <!--Section: Content-->
@endsection

{{-- FIM DA SEÇÃO DO BANNER --}}





{{-- INICIO DA SEÇÃO PALESTRA --}}

@section('palestra')

  <!--Main Navigation-->
  
  <!--Main layout-->
  <main class="mt-5">
  <div class="container">
    <!--Section: Content-->
    <section>
      <div class="row">
        <div class="col-md-6 gx-5 mb-4">
          <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
        </div>
  
        <div class="col-md-6 gx-5 mb-4">
          <h4><strong>Facilis consequatur eligendi</strong></h4>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
          </p>
          <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
          <p class="text-muted">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
            nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
            alias, unde optio accusantium soluta, iusto molestiae adipisci et?
          </p>
        </div>
      </div>
    </section>
    <!--Section: Content-->
  
    <hr class="my-5" />
  
    <!--Section: Content-->
    <section class="text-center" id=palestras>
      <h4 class="mb-5"><strong>Palestras Próximas</strong></h4>
      <!-- Carousel wrapper -->
      <div
        id="carouselMultiItemExample"
        class="carousel slide carousel-dark text-center"
        data-mdb-ride="carousel"
      >
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4">
          <button
            class="carousel-control-prev position-relative"
            type="button"
            data-mdb-target="#carouselMultiItemExample"
            data-mdb-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next position-relative"
            type="button"
            data-mdb-target="#carouselMultiItemExample"
            data-mdb-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- Inner -->
        <div class="carousel-inner py-4">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/181.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Participar</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/182.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Participar</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/183.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Participar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-12">
                  <div class="card">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Participar</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/185.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Participar</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/186.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Participar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <div class="card">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/187.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Participar</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/188.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Participar</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbootstrap.com/img/new/standard/nature/189.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Participar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Inner -->
      </div>
      <!-- Carousel wrapper -->
    </section>
    <!--Section: Content-->
  
    <hr class="my-5" />
  
    <!--Section: Content-->
    <section class="text-center" id=palestras>
      <h4 class="mb-5"><strong>Palestras</strong></h4>
  
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
                src="/img/icon.png"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Palestra - 01</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Participar</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
              src="/img/icon.png"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Palestra - 02</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Participar</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
                src="/img/icon.png"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Palestra - 03</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Participar</a>
            </div>
          </div>
        </div>

        <hr class="my-5" />

        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
                src="/img/icon.png"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Palestra - 04</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Participar</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
                src="/img/icon.png"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Palestra - 05</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Participar</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
                src="/img/icon.png"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Palestra - 06</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Participar</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section: Content-->
    
  </div>
  </main>
  <!--Main layout-->

@endsection





{{-- INICIO DA SEÇÃO DA NAVBAR --}}

@section('footer')

  @include('components.footer')

@endsection

{{-- FIM DA SEÇÃO DA NAVBAR --}}

