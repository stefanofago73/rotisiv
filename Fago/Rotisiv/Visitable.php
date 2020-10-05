<?php
namespace Fago\Rotisiv;


interface Visitable
{
  function accept(Visitor $visitor):string;
}

