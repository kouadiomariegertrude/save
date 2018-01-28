<?php
include('connexion.php');
 include('menu.php'); ?> 
<div class="">


			<!--div class="row"  style="background-image: linear-gradient( rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('img/coz.jpg'); height: 300px;color: white; " >

				<br><div class="card-category">Save the olders</div>

				<div class="card-description">
					<h2>save the olders</h2>
					<p>venez et appreciez</p>
			</div>

				<img class="card-user" src="img/22.jpg" height="165px">
	
			</div-->
			
			<div class="row" style="background-color:orange;border-radius:5px; height: 230px; margin-right: -2px">

				<br><div class="col-md-3" style="margin-left: -5px">	
						<img src="img/donner.png" width="auto" height="200px">		
				</div>

				<div class="col-md-6">
					<marquee direction="left">
	
						<img src="img/ensemble.png" width="auto" height="200px">
						<img src="img/damier.png" width="auto" height="200px">
						<img src="img/buro.png" width="auto" height="200px">
						<img src="img/reunion.png" width="auto" height="200px">
						<img src="img/lire.png" width="auto" height="200px">
						<img src="img/ensemble.png" width="auto" height="200px">
						<img src="img/damier.png" width="auto" height="200px">
						<img src="img/buro.png" width="auto" height="200px">
						<img src="img/reunion.png" width="auto" height="200px">
						<img src="img/lire.png" width="auto" height="200px">
					</marquee>
				</div>

				<div class="col-md-3" style="margin-right: px">	
						<img src="img/3filles.png" width="auto" height="200px">		
				</div>

			
			</div>

			<div class="row" style="background-color: #aa1b4f; height: 35px;">
				<div class="col-md-2"><b style="color: blue;">BIENVENUE A VOUS...!</b></div> 
				<div class="col-md-8"><marquee direction="left" style="color: white;">l'ONG Save The Olders vous dit &nbsp &nbsp Bienvenue!&nbsp &nbsp Welcome!&nbsp &nbsp Akwaba!&nbsp &nbsp Dansé!&nbsp &nbsp Fôtamanan!  </marquee></div>			
			</div>
			
           </div> 
    	<div class="row" style="background-color: #aa1b4f; ">

        <div class="col-md-3" style="float: right;border:5px solid orange; border-radius: 40px; padding: 15px 10px;height: 500px; margin-right: 5px;background-color: #f1eeea;"  >
        	<h2 class="text-danger ">Nos partenaires</h2>
 				<ol>
 					<li>Ong Le Flambeau</li>
 					<li>Mutuelle des retraités de Grand-Lahou</li>
 					<li>Les volontaires, bénévoles et particuliers</li>
                    <li>Association s’occupant des personnes en milieu carcéral</li>
 				</ol>
        	<h2 class="text-danger">Notre mission</h2>
        		<ul>
        			<li>Créer un réseau de proximité</li>
        			<li>Eliminer la solitude et la monotonie quotidienne des personnes âgées</li><br>
        			<li>Inciter les jeunes à changer de regard sur les personnes âgées</li><br>
        			<li>Faire comprendre l’importance de l’ONG aux personnes âgées</li><br>
        		</ul>
        </div>

        <div class="col-md-9" style="float: left;border:5px solid orange;margin:2px 0px ;padding: 5px 10px 5px 5px;height: 500px;width: 870px; border-radius: 40px; background-color: #f1eeea; margin-left: -5px;"">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 col-xs-12">
				
				

				<div class="row">

				<h2 class="text-primary ">Actualites</h2>

				
				<!-- Connexion à la base de données
				// une autre manière de se connecter à la base de données
					/*try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=db_save;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}

					// On récupère les 5 derniers articles
					$req = $bdd->query('SELECT id, titre, resume, image FROM actualites ORDER BY id DESC LIMIT 0, 6');
					while ($donnees = $req->fetch())-->
					<?php
							$n=1;
							$list=" SELECT * FROM actualites ORDER BY id DESC LIMIT 0, 3";
					

							$res= mysqli_query($link,$list);
						while ($donnees = mysqli_fetch_array($res))
					{?>


				
					
		<div class="row" >
			<div class="col-md-4" style="text-align: center" >
				<img src="upload/<?php echo $donnees['image'];?>" width="170px" height="110px" alt="Mon Image" style="border:2px solid orange; margin: 0px 10px  10px 0px;" />
				
	
				<b><?php echo ($donnees['titre']); ?></b>
						
				<p style="font-size:15px">	<?php
							// On affiche le contenu de l'article
							// nl2br Elle permet  de convertir les  retours  à la ligne en balises  HTML  <br />
							echo substr($donnees['resume'], 0, 30);
							?>
				</p>

				<a href="voir_plus.php?actualites=<?php echo $donnees['id']; ?>" class="btn btn-lg btn-primary">voir plus</a>

		</div>

					 
				
				
				<?php
				} // Fin de la boucle des articles
				?>
<br>
			</div>
			</div>
			</div>
				
		</div></div>
	</div>
	</div></div>

	
		<?php include('footer.php'); ?>
