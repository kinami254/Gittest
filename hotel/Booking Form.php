<html lang="en"><head>Kitale Hospital Management System</head><body style="margin-top:50px;">
  <h1>[ BOOKING Form ]</h1><br>
  <div class="container">
    <div class="row">
            <!--Form Containe Start Here-->
     <form class="form-horizontal" method="post">
       <div class="col-sm-6">
         <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="" readonly="readonly" class="form-control" name="name" placeholder="Enter Your Frist Name" required="">
          </div>
        </div>
      </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Email :</h4></div>
          <div class="col-sm-8">
              <input type="email" value="" readonly="readonly" class="form-control" name="email" placeholder="Enter Your Email-Id" required="">
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Mobile :</h4></div>
          <div class="col-sm-8">
              <input type="number" value="" readonly="readonly" class="form-control" name="phone" placeholder="Type Your Phone Number" required="">
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Address :</h4></div>
          <div class="col-sm-8">
              <textarea name="address" class="form-control" readonly="readonly" placeholder="Enter Your Address"></textarea>
          </div>
        </div>
        </div>

         <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Country</h4></div>
          <div class="col-sm-8">
              <input type="text" class="form-control" readonly="readonly" value="" name="city" placeholder="Enter Your City Name" required="">
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4></h4></div>
          <div class="col-sm-8">
              <input type="hidden" name="state" class="form-control" placeholder="Enter Your State Name" required="">
          </div>
        </div>
        </div>

		      <div class="form-group">
            <div class="row">
           <div class="control-label col-sm-4"><h4></h4></div>
          <div class="col-sm-8">
              <input type="hidden" name="zip" class="form-control" placeholder="Enter Your Zip Code" required="">
          </div>
        </div>
        </div>
        </div>

           <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Room Type:</h4></div>
                  <div class="col-sm-7">
                <select class="form-control" name="room_type" required="">
                  <option>Deluxe Room</option>
                  <option>Luxurious Suite</option>
                  <option>Standard Room</option>
                  <option>Suite Room</option>
                  <option>Twin Deluxe Room</option>
               </select>
              </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>check In Date :</h4></div>
                  <div class="col-sm-7">
                  <input type="date" name="cdate" class="form-control" required="">
                  </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                 <div class="control-label col-sm-5"><h4>Check In Time:</h4></div>
                   <div class="col-sm-7">
                    <input type="time" name="ctime" class="form-control" required="">
                  </div>
              </div>
            </div>
          </div>
           <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Check Out Date :</h4></div>
                <div class="col-sm-7">
                  <input type="date" name="codate" class="form-control" required="">
                </div> 
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <label class="control-label col-sm-5"><h4 id="top">Occupancy :</h4></label>
                <div class="col-sm-7">
                  <div class="radio-inline"><input type="radio" value="single" name="Occupancy" required="">Single</div>
                  <div class="radio-inline"><input type="radio" value="twin" name="Occupancy" required="">Twin</div>
                  <div class="radio-inline"><input type="radio" value="dubble" name="Occupancy" required="">Dubble</div>
                </div> 
              </div>
            </div>
            <input type="submit" value="submit" name="savedata" class="btn btn-danger" required="">
          </div>
          </form><br>
        </div>
      </div>
    </div>
  
<title>Kitale hotel management system</title><!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
    <div class="container-fluid">
	<div class="col-sm-4 hov">
		<img src="logo/logo2.png" width="200px" height="50px"><br><br>
    <p class="text-justify">A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator and other kitchen facilities, upholstered chairs, a flat screen television, and en-suite bathrooms. Small, lower-priced hotels may offer only the most basic guest services and facilities. Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, business center</p><br>
      <center><a href="about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>
 


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding:20px;
  font-size:20px;
  text-align:center;
  margin: 5px 2px;
  border-radius:50%;
   text-decoration:none;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google-plus{
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>


<!-- Add font awesome icons -->
<a href="https://www.facebook.com/" class="fa fa-facebook" target="blank" title="facebook"></a>
<a href="https://twitter.com/" class="fa fa-twitter" target="blank" title="twitter"></a>
<a href="https://google-plus.com/" class="fa fa-google-plus" target="blank" title="google-plus"></a>
<a href="https://linkedin.com/" class="fa fa-linkedin" target="blank" title="linkedin"></a>
<a href="https://youtube.com/" class="fa fa-youtube" target="blank" title="youtube"></a>
<a href="https://instagram.com/" class="fa fa-instagram" target="blank" title="instagram"></a>     

 
	</div>&nbsp;&nbsp;
	<div class="col-sm-4 text-justify">
	       <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>Days,88 Kitale,Nairobi</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>daysnanjala@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>0723217577</p><br><br><br>
     <center><img src="image/devlop/img2.png" class="img-responsive" style="width:200px;height:150px;border-radius:100%;"></center>
	</div>&nbsp;

  <!--Feedback Start Here-->
	<div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Feedback</div>
          <div class="panel-body">
                  <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="n" class="form-control" id="#" placeholder="Enter Your Name" required="">
        </div>
        <div class="form-group">
          <input type="Email" name="e" class="form-control" id="#" placeholder="Email" required="">
        </div>
        <div class="form-group">
          <input type="Number" name="mob" class="form-control" id="#" placeholder="Mobile Number" required="">
        </div>
        <div class="form-group">
          <textarea type="Text" name="msg" class="form-control" id="#" placeholder="Type Your Massage" required=""></textarea>
        </div>
          <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified" required="">
      </form>     
        </div>
       </div>
      </div>
    </div>

    <!--Feedback Panel Close here-->

  </div>
</footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->

<footer class="container-fluid text-center" style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
  <p>Develope By Daysnanjala | All Rights Reserved 2020</p>
</footer>

<!--Footer2 start Here-->

</body></html>