<?php

namespace app\commands\markdown;

class Parser extends \Parsedown
{
    function __construct()
    {
        $this->InlineTypes['['][]= 'ColoredText';
        $this->InlineTypes['@'][]= 'UserMention';

        $this->inlineMarkerList .= '[';
        $this->inlineMarkerList .= '@';
    }

    public function parse($text)
    {
        $text = $this->setBreaksEnabled(true)
            ->setMarkupEscaped(true)
            ->text($text);

        return $text;
    }
}