<?php
namespace Yue\KeywordTracker;
use Yue\KeywordTracker\contracts\IClient;

class Factory{

    public static function GetClient($type = null){
        /**
         * @var IClient $instance
         */
        $instance = null;

        return $instance;
    }
}