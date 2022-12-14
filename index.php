<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Parfume Master Website with CRUD Feautred To Do List">
    <meta name="author" content="Farras Adhani Zayn">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="./styles/styles.css">

    <title>Parmast | Your Future Parfume Website</title>
  </head>
  <body>
    <?php 
    require_once("config/connection.php");
    include "config/application.php";
    try {
        if (isset($_POST["submit"])) {
            // Mengcek apakah ada edit atau delete data
            if($_POST["submit"] > 0) {
                edit($_POST["submit"]);
                return 0;
            } else if ($_POST["submit"] > 0) {
                delete($_POST["submit"]);
                return 0;
            }
            // Diambil berdasarkan input
            $task_name = $_POST["todo-agenda"]; 
            $parfume_name = $_POST["todo-parfume"];
            $deadline = $_POST["todo-deadline"];
            $time = $_POST["todo-time"];

            // Memasukkan kedalam database
            $query = "INSERT INTO tugas_farras (nama_tugas, nama_parfum, deadline, time) VALUES ('$task_name', '$parfume_name', '$deadline', '$time')";

            // Meng-koneksi ke database
            if (mysqli_query($conn, $query)) {
                echo '<script>alert("Data succesfully updated!")</script>';
            } 
        } 
    } catch (Exception $errormsg) {
        echo '<script>alert("Error: ' . $errormsg -> getMessage() . '")</script>';
    }
    ?>
    <figure class="d-flex justify-content-center mb-0 position-relative" id="landing-frame-image">
        <div class="start-0 end-0 position-absolute" id="nav-wrapper">
            <nav class="navbar sticky-top">
                <div class="container-fluid mx-3">
                    <a href="#" class="navbar-brand text-white playfair-title fs-2">ParMast</a>
                    <form class="d-flex">
                        <input class="form-control me-3 py-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary btn-light" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <img id="landing-image" src="./images/landing-page-show.jpg" alt="Parfume Landing Page Image">
        <div class="position-absolute" id="landing-layer"></div>
        <figcaption class="position-absolute top-50 start-50 translate-middle text-center">
            <h1 class="playfair-title text-white fs-1">ParMast</h1>
            <p class="text-white fs-4">The best place for your fragrance life.</p>
    </figure>
    <section class="container" id="catalog-wrapper">
        <div class="container my-5 d-flex flex-row flex-wrap justify-content-center">
        <div class="card m-2" style="width: 18rem;">
            <figure class="container position-relative">
                <img src="./images/item-1-parfume.jpg" class="card-img-top" alt="HMNS ">
                <figcaption class="position-absolute top-50 start-50 translate-middle text-center text-white">
                    <p><br><br><br>Not Real Picture<br>Test Only</p>
            </figure>
            <div class="card-body">
                <h5 class="card-title fw-bold">Versace</h5>
                <h6 class="card-title">Eros</h6>
                <p class="card-text">Best Parfume made by Versace with Top notes Mint and Lemon, Middle notes Green Apple and Base notes Tonka bean and Amber</p>
                <a href="#" class="btn btn-primary">Check Catalog</a>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <figure class="container position-relative">
                <img src="./images/item-1-parfume.jpg" class="card-img-top" alt="HMNS ">
                <figcaption class="position-absolute top-50 start-50 translate-middle text-center text-white">
                    <p><br><br><br>Not Real Picture<br>Test Only</p>
            </figure>
            <div class="card-body">
                <h5 class="card-title fw-bold">Creed</h5>
                <h6 class="card-title">Aventus</h6>
                <p class="card-text">Masculine parfume, made to bring higher level of elegancy of Man. Start pricing from $495 for 100ml, click to check the catalog.</p>
                <a href="#" class="btn btn-primary">Check Catalog</a>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <figure class="container position-relative">
                <img src="./images/item-1-parfume.jpg" class="card-img-top" alt="HMNS ">
                <figcaption class="position-absolute top-50 start-50 translate-middle text-center text-white">
                    <p><br><br><br>Not Real Picture<br>Test Only</p>
            </figure>
            <div class="card-body">
                <h5 class="card-title fw-bold">HMNS</h5>
                <h6 class="card-title">Ambar Janma</h6>
                <p class="card-text">Indonesian Made Parfume with best fragrance for XY and XX. Will be sold in france, Price is starting from $149/100ml</p>
                <a href="#" class="btn btn-primary">Check Catalog</a>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <figure class="container position-relative">
                <img src="./images/item-1-parfume.jpg" class="card-img-top" alt="HMNS ">
                <figcaption class="position-absolute top-50 start-50 translate-middle text-center text-white">
                    <p><br><br><br>Not Real Picture<br>Test Only</p>
            </figure>
            <div class="card-body">
                <h5 class="card-title fw-bold">Xerjoff</h5>
                <h6 class="card-title">Alexandria II</h6>
                <p class="card-text">For Men and Women, Alexandria II made by Xerjoff is best Parfume with Top notes Palisander Rosewood, Lavender, etc.</p>
                <a href="#" class="btn btn-primary">Check Catalog</a>
            </div>
        </div>
    </section>
    <section class="d-flex my-0 flex-row" id="main-todo-wrapper">
        <figure class="me-2 mb-0 d-flex justify-content-center position-relative align-self-start" id="todo-heading-wrap">
            <img id="todo-image" src="./images/todolist-background-image.jpg" alt="Parfume Landing Page Image">
            <div class="position-absolute" id="todo-image-layer"></div>
            <figcaption class="position-absolute top-50 start-50 translate-middle text-center">
                <h1 class="playfair-title text-white cus-fs-5 text-start">To Do List</h1>
                <p class="playfair text-white fs-4 text-start text-wrap">Schedule your parfume for any agenda or event with our exclusive "To Do List" feature, try it for free without any subscription!</p>
        </figure>
        <div class="ms-2 mb-0 align-self-end" id="todo-wrapper">
            <div class="container pt-5 pad-10">
                <div class="card">
                    <div class="card-header fs-5 text-center"><b>To Do List</b></div>
                    <div class="card-body">
                        <form action="index.php" method="post">
                            <div class="mb-3">
                                <label for="todo-agenda" class="form-label"><b>Agenda</b></label>
                                <input type="text" class="form-control" id="todo-agenda" name="todo-agenda" placeholder="Write the event" value="" required>
                                <p class="form-text">Write your upcoming agenda above</p>
                            </div>
                            <div class="mb-3">
                                <label for="todo-parfume" class="form-label"><b>Parfume</b></label>
                                <input type="text" class="form-control" id="todo-parfume" name="todo-parfume" placeholder="Write your parfume" value="" required>
                                <p class="form-text">Write the parfume you would use</p>
                            </div>
                            <div class="mb-3">
                                <label for="todo-deadline" class="form-label"><b>Date</b></label>
                                <input type="date" class="form-control" id="todo-deadline" name="todo-deadline" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="todo-time" class="form-label"><b>Time</b></label>
                                <input type="time" class="form-control" id="todo-time" name="todo-time" value="" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                        </form>     
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <table class="table overflow-auto" id="todo-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Agenda</th>
                                    <th scope="col">Parfume</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="todo-data">
                                <?php 
                                    require_once("config/application.php");
                                    // Mengambil data dari database
                                    $queryTake = "SELECT * FROM tugas_farras ORDER BY deadline ASC";
                                    $resultTake = mysqli_query($conn, $queryTake);
                                    if(mysqli_num_rows($resultTake) > 0) {
                                        $id = 1;
                                        while ($data = mysqli_fetch_assoc($resultTake)) {
                                            $idData = $data['id_tugas'];
                                            $agenda = $data['nama_tugas'];
                                            $parfume = $data['nama_parfum'];
                                            $date = $data['deadline'];
                                            $time = $data['time'];
                                ?>
                                <tr id="data-<?php echo $idData ?>">
                                    <th scope="row"><?= $id?></th>
                                    <td><?= $agenda?></td>
                                    <td><?= $parfume?></td>
                                    <td><?= $date?></td>
                                    <td><?= $time?></td>
                                    <td>
                                        <form action="index.php" method="post">
                                            <button type="button" name="submit" onclick="edit(<?php echo $idData ?>)" class="btn btn-success" value="<?php echo "$idData" ?>">Edit</button>
                                            <button type="button" name="submit" onclick="delete(<?php echo $idData ?>)" class="btn btn-danger" value="<?php echo "$idData" ?>">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $id++;
                                        }
                                    } else {
                                        echo "<tr>
                                                <td colspan='6' class='text-center'>No Data has been inputted</td>
                                            </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand playfair-title" href="#">ParMast</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#catalog-wrapper">Catalog</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#main-todo-wrapper">To Do List</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    &copy; 2021 ParMast by Farras Adhani Zayn
                </span>
            </div>
        </div>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>