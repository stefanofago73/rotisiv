<?php

declare(strict_types = 1);

namespace Fago\Rotisiv;

interface VisitorForSum
{

    function visitSum(Sum $param): string;
}

