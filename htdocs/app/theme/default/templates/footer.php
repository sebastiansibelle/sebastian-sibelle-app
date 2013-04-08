	<!-- vendor / library js -->
	<?php ET::script('ss-everything/ss-social') ?>
	<?php ET::minscript('jquery/jquery-1.7.2.min') ?>

<!--
	<?php ET::minscript('bootstrap/js/bootstrap-transition') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-alert') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-modal') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-dropdown') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-scrollspy') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-tab') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-tooltip') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-popover') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-button') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-collapse') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-carousel') ?>
	<?php ET::minscript('bootstrap/js/bootstrap-typeahead') ?>  

-->
	<!-- app javascript -->
	<?php ET::minscript('shuriken') ?>
	<?php ET::minscript('app') ?>

	<!-- finally, theme js -->
	
	<?php ET::minscript('toys') ?>
	<?php ET::minscript() ?>
	<script type="text/javascript">$.extend(true, app, <?php EF::raw(Response::get_javascript()); ?>);</script>
</body>
</html>