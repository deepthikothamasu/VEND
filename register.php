<?php include("header.php"); 
$rechargeby = $_SESSION["admin_id"]; 
function generateRandomString($length = 6) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>  
<!-- start content -->  
<div class="content">
   <div class="page-title">
      <div class="container">
         <h2>Register</h2>
      </div>
   </div>
   <div class="separator"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div id="ContactFormDiv"></div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post" action="register_db.php" name="myForm" enctype="multipart/form-data">
               <div class="form-group">
                  <label class="col-lg-3 control-label ">Your Name *</label>
                  <div class="col-lg-4">
                     <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-3 control-label ">Email *</label>
                  <div class="col-lg-4">
                     <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-3 control-label ">Phone *</label>
                  <div class="col-lg-4">
                     <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-3 control-label ">Gender *</label>
                  <div class="col-lg-4">
                     <select class="form-control" name="gender" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-3 control-label ">Address</label>
                  <div class="col-lg-5">
                     <textarea name="address" class="form-control" rows="3" required></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-3 control-label ">Password *</label>
                  <div class="col-lg-4">
                     <input type="password" class="form-control" name="regpassword" id="regpassword" placeholder="password" required>
                  </div>
               </div>
               <div class="form-group">
                   <label class="col-lg-3 control-label "></label>
                  <div class="col-lg-4">
                       <span> <input type="text" name="emp" readonly="readonly" value="<?php echo generateRandomString(); ?> "> <br><input type="button" value="Generate Captcha" onclick="randomStringToInput(this)"> </span>
                   </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-3 control-label ">Captcha  *</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Captcha code place here" required>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-3 control-label"></label>
                  <div class="col-lg-4">
                      <input type="submit" value="Submit" name="Submit" onclick="return validateForm();" class="btn btn-success">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- end content -->
<script>
function randomStringToInput(clicked_element)
{
    var self = $(clicked_element);
    var random_string = generateRandomString(5);
    $('input[name=emp]').val(random_string);
    
}
function generateRandomString(string_length)
{
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    var string = '';
    for(var i = 0; i <= string_length; i++)
    {
        var rand = Math.round(Math.random() * (characters.length - 1));
        var character = characters.substr(rand, 1);
        string = string + character;
    }
    return string;
}
</script>
<script type="text/javascript">
   function validateForm()
   {  	
        var N = document.forms["myForm"]["emp"].value;
        var C = document.forms["myForm"]["captcha"].value;
        if (N != C) 
        {
            alert("Captcha doesn't Match");
            return false;
        }
   }
</script>
<?php include("footer.php"); ?>