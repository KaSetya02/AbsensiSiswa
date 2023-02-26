<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Administrator</h2>
								<h5 class="text-white op-7 mb-2">Selamat Datang, <b class="text-warning"><?=$data['nama_lengkap']; ?></b> | Aplikasi Absensi Mahasiswa</h5>
							</div>
							<!-- <div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
								<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
							</div> -->
						</div>
					</div>
				</div>
<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">
										<center>
											<img src="../assets/img/LOGO POLITEKNIK TEDC BANDUNG.png" width="80">
											<br>
											<b>POLITEKNIK TEDC BANDUNG</b>
										</center>
									</div>
									<div class="card-category">
										<center>
Jl. Pesantren No.KM.2, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40513 
	<br>Kode Pos 40513
Telepon +62226645951
E-mail info@poltektedc.a.id
										</center>
									</div>
								
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
							<!-- 	<div class="card-header">
									<h4 class="card-title">Nav Pills With Icon (Horizontal Tabs)</h4>
								</div> -->
								<div class="card-body">

									<div class="row">

											<div class="col-sm-6 col-md-6">
												<div class="card card-stats card-primary card-round">
													<div class="card-body">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<i class="flaticon-users"></i>
																</div>
															</div>
															<div class="col-7 col-stats">
																<div class="numbers">
																	<a href="?page=siswa" style="text-decoration:none">
																	<p class="card-category">Mahasiswa</p>
																	<h4 class="card-title"><?php echo $jumlahSiswa; ?></h4></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-sm-6 col-md-6">
												<div class="card card-stats card-warning card-round">
													<div class="card-body">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<i class="fas fa-user-tie"></i>
																</div>
															</div>
															<div class="col-7 col-stats">
																<div class="numbers">
																	<a href="?page=guru" style="text-decoration:none"><p class="card-category">Guru/Dosen</p>
																	<h4 class="card-title"><?php echo $jumlahGuru; ?></h4></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="card card-stats card-success card-round">
													<div class="card-body">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<i class="fas fa-user-tie"></i>
																</div>
															</div>
															<div class="col-7 col-stats">
																<div class="numbers">
																	<a href="?page=kepsek" style="text-decoration:none">
																	<p class="card-category">Kepala Prodi</p>
																	<h4 class="card-title"><?php echo $jumlahKepsek; ?></h4>
																</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="card card-stats card-danger card-round">
													<div class="card-body">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<i class="flaticon-users"></i>
																</div>
															</div>
															<div class="col-7 col-stats">
																<div class="numbers">
																	<a href="?page=walas" style="text-decoration:none">
																	<p class="card-category">Wali Kelas</p>
																	<h4 class="card-title"><?php echo $jumlahWaliKelas; ?></h4></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>


									</div>
										



									
									
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- <div class="col-md-8">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Suggested People</div>
									<div class="card-list">
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
											
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Chad</div>
												<div class="status">CEO Zeleaf</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">John Doe</div>
												<div class="status">Back End Developer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						
					</div>
					
				</div>