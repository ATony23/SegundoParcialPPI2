<?php
$server = "developeros.com.mx";
$user = "develop7_ulsa_a";
$pass = "r00tUls@";
$db = "develop7_ulsa";

$conn = new mysqli($server, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .wrapper {
            width: 800px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <h2>Songs</h2><br>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php

                    $server = "developeros.com.mx";
                    $user = "develop7_ulsa_a";
                    $pass = "r00tUls@";
                    $db = "develop7_ulsa";

                    $conn = new mysqli($server, $user, $pass, $db);

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }


                    $sql = "CALL antonioShowSong(?);";
                    $result = $conn->query($sql);

                    if ($stmt = mysqli_prepare($conn, $sql)) {

                        mysqli_stmt_bind_param($stmt, "i", $param_id);
                        $param_id = trim($_POST["id"]);

                        if (mysqli_stmt_execute($stmt)) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Author</th>";
                            echo "<th>Year</th>";
                            echo "<th>Info</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['author'] . "</td>";
                                echo "<td>" . $row['year'] . "</td>";
                                echo "<td>" . $row['info'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    mysqli_close($link);

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>