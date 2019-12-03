<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function test_registrar()
    {
      if (empty($_POST["cedula"]) or (empty($_POST["nombre"])) or (empty($_POST["apellido"])) ) {
         header("location: registrar.php?error");
      }
   
   else{
    
      $this->assertEmpty(($_POST["cedula"]);
      $this->assertEmpty(($_POST["nombre"]);
      $this->assertEmpty(($_POST["apellido"]);
    
    
    $imgFile = $_FILES['foto']['name'];
    $tmp_dir = $_FILES['foto']['tmp_name'];
    $imgSize = $_FILES['foto']['size'];
    $upload_dir = 'fotos/'; 
   
   }
    
} 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

