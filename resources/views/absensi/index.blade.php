@extends('layouts.absensi')
@section('content')
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>
	<div class="page-title" style="text-align:left; font-size:20px;margin-left:50px;">
		<strong>
		<?php
			$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');	 
			$hari = $array_hari[date('N')];
			$tanggal = date ('j');
			$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');			 
			$bulan = $array_bulan[date('n')];
			$tahun = date('Y');
			echo $hari .", ". $tanggal ." ". $bulan ." ". $tahun;
		?>
		</strong>
	</div>
</div>

<div style="margin-left:50px;">
	<p style="font-size:26px;">
		<span style="color:grey;">Welcome..</span> <br>
			<strong>lobuApps</strong> - 
			<strong><span style="color:green;">Smart</span></strong>
			and 
			<strong><span style="color:blue;">Simply</span></strong>
			for Good Bussiness !
		<br>
	</p>
</div>

@if (Session::has('messagexxx'))
     <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         {{ Session::get('messagexxx') }}
     </div>
@endif
@if (Session::has('messagexx'))
     <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         {{ Session::get('messagexx') }}
     </div>
@endif


@stop