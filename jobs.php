<?php
	include 'inc/head-inc.php';
?>
	<!--HEADER-->
	<header>
		<div class='container-fluid'>
			
		</div>
	</header>
	<!--MAIN-->
	<main class='container'>
		<div class='row'>
			<div class='col-md-3'><!--SECONDARY NAV MENU - COULD ANOTHER TAG BE USED INSTEAD OF DIV HERE? -->
				<h2>Jobs</strong></h2>
				
			</div>
			<br>
			<br>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://search.torre.co/opportunities/_search/?%5Boffset=1&size=10&aggregate=10%5D",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;
$job_data = json_decode($response, true);
$job_image = array();
for($i=0; $i<=10; $i++)
{
	$job_image[$i] = $job_data[results][$i][organizations][0][picture];
}

//print("<pre>".print_r($user_data,true)."</pre>");
?>

<br>
<br>
<br>

<?php

for ($i=0; $i<=10; $i++)
{
	
	echo "<div class='col-sm-4 col-lg-4 col-md-4'>";
	echo "<div class='thumbnail'>";
	if($job_image[$i])
	{
	echo '<img src="'.$job_image[$i].'"alt="Company Logo">';
    }
    else 
    {
    echo "<img src='http://placehold.it/320x150' alt='Company Logo' >";
    }
	echo "<h4 class ='pull-right'>";
	if($job_data[results][$i][remote] == 1)
		echo "Remote</h4>";
	else
		echo "Full-time</h4>";
	echo "<h4>".$job_data[results][$i][objective]."</h4><br>";
    echo "<p>Organization : ".$job_data[results][$i][organizations][0][name]."</p";
	echo "<br>";
	echo "<p>Compensation : ";
	if($job_data[results][$i][compensation])
	{
	print $job_data[results][$i][compensation][data][minAmount];
	echo " ";
    print $job_data[results][$i][compensation][data][currency];                            
    echo " ";                               
    print $job_data[results][$i][compensation][data][periodicity]; 
    }
    else
    {
    	echo "To be defined";
    }
	echo "</p>";
	echo "<div class='ratings'>";
	echo "<p class='pull-right'><a href='jobdata.php?jobID=".$job_data[results][$i][id]."'>Apply Now</a></p>";
	echo "<p>";
    echo "<span class='glyphicon glyphicon-send'></span>";
	echo"<a href = #> Share</a>";
	echo "</p>";
	echo "</div>";
	echo"</div>";
	echo"</div>";
	echo"</div>";
}

?>

	<div class='text-center'>
						<nav aria-label='Page navigation'>
							<ul class='pagination'>
								<li>
									<a href='#' aria-label='Previous'>
										<span aria-hidden='true'>&laquo;</span>
									</a>
								</li>
								<li><a href='#'>1</a></li>
								<li><a href='#'>2</a></li>
								<li><a href='#'>3</a></li>
								<li><a href='#'>4</a></li>
								<li><a href='#'>5</a></li>
								<li>
									<a href='#' aria-label='Next'>
										<span aria-hidden='true'>&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>


</div>
</div>
	
	</main>


   

  
	<!--FOOTER-->
	
    <?php
		include 'inc/foot.inc.php';
	?>