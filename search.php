<?php
	include 'inc/head-inc.php';
?>

</style><div id="page-container">
<style>
	#content-wrap {
  			padding-bottom: 2.5rem;    /* Footer height */
		}
</style>
<div id="content-wrap">
<form action="people.php">
  <style>
		#Search1
		{
			margin-top:  50px;
			margin-left: 50px;
		}
  </style>
  <button id ="Search1" name="Search People" type="submit">Search People</button>
 </form>
<br>
<form action = "jobs.php">
 	<style>
		#Search2
		{
			margin-top:  10px;
			margin-left: 50px;
			margin-bottom: 580px;
		}
  </style>
  <button id ="Search2" name="Search Jobs" type="submit">Search Jobs</button>
</form>
</div>

<!--FOOTER-->
<?php
	include 'inc/foot.inc.php';
?>
</div>


