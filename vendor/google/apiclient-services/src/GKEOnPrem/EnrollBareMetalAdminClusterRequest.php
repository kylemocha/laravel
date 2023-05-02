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

namespace Google\Service\GKEOnPrem;

class EnrollBareMetalAdminClusterRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $bareMetalAdminClusterId;
  /**
   * @var string
   */
  public $localName;
  /**
   * @var string
   */
  public $membership;

  /**
   * @param string
   */
  public function setBareMetalAdminClusterId($bareMetalAdminClusterId)
  {
    $this->bareMetalAdminClusterId = $bareMetalAdminClusterId;
  }
  /**
   * @return string
   */
  public function getBareMetalAdminClusterId()
  {
    return $this->bareMetalAdminClusterId;
  }
  /**
   * @param string
   */
  public function setLocalName($localName)
  {
    $this->localName = $localName;
  }
  /**
   * @return string
   */
  public function getLocalName()
  {
    return $this->localName;
  }
  /**
   * @param string
   */
  public function setMembership($membership)
  {
    $this->membership = $membership;
  }
  /**
   * @return string
   */
  public function getMembership()
  {
    return $this->membership;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnrollBareMetalAdminClusterRequest::class, 'Google_Service_GKEOnPrem_EnrollBareMetalAdminClusterRequest');
