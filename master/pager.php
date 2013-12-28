<?php

/**
 * Class Pager
 *
 * handles the page routing
 * @author Chinmay G.
 * @link http://www.aveshan.com
 * @link https://github.com/Aveshan/pageR
 * @license http://opensource.org/licenses/MIT MIT License
 */
class Pager {

	private $_income = null;
	private $_errorFile = 'error.php';
	private $_trimagent = '/\^$';
	private $_linkspath = 'links/';
	private $_adminpath = 'links/admin/';
	/**
	 * Starts the pageR
	 *
	 * @return boolean
	 */

	public function __construct() {
		// Sets the protected $_url
		$this -> _getIncome();
		// Load the default page if no URL is set
		if (empty($this -> _income[0])) {
			$this -> _loadDefault();
		} else {

			$this -> _loadExisting();
		}
	}// end of __construct()

	private function _loadDefault() {
		require 'links/header.php';
		$login = new Login();
		$core = new Core();
		require 'links/home.php';
		require 'links/footer.php';
	}// end of _loadDefault()

	private function _loadExisting() {
		$filename = $this -> _income[0];
		if ($this -> _income[0] == 'admin') {
			$this -> _loadLogin();
		} else {
			if (!file_exists($this -> _linkspath . $filename . '.php')) {
				$this -> _error();
			} else {
				$login = new Login();
				$core = new Core();
				require 'links/header.php';
				require $this -> _linkspath . $filename . '.php';
				require 'links/footer.php';
			}
		}

	}// end of _loadExisting()

	private function _loadLogin() {
		$login = new Login();
		$core = new Core();
		if ($login -> isUserLoggedIn()) {
			if (isset($this -> _income[1])) {
				$afilename = $this -> _income[1];
				if (!file_exists($this -> _adminpath . $afilename . '.php')) {
					echo "<center><h2 style='color:red; margin-top:20%;'>Error! 404 Page Cannot Found</h2><a href='" . URL . "/admin/'>Go Back</a></center>";
				} else {
					require 'links/admin/header.php';
					require $this -> _adminpath . $afilename . '.php';
					require 'links/admin/footer.php';
				}
			} else {
				require 'links/admin/header.php';
				require 'links/admin/home.php';
				require 'links/admin/footer.php';
			}
		} else {
			require 'links/admin/header.php';
			require 'links/admin/login.php';
			require 'links/admin/footer.php';
		}

	}// end of _loadLogin()

	private function _error() {
		$login = new Login();
		$core = new Core();
		require 'links/header.php';
		require 'links/error.php';
		require 'links/footer.php';
	}// end of _error()

	private function _getIncome() {
		$url = isset($_GET['url']) ? $_GET['url'] : '/';
		$url = rtrim($url, $this -> _trimagent);
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$this -> _income = explode('/', $url);
	}// end of _getIncome()

}// end of class
