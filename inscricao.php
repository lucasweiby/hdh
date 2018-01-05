<!DOCTYPE html>
<html>
<?php include 'assets/head.php' ?>
<body>
	<main>
		<?php include 'assets/nav.php' ?>

		<section id="contact">
			<div class="container">
				<div class="row hide-on-small-only">
					<div class="col lg12 m12">
						<div class="text-contact" style="text-align: center;">
							<h1 class="um">Increva-se para a nossa 3ª edição!*</h1>
							<p class="dois">*O atual período de inscrição é apenas para GRUPOS COVER que participaram da segunda edição.</p>
						</div>
					</div>
					<div class="col lg12 m12">
						<form id="form-contact" class="margem col lg12 m12 s12 insc" action="send_insc.php" name="form_contato" method="post">
							<div class="row">
								<div class="input-field col lg6 m6 s6">
									<input id="last_name" name="last_name" type="text" class="validate" required="required">
									<label for="last_name">Nome do grupo ou participante</label>
								</div>
								<div class="input-field col lg6 m6 s6">
									<select required="required">
										<option value="" disabled selected>Escolha uma categoria</option>
										<option value="1">Pocket dance</option>
										<option value="2">Dance cover</option>
										<option value="3">Canto</option>
										<option value="4">Estilo livre</option>
									</select>
									<label>Categoria da competição</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col lg10 m10 s10">
									<input id="email" name="email" type="email" class="validate" required="required">
									<label for="email" data-error="E-mail inválido" data-success="Este e-mail é válido">E-mail do representante</label>
								</div>
								<div class="input-field col lg2 m2 s2">
									<input id="integ" name="integ" type="text" class="validate" required="required">
									<label for="integ">Quant. de integrantes</label>
								</div>
							</div>
							<h3 class="integrantes">Integrantes</h3>
							<div class="row">
								<div class="input-field col s12">
									<textarea id="textarea1" name="message" class="materialize-textarea" style="font-weight: bold"></textarea>
									<label for="textarea1">Escreva aqui o nome de todos os integrante + Nº documento OFICIAL COM FOTO</label>
								</div>
							</div>
							<h3 class="integrantes">ARQUIVOS DA INSCRIÇÃO</h3>
							<div class="row">
								<div class="col s4">
									<div class="file-field input-field">
										<div class="btn file">
											<span><i class="material-icons">group</i></span>
											<input type="file">
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text" placeholder="Logo do grupo (FUNDO TRANSPARENTE)">
										</div>
									</div>
								</div>
								<div class="col s4">
									<div class="file-field input-field">
										<div class="btn file">
											<span><i class="material-icons">audiotrack</i></span>
											<input type="file" required="required">
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text" placeholder="Arquivo de áudio da apresentação">
										</div>
									</div>
								</div>
								<div class="col s4">
									<div class="file-field input-field">
										<div class="btn file">
											<span><i class="material-icons">portrait</i></span>
											<input type="file">
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text" placeholder="Imagem do figurino de referência">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="link" name="link" type="text" class="validate" required="required">
									<label for="link">Link do vídeo referência que mostre a coreografia a ser apresentada</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="coreografo" name="coreografo" type="text" class="validate">
									<label for="coreografo">Nome do coreógrafo (APENAS A CATEGORIA DE ESTILO LIVRE)</label>
								</div>
							</div>
							<input type="submit" id="enviar" class="hvr-grow waves-effect waves-light btn" value="Enviar" />    
						</form>
					</div>
				</div>
			</div>
		</section>

		<?php include 'assets/footer.php' ?>
	</main>
	<?php include 'assets/scripts.php' ?>
</body>
</html>