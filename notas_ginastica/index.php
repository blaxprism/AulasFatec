<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Competição</h1>
        <section>
            <form action="resultado.php" method="post">
                <label for="notaPartida"><strong>Digite a nota da partida</strong></label>
                <input type="number" name="notaPartida" id="notaPartida" placeholder="0" step="0.1" min="0" max="10">
				<label for="juiz1"><strong>Digite a nota do primeiro juiz</strong></label>
                <input type="number" name="juiz1" id="juiz1" placeholder="0" step="0.1" min="0" max="10">
				<label for="juiz2"><strong>Digite a nota do segundo juiz</strong></label>
                <input type="number" name="juiz2" id="juiz2" placeholder="0" step="0.1" min="0" max="10">
				<label for="juiz3"><strong>Digite a nota do terceiro juiz</strong></label>
                <input type="number" name="juiz3" id="juiz3" placeholder="0" step="0.1" min="0" max="10">
				<label for="juiz4"><strong>Digite a nota do quarto juiz</strong></label>
                <input type="number" name="juiz4" id="juiz4" placeholder="0" step="0.1" min="0" max="10">
				<label for="juiz5"><strong>Digite a nota do quinto juiz</strong></label>
                <input type="number" name="juiz5" id="juiz5" placeholder="0" step="0.1" min="0" max="10">
                <input type="submit" value="Enviar">
            </form>
        </section>
    </main>
</body>
</html>
<!--3)	Crie um programa que receba as notas de uma competição de ginástica artística. O usuário deverá inserir:
a.	Nota de partida
b.	5 notas, uma de cada juiz
A nota final é obtida através:
•	Média das cinco notas + Nota de Partida
-->
