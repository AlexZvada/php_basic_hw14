<?php

class Text
{
    /**
     * @var string
     */
    protected string $text = 'some text';

    /**
     * @return void
     */
    public function print(): void
    {
        echo ucfirst($this->text) . PHP_EOL;
    }
}