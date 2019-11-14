<?php 
require_once './commons/db.php';
// tạo dump data cho bảng roles
$roles = [
	['name' => 'member', 'status' => 1],
	['name' => 'admin', 'status' => 1]
];

foreach ($roles as $key => $value) {
	extract($value)
	$sqlQuery = "insert into roles (name, status)
				value ('$name', $status)";
	execQuery($sqlQuery);
}


// tạo dump data cho bảng user
$users = [
	[
		'name' => 'Đào Hải Long',
		'email' => 'longdh@gmail.com',
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id'=> 1
	],
	[
		'name' => 'Đào Hải Hổ',
		'email' => 'hodh@gmail.com',
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id'=> 1
	],
	[
		'name' => 'admin',
		'email' => 'admin@gmail.com',
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id'=> 2
	]
];


foreach ($users as $key => $value) {
	extract($value);
	$sqlQuery = "insert into users (name, email, password, role_id)
				value ('$name', '$email', '$password', '$role_id')";
	execQuery($sqlQuery);
}


 ?>