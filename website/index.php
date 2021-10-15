<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brincando com Docker</title>
</head>
<body>
    <?php

        $result = file_get_contents("http://node-container:9001/products");
        $produtos = json_decode($result);
    ?>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?foreach ($produtos as $produto):?>
                <tr>
                    <th><?= $produto->name;?> </th>
                    <th><?= $produto->price;?> </th>
                </tr>
            <?endforeach;?> 
        </tbody>
    </table>
</body>
</html>