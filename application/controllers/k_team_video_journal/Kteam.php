<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kteam extends CI_Controller {

	public function dashboard_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/dashboard');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function project_list_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/project_list_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function kteam_file_manager_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/kteam_file_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function kteam_library()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/kteam_library');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function kteam_userdata_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/kteam_userdata_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function userdata_view_v()
	{
		$this->load->model('k_team_journal/Episode_Model','Episode_Model');
		$data['episode_video']= $this->Episode_Model->episode_video_list();
		//print_r($data['episode_video']);die;
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/userdata_view_v',$data);
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function userdata_topic_view_v(){

		$this->load->model('k_team_journal/Episode_Model','Episode_Model');
		  $data[] = "";
	
			$id= $this->input->post('id');
			
			if($id == 1 ){	
				$data['video']= $this->Episode_Model->topics_list_video($id);
	//echo $this->db->last_query();die;
			}elseif($id == 2){
				$data['video']= $this->Episode_Model->topics_list_video($id);
				
			}elseif($id == 3){
				$data['video']= $this->Episode_Model->topics_list_video($id);
			}elseif($id == 4){
				$data['video']= $this->Episode_Model->topics_list_video($id);
			}elseif($id == 5){
				$data['video']= $this->Episode_Model->topics_list_video($id);
			}elseif($id == 6){
				
				$data['video']= $this->Episode_Model->topics_list_video($id);
			}


		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/userdata_topic_view_v',$data);
		$this->load->view('k_team_video_journal/footer');
	 }
 
	
}
