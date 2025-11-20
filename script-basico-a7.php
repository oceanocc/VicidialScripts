<!DOCTYPE html>
<html>
<head>
    <title>AVISOS</title>
    <style>
        p{
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h2>Script de AVISOS</h2>

<p>
    Sr(a) <?=$_GET['first_name']?>, qué tal. Le habla [nombre de agente] de Movistar.
    Usted realiz&oacute; con nosotros su proceso de cambio de compa&ntilde;&iacute;a. Solo quiero 
    recordarle que debe acercarse al Centro de Atenci&oacute;n acordado, llevar su credencial y realizar la recarga 
    correspondiente para finalizar el tr&aacute;mite, ¿de acuerdo?
</p>
<p>
    Adem&aacute;s, ya que aprovech&oacute; esta promoci&oacute;n, ¿le gustar&iacute;a cambiar otro n&uacute;mero que tenga o quiz&aacute; recomendar 
    a alg&uacute;n familiar o conocido para que tambi&eacute;n disfrute del beneficio?
</p>

<h2>Informaci&oacute;n adicional</h2>
<table>
    <tr>
        <th>FECHA DE VENTA</th>
        <td><?=$_GET['last_name']?></td>
    </tr>
    <tr>
        <th>DN</th>
        <td><?=$_GET['phone_number']?></td>
    </tr>
    <tr>
        <th>FVC</th>
        <td><?=$_GET['address3']?></td>
    </tr>
    <tr>
        <th>CLIENTE</th>
        <td><?=$_GET['first_name']?></td>
    </tr>
    <tr>
        <th>ESTADO</th>
        <td><?=$_GET['province']?></td>
    </tr>
    <tr>
        <th>CIUDAD</th>
        <td><?=$_GET['city']?></td>
    </tr>
    <tr>
        <th>CAC</th>
        <td><?=$_GET['address1']?></td>
    </tr>
    <tr>
        <th>PROMOCI&Oacute;N</th>
        <td><?=$_GET['address2']?></td>
    </tr>
</table>

</body>
</html>
