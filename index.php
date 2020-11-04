<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="javaScripts\insert.js"></script>
<!------ Include the above in your HEAD tag ---------->

<title>SMD Technologies</title>


  

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
             

                <div class="col-md-6" >
                    <form method="post" action="phpScripts\savedata.php">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Name" value="" required="true" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Email Address" value="" required="true" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Phone Number" value="" required="true" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtDoB" class="form-control" placeholder="Date of Birth" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtGender" class="form-control" placeholder="Gender" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtNationality" class="form-control" placeholder="Nationality" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtFavouriteAnimal" class="form-control" placeholder="Favourite Animal" value="" />
                        </div>
                        <div class="form-group">
                                 <button type="submit" id= "sub" name="btnSubmit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
                    

                    
            <div class="col-md-6">
                 <form method="post" action="phpScripts\savedata1.php">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Name" value="" required="true" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Email Address" value="" required="true" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Phone Number" value="" required="true" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtCar" class="form-control" placeholder="Car Make" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtReg" class="form-control" placeholder="Registration Number" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtCarColour" class="form-control" placeholder="Car Colour" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEngineNumber" class="form-control" placeholder="Engine Number" value="" />
                        </div>
                        <div class="form-group">
                                 <button type="submit" name="btnSubmit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            
</div>


<hr>

<button type="submit" name="btnSubmit" onclick="window.location.href='/SMG Technologies/view.php'" class="btn btn-success">View Data</button>


