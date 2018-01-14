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
						<form id="form-contact" class="margem col lg12 m12 s12 insc" action="send_insc.php" name="form_contato" method="get">
							<h3 class="integrantes">Dados do grupo</h3>
							<div class="row">
								<div class="input-field col lg6 m6 s6">
									<input id="name" name="nome" type="text" class="validate" required="required">
									<label for="name">Nome do grupo ou participante</label>
								</div>
								<div class="input-field col lg6 m6 s6">
									<select name="categoria" id="categoria" required="required">
										<option value="" disabled selected>Escolha uma categoria</option>
										<option value="Pocket dance">Pocket dance</option>
										<option value="Dance cover">Dance cover</option>
										<option value="Canto">Canto</option>
										<option value="Estilo livre">Estilo livre</option>
									</select>
									<label>Categoria da competição</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col lg10 m10 s10">
									<input id="email_rep" name="email_rep" type="email" class="validate" required="required">
									<label for="email" data-error="E-mail inválido" data-success="Este e-mail é válido">E-mail do representante</label>
								</div>
								<div class="input-field col lg2 m2 s2">
									<input id="integ" name="integ" type="number" class="validate" required="required">
									<label for="integ" data-error="Digite apenas números">Quant. de integrantes</label>
								</div>
							</div>

							<h3 class="integrantes">Integrantes</h3>
							<div class="integrantes_cadastro">
								<div class="row">
									<div class="input-field col s1">
										<label for="nome_integ1">1</label>
									</div>
									<div class="input-field col s7">
										<input id="nome_integ1" name="nome_integ1" type="text" class="validate" required="required">
										<label for="nome_integ1">Nome do integrante</label>
									</div>
									<div class="input-field col s3">
										<input id="n_integ1" name="n_integ1" type="number" class="validate" required="required">
										<label for="n_integ1" data-error="Digite apenas números">Nº documento oficial com foto</label>
									</div>
									<div class="input-field col s1">
										<a id="botao-mais" class="btn-floating waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Inserir novo integrante"><i class="material-icons">add</i></a>
									</div>
								</div>
							</div>

							<h3 class="integrantes">ARQUIVOS DA INSCRIÇÃO</h3>
							<div class="row">
								<div class="col s4">
									<div class="file-field input-field">
										<div class="btn file">
											<span><i class="material-icons">group</i></span>
											<input type="file" name="anexo" id="logo">
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

		  <!-- Modal Structure -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Atenção</h4>
		      <p>Finalize o preenchimento dos dados do integrante atual para adicionar um novo.</p>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entendi</a>
		    </div>
		  </div>

		<?php include 'assets/footer.php' ?>
	</main>
	<?php include 'assets/scripts.php' ?>

	<style type="text/css">
		input[type=number]::-webkit-inner-spin-button { 
		    -webkit-appearance: none;
		    cursor:pointer;
		    display:block;
		    width:8px;
		    color: #333;
		    text-align:center;
		    position:relative;
		}
		   input[type=number] { 
		   -moz-appearance: textfield;
		   appearance: textfield;
		   margin: 0; 
		}
	</style>
</body>
</html>