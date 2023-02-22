{{-- @extends('layouts.main')

@section('container') --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sayembara's | {{ $title }}</title>
    <link rel="icon" href="/img/favicon.png">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <script src="../js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/8e408a640a.js" crossorigin="anonymous"></script>


    {{-- my Style --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styles_landing.css">
  </head>
  <body class="bg-light">

        @include('partials.navbar')
        @include('partials.login')
        @include('partials.register')
      <header id="header " class="header">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 p-3 d-flex justify-content-center align-items-center">
                <div class="container-fluid text-center p-3">
                  <div class="text-dark d-flex justify-content-center flex-wrap home-font-h1">
                    <h1 class="p-3 fw-bold"><b>Welcome To</b></h1> 
                    <h1 class="bg-dark p-3 fw-bold text-white rounded">Sayembara's</h1>
                  </div>

                  <p class="h6 home-font-p mt-3 mb-3">Belajar gratis dan dapatkan berbagai benefit. Daftar berbagai workshop dan courses yang menarik dengan berbagai keuntungan.</p>
                    <a type="button" id="dftr_land_pg"class="btn btn-landing fw-bold text-decoration-none border border-2 border-dark rounded ps-5 pe-5 pt-2 pb-2 me-auto mb-3" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Daftar</a>
                    <a href="#service_page" id="dftr_land_pg" class="btn fw-bold btn-out-landing border-1 text-decoration-none border border-2 border-dark rounded ps-5 pe-5 pt-2 pb-2 mb-3">Pelajari</a>
                </div>
              </div>
              <div class="col-sm-6 d-none d-lg-block d-xl-block d-flex justify-content-center align-items-center">
                <img src="../img/banner_home_1.jpg" alt="home" class="img-fluid">
              </div>
            </div>
          </div>
        </header>
      
      <section class="service pt-5 pb-0">
          <div class="container" id="service_page">
              <div class="row text-center">
                  <h4 class="pb-3 text-uppercase">Service</h3>
                  <div class="col-md-3 mb-3">
      
                      <div class="m-auto btn rounded-circle shadow text-center bg-purple" style="width: 8rem; height: 8rem;">
                          <span class="service-logo">
                                <i class="bi bi-currency-dollar"></i>
                            </span>
                      </div>
                          <div class="card border-0 bg-light service-card mb-auto mt-3">
                              <div class="card-body">
                                <h5 class="card-title">Hemat</h5>
                                <hr>
                                <p class="card-text">Dapatkan berbagai workshop dan courses secara gratis dengan benefit lengkap.</p>
                              </div>
                            </div>
                  
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="m-auto btn rounded-circle shadow text-center bg-purple" style="width: 8rem; height: 8rem;">
                        <span class="service-logo">
                            <i class="bi bi-people"></i>
                        </span>
                    </div>
                          <div class="card service-card border-0 bg-light service-card mb-auto mt-3">
                              <div class="card-body">
                                <h5 class="card-title">1000+ Pengajar</h5>
                                <hr>
                                <p class="card-text">Tersedia lebih dari 1000+ pengajar dari berbagai negara yang memiliki berbagai jenis workshop yang menarik</p>
                              </div>
                            </div>
                  
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="m-auto btn rounded-circle shadow text-center bg-purple" style="width: 8rem; height: 8rem;">
                        <span class="service-logo">
                            <i class="bi bi-trophy"></i>
                        </span>
                    </div>
                          <div class="card service-card border-0 bg-light service-card mb-auto mt-3">
                              <div class="card-body">
                                <h5 class="card-title">Sertifikat</h5>
                                <hr>
                                <p class="card-text">Tersedia sertifikat secara online yang dapat anda akses dimana saja.</p>
                              </div>
                            </div>
                  
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="m-auto btn rounded-circle shadow text-center bg-purple" style="width: 8rem; height: 8rem;">
                        <span class="service-logo">
                            <i class="bi bi-person-check"></i>
                        </span>
                    </div>
                          <div class="card service-card border-0 bg-light service-card mb-auto mt-3">
                              <div class="card-body">
                                <h5 class="card-title">Pengajar Terverifikasi</h5>
                                <hr>
                                <p class="card-text">Pengajar yang terpercaya dan bersertifikat dengan teknik mengajar yang sudah terverifikasi</p>
                              </div>
                            </div>
                  </div>
              </div>
          </div>
      </section>

      {{-- <section>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://placeimg.com/1080/500/animals" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>My Caption Title (1st Image)</h5>
                            <p>The whole caption will only show up if the screen is at least medium size.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://placeimg.com/1080/500/arch" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://placeimg.com/1080/500/nature" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>            
        </div>
      </section> --}}

      <section class="page-section pt-3" id="about">
        <div class="container">
            <div class="text-center">
                <h4 class="section-heading text-uppercase">About</h4>
                <h3 class="section-subheading text-muted">Perjalanan Sayembara.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image shadow"><img class="rounded-circle img-fluid" src="../img/about/1.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h5>2009-2011</h5>
                            <h5 class="subheading">Our Humble Beginnings</h5>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image shadow"><img class="rounded-circle img-fluid" src="../img/about/2.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image shadow"><img class="rounded-circle img-fluid" src="../img/about/3.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image shadow"><img class="rounded-circle img-fluid" src="../img/about/4.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image bg-purple shadow">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section pt-0 bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h4 class="section-heading text-uppercase">Sayembara Team</h4>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle img-team" src="../img/team/mario.jpg" alt="team1" />
                        <h5>Mario Rudy Silalahi</h5>
                        <p class="text-muted">Database</p>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle img-team" src="../img/team/kopri.jpg" alt="team2" />
                        <h5>Kopriyanto</h5>
                        <p class="text-muted">Backend</p>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle img-team" src="../img/team/sahnaz.jpg" alt="..." />
                        <h5>Sahnaz</h5>
                        <p class="text-muted">Frontend</p>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle img-team" src="../img/team/suci.jpg" alt="..." />
                        <h5>Suci Rahayu</h5>
                        <p class="text-muted">Frontend</p>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark bg-purple btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    {{-- <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="../img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="../img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="../img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="../img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>


      @include('partials.footer')
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}
      <script src="/css/style.css"></script>
      <script src="/css/styles_landing.css"></script>
      
      <script src="/js/login.js"></script>
      <script src="/js/scripts_landing.js"></script>
 

  </body>
</html>


{{-- @endsection --}}
