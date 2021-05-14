<?php
session_start();
?>
		
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		

	 <meta name="viewport" content="user-scalable=no, initial-scale=1, width=device-width">
	<title>HIPPOTEC </title>
	<link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/ionic.css">
	<link rel="stylesheet" type="text/css" href="../css/mobileui/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
	
	</head>
		<body style="background-color: PaleTurquoise">
	<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
	<div class="container">
		<div class="app">
			
			<ul class="menubar">
				<li><a class="active"  href="javascript:void(0)" onclick="openNav()"><i class="fas fa-bars" style="color: Teal;"></i></a></li>
				<li><a href="index.php"><i class="fas fa-h-square"></i></li>
			</ul>
			  <!-- Menu Lateral--> 
	    <div class="sidenav" id="sidenav">
				<div class="sidenavshape"></div>
				<div class="profile">
					<img src="../img/avatar.jpg" alt="avatar">
					<h3 style="color:white;">Menu</h3>
		 </div>
		     <!-- Itens do Menu Lateral  --> 
		 <div class="clearfix"></div>
				<ul>
					<li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a></li>
					<li ><a href="profile.php"> PERFIL </a></li>
					<li><a href="#"> DOENÇAS </a></li>
					<li><a href="sobre.php"> SOBRE  </a></li>
					<li><a href="index.php"> INICIO  </a></li>
                   	<li><a href="index.php" onclick="javascript:window.close()"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
				</ul> 
		</div>
		
		<div class="news">
		<div class="list">
			<input type="hidden" id="id" value=""/>
			<h2>Login Hippotec</h2>
			<form method="POST" action="valida.php">
			<label>Usuário</label>
			<input type="text" class="item" name="email" placeholder="Digite o seu email"><br><br>
			
			<label>Senha</label>
			<input type="password" class="item"  name="senha" placeholder="Digite a sua senha"><br><br>
			
			<input type="submit" class="button button-block button-positive" name="btnLogin" value="Acessar">
		
		</form>
		</div>
		</div>
		<div class="bar bar-footer">
			<button class="button button-clear pull-right">@dieguesmosken - Hippotec 2020 &COPY;</button>
		</div></div>
	</div></div>
						
			
		<script src="js/jquery.min.js"></script>
		<script>
		 function openNav()
		 {
		 document.getElementById("sidenav").style.width="300px";
		 }
		 function closeNav()
		 {
		 document.getElementById("sidenav").style.width="0";
		 }
		 </script>


</body>
					
</html>