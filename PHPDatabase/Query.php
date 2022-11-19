<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection Error" .$conn->connect_error);
}

//selecting data from table
// $sql = "SELECT id, title, author, published_year FROM Books WHERE title = 'Compiler Design'";//Where query
$sql = "SELECT id, title, author, published_year FROM Books ORDER BY published_year";//Order By
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table><tr><th>ID</th><th>Title</th><th>Author</th><th>Published year</th></tr>";
    //output data of each row
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" .$row['id']. "</td><td>" .$row['title']. "</td><td>" .$row['author']. "</td><td>" .$row['published_year']. "</td></tr>"; 
    }
    echo "</table><br>";
}
else{
    echo "O entries<br>";
}

//Update data

$upd = "UPDATE Books SET title = 'Laravel' WHERE id = 2";

//sql to delete record
// $del = "DELETE FROM Books WHERE id = 7";

if($conn->query($upd) == TRUE){
    echo "Record Updated successfully.<br>";
}
else{
    echo "Connection Error " .$conn->error;
}
$conn->close();
?>