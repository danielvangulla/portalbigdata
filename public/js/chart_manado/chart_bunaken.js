
function init_chart_bunaken1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasbunakenpenduduk').length){
		
		$('#bailang').text(kelbailang);
		$('#meras').text(kelmeras);
		$('#molas').text(kelmolas);
		$('#pandu').text(kelpandu);
		$('#tongkaina').text(keltongkaina);
		$('#totalbunaken').text(allbunaken);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Bailang",
					"Meras",
					"Molas",
					"Pandu",
					"Tongkaina"
				],
				datasets: [{
					data: [kelbailang, kelmeras, kelmolas, kelpandu, keltongkaina],
					backgroundColor: [
						"#BDC3C7",
						"#9B59B6",
						"#E74C3C",
						"#26B99A",
						"#3498DB"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#B370CF",
						"#E95E4F",
						"#36CAAB",
						"#49A9EA"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvasbunakenpenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunaken2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasbunakenmatapencaharian').length){
		
		var pertanian = 698;
		var perikanan = 304;
		var tambang = 8;
		var industri = 43;
		var konstruksi = 632;
		var perdagangan = 3006;
		var pemerintahan = 209;
		
		allpertanian += pertanian;
		allperikanan += perikanan;
		allpertambangan += tambang;
		allindustri += industri;
		allkonstruksi += konstruksi;
		allperdagangan += perdagangan;
		allpemerintahan += pemerintahan;
		
		$('#bunakenpertanian').text(pertanian);
		$('#bunakenperikanan').text(perikanan);
		$('#bunakentambang').text(tambang);
		$('#bunakenindustri').text(industri);
		$('#bunakenkonstruksi').text(konstruksi);
		$('#bunakenperdagangan').text(perdagangan);
		$('#bunakenpemerintahan').text(pemerintahan);
		
		
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
						"#9B59B6",
						"#E74C3C"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#36CAAB",
						"#E95E4F",
						"#B370CF",
						"#49A9EA",
						"#B370CF",
						"#E95E4F"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvasbunakenmatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunaken3(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasbunakenpendidikan').length){
		
		var dalam = 2632;
		var luar = 494;
		var tidak = 49;
		
		var all = dalam + luar + tidak;
		
		$('#bunakensekolahdlm').text(dalam);
		$('#bunakensekolahluar').text(luar);
		$('#bunakensekolahtdk').text(tidak);
		
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
	
		$('.canvasbunakenpendidikan').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}

