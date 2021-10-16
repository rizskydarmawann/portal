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


	function ymdhis2dMonthy($datetime)
	{
		if(in_array($datetime,array('','0000-00-00 00:00:00','0000-00-00','00-00-0000'))){
			return '';
		}
		if($datetime!=''){
			$arr_datetime = explode(' ',$datetime);
			$arr_date = explode('-',$arr_datetime[0]);
			$datetime = $arr_date[2].' '.$this->num2NameMonth($arr_date[1]).' '.$arr_date[0];
		}
		return $datetime;
	}

	function num2NameMonth($num)
	{
		$num = $this->lpad($num,2,'0');
		switch($num)
		{
			case '01': return 'Januari'; break;
			case '02': return 'Februari'; break;
			case '03': return 'Maret'; break;
			case '04': return 'April'; break;
			case '05': return 'Mei'; break;
			case '06': return 'Juni'; break;
			case '07': return 'Juli'; break;
			case '08': return 'Agustus'; break;
			case '09': return 'September'; break;
			case '10': return 'Oktober'; break;
			case '11': return 'November'; break;
			case '12': return 'Desember'; break;
			default : return ''; break;
		}
	}

	function Month($m=0)
	{
		switch($m)
		{
			case '01': return 'Januari'; break;
			case '02': return 'Februari'; break;
			case '03': return 'Maret'; break;
			case '04': return 'April'; break;
			case '05': return 'Mei'; break;
			case '06': return 'Juni'; break;
			case '07': return 'Juli'; break;
			case '08': return 'Agustus'; break;
			case '09': return 'September'; break;
			case '10': return 'Oktober'; break;
			case '11': return 'November'; break;
			case '12': return 'Desember'; break;
			default : return ''; break;
		}
	}

	function lpad($string,$digit,$char=' ')
	{
		return str_pad($string,$digit,$char,STR_PAD_LEFT);
	}

}