<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Shop-Nology</title>

    <!-- Bootstrap core CSS -->
    <link href="template/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- TemplateMo 546 Sixteen Clothing https://templatemo.com/tm-546-sixteen-clothing -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="template/css/fontawesome.css">
    <link rel="stylesheet" href="template/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="template/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Shop-<em>nology</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inputbarang.php">Input Barang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Hali</h4>
                    <h2>Hali</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Besti Products</h2>
                        <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>


                <tbody>
                    <?php echo view($content_view) ?>
                </tbody>


                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner-content">
                                    <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                                        - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>


                <!-- Bootstrap core JavaScript -->
                <script src="template/jquery/jquery.min.js"></script>
                <script src="template/bootstrap/js/bootstrap.bundle.min.js"></script>


                <!-- Additional Scripts -->
                <script src="template/js/custom.js"></script>
                <script src="template/js/owl.js"></script>
                <script src="template/js/slick.js"></script>
                <script src="template/js/isotope.js"></script>
                <script src="template/js/accordions.js"></script>


                <script language="text/Javascript">
                    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                    function clearField(t) { //declaring the array outside of the
                        if (!cleared[t.id]) { // function makes it static and global
                            cleared[t.id] = 1; // you could use true and false, but that's more typing
                            t.value = ''; // with more chance of typos
                            t.style.color = '#fff';
                        }
                    }
                </script>


</body>

</html>