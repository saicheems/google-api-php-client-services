<?php
/*
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

/**
 * Service definition for FirebaseDynamicLinks (v1).
 *
 * <p>
 * Firebase Dynamic Links API enables third party developers to programmatically
 * create and manage Dynamic Links.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://firebase.google.com/docs/dynamic-links/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_FirebaseDynamicLinks extends Google_Service
{
  /** View and administer all your Firebase data and settings. */
  const FIREBASE =
      "https://www.googleapis.com/auth/firebase";

  public $shortLinks;
  
  /**
   * Constructs the internal representation of the FirebaseDynamicLinks service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://firebasedynamiclinks.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1';
    $this->serviceName = 'firebasedynamiclinks';

    $this->shortLinks = new Google_Service_FirebaseDynamicLinks_Resource_ShortLinks(
        $this,
        $this->serviceName,
        'shortLinks',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/shortLinks',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}
