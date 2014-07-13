<?php 
class Subscription{
	protected $subscriptionArray;
	protected function __construct(){
		$this->subscriptionArray = 'subscription array';
	}
	public static function getStatus(){
		return 'this is status return';
	}
}
?>