<?php 
echo md5('12345');
echo "<br>";
echo password_hash('123456', PASSWORD_DEFAULT);
echo "<br>";
var_dump(password_verify('1234567', '$2y$10$kqThzY0xML33a2D3XmdvC.sqQvjslYbNyJD0IpGZni9xvWWpv2DHy'));


$arr = [
		'name' => 'admin',
		'email' => 'admin@gmail.com',
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id'=> 2
	];
extract($arr);
echo "$name - $email - $password - $role_id";
 ?>