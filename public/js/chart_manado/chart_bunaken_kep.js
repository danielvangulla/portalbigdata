
function init_chart_bunakenkep1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasbunakenkeppenduduk').length){
		
		$('#alungbanua').text(kelalungbanua);
		$('#bunaken').text(kelbunaken);
		$('#mdotua1').text(kelmanadotuasatu);
		$('#mdotua2').text(kelmanadotuadua);
		$('#totalbunakenkep').text(allbunakenkep);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Alung Banua",
					"Bunaken",
					"Manado Tua 1",
					"Manado Tua 2"
				],
				datasets: [{
					data: [kelalungbanua, kelbunaken, kelmanadotuasatu, kelmanadotuadua],
					backgroundColor: [
						"#BDC3C7",
						"#26B99A",
						"#E74C3C",
						"#9B59B6",
						"#3498DB",
						"#42f4eb",
						"#33d66f",
						"#0a00ce",
						"#ff05f6",
						"#dddd00",
						"#ff9666"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#36CAAB",
						"#E95E4F",
						"#B370CF",
						"#49A9EA",
						"#bcfffc",
						"#60ff9b",
						"#6159ff",
						"#ffa8fb",
						"#ffff66",
						"#ffc5aa"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvasbunakenkeppenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunakenkep2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasbunakenkepmatapencaharian').length){
		
		var pertanian = 266;
		var perikanan = 456;
		var tambang = 1;
		var industri = 2;
		var konstruksi = 147;
		var perdagangan = 613;
		var pemerintahan = 42;
		
		allpertanian += pertanian;
		allperikanan += perikanan;
		allpertambangan += tambang;
		allindustri += industri;
		allkonstruksi += konstruksi;
		allperdagangan += perdagangan;
		allpemerintahan += pemerintahan;
		
		$('#bunakenkeppertanian').text(pertanian);
		$('#bunakenkepperikanan').text(perikanan);
		$('#bunakenkeptambang').text(tambang);
		$('#bunakenkepindustri').text(industri);
		$('#bunakenkepkonstruksi').text(konstruksi);
		$('#bunakenkepperdagangan').text(perdagangan);
		$('#bunakenkeppemerintahan').text(pemerintahan);
		
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Pertanian",
					"Perikanan",
					"Tambang",
					"Industri",
					"Konstruksi",
					"Dagang",
					"Pemerintahan"
				],
				datasets: [{
					data: [pertanian, perikanan, tambang, industri, konstruksi, perdagangan, pemerintahan],
					backgroundColor: [
						"#BDC3C7",
						"#26B99A",
						"#E74C3C",
						"#9B59B6",
						"#3498DB",
						"#42f4eb",
						"#33d66f",
						"#0a00ce",
						"#ff05f6",
						"#dddd00",
						"#ff9666"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#36CAAB",
						"#E95E4F",
						"#B370CF",
						"#49A9EA",
						"#bcfffc",
						"#60ff9b",
						"#6159ff",
						"#ffa8fb",
						"#ffff66",
						"#ffc5aa"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvasbunakenkepmatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunakenkep3(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasbunakenkeppendidikan').length){
		
		var dalam = 693;
		var luar = 27;
		var tidak = 2;
		
		var all = dalam + luar + tidak;
		
		$('#bunakenkepsekolahdlm').text(dalam);
		$('#bunakenkepsekolahluar').text(luar);
		$('#bunakenkepsekolahtdk').text(tidak);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"di Dalam",
					"di Luar",
					"Tdk Sekolah"
				],
				datasets: [{
					data: [dalam, luar, tidak],
					backgroundColor: [
						"#BDC3C7",
						"#26B99A",
						"#E74C3C"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#36CAAB",
						"#E95E4F"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvasbunakenkeppendidikan').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}

