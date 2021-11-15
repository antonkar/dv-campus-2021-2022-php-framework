<?php

namespace Antonkar\Framework\Http;

interface ControllerInterface
{
    public function execute(): string;
}