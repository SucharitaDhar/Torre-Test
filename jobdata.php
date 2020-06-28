<?php

$jobID = $_GET['jobID'];


$api_url = "https://torre.co/api/opportunities/".$jobID;

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$job_data = json_decode($json_data, true);

// Traverse array and display user data
//print("<pre>".print_r($job_data,true)."</pre>");
 include 'inc/head-inc.php';
?>


</body>
</div>
<style>#heading { margin-top : 70px;}</style>
<h1 id="heading"><?php echo $job_data['objective'];?></h1>
<h3><?php echo $job_data['details']['0']['code'];?></h3>
<p><?php echo $job_data['details']['0']['content'];?></p>
<h3><?php echo $job_data['details']['1']['code'];?></h3>
<p><?php echo $job_data['details']['0']['content'];?></p>
<h3><?php echo $job_data['details']['2']['code'];?></h3>
<p><?php echo $job_data['details']['2']['content'];?></p>
<h3><?php echo $job_data['details']['3']['code'];?></h3>
<p><?php echo $job_data['details']['3']['content'];?></p>
<h3><?php echo $job_data['details']['4']['code'];?></h3>
<p><?php echo $job_data['details']['4']['content'];?></p>
<h3><?php echo $job_data['details']['5']['code'];?></h3>
<p><?php echo $job_data['details']['5']['content'];?></p>
<h3><?php echo $job_data['details']['6']['code'];?></h3>
<p><?php echo $job_data['details']['6']['content'];?></p>

</div>


<footer>
 <?php
    include 'inc/foot.inc.php';
  ?> 
</footer>
</body>

