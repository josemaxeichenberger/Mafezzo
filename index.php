<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lib/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <style>
        .btn_r{ border-radius: 15px;}
        .navbar-collapse {
            flex-grow: 0;

        }

        li {
            margin-left: 20px;
        }

        .navbar {
            padding-top: 50px;
            margin-bottom: 100px;
            
        }

        section#content-1 {
            background-image: url('img/FUNDO.png') !important;
            background-repeat: no-repeat;
            background-size: 100%;
            padding-bottom: 150px;
        }
        section#content-3 {
            background-image: url('img/Central.png') !important;
            background-repeat: no-repeat;
            background-size: 100%;
            padding-bottom: 150px;
        }

        .item {
            background-color: transparent;
        }

        .item>img {
            object-fit: contain;
            max-height: 600px;
            min-height: 600px;
            width: 100%;
        }

        /* .owl-carousel {
            margin-top: 95px;
            padding-left: 360px;
            background-color: #000;
        } */

        .owl-dots {
            display: none;
        }
        .carousel-control-next{align-items: end !important;}
        @media (max-width: 600px) {
            .navbar {
            padding-top: 50px;
            margin-bottom: 0px;
            background-color: #323232;
        }
        
        section#content-1 {
            background-image: url('img/FUNDO.png') !important;
            background-repeat: repeat;
            background-size: 100%;
            padding-bottom: 50px;
        }
        }
        @media (min-width:700px) {
            .item>img {
                object-fit: contain;
                max-height: 500px !important;
                min-height: 500px !important;
                width: 100%;
            }


            .carousel-inner {
                margin-top: 0px;
                padding-left: 130px;
                background-color: rgba(34, 34, 34, 0.5)
            }
            .navbar {
            padding-top: 50px;
            margin-bottom: 40px;
            background-color: #323232;
        }
        }
        @media (min-width: 821px) {
            .item>img {
                object-fit: contain;
                max-height: 300px;
                min-height: 300px;
                width: 100%;
            }


            .carousel-inner {
                margin-top: 0px;
                padding-left: 130px;
                background-color: rgba(34, 34, 34, 0.5);
                
            }
        }
        @media (min-width: 1100px) {
            .item>img {
                object-fit: contain;
                max-height: 310px;
                min-height: 310px;
                width: 100%;
            }


            .carousel-inner {
                margin-top: 0px;
                padding-left: 275px;
                background-color: rgba(34, 34, 34, 0.5)
            }
            .navbar {
      
      background-color: transparent;
  }
        }

        @media (min-width: 1199px) {
            .item>img {
                object-fit: contain;
                max-height: 390px;
                min-height: 390px;
                width: 100%;
            }
            .navbar {
      
      background-color: transparent;
  }

        }

        @media (min-width: 1399px) {
            .item>img {
                object-fit: contain;
                max-height: 325px;
                min-height: 325px;
                width: 100%;
            }


            .navbar {
      
      background-color: transparent;
  }
        }

        @media (min-width: 1900px) {
            .item>img {
                object-fit: contain;
                max-height: 390px;
                min-height: 390px;
                width: 100%;
            }
            .navbar {
      
      background-color: transparent;
  }
         
        }

        @media (min-width: 2000px) {
            .item>img {
                object-fit: contain;
                max-height: 600px;
                min-height: 600px;
                width: 100%;
            }
            .carousel-inner {
                margin-top: 0px;
                padding-left: 400px;
                background-color: rgba(34, 34, 34, 0.5)
            }
            .navbar {
      
            background-color: transparent;
        }
        }
    </style>
</head>

<body>
    <section id="content-1">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <img src="img/Logotipo.png" alt="" width="100">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #fff !important;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">A Mafezzo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Cases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contato</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container-fluid p-0 m-0">
            <div class="row align-items-center ">
                <div class="col-md-7 col-xl-8 col-xxl-6">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/cases/6_24_florianopolis_140.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/cases/11_74_florianopolis_383.jpeg"class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/cases/6_24_florianopolis_140.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button> -->
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-5 col-xl-3 col-xxl-3 text-start text-white ">
                    <p class="fs-1">Lorem ipsum dolor <b>sit amet</b></p>
                    <a type="button" class="btn btn-outline-light mx-auto d-block mb-5 w-50  mt-5 btn_r" >CONHEÇA</a>
                    <p class="fs-6 mt-5">Lorem ipsum dolor <b>sit amet</b></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid m-0 p-0">
            <img class="img-fluid d-block w-100" src="img/cases/Captura de Tela 2023-02-24 às 14.50.05.png">
        </div>
    </section>
    <section id="content-3" style="height:100vh">
        <div class="container m-0 p-0">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>
    <script src="lib/jquery-3.6.3.min.js"></script>
    <script src="lib/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <script src="lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <!-- <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass: true,

        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    </script> -->
</body>

</html>