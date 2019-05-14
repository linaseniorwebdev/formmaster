	<!-- BEGIN::FOOTER-->
	<footer>
		<div class="footer-area">
			<p>© Copyright 2019. All right reserved.</p>
		</div>
	</footer>
	<!-- END::FOOTER-->
</div>

<script src="public/core/js/vendor/jquery-2.2.4.min.js"></script>

<script src="public/core/js/popper.min.js"></script>
<script src="public/core/js/bootstrap.min.js"></script>
<script src="public/core/js/owl.carousel.min.js"></script>
<script src="public/core/js/metisMenu.min.js"></script>
<script src="public/core/js/jquery.slimscroll.min.js"></script>
<script src="public/core/js/jquery.slicknav.min.js"></script>

<script src="public/core/js/plugins.js"></script>
<script src="public/core/js/scripts.js"></script>

<?php
if (isset($name)) {
	echo '<script src="public/core/custom/admin/' . $name . '.js"></script>';
}
?>
</body>
</html>