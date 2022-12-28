<?php

namespace App\Http\Services\Google\MyBusinessAccountLocations;

use Google_Model;

class ReviewReply extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $comment;
    public $updateTime;

    /**
     * @param string
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @param string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string (Timestamp format)
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @param string (Timestamp format)
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}
