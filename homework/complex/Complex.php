<?php
class Complex
{
    // Властивості: комплексні числа дійсна та уявна частини
    public $re1, $re2, $im;
    public function __construct($re1, $re2, $im)
    {
        $this->re1 = $re1;
        $this->re2 = $re2;
        $this->im = $im;
    }
    // Метод: додати число до поточного значення. Число задається дійсною і уявною частиною 
    function add($re1, $re2, $im)
    {
        $this->re1 += $re1;
        $this->re2 += $re2;
        $this->im += $im;
    }
    function plus(Complex $complex)
    {
        return ($this->re1 + $complex->re1) + $this->im * ($this->re2 + $complex->re2);
    }
    function minus(Complex $complex)
    {
        return ($this->re1 - $complex->re1) + $this->im * ($this->re2 - $complex->re2);
    }
    function multiple(Complex $complex)
    {
        return ($this->re1 + $this->im * $complex->re1) * ($this->re2 + $this->im * $complex->re2);
    }
    public function __toString()
    {
        return "re1: {$this->re1}, re2: {$this->re2}, im: {$this->im}";
    }
}

$complex1 = new Complex(1, 22, 23);
$complex2 = new Complex(6, 3, 2);

echo $complex1;
echo $complex1->plus($complex2)."\n";
echo $complex1->minus($complex2)."\n";
echo $complex1->multiple($complex2)."\n";