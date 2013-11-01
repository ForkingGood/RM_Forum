<?php

if (!defined('FORUM')) exit;
define('FORUM_QJ_LOADED', 1);
$forum_id = isset($forum_id) ? $forum_id : 0;

?><form id="qjump" method="get" accept-charset="utf-8" action="http://localhost:1234/rm_forum/viewforum.php">
	<div class="frm-fld frm-select">
		<label for="qjump-select"><span><?php echo $lang_common['Jump to'] ?></span></label><br />
		<span class="frm-input"><select id="qjump-select" name="id">
			<optgroup label="Talk to Me">
				<option value="2"<?php echo ($forum_id == 2) ? ' selected="selected"' : '' ?>>Video Uploads</option>
				<option value="3"<?php echo ($forum_id == 3) ? ' selected="selected"' : '' ?>>Advices</option>
				<option value="1"<?php echo ($forum_id == 1) ? ' selected="selected"' : '' ?>>Test forum</option>
			</optgroup>
			<optgroup label="User Debate">
				<option value="4"<?php echo ($forum_id == 4) ? ' selected="selected"' : '' ?>>Some Next Shit</option>
				<option value="5"<?php echo ($forum_id == 5) ? ' selected="selected"' : '' ?>>Some Next Level Shit</option>
			</optgroup>
		</select>
		<input type="submit" id="qjump-submit" value="<?php echo $lang_common['Go'] ?>" /></span>
	</div>
</form>
<?php

$forum_javascript_quickjump_code = <<<EOL
(function () {
	var forum_quickjump_url = "http://localhost:1234/rm_forum/viewforum.php?id=$1";
	var sef_friendly_url_array = new Array(5);
	sef_friendly_url_array[2] = "video-uploads";
	sef_friendly_url_array[3] = "advices";
	sef_friendly_url_array[1] = "test-forum";
	sef_friendly_url_array[4] = "some-next-shit";
	sef_friendly_url_array[5] = "some-next-level-shit";

	PUNBB.common.addDOMReadyEvent(function () { PUNBB.common.attachQuickjumpRedirect(forum_quickjump_url, sef_friendly_url_array); });
}());
EOL;

$forum_loader->add_js($forum_javascript_quickjump_code, array('type' => 'inline', 'weight' => 60, 'group' => FORUM_JS_GROUP_SYSTEM));
?>
