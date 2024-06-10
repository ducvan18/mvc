<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
            <?php foreach ($data as $item): ?>
               <tr>
                <td> <?= $item['id']?></td>
                <td> <?= $item['name']?></td>
                <td></td>
               </tr>               
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>