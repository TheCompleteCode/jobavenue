<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'controller');

class UsersController extends AppController
{
	
    public function register()
    {
	//$this->autoRender = false;	
        
    }
    
    public function addUser()
    {   
        $this->autoRender = false;
        if(!empty($this->request->query)) {
            if($this->User->save($this->request->query['data'])) {
                $this->Auth->login($this->request->query['data']['User']);
                return 'success';
            }
        }
        return 'failed';
    }
    
    
    public function login() 
    {    
	$this->autoRender = false;
        if(!empty($this->request->query)) {
            if($this->Auth->login($this->request->query['data']['User'])) {
                return 'success';
            }
        }
        return 'failed';
    }
    
    public function logout() 
    {
        $this->redirect($this->Auth->logout());
    }
}