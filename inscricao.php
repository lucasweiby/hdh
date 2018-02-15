<html>
<?php include 'assets/head.php' ?>
<body>
	<main>
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col lg12 m12">
						<div class="text-contact" style="text-align: center;">
							<h1 class="um">Increva-se para a nossa 3ª edição!</h1>
						</div>
					</div>

					<div class="col lg12 m12">
						<form id="form-contact" class="margem col lg12 m12 s12 insc" name="form_contato" method="post">
							<h3 class="integrantes">Dados do Competidor</h3>
							<div class="row">
								<div class="input-field col lg6 m6 s12">
									<input id="nome" name="nome" type="text" class="validate" required="required">
									<label for="name">Nome do grupo ou participante</label>
								</div>
								<div class="input-field col lg6 m6 s12">
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
								<div class="input-field col lg5 m5 s12">
									<input id="nome_rep" name="nome_rep" type="text" class="validate" required="required">
									<label for="nome_rep">Nome do representante + Nome do grupo (para confirmação)</label>
								</div>
								<div class="input-field col lg5 m5 s8">
									<input id="email_rep" name="email_rep" type="email" class="validate" required="required">
									<label for="email" data-error="E-mail inválido" data-success="Este e-mail é válido">E-mail do representante</label>
								</div>
								<div class="input-field col lg2 m2 s4">
									<input id="n_integ" name="n_integ" type="number" class="validate" required="required">
									<label for="integ" data-error="Digite apenas números">Nº de integrantes</label>
								</div>
							</div>

							<h3 class="integrantes">Integrantes</h3>
							<div class="integrantes_cadastro">
								<div class="row">
									<div class="input-field col m1 s1">
										<label for="nome_integ1">1</label>
									</div>
									<div class="input-field col m7 s7">
										<input id="nome_integ1" name="nome_integ1" type="text" class="validate" required="required">
										<label for="nome_integ1">Nome do integrante</label>
									</div>
									<div class="input-field col m3 s4">
										<input id="n_integ1" name="n_integ1" type="number" class="validate" required="required">
										<label for="n_integ1" data-error="Digite apenas números">Nº documento oficial com foto</label>
									</div>
									<div class="input-field col m1 s12">
										<a id="botao-mais" class="btn-floating waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Inserir novo integrante" style="background-color: #F71290;"><i class="material-icons">add</i></a>
									</div>
								</div>
							</div>

							<h3 class="integrantes">ARQUIVOS DA INSCRIÇÃO</h3>
							<div class="row">
								<div class="input-field col s12">
									<input id="link_arq" name="link_arq" type="text" class="validate" required="required">
									<label for="link_arq">Link dos arquivos da inscrição (Foto do figurino + Música da apresentação + Logo do grupo com fundo transparente).* </label>
									<p style="font-weight: bold;">*OBS: Os arquivos devem ser upados em uma pasta contendo o nome do grupo e dentro da pasta os arquivos solicitados. Tutorial de como compartilhar com o <a href="https://support.google.com/drive/answer/7166529?co=GENIE.Platform%3DDesktop&hl=pt-BR" target="_blank" style="text-decoration: none;">Google Drive</a> e <a href="https://www.dropbox.com/pt_BR/help/files-folders/share-file-or-folder" target="_blank" style="text-decoration: none;">Dropbox</a>.</p>
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
							<div class="progress">
						      <div class="indeterminate"></div>
						  </div>
							<input type="button" id="enviar" class="hvr-grow waves-effect waves-light btn btn-insc" value="Enviar" /> 
							<input type="reset" id="enviar" class="hvr-grow waves-effect waves-light btn btn-insc" value="Limpar" />   
						</form>
					</div>
				</div>
			</div>
		

		  <!-- Modal Structure -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Atenção</h4>
		      <p>Finalize o preenchimento dos dados do integrante atual para adicionar um novo.</p>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="font-weight: bold;">Entendi</a>
		    </div>
		  </div>

	  	<!-- Modal Structure -->
	  <div id="modal2" class="modal">
	    <div class="modal-content">
	      <h4>Inscrição enviada!</h4>
	      <p>Sua inscrição foi recebida com sucesso, a lista com os grupos aprovados será postada na nossa <a target="_blank" href="https://www.facebook.com/hanadulevent/"> fanpage do Facebook. </a></p>
	    </div>
	    <div class="modal-footer">
	      <a href="index.php" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
	    </div>
	  </div>

	</section>
	

		<?php include 'assets/footer.php' ?>
	</main>
	<?php include 'assets/scripts.php' ?>
	<script type="text/javascript" src="js/inscricao.js"></script>

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