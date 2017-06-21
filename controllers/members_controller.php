<?php
echo "Hello members_controller!";

// コントローラーのクラスをインスタンス化
$controller = new MembersController();

// アクション名によって実行するメソッドを変える
switch ($action) {
	case 'signup':
		$controller->signup();
		break;
	case 'login':
		$controller->login();
		break;
	
	default:
		# code...
		break;
}

class MembersController {

	// members/signup というURLで呼び出される
	function signup(){
		echo 'm signup';

		$resouce = 'members';
		$action = 'signup';

		include('views/layouts/application.php');

	}

	// members/login
	function login(){
		echo 'm login';

		$resouce = 'members';
		$action = 'login';

		include('views/layouts/application.php');

	}

	// members/check
	function check(){
		echo 'm check';

		$resouce = 'members';
		$action = 'check';

		include('views/layouts/application.php');

	}

	// members/check
	function thanks(){
		echo 'm thanks';

		$resouce = 'members';
		$action = 'thanks';

		include('views/layouts/application.php');

	}

	// members/logout
	function logout(){
		echo 'm logout';

		

	}

}


?>