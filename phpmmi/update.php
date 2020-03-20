<?php
include ("database.php"); // permet de faire la connexion à la base de données

	if (isset($_GET['edit']) AND !empty($_GET['edit'])) { //permet de tester si l'envoi par l'index est bien "rempli" et non vide ou null
	  $edit_id = ($_GET['edit']); // contient l'id renvoyer par le bouton dans index.php
	  $edit_article = $db->prepare('SELECT * FROM works WHERE id = ?'); // contient une requête préparer pour permettre de récupérer les informations contenu dans la base de données grâce à l'ID
	  $edit_article->execute(array($edit_id)); //permet de trouver le bon projet

	  if ($edit_article->rowCount() == 1) { //permet de tester pour voir si il trouve bien un seul article et l'afficher sinon msg d'erreur
		$edit_article = $edit_article->fetch();
	  }
	  else
	  {
		die('Erreur: l\'article concerné n\'existe pas !');
	  }
	}

	if(isset($_POST['btnEnvoyer'])) {
        $title_project = $_POST['title_project']; // récupère le titre du projet qui a été entrée dans le formulaire de modification
		$desc_project = $_POST['desc_project']; // récupère la description du projet qui a été entrée dans le formulaire de modification

		$update = $db->prepare('UPDATE works SET title = ?, description= ?  WHERE id = ?'); //mise à jour des infos dans la base de données
		$update->execute(array($title_project, $desc_project, $edit_id));
		header('Location: ./index.php'); // permet de revenir à l'index une fois l'update réalisé
	}

?>

<h1>Modifier le project</h1><br>

		<form method="post" action="" class="form-group"> <!--  action = page contenant du php pour récupérer les informations -->
			
			<div>
				<label for="case_create" >Titre du projet</label> :
			</div>
			<input class="form-control" type="text" name="title_project" id="case_NumArt" value="<?= $edit_article['title'] ?>"/></input> <!-- value permet d'afficher les anciennes infos -->
			<br />


			<div>
				<label for="case_title" >Description du projet</label> :
			</div>
			<input class="form-control" type="text" name="desc_project" id="case_create" value="<?= $edit_article['description'] ?>"/></input>
			<br />


			<input class="btn btn-secondary" name="btnEnvoyer" type="submit" value="Envoyer" id="Bouton" />
			<button><a href=" ./index.php">Accueil</a></button>
		</form>
