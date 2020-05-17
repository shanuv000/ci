<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User view</title>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>password</th>
    </tr>


<h1>

    <?php
    foreach ($results as $object){
        echo "<tr><td>".$object->user."</td>";
      echo "<td>".$object->password."</td></tr>";

    }


    ?>
</h1>
</table>
</body>
</html>
