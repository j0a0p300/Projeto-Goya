<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/contatos.css">
    <title>ShutApp</title>

    <script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('contatos').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'recupera_contato.php', true);
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
        <div class="cntRecentes">
            <h1 class="frase">Contatos Recentes</h1>
        </div>
    </div>
        
    <div class=main-contant id="scroll">
        <div id="contatos">
           
            
        </div>
		<form class="form" action="index.html">
			<input class="back-button" type="submit" value="Voltar">
		</form>
    </div>
</body>
</html>