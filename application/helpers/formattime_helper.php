<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * RoePET Club Text Helpers
 *
 * @package		RoePET Club
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Ewerson S.
 * @link		https://github.com/ewersonsv/FormatTime-CI3
 */
if(!function_exists('FormatTime')){
	function FormatTime($time){
	    $cur_time     = time();
	    $time_elapsed = $cur_time - $time;
	    $seconds      = $time_elapsed;
	    $minutes      = round($time_elapsed / 60);
	    $hours        = round($time_elapsed / 3600);
	    $days         = round($time_elapsed / 86400);
	    $weeks        = round($time_elapsed / 604800);
	    $months       = round($time_elapsed / 2600640);
	    $years        = round($time_elapsed / 31207680);
	    // Seconds
	    if ($seconds <= 60) {
	        $result = strtoupper('Agora Mesmo...');
	    }
	    //Minutes
	    else if ($minutes <= 60) {
	        if ($minutes == 1) {
	            $result = strtoupper($minutes.' Minuto atrás.');
	        } else {
	            $result = strtoupper($minutes.' Minutos atrás.');
	        }
	    }
	    //Hours
	    else if ($hours <= 24) {
	        if ($hours == 1) {
	            $result = strtoupper($hours.' Hora atrás');
	        } else {
	            $result = strtoupper($hours.' Horas atrás');
	        }
	    }
	    //Days
	    else if ($days <= 7) {
	        if ($days == 1) {
	            $result = strtoupper($days.' Dia atrás');
	        } else {
	            $result = strtoupper($days.' Dias atrás');
	        }
	    }
	    //Weeks
	    else if ($weeks <= 4.3) {
	        if ($weeks == 1) {
	            $result = strtoupper($weeks.' Semana atrás');
	        } else {
	            $result = strtoupper($weeks.' Semanas atrás');
	        }
	    }
	    //Months
	    else if ($months <= 12) {
	        if ($months == 1) {
	            $result = strtoupper($months.' Mês atrás');
	        } else {
	            $result = strtoupper($months.' Mêses atrás');
	        }
	    }
	    //Years
	    else {
	        if ($years == 1) {
	            $result = strtoupper($years.' Ano atrás');
	        } else {
	            $result = strtoupper($years.' Anos atrás');
	        }
	    }
	    return $result;
	}
}
