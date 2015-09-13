<?php
class Checkout extends PHPUnit_Framework_TestCase
{
    $freeResultText = 'ฟรีค่าจัดส่งสินค้า';
    $notFreeResultText = 'เสียค่าจัดส่งสินค้า';

    public function testVIPBuyFiveBookShippingCostShouldBeFree()
    {
        // 5 Books
        // 1 CD
        // VIP = 1
        $checkout = new Checkout(5, 1, 1);

        $this->assertEquals($freeResultText, $checkout->getText());
    }

    public function testVIPBuyFourBookShippingCostShouldNotBeFree()
    {
        // 4 Books
        // 1 CD
        // VIP = 1
        $checkout = new Checkout(4, 1, 1);

        $this->assertEquals($notFreeResultText, $checkout->getText());
    }
}