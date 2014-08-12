<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppController', 'controller');

class JobsController extends AppController
{
    public $helpers = array('Html', 'Form');
    
    public function index($data = null)
    {
        if($this->request->is('post')) {
            
            $title = $this->request->data['Job']['title'];
            $results = $this->Job->find('all', 
                array(
                    'order' => array('date' => 'desc'),
                    'conditions' => array('title =' => $title),
                ));
            
            if(!empty($results)) {
                $this->set('error', null);
                return $this->set('jobs', $results);
            }
            $this->set('error', true);
            //$this->Session->setFlash(__('No jobs found.'));
            return false;
        }
        
        if($data != null) {
            return $this->set('jobs', $data);
        }
        
        //$results = $this->Job->find('all',array('order' => 'date DESC'));
        //if(!empty($results)) {
            //return $this->set('jobs', $results);
        //}
        $this->set('error', true);
        $this->Session->setFlash(__('No jobs found.'));
        return false;
    }
    
    public function view() 
    {
        
    }  
    
    public function fetch($tableField, $data) {
        $results = $this->Job->find('all', 
            array(
                'order' => array('date' => 'desc'),
                'conditions' => array($tableField.' =' => $data ),
            ));
    }
    
    public function add()
    {
        if($this->request->is('Post')) {
            $this->Post->create();
            if($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('New job is added!'));
                $this->set('error', true);
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('unable to save post.'));
            $this->set('error', true);
        }
        $this->index();
    }
}