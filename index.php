<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD | Bem Vindo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="validaCep.js"></script>
</head>
<body class="home">
	<header class="jumbotron">
		<div class="container">
			<div class="col-md-12 text-center">
				<h1>CRUD</h1>
			</div>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php include 'sidebar.php'; ?>
				</div>
				<div class="col-md-9">
					<form action="enter-donation.php" method="POST"> 
						<input type="text" placeholder="Nome: " name="nome" class="form-control mb-3" require>
						<input type="mail" placeholder="E-mail: " name="email" class="form-control mb-3" require>
						<input type="text" placeholder="CPF:" name="cpf" class="form-control mb-3" require>
						<input type="tel" placeholder="Telefone" name="tel" class="form-control mb-3" require>
						<div class="row">
							<div class="col-md-6">
								<label for="dNasc">Data de Nascimento</label>
								<input type="date" name="dnasc" class="form-control mb-3" require>
							</div>
							<div class="col-md-6">
								<label for="dCad">Data do Cadastro</label>
								<input type="text" name="dcad" value="<?php echo date("d/m/Y"); ?>" class="form-control mb-3" readonly>
							</div>
						</div>
						<div class="form-group">
							<label for="intervaloDoacao">Intervalo da Doação</label>
							<select class="form-control mb-3" id="intervaloDoacao" name="intervalo">
								<option value="unico">Único</option>
								<option value="bismestral">Bimestral</option>
								<option value="semestral">Semestral</option>
								<option value="anual">Anual</option>
							</select>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">R$</span>
							</div>
							<input type="text" placeholder="Valor da Doação" name="vDonation" class="form-control" require>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="radio" value="Debito" id="payDebito" name="pay">
									</div>
								</div>
								<input type="text" class="form-control" value="Débito" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="radio" value="Credito" id="payCredito" name="pay">
									</div>
								</div>
								<input type="text" class="form-control" value="Crédito" readonly>
								</div>
							</div>
						</div>

						<hr />
						<p>Endereço:</p>
						<div class="row">
							<div class="col-md-6">
								<input placeholder="CEP" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" class="form-control mb-3" require />
								<input type="text" placeholder="Rua" id="rua" name="rua" class="form-control mb-3" require>
								<input type="text" placeholder="Bairro" id="bairro" name="bairro" class="form-control mb-3" require>
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Cidade" id="cidade" name="cidade" class="form-control mb-3" require>
								<input type="text" placeholder="UF" id="uf" name="uf" class="form-control mb-3" require>
								<input type="text" placeholder="Numero" name="numero" class="form-control mb-3" require>
							</div>
						</div>
						<input type="submit" value="Enviar" class="form-control mb-3 btn btn-success">
					</form>
				</div>
			</div>
		</div>
	</main>
	<footer class="bg-dark text-white text-center py-4 mt-5">
		<p>Desenvolvido por: Arthur Maia - arthur.ms.mota@gmail.com</p>
	</footer>
</body>
</html>