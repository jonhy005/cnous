<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Tools {

	
	/**
	 * Validate date format 
	 * 
	 * @param unknown_type $date
	 * @param unknown_type $format default='DD/MM/YYYY'
	 * @return boolean
	 */

	function valid_date($date, $format = 'DD/MM/YYYY'){
		if(strlen($date) >= 8 && strlen($date) <= 10){
			$separator_only = str_replace(array('M','D','Y'),'', $format);
			$separator = $separator_only[0];
			if($separator){
				$regexp = str_replace($separator, "\\" . $separator, $format);
				$regexp = str_replace('MM', '(0[1-9]|1[0-2])', $regexp);
				$regexp = str_replace('M', '(0?[1-9]|1[0-2])', $regexp);
				$regexp = str_replace('DD', '(0[1-9]|[1-2][0-9]|3[0-1])', $regexp);
				$regexp = str_replace('D', '(0?[1-9]|[1-2][0-9]|3[0-1])', $regexp);
				$regexp = str_replace('YYYY', '\d{4}', $regexp);
				$regexp = str_replace('YY', '\d{2}', $regexp);
				if($regexp != $date && preg_match('/'.$regexp.'$/', $date)){
					foreach (array_combine(explode($separator,$format), explode($separator,$date)) as $key=>$value) {
						if ($key == 'YY') $year = '20'.$value;
						if ($key == 'YYYY') $year = $value;
						if ($key[0] == 'M') $month = $value;
						if ($key[0] == 'D') $day = $value;
					}
					if (checkdate($month,$day,$year)) return true;
				}
			}
		}
		return false;
	}


	/**
	 * parse 'DD/MM/YYYY' date as mysql
	 * @param unknown_type $date
	 * @return string
	 */
	function getMysqlDate($date){
		$arrayDate=explode ("/", $date);
		return $arrayDate[2]."-".$arrayDate[1]."-".$arrayDate[0];
	}

	/**
	 * parse mysql date as 'DD/MM/YYYY'
	 * @param unknown_type $mySqlDate
	 * @return string
	 */
	function getDate($mySqlDate){
		$arrayDate=explode ("-", $mySqlDate);
		return $arrayDate[2]."/".$arrayDate[1]."/".$arrayDate[0];
	}
	
	
}

/* End of file Tools.php */