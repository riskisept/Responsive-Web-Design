<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../tugas3/fiborit.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>Barisan Aritmatika</title>
</head>

<body>
  <section class="header">
    <div class="container">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="../tugas3/fibonacci.php">FIBONACCI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../tugas3/aritmatika.php">ARITMATIKA</a>
        </li>
      </ul>
    </div>
  </section>


  <section class="isi">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <form method="GET" action="" class="bg-white form-container" id="forminput">
          <div class="form-group">
            <label for="formGroupExampleInput">Masukkan Suku Pertama:</label>
            <input type="number" class="form-control" name="s1" id="" placeholder="Suku ke-1">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Masukkan Beda:</label>
            <input type="number" class="form-control" name="beda" id="" placeholder="Beda">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Masukkan Suku ke-n:</label>
            <input type="number" class="form-control" name="suku_n" id="" placeholder="Suku ke-n">
          </div>
          <div class="button">
            <input class="btn btn-primary" type="submit" value="Hasil">
          </div>
        </form>

        <?php

        $s1         = "";
        $beda       = "";
        $baris      = "";
        $barisan    = "";
        $hasil      = "";

        if (isset($_GET['s1']) && isset($_GET['beda']) && isset($_GET['suku_n'])) {

          $a = $_GET['s1'];
          $b = $_GET['beda'];
          $n = $_GET['suku_n'];

        ?>
          <div class="result-containers">
            <div class="fibonancis-result">
              <div class="fibonancis-results">

                <?php

                for ($i = 1; $i < $n + 1; $i++) {
                  $baris = $a + ($i - 1) * $b;
                  $barisan .= $baris . " ";
                }

                $hasil = $a + ($n - 1) * $b;

                ?>
              </div>
              <a class="hasil">Suku ke <?php echo $n ?> adalah : <?php echo $hasil ?> </a>
              <p class="hasil"> Baris Aritmetikanya adalah : <?php echo $barisan ?></p>
            </div>
          </div>
        <?php
        }
        ?>
  </section>
</body>

</html>