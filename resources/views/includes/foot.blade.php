<!-- SCRIPTS -->
	<script src="{{ URL::asset('munter/js/html5shiv.js') }}"></script>
	<script src="{{ URL::asset('munter/js/jquery-1.10.2.min.js') }}"></script>
	<script src="{{ URL::asset('munter/js/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src="{{ URL::asset('munter/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('munter/js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('munter/fancybox/jquery.fancybox.pack-v=2.1.5.js') }}"></script>
	<script src="{{ URL::asset('munter/js/script.js') }}"></script>
	<script src="{{ URL::asset('js/chart.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/global_variable.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('wowslider/engine1/wowslider.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('wowslider/engine1/script.js') }}"></script>
	
	<script>
		
		$('#rpk').click(function (){
			$('#embed').attr('src',window.location.origin+"/penduduk/lingkungan")
		});
		
		$('#banjir').click(function (){
			$('#embed').attr('src',window.location.origin+"/bencana/banjir")
		});
		
		$('#longsor').click(function (){
			$('#embed').attr('src',window.location.origin+"/bencana/longsor")
		});
		
		$('#dikomando').click(function (){
			$('#embed').attr('src',"http://36.67.90.85/mioc/vAlpha")
		});
		
		$(document).ready(function(e) {
			var lis = $('.nav > li');
			menu_focus( lis[0], 1 );
			
			$(".fancybox").fancybox({
				padding: 10,
				helpers: {
					overlay: {
						locked: false
					}
				}
			});
		
			init_chart_bunaken1();
			init_chart_bunaken2();
			init_chart_bunaken3();
			
			init_chart_bunakenkep1();
			init_chart_bunakenkep2();
			init_chart_bunakenkep3();
			
			init_chart_malalayang1();
			init_chart_malalayang2();
			init_chart_malalayang3();
			
			init_chart_manado1();
			init_chart_manado2();
			
		});
		
		function content1()
		{
			alert('test');
		}
	</script>
	<script>
	
		$(".icon1").mouseenter(function(){
			$(".icon1").attr({style: "content:url('munter/images/icon/icon1_glow.png')" });
		});
		$(".icon1").mouseleave(function(){
			$(".icon1").attr({style: "content:url('munter/images/icon/icon1.png')" });
		});
	
		$(".icon2").mouseenter(function(){
			$(".icon2").attr({style: "content:url('munter/images/icon/icon2_glow.png')" });
		});
		$(".icon2").mouseleave(function(){
			$(".icon2").attr({style: "content:url('munter/images/icon/icon2.png')" });
		});
	
		$(".icon3").mouseenter(function(){
			$(".icon3").attr({style: "content:url('munter/images/icon/icon3_glow.png')" });
		});
		$(".icon3").mouseleave(function(){
			$(".icon3").attr({style: "content:url('munter/images/icon/icon3.png')" });
		});
	
		$(".icon4").mouseenter(function(){
			$(".icon4").attr({style: "content:url('munter/images/icon/icon4_glow.png')" });
		});
		$(".icon4").mouseleave(function(){
			$(".icon4").attr({style: "content:url('munter/images/icon/icon4.png')" });
		});
	
		$(".icon5").mouseenter(function(){
			$(".icon5").attr({style: "content:url('munter/images/icon/icon5_glow.png')" });
		});
		$(".icon5").mouseleave(function(){
			$(".icon5").attr({style: "content:url('munter/images/icon/icon5.png')" });
		});
	
		$(".icon6").mouseenter(function(){
			$(".icon6").attr({style: "content:url('munter/images/icon/icon6_glow.png')" });
		});
		$(".icon6").mouseleave(function(){
			$(".icon6").attr({style: "content:url('munter/images/icon/icon6.png')" });
		});
	
		$(".icontematik").mouseenter(function(){
			$(".icontematik").attr({style: "content:url('munter/images/icon/tematik_glow.png')" });
		});
		$(".icontematik").mouseleave(function(){
			$(".icontematik").attr({style: "content:url('munter/images/icon/tematik.png')" });
		});
	
		$(".icondikomando").mouseenter(function(){
			$(".icondikomando").attr({style: "content:url('munter/images/icon/dikomando_glow.png')" });
		});
		$(".icondikomando").mouseleave(function(){
			$(".icondikomando").attr({style: "content:url('munter/images/icon/dikomando.png')" });
		});
	
	</script>
	
	<script src="{{ URL::asset('js/chart_manado/chart_all_manado.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_bunaken.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_bunaken_kep.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_malalayang.js') }}"></script>
	<!--script src="{{ URL::asset('js/chart_manado/chart_mapanget.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_paal2.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_sario.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_singkil.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_tikala.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_tuminting.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_wanea.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_wenang.js') }}"></script-->
	