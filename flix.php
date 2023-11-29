<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link 
        href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <style>
          .navbar-brand{
            color:red;
            font-weight: bold;
          }
          .carousal-image {
            height: 650px;  
            padding-left: 20%;
            padding-right: 20%; 
          }
          .body-style{
            height: 3000px;
          }
        </style>
      <title> FLIX </title>
    </head>
    <body class="body-style">
    <!-- nav strt -->
                  <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <!-- off -->
                  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="margin-right: 10px">Info</button>
                  <!-- off -->
                  <a class="navbar-brand" href="#carousel">MOVIEFLIX</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                      <a class="nav-link" href="#features">Features</a>
                      <a class="nav-link" href="#pricing">Pricing</a>
                      <!--Toast -->
                      <button type="button" class="btn btn-primary" id="liveToastBtn" style="margin-right: 10px">Movies uploaded</button>

                          <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="toast-header">
                                <img src="..." class="rounded me-2" alt="...">
                                <strong class="me-auto">Movies uploaded</strong>
                                <small>1 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                              </div>
                              <div class="toast-body">
                                Need for speed uploaded 
                              </div>
                            </div>
                          </div>
                      <!-- Toast end -->
                      <!-- sign up modal -->
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Sign up
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Enter</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Enter username:<br>
                                  <input type="text" placeholder="username" class="form-control"><br>
                                  Enter password:<br>
                                  <input type="text" placeholder="password" class="form-control">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Sign up</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      <!-- end -->
                    </div>
                  </div>
                </div>
              </nav>
    <!-- Nav end -->
<!-- offcanvas start-->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">This is the offcanvas of MOVIEFLIX</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>
<!-- offcanvas end -->

    <!-- carousel start -->
    <div id="carousel">
              <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/poster1.jpg" class="d-block w-100 carousal-image" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/poster4.webp" class="d-block w-100 carousal-image" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/poster3.jpg" class="d-block w-100 carousal-image" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
<!-- End carousal -->
<br>
<br>
<!-- to add Feautues -->
<div id="features">
<div class="grid text-center">
  <div class="g-col-6 g-col-md-4">
          <h3> FEATURE 1 </h3>
          Add some text 
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          end of Text
  </div>
  <div class="g-col-6 g-col-md-4">          
    <h3> FEATURE 2 </h3>
          Add some text 
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          end of Text</div>
  <div class="g-col-6 g-col-md-4">
  <h3> FEATURE 3 </h3>
          Add some text 
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          end of Text
  </div>
</div>
</div>
<!-- end of features -->
<br>
<br>
<br>


<!-- pricing list -->
<div id="pricing">
<div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Basic</h5>
        <p class="card-text">
                          <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Monthly price 
                      <span class="badge bg-danger rounded-pill">333</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Video Quality
                      <span class="badge bg-danger rounded-pill">Good</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Resolution 
                      <span class="badge bg-danger rounded-pill">720p</span>
                    </li>
                  </ul>
        </p>
        <!-- Button for sign up -->
            <!-- Button trigger modal -->
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Pay 333
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">You have selected the basic plan</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <input type="text" id="username" placeholder="username">
                                  <br>
                                  <br>
                                  <input type="text" id="password" placeholder="password">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Log in</button>
                                </div>
                              </div>
                            </div>
                          </div>
                <!-- button end-->
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Standard</h5>
        <p class="card-text">
                    <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                  Monthly price 
                                  <span class="badge bg-danger rounded-pill">666</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                  Video Quality
                                  <span class="badge bg-danger rounded-pill">Better</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                  Resolution 
                                  <span class="badge bg-danger rounded-pill">1080p</span>
                                </li>
                              </ul>
        </p>
        <!-- Button for sign up -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Pay 666
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">You have selected the standard plan</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <input type="text" id="username" placeholder="username">
                                  <br>
                                  <br>
                                  <input type="text" id="password" placeholder="password">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Log in</button>
                                </div>
                              </div>
                            </div>
                          </div>
                <!-- button end-->
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Premium</h5>
        <p class="card-text">
        <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Monthly price 
                      <span class="badge bg-danger rounded-pill">999</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Video Quality
                      <span class="badge bg-danger rounded-pill">Best</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Resolution 
                      <span class="badge bg-danger rounded-pill">4k+HDR</span>
                    </li>
                  </ul>
        </p>
        <!-- Button for sign up -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Pay 999
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">You have selected the Premium plan</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <input type="text" id="username" placeholder="username">
                                  <br>
                                  <br>
                                  <input type="text" id="password" placeholder="password">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Log in</button>
                                </div>
                              </div>
                            </div>
                          </div>
                <!-- button end-->
      </div>
    </div>
  </div>
</div>
        </div>
        

<!-- end pf pricing --> 
    </body>
<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/di
st/js/bootstrap.bundle.min.js">
        </script>
        <script>
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}
</script>

</html>

