<?php
    include("database.php");

    $sql = "SELECT * FROM users WHERE user = 'Eva'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["register_date"] . "<br>";
    }
    else{
        echo "pas d'utilisateur trouvé.";
    }

    mysqli_close($conn);

?>


<?php
    include("database.php");

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["register_date"] . "<br>";
        };
    }
    else{
        echo "pas d'utilisateur trouvé.";
    }

    mysqli_close($conn);

?>