<?php
/**
 * Created by PhpStorm.
 * User: morten
 * Date: 11-05-15
 * Time: 10:18
 */

defined( 'CPL_VIEW' ) or die( 'Please load this view through the ViewController' );

$adminUrl = admin_url( 'admin-ajax.php' );
$editArgs = [
	"action"  => "cpl_edit_link",
	"post_id" => $postId,
	"link_id" => $linkId
];
$editLink = add_query_arg($editArgs, $adminUrl);

$deleteArgs = [
	"action"  => "cpl_remove_link",
	"post_id" => $postId,
	"link_id" => $linkId
];
$deleteLink = add_query_arg($deleteArgs, $adminUrl);
?>
<div class="cpl-link-actions">
	<a href="<?php echo $editLink ?>" class="thickbox" title="<?php _e( 'Edit link', $textDomain ) ?>">
		<span class="dashicons dashicons-edit"></span>
	</a>
	<a href="<?php echo $deleteLink ?>" class="thickbox cpl_delete" title="<?php _e( 'Delete link', $textDomain ) ?>">
		<span class="dashicons dashicons-no"></span>
	</a>
</div>