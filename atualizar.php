<?php
 try{
     $conecta=mysqli_connect("localhost","dsdan7","","book");
                             //servidor   /user  senha        banco
                             
      $titulo=$_POST['titulo'];
      $autor=$_POST['autor'];
      $ano=$_POST['ano'];
      $isbn=$_POST['isbn'];
      $cod=$_POST['cod'];
      
      $querry="UPDATE  book.livro SET
        nm_titulo='$titulo',
        nm_autor = '$autor',
        nr_ano =  '$ano',
        nr_ibsn =  '$isbn' WHERE  livro.cd_livro ='$cod';";
      
      mysqli_query($conecta,$querry);
      echo "ATUALIZADO COM SUCESSO";
     }catch(Exception $e){
             echo "Erro ao cadastrar".$e; 
     }


?>
