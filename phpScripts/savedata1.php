<?php 

$conn = mysqli_connect("localhost", "root", "", "smddb");
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$name = $_POST["txtName"];
$email = $_POST["txtEmail"];
$phone = $_POST["txtPhone"];

if( isset($_POST['txtDoB']) ){
    $dob = $_POST["txtDoB"];
}else{
    $dob = "NULL";
}


if( isset($_POST['txtGender']) ){
    $gender = $_POST["txtGender"];
}else{
    $gender = "NULL";
}


if( isset($_POST['txtNationality']) ){
    $nationality = $_POST["txtNationality"];
}else{
    $nationality = "NULL";
}


if( isset($_POST['txtFavouriteAnimal']) ){
    $animal = $_POST["txtFavouriteAnimal"];
}else{
    $animal = "NULL";
}



if( isset($_POST['txtCar']) ){
    $car = $_POST["txtCar"];
}else{
    $car = "NULL";
}


if( isset($_POST['txtReg']) ){
    $registration = $_POST["txtReg"];
}else{
    $registration = "NULL";
}


if( isset($_POST['txtCarColour']) ){
    $carColour = $_POST["txtCarColour"];
}else{
    $carColour = "NULL";
}

if( isset($_POST['txtEngineNumber']) ){
    $engine = $_POST["txtEngineNumber"];
}else{
    $engine = "NULL";
}





//Check if record exist before adding
$query = "SELECT * FROM contactform WHERE email = '$email'";
$results = mysqli_query($conn, $query);
$rows = mysqli_num_rows($results);


if($rows > 0){

// Update record if it exist
update($email, $car, $registration, $carColour, $engine, $conn);

}

else{

// Add new record if doesn't exist
add($name, $email , $phone, $dob, $gender, $nationality, $animal, $car, $registration, $carColour, $engine, $conn);

}


//Add record function
function add($name, $email , $phone, $dob, $gender, $nationality, $animal, $car, $registration, $carColour, $engine,$conn ) {

    $sql = "INSERT INTO `contactform` (`name`, `email`, `phone`, `dateofbirth`, `gender`, `nationality`, `animal`, `carmake`, `registration`, `carcolour`, `engine`) VALUES ('$name', '$email', '$phone', '$dob', '$gender', '$nationality', '$animal', '$car', '$registration', '$carColour', '$engine')";
            if(mysqli_query($conn, $sql)){
               
                    echo '<script type="text/javascript">'; 
    echo 'alert("Records added successfully");'; 
    echo 'window.location.href = "http://127.0.0.1/SMG%20Technologies/";';
     echo '</script>';
            } else{
                     echo "ERROR: Could not able to execute $sql. Number already exist ";
            }
 
                    // Close connection
                            mysqli_close($conn);
                }






//Update record function
function update($email, $car, $registration, $carColour, $engine, $conn){

    
$sql = "UPDATE contactform SET carmake='$car', registration='$registration', 	carcolour='$carColour', engine='$engine' WHERE email='$email'";

if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Exist! Data Updated Successfully");'; 
    echo 'window.location.href = "http://127.0.0.1/SMG%20Technologies/";';
     echo '</script>';
    
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

}
?>