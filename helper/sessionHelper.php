<?php
class sessionHelper
{
	private $sessionVar         = 'hzm_sess';
	private $sessionVarAdmin    = 'hzm_sess_admin';
	private static $_instance   = null;

	public static function getInstance()
	{
		if (!isset(self::$_instance)) {
			self::$_instance = new sessionHelper();
		}
		return self::$_instance;
	}

	public function start()
	{
		setcookie('same-site-cookie', 'foo', ['samesite' => 'Lax']);
		setcookie('cross-site-cookie', 'bar', ['samesite' => 'None', 'secure' => true]);

		session_start();
	}

	public function end()
	{
		session_write_close();
	}

	public function setVar($var, $value)
	{
		$_SESSION[$var] = $value;
	}

	public function getVar($var, $defValue = false)
	{
		if (isset($_SESSION[$var])) {
			return $_SESSION[$var];
		}

		return $defValue;
	}


	public function setUserSession($account)
	{
		$_SESSION[$this->sessionVar] = $account;
	}

	public function getUserSession()
	{
		if (isset($_SESSION[$this->sessionVar])) {
			return $_SESSION[$this->sessionVar];
		}

		return false;
	}

	public function removeUserSession()
	{
		if (isset($_SESSION[$this->sessionVar])) {
			unset($_SESSION[$this->sessionVar]);
		}
		return false;
	}


	public function setAdminSession($account)
	{
		$_SESSION[$this->sessionVarAdmin] = $account;
	}

	public function getAdminSession()
	{
		if (isset($_SESSION[$this->sessionVarAdmin])) {
			return $_SESSION[$this->sessionVarAdmin];
		}
		return false;
	}

	public function removeAdminSession()
	{
		unset($_SESSION[$this->sessionVarAdmin]);
	}

	public function gotoAdminLogin()
	{
		$gotoUrl = '../';
		if (!headers_sent()) {
			header('Location: ' . $gotoUrl);
		} else {
			echo '<script language="javascript">location.href="' . $gotoUrl . '";</script>';
		}
		die();
	}
}
