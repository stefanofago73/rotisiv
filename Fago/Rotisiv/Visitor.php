<?php

declare(strict_types = 1);

namespace Fago\Rotisiv;


final class Visitor implements VisitorForSum, VisitorForSub, VisitorForMul, VisitorForDiv
{

    function visitSum(Sum $a): string
    {
        echo "visiting SUM: " .$a->sum(). PHP_EOL;
        return "Done with SUM!";
    }

    function visitSub(Sub $b): string
    {
        echo "visiting SUB: ".$b->sub() . PHP_EOL;
        return "Done with SUB!";
    }

    function visitMul(Mul $c): string
    {
        echo "visiting MUL: ".$c->mul() . PHP_EOL;
        return "Done with MUL!";
    }

    function visitDiv(Div $d): string
    {
        echo "visiting DIV: ".$d->div() . PHP_EOL;
        return "Done with DIV!";
    }
}

