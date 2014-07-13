<?php 
class Subscription{
	protected $subscriptionArray;
	protected function __construct(){
		$this->subscriptionArray = 'subscription array';
	}
	public static function getStatus($sid){
		return 'this is status return'.' <--> '.$sid;
	}
}
?>