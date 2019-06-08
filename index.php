<?php
	include_once "header.html";
?>

<body class="body">
	<nav id="form">
		<form method="post" action="control/controler.php?action=enviarFonte">
			<p>
				<label for="fonte">Origem</label>
				<select class="select" name="fonte">
					<option>Python</option>
					<option>Java</option>
					<option>Kotlin</option>
				</select>

				<label for="destino">Destino</label>
				<select class="select" name="destino">
					<option>Python</option>
					<option>Java</option>
					<option>Kotlin</option>
				</select>
			</p>
			<p>
				<textarea class="text" placeholder="Código em C..."></textarea>
				<textarea class="text" placeholder="Código na linguagem de destino..."></textarea>
			</p>

			<p>
				<input type="button" name="limpar" value="Limpar" class="button">
				<input type="submit" name="enviar" value="Enviar" class="button">	
			</p>
		</form>
	</nav>
	
</body>

<?php
	include_once "footer.html";