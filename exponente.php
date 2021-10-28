<?php
    $uno = $_POST['uno'];
    $dos = $_POST['dos'];
    $operacion = pow($uno,$dos);
?>
<!doctype html>
<html lang="en">
    <?php
        require_once("head/index.php");
    ?>
    <body>
    <?php
        require_once("nav/index.php");
    ?>

    <div class="container p-4">
        <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12"></div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                <div class="card">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <h1>Exponenciacion</h1>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1>El resultado es: <?php echo $operacion?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12"></div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12"></div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                <div class="card">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <h1>Multiplicación</h1>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="operacion.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Primer Número</h5>
                                    <input type="number" name="uno" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <h5>Segundo Número</h5>
                                    <input type="number" name="dos" class="form-control">
                                </div>
                                <div class="col-sm-12 p-4"></div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                <button class="btn btn-success">Multiplicar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
