<?php
 
require_once 'init.php';
 
// pega os dados do formuário
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$telefone = isset($_POST['tel']) ? $_POST['tel'] : null;
$nascimento = isset($_POST['dnasc']) ? $_POST['dnasc'] : null;
$cadastro = isset($_POST['dcad']) ? $_POST['dcad'] : null;
$intervalo = isset($_POST['intervalo']) ? $_POST['intervalo'] : null;
$ValorDoacao= isset($_POST['vDonation']) ? $_POST['vDonation'] : null;
$FormaPagamento = isset($_POST['pay']) ? $_POST['pay'] : null;
$cep = isset($_POST['cep']) ? $_POST['cep'] : null;
$rua = isset($_POST['rua']) ? $_POST['rua'] : null;
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
$estado = isset($_POST['uf']) ? $_POST['uf'] : null;
$numero = isset($_POST['numero']) ? $_POST['numero'] : null;

// validação
// if (empty($username) || empty($usermail) || empty($userpass)){
//     echo "Volte e preencha todos os campos";
//     exit;
// }

// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO donations(nome, email, cpf, telefone, nascimento, cadastro, intervalo, ValorDoacao, FormaPagamento, cep, rua, bairro, cidade, estado, numero) 
VALUES(:nome, :email, :cpf, :telefone, :nascimento, :cadastro, :intervalo, :ValorDoacao, :FormaPagamento, :cep, :rua, :bairro, :cidade, :estado, :numero)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':cpf', $cep);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':nascimento', $nascimento);
$stmt->bindParam(':cadastro', $cadastro);
$stmt->bindParam(':intervalo', $intervalo);
$stmt->bindParam(':ValorDoacao', $ValorDoacao);
$stmt->bindParam(':FormaPagamento', $FormaPagamento);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':rua', $rua);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':numero', $numero);

if ($stmt->execute()){
    header('Location: obrigado.php');
}else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
