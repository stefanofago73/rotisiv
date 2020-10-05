<?php

declare(strict_types = 1);

namespace Fago\Rotisiv;

interface VisitorForSub
{

    function visitSub(Sub $param): string;
}

