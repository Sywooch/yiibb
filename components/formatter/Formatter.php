<?php

namespace app\components\formatter;

use yii\i18n\Formatter as YiiFormatter;

class Formatter extends YiiFormatter
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $setting = \Yii::$app->setting;

        $this->datetimeFormat = 'php:' . $setting->get('date_format') . ' ' . $setting->get('time_format');
        $this->dateFormat = 'php:' . $setting->get('date_format');
        $this->timeFormat = 'php:' . $setting->get('time_format');
        $this->thousandSeparator = ' ';
    }

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