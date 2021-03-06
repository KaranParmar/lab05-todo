<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Views
 *
 * @author Jake
 */
class Views extends Application
{

    public function index()
    {
        $this->data['pagetitle'] = 'Ordered TODO List';
        $tasks = $this->tasks->all();   // get all the tasks
        $this->data['content'] = 'Ok'; // so we don't need pagebody
        //$this->data['leftside'] = 'by_priority';
        //$this->data['rightside'] = 'by_category';
        $this->data['leftside'] = $this->makePrioritizedPanel($tasks);
        $this->data['rightside'] = $this->makeCategorizedPanel($tasks);

        $this->render('template_secondary');
    }

    public function makePrioritizedPanel($tasks)
    {
        $parms = ['display_tasks' => []];
        return $this->parser->parse('by_priority', $parms, true);
    }
    
    public function makeCategorizedPanel($tasks)
    {
        $parms = ['display_tasks' => []];
        return $this->parser->parse('by_priority', $parms, true);
    }    

}
