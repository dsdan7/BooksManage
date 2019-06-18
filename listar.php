<?php
 try{
     $conecta=mysqli_connect("localhost","dsdan7","","book");
                             //servidor   /user  senha        banco
                             
   
      $query="select * from livro order by nm_titulo asc;";
      
      
      $resultado=mysqli_query($conecta,$query);
      
      $registro=array(
          'livros'=>array()
      );
          
          $i=0;
          while($linha=mysqli_fetch_assoc($resultado)){
              $registro['livros'][$i]=array(
                  
                  'titulo'=>$linha['nm_titulo'],
                  'autor'=>$linha['nm_autor'],
                  'ano'=>$linha['nr_ano'],
                  'ibsn'=>$linha['nr_ibsn'],
                  );
                  $i++;
              }
      echo json_encode($registro);
     }catch(Exception $e){
             echo "Erro ao cadastrar".$e; 
     }



