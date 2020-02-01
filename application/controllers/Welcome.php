 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->model('Modlatuas');
		$data['person'] = $this->Modlatuas->tampildata()->result();
		$this->template->load("theme","welcome_message",$data);
	}

	public function home()
	{
		$this->load->model('Modlatuas');
		$data['person'] = $this->Modlatuas->tampildata()->result();
		$this->template->load("theme","welcome_message",$data);
	}
	function Form()
	{
		$data="Form";
		$this->template->load("theme","input_form",$data);
	}

	public function save_data()
	{
		//$data="save_data";
		$firstname=$this->input->post('fname');
		$lastname=$this->input->post('lname');
		$gender=$this->input->post('gender');
		$birth=$this->input->post('birth');
		$category=$this->input->post('category');
		$membership=$this->input->post('membership');
		
		$this->load->model('Modlatuas');
		$this->Modlatuas->savedata($firstname,$lastname,$gender,$birth,$category,$membership);
		$data['pesan']="berhasil disimpan";
		//$this->template->load("theme","welcome_message",$data);
		redirect('welcome');
	}
	public function viewdata(){
		$this->load->model('Modlatuas');
		$data['person'] = $this->Modlatuas->select_data()->result();
		$this->template->load('theme', 'welcome_message', $data);
	}

	public function deldata($birth){
		$this->load->model('Modlatuas');
		$this->Modlatuas->delete_data();
	}

}