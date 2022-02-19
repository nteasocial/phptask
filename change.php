<?php
    function filter($date)
    {
        return trim(htmlspecialchars($date));
    }

    $nickname = filter($_POST['nickname']);
    $country = filter($_POST['country']);
    $date_of_birth = filter($_POST['date_of_birth']);
    $gender = filter($_POST['gender']);
    $motto = filter($_POST['motto']);
    $bio = filter($_POST['bio']);
    $conn = new mysqli($nickname, $date_of_birth, $gender, $motto, $bio);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "UPDATE MyGuests SET lastname='Yadav' WHERE id=2";
    
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
    ?>
    