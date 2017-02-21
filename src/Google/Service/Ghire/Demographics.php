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

class Google_Service_Ghire_Demographics extends Google_Collection
{
  protected $collection_key = 'vsiCookie';
  public $ethnicity;
  public $gender;
  public $kind;
  public $updateDate;
  public $vsiCookie;

  public function setEthnicity($ethnicity)
  {
    $this->ethnicity = $ethnicity;
  }
  public function getEthnicity()
  {
    return $this->ethnicity;
  }
  public function setGender($gender)
  {
    $this->gender = $gender;
  }
  public function getGender()
  {
    return $this->gender;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setUpdateDate($updateDate)
  {
    $this->updateDate = $updateDate;
  }
  public function getUpdateDate()
  {
    return $this->updateDate;
  }
  public function setVsiCookie($vsiCookie)
  {
    $this->vsiCookie = $vsiCookie;
  }
  public function getVsiCookie()
  {
    return $this->vsiCookie;
  }
}