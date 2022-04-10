<?php
namespace Hillel\Components;



class Curency
{
    private Codes $isoCode;

    public function __construct(Codes $isoCode)
    {
        $this->setisoCode($isoCode);
    }
    private function setisoCode($isoCode)
    {
        $this->isoCode = $isoCode;
    }
    public function getisoCode(): Codes
    {
        return $this->isoCode;
    }
    public function equals(Codes $isoCode)
    {
        return $this->isoCode == $isoCode;
    }
}
$gbr = new Curency(Codes::GBP);
var_dump($gbr);
//var_dump($gbr->equals(Codes::GBP));
