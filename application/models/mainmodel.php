<?php
class mainmodel extends CI_model
{
	

public function rgstr($reg,$log)
	{

		$this->db->insert("login",$log);
		$loginid=$this->db->insert_id();
		$reg['loginid']=$loginid;
		$this->db->insert("register",$reg);
	}
public function encpswd($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}

	
	public function selepass($email,$pass)
	{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		return $this->verifypass($pass,$qry);
	}
	public function getuser($id)
 	{
 		$this->db->select('*');
 		$this->db->from("login");
 		$this->db->where("id",$id);
 		return $this->db->get()->row();
 	}
	public function getuserid($email)
	{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
	}
	public function verifypass($pass,$qry)
	{
		return password_verify($pass,$qry);
	}

	/*public function deletedate($d)
{
$this->db->where('depdate<',$d);
$this->db->delete("flightdetails");
}
*/

public function viewflight($dep,$dest,$depdate)
{
$this->db->select('*');
$this->db->where("departure",$dep);
$this->db->where("destination",$dest);
$this->db->where("dep_date",$depdate);
$qry=$this->db->get("flightdetails");
return $qry;
}

public function air($reg)
	{

		$this->db->insert("airport",$reg);
		
	}
	public function aview()
	{
		$this->db->select('*');
		$qry=$this->db->get("airport");
		return $qry;
	}

	public function detailsf($flid)
	{
		$this->db->select('*');
		$this->db->where("flid",$flid);
		$qry=$this->db->get("flightdetails");
		return $qry;
	}

	public function detailsu($id)
	{
		$this->db->select('*');
		$this->db->where("id",$id);
		$qry=$this->db->get("register");
		return $qry;
	}

//checkf()
	public function checkf($flid)
	{
		$this->db->select('*');
		$this->db->where("flid",$flid);
		$qry=$this->db->get("flightdetails");
		return $qry;
	}

public function checku($id)
	{
		$this->db->select('*');
		$this->db->where("id",$id);
		$qry=$this->db->get("register");
		return $qry;
	}

	public function hey()
	{
		$this->db->set('baseat', 'baseat-1',FALSE); 
		 $this->db->where('flid', '1'); 
		$this->db->update('flightdetails');
		echo "mainmodel";
	}

public function viewprofile($id)
	{
		$this->db->select('*');
		$qry=$this->db->join('login','register.loginid=login.id','inner');
		$qry=$this->db->where("register.loginid",$id);
		$qry=$this->db->get("register");
		return $qry;

	}
	public function update($reg,$b,$id)
	{
		$this->db->select('*');
		$qry=$this->db->where("loginid",$id);
		$this->db->join('login','login.id=register.loginid','inner');
		$qry=$this->db->update("register",$reg);
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("login",$b);
		return $qry;
	}
	public function singleselect()
		{
		$qry=$this->db->get("register");
		return $qry;
		}
	public function singledata($id)
	{
		$this->db->select('*');
		$this->db->where("id",$id);
		$qry=$this->db->get("register");
		return $qry;
	}

		public function notifymodel($n)
		{
		$this->db->insert("notification",$n);
			
		}
		public function  admin_notify()
		{
		$this->db->select('*');
		$this->db->join('flightdetails','flightdetails.flid=notification.flid','inner');
		$qry=$this->db->get("notification");
		return $qry;
	
		}
		//admin delete:notification
		public function admin_delete($id)
		{
		$this->db->where("flid",$id);
		$this->db->delete("notification");
		
		}
		public function singledatan($id)
        {
            $this->db->select('*');
            $this->db->where("id",$id);
            $qry=$this->db->get("notification");
            return $qry;

        }
        public function singleselectn()
        {
        $qry=$this->db->get("notification");
        return $qry;
        }
        public function updatedetailsn($a,$id)
        {
        $this->db->select('*');
        $qry=$this->db->where("id",$id);
        $qry=$this->db->update("notification",$a);
        return $qry;
    }

public function  notiuser()
        {
        $this->db->select('*');
        $this->db->join('flightdetails','flightdetails.flid=notification.flid','inner');
        $qry=$this->db->get("notification");
        return $qry;
    }
    public function regis($reg)
	{

		$this->db->insert("flightdetails",$reg);
		
	}

		public function flightview()
	{
		$this->db->select('*');
		$qry=$this->db->get("flightdetails");
		return $qry;
	}
	public function deletedate($d)
{
$this->db->where('dep_date<',$d);
$this->db->delete("flightdetails");
}
public function view($id)
        {
        $this->db->select('*');
        $qry=$this->db->get("flightdetails");
        return $qry;
        }
        public function user()
{
$this->db->select('*');
$this->db->join('login','register.loginid=login.id','inner');
$qry=$this->db->get("register");
return $qry;
}

        public function singleselectf()
        {
        $qry=$this->db->get("flightdetails");
        return $qry;
        }
    public function singledataf($id)
    {
        $this->db->select('*');
        $this->db->where("flid ",$id);
        $qry=$this->db->get("flightdetails");
        return $qry;
    }
        public function updatedetails($a,$id)
        {
        $this->db->select('*');
        $qry=$this->db->update("flightdetails",$a);
        $this->db->where("flid ",$id);
        
        
        return $qry;
        }


public function flightvieww()
	{
		$this->db->select('*');
		$qry=$this->db->get("flightdetails");
		return $qry;
	}
	public function flightname()
        {
            $this->db->select('*');
            $qry=$this->db->get("flightdetails");
            return $qry;

        }
        public function ed($flid)
	{
		$this->db->set('easeat', 'easeat-1',FALSE); 
		 $this->db->where('flid',$flid); 
		$this->db->update('flightdetails');
		
	}

	public function bd($flid)
	{
		$this->db->set('baseat', 'baseat-1',FALSE); 
		 $this->db->where('flid',$flid); 
		$this->db->update('flightdetails');
		
	}

	public function fd($flid)
	{
		$this->db->set('faseat', 'faseat-1',FALSE); 
		 $this->db->where('flid',$flid); 
		$this->db->update('flightdetails');
		
	}

	public function ticket($reg)
	{
		$this->db->insert("ticket",$reg);
		echo "mainmodel";
	}
public function ticketview($id)
{
	$this->db->select('*');
		$this->db->where("userid",$id);
		$qry=$this->db->get("ticket");
		return $qry;
	}

        

}
?>