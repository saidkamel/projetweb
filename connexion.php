<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include "core/User.php";
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$user=new User($_POST['loginn'],$_POST['pwd'],$conn);
$u=$user->Logedin($conn,$_POST['loginn'],$_POST['pwd']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['loginn']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['user_name']==$_POST['loginn'] && $t['user_pass']==$_POST['pwd'] && $t['role']=="Admin"){
	
		session_start();
		$_SESSION['l']=$_POST['loginn'];
		$_SESSION['p']=$_POST['pwd'];
		$_SESSION['r']=$t['role'];
		
		header("location:Fournisseur.php");
		
		}
		else
			{
				echo '<body onLoad="alert(\'Accée interdit au clients...\')">'; 
				echo '<meta http-equiv="refresh" content="0;URL=login.html">'; 
			
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=login.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="login.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>