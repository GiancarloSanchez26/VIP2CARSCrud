<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Registrar Vehículo - VIP2CARS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .form-container {
            background-color: #f9f9f9;
            padding: 20px;
            width: 500px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
        }
        a {
            text-decoration: none;
            color: #555;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Registrar Nuevo Vehículo</h2>
    <form action="<?= site_url('vehiculos/store') ?>" method="post">
        <label for="placa">Placa:</label>
        <input type="text" name="placa" required>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required>

        <label for="anio_fabricacion">Año de Fabricación:</label>
        <input type="number" name="anio_fabricacion" min="1900" max="<?= date('Y') ?>" required>

        <label for="nombre_cliente">Nombre del Cliente:</label>
        <input type="text" name="nombre_cliente" required>

        <label for="apellidos_cliente">Apellidos del Cliente:</label>
        <input type="text" name="apellidos_cliente" required>

        <label for="documento_cliente">Nro. de Documento:</label>
        <input type="text" name="documento_cliente" required>

        <label for="correo_cliente">Correo Electrónico:</label>
        <input type="email" name="correo_cliente" required>

        <label for="telefono_cliente">Teléfono:</label>
        <input type="text" name="telefono_cliente" required>

        <button type="submit">Guardar Vehículo</button>
        <a href="<?= site_url('vehiculos') ?>">Cancelar</a>
    </form>
</div>
</body>
</html>
