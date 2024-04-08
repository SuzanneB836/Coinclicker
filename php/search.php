<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userSearch = $_POST["usersearch"]; 


    try {
        require_once "includes/dbh.inc.php";
        

        $query = "SELECT * FROM users WHERE username = :usersearch;";

        $stmt = $pdo ->prepare($query);

        $stmt -> bindParam( ":usersearch" , $userSearch);

        $stmt ->execute(); // [$username,$pwd,$email] not needed anymore due to bindParam

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = NULL;
        $stmt = NULL;


        
    } catch (PDOException $e) {
        die("Query Failed: "  .  $e -> getMessage());
    }


}
else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
             <!-- CSS only -->


</head>


<body>
    
<section>
    <h3>Search results:</h3>

        <?php
        if (empty($results)){
            echo "<p>EROOR: No Results Found. </p>";
        } else {
            foreach  ($results as $row) {
                echo "<div>";
                echo "<h4>" .  htmlspecialchars($row["username"]) .  "</h4>";
                echo "<br>" .  htmlspecialchars($row["created_at"]);
                echo "</div>";

            }
        }



        ?>
        </section>
</body>

</html>