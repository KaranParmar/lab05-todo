<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Groups
 *
 * @author Jake
 */
class Groups extends MY_Model{
            public function __construct()
        {
                parent::__construct('groups', 'id');
        }
}
