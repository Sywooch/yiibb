<?php

use yii\helpers\Url;
use yii\helpers\ArrayHelper;

if (!function_exists('e')) {
    /**
     * Escape HTML entities in a string.
     *
     * @param  string $value
     * @return string
     */
    function e($value)
    {
        return htmlentities($value, ENT_QUOTES, 'UTF-8', false);
    }
}

if (!function_exists('url')) {
    /**
     * Creates a URL based on the given parameters.
     *
     * @param string $url
     * @param bool $scheme
     * @return string
     */
    function url($url = '', $scheme = false)
    {
        return Url::to($url, $scheme);
    }
}

if (!function_exists('t')) {
    /**
     * Translates a message to the specified language.
     *
     * @param $message
     * @param array $params
     * @param string $category
     * @param null $language
     * @return string
     */
    function t($message, $params = [], $category = 'app', $language = null)
    {
        return Yii::t($category, $message, $params, $language);
    }
}

if (!function_exists('setting')) {
    /**
     * @param $name
     * @param null $default
     * @return mixed|null
     */
    function setting($name, $default = null)
    {
        return Yii::$app->setting->get($name, $default = null);
    }
}
