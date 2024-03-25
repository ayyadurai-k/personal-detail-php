<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
     // Convert skills array to string
    $skills = isset($_POST['skills']) ? implode(", ", $_POST['skills']) : "";
    $address = $_POST['address'];

    // Constructing the string to write to the file
    $data = "Name: " . $name . "\n" . "Phone Number: " . $phone . "\n" . "Email: " . $email . "\n" . "Gender: " . $gender . "\n" . "Skills: " . $skills . "\n" . "Address: " . $address . "\n\n";

    //WRITE
    $file = fopen("biodata.txt","w");
    fwrite($file, $data);
    echo "Personal Details Written Successfully in 'biodata.txt' file"."<br><br>";
    fclose($file);
    
    //READ
    echo "Personal Details : "."<br><br>";
    $file = fopen("biodata.txt","r");
    while (($line = fgets($file)) !== false) {
        // Output each line (user detail)
        echo $line . "<br>";
    }
    fclose($file);

?>
