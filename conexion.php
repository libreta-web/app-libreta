<?php  
function Conectarse()  
{  
   if (!($link=mysqli_connect("db4free.net","libretaadmin","app-libreta")))  
   {  
      echo "Error conectando a la base de datos.";  
      exit();  
   }  
   if (!mysqli_select_db($link,"bdlibreta") ) 
   {  
      echo "Error seleccionando la base de datos.";  
      exit();  
   }  
   return $link;  
}