<?php

\OCP\Util::addScript('ownmnote', 'admin');

$folder = $_['folder'];
$disableAnnouncement = $_['disableAnnouncement'];
$l = OCP\Util::getL10N('ownmnote');

?>

<div class="section">
        <h2>ownNote</h2>
	<label for="ownmnote-type"><?php p($l->t("How would you like to store your notes?")); ?></label><br>
	<select id="ownmnote-type">
		<option <?php if ($folder == "") echo "selected"; ?> value=""><?php p($l->t("Database only")); ?></option>
		<option <?php if ($folder != "") echo "selected"; ?> value="folder"><?php p($l->t("Database and folder")); ?></option>
	</select><br>
	<br>
	<div id="shorten-folder-settings" style="display: <?php if ($folder != "") echo "block"; else echo "none"; ?>">
		<label for="ownmnote-folder"><?php p($l->t("Please enter the folder name you would like to use to store notes, with no slashes.")); ?></label><br>
		<input type="text" style="width: 250pt" name="ownmnote-folder" id="ownmnote-folder" value="<?php p($folder) ?>" /><br>
		<br>
	</div>
	<label for="ownmnote-disableannouncement"><?php p($l->t("Would you like to disable announcements? (not recommended)")); ?></label><br>
	<em><?php p($l->t("Announcements are unobtrusive and only used for major notifications such as the release of a new mobile or desktop companion application. They will not be used for regular updates, and are easily dismissed by your users.")); ?></em><br>
	<input type="checkbox" id="ownmnote-disableannouncement" value="checked" <?php echo $disableAnnouncement; ?> ><?php p($l->t("Disable announcements")); ?><br>
</div>
