<?php
require_once("modules/Users/Users.php");

	function getUsers()
	{
		$users = new Users();
					
		$userArr = $users->retrieve_users();
		foreach($userArr as $k => $v)
		{
			$userArr[$k]['userid'] = '19x'.$userArr[$k]['userid'];
		}
		echo json_encode($userArr);
	}
	
	getUsers();
	//did this make it to git
	