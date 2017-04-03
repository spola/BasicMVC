<!DOCTYPE html>
<html>
<head>
<title><?php echo $titulo ?></title>
</head>

<body>
<?php echo $contenido ?>
    <table>
        <thead>
            <tr><th>Primer Columna</th><th>Segunda Columna</th></tr>
        </thead>
        <tbody>
            <?php foreach($data as $ejemplo): ?>
            <tr>
                <td><?php echo $ejemplo['col1']?></td>
                <td><?php echo $ejemplo['col2']?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</ul>
</body>

</html>