<?php

require_once "./src/checkout.php";

class CheckoutTest extends PHPUnit_Framework_TestCase
{
    private $freeResultText = 'ฟรีค่าจัดส่งสินค้า';
    private $notFreeResultText = 'เสียค่าจัดส่งสินค้า';

    public function testVIPBuyFiveBookShippingCostShouldBeFree()
    {
        // 5 Books
        // 1 CD
        // VIP = 1
        $checkout = new CheckOut(5, 1, 1);

        $this->assertEquals($this->freeResultText, $checkout->getText());
    }

    public function testVIPBuyFourBookShippingCostShouldNotBeFree()
    {
        // 4 Books
        // 1 CD
        // VIP = 1
        $checkout = new CheckOut(4, 1, 1);

        $this->assertEquals($this->notFreeResultText, $checkout->getText());
    }

    public function testRegularMemberBuyFiveBookShippingShouldNotBeFree(){
        $checkout = new CheckOut(5,0,0);
        $this->assertEquals($this->notFreeResultText,$checkout->getText());
    }

}