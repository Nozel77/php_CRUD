<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seiyuu</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<h2 align=center>Data Seiyuu</h2>
<a href="add.php" style="display: block; text-align: center; margin-top: 10px; margin-bottom: 20px;">
    <button>Add</button>
</a>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Name</th> 
        <th>Age</th>
        <th>Image</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

<?php 
    require 'function.php';
    $data_seiyuu = query("SELECT * FROM seiyuu");
    $no = 1;

    foreach ($data_seiyuu as $kontol): ?>
    <tr>
    <td><?= $no++ ?></td>
    <td><?= $kontol-> name ?></td>
    <td><?= $kontol-> age ?></td>
    <td><img src="<?= $kontol->image ?>" width='100' height='100'></td>
    <td><?= $kontol->description ?></td>
    <td class="actions">
        <a href="edit.php?id=<?= $kontol->id ?>">
            <i class="fas fa-edit"></i>
        </a>
        <a href="delete.php?id=<?= $kontol->id ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');">
            <i class="fas fa-trash"></i>
        </a>
    </td>
    </tr>
<?php endforeach; ?>
</table>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   
</body>
</html>