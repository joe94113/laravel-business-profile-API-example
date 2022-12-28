<?php

namespace App\Http\Services\Google\MyBusinessAccountLocations;

use Google_Model;

class Reviewer extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $displayName;
    public $isAnonymous;
    public $profilePhotoUrl;

    /**
     * @param string
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @param string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param boolean
     */
    public function setIsAnonymous($isAnonymous)
    {
        $this->isAnonymous = $isAnonymous;
    }

    /**
     * @param boolean
     */
    public function getIsAnonymous()
    {
        return $this->isAnonymous;
    }

    /**
     * @param string
     */
    public function setProfilePhotoUrl($profilePhotoUrl)
    {
        $this->profilePhotoUrl = $profilePhotoUrl;
    }

    /**
     * @param string
     */
    public function getProfilePhotoUrl()
    {
        return $this->profilePhotoUrl;
    }
}
