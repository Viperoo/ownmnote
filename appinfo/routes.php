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

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
$application = new Application();

$application->registerRoutes($this, array('routes' => array(
	array('name' => 'page#index', 'url' => '/', 'verb' => 'GET'),
	array('name' => 'ownmnote_ajax#ajaxsetval', 'url' => '/ajax/v0.2/ajaxsetval', 'verb' => 'POST'),
	array('name' => 'ownmnote_api#index', 'url' => '/api/v0.2/ownmnote', 'verb' => 'GET'),
	array('name' => 'ownmnote_ajax#ajaxindex', 'url' => '/ajax/v0.2/ownmnote/ajaxindex', 'verb' => 'GET'),
	array('name' => 'ownmnote_api#remoteindex', 'url' => '/api/v0.2/ownmnote/remoteindex', 'verb' => 'GET'),
	array('name' => 'ownmnote_api#mobileindex', 'url' => '/api/v0.2/ownmnote/mobileindex', 'verb' => 'GET'),
	array('name' => 'ownmnote_api#announcement', 'url' => '/api/v0.2/ownmnote/announcement', 'verb' => 'GET'),
	array('name' => 'ownmnote_ajax#ajaxannouncement', 'url' => '/ajax/v0.2/ownmnote/ajaxannouncement', 'verb' => 'GET'),
	array('name' => 'ownmnote_api#version', 'url' => '/api/v0.2/ownmnote/version', 'verb' => 'GET'),
	array('name' => 'ownmnote_ajax#ajaxversion', 'url' => '/ajax/v0.2/ownmnote/ajaxversion', 'verb' => 'GET'),
	array('name' => 'ownmnote_api#ren', 'url' => '/api/v0.2/ownmnote/ren', 'verb' => 'POST'),
	array('name' => 'ownmnote_ajax#ajaxren', 'url' => '/ajax/v0.2/ownmnote/ajaxren', 'verb' => 'POST'),
	array('name' => 'ownmnote_api#edit', 'url' => '/api/v0.2/ownmnote/edit', 'verb' => 'POST'),
	array('name' => 'ownmnote_ajax#ajaxedit', 'url' => '/ajax/v0.2/ownmnote/ajaxedit', 'verb' => 'POST'),
	array('name' => 'ownmnote_api#del', 'url' => '/api/v0.2/ownmnote/del', 'verb' => 'POST'),
	array('name' => 'ownmnote_ajax#ajaxdel', 'url' => '/ajax/v0.2/ownmnote/ajaxdel', 'verb' => 'POST'),
	array('name' => 'ownmnote_api#save', 'url' => '/api/v0.2/ownmnote/save', 'verb' => 'POST'),
	array('name' => 'ownmnote_ajax#ajaxsave', 'url' => '/ajax/v0.2/ownmnote/ajaxsave', 'verb' => 'POST'),
	array('name' => 'ownmnote_api#create', 'url' => '/api/v0.2/ownmnote/create', 'verb' => 'POST'),
	array('name' => 'ownmnote_ajax#ajaxcreate', 'url' => '/ajax/v0.2/ownmnote/ajaxcreate', 'verb' => 'POST'),
	array('name' => 'ownmnote_api#delgroup', 'url' => '/api/v0.2/ownmnote/delgroup', 'verb' => 'POST'),
	array('name' => 'ownmnote_ajax#ajaxdelgroup', 'url' => '/ajax/v0.2/ownmnote/ajaxdelgroup', 'verb' => 'POST'),
	array('name' => 'ownmnote_api#rengroup', 'url' => '/api/v0.2/ownmnote/rengroup', 'verb' => 'POST'),
	array('name' => 'ownmnote_ajax#ajaxrengroup', 'url' => '/ajax/v0.2/ownmnote/ajaxrengroup', 'verb' => 'POST'),
        array('name' => 'ownmnote_api#preflighted_cors', 'url' => '/api/v0.2/{path}', 'verb' => 'OPTIONS', 'requirements' => array('path' => '.+')),
)));
