<h1>Lista de Bugers</h1>
<a href="index.php?action=create">Agregar Menu</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Categoria</th>
        <th>Opciones</th>

    </tr>
    <?php foreach ($burger as $tableBurger): ?>
        <tr>
            <td><?= $tableBurger["id"] ?></td>
            <td><?= $tableBurger["name"] ?></td>
            <td><?= $tableBurger["description"] ?></td>
            <td><?= $tableBurger["price"] ?></td>
            <td><img src="imagenes/<?= $tableBurger["image"]?>" style="width:100px"></td>
            <td><?= $tableBurger["category"] ?></td>
            <td><a href="index.php?action=edit&id=<?= $tableBurger['id']?>">Editar</a>
            <a href="index.php?action=delete&id=<?= $tableBurger['id'] ?>" onclick="return confirm('Estás seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
</table>