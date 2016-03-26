<?php

namespace app\components\formatter;

use yii\i18n\Formatter as YiiFormatter;

class Formatter extends YiiFormatter
{
    public function asMarkdown($text)
    {
        $parser = new \Parsedown();
        //$parser->InlineTypes['['][]= 'ColoredText';
        //$parser->InlineTypes['@'][]= 'UserMention';

        //$parser->inlineMarkerList .= '[';
        //$parser->inlineMarkerList .= '@';
        
        
        $text = $parser->setBreaksEnabled(true)
            ->setMarkupEscaped(true)
            ->text($text);

        return $text;
    }
}