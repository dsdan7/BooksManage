<?php
 try{
     $conecta=mysqli_connect("localhost","dsdan7","","book");
                             //servidor   /user  senha        banco
                             
      $titulo=$_POST['titulo'];
      $autor=$_POST['autor'];
      $ano=$_POST['ano'];
      $isbn=$_POST['isbn'];
      
      $querry="insert into livro values('$titulo','$autor','$ano','$isbn');";
      
      mysqli_query($conecta,$querry);
      echo "CADASTRADO COM SUCESSO";
     }catch(Exception $e){
             echo "Erro ao cadastrar".$e; 
     }


?>
