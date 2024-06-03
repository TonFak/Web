<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ArtemIT.com :,)</title>
</head>
<body>
<div style="text-align: center">
    <h1>ArtemIT.com</h1>
    <form action="update.php" method="post">
        <label for="email">Email</label>
        <label>
            <input type="email" name="email" required>
        </label>
        <label for="title"><br>Title</label>
        <label>
            <input type="text" name="title" required>
        </label><br>
        <label for="categories">Categories</label>
        <label>
            <select name="categories" required>
                <option value="laptop">Laptops</option>
                <option value="smartphone">Smartphones</option>
                <option value="pc">Desktop PC</option>
            </select>
        </label><br>
        <label for="description">Description:</label><br>
        <label>
            <textarea name="text" rows="10" cols="56" required></textarea>
        </label><br>
        <button type="submit">Confirm</button>
    </form>
    <div id="table" style="text-align: center">
        <table>
            <thead>
            <tr>
                <th>Email</th>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>

    </div>
    <tbody>
    <?php
    $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit;
    }


    $arr = [];
    if ($result = $mysqli->query("SELECT * FROM ad ORDER BY created DESC")) {
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row);
        }
        $result->close();
    }
    $mysqli->close();

    foreach ($arr as $ad):
        echo "<tr>";
        echo "<td>" . ($ad['email']) . "</td>";
        echo "<td>" . ($ad['title']) . "</td>";
        echo "<td>" . ($ad['description']) . "</td>";
        echo "<td>" . ($ad['category']) . "</td>";
        echo "</tr>";
    endforeach;
    ?>
    </tbody>
    </table>
</div>
</body>
</html>