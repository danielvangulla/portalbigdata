
function init_chart_malalayang1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasmalalayangpenduduk').length){
		
		$('#kelbahu').text(kelbahu);
		$('#kelbatukota').text(kelbatukota);
		$('#kelkleak').text(kelkleak);
		$('#kelmlyg1barat').text(kelmlyg1barat);
		$('#kelmlyg1timur').text(kelmlyg1timur);
		$('#kelmlyg1').text(kelmlyg1);
		$('#kelmlyg2').text(kelmlyg2);
		$('#kelwinangun1').text(kelwinangun1);
		$('#kelwinangun2').text(kelwinangun2);
		$('#totalmalalayang').text(allmalalayang);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Bahu",
					"Batu Kota",
					"Kleak",
					"Mlyg 1 Barat",
					"Mlyg 1 Timur",
					"Malalayang 1",
					"Malalayang 2",
					"Winangun 1",
					"Winangun 2"
				],
				datasets: [{
					data: [kelbahu, kelkleak, kelmlyg1barat, kelmlyg1timur, kelmlyg1, kelmlyg2, kelwinangun1, kelwinangun2],
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
	
		$('.canvasmalalayangpenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_malalayang2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasmalalayangmatapencaharian').length){
		
		var pertanian = 21;
		var perikanan = 5;
		var tambang = 0;
		var industri = 5;
		var konstruksi = 187;
		var perdagangan = 2175;
		var pemerintahan = 796;
		
		allpertanian += pertanian;
		allperikanan += perikanan;
		allpertambangan += tambang;
		allindustri += industri;
		allkonstruksi += konstruksi;
		allperdagangan += perdagangan;
		allpemerintahan += pemerintahan;
		
		$('#malalayangpertanian').text(pertanian);
		$('#malalayangperikanan').text(perikanan);
		$('#malalayangtambang').text(tambang);
		$('#malalayangindustri').text(industri);
		$('#malalayangkonstruksi').text(konstruksi);
		$('#malalayangperdagangan').text(perdagangan);
		$('#malalayangpemerintahan').text(pemerintahan);
		
		
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
	
		$('.canvasmalalayangmatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_malalayang3(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasmalalayangpendidikan').length){
		
		var dalam = 1034;
		var luar = 249;
		var tidak = 5;
		
		var all = dalam + luar + tidak;
		
		$('#malalayangsekolahdlm').text(dalam);
		$('#malalayangsekolahluar').text(luar);
		$('#malalayangsekolahtdk').text(tidak);
		
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
	
		$('.canvasmalalayangpendidikan').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}

