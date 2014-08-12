<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel
{
    /*public $validate = array(
        'email' => array(
            'notEmpty' => array(
                'requred' => true,
                'rule' => 'notEmpty',
                'message' => 'This field is required.',
            ),
            'validEmail' => array(
                'rule' => array('email'),
                'message' => 'Requires a valid email.',
            ),
        ),
        'password' => array(
            'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'This field is required.',
            ),
            'min' => array(
                'rule' => array('between', 5,100),
                'message' => 'Requires 5 to 100 characters in length.',
            ),
            
        ),
        'confirm_password' => array(
            'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'This field is required.',
            ),
            'match' => array(
                'rule' => 'password_match',
                'message' => 'Password does not match.',
            ),
        ),
        'firstname' => array(
            'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'This field is required.',
            ),
            'min' => array(
                'rule' => array('between', 2,60),
                'message' => 'Requires 2 to 60 characters in length.',
            ),
            
        ),
        'lastname' => array(
            'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'This field is required.',
            ),
            'min' => array(
                'rule' => array('between', 2,60),
                'message' => 'Requires 2 to 60 characters in length.',
            ),
            
        ),
        'course' => array(
            'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'This field is required.',
            ),
            'min' => array(
                'rule' => array('between', 4,60),
                'message' => 'Requires 4 to 60 characters in length.',
            ),
            
        ),
    );*/
    
    public function password_match($data)
    {
        if($this->data['User']['confirm_password'] ===
            $this->data['User']['password']){
            return true;
        }
        //$this->invalidate('confirm_password', 'Password does not match.');
        return false;
    }
    
    public function beforeSave($options = array())
    {
        if (isset($this->data['User']['password'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data['User']['password'] = $passwordHasher->hash(
            $this->data['User']['password']
            );
        }
        return true;
    }
}