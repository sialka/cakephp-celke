<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Admin;

use App\Controller\AppController;

class WelComeController extends AppController{
    
    public function index(){
        $user = $this->Auth->user();
        $this->set(compact('user'));
    }
}