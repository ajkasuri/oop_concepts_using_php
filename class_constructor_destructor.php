<?php  
/**
 * 
 */
class Customer
{
	// its a good practice to have private properties and public methods
	private $id;
	private $name;
	private $email;
	private $balance;
	
	function __construct()
	{
		// $this means current class's property
		$this->id = 1;
		$this->name = "Awais";	
		$this->email = "awaisfiazit@gmail.com";	
		$this->balance = "$87";
		echo "This is constructor";
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function getId()
	{
		return $this->id;
	}

	// __destructor is being called at the very end
	function __destruct()
	{
		$this->id = NULL;
		$this->name = NULL;	
		$this->email =NULL;	
		$this->balance = NULL;
		echo "This is destructor";
	}

}

$customer = new Customer();
echo $customer->getEmail();
echo "<br>";
echo $customer->getId();
echo "<br>";


?>
