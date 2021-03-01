<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD | Resumo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="obrigado">
	<header class="jumbotron">
		<div class="container">
			<div class="col-md-12 text-center">
				<h1>CRUD</h1>
			</div>
		</div>
	</header>
	<main>
        <?php 
            include 'init.php';

            $PDO = db_connect();
            $sql = "SELECT id, nome, intervalo, FormaPagamento, ValorDoacao, cidade, estado FROM donations";
            $stmt = $PDO->prepare($sql);
            $stmt->execute();
        ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Resumo das Doações</h2>
                    <table class="table table-striped mb-5">
                        <thead>
                            <tr>
                                <th>Doador</th>
                                <th>Intervalo</th>
                                <th>Forma do Pagamento</th>
                                <th>Valor Doado</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($donation = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                            <tr>
                                <td><?php echo $donation['nome'] ?></td>
                                <td><?php echo $donation['intervalo'] ?></td>
                                <td><?php echo $donation['FormaPagamento'] ?></td>
                                <td><?php echo "R$ ".$donation['ValorDoacao'] ?></td>
                                <td><?php echo $donation['cidade'] ?></td>
                                <td><?php echo $donation['estado'] ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <p>Deseja fazer uma nova doação?</p>
                    <p><a href="index.php" class="btn btn-primary" title="Clique aqui para voltar ao formulario">Clique Aqui</a>
				</div>
			</div>
		</div>
	</main>
	<footer class="bg-dark text-white text-center py-4 mt-5">
		<p>Desenvolvido por: Arthur Maia - arthur.ms.mota@gmail.com</p>
	</footer>
</body>
</html>