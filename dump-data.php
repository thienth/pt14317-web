<?php 
require_once './commons/db.php';
require_once './libs/Faker/autoload.php';

$faker = Faker\Factory::create();

// var_dump($faker->name('male'));
// var_dump($faker->name('female'));
// var_dump($faker->company);
// var_dump($faker->realText);
// var_dump($faker->imageUrl(640, 480));
// var_dump($faker->image('public/images', 640, 480));

// die;
// tạo dump data cho bảng roles
// $roles = [
// 	['name' => 'member', 'status' => 1],
// 	['name' => 'admin', 'status' => 1]
// ];

// foreach ($roles as $key => $value) {
// 	extract($value);
// 	$sqlQuery = "insert into roles (name, status)
// 				value ('$name', $status)";
// 	// execQuery($sqlQuery);
// }


// // tạo dump data cho bảng user
// $users = [
// 	[
// 		'name' => 'Đào Hải Long',
// 		'email' => 'longdh@gmail.com',
// 		'password' => password_hash('123456', PASSWORD_DEFAULT),
// 		'role_id'=> 1
// 	],
// 	[
// 		'name' => 'Đào Hải Hổ',
// 		'email' => 'hodh@gmail.com',
// 		'password' => password_hash('123456', PASSWORD_DEFAULT),
// 		'role_id'=> 1
// 	],
// 	[
// 		'name' => 'admin',
// 		'email' => 'admin@gmail.com',
// 		'password' => password_hash('123456', PASSWORD_DEFAULT),
// 		'role_id'=> 2
// 	]
// ];


// foreach ($users as $key => $value) {
// 	extract($value);
// 	$sqlQuery = "insert into users (name, email, password, role_id)
// 				value ('$name', '$email', '$password', '$role_id')";
// 	// execQuery($sqlQuery);
// }

// // categories
// for ($i=0; $i < 20; $i++) { 
// 	try{
// 		$name = $faker->name;
// 		$desc = $faker->realText;
// 		$desc = str_replace("'", "\'", $desc);
// 		$showMenu = rand(0, 1);
// 		$sqlQuery = "insert into categories 
// 					(name, description, show_menu)
// 				values
// 					('$name', '$desc', $showMenu)";
// 		// execQuery($sqlQuery);
// 	}catch(Exception $ex){
// 		var_dump($ex->getMessage());
// 	}
// }

// products
// tạo dữ liệu mẫu cho bảng products
$insertQuery = "";
	for ($i=0; $i < 30; $i++) { 
		
		$name = $faker->name;
		$sku = strtoupper(uniqid());
		$cate_id = rand(1, 20);
		$disabled_comment = rand(0, 1);
		$price = rand(1000, 99999);
		$sale_price = rand(1000, 99999);
		$detail = $faker->realText($maxNbChars = 200, $indexSize = 2);
		$detail = str_replace("'","\'", $detail);

		$feature_image = $faker->image('public/images', 640, 480, 'cats');
		$feature_image = str_replace("public/", "", $feature_image);
		// $feature_image = str_replace("\\", "/", $feature_image);
		
		$view_count = rand(0, 999999);
		$status = 1;
		$rating = rand(1, 5);

		$sqlQuery = "insert into products 
						(name, 
						sku, 
						cate_id, 

						disabled_comment, 
						price, 
						sale_price,
						
						detail,
						feature_image,
						view_count,

						status,
						rating)
				values ('$name', 
						'$sku', 
						'$cate_id', 

						'$disabled_comment', 
						'$price', 
						'$sale_price',
						
						'$detail',
						'$feature_image',
						'$view_count',

						'$status',
						'$rating')";
		$insertQuery .= $sqlQuery . ";";
	}
echo $insertQuery;
// product_galleries

 ?>