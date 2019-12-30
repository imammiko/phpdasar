<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <? for($i=1;$i<=3; $i++){ ?>
    <tr>
    <? for ($j=1; $j<=5; $j++){?>
        <td><?echo "$i,$j"?>
        </td>
    <?endfor?>
    </tr>
    
    <?endfor?>
    </table>
</body>
</html>