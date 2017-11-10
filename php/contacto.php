<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../html/head.html';
    ?>        
    <title>Contacto</title>
    <style type="text/css">
        a:link, a:visited, a:active {
            color: gray;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <header>
    <?php
       include '../html/header.html';
    ?>
    </header>
    <section>
    <div class="container">
        <br>
        <h1 style="display: inline-block">Contacto</h1><br>
        <h6 class="mt-0 pt-0">Te invitamos a contactarnos, te responderemos a la brevedad.</h6>
        <hr color="black" size=1>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <form id="contactForm" action="form-process.php" method="POST">
                    <div class="form-group">
                        <h5><label for="name">Nombre:</label>
                        <input name="name" type="text" placeholder="Escribe tu nombre" class="form-control" required></h5>
                    </div>
                    <div class="form-group">
                        <h5><label for="mail">Email:</label>
                            <input name="mail" type="email" placeholder="Escribe tu email" class="form-control" required></h5>
                    </div>
                    <div class="form-group">
                        <h5><label for="message">Comentario:</label>
                        <textarea name="message" class="form-control" placeholder="Escribe tu comentario" rows="5" required></textarea></h5>
                      </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit" id="submit">Enviar</button>
                    </div>
                </form>  
            </div>
            <div class="col-md-6">
                    <div>
                    </div>
                    <h5 style="color: gray; text-align: justify;"><span class="icon-laptop"></span><a href="index.php"> Inicio</a></h5>
                    <br>
                    <div>
                        <br>
                    </div>
                    <h5 style="color: gray; text-align: justify;"><span class="icon-location"></span> Carretera Panamericana (CA-8) en dirección a Santa Ana- Sonsonate tomar el desvío hacia Sonsonate a lo largo del camino encontrará la señalización a la Ruta de las Flores para llegar a Concepción de Ataco</h5>
                    <br>
                    <br>
                    <h5 style="color: gray; text-align: justify;"><span class="icon-facebook"></span><a href="https://www.facebook.com/alcaldiamunicipalatacoamca"> Facebook</a></h5>
                </div>
            </div>
        </div>
    </div> 
    </section>
    <footer>
        <?php
          include '../html/Topscroller-dark.html';
        ?>
    </footer>
    <!--Modals-->
</body>
</html>