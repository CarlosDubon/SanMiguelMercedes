<?php
    require 'sql_conn.php';
    $query = "Select * from turismo";
    $query2 = "select count(*) as rows from turismo";


    $turismo = getResult($query);

    $rows = getResult($query2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../../html/head.html';
    ?>
    <title>Tourism</title>
</head>
<body>
    <header>
    <?php
       include '../../html/en/header.php';
    ?>
    </header>
    <section>
       <div class="container">
           <h1 style="display: inline-block">Tourism</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Play</span></button>
           <p>Rutas de las Flores, in El Salvador, there are many magical paradises full of nature, environment and curiosities to visit.</p>
           <p>But, one of those places is Concepción de Ataco, in Ahuachapán. There you can find many tourist attractions that you can enjoy to make your trip to El Salvador unforgettable.</p>
           <p>With a cool climate and a pleasant temperature, these are some of the attractions that Ataco offers to enjoy your trip.</p>
           <div class="row">
                <?php
                    for($i = 0; $i<$rows[0]['rows'];$i++){
                        $sinopsis = explode('.',$turismo[$i]['Descripcion']);
                        $query_img= 'select ruta from img_turismo where idTurismo = '.($i+1).';';
                        $imgTur = getResult($query_img);
                        $query2_img= 'select count(*) as rows from img_turismo where idTurismo='.($i+1).';';
                        $rows_img = getResult($query2_img);

                        echo '
                            <div class="col-md-4">
                                <a href="#" class="thumbnail" data-toggle="modal" data-target="#Turismo'.$i.'">
                                    <img class="miniaruta" src="'.$imgTur[0]['ruta'].'" alt="...">
                                </a>
                                <hr>
                                <h1>'.$turismo[$i]['Nombre'].'</h1>
                                <p>'.$sinopsis[0].'...</p>
                            </div>

                            <div class="modal fade bs-example-modal-lg" id="Turismo'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">'.$turismo[$i]['Nombre'].'</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="container">
                                      <div class="row gallery">';
                                        for($j=0; $j<$rows_img[0]['rows']; $j++){
                                            echo '<div class="col-4 gallery-container"><img src="'.$imgTur[$j]['ruta'].'" width="100%"></div>';
                                        }


                        echo       '</div>
                                    </div>
                                    <p>'.$turismo[$i]['Descripcion'].'</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" id="button-modal" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>';
                    }

                ?>
           </div>
       </div>

    </section>
    <footer>
      <?php
        include '../../html/Topscroller-dark.html';
        include '../../html/footer.html';
      ?>
    </footer>

</body>
</html>
