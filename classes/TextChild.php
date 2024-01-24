<?php

class TextChild extends Text
{
    /**
     * @return void
     */
    public function print():void
    {
        echo strtoupper($this->text) . PHP_EOL;
    }
}