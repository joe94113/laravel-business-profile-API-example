<?php

namespace App\Http\Services\Google\MyBusinessAccountLocations;

use Google_Model;

class Review extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $comment;
    public $createTime;
    public $name;
    public $reviewId;
    protected $reviewReplyType = ReviewReply::class;
    protected $reviewReplyDataType = 'array';
    protected $reviewerType = Reviewer::class;
    protected $reviewerDataType = 'array';
    public $starRating;
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
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

    /**
     * @param string (Timestamp format)
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @param string
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string
     */
    public function setReviewId($reviewId)
    {
        $this->reviewId = $reviewId;
    }

    /**
     * @param string
     */
    public function getReviewId()
    {
        return $this->reviewId;
    }

    /**
     * @param ReviewReply
     */
    public function setReviewReply(ReviewReply $reviewReply)
    {
        $this->reviewReply = $reviewReply;
    }

    /**
     * @param ReviewReply
     */
    public function getReviewReply()
    {
        return $this->reviewReply;
    }

    /**
     * @param Reviewer
     */
    public function setReviewer(Reviewer $reviewer)
    {
        $this->reviewer = $reviewer;
    }

    /**
     * @param Reviewer
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * @param enum 
     * https://developers.google.com/my-business/reference/rest/v4/accounts.locations.reviews#StarRating
     */
    public function setStarRating($starRating)
    {
        $this->starRating = $starRating;
    }

    /**
     * @param enum 
     * https://developers.google.com/my-business/reference/rest/v4/accounts.locations.reviews#StarRating
     */
    public function getStarRating()
    {
        return $this->starRating;
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
