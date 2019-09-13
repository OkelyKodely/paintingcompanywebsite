<?php include 'header.php'; ?>
<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

if($name != null && $email != null && $phone != null && $message != null) {
	$conn = oci_connect("sa", "coppersink21", "XE");
    $ssql = "insert into contactphillips (name, email, phone, message, datetime) values ('".$name."','".$email."','".$phone."','".$message."',current_timestamp)";
    $stid1 = oci_parse($conn, $ssql);
    oci_execute($stid1);
    echo "<script>alert('You contectd us.');</script>";
}
?>
<div class="non" style="text-align:center;padding:24px;">
<h1 style="position:relative;left:-299px">Contact (Get a FREE Quote)</h1>
<br>
<div id="content">
    <div class="contact-content">
      <div class="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-8" id="contact-form">
              
              <div class="modal fade" id="contactModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title"><b>Contact Us</b></h4>
            </div>
            <div class="modal-body"><div id="SUCCMSG"></div></div>            
        </div>
    </div>    
</div>
              <form action="" method="post" id="contactform1" name="contactform">
                <div id="SUCCMSG"></div>
                <div class="row">
                  <div class="control-group col-xs-12">
                    <div class="controls">
                      <input type="text" placeholder="Name" id="name" name="name" value="" maxlength="50" size="16" class="form-control required">
                    </div>
                  </div>
                  <div class="control-group col-xs-12">
                    <div class="control-group">
                      <div class="controls">
                        <input type="text" placeholder="Email" id="email" name="email" value="" maxlength="60" size="16" class="form-control required email">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clear"></div>
                <div class="row">
                  <div class="control-group col-xs-12">
                    <div class="control-group">
                      <div class="controls">
                        <input type="text" placeholder="Phone" id="phone" name="phone" value="" maxlength="60" size="16" class="form-control required">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clear"></div>
                <div class="control-group col-lg-12">
                  <div class="row">
                    <div class="control-group">
                      <div class="controls">
                        <textarea placeholder="Message" class="form-control" id="message" name="message" title="Message"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clear"></div>
                <div class="row">
                  <div class="control-group col-lg-12">
                    <hr>
                    <input type="submit" class="btn btn-warning btn-lg btn-round" value="SEND MESSAGE">
                  </div>
                </div>
              </form>
            </div>
            <!-- end contactfort -->
            <div class="col-md-4 touch" style="position:relative;top:-100px">
              <h1>Business Hours</h1>
              <p class="mb50">Monday -Friday: 9am to 5 pm <br>
                Saturday: 9am to 2pm <br>
                Sunday: Closed</p>              <div class="phone-box mb30"> <i class="fa fa-phone"></i>
                <h2>Office:</h2>
                <p>
                  <a href="tel:8883017767">(888) 301-PROS</a>
                </p>
              </div>
              <div class="clear"></div>
              <div class="mail-box mb30"> <i class="fa fa-envelope"></i>
                <h2>Email:</h2>
                <a href="mailto:info@aapaintcompany.com">
                <p>
                  info@phillipspaintco.com                </p>
                </a> </div>
              <div class="clear"></div>
              <div class="phone-box mb30"> <i class="fa fa-map-marker"></i>
                <h2>Address</h2>
                <p>
                  26396 Phillips Ave. Unit A                </p>
                <p>Cansylvania, CA 91561 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="map">
        <div id="map"></div>
      </div>
      <!-- End Map -->
    </div>
    <!-- End Contact Content -->
</div>
<?php include 'footer.php'; ?>