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

class Google_Service_DLP_GooglePrivacyDlpV2beta1Location extends Google_Collection
{
  protected $collection_key = 'imageBoxes';
  protected $byteRangeType = 'Google_Service_DLP_GooglePrivacyDlpV2beta1Range';
  protected $byteRangeDataType = '';
  protected $codepointRangeType = 'Google_Service_DLP_GooglePrivacyDlpV2beta1Range';
  protected $codepointRangeDataType = '';
  protected $fieldIdType = 'Google_Service_DLP_GooglePrivacyDlpV2beta1FieldId';
  protected $fieldIdDataType = '';
  protected $imageBoxesType = 'Google_Service_DLP_GooglePrivacyDlpV2beta1ImageLocation';
  protected $imageBoxesDataType = 'array';
  protected $recordKeyType = 'Google_Service_DLP_GooglePrivacyDlpV2beta1RecordKey';
  protected $recordKeyDataType = '';

  public function setByteRange(Google_Service_DLP_GooglePrivacyDlpV2beta1Range $byteRange)
  {
    $this->byteRange = $byteRange;
  }
  public function getByteRange()
  {
    return $this->byteRange;
  }
  public function setCodepointRange(Google_Service_DLP_GooglePrivacyDlpV2beta1Range $codepointRange)
  {
    $this->codepointRange = $codepointRange;
  }
  public function getCodepointRange()
  {
    return $this->codepointRange;
  }
  public function setFieldId(Google_Service_DLP_GooglePrivacyDlpV2beta1FieldId $fieldId)
  {
    $this->fieldId = $fieldId;
  }
  public function getFieldId()
  {
    return $this->fieldId;
  }
  public function setImageBoxes($imageBoxes)
  {
    $this->imageBoxes = $imageBoxes;
  }
  public function getImageBoxes()
  {
    return $this->imageBoxes;
  }
  public function setRecordKey(Google_Service_DLP_GooglePrivacyDlpV2beta1RecordKey $recordKey)
  {
    $this->recordKey = $recordKey;
  }
  public function getRecordKey()
  {
    return $this->recordKey;
  }
}
