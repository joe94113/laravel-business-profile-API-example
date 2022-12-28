<?php

namespace App\Http\Services\Google\MyBusinessAccountLocations;

use Google_Collection;

class ListReviewsResponse extends Google_Collection
{
    protected $collection_key = 'reviews';
    protected $internal_gapi_mappings = array();
    public $averageRating;
    public $nextPageToken;
    protected $reviewsType = Review::class;
    protected $reviewsDataType = 'array';
    public $totalReviewCount;

    /**
     * @param number
     */
    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
    }

    /**
     * @param number
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * @param string
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    /**
     * @param string
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    /**
     * @param Review[]
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * @param Review[]
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param integer
     */
    public function setTotalReviewCount($totalReviewCount)
    {
        $this->totalReviewCount = $totalReviewCount;
    }

    /**
     * @param integer
     */
    public function getTotalReviewCount()
    {
        return $this->totalReviewCount;
    }
}
