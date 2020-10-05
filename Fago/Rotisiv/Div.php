<?php declare(strict_types = 1);

namespace Fago\Rotisiv;



class Div implements Visitable
{
    private int $a,$b;
    
    public function __construct(int $a, int $b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    
    public function div():int
    {
        return $this->a/$this->b;
    }
    
    public function accept(VisitorForDiv $visitor): string
    {
        return $visitor->visitDiv($this);
    }
}

