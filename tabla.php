<?php
    $nombre = "XBOX";
    $nombre1 = "PLAY 4";
    $nombre2 = "NINTENDO SWITCH";
    $nombre3 = "NINTENDO 3DS";
    $existencia = "5";
    $existencia1 = "8";
    $existencia2 = "10";
    $existencia3 = "90";

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
                <?php
                    $tienda = array(
                        "nombre" => array("XBOX ONE","PLAY 4","NINTENDO SWITCH", "NINTENDO 3DS"),
                        "vendedor" => array("Walmart","Game Planet","Game Planet", "Bodega Aurrera"),
                        "precio" => array("$9,000.00","$14,000","$8500","$3500"),
                        "color" => array("Negro","Negro","Amarillo","Rojo"),
                        "existencia" => array("5","8","10","90")
                    );
                    $cont = 0;
                    foreach ($tienda as $value) {
                        switch ($cont) {
                            case 0:
                                $datosNombre = $value;
                                break;
                            case 1:
                                $datosVendedor = $value;
                                break;
                            case 2:
                                $datosPrecio = $value;
                                break;
                            case 3:
                                $datosColor = $value;
                                break;
                            case 4:
                                $datosExistencia = $value;
                                break;
                        }
                        ++$cont;
                    }
                
                    echo "<table class='table table-bordered'>"; 
                    echo "<tr>
                            <th>Videojuego</th>
                            <th>Proveedor</th>
                            <th>Precio</th>
                            <th>Color</th>
                            <th>Existencia</th>
                         </tr>"; 
                    for ($i=0; $i<count($datosNombre);++$i) {
                        echo "<tr>";
                        echo "<td>";
                            echo $datosNombre[$i];
                        echo "</td>";
                        echo "<td>";
                            echo $datosVendedor[$i];
                        echo "</td>";
                        echo "<td>";
                            echo $datosPrecio[$i];
                        echo "</td>";
                        echo "<td>";
                            echo $datosColor[$i];
                        echo "</td>";
                        echo "<td>";
                        echo $datosExistencia[$i];
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12"></div>
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 p-4"></div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12"></div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                <div id="graf"></div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>
<script src="https://cdn.plot.ly/plotly-2.4.2.min.js"></script>
<script>
    dato1 = '<?php echo $nombre?>';
    dato2 = '<?php echo $nombre1?>';
    dato3 = '<?php echo $nombre2?>';
    dato4 = '<?php echo $nombre3?>';
    dato5 = '<?php echo $existencia?>';
    dato6 = '<?php echo $existencia1?>';
    dato7 = '<?php echo $existencia2?>';
    dato8 = '<?php echo $existencia3?>';
        var data = [{
            values: [dato5,dato6,dato7,dato8],
            labels:[dato1,dato2,dato3,dato4],
            type: 'pie',
            
           
        }];

        var layout = {
            height: 400,
            width: 500,
            title: 'Existencia'
        };

        Plotly.newPlot('graf',data,layout);
</script>
<script>
