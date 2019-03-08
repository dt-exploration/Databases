<?php
/* Inserting Into table (query and multi query)

$connect=new mysqli("localhost","root","","firezend");

$query="INSERT INTO Customers (Name,Address,email) VALUES('Rex', 'Drenovac 3',
                                                           'rex@gmail.com');";
$query.="INSERT INTO Customers (Name, Address, email) VALUES('Milan', 'Obilicev Venac 5',
                                                            'mt@yahoo.com')";
$connect->multi_query($query) or die("$connect->error");
}
$connect->close();
*/

// Selecting from table
$connect = new mysqli("localhost","root","","firezend") or die("$connect->error");
$query = " SELECT * FROM Customers WHERE name='Dulen' ";
$result = $connect->query($query) or die("$connect->error");

for ($i=0; $i < $result->num_rows; $i++) {

    $row = $result->fetch_assoc();

    $matrix[$i]["id"] = $row["id"]  ;
    $matrix[$i]["Name"] = $row["Name"]  ;
    $matrix[$i]["Address"] = $row['Address']  ;
    $matrix[$i]["email"] = $row["email"]  ;
    $matrix[$i]["OrderDate"] = $row["OrderDate"]  ;

}

$connect->close();

for ($j=0; $j < $result->num_rows; $j++) {
    echo $matrix[$j]['Address'];
    echo "<br>";
}


//Prepared statements
//$connect=new mysqli("localhost","root","","firezend") or die($connect->error);
/*
$insert=$connect->prepare("INSERT INTO Customers (Name, Address, email) VALUES (?,?,?)");
$insert->bind_param("sss",$name,$address,$email);

$name="Iven";
$address="Maksima Gorkog 4A";
$email="iven@gmail.com";
$insert->execute();

$name="Borko";
$address="Jovana Pasica 3";
$email="bk2132@gmail.com";
$insert->execute();

$insert->close();
$connect->close();
*/

/*  Update table from Database
$query="UPDATE Customers SET Address='Maksima Gorkog 4' WHERE Name='Iven'; ";
$query.="DELETE FROM Customers WHERE id='2' ";
$connect->multi_query($query) or die($connect->error);
$connect->close();
*/
?>
