<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>ShutApp</title>

    <script type="text/javascript">
		if(window.history.replaceState){
			window.history.replaceState(null, null, window.location.href);
		}
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);

	
      document.addEventListener("DOMContentLoaded", function (event) {
            document.getElementById('scroll').scrollTop = document.getElementById('scroll').scrollHeight
        });
        
    </script>
</head>

<body>
    <div class="logo">
        <img src="img/logo.png">
    </div>
    <div class=main-contant id="scroll">
        <div id="chat">
           
            
        </div>
        <form class="form" method="post" action="mensagens.php">
            <input class="name" type="text" name="nome" placeholder="Insira o seu nome: " require>
            <input class="message" type="text" name="mensagem" placeholder="Mensagem: " require>
            <input class="send-button" type="submit" value="Enviar">
        </form>
		<form class="form" action="index.html">
			<input class="back-button" type="submit" value="Voltar">
		</form>
    </div>
</body>
<?php
	include("bd_conect.php");
			
	if(isset($_POST['nome']) and isset($_POST['mensagem']))
	{
		$nome = $_POST['nome'];
		$mensagem = $_POST['mensagem'];
		$sql = $pdo->query("INSERT INTO chat1 SET nome= '$nome', mensagem= '$mensagem'");
	}	


?>
</html>