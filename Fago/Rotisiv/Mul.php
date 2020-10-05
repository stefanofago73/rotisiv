<?php declare(strict_types = 1);

namespace Fago\Rotisiv;


class Mul implements Visitable
{
    private int $a,$b;
    
    public function __construct(int $a, int $b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    
    public function mul():int
    {
        return $this->a*$this->b;
    }
    
    public function accept(VisitorForMul $visitor): string
    {
        return $visitor->visitMul($this);
    }
}

