<div class="clearfix">
	<div class="row">
		<div class="col-lg-12">
			
			<div class="navbar navbar-inverse wow fadeInDown ">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Beranda</a>
					</div>
					<div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
						
					</div><!-- /.nav-collapse -->
				</div><!-- /.container -->
			</div><!-- /.navbar -->
			
		</div>
	</div>
	<section id="main-content wow fadeInDown">
		<section class="wrapper">
			<div class="col-lg-6">
				<!--widget start-->
				<section class="panel wow slideInLeft" data-wow-duration="2s">
					<div class="twt-feed blue-bg">
						<h2>Selamat datang</h2>
						<h1><?php echo $this->session->userdata('admin_nama'); ?></h1>
						<p>Level : <?php echo $this->session->userdata('admin_level');?></p>
						<a href="#">
							<img src="<?php echo base_url(); ?>aset/img/agus.JPG" alt="">
						</a>
					</div>
					<div class="weather-category twt-category">
						<ul>
							<li class="active">
								<h5>320</h5>
								Tweet
							</li>
							<li>
								<h5>1245</h5>
								Following
							</li>
							<li>
								<h5>24657</h5>
								Followers
							</li>
						</ul>
					</div>
				</section>
				<!--widget end-->
			</div>
			
			<!--state overview start-->
			<div class="row state-overview wow slideInRight" data-wow-duration="2s">
				<div class="col-lg-3 col-sm-6">
					<section class="panel">
						<div class="symbol terques">
							<i class=" icon-envelope"></i>
						</div>
						<div class="value">
							<h1 class="countSuratMasuk">
								0
							</h1>
							<p>Surat Masuk</p>
						</div>
					</section>
				</div>
				<div class="col-lg-3 col-sm-6">
					<section class="panel">
						<div class="symbol red">
							<i class=" icon-envelope"></i>
						</div>
						<div class="value">
							<h1 class="countSuratKeluar">
								0
							</h1>
							<p>Surat Keluar</p>
						</div>
					</section>
				</div>

				<div class="col-lg-3 col-sm-6">
					<section class="panel">
						<div class="symbol red">
							<i class=" icon-envelope"></i>
						</div>
						<div class="value">
							<h1 class="countSuratMasukSelesai">
								<?= $countSuratMasukSelesai?>
							</h1>
							<p>Surat Selesai</p>
						</div>
					</section>
				</div>

				<div class="col-lg-3 col-sm-6">
					<section class="panel">
						<div class="symbol red">
							<i class=" icon-envelope"></i>
						</div>
						<div class="value">
							<h1 class=" countSuratMasukNotReported">
								<?= $countSuratMasukNotReported?>
							</h1>
							<p>Surat Belum Ada Laporan</p>
						</div>
					</section>
				</div>
			</div>
			<!--state overview end-->	
			
			<div class="row">				
				<div class="col-lg-6">
					<!--tab nav start-->
					<section class="panel wow slideInLeft" data-wow-duration="2s">
						<header class="panel-heading tab-bg-dark-navy-blue ">
							<ul class="nav nav-tabs">
								<li class="active">
									<a data-toggle="tab" href="#disposi">Disposisi</a>
								</li> 
								<li class="">
									<a data-toggle="tab" href="#home">Surat Masuk</a>
								</li>
								<li class="">
									<a data-toggle="tab" href="#about">Surat Keluar</a>
								</li>
							</ul>
						</header>
						<div class="panel-body">
							<div class="tab-content">
								<div id="disposisi" class="tab-pane active">
									<table class="table table-hover personal-task">
										<tbody>
											<tr>
												<td>1</td>
												<td>
													Disposisi
												</td>
												<td>
													<span class="badge bg-important">75%</span>
												</td>
												<td>
													<div id="work-progress1"></div>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													Product Delivery
												</td>
												<td>
													<span class="badge bg-success">43%</span>
												</td>
												<td>
													<div id="work-progress2"></div>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													Payment Collection
												</td>
												<td>
													<span class="badge bg-info">67%</span>
												</td>
												<td>
													<div id="work-progress3"></div>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>
													Work Progress
												</td>
												<td>
													<span class="badge bg-warning">30%</span>
												</td>
												<td>
													<div id="work-progress4"></div>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>
													Delivery Pending
												</td>
												<td>
													<span class="badge bg-primary">15%</span>
												</td>
												<td>
													<div id="work-progress5"></div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="home" class="tab-pane">
									<table class="table table-hover personal-task">
										<tbody>
											<tr>
												<td>1</td>
												<td>
													Surat Masuk
												</td>
												<td>
													<span class="badge bg-important">75%</span>
												</td>
												<td>
													<div id="work-progress1"></div>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													Product Delivery
												</td>
												<td>
													<span class="badge bg-success">43%</span>
												</td>
												<td>
													<div id="work-progress2"></div>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													Payment Collection
												</td>
												<td>
													<span class="badge bg-info">67%</span>
												</td>
												<td>
													<div id="work-progress3"></div>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>
													Work Progress
												</td>
												<td>
													<span class="badge bg-warning">30%</span>
												</td>
												<td>
													<div id="work-progress4"></div>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>
													Delivery Pending
												</td>
												<td>
													<span class="badge bg-primary">15%</span>
												</td>
												<td>
													<div id="work-progress5"></div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="about" class="tab-pane"><table class="table table-hover personal-task">
									<tbody>
										<tr>
											<td>1</td>
											<td>
												Surat Keluar
											</td>
											<td>
												<span class="badge bg-important">75%</span>
											</td>
											<td>
												<div id="work-progress1"></div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												Product Delivery
											</td>
											<td>
												<span class="badge bg-success">43%</span>
											</td>
											<td>
												<div id="work-progress2"></div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												Payment Collection
											</td>
											<td>
												<span class="badge bg-info">67%</span>
											</td>
											<td>
												<div id="work-progress3"></div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												Work Progress
											</td>
											<td>
												<span class="badge bg-warning">30%</span>
											</td>
											<td>
												<div id="work-progress4"></div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												Delivery Pending
											</td>
											<td>
												<span class="badge bg-primary">15%</span>
											</td>
											<td>
												<div id="work-progress5"></div>
											</td>
										</tr>
									</tbody>
								</table></div>
								<div id="profile" class="tab-pane"><table class="table table-hover personal-task">
									<tbody>
										<tr>
											<td>1</td>
											<td>
												Posisi Penahanan
											</td>
											<td>
												<span class="badge bg-important">75%</span>
											</td>
											<td>
												<div id="work-progress1"></div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												Product Delivery
											</td>
											<td>
												<span class="badge bg-success">43%</span>
											</td>
											<td>
												<div id="work-progress2"></div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												Payment Collection
											</td>
											<td>
												<span class="badge bg-info">67%</span>
											</td>
											<td>
												<div id="work-progress3"></div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												Work Progress
											</td>
											<td>
												<span class="badge bg-warning">30%</span>
											</td>
											<td>
												<div id="work-progress4"></div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												Delivery Pending
											</td>
											<td>
												<span class="badge bg-primary">15%</span>
											</td>
											<td>
												<div id="work-progress5"></div>
											</td>
										</tr>
									</tbody>
								</table></div>
								<div id="contact" class="tab-pane"><table class="table table-hover personal-task">
									<tbody>
										<tr>
											<td>1</td>
											<td>
												Posisi Perkara
											</td>
											<td>
												<span class="badge bg-important">75%</span>
											</td>
											<td>
												<div id="work-progress1"></div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												Product Delivery
											</td>
											<td>
												<span class="badge bg-success">43%</span>
											</td>
											<td>
												<div id="work-progress2"></div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												Payment Collection
											</td>
											<td>
												<span class="badge bg-info">67%</span>
											</td>
											<td>
												<div id="work-progress3"></div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												Work Progress
											</td>
											<td>
												<span class="badge bg-warning">30%</span>
											</td>
											<td>
												<div id="work-progress4"></div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												Delivery Pending
											</td>
											<td>
												<span class="badge bg-primary">15%</span>
											</td>
											<td>
												<div id="work-progress5"></div>
											</td>
										</tr>
									</tbody>
								</table></div>
							</div>
						</div>
					</section>
					<!--tab nav start-->
				</div>
				
				<div class="col-lg-6">
					<!--Grafik Rekapitulasi-->
					<div id="grafik" class="wow slideInRight" data-wow-duration="2s" ></div>
				</div>
			</div>
			<br />

		</section>
	</section>
</div>
<script type="text/javascript">
	
	$(document).ready(function () {
		
		$(function () {
			$('#grafik').highcharts({
				title: {
					text: 'Grafik Rekapitulasi',
					x: -20 //center
				},
				subtitle: {
					text: 'Tahun 2015',
					x: -20
				},
				xAxis: {
					categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
						'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
				},
				yAxis: {
					title: {
						text: 'Jumlah'
					},
					plotLines: [{
						value: 0,
						width: 1,
						color: '#808080'
					}]
				},
				tooltip: {
					valueSuffix: ' data'
				},
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle',
					borderWidth: 0
				},
				series: [{
					name: 'Surat Masuk',
					data: [<?= $countSuratMasuk?>]
				}, {
					name: 'Surat Keluar',
					data: [0]
				}]
			});
		});

		function countUp(count)
		{
			var div_by = 100,
				speed = Math.round(count / div_by),
				$display = $('.countSuratMasuk'),
				run_count = 1,
				int_speed = 24;

			var int = setInterval(function() {
				if(run_count < div_by){
					$display.text(speed * run_count);
					run_count++;
				} else if(parseInt($display.text()) < count) {
					var curr_count = parseInt($display.text()) + 1;
					$display.text(curr_count);
				} else {
					clearInterval(int);
				}
			}, int_speed);
		}

		countUp(<?= $countSuratMasuk?>);

		function countUpSuratMasukSelesai(count)
		{
			var div_by = 100,
				speed = Math.round(count / div_by),
				$display = $('.countSuratmasukSelesai'),
				run_count = 1,
				int_speed = 24;

			var int = setInterval(function() {
				if(run_count < div_by){
					$display.text(speed * run_count);
					run_count++;
				} else if(parseInt($display.text()) < count) {
					var curr_count = parseInt($display.text()) + 1;
					$display.text(curr_count);
				} else {
					clearInterval(int);
				}
			}, int_speed);
		}

		countUpSuratMasukSelesai(<?= $countSuratMasukSelesai?>);

		function countUpSuratMasukNotReported(count)
		{
			var div_by = 100,
				speed = Math.round(count / div_by),
				$display = $('.countSuratMasukNotReported'),
				run_count = 1,
				int_speed = 24;

			var int = setInterval(function() {
				if(run_count < div_by){
					$display.text(speed * run_count);
					run_count++;
				} else if(parseInt($display.text()) < count) {
					var curr_count = parseInt($display.text()) + 1;
					$display.text(curr_count);
				} else {
					clearInterval(int);
				}
			}, int_speed);
		}

		countUpSuratMasukNotReported(<?= $countSuratMasukNotReported; ?>);

		function countUp4(count)
		{
			var div_by = 100,
				speed = Math.round(count / div_by),
				$display = $('.count4'),
				run_count = 1,
				int_speed = 24;

			var int = setInterval(function() {
				if(run_count < div_by){
					$display.text(speed * run_count);
					run_count++;
				} else if(parseInt($display.text()) < count) {
					var curr_count = parseInt($display.text()) + 1;
					$display.text(curr_count);
				} else {
					clearInterval(int);
				}
			}, int_speed);
		}

		countUp4(5328);


//SCROLL TO TOP----------------------------------------------------
		$(document).ready(function(){

			// hide #back-top first
			$(".go-top").hide();

			// fade in #back-top
			$(function () {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 100) {
						$('.go-top').fadeIn();
					} else {
						$('.go-top').fadeOut();
					}
				});

				// scroll body to 0px on click
				$('.go-top').click(function () {
					$('body,html').animate({
						scrollTop: 0
					}, 600);
					return false;
				});
			});

		});


	});
	</script>
<?php if($countSuratMasukNotReported > 0) {
	$this->load->view('admin/notifikasi/notifikasi', $countSuratMasukNotReported);
 } ?>
