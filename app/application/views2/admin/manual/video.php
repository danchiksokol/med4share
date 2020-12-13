<h3>Youtube Видео</h3>
<br />

<div class="row">
    <div class="col-md-6">

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/v1uyQZNg2vE"></iframe>
        </div>
    </div>
    <div class="col-md-6">
<pre><?=preHTML('<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/v1uyQZNg2vE"></iframe>
</div>');?></pre>
    </div>
</div>

<h3>Youtube Видео Определеного места</h3>
<br />

<div class="row">
    <div class="col-md-6">

		<div class="embed-responsive embed-responsive-16by9" id="video_1">
			<iframe class="embed-responsive-item" src="//www.youtube.com/embed/v1uyQZNg2vE"></iframe>
		</div>
		<div><a href="#" class="video_start" id_video="video_1" time="66">Начать с 66 секунды</a></div>
		<div><a href="#" class="video_start" id_video="video_1" time="121">Начать с 121 секунды</a></div>

		<script>
			$().ready(function(){

				$('.video_start').on( "click", function() {

					var id_video = this.getAttribute("id_video");
					var time = this.getAttribute("time");

					var srcVideo = $('#' + id_video + ' iframe')[0].src.split('?');

					srcVideo = srcVideo[0];

					$('#' + id_video + ' iframe')[0].src = srcVideo + "?autoplay=0";
					$('#' + id_video + ' iframe')[0].src = srcVideo + '?start='+ time +'&autoplay=1';
					return false;

				});

				/*var srcVideo = $("#video iframe")[0].src;
			
				$('#video1').click(function() {
					$("#video iframe")[0].src = srcVideo + "?autoplay=0";
					$("#video iframe")[0].src = srcVideo + "?start=66&autoplay=1";
					return false;
				}); 
				
				$('#video2').click(function() {
					$("#video iframe")[0].src = srcVideo + "?autoplay=0";
					$("#video iframe")[0].src = srcVideo + "?start=121&autoplay=1";
					return false;
				});*/
			});
		</script>
    </div>
    <div class="col-md-6">
<pre><?=preHTML('<div class="embed-responsive embed-responsive-16by9" id="video_1">
	<iframe class="embed-responsive-item" src="//www.youtube.com/embed/v1uyQZNg2vE"></iframe>
</div>
<div><a href="#" class="video_start" id_video="video_1" time="66">Начать с 66 секунды</a></div>
<div><a href="#" class="video_start" id_video="video_1" time="121">Начать с 121 секунды</a></div>');?></pre>
    </div>
</div>




<br />
<hr />
<h3>Vimeo Видео</h3>
<br />


<div class="row">
    <div class="col-md-6">

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
            <p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
    </div>
    <div class="col-md-6">
<pre><?=preHTML('<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
    <p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
</div>');?></pre>
    </div>
</div>

