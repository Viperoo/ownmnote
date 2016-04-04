<?php
/**
 * ownCloud - ownmnote
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Ben Curtis <ownclouddev@nosolutions.com>
 * @copyright Ben Curtis 2015
 */

namespace OCA\OwnMNote\AppInfo;

$l = \OC::$server->getL10N('ownmnote');

if (\OCP\App::isEnabled('files_markdown')) {
    \OCP\App::registerAdmin('ownmnote', 'admin');

    \OCP\App::addNavigationEntry(array(
        // the string under which your app will be referenced in owncloud
        'id' => 'ownmnote',

        // sorting weight for the navigation. The higher the number, the higher
        // will it be listed in the navigation
        'order' => 10,

        // the route that will be shown on startup
        'href' => \OCP\Util::linkToRoute('ownmnote.page.index'),

        // the icon that will be shown in the navigation
        // this file needs to exist in img/
        'icon' => \OCP\Util::imagePath('ownmnote', 'app.svg'),

        // the title of your application. This will be used in the
        // navigation or on the settings page of your app
        //'name' => \OC_L10N::get('ownmnote')->t('Own Note')
        'name' => $l->t('Notes')
    ));
} else {
    $msg = 'Can not enable the OwnMarkdownNote app because the ownCloud Markdown App is disabled.';
    \OCP\Util::addScript('ownmnote', 'editor-missing');
    \OCP\Util::writeLog('ownmnote', $msg, \OCP\Util::ERROR);
}
