<?php
	// index.principal.php
?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/banner-carrossel-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/banner-carrossel-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/banner-carrossel-3.jpg" alt="Third slide">
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
    
    <main class="mt-5 mb-5 container">
             <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="assets/img/quadro1.png" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Artista</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/img/quadro2.png" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Artista</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/img/quadro3.png" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Artista</p>
                </div>
                </div>
            </div>
    </main>

    <div class="row bg-laranja">
        <div class="col-12 p-1 p-md-0">
            <form class="d-flex flex-column align-items-center my-5 mx-4 form-padrao" method="POST" action="#">
                <button type="button" class="mt-2 mt-md-0 btn btn-padrao">ver todos<i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
    </div>  
