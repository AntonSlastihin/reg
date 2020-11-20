<?php 
require_once "bootstrap.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Регистрация</title>
</head>
<body>
	
<style type="text/css">
	.has-danger{
		color: red;
	}
</style>
<div class="contaienr">
	<div class="row justify-content-center">
		<div class="col-4">
			<form id="registration" method="POST">
				<div class="form-group ">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email">
					<div class="form-control-feedback"></div>
				</div>
				<div class="form-group ">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name">
					<div class="form-control-feedback"></div>
				</div>
				<div class="form-group ">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password">
					<div class="form-control-feedback"></div>
				</div>
				<div class="form-group ">
					<label for="repeat-password">Repeat Password</label>
					<input type="password" class="form-control" id="repeat-password" name="repeat-password">
					<div class="form-control-feedback"></div>
				</div>
				<button type="submit" class="btn btn-primary">Зарегестрироваться</button>
			</form>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-10">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Зарегестрирован</th>
					</tr>
				</thead>
				<tbody>
					<?php if (!empty($users)): ?>
						<?php foreach ($users as $user): ?>
							<tr>
								<th ><?= $user['id'] ?></th>
								<td><?= $user['name'] ?></td>
								<td><?= $user['email'] ?></td>
								<td><?= $user['created_at'] ?></td>
							</tr>
						<?php endforeach ?>
					<?php endif ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="script.js"></script>
</body>
</html>

