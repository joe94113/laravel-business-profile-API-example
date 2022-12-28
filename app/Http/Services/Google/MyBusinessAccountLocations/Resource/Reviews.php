<?php

namespace App\Http\Services\Google\MyBusinessAccountLocations\Resource;

use App\Http\Services\Google\MyBusinessAccountLocations\ReviewReply;
use App\Http\Services\Google\MyBusinessAccountLocations\ListReviewsResponse;
use App\Http\Services\Google\MyBusinessAccountLocations\Review;
use App\Http\Services\Google\MyBusinessAccountLocations\MybusinessEmpty;

/**
 * The "reviews" collection of methods.
 * Typical usage is:
 *  <code>
 *   use App\Http\Services\Google\MyBusinessAccountLocations;
 *   $myBusinessAccountLocations = MyBusinessAccountLocations(...);
 *   $reviews = $myBusinessAccountLocations->reviews;
 *  </code>
 */
class Reviews extends \Google\Service\Resource
{

    /**
     * Deletes the response to the specified review. This operation is only valid if
     * the specified location is verified. (reviews.deleteReply)
     *
     * @param string $name The name of the review reply to delete.
     * @param array $optParams Optional parameters.
     * @return MybusinessEmpty
     */
    public function deleteReply($name, $optParams = array())
    {
        $params = array('name' => $name);
        $params = array_merge($params, $optParams);
        return $this->call('deleteReply', array($params), MybusinessEmpty::class);
    }

    /**
     * Returns the specified review. This operation is only valid if the specified
     * location is verified. Returns `NOT_FOUND` if the review does not exist, or
     * has been deleted. (reviews.get)
     *
     * @param string $name The name of the review to fetch.
     * @param array $optParams Optional parameters.
     * @return Review
     */
    public function get($name, $optParams = array())
    {
        $params = array('name' => $name);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), Review::class);
    }

    /**
     * Returns the paginated list of reviews for the specified location. This
     * operation is only valid if the specified location is verified.
     * (reviews.listAccountsLocationsReviews)
     *
     * @param string $parent The name of the location to fetch reviews for.
     * Example: `accounts/1234/locations/5678`
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy Specifies the field to sort reviews by. If
     * unspecified, the order of reviews returned will default to `update_time
     * desc`. Valid orders to sort by are `rating`, `rating desc` and `update_time
     * desc`.
     * @opt_param string pageToken If specified, it fetches the next page of
     * reviews.
     * @opt_param int pageSize How many reviews to fetch per page. The maximum
     * `page_size` is 200.
     * @return ListReviewsResponse
     */
    public function listAccountsLocationsReviews($parent, $optParams = array())
    {
        $params = array('parent' => $parent);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), ListReviewsResponse::class);
    }

    /**
     * Updates the reply to the specified review. A reply is created if one does not
     * exist. This operation is only valid if the specified location is verified.
     * (reviews.updateReply)
     *
     * @param string $name The name of the review to respond to.
     * Example: `accounts/1234/locations/5678/reviews/9012`
     * @param Google_ReviewReply $postBody
     * @param array $optParams Optional parameters.
     * @return ReviewReply
     */
    public function updateReply($name, ReviewReply $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('updateReply', array($params), ReviewReply::class);
    }
}
