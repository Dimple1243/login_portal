 <?php
 if (isset($_POST["submit"])){
    $username=$_POST["user"];
    $password=$_POST["password"];
    if(!empty($username)&&!empty($password)){
        $link=mysqli_connect("localhost","root","@Dimple123","login");
        if($link==false){
            die(mysqli_connect_error());
        }
        $sql="INSERT INTO users(Username,Password) VALUES ('$username','$password')";
        if(mysqli_query($link,$sql)){
        header('Location:http://localhost/phppage/welcome.html');
            
        }
        else{
            echo "Something went wrong";
        }

    }


    else{
        
        echo "Please prove the user details!!!";
    }
 }
 ?>