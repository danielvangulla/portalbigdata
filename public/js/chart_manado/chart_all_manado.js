
function init_chart_manado1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasmanadopenduduk').length){
		
		$('#kecbunaken').text(allbunaken);
		$('#kecbunakenkep').text(allbunakenkep);
		$('#kecmalalayang').text(allmalalayang);
		$('#kecmapanget').text(allmapanget);
		$('#kecpaal2').text(allpaaldua);
		$('#kecsario').text(allsario);
		$('#kecsingkil').text(allsingkil);
		$('#kectikala').text(alltikala);
		$('#kectuminting').text(alltuminting);
		$('#kecwanea').text(allwanea);
		$('#kecwenang').text(allwenang);
		$('#totalmanado').text(allmanado);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Bunaken",
					"Bunaken Kep",
					"Malalayang",
					"Mapanget",
					"Paal Dua",
					"Sario",
					"Singkil",
					"Tikala",
					"Tuminting",
					"Wanea",
					"Wenang"
				],
				datasets: [{
					data: [allbunaken, allbunakenkep, allmalalayang, allmapanget, allpaaldua, allsario, allsingkil, alltikala, alltuminting, allwanea, allwenang],
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
	
		$('.canvasmanadopenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_manado2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	console.log('init_chart_doughnut');
	
	if ($('.canvasmanadomatapencaharian').length){
		
		$('#allpertanian').text(allpertanian);
		$('#allperikanan').text(allperikanan);
		$('#alltambang').text(allpertambangan);
		$('#allindustri').text(allindustri);
		$('#allkonstruksi').text(allkonstruksi);
		$('#allperdagangan').text(allperdagangan);
		$('#allpemerintahan').text(allpemerintahan);
		
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
					data: [allpertanian, allperikanan, allpertambangan, allindustri, allkonstruksi, allperdagangan, allpemerintahan],
					backgroundColor: [
						"#BDC3C7",
						"#26B99A",
						"#E74C3C",
						"#9B59B6",
						"#3498DB",
						"#42f4eb",
						"#33d66f"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#36CAAB",
						"#E95E4F",
						"#B370CF",
						"#49A9EA",
						"#bcfffc",
						"#60ff9b"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvasmanadomatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}
