<?php
 

$name = $_GET['name'];

$api_url = "https://bio.torre.co/api/bios/".$name;

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$user_data = json_decode($json_data, true);
$user_image = $user_data['person']['picture'];


//print("<pre>".print_r($user_data,true)."</pre>");
//echo $user_data['person']['location']['name'];

 include 'inc/head-inc.php';
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-text-white">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <style> img {
            border-radius: 50%; 
            width: 200px; 
            border-style: solid; 
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
          width: 50%;
      } 
       </style>
       <img src="<?php echo $user_image; ?>"  alt="Avatar">
          <div class=" w3-container w3-text-black">
            <h2><?php echo $user_data['person']['name'];?> </h2>
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i><?php echo $user_data['person']['professionalHeadline'];?> </p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i><?php echo $user_data['person']['location']['name'];?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>xyz@mail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>000000000</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-blue"></i>Skills</b></p>
          <p><?php echo $user_data['strengths']['0']['name'];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:90%">90%</div>
          </div>
          <p><?php echo $user_data['strengths']['1']['name'];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p><?php echo $user_data['strengths']['2']['name'];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:75%">75%</div>
          </div>
          <p><?php echo $user_data['strengths']['3']['name'];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-blue"></i>Languages</b></p>
          <p><?php echo $user_data['languages']['0']['language'];?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-blue" style="height:24px;width:100%"></div>
          </div>
          <p><?php echo $user_data['languages']['1']['language'];?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-blue" style="height:24px;width:55%"></div>
          </div>
          <p>German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-blue" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
     <style> #Work{margin-top: 50px;} </style> <div id = "Work" class="w3-container w3-card w3-white w3-margin-bottom ">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $user_data['experiences']['0']['name'];?></b></h5>
          <p><?php echo $user_data['experiences']['0']['organizations']['0']['name'];?></p>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php  echo $user_data['experiences']['0']['fromMonth']; echo " "; echo $user_data['experiences']['0']['fromYear']; ?> - <span class="w3-tag w3-blue w3-round"><?php echo $user_data['experiences']['0']['toMonth']; echo " "; echo $user_data['experiences']['0']['toYear'];?></span></h6>
          <p><?php echo $user_data['experiences']['0']['responsibilities'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $user_data['experiences']['1']['name'];?></b></h5>
           <p><?php echo $user_data['experiences']['1']['organizations']['0']['name'];?></p>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php  echo $user_data['experiences']['1']['fromMonth']; echo " "; echo $user_data['experiences']['1']['fromYear']; ?> - <?php  echo $user_data['experiences']['1']['toMonth']; echo " "; echo $user_data['experiences']['1']['toYear']; ?></h6>
          <p><?php echo $user_data['experiences']['1']['responsibilities'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $user_data['experiences']['2']['name'];?></b></h5>
           <p><?php echo $user_data['experiences']['2']['organizations']['0']['name'];?></p>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php  echo $user_data['experiences']['2']['fromMonth']; echo " "; echo $user_data['experiences']['2']['fromYear']; ?> - <?php  echo $user_data['experiences']['2']['toMonth']; echo " "; echo $user_data['experiences']['2']['toYear']; ?></h6>
          <p><?php echo $user_data['experiences']['2']['responsibilities'];?></p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $user_data['education']['0']['organizations']['0']['name'];?></b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php  echo $user_data['education']['0']['fromMonth']; echo " "; echo $user_data['education']['0']['fromYear']; ?> - <?php  echo $user_data['education']['0']['toMonth']; echo " "; echo $user_data['education']['0']['toYear']; ?> </h6>
          <p><?php echo $user_data['education']['0']['name'];?></p>
          <hr>
        </div>
        <!--<div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $user_data['education']['1']['organizations']['0']['name'];?></b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php  echo $user_data['education']['1']['fromMonth']; echo " "; echo $user_data['education']['1']['fromYear']; ?> - <?php  echo $user_data['education']['1']['toMonth']; echo " "; echo $user_data['education']['1']['toYear']; ?> </h6>
          <p><?php echo $user_data['education']['1']['name'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $user_data['education']['2']['organizations']['0']['name'];?></b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php  echo $user_data['education']['2']['fromMonth']; echo " "; echo $user_data['education']['2']['fromYear']; ?> - <?php  echo $user_data['education']['2']['toMonth']; echo " "; echo $user_data['education']['2']['toYear']; ?> </h6>
          <p><?php echo $user_data['education']['2']['name'];?></p><br>
        -->
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>


<footer>
 <?php
    include 'inc/foot.inc.php';
  ?> 
</footer>

</body>





    















