<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
		@include('content.dikomando')
		
		<div id="content">
		
			@include('content.navbar')
			@include('content.kotamanado')
			
			@include('content.kecamatan.bunaken')
			@include('content.kecamatan.bunakenkep')
			@include('content.kecamatan.malalayang')
			@include('content.kecamatan.mapanget')
			
			@yield('content')
		</div>	
			
        @include('includes.foot')
		
    </body>
</html>