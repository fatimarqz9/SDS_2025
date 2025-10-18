<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <nav class="nav">
        <div class="logo">SDS<span>25</span></div>
        <ul>
            <li><a href="../public">Home</a></li>
            <li><a href="dia1">Día 1</a></li>
            <li><a href="dia2">Día 2</a></li>
            <li><a href="dia3">Día 3</a></li>
            <li><a href="dia4">Día 4</a></li>
            <li><a href="dia5">Día 5</a></li>
            <li><a href="perfil">Perfil</a></li>
            <li><a href="registrarVisita">Registrar visita</a></li>
        </ul>
    </nav>

    <section class="contenedor_visitas">

        <div class="visitas_form">
            <h1>Registro de Visitas — SDS25</h1>

            <form action="save" method="post">
                <label class="indicacion" for="nombre">Nombre: </label><br>
                <input class="inp" type="text" name="nombre" id="nombre"><br>
                <label class="indicacion" for="email">Email: </label><br>
                <input class="inp" type="text" name="email" id="email"><br>
                <label class="indicacion" for="comentario">Comentario (Opcional): </label><br>
                <textarea class="comentario" name="comentario" id="comentario" placeholder="Escriba su comentario..."></textarea>
                <button type="submit">Registrar Visita</button>
            </form>
        </div>
    </section>


    <hr>

    <h2>Lista de Visitas</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Comentario</th>
            <th>Fecha</th>
        </tr>

        <?php foreach ($dataVisitas as $visita) { ?>
            <tr>
                <td><?php echo $visita['idVisita']; ?></td>
                <td><?php echo $visita['nombre']; ?></td>
                <td><?php echo $visita['email']; ?></td>
                <td><?php echo $visita['comentario']; ?></td>
                <td><?php echo date("d/m/Y H:i", strtotime($visita['fecha_registro'])); ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>