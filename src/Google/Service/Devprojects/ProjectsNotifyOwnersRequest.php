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

class Google_Service_Devprojects_ProjectsNotifyOwnersRequest extends Google_Model
{
  public $messageHtml;
  public $messageText;
  public $subjectText;
  public $whitelistId;

  public function setMessageHtml($messageHtml)
  {
    $this->messageHtml = $messageHtml;
  }
  public function getMessageHtml()
  {
    return $this->messageHtml;
  }
  public function setMessageText($messageText)
  {
    $this->messageText = $messageText;
  }
  public function getMessageText()
  {
    return $this->messageText;
  }
  public function setSubjectText($subjectText)
  {
    $this->subjectText = $subjectText;
  }
  public function getSubjectText()
  {
    return $this->subjectText;
  }
  public function setWhitelistId($whitelistId)
  {
    $this->whitelistId = $whitelistId;
  }
  public function getWhitelistId()
  {
    return $this->whitelistId;
  }
}