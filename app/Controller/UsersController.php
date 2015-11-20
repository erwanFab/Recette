<?php

class UsersController extends AppController {

	public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
    	'order' => array('User.username' => 'asc' ) 
    );
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login'); 
    }
	

   
        
    

	public function login() {
		
          /*  
             $this->User->save(array(
                   
                   'username'=>'FamilleKit&Vie',
             'email'=>'',
                   'password'=>$this->Auth->password('Recette:1580'),
                   'role'=>'invite',
              'status'=>'1'
               ));
         */
     
                
		//if already logged-in, redirect
		if($this->Session->check('Auth.User')){
			$this->redirect(array('action' => 'index'));		
		}
		
		// if we get the post information, try to authenticate
		if ($this->request->is('post')) {
                    
			if ($this->Auth->login()) {
                               # debug(AuthComponent::user('username'));
				#$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
				#$this->redirect($this->Auth->redirectUrl());
                                return $this->redirect(array('controller'=>'Acceuil','action'=>'index'));
			
                
                                
                        } else {
				$this->Session->setFlash(__('Invalid username or password'));
			}
		} 
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

    public function index() {
		$this->paginate = array(
			'limit' => 6,
			'order' => array('User.username' => 'asc' )
		);
		$users = $this->paginate('User');
		$this->set(compact('users'));
    }


    public function add() {
        
      #  debug($this->Session->read());
        
        if($this->Auth->user('role')=='admin'){
        
        if (
                $this->request->is('post')) {
				
			$this->User->create();
                                
                           $this->request->data['User']['password']=  AuthComponent::password($this->request->data['User']['password']);     
                                
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been created'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be created. Please, try again.'));
			}	
        }
    }else {
        $use=$this->Auth->user('username');
        $this->Session->setFlash(__($use.' are not created an other user'));
    }
    }

    public function edit($id = null) {

         if($this->Auth->user('role')=='admin'){
		    if (!$id) {
				$this->Session->setFlash('Please provide a user id');
				$this->redirect(array('action'=>'index'));
			}

			$user = $this->User->findById($id);
			if (!$user) {
				$this->Session->setFlash('Invalid User ID Provided');
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->User->id = $id;
                                $this->request->data['User']['password']=  AuthComponent::password($this->request->data['User']['password_update']);     
                           
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been updated'));
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash(__('Unable to update your user.'));
				}
			}

			if (!$this->request->data) {
				$this->request->data = $user;
			}
        }else {
                $use=$this->Auth->user('username');
                $this->Session->setFlash(__($use.' are not edited an other user,required an admin\'s user'));
        }
    }

    public function delete($id = null) {
	 if($this->Auth->user('role')=='admin'){	
		if (!$id) {
			$this->Session->setFlash('Please provide a user id');
			$this->redirect(array('action'=>'index'));
		}
		
                $this->User->id = $id;
                if (!$this->User->exists()) {
                    $this->Session->setFlash('Invalid user id provided');
                                $this->redirect(array('action'=>'index'));
                }
                if ($this->User->saveField('status', 0)) {
                    $this->Session->setFlash(__('User deleted'));
                    $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('User was not deleted'));
                $this->redirect(array('action' => 'index'));
         }  else {
             $this->Session->setFlash(__('User was not deleted,required an andmi\'s user'));
         }
    }	
	public function activate($id = null) {
             if($this->Auth->user('role')=='admin'){
		if (!$id) {
			$this->Session->setFlash('Please provide a user id');
			$this->redirect(array('action'=>'index'));
		}
		
                $this->User->id = $id;
                if (!$this->User->exists()) {
                    $this->Session->setFlash('Invalid user id provided');
                                $this->redirect(array('action'=>'index'));
                }
                if ($this->User->saveField('status', 1)) {
                    $this->Session->setFlash(__('User re-activated'));
                    $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('User was not re-activated'));
                $this->redirect(array('action' => 'index'));
            }
        }

}