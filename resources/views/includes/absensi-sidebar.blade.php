<div id="sidebar-default" class="main-sidebar">
    <div class="current-user">
		<!--form action="/image/save" method="post" style="height:20px;">
			<input name="image" type="file" style="height:20px;width:60px;float:left;font-size:10px;"/>
			<input class="btn btn-primary" type="submit" value="simpan"  style="height:20px;color:black;font-size:10px;"/>
		</form-->
	
        <a href="index.html" class="name">
            <!--img class="avatar" src="#"/-->
			
            <span>
			@if (Auth::user()->level==10)
                {{ Auth::user()->nama_karyawan }}
			@else
                {{ Auth::user()->username }}				
			@endif
                <i class="fa fa-chevron-down"></i>
            </span>
			<span id="user_id" class="hidden">
				{{ Auth::user()->id }}
			</span>
        </a>
		<?php 
			$xurl	= Setup::url();
			if (Auth::user()->level <=0){
				$cuti	= Cuti::where('stat2', '=', 0)->get()->count();
				$cuti2	= Cuti::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				$sakit	= Sakit::where('stat2', '=', 0)->get()->count();
				$sakit2	= Sakit::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				$spl	= Spl::where('stat2', '=', 0)->get()->count();
				$spl2	= Spl::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				$splk	= Splk::where('stat2', '=', 0)->get()->count();
				$splk2	= Splk::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				$idt	= Ijintelat::where('stat2', '=', 0)->get()->count();
				$idt2	= Ijintelat::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				$ipa	= Ijinpulang::where('stat2', '=', 0)->get()->count();
				$ipa2	= Ijinpulang::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				$izin	= Izin::where('stat2', '=', 0)->get()->count();
				$izin2	= Izin::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				$note	= Note::where('stat2', '=', 0)->get()->count();
				$note2	= Note::where('st', '=', 0)->where('stat2', '=', 1)->get()->count();
				$dns	= Dinas::where('stat2', '=', 0)->get()->count();
				$dns2	= Dinas::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				$exc	= Exceptions::where('stat2', '=', 0)->get()->count();
				$exc2	= Exceptions::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
			} else {
				$dept	= Auth::user()->departemen;
				$cuti	= Cuti::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$cuti2	= Cuti::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				$sakit	= Sakit::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$sakit2	= Sakit::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				$spl	= Spl::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$spl2	= Spl::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				$splk	= Splk::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$splk2	= Splk::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				$idt	= Ijintelat::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$idt2	= Ijintelat::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				$ipa	= Ijinpulang::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$ipa2	= Ijinpulang::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				$izin	= Izin::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$izin2	= Izin::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				$note	= Note::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$note2	= Note::where('st', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				$dns	= Dinas::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$dns2	= Dinas::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				$exc	= Exceptions::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				$exc2	= Exceptions::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
			}
			
			$kasbon	= KasbonTrans::where('posting', '=', 0)->get()->count();
		?>
        <ul class="menu">
           
            <!--li>
                <a>Ganti Foto</a>
                {{ Form::open(array('url' => 'storeFoto', 'files'=> true)) }}
                        {{ Form::file('image', array('class' => 'btn-xs','style' => 'float:left;width:75px;', 'Value'=>'Pilih Foto')) }}
                        {{ Form::submit('Simpan', array('class' => 'btn-xs btn-primary' )) }}
                {{ Form::close() }}
            </li-->
            <li>
                <a href="{{ $xurl }}user">Pengaturan User Login</a>
            </li>
			<li>
                <a href="#">Notifications</a>
            </li>
            <li>
                <a href="#">Help / Support</a>
            </li>
            <li>
                <a href="{{ $xurl }}logout">Sign out</a>
            </li>
        </ul>
    </div>
@if (Auth::user())
 @if (Auth::user()->level == 10)
	<div class="menu-section">
        <ul>
            <li>
                <a href="{{ $xurl }}" class="active">
                    <i class="ion-android-earth"></i> 
                    <span>Dashboard</span>
                </a>
            </li>
			<li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-ios7-compose-outline"></i> <span>Form Pengajuan</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ $xurl }}cuti/{{ Auth::user()->karyawan_id }}">Cuti</a></li>
                    <li><a href="{{ $xurl }}sakit/{{ Auth::user()->karyawan_id }}">Sakit</a></li>
                    <li><a href="{{ $xurl }}spl/{{ Auth::user()->karyawan_id }}">Lembur Normal</a></li>
                    <li><a href="{{ $xurl }}splk/{{ Auth::user()->karyawan_id }}">Lembur Khusus</a></li>
                    <li><a href="{{ $xurl }}ijintelat/{{ Auth::user()->karyawan_id }}">Datang Telat</a></li>
                    <li><a href="{{ $xurl }}ijinpulang/{{ Auth::user()->karyawan_id }}">Pulang Awal</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ $xurl }}jadwal-user">
                    <i class="ion-calendar"></i>
                    <span>Informasi Jadwal</span>
                </a>
            </li>
            <li>
                <a href="{{ $xurl }}absen-user-tgl">
                    <i class="fa fa-bookmark-o"></i> 
                    <span>Daftar Absensi</span>
                </a>
            </li>
            <!--li>
                <a href="{{ $xurl }}gaji-user/0">
                    <i class="ion-printer"></i> 
                    <span>Daftar Gaji</span>
                </a>
            </li-->
        </ul>
    </div>
 @else
    <div class="menu-section">
        <ul>
            <li>
                <a href="{{ $xurl }}" class="active">
                    <i class="ion-android-earth"></i> 
                    <span>Dashboard</span>
                </a>
            </li>
			@if (Auth::user()->level<=0)
            <li>
                <a href="{{ $xurl }}pengaturan-jabatan">
                    <i class="ion-settings"></i>
                    <span>Pengaturan Data</span>
                </a>
            </li>
			@endif
			@if (Auth::user()->level<=3)
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-person-stalker"></i><span> Karyawan</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
					@if (Auth::user()->level<=1)
						<li><a href="{{ $xurl }}karyawan/create">Buat Baru</a></li>
					@endif
                    <li><a href="{{ $xurl }}karyawan">Daftar Karyawan</a></li>
                </ul>
            </li>
			@endif
			@if (Auth::user()->level<=0)
			<li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-filing"></i><span> Group Penghasilan</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ $xurl }}komponen-penghasilan">Komponen Penghasilan</a></li>
                    <li><a href="{{ $xurl }}group-penghasilan">Group Gaji</a></li>
                </ul>
            </li>
			@endif
            <li>
                <a href="{{ $xurl }}jadwal-isi-tanggal">
                    <i class="fa fa-bookmark-o"></i> 
                    <span>Informasi Jadwal</span>
                </a>
            </li>
            <!--li>
			@if (Auth::user()->level<=0)
                <a href="{{ $xurl }}RedDate">
			@else
                <a href="#">
			@endif
                    <i class="ion-calendar"></i>
                    <span>Input Tanggal Merah</span>
                </a>
            </li-->
			@if (Auth::user()->level<=2)
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-ios7-compose-outline"></i><span> 1st Approval</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ $xurl }}cuti-daftar">({{$cuti}}) Pengajuan Cuti</a></li>
                    <li><a href="{{ $xurl }}sakit-daftar">({{$sakit}}) Keterangan Sakit</a></li>
                    <!--li><a href="{{ $xurl }}izin-belum-approve">({{$izin}}) Izin Tidak Kerja</a></li-->
                    <li><a href="{{ $xurl }}spl-belum-approve">({{$spl}}) Surat Lembur</a></li>
                    <li><a href="{{ $xurl }}splk-belum-approve">({{$splk}}) Surat Lembur Khusus</a></li>
                    <li><a href="{{ $xurl }}ijintelat-belum-approve">({{$idt}}) Ijin Datang Telat</a></li>
                    <li><a href="{{ $xurl }}ijinpulang-belum-approve">({{$ipa}}) Ijin Pulang Awal</a></li>
                    <li><a href="{{ $xurl }}dinas-belum-approve">({{$dns}}) Dinas Luar</a></li>
                    <li><a href="{{ $xurl }}exc-belum-approve">({{$exc}}) Pengecualian Finger</a></li>
                    <!--li><a href="{{ $xurl }}note-belum-approve">({{$note}}) Emergency Schedule</a></li-->
                    <!--li><a href="{{ $xurl }}kasbon-approval">({{$kasbon}}) Kasbon Karyawan</a></li-->
                </ul>
            </li>
			@endif
			@if (Auth::user()->level<=0)
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-ios7-compose-outline"></i><span> 2nd Approval</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ $xurl }}cuti-daftar2">({{$cuti2}}) Pengajuan Cuti</a></li>
                    <li><a href="{{ $xurl }}sakit-daftar2">({{$sakit2}}) Keterangan Sakit</a></li>
                    <li><a href="{{ $xurl }}spl-belum-approve2">({{$spl2}}) Surat Lembur</a></li>
                    <li><a href="{{ $xurl }}splk-belum-approve2">({{$splk2}}) Surat Lembur Khusus</a></li>
                    <li><a href="{{ $xurl }}ijintelat-belum-approve2">({{$idt2}}) Ijin Datang Telat</a></li>
                    <li><a href="{{ $xurl }}ijinpulang-belum-approve2">({{$ipa2}}) Ijin Pulang Awal</a></li>
                    <li><a href="{{ $xurl }}dinas-belum-approve2">({{$dns2}}) Dinas Luar</a></li>
                    <li><a href="{{ $xurl }}exc-belum-approve2">({{$exc2}}) Pengecualian Finger</a></li>
                </ul>
            </li>
			@endif
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-ios7-compose-outline"></i> <span>Rekap Pengajuan</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
					<li><a href="{{ $xurl }}Laporan-Cuti">Pengajuan Cuti</a></li>
					<li><a href="{{ $xurl }}Laporan-Sakit">Pengajuan Sakit</a></li>
					<li><a href="{{ $xurl }}Laporan-SPL">Pengajuan Lembur</a></li>
					<li><a href="{{ $xurl }}Laporan-SPLK">Pengajuan Lembur Khusus</a></li>
					<li><a href="{{ $xurl }}Laporan-IjinTelat">Ijin Datang Telat</a></li>
					<li><a href="{{ $xurl }}Laporan-IjinPulang">Ijin Pulang Awal</a></li>
					<li><a href="{{ $xurl }}Laporan-Dinas">Dinas Luar</a></li>
					<li><a href="{{ $xurl }}Laporan-Exc">Pengecualian Finger</a></li>
					<!--li><a href="{{ $xurl }}Laporan-Note">Emergency Schedule</a></li-->
                </ul>
            </li>
			@if (Auth::user()->level<=1)
			<li>
                <a href="#" data-toggle="sidebar" class="active">
                    <i class="ion-upload"></i> <span>Proses Absensi</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ $xurl }}upload-absensi">Upload Absensi</a></li>
                    <li><a href="{{ $xurl }}recount-absensi">Recount Absensi</a></li>
                </ul>
            </li>
			@endif
			@if (Auth::user()->level<=0)
            <li>
                <a href="{{ $xurl }}generate-gaji-show" class="active">
                    <i class="ion-gear-a"></i> 
                    <span>Hitung Gaji</span>
                </a>
            </li>
			@endif
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-printer"></i> <span>Laporan</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ $xurl }}Laporan-Absen-isi-tanggal">Absensi</a></li>
					
					@if (Auth::user()->level <=0 )
						<li><a href="{{ $xurl }}Laporan-Gaji-Tanggal">Gaji</a></li>
						<!--li><a href="{{ $xurl }}Laporan-SlipGaji">Slip Gaji</a></li-->
					@endif
                </ul>
            </li>
        </ul>
    </div>
 @endif
@endif
    <div class="bottom-menu hidden-sm hidden">
        <ul>
            <li><a href="#"><i class="ion-help"></i></a></li>
            <li>
                <a href="#">
                    <i class="ion-archive"></i>
                    <span class="flag"></span>
                </a>
                <ul class="menu">
                    <!--li><a href="/bellaGroup/public/listApprovePending">5 Transaksi Menunggu Persetujuan</a></li>
                    <li><a href="/bellaGroup/public/listPenyelesaianPending">12 Transaksi Menunggu Penyelesaian</a></li>
                    <li><a href="#">3 features added</a></li-->
                </ul>
            </li>
            <li><a href="#"><i class="ion-log-out"></i></a></li>
        </ul>
    </div>
</div>