<?php
require "koneksi.php";
require "function.php";

if(isset($_POST["submit"])){
    if (add($_POST) > 0) {   
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add php</title>
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
<a href="index.php"><button>back</button></a><br><br>

<form method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="name"><br><br>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="age"><br><br>

        <label for="image">Image Url:</label>
        <input type="text" id="image" name="image"><br><br>

        
        <label for="desc">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br><br>


        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

