<?php include "_header.php"; ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<style>
    body {
        font-family: "Rubik", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Peramalan PMB</h5>
                </div>
                <div class="card-body">
                    <form action="tampil.php" method="post">
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label for="tahun" class="col-form-label">Peramalan PMB untuk</label>
                            </div>
                            <div class="col-auto">
                                <select name="tahun" id="tahun" class="form-control mb-2" required>
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-auto">
                                <label class="col-form-label">tahun akademik berikutnya</label>
                            </div>
                            <div class="col-auto">
                                <button type="submit" name="prediksi" class="btn btn-primary mb-2">Prediksi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-4">
                <a href="./" class="btn btn-secondary btn-block">Halaman Utama</a>
            </div>
        </div>
    </div>
</div>

<?php include "_footer.php"; ?>
