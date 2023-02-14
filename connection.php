<?php
 if (isset($_POST["submit"])){
    $username=$_POST["username"];
    $phone=$_POST["phone"];
    $country=$_POST["country"];
    $dateofbirth=$_POST["dob"];
    $dateofleavingindia=$_POST["dol"];
    $dateofReachingindia=$_POST["dor"];
    $passport=$_POST["passport"];
    // $Diease=$_POST["yesno"];
    $yes=$_POST["radio"];
    $NomineeName=$_POST["NomineeName"];
    $reNomineeName=$_POST["RelationNominee"];
    $EmergencyCon=$_POST["contact"];
    $Emergencydet=$_POST["Edetails"];


    if(!empty($username)&&!empty($phone) && !empty($country)&& !empty($dateofbirth)&& !empty($dateofleavingindia)&& !empty($dateofReachingindia)&& !empty($passport)&& !empty($yes)&& !empty($NomineeName)&& !empty($reNomineeName)&& !empty($EmergencyCon)&& !empty($Emergencydet)){
        $link=mysqli_connect('localhost','root','@Dimple123','login');
        if($link==false){
            die(mysqli_connect_error());
        }
        $sql="INSERT INTO  travel_data(Name_as_per_Passport,Contact_No,Destination_Country,Date_of_Birth,Date_of_leaving_india,Date_of_Reaching_india,Passport_No,Any_preexisting_Diease,Nominee_Name,Relationship_with_Nominee_Name,Emergency_Contact_No,Emergency_Contact_Details) VALUES ('$username','$phone','$country','$dateofbirth','$dateofleavingindia','$dateofReachingindia','$passport','$yes','$NomineeName','$reNomineeName','$EmergencyCon','$Emergencydet')";
        if(mysqli_query($link,$sql)){
            echo "Recorded inserted successfully";
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
    
