<?php 

class Episode_Model extends CI_model{

    public function create_topic($data ){

        $query = $this->db->insert('episode', $data);
        return $query;
        }


  public function Update_topic($tp,$datas ){
    $this->db->where('id', $tp);
        $this->db->update('topic', $datas);

        }

        public function get_data( ){
           
        
            $query=$this->db->get('episode'); 
            $num = $query->num_rows();
                return $num;
              
            
            }
            public function video_get_data( ){

                $query=$this->db->get('video'); 
            
                    return $query;
                  
                }
            
            public function video_insert($data){
                $query = $this->db->insert('episode_video_list', $data);
                return $query;
            
            }
            public function get_data_video( ){
           
        
                $query=$this->db->get('episode_video_list'); 
                $num = $query->num_rows();
                    return $num;
                  
                
                }
            public function  video_list(){
                    $this->db->select("*");
                    $this->db->from(' episode_video_list');
                    // $this->db->order_by('id','ASC');
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                        return $query->result();
                    } else {
                        return false;
                    }
                }
                public function edit_by_id($id)
                {
                    $this->db->where("id", $id);
                 
                   $query = $this->db->get("episode_video_list");
                      //echo $this->db->last_query();die;
                   return $query->row();
    
                }
                
                public function delete( $id)
                {
                   $this->db->where('id', $id);
                     $this->db->delete('episode_video_list');
                 }
    
                 public function update($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('episode_video_list', $data);
        //echo $this->db->last_query();die;
    }
                
                
            public function get_info( ){

        
                $query=$this->db->get('episode'); 
            
                    return $query;
                  
                
                }

                public function delete_episode($id){
                    $this -> db -> where('id', $id);
                    $this -> db -> delete('episode');
    
                }
                public function  topics_list()
                {
                    $this->db->select("*");
                    $this->db->from(' topic');
                    // $this->db->order_by('id','ASC');
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                        return $query->result();
                    } else {
                        return false;
                    }
                }
        
                public function topics_list_id1($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( 'video' );
                    $this->db->join ( 'topic', 'topic.topic_number = video.topic_number' , 'left' );
                    $this->db->where ( 'video.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                  public function topics_list_id2($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( 'moonshot_conversations' );
                    $this->db->join ( 'topic', 'topic.topic_number = moonshot_conversations.topic_number' , 'left' );
                    $this->db->where ( 'moonshot_conversations.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->row ();
                }
                  public function topics_list_id3($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( ' topics_data_list' );
                    $this->db->join ( 'topic', 'topic.topic_number =  topics_data_list.topic_number' , 'left' );
                    $this->db->where ( ' topics_data_list.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                  public function topics_list_id4($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( ' topics_data_list_1' );
                    $this->db->join ( 'topic', 'topic.topic_number = topics_data_list_1.topic_number' , 'left' );
                    $this->db->where ( 'topics_data_list_1.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                  public function topics_list_id5($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( ' topics_data_list_2' );
                    $this->db->join ( 'topic', 'topic.topic_number = topics_data_list_2.topic_number' , 'left' );
                    $this->db->where ( 'topics_data_list_2.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                  public function topics_list_id6($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( '  topics_6' );
                    $this->db->join ( 'topic', 'topic.topic_number =  topics_6.topic_number' , 'left' );
                    $this->db->where ( ' topics_6.topic_number', $id);
                    $query = $this->db->get ();
                    return $query->result ();
                }
                 
                  public function  episode_video_list()
                {
                    $this->db->select("*");
                    $this->db->from(' episode');
                    // $this->db->order_by('id','ASC');
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                        return $query->result();
                    } else {
                        return false;
                    }
                }


                 
            public function topics_list_video($id)
                {
                   $this->db->select ( '*' ); 
                    $this->db->from ( 'episode_video_list' );
                    $this->db->join ( 'tabl_video_journal_segment_1', 'tabl_video_journal_segment_1.segment_id = episode_video_list.episode_number' , 'left' );
                    $this->db->where ( 'episode_video_list.episode_number', $id);
                   
                    $query = $this->db->get ();
                    return $query->result ();
                }

}


?>