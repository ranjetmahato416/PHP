<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if($conn->connect_error){
    die ("Connection Failed " .$conn->connect_error. '<br>');
}
//Create Table
// $sql = "CREATE TABLE Books(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     title VARCHAR(20) NOT NULL,
//     author VARCHAR(20) NOT NULL,
//     published_year VARCHAR(10) NOT NULL)";
// if($conn->query($sql) == TRUE){
//     echo "Table Created.<br>";
// }
// else{
//     echo "Table creation error " .$conn->error. '<br>';
// }

//Insert Multiple Data in table

// $sql = "INSERT INTO Books(title, author, published_year)
// VALUES ('JAVA', 'Ranjeet', '2019'); ";

// $sql .= "INSERT INTO Books(title, author, published_year)
// VALUES ('Database', 'Parashar', '2018'); ";

// $sql .= "INSERT INTO Books(title, author, published_year)
// VALUES ('Microprocessor', 'Ashmita', '2020'); ";

//prepare and bind
$stmt = $conn->prepare("INSERT INTO Books(title, author, published_year) VALUES (?, ? , ?)");
$stmt->bind_param("sss", $title, $author, $published_year);


//set parameters and exceute
$title = 'C++';
$author = 'Manish';
$published_year = '2021';
$stmt->execute();

$title = 'CSharp';
$author = 'Anjal';
$published_year = '2022';
$stmt->execute();

$title = 'Compiler Design';
$author = 'Ranjeet';
$published_year = '2022';
$stmt->execute();

// if($conn->multi_query($sql) == TRUE){
//     //Get last id inserted
//     $last_id = $conn->insert_id;
//         echo "Records created successfully. Last inserted ID is " .$last_id. "<br>";
//     }
// else{
//         echo "Record creation error ".$sql. '<br>' .$conn->error. '<br>';
//     }

echo "Records inserted successfully.<br>";
$stmt->close();
$conn->close();
?>