<?php
 try{
     $conecta=mysqli_connect("localhost","dsdan7","","book");
                             //servidor   /user  senha        banco
                             
      $id=$_GET['id'];
      
      $querry="DELETE FROM livro WHERE cd_livro = $id ";
      
      mysqli_query($conecta,$querry);
      echo "DELETADO COM SUCESSO";
     }catch(Exception $e){
             echo "Erro ao DELETAR".$e; 
     }


?>