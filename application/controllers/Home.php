<?php 
class Home extends CI_Controller
{

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('home');
		$this->load->view('includes/footer');
	}
	public function more_products()
	{
		$this->load->view('includes/header');
		$this->load->view('more_products');
		$this->load->view('includes/footer');
	}
	public function product_single($id)
	{
		$this->load->view('includes/header');
		$this->load->view('product_single');
		$this->load->view('includes/footer');
	}
	public function login()
	{
		if($this->input->method()=='post')
		{
			$_POST['password']=md5($_POST['password']);
			$resp=$this->db->select(['id','name','email','status','access'])->from('users')->where($_POST)->get()->row();
			if($resp)
			{
				$this->session->set_userdata('user_session',array('access'=>$resp->access,'name'=>$resp->name,'email'=>$resp->email,'user_id'=>$resp->id));
				$arr=array('status'=>'true','message'=>'success','access'=>$resp->access);
			}
			else 
			{
				$arr=array('status'=>'false','message'=>'Username And Password Not Match');
			}

			echo json_encode($arr);
		}
		else 
		{
			$session_data=$this->session->userdata('user_session');
			if($session_data)
			{
				redirect(base_url().'admin');
				die();
			}
			$this->load->view('login');	
		}
		
	}
	public function signup()
	{
		$this->load->view('signup');	
	}
	function logout()
	{
		$this->session->unset_userdata('user_session');
		redirect(base_url().'home/login');
	}

}
?>