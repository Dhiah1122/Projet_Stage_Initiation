<?php

$con = mysql_connect("localhost","root",'');
if($con) {

mysql_select_db("login");  

}
	if(isset($_POST["log"])) {
	
	$query = "select * from login where numero = $_POST[numero] && password =  $_POST[password]"; 
	$result = mysql_query($query); 
	$nvnumero = "";
	$nvpassword="";
	$query = "update login set numero =$nvnumero , password=$nvpassword";
	$result1 = MySQL_query($query);
	if(result1) {echo "<h1> mercie pour la changement de votre information</h1>";}
	else {
	echo "erreur";
		}
	
	echo "<script>
myInput.onkeyup = function() {
// Validation de mot de passe
var num ="1122";
if(myInput.value.match(num)) { 
letter.classList.remove("invalid");
letter.classList.add("valid");
} else {
letter.classList.remove("valid");
letter.classList.add("invalid");
}


}

</script>";


}
?> 

<html>
<head>
<style>
/* Style tous les champs de saisie */
input {
 
    width: 100%;
	 padding: 12px;
    border: 1px solid #ccc; 
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}

/* Style le bouton de validation */
input[type=submit] {
    background-color: #2250a5;
    color: white;
}

/* Style du conteneur pour les "inputs" */
.container {
    background-color: #f1f1f1;
    position: relative;
    left: 25%;
    padding: 20px;
    width: 50%;
    top:100px;

}

/* La boîte de message s'affiche lorsque l'utilisateur clique sur le champ du mot de passe */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
    width: 50%;
    left: 25%;
    top:100px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Ajouter une couleur de texte verte et une coche lorsque les exigences sont correctes */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Ajouter une couleur de texte rouge et un "x" lorsque les exigences sont fausses */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
</style>
</head>
<body>

<center><img width=300 height=90 src="fbXyxc1.png"></center>
<hr width=1300>
<br>
	<center><b> Autorisation d'utiliser un véhicule </b></center>
	<br>
	<hr>
	<br><br>
	
<div class="container"> 
  <form action="voiture2.html">
    <label for="usrname">Numéro</label> 
	<!-- L'élément HTML <label> représente une légende pour un objet d'une interface utilisateur
	Il peut être associé à un contrôle en utilisant l'attribut for. -->
    <input type="text" id="usrname" name="usrname" required>

    <label for="psw">Mot de passe </label>
    <input type="password" id="psw" name="psw" title="Veuillez saisir votre mot de passe" required>
    
    <input type="submit" value="Valider">
  </form>
</div>

<div id="message">
  <h3>Erreur de mot de passe:</h3>
<p id="letter" class="invalid">Veuillez <b>vérifier</b> votre mot de passe</p> 
</div>
				
<script>
var myInput = document.getElementById("psw");

// Lorsque l'utilisateur clique sur le champ du mot de passe, affichez la boîte de message
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// Lorsque l'utilisateur clique en dehors du champ du mot de passe, masquez la boîte de message
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// Lorsque l'utilisateur commence à taper quelque chose dans le champ du mot de passe
myInput.onkeyup = function() {
  // Validation de mot de passe
  var num ="1122";
  if(myInput.value.match(num)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  

}
</script>
</body>
</html>