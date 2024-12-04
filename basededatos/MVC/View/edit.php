<h1>Editar tarea</h1>
<form method="POST" action="index.php?action=edit&id=<?= $task['id']?>">
    <label for="title">Título:</label>
    <input type="text" name="title" value="<?= $task['title'] ?>" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <input type="text" name="description" value="<?= $task['descripcion'] ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>