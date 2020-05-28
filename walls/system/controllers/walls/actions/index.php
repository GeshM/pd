<?php

class actionWallsIndex extends cmsAction {
    
    public function run() {
        
        $template = cmsTemplate::getInstance();

        $total = $this->model->getEntriesCount();
        $walls = $this->model->joinUser()->getEntries(); // user_nickname, user_avatar будут прикреплены к записям

        
        $template->render('index', array(
            'walls' => $walls,
            'total' => $total,

 
            
        ));
        
    }
    
    
}
