<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Usuario</td>
                <td>Password</td>
                <td>Nombre</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['usuario']; ?></td>
                    <td><?php echo $usuario['password']; ?></td>
                    <td><?php echo $usuario['nombre']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>