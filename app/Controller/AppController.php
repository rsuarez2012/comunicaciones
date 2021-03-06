<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
	'Flash',
	'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'comunicaciones',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
                
            ),
            'authenticate' => array(
                'Form' => array(
                	'userModel' => 'User',
                	'fields' => array('username' => 'username', 'password'=>'password'),
                    'passwordHasher' => 'Blowfish'
                )
            ),
			'authorize' => array('Controller'), // Added this line,
            'authError' => false
        )
    );
    /*public function isAuthorized($user) {
    // Admin can access every action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }

    // Default deny
    return false;
    	return $this->Auth->loggedIn($user);
	}
	public function beforeFilter() {
        $this->Auth->allow('index', 'view');
    }*/
    //...
    //
    //
    //public $_current_user = array();
    
    public function beforeFilter(){
        AuthComponent::user('id');
        $this->Auth->allow('login', 'logout');
        //$this->set('current_user', $this->Auth->user());
        //$this->_current_user = $this->Auth->user();
        //$this->set('current_user', $this->_current_user);
        $user = $this->Auth->user();
        $this->set(compact('user'));
    }

    public function isAuthorized($user){
        if (isset($user['role']) && $user['role'] === 'admin') {
            # code...
            return true;
        }
        return false;
    }
}

