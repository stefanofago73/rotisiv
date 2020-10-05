<?php

declare(strict_types = 1);

namespace Fago\Rotisiv;



class Sum implements Visitable
{
    private int $a,$b;
    
    public function __construct(int $a, int $b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    
    public function sum():int
    {
        return $this->a+$this->b;
    }
    
    public function accept(VisitorForSum $visitor): string
    {
        return $visitor->visitSum($this);
    }
}

