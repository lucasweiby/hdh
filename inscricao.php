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
					<div class="col lg12 m12"> <!-- debora esteve aqui -->
						<form id="form-contact" class="margem col lg12 m12 s12" action="send_insc.php" name="form_contato" method="post">
							<div class="row">
								<div class="input-field col lg6 m6 s6">
									<input id="last_name" name="last_name" type="text" class="validate">
									<label for="last_name">Nome do grupo ou participante</label>
								</div>
								<div class="input-field col lg6 m6 s6">
									<select>
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
									<input id="email" name="email" type="email" class="validate">
									<label for="email">E-mail do representante</label>
								</div>
								<div class="input-field col lg2 m2 s2">
									<input id="email" name="email" type="email" class="validate">
									<label for="email">Quantidade de integrantes</label>
								</div>
							</div>
							<h3 class="um">Integrantes</h3>
							<div class="row">
								<script type="text/javascript">
									$(document).ready(function() {
  									var campos_max          = 10;   //max de 10 campos
  									var x = 1; // campos iniciais
  									$('#add_field').click (function(e) {
          									e.preventDefault();     //prevenir novos clicks
          									if (x < campos_max) {
          										$('#listas').append('<div>\
          											<input type="text" name="campo[]">\
          											<a href="#" class="remover_campo">Remover</a>\
          											</div>');
          										x++;
          									}
          								});

  									// Remover o div anterior
  									$('#listas').on("click",".remover_campo",function(e) {
  										e.preventDefault();
  										$(this).parent('div').remove();
  										x--;
  									});
  								});
  							</script>
  							<input type="button" id="add_field" value="Adicionar integrante">
  							<br>
  							<div id="listas" class="input-field col s6">
  								<div>
  									<input id="nomeInt" type="text" name="campo[]">
  									<label for="nomeInt">Nome do integrante</label>
  								</div>
  							</div>
								<!-- <div id="listas" class="input-field col s6">
									<div>
										<input id="docInt" type="text" name="mytext[]">
										<label for="docInt">Nº do documento OFICIAL COM FOTO</label>
									</div>
								</div> -->
							</div>
							<input type="submit" id="enviar" class="hvr-grow waves-effect waves-light btn" value="Enviar" />    
						</form>
					</div>
				</div>
			</div>


			<!-- Modal Structure -->
			<div id="modal-contato" class="modal">
				<div class="modal-content">
					<h4>Mensagem enviada!</h4>
					<p>Sua mensagem foi enviada com sucesso, em breve retornaremos com um e-mail.</p>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
				</div>
			</div>


		</section>

		<footer class="rodape" style="position: absolute; bottom: 0; width: 100%;">
			<div class="container">
				<div class="row">
					<div class="col m4 s6 copy">
						© <?php echo date("Y");?> Todos os direitos reservados
					</div>
					<div class="col m4 logo-footer hide-on-small-only">
						<img class="hvr-grow" src="img/hdh-logo.png" alt="">
					</div>
					<div class="col m4 s6 socials">
						<table class="social-line">
							<tr>
								<td class="social-i"><a class="socicon-facebook hvr-grow social-i" target="_blank" href="https://www.facebook.com/hanadulevent/"></a></td>
								<td><a class="socicon-instagram hvr-grow social-i" target="_blank" href="https://www.instagram.com/hanadulhallyu/?hl=pt-br"></a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</footer>
	</main>
	<?php include 'assets/scripts.php' ?>
</body>
</html>