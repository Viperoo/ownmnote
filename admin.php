<?php

OCP\User::checkAdminUser();

$tmpl = new OCP\Template('ownmnote', 'admin');
$tmpl->assign('folder', OCP\Config::getAppValue('ownmnote', 'folder', 'Notes'));
$tmpl->assign('disableAnnouncement', OCP\Config::getAppValue('ownmnote', 'disableAnnouncement', ''));

return $tmpl -> fetchPage();

