<?php 
	include('connexion.php'); 
 	 
 ?>

 <!DOCTYPE html>
<?php include('menu.php'); ?>		
	<div class="container" style="">

		<br><br><br><div class="row">
					<div class=" col-md-1 col-offset-1"></div>
					<div class="col-md-10">
						<img src="img/don.png" width="100%" height="300px">
					    <div style="background-color: white; "> <h3>&nbsp &nbsp &nbsp Notre ONG rencontre plusieurs difficultés telles que le manque de ressources <br>
                        &nbsp financières humaines et matérielles, le manque de visibilité et d’espace pour 
                        accueillir<br> &nbsp ces personnes âgées dont elle s’occupe. Merci de faire un don</h3></div>
                        	<form action="" method="POST" role="form" style="color: white ;">
							<legend style="color: white ;"><h3>DONS</h3></legend>
					
							<div class="form-group">
							<label for="">NOM_DONATEUR</label>
							<input type="text" name="nom" class="form-control" id="" placeholder="Entrer le nom">
						    </div>
						    <div class="form-group">
							<label for="">PRENOMS_DONATEUR</label>
							<input type="text" name="nom" class="form-control" id="" placeholder="Entrer le prenom">
							</div>
							<div class="form-group">
							<label for="">TEL_DONATEUR</label>
							<input type="text" name="nom" class="form-control" id="" placeholder="">
							</div>
							<label for="">TYPE_DONS</label><br>
							<div class="checkbox">
								<label> <input type="checkbox" name="">ESPECES</label><br>
								<label>	<input type="checkbox" name="">VIVRE</label><br>
								<label><input type="checkbox" name="">CHEQUE</label><br>
								<label><input type="checkbox" name="">BENEVOLATS</label><br>
								<label><input type="checkbox" name="">MEDICAMENTS</label><br>
								<br>
							</div>
						<a href="merci.php" type="button" class="btn btn-success"   value="">ENREGISTRER</a>
							  

					</div>
					<div class="col-md-1 col-offset-1"></div>
					</div>

	</div>








<?php include('footer.php'); ?>
