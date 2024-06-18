<?php
include('Corpo/conecta.php');
include('Corpo/cabeca.php');


$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);
?>

<h1>Clientes</h1>

<form method="POST" action="">
    <input type="text" name="nome" required placeholder="Nome">
    <input type="email" name="email" required placeholder="Email">
    <input type="text" name="telefone" placeholder="Telefone">
    <button type="submit" name="adicionar">Adicionar</button>
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['telefone']; ?></td>
        <td>
            <a href="clientes.php?editar=<?php echo $row['id']; ?>">Editar</a>
            <a href="clientes.php?excluir=<?php echo $row['id']; ?>">Excluir</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include('Corpo/pe.php'); ?>
