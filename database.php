<?php
//Connect to mysql server and create database
$connect=new mysqli("localhost","root","") or die($connect->error);
$query="CREATE DATABASE Firezend"or die($connect->error);
$connect->query($query);
$connect->close();

//Connect to database and create table "Customers"
$connect=new mysqli("localhost","root","","Firezend") or die("$connect->error");
$query="CREATE TABLE Customers (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Address VARCHAR(30) NOT NULL,
email VARCHAR (30),
OrderDate TIMESTAMP)";

$connect->query($query);
$connect->close();
?>
