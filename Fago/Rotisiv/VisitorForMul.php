<?php

declare(strict_types = 1);

namespace Fago\Rotisiv;

interface VisitorForMul
{

    function visitMul(Mul $param): string;
}

