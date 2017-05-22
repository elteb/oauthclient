<?php
/**
 * ownCloud - oauthclient
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Fèlix Casanellas <felix.casanellas@elteb.org>
 * @copyright Fèlix Casanellas 2017
 */

namespace OCA\OauthClient\Controller;

use \OCP\AppFramework\Controller;

class AuthController extends Controller {

  private $userService;

  public function __construct($appName, IRequest $request, $userService){
      parent::__construct($appName, $request);
      $this->userService = $userService;
  }

  /**
   * @NoAdminRequired
   * @NoCSRFRequired
   */
  public function callback() {
    $this->userService->create('user_prova', 'aaa');
  }
}
