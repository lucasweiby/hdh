<section id="contact">
	<div class="container">
		<div class="row hide-on-small-only">
			<div class="col lg6 m6"> <!-- debora esteve aqui -->
				<form id="form-contact" class="margem col lg12 m12 s12" action="send_email.php" name="form_contato" method="post">
					<div class="row">
						<div class="input-field col lg6 m6 s6">
							<input id="first_name" name="first_name" type="text" class="validate">
							<label for="first_name">Nome</label>
						</div>
						<div class="input-field col lg6 m6 s6">
							<input id="last_name" name="last_name" type="text" class="validate">
							<label for="last_name">Sobrenome</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" name="email" type="email" class="validate">
							<label for="email">E-mail</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
							<label for="textarea1">Mensagem</label>
						</div>
					</div>
					<input type="submit" id="enviar" class="hvr-grow waves-effect waves-light btn" value="Enviar" />    
				</form>
			</div>
			<div class="col lg6 m6 right-align">
				<div class="text-contact">
					<h1 class="um">Alguma dúvida?</h1>
					<p class="dois">Entre em contato conosco!</p>
				</div>
			</div>
		</div>

		<div class="row hide-on-med-and-up">
			<div class="col s12 center-align">
				<div class="text-contact">
					<h1 class="um">Alguma dúvida?</h1>
					<p class="dois">Entre em contato conosco!</p>
				</div>
			</div>
			<div class="col s12"> <!-- debora esteve aqui -->
				<form id="form-contact" class="margem col lg12 m12 s12" action="send_email.php" name="form_contato" method="post">
					<div class="row">
						<div class="input-field col lg6 m6 s6">
							<input id="first_name" name="first_name" type="text" class="validate">
							<label for="first_name">Nome</label>
						</div>
						<div class="input-field col lg6 m6 s6">
							<input id="last_name" name="last_name" type="text" class="validate">
							<label for="last_name">Sobrenome</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" name="email" type="email" class="validate">
							<label for="email">E-mail</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
							<label for="textarea1">Mensagem</label>
						</div>
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

