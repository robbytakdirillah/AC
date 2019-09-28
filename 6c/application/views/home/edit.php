<!DOCTYPE html>
<html>

<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?=base_url('style/css/materialize.min.css')?>" media="screen,projection" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <br><br><br>
<div class="container">
                <form action="<?=site_url('Crud/ubah/'.$name[0]->id)?>" method="post">
				<div class="input-field col s12">
					<input id="name" name="name" type="text" class="validate" value="<?=$name[0]->name?>">
					<label for="name">Name</label>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<select name="work">
							<option value="" disabled selected>Choose your work...</option>
							<option value="1">Work</option>
							<option value="2">Frontend</option>
							<option value="3">Backend</option>
						</select>
						<label>Work</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<select name="salary">
							<option value="" disabled selected>Choose your salary...</option>
							<option value="1">Salary</option>
							<option value="2">Rp. 12.000.000</option>
							<option value="3">Rp. 10.000.000</option>
						</select>
						<label>Salary</label>
					</div>
                </div>
                <button class="btn green" type="submit">Edit</button>
                </form>
            </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
		$(document).ready(function () {
			$('select').formSelect();
		});

	</script>
</body>
</html>