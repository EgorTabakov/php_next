<?php


trait TraitLog
{
    public function log(string $text): void
    {
        fwrite($this->handle, $text . PHP_EOL);
    }
}