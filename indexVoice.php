<?php
/**
 * Created by PhpStorm.
 * User: sistemas
 * Date: 11/06/2018
 * Time: 16:11
 */<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Documentar Asesor</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!--Link para fa font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!---Hacer la pagina ajustable-->
    <link rel="stylesheet" media="screen" type="t
       <table width="100">
       <div align="center"> <h1>Documentar Recepción</h1></div><br>
       <div class="container-fluid" align="center">
           <ol class="breadcrumb" style="color:#8A9CAE; background:black; ">
               <br><i class="fas fa-camera  fa-9x"></i><br>
               </li>
               <div style="color:#8A9CAE;">
               <h3>Da click en elegir archivos para poder hacer la toma de fotografías.</h3>
               </div>
           </ol>
           <hr>
        </table>
           if (isset ($_POST[&quot;query&quot;]))
            {
                $audioTag = &quot;&lt;audio autoplay='autoplay' controls='controls' width='350'&gt;\n&quot;;
                $audioTag .= &quot;&lt;p&gt;Navegador no soportado. Intenta con Safari o Chrome. &lt;/p&gt;\n&quot;;
                $audioTag .= &quot;&lt;source src='http://translate.google.com/translate_tts?tl=es&amp;q={$_POST[&quot;query&quot;]}' /&gt;\n&quot;;
                $audioTag .= &quot;&lt;/audio&gt;&quot;;

                echo $audioTag;
                echo &quot;&lt;br /&gt;&lt;a href='index.php' title='Volver' alt=''&gt;Volver&lt;/a&gt;&quot;;

            } else
            {
                $formTag = &quot;&lt;form name='inputForm' method='post' class='formulario' action='index.php'&gt;\n&quot;;
                $formTag .= &quot;&lt;input name='query' type='text' size='40' placeholder='ingresa tu texto a traducir y dale enter' onUnfocus='send()' onClick='this.select()' class='search' /&gt;\n&quot;;
                $formTag .= &quot;&lt;input type='submit' value='Submit' class='submit' /&gt;&quot;;
                $formTag .= &quot;&lt;/form&gt;&quot;;

                echo $formTag;
            }
        ?>
    </DIV>
    </div>
</html>