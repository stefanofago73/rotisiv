<?php

declare(strict_types = 1);

namespace Fago\Rotisiv;

interface VisitorForDiv
{

    function visitDiv(Div $param): string;
}

