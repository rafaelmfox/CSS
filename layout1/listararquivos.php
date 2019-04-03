
<center>
	<img src="../logo.jpg" width="300" height="100" /><br/>
	<form action="../index.php" method="POST">
		<input type="submit" value="Sair">
	</form>

<?php
$login = $_POST['user'];
$senha = $_POST['pass'];

  if($login == "" && $senha == ""){
      $diretorio = getcwd(); 
      //$ponteiro  = opendir($diretorio);
      $ponteiro  = opendir("file/");
      while ($nome_itens = readdir($ponteiro)) 
      {
          $itens[] = $nome_itens;
      }
      sort($itens);
      foreach ($itens as $listar) 
      {
          if ($listar!="." && $listar!="..")
          { 
            if (is_dir($listar)) 
            { 
                $pastas[]=$listar; 
			}   
            else
            { 
	           $arquivos[]=$listar;
			}
          }
		}
      
 
      if ($arquivos != "") 
      {
          foreach($arquivos as $listar)
          {
              if($listar != "validar.php")
              {
                  print " <a href='$listar'>$listar</a><br>";
              }
					
          }
			  
      }
    

	
  }else{}

	
?>
    </center>