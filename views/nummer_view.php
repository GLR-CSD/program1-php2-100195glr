<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personenlijst</title>
    <link rel="stylesheet" href="public/css/simple.css">
</head>
<body>
<h1>Nummerlijst</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nummer ID</th>
        <th>Titel</th>
        <th>Duur</th>
        <th>URL</th>
    </tr>
    <?php foreach ($nummers as $nummer): ?>
        <tr>
            <td><?= $nummer->getID() ?></td>
            <td><?= $nummer->getalbumID() ?></td>
            <td><?= $nummer->gettitel() ?></td>
            <td><?= $nummer->getDuur() ?></td>
            <td><?= $nummer->getURL() ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="notice">
    <h2>Persoon Toevoegen:</h2>
    <?php if (!empty($errors)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
