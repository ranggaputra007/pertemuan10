<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">
		
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-inverse" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class=""><a href="<?php echo site_url('pegawai') ?>">Biodata Pegawai</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
									<li class=""><a href="<?php echo site_url('login/logout/') ?>">Log Out</a></li>
									</ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php echo form_open_multipart('pegawai/update/'.$this->uri->segment(3)); ?>
								
								
								<?php if (validation_errors()==true) {?>
										<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<?php echo validation_errors();?>
										</div>	
									<?php }?>
								<legend>Tambah Data Pegawai</legend>
								<?php foreach ($pegawai as $key) { ?>
								<div class="form-group">
									<label for="">Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Input field" value="<?php echo $key['nama'] ?>">
									<label for="">Nip</label>
									<input type="text" class="form-control" id="nama" name="nip" placeholder="Input field" value="<?php echo $key['nip'] ?>">
									<label for="">Tanggal Lahir</label>
									<input type="date" class="form-control" id="nama" name="tgl_lahir" placeholder="Input field" value="<?php echo $key['tanggalLahir'] ?>">
									<label for="">Alamat</label>
									<input type="text" class="form-control" id="nama" name="alamat" placeholder="Input field" value="<?php echo $key['alamat'] ?>">
								</div>
								<div class="form-group">
									<label for="">Logo</label>
										<img class="img img-responsive" width="30%" height="30%" src="<?php echo base_url('') ?>assets/uploads/<?php echo $key['foto']; ?>?>">	
										<br>
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Club" value="<?php echo $key['foto']; ?>" disabled>
										
										<input type="file" name="userfile" size="20" value="" />
									</div>
								<!--<div class="form-group">
									<label for="">Foto</label>
									<input type="file" name="userfile" size="20" value="<?php echo $pegawai[0]->foto ?>">
								</div>-->
								<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?>
					<?php } ?>
					</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>