<?php

	include("bd_conect.php");
	$sql = $pdo->query("SELECT * FROM chat1");
	foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $key) { ?>
		<div class="message-block">
		<?php
		echo "<h3>".$key->nome."</h3>";
		echo "<p>".$key->mensagem."</p>";?>
		</div>
		<?php
}
?>