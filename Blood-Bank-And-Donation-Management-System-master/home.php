<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
  <link rel="stylesheet" href="Style/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="Style/Homestyle.css"> -->
 
<style>


  .headimg
  {
    height:10cm; 
    width:30cm; 
    margin:1cm; 
    display:inline-block;
  }

  #title
  {
    text-align:left;
    font-size:15mm; 
    margin:1cm;
    font-family:arial;
    font-weight:bolder;

  }





  table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
  font-size:4mm;
}

th, td {
  padding: 15px;
}


.cards
{
  display:flex;
  justify-content:space-around;
  /* height:30cm; */
  margin-top:2.5cm;
  margin-bottom:0cm;
}

.card
{
  height: 14.5cm;
  width : 9cm;
}


.donorinfo
{
  padding:2cm;
}

.row
{
  padding:2cm;
  font-size:5mm;
}




</style>





</head>

<body>




<?php 
$active ='about';
include('head.php');
?>

<br><br>



<div style="display:flex; ">
  <h1 id="title">Welcome to BloodBank &<br> Donor Management System</h1>
  <img src="image\_107317099_blooddonor976.jpg" alt="Photo" class="headimg" >
</div>

  





<!-- CARDS -->

<div class="cards">

<div class="card" >
  <img class="card-img-top" src="image/Urgent-need.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">The Need For Blood</h5>
    <p class="card-text">
      people needing the most blood include those: 
      <br>1) Being treated for cancer
      <br>2) Undergoing orthopedic surgeries
      <br>3) Undergoing cardiovascular surgeries
      <br>4) Being treated for inherited blood disorders
</p>
    <a href="https://www.redcrossblood.org/local-homepage/news/article/blood-donation-importance.html#:~:text=Blood%20is%20essential%20to%20help,eligible%20people%20donate%20blood%20yearly." class="btn btn-primary">Read More</a>
  </div>
</div>




<div class="card">
  <img class="card-img-top" src="image/Bloodtips.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Blood Tips</h5>
    <p class="card-text">
      1) You must be in good health.
      <br>2) Hydrate and eat a healthy meal before your donation.
      <br>3) You’re never too old to donate blood.
      <br>4) Rest and relaxed.
      <br>5) Don’t forget your FREE post-donation snack.</p>
    <a href="https://www.fortishealthcare.com/blog/prepare-blood-donation/#:~:text=Getting%20lot%20of%20water%20or,hours%20prior%20to%20the%20donation." class="btn btn-primary">Read More</a>
  </div>
</div>



<div class="card" >
  <img class="card-img-top" style= "height:6.8cm;" src="image/help.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">How you could Help?</h5>
    <p class="card-text">
  Donating blood can help people who : 
<br>1)go through disasters.
<br>2)lose blood during major surgeries.
<br>3)have lost blood because of a gastrointestinal bleed.
<br>4) Women who have serious complications during pregnancy.

  
  
  </p>
    <a href="https://www.cafonline.org/my-personal-giving/long-term-giving/resource-centre/five-reasons-to-give-to-charity " class="btn btn-primary">Read More</a>
  </div>
</div>

</div>



<div class="donorinfo">
    <h2 style="margin:1cm;">Blood Donors</h2>

<table style="width:100%" >
<tr>
  <th>Donor Name</th>
  <th>Blood Group</th>
  <th>Mobile No.</th>
  <th>Gender</th>
  <th>Age</th>
  <th>Address</th>
</tr>

<?php
            include 'conn.php';
            $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
            <tr>
              <td><?php echo $row['donor_name']; ?></td>
              <td><?php echo $row['blood_group']; ?></td>
              <td> <?php echo $row['donor_number']; ?></td>
              <td><?php echo $row['donor_gender']; ?></td>
              <td> <?php echo $row['donor_age']; ?></td>
              <td><?php echo $row['donor_address']; ?></td>
            </tr>
      <?php }} ?>


</table>

</div>





<br>
<br>
<br>
<br>
        <!-- /.row -->








        <!-- Features Section -->
        <div class="row">
          <h2>BLOOD GROUPS</h2>
          <br><br>

            <div class="col-lg-6">
                <p>
                Blood group of any human being will mainly fall in any one of the following groups.
                <br><strong>A positive or A negative</strong>
                <br><strong>B positive or B negative</strong>
                <br><strong>O positive or O negative</strong>
                <br><strong>AB positive or AB negative.</strong>
                <br>Your blood group is determined by the genes you inherit from your parents.
                <br>A healthy diet helps ensure a successful blood donation, and also makes you feel better!
              </p>

            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="image\blood_donationcover.jpeg" alt="blood image" >
            </div>
        </div>
        <!-- /.row -->



        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
              The most common blood type is O, followed by type A. Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.
   For emergency transfusions, blood group type O negative blood is the variety of blood that has the lowest risk of causing serious reactions for most people who receive it. Because of this, it's sometimes called the universal blood donor type.
            </p>
              </div>
            <div class="col-md-4">
                <a style="padding:4mm 7mm;font-size:5mm" href="donate_blood.php" class="btn btn-info">Become a Donor </a>
            </div>
        </div>

    </div>
  </div>

</div>

</body>

</html>
