<?php

class modelWalls extends cmsModel {
    


    public function getEntries(){

                            $this->join('{users}', 'u', 'u.id = i.user_id');
                    $this->select('u.nickname', 'user_nickname');
        return $this->get('wall_entries');
    }
        
    public function getEntriesCount(){

        return $this->getCount('wall_entries');

    }
    
//        public function getEntry($id){
//        
//                    $entry = $this->getItemById('wall_entries', $id);
//            
//                    $this->join('{users}', 'u', 'u.id = i.user_id');
//                    $this->select('u.nickname', 'user_nickname');
//                    $entry['user'] = $this->get('wall_entries');
//        return $this->get('wall_entries');
//                    
//                    
//            
//    }
//    
    

    }
    