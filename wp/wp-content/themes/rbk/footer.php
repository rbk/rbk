</div> <!-- #content -->
<footer>
	<div class="wrap">
		Copyright <?php echo Date('Y') ?>
	</div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53226484-1', 'auto');
  ga('send', 'pageview');

</script>

</div> <!-- end #page-container -->


<div id="page-color"></div>
<div id="overlay"></div>

<?php wp_footer(); ?>
<script>
	console.log(document.getElementById('wpadminbar'))	
	if( document.getElementById('wpadminbar') ){
		document.body.style.paddingTop = '132px';
		document.getElementById('header').style.top = '32px';
	}

</script>
</body>
</html>
