<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題_011</title>
</head>

<body>
    <P>
        <?php
        $vegetable_names = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
        foreach ($vegetable_names as $key => $value) {
            echo "{$key} : {$value} <br>";
        }
        ?>
    </P>

</body>

</html>