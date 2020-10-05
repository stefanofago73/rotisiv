<?php declare(strict_types = 1);
namespace Fago\Rotisiv;




class Sub implements Visitable
{
    private int $a,$b;
    
    public function __construct(int $a, int $b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    
    public function sub():int
    {
        return $this->a-$this->b;
    }
    
    public function accept(VisitorForSub $visitor): string
    {
      return $visitor->visitSub($this);
    }

}

