<?php

	include("bd_conect.php");
	$sql = $pdo->query("SELECT nome FROM chat1");
	foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $key) { ?>
		<div class="message-block">
		<?php
		echo "<h3>".$key->nome."</h3>";?>
		</div>
		<?php
}
?>