<?php
include_once("seguranca.php");
?>
<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadlocal WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
        <h1 class="text-center">Editar Local</h1>
								
			<form class="fume" method="POST" action="index.php?link=21">
  <div class="form-group">
    <label >Nome</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['nome'] ;?>" required name="nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label >Sala</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['sala'] ;?>"required name="sala" placeholder="Sala">
  </div>

 
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  
  
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=18"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  