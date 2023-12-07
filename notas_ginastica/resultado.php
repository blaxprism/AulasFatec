<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Resultado:</h1>
        <section>  
            <?php
				/*3)	Crie um programa que receba as notas de uma competição de ginástica artística. O usuário deverá inserir:
				a.	Nota de partida
				b.	5 notas, uma de cada juiz
				A nota final é obtida através:
				•	Média das cinco notas + Nota de Partida
				*/
				$notaPartida = $_REQUEST['notaPartida'];
				$juiz1 = $_REQUEST['juiz1'];
				$juiz2 = $_REQUEST['juiz2'];
				$juiz3 = $_REQUEST['juiz3'];
				$juiz4 = $_REQUEST['juiz4'];
				$juiz5 = $_REQUEST['juiz5'];
				$media = ($juiz1 + $juiz2 + $juiz3 + $juiz4 + $juiz5) / 5;
				$notaFinal = $media + $notaPartida;

				echo "A média das 5 notas foi: $media <br>";
				echo "A nota final da partida foi: $notaFinal <br>";
			?>
            
        </section>
        <button onclick="javascript:window.location.href='index.php'"> 
			&#x2B05; Voltar
		</button>
    </main>
</body>
</html>