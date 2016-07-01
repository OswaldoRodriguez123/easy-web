<?php
   abstract class Conexion {

      public function conectar(){
         $mysqli = new mysqli('localhost','robert7_dance','n3H{J%xPnCF=','robert7_easydance',3306);

         if ($mysqli->connect_errno)
            header('Location: offline.html');

         $mysqli->set_charset('utf8');

         return $mysqli;
      }



   }
   /*
   abstract class Conexion {

      public function conectar(){
         $mysqli = new mysqli('localhost','root','','easydance',3306);

         if ($mysqli->connect_errno)
            header('Location: offline.html');

         $mysqli->set_charset('utf8');

         return $mysqli;
      }



   }*/
?>