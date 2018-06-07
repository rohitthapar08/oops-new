<?php

class Logger {

	public function log($message)
	{
		echo "Logging message: $message";
	}
}
// $logger = new Logger();

// $logger->log("this is a message.");

class UserProfile {

	private $logger;

	public function createUser()
	{
		// $logger = new Logger();
		$this->logger->log("user created.");
	}
	public function updateUser()
	{
		// $logger = new Logger();
		$this->logger->log("user updated.");
	}
	public function deleteUser()
	{
		// $logger = new Logger();
		$this->logger->log("user deleted.");
	}
	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}
}

$logger = new Logger();
  
$profile = new UserProfile($logger);

$profile->createUser();

$profile->updateUser();