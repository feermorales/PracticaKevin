<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Noticias</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
        img{
    height: 500px;

   }
    body{ background: url(images/Fondo.jpeg); background-repeat: no-repeat; 
   background-size: 100% 100%; background-attachment: fixed; }﻿  
   
    
 </style> 
</head>
<center>
<body style="background-color: gold">
  <div class="container-sm">
		    	
           <?php
            // Requerimiento del archivo PHP   
                require 'simple_html_dom.php';
            // Pagina web solicitada
                $html = file_get_html('http://wradio.com.mx/seccion/nacional/');
            // Tomando titulo de la pagina web 
                $titulo = $html->find('div[class=top-main-header]',0);
            // Mostrando tiulo
                echo $titulo->find('h1[class=headline]',0);
                echo "</div>";
            // Busca todos los links usados en la pagina
                foreach($html->find('a') as $element) {
            //Muestra el valor del atributo href de cada link
                echo "<p>".$element->href."</p>";  }
                                                           
            // Ubicando el apartado noticias de la pagina web    
                $Noticias = $html->find('div[class=container]');

                foreach ($Noticias as $Noti) {
        
            // Tomando las noticias que contiene este apartado
                        $reporte = $Noti->find('ul[class=items layout-automatic-a ]',0);
                        
            // Mostrando Noticias          
                        echo $reporte;

                echo "</div>";
                }
           ?>

		  </div>
    </center>
  </body>
</html>
	


