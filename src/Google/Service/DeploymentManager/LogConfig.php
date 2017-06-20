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

class Google_Service_DeploymentManager_LogConfig extends Google_Model
{
  protected $cloudAuditType = 'Google_Service_DeploymentManager_LogConfigCloudAuditOptions';
  protected $cloudAuditDataType = '';
  protected $counterType = 'Google_Service_DeploymentManager_LogConfigCounterOptions';
  protected $counterDataType = '';

  public function setCloudAudit(Google_Service_DeploymentManager_LogConfigCloudAuditOptions $cloudAudit)
  {
    $this->cloudAudit = $cloudAudit;
  }
  public function getCloudAudit()
  {
    return $this->cloudAudit;
  }
  public function setCounter(Google_Service_DeploymentManager_LogConfigCounterOptions $counter)
  {
    $this->counter = $counter;
  }
  public function getCounter()
  {
    return $this->counter;
  }
}
