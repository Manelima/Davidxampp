<?php 
<<<<<<< HEAD
=======

>>>>>>> 25af072938d7eaa835cccb29179a15130ca25fb2
    $nome = $telefone = $email = $senha = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
        $host 	= "localhost";
        $bd 	= "testes_01";
        $user 	= "root";
<<<<<<< HEAD
        $pass 	= "";
=======
        $pass 	= "admin";
>>>>>>> 25af072938d7eaa835cccb29179a15130ca25fb2
    
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);
    
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $id = $_POST['id'];

            $sql = "SELECT * FROM usuarios WHERE id = :id";

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if($row){
                $nome = $row['nome'];
                $telefone = $row['telefone'];
                $email = $row['email'];
                $senha = $row['senha'];
            } else {
                $nome = $telefone = $email = $senha = "";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }    
?>
<<<<<<< HEAD

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="css/bootstrap.min.css">
			    <link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/pesquisa.css">
			
            <link rel="icon" href="imgs/banana-icon.png">
        <title>Banana - Pesquisa</title>
    </head>

    <body class="text-center">
        <div class="divForm">
        <form class="form-pesquisa" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <img class="rounded mb-4" src="imgs/bananaLogo.jpg" alt="" width="72" height="72">
                
                <h1 class="h3 mb-3 font-weight-normal">Pesquisar Banana</h1>

                <input class="form-control" type="text" name="id" placeholder="B-ID">

                <p class="text-banana">( Banana-ID )</p>

            <button class="btn btn-lg btn-banana btn-block" type="submit" 
            value="pesquisar">Pesquisar</button>

            <p class="mt-4 mb-3 text-muted">&copy; Los Bananas Maduros - 2024</p>
        </form>
    
        <?php  if(!empty($nome)){ ?>
            <form class="form-pesquisa" name="formPesquisa" method="post" action="atualiza.php">
                <input type="hidden" name="id" value="<?php  echo $id; ?>">
               
                    <input class="form-control" type="text" name="nome" value="<?php  echo $nome; ?>">
                    
                    <input class="form-control" type="number" name="telefone" value="<?php  echo $telefone; ?>">
                
                    <input class="form-control" type="email" name="email" value="<?php  echo $email; ?>">
                
                    <input class="form-control" type="password" name="senha" value="<?php  echo $senha; ?>">
                
                <button class="btn btn-lg btn-banana btn-block" type="submit" 
                value="Atualizar cadastro">Atualizar cadastro</button>
            </form>
        </div>
        
        <?php } ?>
    </body>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa e Atualizção Cadastral</title>
</head>
<body>
    <h2>Atualizar cadastro</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            ID: <input type="text" name="id">
            <input type="submit" value="pesquisar">
        </p>
    </form>
    <br>
<hr>
    <?php  if(!empty($nome)){ ?>

    <form method="post" action="atualiza.php">
        <input type="hidden" name="id" value="<?php  echo $id; ?>">
        <p>
            Nome: <br><input type="text" name="nome" value="<?php  echo $nome; ?>">
        </p>
        <p>
            Telefone: <br><input type="number" name="telefone" value="<?php  echo $telefone; ?>">
        </p>
        <p>
            E-mail: <br><input type="email" name="email" value="<?php  echo $email; ?>">
        </p>
        <p>
            Senha: <br><input type="password" name="senha" value="<?php  echo $senha; ?>">
        </p>
        <p>
            <input type="submit" value="Atualizar cadastro">
        </p>
    </form>
    <?php } ?>
</body>
>>>>>>> 25af072938d7eaa835cccb29179a15130ca25fb2
</html>