<?php

include("config.php");



$sql = "SELECT firstName, surName FROM 'login_signup'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

    // output data of each row

    while($row = $result->fetch_assoc()) {

        echo "Name: ". $row["firstName"]. " " . $row["lastName"];

    }

} else {

    echo "0 results";

}



$conn->close();

?>

