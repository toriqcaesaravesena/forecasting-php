<?php include "_header.php"; ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    body {
        font-family: "Rubik", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
    }


    h4 {
        color: #333;
        font-weight: 700;
    }
    h5 {
        color: #333;
        font-weight: 500;
    }

    h6 {
        color: #333;
        font-weight: 300;
    }

    .carousel-indicators li {
        background-color: #333; /* Change to your desired color */
    }

    .carousel-indicators .active {
        background-color: #fff; /* Change to your desired active color */
    }

    .carousel-item img {
        filter: blur(3px); /* Adjust the blur intensity */
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 20%;
        background: rgba(255, 255, 255, 0.5);
        padding: 20px;
        border-radius: 10px;
        margin: auto;
        transform: translateY(-50%);
    }

    .carousel-inner {
        display: flex;
        align-items: center;
    }

    .container {
        padding-top: 50px;
        padding-bottom: 50px;
    }

</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i.ibb.co/PCksp4q/1.png" class="d-block w-100" alt="First slide">
                        <div class="carousel-caption d-none d-md-block mx-auto">
                            <h4>Tugas Akhir</h4>
                            <h5>Kecerdasan Buatan</h5>
                            <br>
                            <h6>Anggota Kelompok</h6>
                            <h6>Toriq Caesar Ave Sena - 222410102039 <br> Khisan Afif Ainur Rohim - 222410102075</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.ibb.co/Fgvfswf/2.png" class="d-block w-100" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <br>
                            <br>
                            <h4>Website Forecasting PMB</h4>
                            <h6>Memprediksi jumlah murid baru dengan metode regresi linier.</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.ibb.co/pb6Xmxg/3.png" class="d-block w-100" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <br>
                            <br>
                            <br>
                            <h4>Selamat Mencoba👍</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <a href="input.php" class="btn btn-success btn-block">Input Data</a>
                    </div>
                    <div class="col-md-12 mb-2">
                        <a href="tampil.php" class="btn btn-info btn-block">Tampil Data</a>
                    </div>
                    <div class="col-md-12 mb-2">
                        <a href="prediksi.php" class="btn btn-warning btn-block">Prediksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.carousel').carousel({
        interval: 3000
    });
</script>

<?php include "_footer.php"; ?>
