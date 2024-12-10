<h1>Editar Menu</h1>
<form method="POST" action="index.php?action=edit&id=<?= $burger['id']?>">
    <label for="name">Título:</label>
    <input type="text" name="name" value="<?= $burger['name'] ?>" required>
    <br>
    <label for="description">Descripción:</label>
    <input type="text" name="description" value="<?= $burger['description'] ?>" required>
    <label for="descripcion">Precio:</label>
    <input type="text" name="price" value="<?= $burger['price'] ?>" required>
    <label for="image">Imagen:</label>
    <input type="text" name="image" value="<?= $burger['image'] ?>" required>
    <label for="category">Categoria:</label>
    <input type="text" name="category" value="<?= $burger['category'] ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>