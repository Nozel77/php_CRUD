<?php
    require 'koneksi.php';

    function query($query) {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_object($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function add($data){
        global $koneksi;
        $name = $data["name"];
        $age = $data["age"];
        $image = $data["image"];
        $description = $data["description"];
        $add = "INSERT INTO seiyuu (name, age, image, description) VALUES ('$name', '$age', '$image', '$description')";
        mysqli_query($koneksi, $add);
        return mysqli_affected_rows($koneksi);
    }

    function delete($id){
        global $koneksi;
        $deleteQuery = "DELETE FROM seiyuu WHERE `seiyuu`.`id` = $id";
        mysqli_query($koneksi, $deleteQuery);
        return mysqli_affected_rows($koneksi);
    }

    function edit($id, $data) {
        global $koneksi;
        $name = $data["name"];
        $age = $data["age"];
        $image = $data["image"];
        $description = $data["description"];
        $editQuery = "UPDATE seiyuu SET name = '$name', age = '$age', image = '$image', description = '$description' WHERE id = $id";
        mysqli_query($koneksi, $editQuery);
        return mysqli_affected_rows($koneksi);
    }
?>