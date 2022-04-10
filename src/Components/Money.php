<?php
namespace Hillel\Components;



//require_once 'Codes.php';
//require_once 'Curency.php';
class Money
{
    private int|float $amount;
    private Curency $curency;

    public function __construct(int|float $amount, Curency $curency)
    {
        $this->setAmount($amount);
        $this->setCurency($curency);
    }
    private function setAmount($amount)
    {
        if ($amount <= 0) {
            throw new Exception('The value cannot be negative.');

        }
        $this->amount = $amount;
    }
    private function setCurency(Curency $curency):void
    {
        $this->curency = $curency;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function getCurency():Curency
    {
        return $this->curency;
    }
    public function add(Money $money):Money
    {
        if($this->curency != $money->curency) {
            throw new Exception('Different curency');
        }
        return new Money($this->getAmount()+$money->getAmount(), $this->getCurency());
    }
    public function equals(Money $money):bool
    {
        return $this == $money;
    }

}
//echo '<pre>';
$gbr = new Curency(Codes::GBP);

$usd = new Money(50,  $gbr  );
echo '<pre>';
var_dump($usd);