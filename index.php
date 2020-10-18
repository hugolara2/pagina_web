<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joaquin Mendoza ">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="icon" href="images/dieta.png">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets\images\diet.ico" type="image/x-icon">
    <title>NutriWeb</title>

</head>
<body>

<!-- header -->
<?  include_once 'assets/header.php'; ?>
<!-- /.. -->

<!-- main -->
    <main>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets\images\carousel_1.jpg" class="d-block w-100" alt="imagen banner">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a tu nueva vida <span>comiendo mejor</span></h5>
                    <p>Baja de peso / Diabetes / Colitis / Colesterol / Aumento de masa muscular</p>
                </div>
                </div>
            </div>
            </div>
        <section>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-6">
                    <div class="card">
                    <img src="assets\images\plan_1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Plan 1</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary"><img src="assets\images\plus_icon.ico" alt="" width="20" height="20" title="ver más"></a>
                    </div>
                    </div>
                </div>
                <div class="col mb-6">
                    <div class="card">
                    <img src="assets\images\plan_1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Plan 2</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary"><img src="assets\images\plus_icon.ico" alt="" width="20" height="20" title="ver más"></a>
                    </div>
                    </div>
                </div>
                <div class="col mb-6">
                    <div class="card">
                    <img src="assets\images\plan_1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Plan 3</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary"><img src="assets\images\plus_icon.ico" alt="" width="20" height="20" title="ver más"></a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item mt-6 mb-6">
                            <a href="#">
                                <img src="assets/images/main_1.jpg" class="img-fluid">
                                <div class="portfolio-details bg-light p-4">
                                    <h4 class="text-dark">Tips de Nutrición</h4>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam sunt similique molestiae laboriosam nisi odio perspiciatis, nobis doloremque cupiditate, eos vitae! Dolore, consequuntur eius est deserunt laudantium sint placeat ut?</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item mt-6">
                            <a href="#">
                                <img src="assets/images/main_2.jpg" class="img-fluid">
                                <div class="portfolio-details bg-light p-4">
                                    <h4 class="text-dark">Asesorías 24/7</h4>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officiis. Possimus corporis error atque? Sequi delectus cupiditate esse distinctio! Facere laborum recusandae rerum fugiat, perferendis tempore tempora error suscipit modi?</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <p class="text-gold mb-0">Lic. en Nutrición</p>
                    <a href="#" class="text-muted">Anaid Solís Flores<i
                            class="icon ion-md-arrow-forward ml-2"></i></a>
                </div>
            </div>
        </section>
    </main>
    <!-- /.. -->

    <!-- footer -->
    <?php include_once 'assets/footer.php'; ?>
    <!-- /.. -->
</body>
</html>
