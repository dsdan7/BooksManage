<?php
 try{
     $conecta=mysqli_connect("localhost","dsdan7","","book");
                             //servidor   /user  senha        banco
                             
      $id=$_GET['id'];
      $query="select * from livro where nr_ibsn=$id";
      
      
      $resultado=mysqli_query($conecta,$query);
      
 
          
          $i=0;
          while($linha=mysqli_fetch_assoc($resultado)){
              $registro=array(
                  'livros'=>array(
                  'titulo'=>$linha['nm_titulo'],
                  'autor'=>$linha['nm_autor'],
                  'ano'=>$linha['nr_ano'],
                  'isbn'=>$linha['nr_ibsn'],
                  )
             );
                  $i++;
              }
      echo json_encode($registro);
     }catch(Exception $e){
             echo "Erro ao cadastrar".$e; 
     }


?>