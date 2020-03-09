<?php

class Emailer {
	//This class will process a PHP email and send it.
	
	//properties declaration
	
	//access identifier property name
	// private means you cannot access the property outside the object
	
	private $message = "";	
	private $recipientEmail = "";
	private $senderEmail = "";
	private $subject = "";
	
	//constructor method
	//1. DOES NOT make a new object
	//2. initializes the new object default values
	
	public function __construct() {
		
	}

	//methods
	
	//setter methods - used to set property values into the object
	//		one method per property
	
		public function set_message($inVal){
			$this->message = $inVal;			//assign input to message
		}
	
		public function set_recipientEmail($inVal){
			$this->recipientEmail = $inVal;
		}
	
		public function set_senderEmail($inVal){
			$this->senderEmail = $inVal;
		}
	
		public function set_subject($inVal){
			$this->subject = $inVal;
		}
	
	//getter methods - return the property value from the object
	//		one method per property
	
		public function getMessage(){
			return $this->message;
		}
	
		public function getRecipientEmail(){
			return $this->recipientEmail;
		}	
	
		public function getSenderEmail(){
			return $this->senderEmail;
		}
	
		public function getSubject(){
			return $this->subject;
		}
	
	//processing methods - everything else 
	
		public function sendEmail()	{
			//this will format and send an email to the SMTP server
			//it will use the PHP mail()
			
			$to 	 = $this->getRecipientEmail();
			$subject = $this->getSubject();
			$message = $this->getMessage();
			$headers = 'From: <info@jhgullion.org>';
			
			return mail($to,$subject,$message,$headers);	//PHP function
		}


}






?>