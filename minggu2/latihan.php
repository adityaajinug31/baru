<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Latihan 1</title>
  </head>
  <body>
  <?php
     if ($_SERVER["REQUEST_METHOD"]=="POST") {
            #var_dump($_POST);
            $operasi=$_POST["operasi"];
            switch ($operasi){
                case"+":
                    $c=$_POST["bil1"]+$_POST["bil2"];
                break;
                case"-":
                    $c=$_POST["bil1"]-$_POST["bil2"];
                break;
                case"/":
                    $c=$_POST["bil1"]/$_POST["bil2"];
                break;
                case"*":
                    $c=$_POST["bil1"]*$_POST["bil2"];
                break;
            }
        }?>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="calc" method="post">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">bil 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bil1" value="<?php if (!empty($_POST["operasi"])) {echo $_POST["bil1"];};?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">bil 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bil2" value="<?php if (!empty($_POST["operasi"])) {echo $_POST["bil2"];};?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hasil</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="hasil" value="<?php if (!empty($_POST["operasi"])){ECHO round($c,2);};?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Operator</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="operasi">
                                        <option value="+">+ (tambah)</option>
                                        <option value="-">- (kurang)</option>
                                        <option value="*">* (kali)</option>
                                        <option value="/">/ (bagi)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-dark" name="hitung" value="hitung">Hitung</button>
                            </div>
                </form>
            </div>
        </div>
    </div>

















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>