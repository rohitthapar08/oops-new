<?php

abstract class  BaseEmployee{   // enforcing the class as abstact so that objects cannot be created directly without implemtening the other fucntions in the class
	protected $firstname;
	protected $lastname;

	public function getFulllName()
	{
		return $this->firstname . " " . $this->lastname;
	} 

	public abstract function getMonthlySalary();

	public function  __construct($f , $l)
	{
		$this->firstname = $f;
		$this->lastname = $l;
	}
	
}

class FullTimeEmployee extends BaseEmployee  {

	protected $annualSalary;

	public function getMonthlySalary()
	{
		return $this->annualSalary / 12;
	}
	
}
class ContractEmployee  extends BaseEmployee{
	protected $hourlyRate;
	protected $totalHours;

	public function getMonthlySalary()
	{
		return  $this->hourlyRate * $this->totalHours;
	}

}
$fullTime = new FullTimeEmployee('FullTime' , 'Employee');
$contract = new ContractEmployee('Contract' , 'Employee');
echo $fullTime->getFulllName();
echo  $contract ->getFulllName();

echo $fullTime->getMonthlySalary();
echo  $contract ->getMonthlySalary();

// $employee = new BaseEmployee('Base', 'Employee');
// echo $employee->getFulllName();