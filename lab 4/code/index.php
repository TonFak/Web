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
    require 'vendor/autoload.php';
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
    $client = new \Google_Client();
    $client->setApplicationName('BOARD');
    $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
    $client->setAccessType('offline');
    $path = 'credentials.json';
    $client->setAuthConfig($path);

    $service = new \Google_Service_Sheets($client);

    $spreadsheetId = '1Q0r9TF0mE50Lzdpvbg4Mb5_GlXY6WLwSZNwpef4_TdY';
    $spreadsheet = $service->spreadsheets->get($spreadsheetId);
    $sheets = $spreadsheet->getSheets();


    foreach ($sheets as $sheet)
    {
        $sheetTitle = $sheet->getProperties()->getTitle();
        $range = $sheetTitle;

        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();


        if (!empty($values))
        {
            $isFirstRow = true;
            foreach ($values as $row)
            {
            echo '<tr>';
                foreach ($row as $cell)
                {
                    echo '<td>' . htmlspecialchars($cell) . '</td>';
                }
                echo '</tr>';
            }
        }
    }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>