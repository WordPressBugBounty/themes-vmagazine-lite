<?php
/**
* Changelog
*/
?>
<div class="featured-section changelog">
<?php
WP_Filesystem();
global $wp_filesystem;
$changelog     		= $wp_filesystem->get_contents( get_template_directory() . '/changelog.txt' );
for($i=0; $i<10; $i++){
	$changelog = str_replace('= '.$i.'.','<br/><br/>= '.$i.'.',$changelog);
}
$changelog 			= str_replace('*','</strong><br/>*',$changelog);
echo ''.wp_kses_post($changelog);
echo '<hr />';
?>
</div>

