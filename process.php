<?php 
	session_start();
	// server timezone
	
	date_default_timezone_set('America/Los_Angeles');
	$time_stamp = date("F j Y h:i");

	if (isset($_POST['action']) && $_POST['action'] == 'reset')  
	{
		session_destroy();
		header('location: index.php');
	}

	if (!isset($_SESSION['activities']))
	{
		$_SESSION['activities'] = array();
		$_SESSION['total_gold'] = 0;
		
	}		

	if (isset($_POST['action']) && $_POST['action'] == 'farm') 
			{
				$random_gold = rand(10,20); // random gold is generated
				
						$_SESSION['total_gold'] = $_SESSION['total_gold'] + $random_gold;
						array_unshift($_SESSION['activities'], '<p class="won">You entered a ' .  $_POST['action'] . " and you earned " . $random_gold . " gold" . "(" .  $time_stamp . ")</p>");
						header('location: index.php');
						

				}
	if (isset($_POST['action']) && $_POST['action'] == 'cave') 
			{
				$random_gold = rand(5,10); // random gold is generated
				
						$_SESSION['total_gold'] = $_SESSION['total_gold'] + $random_gold;
						array_unshift($_SESSION['activities'], '<p class="won">You entered a ' .  $_POST['action'] . " and you earned " . $random_gold . " gold" . "(" .  $time_stamp . ")</p>");
						header('location: index.php');
					

				}

	if (isset($_POST['action']) && $_POST['action'] == 'house') 
	{
		$random_gold = rand(2,5); // random gold is generated
		
				$_SESSION['total_gold'] = $_SESSION['total_gold'] + $random_gold;
				array_unshift($_SESSION['activities'], '<p class="won">You entered a ' .  $_POST['action'] . " and you earned " . $random_gold . " gold" . "(" .  $time_stamp . ")</p>");
				header('location: index.php');
			

		}

if (isset($_POST['action']) && $_POST['action'] == 'casino') 
	{
		$random_gold = rand(0,50); // random gold is generated
		$random_chance = rand(1,2); // random chance is generated
		if ($random_chance > 1) // the chance determines if the user wins gold or loses it
			{
				$_SESSION['total_gold'] = $_SESSION['total_gold'] -  $random_gold;
				array_unshift($_SESSION['activities'], '<p class="lost">You entered a ' .  $_POST['action'] . " and you lost " . $random_gold . " gold" . "(" .  $time_stamp . ")</p>");
				header('location: index.php');
			}
		else
			{
				$_SESSION['total_gold'] = $_SESSION['total_gold'] + $random_gold;
				array_unshift($_SESSION['activities'], '<p class="won">You entered a ' .  $_POST['action'] . " and you earned " . $random_gold . " gold" . "(" .  $time_stamp . ")</p>");
				header('location: index.php');
			}

		}

		



 ?>