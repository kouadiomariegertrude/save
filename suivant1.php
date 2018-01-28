  <?php 
	include('connexion.php'); 
 	 
 ?>

 <!DOCTYPE html>
<?php include('menu.php'); ?>		
	<div class="container" style="">

		<div class="col-md-4"> 
				</div>
				<div class="col-md-4" style="color: white; text-align:left;"><br><br><br>

					<form action="" method="POST" role="form">
						<legend style="color: white;">Inscription- Etape 2</legend>

							<div class="form-group">
							<label><h4>De quel genre êtes vous?</h4></label><br>
							<div class="radio">
								<label> <input type="radio" name="genre" value="homme">Homme</label><br>
								<label>	<input type="radio" name="genre" value="femme">Femme</label>
							</div><br>
					
							<div class="form-group">
							<label for=""><h4>Dans quelle ville etes vous?</h4></label>
							<select name="villes" class="form-control">
							<?php
							//recupere toutes les categories dans la bd
							$sqlvilles="SELECT * FROM villes";
							//execute la requete et on la stock dans $repvilles
							$repvilles=mysqli_query($link,$sqlvilles);
							//mysqli_fetch_array = permet de tran sformer le resultat $repvilles en variable de type tableau $datacat
							// la boucle while nous permet de parcourir le tableau $datacat et de recuperer les valeurs de chaques elements du tableau $datacat
							while ($datavilles=mysqli_fetch_array($repvilles)) {
								?>
								<option value="<?php echo $datavilles['id'];?>">
								<?php echo $datavilles['nom_villes'];?>
									
								</option>

								<?php
							}
							?>
										
							</select>
						</div>


						<div class="form-group">
							<label for=""><h4>Chosissez une offre selon votre besoin?</h4></label>
							<select name="offres" class="form-control">
							<?php
							//recupere toutes les categories dans la bd
							$sqloffres="SELECT * FROM offres";
							//execute la requete et on la stock dans $repoffres
							$repoffres=mysqli_query($link,$sqloffres);
							//mysqli_fetch_array = permet de tran sformer le resultat $repoffres en variable de type tableau $datacat
							// la boucle while nous permet de parcourir le tableau $datacat et de recuperer les valeurs de chaques elements du tableau $datacat
							while ($dataoffres=mysqli_fetch_array($repoffres)) {
								?>
								<option value="<?php echo $dataoffres['id'];?>">
								<?php echo $dataoffres['libelle'];?>
									
								</option>

								<?php
							}
							?>
										
							</select>
						</div><br>

						<a href="inscription.php" name="btnValider" class="btn btn-primary" "><< Precedent</a>
					
						<a href="users.php" name="btnValider" class="btn btn-primary" style="float: right;">Suivant >></a><br><br> 

					</div>
					<div class="col-md-4"></div>
					</div>

	</div>








<?php include('footer.php'); ?>
