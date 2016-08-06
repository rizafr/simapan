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
						<a href="#">
							<img src="<?php echo base_url(); ?>aset/img/agus.JPG" alt="">
						</a>
					</div>
					<div class="weather-category twt-category ctr">
						<h2><?php echo $this->session->userdata('admin_nama'); ?></h2>
						<p>Level : <?php echo $this->session->userdata('admin_level');?></p>
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
							<h1 class="countUpSuratBelumDisposisi">
								0
							</h1>
							<p>Surat Belum Disposisi</p>
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
					<!--Grafik Rekapitulasi-->
					<div id="grafik" class="wow slideInRight" data-wow-duration="2s" ></div>
				</div>
				<div class="col-lg-6">
					<!--Grafik Rekapitulasi-->
					<div id="grafikSifatSurat" class="wow slideInRight" data-wow-duration="2s" ></div>
				</div>
				<div class="col-lg-6">
					<!--Grafik Rekapitulasi-->
					<div id="grafikTujuanDisposisi" class="wow slideInRight" data-wow-duration="2s" ></div>
				</div>
				<div class="col-lg-6">
					<!--Grafik Rekapitulasi-->
					<div id="grafikKategoriIntruksi" class="wow slideInRight" data-wow-duration="2s" ></div>
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
				chart: {
					type: 'column'
				},
				title: {
					text: 'Grafik Surat Masuk'
				},
				xAxis: {
					categories: [
						'Jan',
						'Feb',
						'Mar',
						'Apr',
						'May',
						'Jun',
						'Jul',
						'Aug',
						'Sep',
						'Oct',
						'Nov',
						'Dec'
					],
					crosshair: true
				},
				yAxis: {
					min: 0,
					title: {
						text: 'jumlah'
					}
				},
				tooltip: {
					headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
					pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.f} surat</b></td></tr>',
					footerFormat: '</table>',
					shared: true,
					useHTML: true
				},
				plotOptions: {
					column: {
						pointPadding: 0.2,
						borderWidth: 0
					}
				},
				series: [{
					name: 'Total Surat Masuk',
					data: [<?= $countSuratMasuk; ?>]

				}, {
					name: 'Surat Belum Ada Laporan',
					data: [<?= $countSuratMasukNotReported?>]

				}, {
					name: 'Surat Belum Disposisi',
					data: [<?= $countSuratBelumDisposisi?>]

				}, {
					name: 'Surat Selesai',
					data: [<?= $countSuratMasukSelesai?>]

				}]
			});
		});

		$(function () {
			$('#grafikSifatSurat').highcharts({
				chart: {
					type: 'column'
				},
				title: {
					text: 'Grafik Berdasarkan Tujuan Disposisi'
				},
				xAxis: {
					categories: [
						<?php
						foreach ($countSifatSurat as $sifat_surat) {
							echo "'".$sifat_surat->disposisi_ke."',";
						}
						?>
					],
					crosshair: true
				},
				yAxis: {
					min: 0,
					title: {
						text: 'jumlah'
					}
				},
				tooltip: {
					headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
					pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.f} surat</b></td></tr>',
					footerFormat: '</table>',
					shared: true,
					useHTML: true
				},
				plotOptions: {
					column: {
						pointPadding: 0.2,
						borderWidth: 0
					}
				},
				series: [
				<?php
				foreach ($countSifatSurat as $sifat_surat) {
					echo "{";
					echo "name: '".$sifat_surat->disposisi_ke."',";
					echo "data: [".$sifat_surat->jum."],";
					echo "},";
				}
				?>

				]
			});
		});

		$(function () {
			$('#grafikTujuanDisposisi').highcharts({
				chart: {
					type: 'column'
				},
				title: {
					text: 'Grafik Berdasarkan Sifat Surat'
				},
				xAxis: {
					categories: [
						<?php
						foreach ($countTujuanDisposisi as $tujuan_disposisi) {
							echo "'".$tujuan_disposisi->sifat_surat."',";
						}
						?>
					],
					crosshair: true
				},
				yAxis: {
					min: 0,
					title: {
						text: 'jumlah'
					}
				},
				tooltip: {
					headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
					pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.f} surat</b></td></tr>',
					footerFormat: '</table>',
					shared: true,
					useHTML: true
				},
				plotOptions: {
					column: {
						pointPadding: 0.2,
						borderWidth: 0
					}
				},
				series: [
				<?php
				foreach ($countTujuanDisposisi as $tujuan_disposisi) {
					echo "{";
					echo "name: '".$tujuan_disposisi->sifat_surat."',";
					echo "data: [".$tujuan_disposisi->jum."],";
					echo "},";
				}
				?>

				]
			});
		});

		$(function () {
			$('#grafikKategoriIntruksi').highcharts({
				chart: {
					type: 'column'
				},
				title: {
					text: 'Grafik Berdasarkan Kategori Intruksi'
				},
				xAxis: {
					categories: [
						<?php
						$kategori = array('1' => 'Tidak Ada Laporan', '2' => 'Ada Laporan');
						foreach ($countKategoriIntruksi as $kategori_intruksi) {
							echo "'".$kategori[$kategori_intruksi->kode_intruksi]."',";
						}
						?>
					],
					crosshair: true
				},
				yAxis: {
					min: 0,
					title: {
						text: 'jumlah'
					}
				},
				tooltip: {
					headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
					pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.f} surat</b></td></tr>',
					footerFormat: '</table>',
					shared: true,
					useHTML: true
				},
				plotOptions: {
					column: {
						pointPadding: 0.2,
						borderWidth: 0
					}
				},
				series: [
				<?php
					$kategori = array('1' => 'Tidak Ada Laporan', '2' => 'Ada Laporan');
					foreach ($countKategoriIntruksi as $kategori_intruksi) {
					echo "{";
					echo "name: '".$kategori[$kategori_intruksi->kode_intruksi]."',";
					echo "data: [".$kategori_intruksi->jum."],";
					echo "},";
				}
				?>

				]
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

		function countUpSuratBelumDisposisi(count)
		{
			var div_by = 100,
				speed = Math.round(count / div_by),
				$display = $('.countUpSuratBelumDisposisi'),
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

		countUpSuratBelumDisposisi(<?= $countSuratBelumDisposisi?>);


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

<?php if(($countSuratMasukNotReported > 0) || ($countSuratBelumDisposisi > 0)) {
	$data = array(
		'countSuratMasukNotReported' => $countSuratMasukNotReported,
		'countSuratBelumDisposisi' => $countSuratBelumDisposisi
		);
	$this->load->view('admin/notifikasi/notifikasi', $data);
 } ?>
