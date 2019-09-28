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
	<nav>
		<div class="nav-wrapper white">
			<div class="container">
				<a href="#" class="brand-logo"><img src="<?= base_url('img/arkademy.png') ?>" width="120px" alt="" srcset=""></a>
				<a href="#" class="brand-logo center black-text">ARKADEMY BOOTCAMP</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a class="waves-effect orange waves-light btn modal-trigger" href="#modal1">ADD</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<br><br>


	<div class="container">
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Work</th>
					<th>Salary</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<!-- ss -->
				<?php foreach($all_name as $name): ?>
				<tr>
					<td><?php echo $name->name; ?></td>
					<td><?php echo $name->work; ?></td>
					<td>Rp. <?php echo $name->salary; ?></td>
					<td>
						<a class="modal-trigger" href="<?=site_url('Crud/destroy/'.$name->id)?>"><i class="material-icons red-text">delete</i></a><a
							class="modal-trigger" href="<?=site_url('Crud/edit/'.$name->id)?>"><i class="material-icons green-text" data-id="<?php echo $name->name; ?>">edit</a></i>
					</td>
				</tr>
				<?php endforeach; ?>
				<!-- ssd -->
			</tbody>
		</table>
	</div>


	<!-- Modal ADD -->
	<div id="modal1" class="modal">
		<div class="modal-content">

			<form action="<?= site_url('Crud/simpan') ?>" method="post">
				<P>ADD DATA</P>
				<div class="container">

					<div class="input-field col s12">
						<input id="name" name="nama" type="text" class="validate">
						<label for="name">Name</label>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<select name="work">

								<option value="" disabled selected>Choose your work...</option>
								<?php foreach($all_work as $work): ?>
								<option value="1"><?php echo $work->name; ?></option>
								<?php endforeach; ?>
							</select>
							<label>Work</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<select name="salary">
								<option value="" disabled selected>Choose your salary...</option>
								<?php foreach($all_salary as $salary): ?>
								<option value="1"><?php echo $salary->salary; ?></option>
								<?php endforeach; ?>
							</select>
							<label>Salary</label>
						</div>

					</div>
				</div>
				<button class="btn green" type="submit">save</button>
			</form>

		</div>

	</div>



	<!-- Modal EDIT -->
	<div id="modal2" class="modal">
		<div class="modal-content">
            <P>EDIT DATA</P>
            
			<form action="<?= site_url('Crud/ubah') ?>" method="post">
			<div class="container">
				<div class="input-field col s12">
					<input id="name" type="text" class="validate">
					<label for="name">Name</label>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<select>
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
						<select>
							<option value="" disabled selected>Choose your salary...</option>
							<option value="1">Salary</option>
							<option value="2">Rp. 12.000.000</option>
							<option value="3">Rp. 10.000.000</option>
						</select>
						<label>Salary</label>
					</div>
				</div>
			</div>

		</div>
		<div class="container">
			<div class="modal-footer">
                <button class="waves-effect orange waves-light btn" type="submit">Ubah</button>
                </form>
			</div>
		</div>
	</div>



	<div id="modal3" class="modal">
		<div class="modal-content">
			<div class="container center">
				<p><i class="large material-icons green-text">check_circle</i></p>
				<P class="">DATA BERHASIL DIHAPUS</P>
			</div>
		</div>
	</div>


	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    </script>
    <script>
		$(document).ready(function () {
			$('.modal').modal();
		});

	</script>
	<script>
		$(document).ready(function () {
			$('select').formSelect();
		});

	</script>
</body>

</html>
