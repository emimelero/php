<h1>Agregar <b>Menu</b></h1>
<form method="post" action="index.php?action=create">
    <label for="name">Nombre:</label>
    <input type="text" name="name" required>
    <br>
    <label for="description">Descripción:</label>
    <input type="text" name="description" required>
    <label for="price">Price:</label>
    <input type="text" name="price" required>
    <label for="image">Image:</label>
    <input type="text" name="image" required>
    <label for="category">Category:</label>
    <input type="text" name="category" required>
    <br>
    <button type="submit">Guardar</button>
</form>