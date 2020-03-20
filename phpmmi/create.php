<?php
include ("database.php"); // permet de faire la connexion à la base de données


	if(isset($_POST['btnEnvoyer'])) {
        $title_project = $_POST['title_project']; // récupère le titre du projet qui a été entrée dans le formulaire de modification
		$desc_project = $_POST['desc_project']; // récupère la description du projet qui a été entrée dans le formulaire de modification

		$request = "INSERT INTO works VALUES(NULL,'$title_project','$desc_project')"; //mise à jour des infos dans la base de données
		$exec = $db->query($request);
		header('Location: ./index.php'); // permet de revenir à l'index une fois l'update réalisé
	}

?>

<h1>Ajouter le project</h1><br>

		<form method="post" action="" class="form-group">

			<div>
				<label for="case_create" >Titre du projet</label> :
			</div>
			<input class="form-control" type="text" name="title_project" id="case_NumArt" /></input>
			<br />


			<div>
				<label for="case_title" >Description du projet</label> :
			</div>
			<input class="form-control" type="text" name="desc_project" id="case_create"/></input>
			<br />


			<input class="btn btn-secondary" name="btnEnvoyer" type="submit" value="Envoyer" id="Bouton" />
			<button><a href=" ./index.php">Accueil</a></button>
		</form>
