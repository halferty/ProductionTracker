<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array(
		'Acl',
		'Auth' => array(
			'authorize' => array(
				'Actions' => array('actionPath' => 'controllers')
			)
		),
		'Session'
	);
	
	public $helpers = array('Html', 'Form', 'Session');
	
	public function beforeFilter() {
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		
		/* "Normally, the AuthComponent remembers what controller/action pair you 
			were trying to get to before you were asked to authenticate yourself. 
			Upon a successful authentication you will be redirected to your original 
			destination. However, you can force people to go to a specific 
			controller/action pair if needed." */
		//$this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'index');
		
		$this->set('current_user',$this->Auth->User('username'));
		$this->set('current_user_superadmin', $this->Auth->User('superadmin'));
		if ($this->Auth->User('superadmin') != "") {
			$this->Auth->allow('*');
		} else {
			$this->Auth->allow('login', 'logout', 'display');
		}
	}
}
