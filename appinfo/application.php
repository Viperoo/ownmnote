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


use \OCP\AppFramework\App;
use \OCP\IContainer;

use \OCA\OwnMNote\Controller\PageController;
use \OCA\OwnMNote\Controller\OwnmnoteApiController;
use \OCA\OwnMNote\Controller\OwnmnoteAjaxController;


class Application extends App {


	public function __construct (array $urlParams=array()) {
		parent::__construct('ownmnote', $urlParams);

		$container = $this->getContainer();

		/**
		 * Controllers
		 */
		$container->registerService('PageController', function(IContainer $c) {
			return new PageController(
				$c->query('AppName'), 
				$c->query('Request'),
				$c->query('UserId')
			);
		});

                $container->registerService('OwnmnoteApiController', function($c){
                        return new OwnmnoteApiController(
                                $c->query('AppName'),
                                $c->query('Request')
                        );
                });

                $container->registerService('OwnmnoteAjaxController', function($c){
                        return new OwnmnoteAjaxController(
                                $c->query('AppName'),
                                $c->query('Request')
                        );
                });

		/**
		 * Core
		 */
		$container->registerService('UserId', function(IContainer $c) {
			return \OCP\User::getUser();
		});		
	}
}
