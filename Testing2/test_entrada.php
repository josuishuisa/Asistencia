<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function test_entrada($data) 
    {
        $dat = trim($data);
        $this->assertSame($dat, $data);
        $data=$dat;

        $dat = stripslashes($data);
        $this->assertSame($dat, $data);
        $data=$dat;

        $dat = htmlspecialchars($data);
        $this->assertSame($dat, $data);
        $data=$dat;

    }
}
?>