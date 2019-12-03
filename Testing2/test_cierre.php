<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function test_cierre()
    {
        $star=session_start();
        $_SESSION = array();

        if($start)
		{
			$state = 0;	
		}	
		
		$this->assertSame(0, $state); 

        if (ini_get("session.use_cookies")) 
        {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

    $destroy=session_destroy();

    if($destroy)
    {
        $state = 0;	
    }	
    
    $this->assertSame(0, $state); 


    header("location: index.php");
    }
?>