<?php

namespace Dwr\GameOfLive\Entity;

interface ValidateInterface
{
    public function isValid(array $data) : bool;
}
