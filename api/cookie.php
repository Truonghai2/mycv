<?php

	function removeSpecialCharacter($str) {
		$str = str_replace('\\', '\\\\', $str);
		$str = str_replace('\'', '\\\'', $str);
		return $str;
	}

	function getPost($key) {
		$value = '';
		if(isset($_POST[$key])) {
			$value = $_POST[$key];
		}

		return removeSpecialCharacter($value);
	}

	function getGet($key) {
		$value = '';
		if(isset($_GET[$key])) {
			$value = $_GET[$key];
		}

		return removeSpecialCharacter($value);
	}


	if(!empty($_POST)) {
		$action = getPost('action');
		$id = getPost('id');
		$num = getPost('num');

		$cart = [];
		if(isset($_COOKIE['cart'])) {
			$json = $_COOKIE['cart']; // lưu theo chuổi json
			$cart = json_decode($json, true);
		}

		switch ($action) {
			case 'add':
				$isFind = false; // kiểm tra tồn tại ko
				for ($i=0; $i < count($cart); $i++) { 
						if($cart[$i]['id'] == $id) {
							$cart[$i]['num'] += $num;
							$isFind = true; // tìm thấy
							break;
						}		
				}

				if(!$isFind) { // k tìm thấy thì
					$cart[] = [
						'id'=>$id,
						'num'=>$num
					];
				}
				setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/'); // thời gian lưu : 30ngày -24h-60p-60s
				break;
			case 'delete':
				for ($i=0; $i < count($cart); $i++) { 
					if($cart[$i]['id'] == $id) {
						array_splice($cart, $i, 1);
						break;
					}
				}
				setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');
			break;
		}
	}
?>
