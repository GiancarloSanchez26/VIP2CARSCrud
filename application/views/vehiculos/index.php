<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Lista de Vehículos - VIP2CARS</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f5f5f5;
        }
        h2 {
            color: #333;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            margin-right: 10px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        .actions a {
            color: #007BFF;
        }
        .container {
            padding: 20px;
            background: #ffffff;
            box-shadow: 0px 0px 10px #ccc;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Vehículos Registrados</h2>
    <p><a href="<?= site_url('vehiculos/create') ?>">+ Nuevo Vehículo</a></p>

    <?php if (empty($vehiculos)): ?>
        <p>No hay vehículos registrados.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Cliente</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vehiculos as $v): ?>
                <tr>
                    <td><?= htmlspecialchars($v->placa) ?></td>
                    <td><?= htmlspecialchars($v->marca) ?></td>
                    <td><?= htmlspecialchars($v->modelo) ?></td>
                    <td><?= htmlspecialchars($v->anio_fabricacion) ?></td>
                    <td><?= htmlspecialchars($v->nombre_cliente . ' ' . $v->apellidos_cliente) ?></td>
                    <td><?= htmlspecialchars($v->telefono_cliente) ?></td>
                    <td class="actions">
                        <a href="<?= site_url('vehiculos/edit/'.$v->id) ?>">Editar</a>
                        <a href="<?= site_url('vehiculos/delete/'.$v->id) ?>" onclick="return confirm('¿Estás seguro de eliminar este vehículo?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
</body>
</html>
