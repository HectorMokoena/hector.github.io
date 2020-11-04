<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<title>View Data</title>


  

<div class="container">
<br>
        <div class="row">
           <div class="col-md-4"><div class="contact-image">
            <img src="https://smdtechnologies.co.za/wp-content/themes/smd/images/logo.png" alt="SMD Code Test"/>
            </div></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
           </div>
           <hr>
        <br>



        <div class="row">
             

                <div class="col-lg-12">
                
               

                <table class="table table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Nationality</th>
      <th scope="col">Animal</th>
      <th scope="col">Car</th>
      <th scope="col">Registration</th>
      <th scope="col">Colour</th>
      <th scope="col">Engine</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    
    include_once("phpScripts\dbconnection.php");

                         $sql = "SELECT * FROM `contactform`";
                         $result = $conn->query($sql);


                         if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                 

                            echo "<tr><td>" . $row["name"]. 
                            "</td><td>" . $row["email"] . 
                            "</td><td>". $row["dateofbirth"].
                            "</td><td>". $row["phone"].
                            "</td><td>". $row["gender"].
                            "</td><td>". $row["nationality"].
                             "</td><td>".$row["animal"].
                             "</td><td>".$row["carmake"].
                             "</td><td>".$row["registration"].
                             "</td><td>".$row["carcolour"].
                             "</td><td>".$row["engine"].
                             "</td><td>". "</td></tr>";
                            
                            }
                            
                            } else { echo "0 results"; }
                            $conn->close();
                            ?>


  </tbody>
</table>
</div>
                    
               
</div>


<hr>
<button type="submit" name="btnSubmit" onclick="window.location.href='/SMG Technologies/index.php'" class="btn btn-danger">Back</button>
            

