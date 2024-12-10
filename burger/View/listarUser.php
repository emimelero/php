<h1>Lista de Bugers</h1>
<a href="index.php?action=create">Agregar Menu</a>
<table border="1">
    <tr>
        <th>Nombre</th>

    </tr>
    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?= $categoria["name"] ?></td>
        </tr>
        <?php endforeach; ?>
</table>