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
    <form action="simpan.php" method="post">
        <fieldset class="border p-4">
            <legend class="w-auto">Input Data PMB</legend>
            <div class="form-group">
                <label for="tahun">Tahun Akademik</label>
                <select name="tahun" class="form-control" required>
                    <option value=""></option>
                    <?php
                    $now = date("Y");
                    for ($i = $now; $i >= 2000; $i--) {
                        echo "<option value='" . $i . "/" . ($i + 1) . "'>" . $i . "/" . ($i + 1) . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah PMB</label>
                <input type="number" name="jumlah" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </fieldset>
    </form>

    <div class="mt-3">
        <a href="./" class="btn btn-primary">Halaman Utama</a>
    </div>
</div>

<?php include "_footer.php"; ?>
