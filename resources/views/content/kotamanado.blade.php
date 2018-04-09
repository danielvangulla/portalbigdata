
	<!-- === MAIN Background === -->
	
	<!-- === Slide 1 === -->
	<div class="slide story" id="slide-1" data-slide="1">
	
		<div class="shadow">
			<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
			<div id="wowslider-container1">
				<div class="ws_images"><ul>
					<li><img src="{{ URL::asset('wowslider/data1/images/slide_1.jpg') }}" alt="slide 1" title="" id="wows1_0"/></li>
					<li><img src="{{ URL::asset('wowslider/data1/images/slide_2.jpg') }}" alt="slide 2" title="" id="wows1_1"/></li>
					<li><img src="{{ URL::asset('wowslider/data1/images/slide_3.jpg') }}" alt="slide 3" title="" id="wows1_2"/></li>
					<li><img src="{{ URL::asset('wowslider/data1/images/slide_4.jpg') }}" alt="css image slider" title="" id="wows1_3"/></a></li>
					<li><img src="{{ URL::asset('wowslider/data1/images/slide_5.jpg') }}" alt="slide 5" title="" id="wows1_4"/></li>
				</ul></div>
				<div class="ws_bullets"><div>
					<a href="#" title=""><span><img src="{{ URL::asset('wowslider/data1/tooltips/slide_1.jpg') }}" alt="slide 1"/>1</span></a>
					<a href="#" title=""><span><img src="{{ URL::asset('wowslider/data1/tooltips/slide_2.jpg') }}" alt="slide 2"/>2</span></a>
					<a href="#" title=""><span><img src="{{ URL::asset('wowslider/data1/tooltips/slide_3.jpg') }}" alt="slide 3"/>3</span></a>
					<a href="#" title=""><span><img src="{{ URL::asset('wowslider/data1/tooltips/slide_4.jpg') }}" alt="slide 4"/>4</span></a>
					<a href="#" title=""><span><img src="{{ URL::asset('wowslider/data1/tooltips/slide_5.jpg') }}" alt="slide 5"/>5</span></a>
				</div></div>
			<div class="ws_shadow"></div>
			</div>	
		</div>
		
		<div class="col-12 row" style="margin-top: 20px;">
		
			<div class="col-2">
				<a id="rpk" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="icon1"></div>
				</a>
			</div>
			
			<div class="col-2">
				<a id="banjir" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="icon2" id="banjir"></div>
				</a>
			</div>
			
			<div class="col-2">
				<div class="icon3"></div>
			</div>
			
			<div class="col-2">
				<div class="icon4"></div>
			</div>
			
			<div class="col-2">
				<div class="icon5"></div>
			</div>
			
			<div class="col-2">
				<div class="icon6"></div>
			</div>
		</div>
		
		<div class="col-12">
			
			<div class="col-4">
				
			</div>
			
			<div class="col-2">
				<div class="icontematik" id="tematik"></div>
			</div>
			
			<div class="col-2">
				<a id="dikomando" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="icondikomando" id="dikomando"></div>
				</a>
			</div>
			
			<div class="col-4">
				
			</div>
			
		</div>
		
		
		<div class="container container-custom" style="color:white; opacity:0.7;">
			<div class="row content-row slide1container">
				
				<div class="col-md-6 col-sm-6 col-xs-6">
				  <div class="x_panel tile fixed_height_320 overflow_hidden">
					<div class="x_title">
					  <h2>Kepadatan Penduduk (Jiwa)</h2>
					</div>
					<div class="x_content">
					  <table class="" style="width:100%">
						<tr>
						  <th style="width:37%;">
							<canvas class="canvasmanadopenduduk" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
						  </th>
						  <th>
							<table class="tile_info">
								<tbody>
								  <tr>
									<td>Bunaken </td>
									<td>
										<span style="margin-left:10px;" id="kecbunaken"> </span>
									</td>
									<td><span style="margin-left:10px;">Bunaken Kep </span></td>
									<td>
										<span style="margin-left:10px;" id="kecbunakenkep"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Malalayang </td>
									<td>
										<span style="margin-left:10px;" id="kecmalalayang"> </span>
									</td>
									<td><span style="margin-left:10px;">Mapanget </span></td>
									<td>
										<span style="margin-left:10px;" id="kecmapanget"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Paal Dua </td>
									<td>
										<span style="margin-left:10px;" id="kecpaal2"> </span>
									</td>
									<td><span style="margin-left:10px;">Sario </span></td>
									<td>
										<span style="margin-left:10px;" id="kecsario"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Singkil </td>
									<td>
										<span style="margin-left:10px;" id="kecsingkil"> </span>
									</td>
									<td><span style="margin-left:10px;">Tikala </span></td>
									<td>
										<span style="margin-left:10px;" id="kectikala"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Tuminting </td>
									<td>
										<span style="margin-left:10px;" id="kectuminting"> </span>
									</td>
									<td><span style="margin-left:10px;">Wanea </span></td>
									<td>
										<span style="margin-left:10px;" id="kecwanea"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Wenang </td>
									<td>
										<span style="margin-left:10px;" id="kecwenang"> </span>
									</td>
								  </tr>
								  <tr>
									<td>------</td>
								  </tr>
								  <tr>
									<td>Total </td>
									<td>
										<span style="margin-left:10px;" id="totalmanado"> </span>
									</td>
								  </tr>
								</tbody>
							</table>
						  </th>
						</tr>
					  </table>
					  <br>
					</div>
				  </div>
				</div>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
				  <div class="x_panel tile fixed_height_320 overflow_hidden">
					<div class="x_title">
					  <h2>Mata Pencaharian (KK)</h2>
					</div>
					<div class="x_content">
					  <table class="" style="width:100%">
						<tr>
						  <th style="width:37%;">
							<canvas class="canvasmanadomatapencaharian" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
						  </th>
						  <th>
							<table class="tile_info">
								<tbody>
								  <tr>
									<td>Pertanian </td>
									<td>
										<span style="margin-left:10px;" id="allpertanian"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Perikanan </td>
									<td>
										<span style="margin-left:10px;" id="allperikanan"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Tambang </td>
									<td>
										<span style="margin-left:10px;" id="alltambang"> </span>
									</td>
								  </tr>
								  <tr>
									<td>industri </td>
									<td>
										<span style="margin-left:10px;" id="allindustri"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Konstruksi </td>
									<td>
										<span style="margin-left:10px;" id="allkonstruksi"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Perdagangan </td>
									<td>
										<span style="margin-left:10px;" id="allperdagangan"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Pemerintahan </td>
									<td>
										<span style="margin-left:10px;" id="allpemerintahan"> </span>
									</td>
								  </tr>
								</tbody>
							</table>
						  </th>
						</tr>
					  </table>
					</div>
				  </div>
				</div>
				
				
			</div><!-- /row -->
		</div><!-- /container -->
		
		<br>
	</div><!-- /slide1 -->
	
	