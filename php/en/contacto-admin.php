<?php
    session_start();
    if(!isset($_SESSION['Nombre'])){
        header('Location: /Ataco/php/en/contacto.php');
    }
    require 'sql_conn.php';
    $query ="SELECT * FROM Comentario";
    $query2 = "select count(*) as rows from Comentario";
    $comentarios = getResult($query);
    $rows=getResult($query2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../../html/head.html';
    ?>
    <title>Contact Us</title>
</head>
<body>
    <header>
    <?php
     include '../../html/en/header.php';
    ?>

    </header>
        <div class="container">
           <section>
            <h1 style="display: inline-block">Contact Us</h1><br>
            <h6 class="mt-0 pt-0">We invite you to contact us; we will answer you as soon as possible.</h6>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="form-container">
                        <form id="contactForm" action="formAdmin-process.php" method="POST">
                            <div class="form-group">
                                <h5><label for="name">User name:</label>
                                <input name="name" type="text" value="<?php echo $_SESSION['Nombre'] ?>" class="form-control" disabled required></h5>
                            </div>
                            <div class="form-group">
                                <h5><label for="mail">Email:</label>
                                    <input name="mail" type="email" value="<?php echo $_SESSION['Mail'] ?>" class="form-control" disabled required></h5>
                            </div>
                            <div class="form-group">
                                <h5><label for="message">Comment:</label>
                                <textarea name="message" class="form-control" placeholder="Leave your comment" rows="5" required></textarea></h5>
                              </div>
                            <div class="form-group">
                                <input class="btn btn-info" type="submit" id="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                        <div>
                        </div>
                        <h5 class="h5-contact"><span class="icon-laptop"></span><a class="a-contact" href="index.php"> Home</a></h5>
                        <br>
                        <div>
                            <br>
                        </div>
                        <h5 class="h5-contact"><span class="icon-location"></span> Pan-American Highway (CA-8) in the direction of Santa Ana- Sonsonate take the detour to Sonsonate along the road you will find the signpost to the 'Route of Flowers' to get to Concepcion de Ataco</h5>
                        <br>
                        <br>
                        <h5 class="h5-contact" ><span class="icon-facebook"></span><a class="a-contact" href="https://www.facebook.com/alcaldiamunicipalatacoamca"> Facebook</a></h5>
                    </div>
                </div>
                <hr>
            </section>
            <section>
                <h2>Comments:</h2>
                <div class="row" style="height:70vh; overflow-y:scroll;overflow-x:hidden;width:95%">
                        <?php
                        for($i=0;$i<$rows[0]['rows'];$i++){
                            echo '
                            <div class="col-md-12">
                                <div class="comment-container">
                                    <div class="comment-container-header">
                                        <p>'.$comentarios[$i]['Nombre'].'</p>
                                        <p style="font-size:0.6em;float:left">'.$comentarios[$i]['Correo'].'</p>
                                        <a href="eliminarComentario.php?idComentario='.$comentarios[$i]["idComentario"].'" style="float:right;color:red"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        <div style="display:block;clear:both"></div>
                                    </div>
                                    <div class="comment-container-body">
                                        <p>"'.$comentarios[$i]['Comentario'].'"</p>
                                    </div>
                                    <div class="comment-container-footer">
                                        <p>'.$comentarios[$i]['Fecha'].'</p>
                                    </div>
                                </div>
                            </div>';

                        }
                        ?>
                </div>
            </section>
            </div>

    <footer>
        <?php
          include '../../html/Topscroller-dark.html';
          include '../../html/footer.html';
        ?>
    </footer>
</body>
</html>
