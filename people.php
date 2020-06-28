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
				<h2>Remoters</strong></h2>
				
			</div>
			<br>
			<br>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://search.torre.co/people/_search/?%5Boffset=1&size=10&aggregate=10%5D",
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
$user_data = json_decode($response, true);
$user_image = array();
for($i=0; $i<=10; $i++)
{
	$user_image[$i] = $user_data[results][$i][picture];
}

//iprint("<pre>".print_r($user_data,true)."</pre>");
?>

<br>
<br>
<br>


<?php


   
for ($i=0; $i<=10; $i++)
{
	
	echo "<div class='col-sm-4 col-lg-4 col-md-4'>";
	echo "<div class='thumbnail'>";
	echo '<img src="'.$user_image[$i].'">';
	echo "<h4 class ='pull-right'>";
	print $user_data[results][$i][compensations][freelancer][amount];
	echo " ";
    print $user_data[results][$i][compensations][freelancer][currency];                            
    echo " ";                               
    print $user_data[results][$i][compensations][freelancer][periodicity]; 
    echo "</h4>";                             
    echo "<h4><a href='employeedata.php?name=".$user_data[results][$i][username]."'>";
	print $user_data[results][$i][name];
	echo "</a>";
	echo "</h4>";
	echo "<p>";
	print $user_data[results][$i][professionalHeadline];
	echo "</p>";
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