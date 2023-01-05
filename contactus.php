<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$website = $_POST['website'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$address = $_POST['address'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];
$to = "mmsonu67@gmail.com";
$headers = "From: $name<$email>";
$message="From :- $name \n\nCompany :- $company \n\nEmail :- $email \n\nWebsite :- $website \n\nPhone :- $phone \n\nCity :- $city \n\nAddress :- $address\n\nSubject :- $subject \n\nMessage :- $comment \n\n";
If(mail($to, $subject, $message, $headers))
{
echo "<h3>Email sent :- Thanks for contacting us, we will get back to you shortly.</h3>";
}
else
{
echo"please try again later";
}
}
?>

<?php include("includes/header-link.php"); ?>
<div id="contactus"></div>
<?php include("includes/header.php"); ?>
<style>
.link3{
	display:none;}
	
.link, .link2, .hide-link3{
	display:block;}

#wh-widget-send-button{
	margin-bottom:48px !important;}
</style>
<div class="contactus-wrapper">
 <div class="container">
  <div class="row">
   <div class="contact-wrap">
   <div class="text-center myfont mycolor hireme pb-3"><h1>Hire Me Today!</h1></div>
    <form action=" " method="post"  id="contact_form">
      <div class="form-group row">
        <label class="col-form-label text-right col-xl-4 col-lg-4 col-md-4 col-sm-2 pr-0 mob-none">Name</label>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
         <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-user"></i></span>
          <input  name="name" placeholder="Name" type="text" required="" class="form-control">
         </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label text-right col-xl-4 col-lg-4 col-md-4 col-sm-2 pr-0 mob-none">Company</label>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
         <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-building"></i></span>
          <input name="company" placeholder="Company" id="" class="form-control" type="text">
         </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label text-right col-xl-4 col-lg-4 col-md-4 col-sm-2 pr-0 mob-none">E-Mail</label>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
         <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
          <input name="email" placeholder="Email" id="" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="" type="email">
         </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label text-right col-xl-4 col-lg-4 col-md-4 col-sm-2 pr-0 mob-none">Phone#</label>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
         <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-phone"></i></span>
          <input name="phone" placeholder="(+91) 9570261642" id="" class="form-control" pattern="[7|8|9][0-9]{9}" minlength="10" maxlength="10" required="" type="text">
         </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label text-right col-xl-4 col-lg-4 col-md-4 col-sm-2 pr-0 mob-none">Website</label>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
         <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-internet-explorer"></i></span>
          <input name="website" placeholder="Website" id="" class="form-control" type="text">
         </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label text-right col-xl-4 col-lg-4 col-md-4 col-sm-2 pr-0 mob-none">City</label>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
         <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-building-o"></i></span>
          <input name="city" placeholder="City" id="" class="form-control" type="text">
         </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label text-right col-xl-4 col-lg-4 col-md-4 col-sm-2 pr-0 mob-none">Address</label>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
         <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-address-card"></i></span>
          <input name="address" placeholder="Address" id="" class="form-control" type="text">
         </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label text-right col-xl-4 col-lg-4 col-md-4 col-sm-2 pr-0 mob-none">Subject</label>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
         <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-book"></i></span>
          <input name="subject" placeholder="Subject" id="" class="form-control" type="text">
         </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label text-right col-xl-4 col-lg-4 col-md-4 col-sm-2 pr-0 mob-none">Message</label>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
         <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-pencil"></i></span>
          <textarea class="form-control" name="comment" placeholder="Message" id=""></textarea>
         </div>
        </div>
      </div>
      <button type="submit" class="btn btn-info float-right text-white" name="submit">Send <span class="fa fa-paper-plane"></span></button>
    </form>
   </div>
  </div>
 </div>
</div>

<a href="#contactus"><i class="fa fa-arrow-circle-up back-to-top" data-aos="zoom-in-left"></i></a>
<?php include("includes/footer.php"); ?>

