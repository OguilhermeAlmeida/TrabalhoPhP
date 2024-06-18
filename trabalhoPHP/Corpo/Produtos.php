<?php
include('Corpo/conecta.php');
include('Corpo/cabeca.php');

// Lógica para inserir, atualizar e excluir produtos aqui

// Consultar produtos
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>

<h1>Produtos</h1>

<form method="POST" action="">
    <input type="text" name="nome" required placeholder="Nome">
    <input type="number" step="0.01" name="preco" required placeholder="Preço">
    <input type="number" name="estoque" required placeholder="Estoque">
    <button type="submit" name="adicionar">Adicionar</button>
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Ações</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['preco']; ?></td>
        <td><?php echo $row['estoque']; ?></td>
        <td>
            <a href="produtos.php?editar=<?php echo $row['id']; ?>">Editar</a>
            <a href="produtos.php?excluir=<?php echo $row['id']; ?>">Excluir</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include('Corpo/pe.php'); ?>
