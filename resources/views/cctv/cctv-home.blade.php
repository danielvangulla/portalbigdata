<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Video Gallery Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('video-gallery/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('video-gallery/font-awesome/css/font-awesome.min.css') }}" />

	<link href="{{ URL::asset('css/video-js.css') }}" rel="stylesheet">
	<script src="{{ URL::asset('js/video.js') }}"></script>

    {{--<link href="//vjs.zencdn.net/6.7/video-js.min.css" rel="stylesheet">--}}
    {{--<script src="//vjs.zencdn.net/6.7/video.min.js"></script>--}}
	
    <script type="text/javascript" src="{{ URL::asset('video-gallery/js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('video-gallery/bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>BIG DATA <small>CCTV Gallery</small></h1>
</div>

<!-- Video Gallery - START -->
<div class="container-fluid pb-video-container">
    <div class="col-md-10 col-md-offset-1">
        <h3 class="text-center">CCTV Kota Manado</h3>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
				<video id="cctv1" class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="180" data-setup='{}'>
					<source src="rtmp://36.67.90.92:1935/live/adipura1.stream" type='rtmp/mp4'>
				</video>
                <label class="form-control label-warning text-center">Adipura 1</label>
            </div>
			
            <div class="col-md-3 pb-video">
				<video id="cctv2" class="video-js" controls preload="auto" poster="http://vjs.zencdn.net/v/oceans.png" width="100%" height="180" data-setup='{}'>
					<source src="rtmp://36.67.90.92:1935/live/teling1.stream" type='rtmp/mp4'>
				</video>
                <label class="form-control label-warning text-center">Perempatan Teling 1</label>
            </div>
			
            <div class="col-md-3 pb-video">
				<video id="cctv3" class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="180" data-setup='{}'>
					<source src="rtmp://36.67.90.92:1935/live/aryaduta.stream" type='rtmp/mp4'>
				</video>
                <label class="form-control label-warning text-center">Aryaduta</label>
            </div>
			
            <div class="col-md-3 pb-video">
				<video id="cctv4" class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="180" data-setup='{}'>
					<source src="rtmp://36.67.90.92:1935/live/bahukawasaki.stream" type='rtmp/mp4'>
				</video>
                <label class="form-control label-warning text-center">Bahu Kawasaki</label>
            </div>
        </div>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
				<video id="cctv6" class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="180" data-setup='{}'>
					<source src="rtmp://36.67.90.92:1935/live/calaca1.stream" type='rtmp/mp4'>
				</video>
                <label class="form-control label-warning text-center">Calaca 1</label>
            </div>
			
            <div class="col-md-3 pb-video">
				<video id="cctv7" class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="180" data-setup='{}'>
					<source src="rtmp://36.67.90.92:1935/live/calaca2.stream" type='rtmp/mp4'>
				</video>
                <label class="form-control label-warning text-center">Calaca 2</label>
            </div>
			
            <div class="col-md-3 pb-video">
				<video id="cctv5" class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="180" data-setup='{}'>
					<source src="rtmp://36.67.90.92:1935/live/teling2.stream" type='rtmp/mp4'>
				</video>
                <label class="form-control label-warning text-center">Perempatan Teling-2</label>
            </div>
			
            <div class="col-md-3 pb-video">
				<video id="cctv8" class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="180" data-setup='{}'>
					<source src="rtmp://36.67.90.92:1935/live/depanbankmega.stream" type='rtmp/mp4'>
				</video>
                <label class="form-control label-warning text-center">Depan Bank Mega</label>
            </div>
        </div>
    </div>
</div>

<style>
    .pb-video-container {
        padding-top: 20px;
        background: #bdc3c7;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

        .pb-video:hover {
            background: #2c3e50;
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }
</style>

<!-- Video Gallery - END -->

</div>

</body>
</html>