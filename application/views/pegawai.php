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
						<h1 align="center">Daftar Pegawai</h1>	
						<br>
						<?=$this->session->flashdata('pesan')?>
						<br>
						<a class="btn btn-primary" href="<?php echo site_url()?>/pegawai/create" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>		Tambah Pegawai</a>
						</br>
						<br>
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Nip</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
										<th>Foto</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($pegawai_list as $key) { ?>
									<tr>
										<td><?php echo $key->nama ?></td>
										<td><?php echo $key->nip ?></td>
										<td><?php echo $key->tanggalLahir ?></td>
										<td><?php echo $key->alamat ?></td>
										 
										<td><img width="100" height="100" src="<?=base_url()?>assets/uploads/<?=$key->foto?>"></td>
										<td>
											<a href="<?php echo site_url('jabatan/index/').$key->id ?>" type="button" class="btn btn-info">Jabatan</a> 
											<a href="<?php echo site_url('anak/index/').$key->id ?>" type="button" class="btn btn-success">Anak</a>
											<a href="<?php echo site_url('pegawai/update/').$key->id ?>" onclick="return confirm('Anda Yakin Akan Mengedit')" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>

											<a href="<?php echo site_url('pegawai/delete/').$key->id ?>" onclick="return confirm('Anda Yakin Akan Menghapus')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>
											<!--<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit</button>
											<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModall">Delete</button>-->
										
									</tr>
								<?php } ?>
								</tbody>
							</table>
							
							<div class="modal fade" id="myModal" role="dialog">
    							<div class="modal-dialog">
    
      							<!-- Modal content-->
      							<div class="modal-content">
        							<div class="modal-header">
          								<button type="button" class="close" data-dismiss="modal">&times;</button>
          								<h4 align="center" class="modal-title">Apakah Anda Yakin ingin Mengedit Data?</h4>
        							</div>
        							<div align="center" class="modal-body">
          								<a href="<?php echo site_url('pegawai/update/').$key->id ?>" type="button" class="btn btn-warning">Iya</a>
          								<button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
        							</div>
        							<!--<div class="modal-footer">
          								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        							</div>-->
      							</div>
      
    							</div>
 							</div>
							<div class="modal fade" id="myModall" role="dialog">
    							<div class="modal-dialog">
    
      							<!-- Modal content-->
      							<div class="modal-content">
        							<div class="modal-header">
          								<button type="button" class="close" data-dismiss="modal">&times;</button>
          								<h4 align="center" class="modal-title">Apakah Anda Yakin Ingin Menghapus Data?</h4>
        							</div>
        							<div align="center" class="modal-body">
          								<a href="<?php echo site_url('pegawai/delete/').$key->id ?>" type="button" class="btn btn-danger">Iya</a>
          								<button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
        							</div>
        							<!--<div class="modal-footer">
          								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        							</div>-->
      							</div>
      
    							</div>
 							</div>
 							

						</div>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
    		$('#example').DataTable();
		} );	
		</script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>