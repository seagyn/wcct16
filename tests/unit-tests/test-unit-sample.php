<?php
namespace WCCT;
 
use phpmock\phpunit\PHPMock;
 
class UnitTests extends \PHPUnit_Framework_TestCase{
    use PHPMock;
 
    public function test_wcct_get_option(){
    	$expected = 'river-club';
        $get_option = $this->getFunctionMock( __NAMESPACE__, 'get_option' );
		$get_option->expects( $this->once() )
                   ->with( $this->equalTo( 'wcct_venue' ) )
                   ->willReturn( $expected );

		$actual = wcct_get_option( 'venue' );

        $this->assertEquals( $expected, $actual, 'Expected: ' . $expected . ' Actual: ' . $actual );
    }
}