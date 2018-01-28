<?php include('connexion.php');
	  
	$msg="";
	if (isset($_POST['btnValider'])){

		if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) {
			$sql= "INSERT INTO actualites (titre, resume, image) 
			VALUES (
					'".mysqli_real_escape_string($link,$_POST['titre'])."',
					 '".mysqli_real_escape_string($link,$_POST['resume'])."',
					 '".($_FILES['image']['name'])."')";
			if (isset($_GET['id']))
				{
					$sql="UPDATE actualites SET 
					titre='".mysqli_real_escape_string($_POST['titre'])."', 
					resume='".mysqli_real_escape_string($_POST['resume'])."', 
					image='".($_FILES['image']['name'])."' WHERE id=".$_GET['id']; 
	 			} 
			$result=mysqli_query($link ,$sql);
			if ($result) {
				$msg='<h3 style="color:green">Insertion reussie!</h3>';
			}else{
				$msg=mysqli_error($link);
			}
		}
		
}
	if (isset($_GET['id'])){
	$update="SELECT * FROM actualites WHERE id=".$_GET['id'];
	$res=mysqli_query($link, $update);
	$dataU=mysqli_fetch_array($res);
	}
	if (isset($_GET['sup'])){
	$delete="DELETE FROM actualites WHERE id=".$_GET['sup'];
	$res=mysqli_query($link, $delete);
	}
?>
 		
<?php include('menu.php');?>
			

		<br><br><div class="container">

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" style="background-color: white;">

					<form action="" method="POST" role="form" enctype="multipart/form-data">
						<h1 style="color: blue">actu</h1>
			<legend>Formulaire</legend> <span> <?php echo $msg; ?> </span>
						<span> <?php echo $msg; ?> </span>
					
						<div class="form-group">
							<label for="">Titre</label>
							<input name="titre" type="text" class="form-control" id="" placeholder="Entrer le titre" required value="<?php if (isset ($_GET['id'])) echo $dataU['titre']; ?>">
						</div>

						<div class="form-group">
							<label for="">resume</label>
							<textarea name="resume" type="text" class="form-control textarea" id="" required placeholder="resume de l'article"></textarea>
						</div>
						<div class="form-group">
							<label for="">image</label>
							<input name="image" type="file" class="form-control" id="" placeholder=" Choisissez une image" required value="<?php if (isset ($_GET['id'])) echo $dataU['image']['name']; ?>"><br>

							<div style="text-align: center;">
						<button type="submit" class="btn btn-success btn-lg btn-block" id="btnValider" value="enregistrer" name="btnValider">Valider</button>
						</div>
					</form>
				</div>
			</div>

			<div class="row"> 
				<div class="col-md-2"></div>
				<div class="col-md-8" style="background-color: white;">
				</div>
				<table class="table" border="2" style="color:white;">
					<thead>
						<br><br><br><br><br><tr>
							<th>Numero</th>
							<th>Titre</th>
							<th>Resumé</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							$list="SELECT * FROM actualites";

							$res= mysqli_query($link,$list);
	while ($data = mysqli_fetch_array($res))
		{						
							
						 ?>
						<tr>
							<td> <?php echo $n; ?> </td>
							<td><?php echo $data['titre']; ?></td>
							<td><?php echo substr($data['resume'], 0, 50) ; ?>...</td>
							<td><img src="upload/<?php echo $data['image'];  ?>" width="70px" height="50px" alt=""></td>
							
							<td>
								<a href="?id=<?php echo $data['id']; ?>" class="btn btn-primary">Modifier</a><br><br>
								<a href="?sup=<?php echo $data['id']; ?>" class="btn btn-warning">Supprimer</a>
							</td>
						</tr>
						<?php $n++;
						 } ?>
					</tbody>
				</table>
				</div>
			</div>

		</div>
		

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/control.js"></script>
	</body>
</html>