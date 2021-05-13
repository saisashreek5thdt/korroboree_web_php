<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Episode extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('k_team_journal/Episode_Model','Episode_Model');
    } 
	public function episode_list_v()
	{
		$data['video']= $this->Episode_Model->video_list();
		//print_r($data['video']);die;
		$data['v']= $this->Episode_Model->video_get_data();
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_list_v',$data);
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function create_v()
	{
		$this->load->model('k_team_journal/Episode_Model','Episode_Model');
		$data['epnum']= $this->Episode_Model->get_data_video();
		//print_r($data['epnum']);die;
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_create_v',$data);
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function upload_file($file_name)
    {
        $upload_path1 = "uploads/";
        $config1['upload_path'] = $upload_path1;
        $config1['allowed_types'] = '*';
        $config1['max_size'] = "3000";
        $img_name1 = strtolower($_FILES[$file_name]['name']);
        $img_name1 = preg_replace('/[^a-zA-Z0-9\.]/', "_", $img_name1);
        $config1['file_name'] = date("YmdHis") . rand(0, 9999999) . "_" . $img_name1;
        $this->load->library('upload', $config1);
        $this->upload->initialize($config1);
        $this->upload->do_upload($file_name);
        $fileDetailArray1 = $this->upload->data();
        return $fileDetailArray1['file_name'];
    }
	public function add(){
	
	
		if ($_FILES['file']['name'] != '') { // input  file  name ex: image_desti
            $image = $this->upload_file('file');
        } else {
            $image = "empty";
        }
	
		$data = array(
            'episode_number' => $this->input->post('number'),
            'title' => $this->input->post('title'),
            'month' => $this->input->post('month'),
            'story_board	' => $image,
        );
        //print_r($data);die;
		$video_insert= $this->Episode_Model->video_insert($data);
		redirect('episode_list_v');
	}
	
	
	
	
	public function view_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_view_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function edit_v($id)
	{
		$data['edit_v'] =	$this->Episode_Model->edit_by_id($id); 
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_edit_v',$data);
		$this->load->view('k_team_video_journal/footer');
	}
	public function  update($id){
	
		$data = array(
            'title' => $this->input->post('title'),
        );
       
             $this->Episode_Model->update($id,$data); 
        
		redirect("episode_list_v");
	
	}
	
	
	public function delete($id){
			$this->Episode_Model->delete($id); 
	
			redirect("episode_list_v");
	}
	public function tracker_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_tracker_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
}
