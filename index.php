<?php 
require_once './commons/db.php';
$sql = "select * from users";
$users = execQuery($sql, true);
 ?>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $u): ?>
			<?php extract($u); ?>
			<tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
			</tr>
		<?php endforeach ?>
		
	</tbody>
</table>