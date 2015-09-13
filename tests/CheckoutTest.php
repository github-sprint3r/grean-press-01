<?php

require_once "./src/checkout.php";

class CheckoutTest extends PHPUnit_Framework_TestCase
{
    private $freeResultText = 'ฟรีค่าจัดส่งสินค้า';
    private $notFreeResultText = 'เสียค่าจัดส่งสินค้า';

    public function testVIPBuySixBookShippingCostShouldBeFree()
    {
        // 5 Books
        // 1 CD
        // VIP = 1
        $checkout = new CheckOut(6, 1, 1);

        $this->assertEquals($this->freeResultText, $checkout->getText());
    }

    public function testVIPBuySixBookShippingResultShouldBeFree()
    {
        // 5 Books
        // 1 CD
        // VIP = 1
        $checkout = new CheckOut(6, 1, 1);

        $checkoutResult = json_decode($checkout->checkOutResult());

        $this->assertEquals($this->freeResultText, $checkoutResult->result_text);
    }

    public function testVIPBuyFourBookOneCDShippingCostShouldNotBeFree()
    {
        // 4 Books
        // 1 CD
        // VIP = 1
        $checkout = new CheckOut(4, 1, 1);

        $this->assertEquals($this->notFreeResultText, $checkout->getText());
    }

    public function testVIPBuyFourBookOneCDShippingResultCostShouldNotBeFree()
    {
        // 4 Books
        // 1 CD
        // VIP = 1
        $checkout = new CheckOut(4, 1, 1);

        $checkoutResult = json_decode($checkout->checkOutResult());

        $this->assertEquals($this->notFreeResultText, $checkoutResult->result_text);
    }

    public function testRegularMemberBuyFiveBookShippingShouldNotBeFree(){
        $checkout = new CheckOut(5,0,0);
        $this->assertEquals($this->notFreeResultText,$checkout->getText());
    }

}