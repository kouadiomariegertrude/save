<?php include('connexion.php');
	  include('menu.php');
	$msg="";
	if (isset($_POST['btnValider'])){
		$sql= "INSERT INTO villes (nom_villes) VALUES ('".$_POST['nom_villes']."')";$result=mysqli_query($link,$sql);
		if ($result) {
				$msg='<h3 style="color:green">Insertion reussie!</h3>';
				}else{
				$msg=mysqli_error($link);
				die();
		}
	}

	if (isset($_GET['id']))
	{
		$update="SELECT * FROM villes WHERE id=".$_GET['id'];
		$res=mysqli_query($link,$update);
		$dataU=mysqli_fetch_array($res);
	}

if (isset($_GET['sup']))
	{
		$delete="DELETE  FROM villes WHERE id=".$_GET['sup'];
		$res=mysqli_query($link,$delete);
	}
	
?>

<!DOCTYPE html>
<html lang="">
	
			<br>

	


	<br><br><div class="container" style=";height:100%; width: 80%">
		<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" style="background-color: white;">

			<h1 style="color: blue">villes</h1>

			<legend>Formulaire</legend> <span> <?php echo $msg; ?> </span>
			
			<form action="" name="form1" method="Post"> 

				<div class="form-group">
				<label>nom_villes:</label> <br><input type="text" name="nom_villes" class="form-control" required value="<?php if (isset($_GET['id'])) echo $dataU['nom_villes']; ?>">
				<br>
				</div>
			
				

	 			<button type="submit" class="btn btn-success btn-lg btn-block" id="btnValider" value="enregistrer" name="btnValider">Valider</button>
				
			
			</form>
			<br><br>
			</div></div>

			<div><br>
				<table border="2" class="table" style="color:white;">
					<thead>
						<tr>
					 		<th><b>Numero</b></th>
					 		<th><b>nom_villes</b></th>			 		
					 		<th><b>Action</b></th>
				 		</tr>
					</thead>

					<tbody >
							<?php	
							$n=1;
							$list=" SELECT * FROM villes"; 
							$res= mysqli_query($link,$list);
							 while ($data = mysqli_fetch_array($res)){
							?>
							<tr>
								<td><?php echo $n; ?></td>
								<td><?php echo $data['nom_villes']; ?></td>
								<td>
				 	   		<a href="?id=<?php echo $data['id'];?>" class="btn btn-primary" >Modifier</a>
				 	   		<a href="?sup=<?php echo $data['id'];?>" class="btn btn-warning">Supprimer</a>
				 	   	</td>
								
							</tr>
							<?php
								$n++;
							}?>
					</tbody>
				 
			 	</table>
			 	
			 	</div>

			 	<?php 
					if(isset($_POST["submit"]))
						{


						if(isset($_GET['id']))
							{ 

								$sql="UPDATE villes SET 
								nom_villes='".$_POST['nom_villes']."',
								 WHERE id=".$_GET['id'];
							}else
								{
						
									$sql="INSERT INTO villes(nom_villes) 
									VALUES(
											'".$_POST["nom_villes"]."',
			
										)";//die(sql);
								}
						$result=mysqli_query($link,$sql);
						if ($result) {
						echo "<h3 style=color:green>Super! Insertion reussie</h3>";
						# code...
						}else{
						echo "mysql_error()";
						die();
					}

			}
			 ?>


	</div>





	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>