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

class Google_Service_Dfareporting_Campaign extends Google_Collection
{
  protected $collection_key = 'traffickerEmails';
  public $accountId;
  protected $additionalCreativeOptimizationConfigurationsType = 'Google_Service_Dfareporting_CreativeOptimizationConfiguration';
  protected $additionalCreativeOptimizationConfigurationsDataType = 'array';
  public $advertiserGroupId;
  public $advertiserId;
  protected $advertiserIdDimensionValueType = 'Google_Service_Dfareporting_DimensionValue';
  protected $advertiserIdDimensionValueDataType = '';
  public $archived;
  protected $audienceSegmentGroupsType = 'Google_Service_Dfareporting_AudienceSegmentGroup';
  protected $audienceSegmentGroupsDataType = 'array';
  public $billingInvoiceCode;
  protected $clickThroughUrlSuffixPropertiesType = 'Google_Service_Dfareporting_ClickThroughUrlSuffixProperties';
  protected $clickThroughUrlSuffixPropertiesDataType = '';
  public $comment;
  protected $createInfoType = 'Google_Service_Dfareporting_LastModifiedInfo';
  protected $createInfoDataType = '';
  public $creativeGroupIds;
  protected $creativeOptimizationConfigurationType = 'Google_Service_Dfareporting_CreativeOptimizationConfiguration';
  protected $creativeOptimizationConfigurationDataType = '';
  protected $defaultClickThroughEventTagPropertiesType = 'Google_Service_Dfareporting_DefaultClickThroughEventTagProperties';
  protected $defaultClickThroughEventTagPropertiesDataType = '';
  public $endDate;
  protected $eventTagOverridesType = 'Google_Service_Dfareporting_EventTagOverride';
  protected $eventTagOverridesDataType = 'array';
  public $externalId;
  public $id;
  protected $idDimensionValueType = 'Google_Service_Dfareporting_DimensionValue';
  protected $idDimensionValueDataType = '';
  public $kind;
  protected $lastModifiedInfoType = 'Google_Service_Dfareporting_LastModifiedInfo';
  protected $lastModifiedInfoDataType = '';
  protected $lookbackConfigurationType = 'Google_Service_Dfareporting_LookbackConfiguration';
  protected $lookbackConfigurationDataType = '';
  public $name;
  public $nielsenOcrEnabled;
  public $startDate;
  public $subaccountId;
  public $traffickerEmails;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setAdditionalCreativeOptimizationConfigurations($additionalCreativeOptimizationConfigurations)
  {
    $this->additionalCreativeOptimizationConfigurations = $additionalCreativeOptimizationConfigurations;
  }
  public function getAdditionalCreativeOptimizationConfigurations()
  {
    return $this->additionalCreativeOptimizationConfigurations;
  }
  public function setAdvertiserGroupId($advertiserGroupId)
  {
    $this->advertiserGroupId = $advertiserGroupId;
  }
  public function getAdvertiserGroupId()
  {
    return $this->advertiserGroupId;
  }
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  public function setAdvertiserIdDimensionValue(Google_Service_Dfareporting_DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  public function setArchived($archived)
  {
    $this->archived = $archived;
  }
  public function getArchived()
  {
    return $this->archived;
  }
  public function setAudienceSegmentGroups($audienceSegmentGroups)
  {
    $this->audienceSegmentGroups = $audienceSegmentGroups;
  }
  public function getAudienceSegmentGroups()
  {
    return $this->audienceSegmentGroups;
  }
  public function setBillingInvoiceCode($billingInvoiceCode)
  {
    $this->billingInvoiceCode = $billingInvoiceCode;
  }
  public function getBillingInvoiceCode()
  {
    return $this->billingInvoiceCode;
  }
  public function setClickThroughUrlSuffixProperties(Google_Service_Dfareporting_ClickThroughUrlSuffixProperties $clickThroughUrlSuffixProperties)
  {
    $this->clickThroughUrlSuffixProperties = $clickThroughUrlSuffixProperties;
  }
  public function getClickThroughUrlSuffixProperties()
  {
    return $this->clickThroughUrlSuffixProperties;
  }
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  public function getComment()
  {
    return $this->comment;
  }
  public function setCreateInfo(Google_Service_Dfareporting_LastModifiedInfo $createInfo)
  {
    $this->createInfo = $createInfo;
  }
  public function getCreateInfo()
  {
    return $this->createInfo;
  }
  public function setCreativeGroupIds($creativeGroupIds)
  {
    $this->creativeGroupIds = $creativeGroupIds;
  }
  public function getCreativeGroupIds()
  {
    return $this->creativeGroupIds;
  }
  public function setCreativeOptimizationConfiguration(Google_Service_Dfareporting_CreativeOptimizationConfiguration $creativeOptimizationConfiguration)
  {
    $this->creativeOptimizationConfiguration = $creativeOptimizationConfiguration;
  }
  public function getCreativeOptimizationConfiguration()
  {
    return $this->creativeOptimizationConfiguration;
  }
  public function setDefaultClickThroughEventTagProperties(Google_Service_Dfareporting_DefaultClickThroughEventTagProperties $defaultClickThroughEventTagProperties)
  {
    $this->defaultClickThroughEventTagProperties = $defaultClickThroughEventTagProperties;
  }
  public function getDefaultClickThroughEventTagProperties()
  {
    return $this->defaultClickThroughEventTagProperties;
  }
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setEventTagOverrides($eventTagOverrides)
  {
    $this->eventTagOverrides = $eventTagOverrides;
  }
  public function getEventTagOverrides()
  {
    return $this->eventTagOverrides;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIdDimensionValue(Google_Service_Dfareporting_DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLastModifiedInfo(Google_Service_Dfareporting_LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
  }
  public function setLookbackConfiguration(Google_Service_Dfareporting_LookbackConfiguration $lookbackConfiguration)
  {
    $this->lookbackConfiguration = $lookbackConfiguration;
  }
  public function getLookbackConfiguration()
  {
    return $this->lookbackConfiguration;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setNielsenOcrEnabled($nielsenOcrEnabled)
  {
    $this->nielsenOcrEnabled = $nielsenOcrEnabled;
  }
  public function getNielsenOcrEnabled()
  {
    return $this->nielsenOcrEnabled;
  }
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  public function setTraffickerEmails($traffickerEmails)
  {
    $this->traffickerEmails = $traffickerEmails;
  }
  public function getTraffickerEmails()
  {
    return $this->traffickerEmails;
  }
}
