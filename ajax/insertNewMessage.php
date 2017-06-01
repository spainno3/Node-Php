<?php 
include_once( dirname( __FILE__ ) . '/../include/Database.class.php' );

$name = $_POST[ 'name' ];
$message = $_POST[ 'message' ];

$sql = "INSERT INTO message (name, message, created) VALUES ('". $name ."','". $message ."', '".date('Y-m-d')."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>