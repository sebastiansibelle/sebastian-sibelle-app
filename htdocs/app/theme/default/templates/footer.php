	<!-- vendor / library js -->
	<?php ET::minscript('ss-everything/ss-social') ?>
	<?php ET::minscript('jquery/jquery-1.7.2.min') ?>

	<!-- app javascript -->
	<?php ET::minscript('shuriken') ?>
	<?php ET::minscript('app') ?>

	<!-- finally, theme js -->
	<?php ET::minscript('toys') ?>
	<?php ET::minscript() ?>
	<script type="text/javascript">$.extend(true, app, <?php EF::raw(Response::get_javascript()); ?>);</script>
</body>
</html>