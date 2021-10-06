<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Libs {
	var $CI;
	
	function __construct(){
		$this->CI =& get_instance();
	}

    	/*** Core Template Function ***/
	
	function getView($view='home/WelcomeMessage',$data=array(),$string=FALSE)
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
			if($_SERVER['HTTP_X_REQUESTED_WITH']=='XMLHttpRequest'){
				if($string==FALSE){
					$this->CI->load->view($view,$data);
				}else{
					return $this->CI->load->view($view,$data,TRUE);
				}
			}else{
				$data['content'] = $this->CI->load->view($view,$data,TRUE);
				if($string==FALSE){
					$this->CI->load->view('admin/themes/MainTemplate',$data);
				}else{
					return $this->CI->load->view('admin/themes/MainTemplate',$data,TRUE);
				}
			}
		}else{
			$data['content'] = $this->CI->load->view($view,$data,TRUE);
			if($string==FALSE){
				$this->CI->load->view('admin/themes/MainTemplate',$data);
			}else{
				return $this->CI->load->view('admin/themes/MainTemplate',$data,TRUE);
			}
		}
	}
	
	function checkMainTemplate($view='home/WelcomeMessage',$data=array())
	{
		if($this->CI->input->get_post('mt')==1){
			$this->CI->load->view($view,$data);
		}else{
			$data['content'] = $this->CI->load->view($view,$data,TRUE);
			$this->CI->load->view('admin/themes/MainTemplate',$data);
		}
	}
	
	/*** End Core Template Function ***/

}