<?php include('connexion.php');
	  include('menu.php');

	  
 ?>


<!--?php
	$msg="";
	if (isset($_POST['btnComment'])){
			
		$sql= "INSERT INTO actua (description, id_articles)
		 VALUES ('".$_POST['description']."')";
		$result=mysqli_query($link,$sql);
		if ($result) {
			$msg='Article commenté!';
		}else{
			$msg=mysqli_error($link);
		}
	}
?-->

 <!DOCTYPE html>


	<body>

		<div class="container" style="opacity: 0.85; padding:10px;">
			<div class="row-padding">

				
				<!--// Connexion à la base de données
				// une autre manière de se connecter à la base de données
				/*	try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=db_save;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}

					// On récupère l'article selectionné
					$req = $bdd->prepare('SELECT id, titre, resume, image FROM actualites WHERE id=?');
					$req->execute(array($_GET['actualites']));
					$donnees = $req->fetch();-->

					<?php
							$n=1;
							$list=" SELECT * FROM actualites";

							$res= mysqli_query($link,$list);
						while ($donnees = mysqli_fetch_array($res))
					{?>

				<div class="col-md-12">
					<div class="card jumbotron">
					  <div class="card-body">
					  	<h3 class="text-center" style="color:blue"><!-- htmlspecialchars : permet de proteger les textes -->
							<?php echo ($donnees['titre']); ?>
						</h3><br>
						<div class="text-center">
					  	<img src="upload/<?php echo $donnees['image'];?>"  alt="Image actu" class="img-rounded" height="400px" width="auto"/>
					  	</div><br>

					  	<p class="text-center" style="font-size:15px">	<?php
							// On affiche le contenu de l'article
							// nl2br Elle permet  de convertir les  retours  à la ligne en balises  HTML  <br />
							echo (($donnees['resume']));
							?>
						</p>
					  	
					  </div>
					</div><br><br><br><br><br><br><br><br><br>
				</div>
				<?php
				} // Fin de la boucle des articles
					//$req->closeCursor();
				?>
<br><br><br><br>
				<!--form action="" method="POST" role="form">

					<h2>Commentaires</h2>

					<?php
					 // Fin de la boucle des articles
						$req->closeCursor();
					

						// Récupération des commentaires
						$req = $bdd->prepare('SELECT description FROM commentaires WHERE id_articles = ?');
						$req->execute(array($_GET['articles']));
						while ($donnees = $req->fetch())
						{
					?>

					<p><?php echo nl2br(htmlspecialchars($donnees['description'])); ?></p>

					<?php
						} // Fin de la boucle des commentaires
						$req->closeCursor();
					?>

					<p>
	       				<label for="commenter">Commentez l'article</label><br />
	       				<textarea name="description" id="" rows="3" ></textarea>
	   				</p>
	   				<button name="btnComment" type="submit" class="btn btn-primary">Commenter</button>

   				</form-->
			</div>
		</div>

		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>