<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class first extends CI_Controller {

	/**
	 * Index Page for= this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	redirect(base_url().'first/searchf');
		
	}
		public function regist()
	{	
		$this->load->view('reg_form');
	}

	public function idsave()
	{
		$flid=$this->uri->segment(3);
		$this->load->library(array('session'));	
		$newdata = array( 
   'flid'  => $flid 
);  

	$this->session->set_userdata($newdata);
	
	redirect(base_url().'first/regist');
		

	}

public function registrationForm()
	{	

		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","firstname",'required');
		$this->form_validation->set_rules("lname","lastname",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("phno","phonenumber",'required');
	$this->form_validation->set_rules("aadhar","aadharnumber",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');
		$pass=$this->input->post("password");
		$encpass=$this->mainmodel->encpswd($pass);
		$reg=array("fname" => $this->input->post("fname"),
					"lname"=>$this->input->post("lname"),
					"age"=>$this->input->post("age"),
					"gender"=>$this->input->post("gender"),
					"address"=>$this->input->post("address"),
					"phno"=>$this->input->post("phno"),
					"aadhar"=>$this->input->post("aadhar"));
		$log=array("email"=>$this->input->post("email"),
				"password"=>$encpass,
				"utype"=>'1');
		$this->mainmodel->rgstr($reg,$log);
		redirect(base_url().'first/regist');
		}
	}

//load login page
	public function log()
	{
		$this->load->view('login');
	}

	//login function
		public function login()
		{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		 	{
		 		$this->load->model('mainmodel');
		 		$email=$this->input->post("email");
		 		$pass=$this->input->post("password");
		 		$rslt=$this->mainmodel->selepass($email,$pass);
		 		if($rslt)
		 		{
		 			$id=$this->mainmodel->getuserid($email);
		 			$user=$this->mainmodel->getuser($id);
		 			$this->load->library(array('session'));	 
		 			$this->session->set_userdata(array('id'=>(int)$user->id,'utype'=>$user->utype));
		 			if($_SESSION['utype']=='0')
			 			{
			 				redirect(base_url().'first/adminpage');
			 			}
		 			elseif($_SESSION['utype']=='1') 
			 			{
			 			 	redirect(base_url().'first/formdetails');
			 			 } 
		 			}
		 		else
		 		{
		 			echo "invalid user";
		 		}
		 }
	else
	{
		redirect('first/login','refresh');
	}
}

	public function home()
	{

		$this->load->view('home');
	}


	//viewing flight and user details
	public function formdetails()
	{
		$id=$_SESSION['id'];
		$flid=$_SESSION['flid'];
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->detailsf($flid);
		$data['m']=$this->mainmodel->detailsu($id);
		$this->load->view('formdetails',$data);

	}



	public function flight()
	{

		$this->load->view('flight');
	}
	public function flightForm()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("flname","flightname",'required');
		$this->form_validation->set_rules("flno","flightno",'required');
	$this->form_validation->set_rules("depar","departuredata",'required');
		$this->form_validation->set_rules("depdate","depar date",'required');
		$this->form_validation->set_rules("deptime","depar time",'required');
		$this->form_validation->set_rules("dest","destination",'required');
	$this->form_validation->set_rules("desdate","destdate",'required');
		$this->form_validation->set_rules("destime","desttime",'required');
		$this->form_validation->set_rules("btseat","btseat",'required');
		$this->form_validation->set_rules("ftseat","ftseat",'required');
		$this->form_validation->set_rules("etseat","etseat",'required');
		$this->form_validation->set_rules("baseat","baseat",'required');
		$this->form_validation->set_rules("faseat","faseat",'required');
		$this->form_validation->set_rules("easeat","easeat",'required');
		$this->form_validation->set_rules("cost","cost",'required');

		$this->form_validation->set_rules("seatsa","seatsa",'required');
		$this->form_validation->set_rules("bcost","bcost",'required');
		$this->form_validation->set_rules("fcost","fcost",'required');
		$this->form_validation->set_rules("ecost","ecost",'required');
		$this->form_validation->set_rules("bccost","bccost",'required');
		$this->form_validation->set_rules("fccost","fccost",'required');
		$this->form_validation->set_rules("eccost","eccost",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');
		$encpass=$this->mainmodel->encpswd($pass);
		$reg=array("airline" => $this->input->post("flname"),
					"fl_number"=>$this->input->post("flno"),
					"departure"=>$this->input->post("depar"),
					"dep_date"=>$this->input->post("depdate"),
					"dep_time"=>$this->input->post("deptime"),
					"destination"=>$this->input->post("dest"),
					"dest_date"=>$this->input->post("desdate"),
					"dest_time"=>$this->input->post("destime"),
			"btseats"=>$this->input->post("btseat"),
			"ftseats"=>$this->input->post("ftseat"),
			"etseats"=>$this->input->post("etseat"),
			"baseat"=>$this->input->post("baseat"),
			"faseat"=>$this->input->post("faseat"),
			"easeat"=>$this->input->post("easeat"),
			"cost"=>$this->input->post("cost"),

			"seatsa"=>$this->input->post("seatsa"),
			"bcost"=>$this->input->post("bcost"),
			"fcost"=>$this->input->post("fcost"),
			"ecost"=>$this->input->post("ecost"),
			"bccost"=>$this->input->post("bccost"),
			"fccost"=>$this->input->post("fccost"),
			"eccost"=>$this->input->post("eccost"),
		);

		$this->mainmodel->regis($reg);
		redirect(base_url().'first/flight');
		}
	}
	
	public function flview()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->flightview();
		$this->load->view('fview',$data);
	}
	public function search()
	{
		
		$this->load->view('search');
	}
	public function flightclass()
	{

		$this->load->view('flightclass');
	}
	public function seat()
	{

		$this->load->view('seat');
	}
	public function airview()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->aview();
		$this->load->view('airportview',$data);
	}
 public function searchf()
    {
        $this->load->view('search');
    }
    public function searchaction()
    {
        $this->load->model('mainmodel');
        $d=date('y-m-d');
        //$this->mainmodel->deletedate($d);
        $dep=$this->input->post("dep");
        $dest=$this->input->post("dest");
        $depdate=$this->input->post("sdate");
        $data['n']=$this->mainmodel->viewflight($dep,$dest,$depdate);
        $this->load->view('fview',$data);

    }
    public function airport()
	{
		
		$this->load->view('airport');
	}
    public function airportForm()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("aname","airportname",'required');
		$this->form_validation->set_rules("abr","abbrevation",'required');
		$this->form_validation->set_rules("city","city",'required');
		$this->form_validation->set_rules("state","state",'required');
		$this->form_validation->set_rules("zip","zip",'required');
		$this->form_validation->set_rules("tzone","tzone",'required');

		
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');
		$reg=array("airportname" => $this->input->post("aname"),
					"abrv"=>$this->input->post("abr"),
					"city"=>$this->input->post("city"),
					"state"=>$this->input->post("state"),
					"zipcode"=>$this->input->post("zip"),
					"tzone"=>$this->input->post("tzone"));
		$this->mainmodel->air($reg);
		redirect(base_url().'first/airport');
		}
	}
//ticket booking
	public function ticketbook()
	{	$id=$_SESSION['id'];
		$flid=$_SESSION['flid'];
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->detailsf($flid);
		$data['m']=$this->mainmodel->detailsu($id);
		$this->load->view('ticketbook',$data);
		
	} 

	public function checking()
	{	$id=$_SESSION['id'];
		$flid=$_SESSION['flid'];
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->checkf($flid);
		$data['m']=$this->mainmodel->checku($id);
		$this->load->view('checking',$data);
		
	}

		//adding cost details

	public function cost()
	{	$id=$_SESSION['id'];
		$flid=$_SESSION['flid'];
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->checkf($flid);
		$data['m']=$this->mainmodel->checku($id);

	$data['o']=$this->input->post("seat");
	$this->load->view('paymentdetails',$data);

		
	}
	public function demo()
	{


	$data=$this->input->post("cost");
	$this->load->library('session');

	$this->load->library(array('session'));	
		$newdata = array( 
   'cost'  => $data
);  
	
	$this->session->set_userdata($newdata);
	
	redirect(base_url().'paytm');
		

	//$this->load->view('upgrade',$data);

		
		
	}

	public function pay()
	{
	

$data=$this->input->post("cost");
$value=$this->input->post("seat");
//economic,business,first;


	$this->load->library('session');

	$this->load->library(array('session'));	
		$newdata = array( 
   'cost'  => $data,
   'seat'=>$value
);  
	
	$this->session->set_userdata($newdata);
	exit();


	
	redirect(base_url().'first/ticketfunction');

		
	}

// $this->db->set('views', 'views + 1',FALSE); 
// $this->db->where('id', $id); 
// this->db->update('articles'); 

public function viewuser()
	{
		$this->load->model('mainmodel');
		$id=$this->session->id;
		$data['user_data']=$this->mainmodel->viewprofile($id);
		$this->load->view('userupdation',$data);

	}
    public function update()
	{

		$reg=array("fname"=>$this->input->post("fname"),
					"lname"=>$this->input->post("lname"),
					"age"=>$this->input->post("age"),
					"gender"=>$this->input->post("gender"),
					"address"=>$this->input->post("address"),
					"phno"=>$this->input->post("phno"),
					"aadhar"=>$this->input->post("aadhar"));
		$b=array("email"=>$this->input->post("email"),'utype'=>'1');
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$data['user_data']=$this->mainmodel->singledata($id);
		$this->mainmodel->singleselect();
		$this->load->view('userupdation',$data);
		if($this->input->post("update"))
		{
			$id=$this->session->id;
			$this->mainmodel->update($reg,$b,$id);
			redirect('first/viewuser','refresh');
		}
}
	public function usernoti()
    {
        
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->notiuser();
        $this->load->view('user_viewnoti',$data);

    }

public function adminpage()
		{
			$this->load->view('adminpage');
		}
		

public function viewflightdetails()
            { 
            $this->load->model('mainmodel');
            $id=$this->session->id;
            $d=date('y-m-d');
            $this->mainmodel->deletedate($d);
            $data['user_data']=$this->mainmodel->view($id);
            $this->load->view('updateflight',$data);
            }
        public function updatedetails()
            {
            $a=array("airline" => $this->input->post("flname"),
                    "fl_number"=>$this->input->post("flno"),
                    "departure"=>$this->input->post("depar"),
                    "dep_date"=>$this->input->post("depdate"),
                    "dep_time"=>$this->input->post("deptime"),
                    "destination"=>$this->input->post("dest"),
                    "dest_date"=>$this->input->post("desdate"),
                    "dest_time"=>$this->input->post("destime"),
            "btseats"=>$this->input->post("btseat"),
            "ftseats"=>$this->input->post("ftseat"),
            "etseats"=>$this->input->post("etseat"),
            "baseat"=>$this->input->post("baseat"),
            "faseat"=>$this->input->post("faseat"),
            "easeat"=>$this->input->post("easeat"),
            "cost"=>$this->input->post("cost"));

            $this->load->model('mainmodel');
            $id=$this->uri->segment(3);
            $data['user_data']=$this->mainmodel->singledataf($id);
            $this->mainmodel->singleselectf();
            $this->load->view('updateflight',$data);
            if($this->input->post("update"))
            {
                $id=$this->session->id;
                $this->mainmodel->updatedetails($a,$id);
            redirect('first/viewflightdetails','refresh');
            }
}
	
public function fllview()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->flightvieww();
		$this->load->view('ffview',$data);
	}

public function user()
   {
$this->load->model('mainmodel');
   $data['n']=$this->mainmodel->user();
$this->load->view('userview',$data);
  }
public function flightname()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->flightname();
        $this->load->view('notify_view',$data);  //loading view

    }
    public function notify_action()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("noti","notification",'required');

		if($this->form_validation->run())
		{

			
			$this->load->model('mainmodel');

			$n=array("notification"=>$this->input->post("noti"),"flid"=>$this->input->post("flight"));

			$this->mainmodel->notifymodel($n);
			redirect('first/flightname','refresh');
		}	
	}
	/*notification insertion ends*/

	/*notification: admin view*/

	public function notiadmin()
	{
		
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->admin_notify();
		$this->load->view('admin_notify_view',$data);

	}
	/*notification:admin delete*/
	public function notify_delete()
	{
		$id=$this->uri->segment(3);
		$this->load->model('mainmodel');
		$this->mainmodel->admin_delete($id);
		redirect('first/notiadmin','refresh');
	}

	/*notification :admin update*/

	public function admin_update()
	{
		
		$a=array("notification"=>$this->input->post("noti"));
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);

		$data['user_data']=$this->mainmodel->singledatan($id);
		$this->mainmodel->singleselectn();
		$this->load->view('update_noti_view',$data);
		if($this->input->post("update"))
		{
			$this->mainmodel->updatedetailsn($a,$this->input->post("id"));
			redirect('first/notiadmin','refresh');
		}
	}

public function ticketfunction()
	{
		$id=$_SESSION['id'];

	
		$flid=$_SESSION['flid'];
		$this->load->model('mainmodel');
		$data['m']=$this->mainmodel->checkf($flid);
		$data['n']=$this->mainmodel->checku($id);

	$data['o']=$_SESSION['cost'];
	$data['p']=$_SESSION['seat'];

	$this->load->view('ticketgeneration',$data);


	}
	public function storedetails()
	{
		$this->load->model('mainmodel');
		$id=$_SESSION['id'];
		$reg=array("flid" => $this->input->post("flid"),
					"fname"=>$this->input->post("fname"),
					"name"=>$this->input->post("name"),
					"age"=>$this->input->post("age"),
					"amount"=>$this->input->post("amount"),
					"seat"=>$this->input->post("seat"),
					"userid"=>$id);
		$this->mainmodel->ticket($reg);
		redirect(base_url().'first/settable');

	}

	public function settable()
	{
			$flid=$_SESSION['flid'];

			$seat=$_SESSION['seat'];



			//economic,business,first;
			$this->load->model('mainmodel');


			if($seat=='economic')
			{
				$this->mainmodel->ed($flid);
			}

			elseif($seat=='business')
			{
				$this->mainmodel->bd($flid);
			}
			else
			{
				$this->mainmodel->fd($flid);
			}


				redirect(base_url().'first/ticketdetails');

	}

	public function ticketdetails()
	{	
		$this->load->model('mainmodel');
		$id=$_SESSION['id'];
		$data['n']=$this->mainmodel->ticketview($id);
		$this->load->view('myticket',$data);



	}



	
}
