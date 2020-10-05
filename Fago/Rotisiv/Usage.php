<?php
namespace Fago\Rotisiv;

require dirname(__FILE__) . '/VisitorForSum.php';
require dirname(__FILE__) . '/VisitorForSub.php';
require dirname(__FILE__) . '/VisitorForMul.php';
require dirname(__FILE__) . '/VisitorForDiv.php';
require dirname(__FILE__) . '/Visitor.php';
require dirname(__FILE__) . '/Visitable.php';
require dirname(__FILE__) . '/Sum.php';
require dirname(__FILE__) . '/Sub.php';
require dirname(__FILE__) . '/Mul.php';
require dirname(__FILE__) . '/Div.php';


class Usage
{
    public static final function demo():void
    {
        $visitor = new Visitor();
		/** @var array<Visitable> $visitables */
        $visitables = [new Sum(1,2), new Sub(5,2),new Sum(1,6), new Mul(4,5),new Mul(2,7),new Div(14,2)];
        
        foreach($visitables as $toVisit)
        {
            printf("after visiting %s receiving: %s %s",get_class($toVisit),$toVisit->accept($visitor),PHP_EOL);
        }
    }
}


Usage::demo();

