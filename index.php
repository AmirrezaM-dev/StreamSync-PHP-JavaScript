<!DOCTYPE html>
<html>
    <head>
        <title>Sinama Iran</title>
        <meta charset="UTF-8" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<style>
			body{
				margin: 0 !important;
				padding: 0 !important;
			}
			.artplayer-app{
				width: 100% !important;
				height: 100% !important;
				position: absolute;
			}
		</style>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <body>
		<?php
			if(isset($_GET['ios'])){
		?>
			<button onclick="playTheVideo();">play</button>
			<button onclick="pauseTheVideo();">pause</button>
		<?php
			}
		?>
        <scriptiv class="artplayer-app" style="width:400px;height:300px"></scriptiv>
        <script src="js/artplayer.js"></script>
        <script>
			var art = new Artplayer({
				container: '.artplayer-app',
				url: 'a.mp4',
				// type: 'video/x-matroska',
				// subtitle: {
				// 	url: 'a.srt',
				// 	style: {
				// 		color: '#FFFFFF',
				// 		'font-size': '48px',
				// 		'text-shadow': '2px 2px #666666',
				// 	},
				// 	encoding: 'utf-8',
				// 	bilingual: true,
				// },
				// title: 'One More Time One More Chance',
				// poster: 'https://p.bigstockphoto.com/GeFvQkBbSLaMdpKXF1Zv_bigstock-Aerial-View-Of-Blue-Lakes-And--227291596.jpg',
				volume: 0.5,
				isLive: false,
				muted: false,
				autoplay: false,
				pip: true,
				autoSize: true,
				autoMini: true,
				screenshot: false,
				setting: true,
				loop: false,
				flip: false,
				rotate: false,
				playbackRate: false,
				aspectRatio: false,
				fullscreen: true,
				fullscreenWeb: true,
				subtitleOffset: true,
				miniProgressBar: true,
				localVideo: true,
				localSubtitle: true,
				networkMonitor: false,
				mutex: true,
				light: false,
				backdrop: false,
				theme: '#ffad00',
				lang: navigator.language.toLowerCase(),
				moreVideoAttr: {
					crossOrigin: 'anonymous',
				},
				// quality: [
				// 	{
				// 		default: true,
				// 		name: '720P',
				// 		url: 'r720.mp4',
				// 	},
				// 	{
				// 		name: '1080P',
				// 		url: 'r1080.mp4',
				// 	},
				// ],
				// contextmenu: [
				// 	{
				// 		html: 'Custom menu',
				// 		click: function (contextmenu) {
				// 			console.info('You clicked on the custom menu');
				// 			contextmenu.show = false;
				// 		},
				// 	},
				// ],
				// layers: [
				// 	{
				// 		html: `<img style="width: 100px" src="https://p.bigstockphoto.com/GeFvQkBbSLaMdpKXF1Zv_bigstock-Aerial-View-Of-Blue-Lakes-And--227291596.jpg">`,
				// 		click: function () {
				// 			console.info('You clicked on the custom layer');
				// 		},
				// 		style: {
				// 			position: 'absolute',
				// 			top: '20px',
				// 			right: '20px',
				// 			opacity: '.9',
				// 		},
				// 	},
				// ],
				// quality: [
				// 	{
				// 		default: true,
				// 		name: '720P',
				// 		url: '720.mkv',
				// 	},
				// 	{
				// 		name: '1080P',
				// 		url: '1080.mkv',
				// 	},
				// ],
				// thumbnails: {
				// 	url: 'https://p.bigstockphoto.com/GeFvQkBbSLaMdpKXF1Zv_bigstock-Aerial-View-Of-Blue-Lakes-And--227291596.jpg',
				// 	number: 100,
				// 	width: 160,
				// 	height: 90,
				// 	column: 10,
				// },
				// highlight: [
				// 	{
				// 		time: 0,
				// 		text: 'One more chance',
				// 	},
				// 	{
				// 		time: 120,
				// 		text: '谁でもいいはずなのに',
				// 	},
				// 	{
				// 		time: 180,
				// 		text: '夏の想い出がまわる',
				// 	},
				// 	{
				// 		time: 240,
				// 		text: 'こんなとこにあるはずもないのに',
				// 	},
				// 	{
				// 		time: 300,
				// 		text: '终わり',
				// 	},
				// ],
				// controls: [
				// 	{
				// 		position: 'right',
				// 		html: 'Control',
				// 		click: function () {
				// 			console.info('You clicked on the custom control');
				// 		},
				// 	},
				// ],
				// controls: [
				// 	{
				// 		name: 'myController',
				// 		position: 'right',
				// 		index: 10,
				// 		html: 'Pause',
				// 		tooltip: 'This is my controller',
				// 		click: function () {
				// 			pauseTheVideo();
				// 		},
				// 	},
				// 	{
				// 		name: 'myController',
				// 		position: 'right',
				// 		index: 10,
				// 		html: 'Play',
				// 		tooltip: 'This is my controller',
				// 		click: function () {
				// 			playTheVideo();
				// 		},
				// 	},
				// ],
				// icons: {
				// 	loading: '<img src="/assets/img/ploading.gif">',
				// 	state: '<img src="/assets/img/state.png">',
				// },
			});
			var $video=$("video")[0];
			$("body").append("<scriptiv id='loader'></scriptiv>");
			$(document).ready(function () {
				setInterval(() => {
					$.post("actions.php", {}, function(data, status) {
						$("#loader").empty().append("<script>"+data+"<"+"/"+"script>");
					});
				}, 500);
			});
			$(document).on("click",".art-icon.art-icon-play",function () {
				playTheVideo();
			});
			$(document).on("click",".art-icon.art-icon-pause",function () {
				pauseTheVideo();
			});
			$(document).on("click",".art-video",function () {
				if($(".art-icon.art-icon-play").css('display')=="none"){
					pauseTheVideo();
				}else{
					playTheVideo();
				}
			});
			function playTheVideo() {
				let timerInterval
				Swal.fire({
					title: 'Playing',
					html: 'Waiting <b></b> second.',
					timer: 5000,
					timerProgressBar: true,
					allowOutsideClick: false,
					didOpen: () => {
						Swal.showLoading()
						timerInterval = setInterval(() => {
						const content = Swal.getContent()
						if (content) {
							const b = content.querySelector('b')
							if (b) {
							b.textContent = Math.round(Swal.getTimerLeft()/1000)
							}
						}
						}, 100)
					},
					willClose: () => {
						clearInterval(timerInterval)
					}
				});
				$("video")[0].pause();
				$.post("action.php?currentTime", {
					"currentTime" : $("video")[0].currentTime
				}, function(data, status) {
					setTimeout(() => {
						$.post("action.php?play", {
							"currentTime" : $("video")[0].currentTime
						}, function(data, status) {
							setTimeout(() => {
								$.post("action.php?empty", {}, function(data, status) {});
							}, 1500);
						});
					}, 5000);
				});
			}
			function pauseTheVideo() {
				$("video")[0].pause();
				let timerInterval
				Swal.fire({
					title: 'Pausing',
					html: 'Waiting <b></b> second.',
					timer: 5000,
					timerProgressBar: true,
					allowOutsideClick: false,
					didOpen: () => {
						Swal.showLoading()
						timerInterval = setInterval(() => {
						const content = Swal.getContent()
						if (content) {
							const b = content.querySelector('b')
							if (b) {
							b.textContent = Math.round(Swal.getTimerLeft()/1000)
							}
						}
						}, 100)
					},
					willClose: () => {
						clearInterval(timerInterval)
					}
				});
				$.post("action.php?currentTime", {
					"currentTime" : $("video")[0].currentTime
				}, function(data, status) {
					setTimeout(() => {
						$.post("action.php?pause", {
							"currentTime" : $("video")[0].currentTime
						}, function(data, status) {
							setTimeout(() => {
								$.post("action.php?empty", {}, function(data, status) {});
							}, 1500);
						});
					}, 5000);
				});
			}

			document.body.onkeyup = function(e){
				if(e.keyCode == 32){
					if($(".art-icon.art-icon-play").css('display')=="none"){
						pauseTheVideo();
					}else{
						playTheVideo();
					}
				}else if(e.keyCode == 70 || e.keyCode == 13){
					$(".art-control.art-control-fullscreen").click();
				}
			}
			$(document).on("click",".art-control-progress-inner",function () {
				if($(".art-icon.art-icon-play").css('display')=="none"){
					playTheVideo();
				}else{
					pauseTheVideo();
				}
			});
			Swal.fire("به سینما ایران خوش آمدید");
        </script>
    </body>
</html>