<?php
namespace Wims;


class Wims {
	
	/**
	 * Get external IP address
	 * 
	 * @return string
	 */
	public function getExternalIpAddress() {
		return trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
	}
	
}
?>
