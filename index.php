<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sweetplace Decoraciones</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/sweetplace.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css" />
    <link rel="stylesheet" href="css/main.css?v=1.1.7">
    <!-- Https -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146684041-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-146684041-1');
    </script> -->
    <!-- Http -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146684041-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-146684041-2');
    </script>
</head>

<body>

        <nav class="nav-menu" onscroll="menuScroll()" id="nav-menu">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-12 text-center">
                        <img src="images/logo sweetplace fondo transparente.png" alt="logo" class="img-fluid sweetplace-logo" />
                    </div>
                </div>
            </div>
        </nav>

    <section>
        <div id="banner">
            <div class="container">
                <div class="row justify-content-center justify-content-xl-end">

                    <div class="col-md-8 col-xl-4 col-12">

                        <form id="formulario-contacto" method="POST" action="sendform.php">

                            <div class="form-group">

                                <label for="nombre">Nombre</label>

                                <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Ingresa tu nombre" name="nombre" required>

                                <small id="nombre" class="form-text text-muted">Ingresa tu nombre</small>

                            </div>

                            <div class="form-group">

                            <label for="exampleInputEmail1">Correo electrónico</label>

                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>

                            <small id="emailHelp" class="form-text text-muted">No compartiremos tu correo electrónico con nadie.</small>

                            </div>

                            <div class="form-group">

                                <label for="exampleFormControlTextarea1">Consulta o Comentario</label>

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario" required></textarea>

                            </div>

                            <div class="form-group form-check">

                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="newsletter">

                            <label class="form-check-label" for="exampleCheck1">Deseo recibir promociones e información relevante</label>

                            </div>

                            <button type="submit" class="btn btn-primary" id="submit-btn">Enviar</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="adn">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="section-title text-center">Creamos un espacio para que cumplas tus sueños!</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="d-block w-100" src="images/cumple-iveth-20-min.jpg" alt="">
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <p class="adn-description">Nos encanta formar parte de tus momentos especiales, por eso nos aseguramos que tengas un espacio mágico que reúna a la familia y deje momentos inolvidables. <br>
                    Tú sólo disfruta, deja lo demás en nuestras manos.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="projects"> -->
    <!--     <div class="container"> -->
    <!--         <div class="row"> -->
    <!--             <div class="col-12"> -->
    <!--                 <h5 class="section-title text-center">Nuestros Proyectos</h5> -->
    <!--             </div> -->
    <!--         </div> -->
    <!--         <div class="row"> -->
    <!--             <div class="col-12"> -->
    <!--                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> -->
    <!--                     <ol class="carousel-indicators"> -->
    <!--                       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->
    <!--                       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> -->
    <!--                       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    <!--                     </ol> -->
    <!--                     <div class="carousel-inner"> -->
    <!--                       <div class="carousel-item active"> -->
    <!--                         <img class="d-block w-100" src="images/cumple-iveth-10-min.jpg" alt="First slide"> -->
    <!--                       </div> -->
    <!--                       <div class="carousel-item"> -->
    <!--                         <img class="d-block w-100" src="..." alt="Second slide"> -->
    <!--                       </div> -->
    <!--                       <div class="carousel-item"> -->
    <!--                         <img class="d-block w-100" src="..." alt="Third slide"> -->
    <!--                       </div> -->
    <!--                     </div> -->
    <!--                     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"  --><!-- data-slide="prev"> -->
    <!--                       <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
    <!--                       <span class="sr-only">Previous</span> -->
    <!--                     </a> -->
    <!--                     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"  --><!-- data-slide="next"> -->
    <!--                       <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
    <!--                       <span class="sr-only">Next</span> -->
    <!--                     </a> -->
    <!--                 </div> -->
    <!--             </div> -->
    <!--         </div> -->
    <!--     </div> -->
    <!-- </section> -->
    <section class="products">
        <div class="container">
             <div class="row">
                <div class="col-12">
                    <h5 class="section-title text-center">Haz un regalo <strong>Especial</strong></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="gift-container">
                        <img src="images/Dia-de-los-enamorados-regalo-1-5-min.jpg" alt="" class="img image w-100">
                        <h4 class="gift-title">Ramo de Flores Chick</h4>
                        <p>Un clásico que siempre alegra y llega al corazón.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="gift-container">
                        <img src="images/Dia-de-los-enamorados-regalo-2-12-min.jpg" alt="" class="img image w-100">
                        <h4 class="gift-title">Desayuno Romántico</h4>
                        <p>Comparte un tiempo único con esa persona especial</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="gift-container">
                        <img src="images/Dia-de-los-enamorados-regalo-3-4-min.jpg" alt="" class="img image w-100">
                        <h4 class="gift-title">Ramo de Flores Bombón</h4>
                        <p>La elegancia de las Flores y la dulzura del Chocolate se juntan en este hermoso regalo.</p>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="button-container">
                        <a href="#banner" class="btn btn-primary btn-cotizar">Cotizar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="bower_components/aos/dist/aos.js"></script>

    <script src="js/main.js?v=1.0.7"></script>

</body>

</html>