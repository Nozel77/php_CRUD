<?php 
    require "koneksi.php";
    require "function.php";

    $id = $_GET["id"];

    $seiyuu = query("SELECT * FROM seiyuu WHERE id = $id")[0];
    if (isset($_POST["submit"])) {
    if (edit($id,$_POST) > 0) {
        echo "<script>
        alert('Data Berhasil diubah !');
        document.location.href = 'index.php';</script>";
   } else {
       echo "<script>alert('Data gagal diubah'); 
       window.location.href='index.php';</script>";
   }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Seiyuu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        form {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="index.php"><button>Back</button></a><br><br>

    <h2 align="center">Edit Seiyuu</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $kontol->name ?>"><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?= $kontol->age ?>"><br><br>

        <label for="image">Image URL:</label>
        <input type="text" id="image" name="image" value="<?= $kontol->image ?>"><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" cols="30" rows="10"><?= $kontol->description ?></textarea><br><br>

        <input type="submit" name="submit" value="Save">
    </form>
</body>
</html>