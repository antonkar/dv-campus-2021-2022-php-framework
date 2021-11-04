<?php

namespace antonkar\Framework\Http;

interface ControllerInterface
{
    public function execute(): string;
}