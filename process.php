<?php
$conn=new mysqli("localhost","root","","form");
// if($conn->connect_error){
//     die("data is not connected".$conn->connect_error);

// }
// echo "data is connected is successfully";
if(isset($_POST['submit'])){

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $query="insert into respose(name,email,gender) VALUES ('$name','$email','$gender')";
        $run=mysqli_query($conn,$query) or die(mysqli_error());
    if($run){
        echo "form submitted successfully";
    }
    else{
        echo "form is not submitted";
        // echo "form is not submitted".mysqli_connect_error() it is found to what error in your code;
    }
}
else{
    echo "all fields required";
}
}
?>