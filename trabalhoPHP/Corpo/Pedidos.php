<?php
include('Corpo/conecta.php');
include('Corpo/cabeca.php');



$sql = "SELECT p.*, c.nome as cliente_nome FROM pedidos p JOIN clientes c ON p.cliente_id = c.id";
$result = $conn->query($sql);
?>

<h1>Pedidos</h1>

<form method="POST" action="">
    <select name="cliente_id" required>
        <option value="">Selecione um cliente</option>
        <?php
        $clientes = $conn->query("SELECT * FROM clientes");
        while($cliente = $clientes->fetch_assoc()):
        ?>
        <option value="<?php echo $cliente['id']; ?>"><?php echo $cliente['nome']; ?></option>
        <?php endwhile; ?>
    </select>
    <button type="submit" name="adicionar">Adicionar</button>
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Data do Pedido</th>
        <th>Total</th>
        <th>Ações</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['cliente_nome']; ?></td>
        <td><?php echo $row['data_pedido']; ?></td>
        <td><?php echo $row['total']; ?></td>
        <td>
            <a href="pedidos.php?ver=<?php echo $row['id']; ?>">Ver</a>
            <a href="pedidos.php?excluir=<?php echo $row['id']; ?>">Excluir</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include('Corpo/pe.php'); ?>
