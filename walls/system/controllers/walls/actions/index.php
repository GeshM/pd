<?php

class actionWallsIndex extends cmsAction {
    
    public function run() {
        
        $template = cmsTemplate::getInstance();

        $total = $this->model->getEntriesCount();
        $walls = $this->model->getEntries();

        
        $template->render('index', array(
            'walls' => $walls,
            'total' => $total,

 
            
        ));
        
    }
    
    
}
