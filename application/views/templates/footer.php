	<!-- footer -->
	<div class="footer"> 
		<div class="container">
			<center><p style="color: white;font-size: 20px;">© 2013 <a href="login">PT</a> Quality Engineering Services, All Right Reserved</a></p></center>
			<div class="clearfix"> </div>
		</div> 
	</div>
	<!-- //footer -->
	<!-- smooth-scrolling-of-move-up --> 
	<script type="text/javascript" src="<?php echo base_url('assets1/js/move-top.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets1/js/easing.js')?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script> 
	<!-- //smooth-scrolling-of-move-up -->
</body>
</html>