<?php

    function prompt($message) {
        echo $message . " ";
        $handle = fopen("php://stdin", "r");
        $line = fgets($handle);
        fclose($handle);
        return trim($line);
    }

    function delete(int $id) {
        $delete_data = "DELETE FROM tugas_farras WHERE id_tugas = $id";
        require_once("config/connection.php");
        mysqli_query($conn, $delete_data);
        mysqli_close($conn);
    
    }

    function edit($id) {
        $newData = prompt("Write the new Agenda: ");
        echo $newData;
        $tugas = $newData;
        if ($newData) {
            $newData = prompt("Write the parfume: ");
            echo $newData;
            $parfume = $newData;
            if ($newData) {
                $newData = prompt("Write the date (yyyy-mm-dd): ");
                echo $newData;
                $date = $newData;
                if ($newData) {
                    $newData = prompt("Write the time (hh:mm:ss): ");
                    echo $newData;
                    $time = $newData;
                }
            }
        }
        $edit_data = "UPDATE tugas_farras SET nama_tugas = $tugas, parfume = $parfume, tanggal = $date, waktu = $time WHERE id_tugas = $id";
        require_once("config/connection.php");
        mysqli_query($conn, $delete_data);
        mysqli_close($conn);
    }