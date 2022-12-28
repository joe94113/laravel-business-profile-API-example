<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace App\Http\Services\Google;

use App\Http\Services\Google\MyBusinessAccountLocations\Resource\Reviews;
use Google\Client;
use Google\Service;

/**
 * Service definition for MyBusinessAccountLocations (v4).
 *
 * <p>
 * The My Business Account Management API provides an interface for managing
 * access to a location on Google. Note - If you have a quota of 0 after
 * enabling the API, please request for GBP API access.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/my-business/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class MyBusinessAccountLocations extends Service
{


    public $accounts;
    public $accounts_admins;
    public $accounts_invitations;
    public $locations;
    public $locations_admins;

    /**
     * Constructs the internal representation of the MyBusinessAccountLocations
     * service.
     *
     * @param Client|array $clientOrConfig The client used to deliver requests, or a
     *                                     config array to pass to a new Client instance.
     * @param string $rootUrl The root URL used for requests to the service.
     */
    public function __construct($clientOrConfig = [], $rootUrl = null)
    {
        parent::__construct($clientOrConfig);
        $this->rootUrl = $rootUrl ?: 'https://mybusinessaccountmanagement.googleapis.com/';
        $this->servicePath = '';
        $this->batchPath = 'batch';
        $this->version = 'v4';
        $this->serviceName = 'mybusinessaccountlocations';

        $this->reviews = new Reviews(
            $this,
            $this->serviceName,
            'reviews',
            array(
                'methods' => array(
                    'deleteReply' => array(
                        'path' => 'v4/{+name}/reply',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'name' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'name' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'v4/{+parent}/reviews',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'parent' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'orderBy' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageSize' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'updateReply' => array(
                        'path' => 'v4/{+name}/reply',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'name' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MyBusinessAccountLocations::class, 'Google_Service_MyBusinessAccount');
