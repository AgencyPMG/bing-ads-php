<?php

namespace PMG\BingAds\CampaignManagement;

class CampaignManagementService extends \PMG\BingAds\BingSoapClient
{
    const WSDL_NAMESPACE = 'https://bingads.microsoft.com/CampaignManagement/v13';
    const WSDL_PROD = 'https://campaign.api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/v13/CampaignManagementService.svc?singleWsdl';
    const WSDL_SANDBOX = 'https://campaign.api.sandbox.bingads.microsoft.com/Api/Advertiser/CampaignManagement/v13/CampaignManagementService.svc?singleWsdl';


    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'TextAd' => 'PMG\\BingAds\\CampaignManagement\\TextAd',
      'Ad' => 'PMG\\BingAds\\CampaignManagement\\Ad',
      'ArrayOfAppUrl' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAppUrl',
      'AppUrl' => 'PMG\\BingAds\\CampaignManagement\\AppUrl',
      'CustomParameters' => 'PMG\\BingAds\\CampaignManagement\\CustomParameters',
      'ArrayOfCustomParameter' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCustomParameter',
      'CustomParameter' => 'PMG\\BingAds\\CampaignManagement\\CustomParameter',
      'ProductAd' => 'PMG\\BingAds\\CampaignManagement\\ProductAd',
      'AppInstallAd' => 'PMG\\BingAds\\CampaignManagement\\AppInstallAd',
      'ExpandedTextAd' => 'PMG\\BingAds\\CampaignManagement\\ExpandedTextAd',
      'DynamicSearchAd' => 'PMG\\BingAds\\CampaignManagement\\DynamicSearchAd',
      'ResponsiveAd' => 'PMG\\BingAds\\CampaignManagement\\ResponsiveAd',
      'ArrayOfAssetLink' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAssetLink',
      'AssetLink' => 'PMG\\BingAds\\CampaignManagement\\AssetLink',
      'Asset' => 'PMG\\BingAds\\CampaignManagement\\Asset',
      'TextAsset' => 'PMG\\BingAds\\CampaignManagement\\TextAsset',
      'ImageAsset' => 'PMG\\BingAds\\CampaignManagement\\ImageAsset',
      'ResponsiveSearchAd' => 'PMG\\BingAds\\CampaignManagement\\ResponsiveSearchAd',
      'AddCampaignsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddCampaignsRequest',
      'ArrayOfCampaign' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCampaign',
      'Campaign' => 'PMG\\BingAds\\CampaignManagement\\Campaign',
      'BiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\BiddingScheme',
      'MaxClicksBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\MaxClicksBiddingScheme',
      'Bid' => 'PMG\\BingAds\\CampaignManagement\\Bid',
      'MaxConversionsBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\MaxConversionsBiddingScheme',
      'TargetCpaBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\TargetCpaBiddingScheme',
      'ManualCpcBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\ManualCpcBiddingScheme',
      'EnhancedCpcBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\EnhancedCpcBiddingScheme',
      'ManualCpvBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\ManualCpvBiddingScheme',
      'ManualCpmBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\ManualCpmBiddingScheme',
      'InheritFromParentBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\InheritFromParentBiddingScheme',
      'TargetRoasBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\TargetRoasBiddingScheme',
      'MaxRoasBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\MaxRoasBiddingScheme',
      'MaxConversionValueBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\MaxConversionValueBiddingScheme',
      'TargetImpressionShareBiddingScheme' => 'PMG\\BingAds\\CampaignManagement\\TargetImpressionShareBiddingScheme',
      'ArrayOfSetting' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfSetting',
      'Setting' => 'PMG\\BingAds\\CampaignManagement\\Setting',
      'ShoppingSetting' => 'PMG\\BingAds\\CampaignManagement\\ShoppingSetting',
      'DynamicFeedSetting' => 'PMG\\BingAds\\CampaignManagement\\DynamicFeedSetting',
      'DynamicSearchAdsSetting' => 'PMG\\BingAds\\CampaignManagement\\DynamicSearchAdsSetting',
      'TargetSetting' => 'PMG\\BingAds\\CampaignManagement\\TargetSetting',
      'ArrayOfTargetSettingDetail' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfTargetSettingDetail',
      'TargetSettingDetail' => 'PMG\\BingAds\\CampaignManagement\\TargetSettingDetail',
      'CoOpSetting' => 'PMG\\BingAds\\CampaignManagement\\CoOpSetting',
      'AddCampaignsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddCampaignsResponse',
      'ArrayOfBatchError' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfBatchError',
      'BatchError' => 'PMG\\BingAds\\CampaignManagement\\BatchError',
      'EditorialError' => 'PMG\\BingAds\\CampaignManagement\\EditorialError',
      'ArrayOfOperationError' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfOperationError',
      'OperationError' => 'PMG\\BingAds\\CampaignManagement\\OperationError',
      'GetCampaignsByAccountIdRequest' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignsByAccountIdRequest',
      'GetCampaignsByAccountIdResponse' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignsByAccountIdResponse',
      'GetCampaignsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignsByIdsRequest',
      'GetCampaignsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignsByIdsResponse',
      'DeleteCampaignsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteCampaignsRequest',
      'DeleteCampaignsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteCampaignsResponse',
      'UpdateCampaignsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateCampaignsRequest',
      'UpdateCampaignsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateCampaignsResponse',
      'GetNegativeSitesByCampaignIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetNegativeSitesByCampaignIdsRequest',
      'GetNegativeSitesByCampaignIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetNegativeSitesByCampaignIdsResponse',
      'ArrayOfCampaignNegativeSites' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCampaignNegativeSites',
      'CampaignNegativeSites' => 'PMG\\BingAds\\CampaignManagement\\CampaignNegativeSites',
      'SetNegativeSitesToCampaignsRequest' => 'PMG\\BingAds\\CampaignManagement\\SetNegativeSitesToCampaignsRequest',
      'SetNegativeSitesToCampaignsResponse' => 'PMG\\BingAds\\CampaignManagement\\SetNegativeSitesToCampaignsResponse',
      'GetConfigValueRequest' => 'PMG\\BingAds\\CampaignManagement\\GetConfigValueRequest',
      'GetConfigValueResponse' => 'PMG\\BingAds\\CampaignManagement\\GetConfigValueResponse',
      'GetBSCCountriesRequest' => 'PMG\\BingAds\\CampaignManagement\\GetBSCCountriesRequest',
      'GetBSCCountriesResponse' => 'PMG\\BingAds\\CampaignManagement\\GetBSCCountriesResponse',
      'AddAdGroupsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddAdGroupsRequest',
      'ArrayOfAdGroup' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdGroup',
      'AdGroup' => 'PMG\\BingAds\\CampaignManagement\\AdGroup',
      'AdRotation' => 'PMG\\BingAds\\CampaignManagement\\AdRotation',
      'Date' => 'PMG\\BingAds\\CampaignManagement\\Date',
      'AddAdGroupsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddAdGroupsResponse',
      'DeleteAdGroupsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdGroupsRequest',
      'DeleteAdGroupsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdGroupsResponse',
      'GetAdGroupsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdGroupsByIdsRequest',
      'GetAdGroupsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdGroupsByIdsResponse',
      'GetAdGroupsByCampaignIdRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdGroupsByCampaignIdRequest',
      'GetAdGroupsByCampaignIdResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdGroupsByCampaignIdResponse',
      'UpdateAdGroupsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateAdGroupsRequest',
      'UpdateAdGroupsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateAdGroupsResponse',
      'GetNegativeSitesByAdGroupIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetNegativeSitesByAdGroupIdsRequest',
      'GetNegativeSitesByAdGroupIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetNegativeSitesByAdGroupIdsResponse',
      'ArrayOfAdGroupNegativeSites' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdGroupNegativeSites',
      'AdGroupNegativeSites' => 'PMG\\BingAds\\CampaignManagement\\AdGroupNegativeSites',
      'SetNegativeSitesToAdGroupsRequest' => 'PMG\\BingAds\\CampaignManagement\\SetNegativeSitesToAdGroupsRequest',
      'SetNegativeSitesToAdGroupsResponse' => 'PMG\\BingAds\\CampaignManagement\\SetNegativeSitesToAdGroupsResponse',
      'GetGeoLocationsFileUrlRequest' => 'PMG\\BingAds\\CampaignManagement\\GetGeoLocationsFileUrlRequest',
      'GetGeoLocationsFileUrlResponse' => 'PMG\\BingAds\\CampaignManagement\\GetGeoLocationsFileUrlResponse',
      'AddAdsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddAdsRequest',
      'ArrayOfAd' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAd',
      'AddAdsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddAdsResponse',
      'ArrayOfEditorialError' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfEditorialError',
      'DeleteAdsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdsRequest',
      'DeleteAdsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdsResponse',
      'GetAdsByEditorialStatusRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdsByEditorialStatusRequest',
      'ArrayOfAdType' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdType',
      'GetAdsByEditorialStatusResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdsByEditorialStatusResponse',
      'GetAdsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdsByIdsRequest',
      'GetAdsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdsByIdsResponse',
      'GetAdsByAdGroupIdRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdsByAdGroupIdRequest',
      'GetAdsByAdGroupIdResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdsByAdGroupIdResponse',
      'UpdateAdsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateAdsRequest',
      'UpdateAdsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateAdsResponse',
      'AddKeywordsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddKeywordsRequest',
      'ArrayOfKeyword' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfKeyword',
      'Keyword' => 'PMG\\BingAds\\CampaignManagement\\Keyword',
      'AddKeywordsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddKeywordsResponse',
      'DeleteKeywordsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteKeywordsRequest',
      'DeleteKeywordsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteKeywordsResponse',
      'GetKeywordsByEditorialStatusRequest' => 'PMG\\BingAds\\CampaignManagement\\GetKeywordsByEditorialStatusRequest',
      'GetKeywordsByEditorialStatusResponse' => 'PMG\\BingAds\\CampaignManagement\\GetKeywordsByEditorialStatusResponse',
      'GetKeywordsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetKeywordsByIdsRequest',
      'GetKeywordsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetKeywordsByIdsResponse',
      'GetKeywordsByAdGroupIdRequest' => 'PMG\\BingAds\\CampaignManagement\\GetKeywordsByAdGroupIdRequest',
      'GetKeywordsByAdGroupIdResponse' => 'PMG\\BingAds\\CampaignManagement\\GetKeywordsByAdGroupIdResponse',
      'UpdateKeywordsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateKeywordsRequest',
      'UpdateKeywordsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateKeywordsResponse',
      'AppealEditorialRejectionsRequest' => 'PMG\\BingAds\\CampaignManagement\\AppealEditorialRejectionsRequest',
      'ArrayOfEntityIdToParentIdAssociation' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfEntityIdToParentIdAssociation',
      'EntityIdToParentIdAssociation' => 'PMG\\BingAds\\CampaignManagement\\EntityIdToParentIdAssociation',
      'AppealEditorialRejectionsResponse' => 'PMG\\BingAds\\CampaignManagement\\AppealEditorialRejectionsResponse',
      'GetEditorialReasonsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetEditorialReasonsByIdsRequest',
      'GetEditorialReasonsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetEditorialReasonsByIdsResponse',
      'ArrayOfEditorialReasonCollection' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfEditorialReasonCollection',
      'EditorialReasonCollection' => 'PMG\\BingAds\\CampaignManagement\\EditorialReasonCollection',
      'ArrayOfEditorialReason' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfEditorialReason',
      'EditorialReason' => 'PMG\\BingAds\\CampaignManagement\\EditorialReason',
      'GetAccountMigrationStatusesRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAccountMigrationStatusesRequest',
      'GetAccountMigrationStatusesResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAccountMigrationStatusesResponse',
      'ArrayOfAccountMigrationStatusesInfo' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAccountMigrationStatusesInfo',
      'AccountMigrationStatusesInfo' => 'PMG\\BingAds\\CampaignManagement\\AccountMigrationStatusesInfo',
      'ArrayOfMigrationStatusInfo' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfMigrationStatusInfo',
      'MigrationStatusInfo' => 'PMG\\BingAds\\CampaignManagement\\MigrationStatusInfo',
      'SetAccountPropertiesRequest' => 'PMG\\BingAds\\CampaignManagement\\SetAccountPropertiesRequest',
      'ArrayOfAccountProperty' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAccountProperty',
      'AccountProperty' => 'PMG\\BingAds\\CampaignManagement\\AccountProperty',
      'SetAccountPropertiesResponse' => 'PMG\\BingAds\\CampaignManagement\\SetAccountPropertiesResponse',
      'GetAccountPropertiesRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAccountPropertiesRequest',
      'ArrayOfAccountPropertyName' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAccountPropertyName',
      'GetAccountPropertiesResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAccountPropertiesResponse',
      'AddAdExtensionsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddAdExtensionsRequest',
      'ArrayOfAdExtension' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdExtension',
      'AdExtension' => 'PMG\\BingAds\\CampaignManagement\\AdExtension',
      'Schedule' => 'PMG\\BingAds\\CampaignManagement\\Schedule',
      'ArrayOfDayTime' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfDayTime',
      'DayTime' => 'PMG\\BingAds\\CampaignManagement\\DayTime',
      'LocationAdExtension' => 'PMG\\BingAds\\CampaignManagement\\LocationAdExtension',
      'Address' => 'PMG\\BingAds\\CampaignManagement\\Address',
      'GeoPoint' => 'PMG\\BingAds\\CampaignManagement\\GeoPoint',
      'CallAdExtension' => 'PMG\\BingAds\\CampaignManagement\\CallAdExtension',
      'ImageAdExtension' => 'PMG\\BingAds\\CampaignManagement\\ImageAdExtension',
      'AppAdExtension' => 'PMG\\BingAds\\CampaignManagement\\AppAdExtension',
      'ReviewAdExtension' => 'PMG\\BingAds\\CampaignManagement\\ReviewAdExtension',
      'CalloutAdExtension' => 'PMG\\BingAds\\CampaignManagement\\CalloutAdExtension',
      'SitelinkAdExtension' => 'PMG\\BingAds\\CampaignManagement\\SitelinkAdExtension',
      'ActionAdExtension' => 'PMG\\BingAds\\CampaignManagement\\ActionAdExtension',
      'StructuredSnippetAdExtension' => 'PMG\\BingAds\\CampaignManagement\\StructuredSnippetAdExtension',
      'PriceAdExtension' => 'PMG\\BingAds\\CampaignManagement\\PriceAdExtension',
      'ArrayOfPriceTableRow' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfPriceTableRow',
      'PriceTableRow' => 'PMG\\BingAds\\CampaignManagement\\PriceTableRow',
      'PromotionAdExtension' => 'PMG\\BingAds\\CampaignManagement\\PromotionAdExtension',
      'FilterLinkAdExtension' => 'PMG\\BingAds\\CampaignManagement\\FilterLinkAdExtension',
      'FlyerAdExtension' => 'PMG\\BingAds\\CampaignManagement\\FlyerAdExtension',
      'AddAdExtensionsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddAdExtensionsResponse',
      'ArrayOfAdExtensionIdentity' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdExtensionIdentity',
      'AdExtensionIdentity' => 'PMG\\BingAds\\CampaignManagement\\AdExtensionIdentity',
      'ArrayOfBatchErrorCollection' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfBatchErrorCollection',
      'BatchErrorCollection' => 'PMG\\BingAds\\CampaignManagement\\BatchErrorCollection',
      'EditorialErrorCollection' => 'PMG\\BingAds\\CampaignManagement\\EditorialErrorCollection',
      'GetAdExtensionsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdExtensionsByIdsRequest',
      'GetAdExtensionsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdExtensionsByIdsResponse',
      'UpdateAdExtensionsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateAdExtensionsRequest',
      'UpdateAdExtensionsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateAdExtensionsResponse',
      'DeleteAdExtensionsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdExtensionsRequest',
      'DeleteAdExtensionsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdExtensionsResponse',
      'GetAdExtensionsEditorialReasonsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdExtensionsEditorialReasonsRequest',
      'ArrayOfAdExtensionIdToEntityIdAssociation' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdExtensionIdToEntityIdAssociation',
      'AdExtensionIdToEntityIdAssociation' => 'PMG\\BingAds\\CampaignManagement\\AdExtensionIdToEntityIdAssociation',
      'GetAdExtensionsEditorialReasonsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdExtensionsEditorialReasonsResponse',
      'ArrayOfAdExtensionEditorialReasonCollection' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdExtensionEditorialReasonCollection',
      'AdExtensionEditorialReasonCollection' => 'PMG\\BingAds\\CampaignManagement\\AdExtensionEditorialReasonCollection',
      'ArrayOfAdExtensionEditorialReason' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdExtensionEditorialReason',
      'AdExtensionEditorialReason' => 'PMG\\BingAds\\CampaignManagement\\AdExtensionEditorialReason',
      'SetAdExtensionsAssociationsRequest' => 'PMG\\BingAds\\CampaignManagement\\SetAdExtensionsAssociationsRequest',
      'SetAdExtensionsAssociationsResponse' => 'PMG\\BingAds\\CampaignManagement\\SetAdExtensionsAssociationsResponse',
      'GetAdExtensionsAssociationsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdExtensionsAssociationsRequest',
      'GetAdExtensionsAssociationsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdExtensionsAssociationsResponse',
      'ArrayOfAdExtensionAssociationCollection' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdExtensionAssociationCollection',
      'AdExtensionAssociationCollection' => 'PMG\\BingAds\\CampaignManagement\\AdExtensionAssociationCollection',
      'ArrayOfAdExtensionAssociation' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdExtensionAssociation',
      'AdExtensionAssociation' => 'PMG\\BingAds\\CampaignManagement\\AdExtensionAssociation',
      'DeleteAdExtensionsAssociationsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdExtensionsAssociationsRequest',
      'DeleteAdExtensionsAssociationsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdExtensionsAssociationsResponse',
      'GetAdExtensionIdsByAccountIdRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdExtensionIdsByAccountIdRequest',
      'GetAdExtensionIdsByAccountIdResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdExtensionIdsByAccountIdResponse',
      'AddMediaRequest' => 'PMG\\BingAds\\CampaignManagement\\AddMediaRequest',
      'ArrayOfMedia' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfMedia',
      'Media' => 'PMG\\BingAds\\CampaignManagement\\Media',
      'Image' => 'PMG\\BingAds\\CampaignManagement\\Image',
      'AddMediaResponse' => 'PMG\\BingAds\\CampaignManagement\\AddMediaResponse',
      'DeleteMediaRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteMediaRequest',
      'DeleteMediaResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteMediaResponse',
      'GetMediaMetaDataByAccountIdRequest' => 'PMG\\BingAds\\CampaignManagement\\GetMediaMetaDataByAccountIdRequest',
      'Paging' => 'PMG\\BingAds\\CampaignManagement\\Paging',
      'GetMediaMetaDataByAccountIdResponse' => 'PMG\\BingAds\\CampaignManagement\\GetMediaMetaDataByAccountIdResponse',
      'ArrayOfMediaMetaData' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfMediaMetaData',
      'MediaMetaData' => 'PMG\\BingAds\\CampaignManagement\\MediaMetaData',
      'ArrayOfMediaRepresentation' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfMediaRepresentation',
      'MediaRepresentation' => 'PMG\\BingAds\\CampaignManagement\\MediaRepresentation',
      'ImageMediaRepresentation' => 'PMG\\BingAds\\CampaignManagement\\ImageMediaRepresentation',
      'GetMediaMetaDataByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetMediaMetaDataByIdsRequest',
      'GetMediaMetaDataByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetMediaMetaDataByIdsResponse',
      'GetMediaAssociationsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetMediaAssociationsRequest',
      'GetMediaAssociationsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetMediaAssociationsResponse',
      'ArrayOfArrayOfMediaAssociation' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfArrayOfMediaAssociation',
      'ArrayOfMediaAssociation' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfMediaAssociation',
      'MediaAssociation' => 'PMG\\BingAds\\CampaignManagement\\MediaAssociation',
      'GetAdGroupCriterionsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAdGroupCriterionsByIdsRequest',
      'GetAdGroupCriterionsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAdGroupCriterionsByIdsResponse',
      'ArrayOfAdGroupCriterion' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdGroupCriterion',
      'AdGroupCriterion' => 'PMG\\BingAds\\CampaignManagement\\AdGroupCriterion',
      'Criterion' => 'PMG\\BingAds\\CampaignManagement\\Criterion',
      'ProductPartition' => 'PMG\\BingAds\\CampaignManagement\\ProductPartition',
      'ProductCondition' => 'PMG\\BingAds\\CampaignManagement\\ProductCondition',
      'ProductScope' => 'PMG\\BingAds\\CampaignManagement\\ProductScope',
      'ArrayOfProductCondition' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfProductCondition',
      'Webpage' => 'PMG\\BingAds\\CampaignManagement\\Webpage',
      'WebpageParameter' => 'PMG\\BingAds\\CampaignManagement\\WebpageParameter',
      'ArrayOfWebpageCondition' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfWebpageCondition',
      'WebpageCondition' => 'PMG\\BingAds\\CampaignManagement\\WebpageCondition',
      'AgeCriterion' => 'PMG\\BingAds\\CampaignManagement\\AgeCriterion',
      'DeviceCriterion' => 'PMG\\BingAds\\CampaignManagement\\DeviceCriterion',
      'DayTimeCriterion' => 'PMG\\BingAds\\CampaignManagement\\DayTimeCriterion',
      'GenderCriterion' => 'PMG\\BingAds\\CampaignManagement\\GenderCriterion',
      'RadiusCriterion' => 'PMG\\BingAds\\CampaignManagement\\RadiusCriterion',
      'LocationCriterion' => 'PMG\\BingAds\\CampaignManagement\\LocationCriterion',
      'LocationIntentCriterion' => 'PMG\\BingAds\\CampaignManagement\\LocationIntentCriterion',
      'AudienceCriterion' => 'PMG\\BingAds\\CampaignManagement\\AudienceCriterion',
      'ProfileCriterion' => 'PMG\\BingAds\\CampaignManagement\\ProfileCriterion',
      'StoreCriterion' => 'PMG\\BingAds\\CampaignManagement\\StoreCriterion',
      'BiddableAdGroupCriterion' => 'PMG\\BingAds\\CampaignManagement\\BiddableAdGroupCriterion',
      'CriterionBid' => 'PMG\\BingAds\\CampaignManagement\\CriterionBid',
      'FixedBid' => 'PMG\\BingAds\\CampaignManagement\\FixedBid',
      'BidMultiplier' => 'PMG\\BingAds\\CampaignManagement\\BidMultiplier',
      'CriterionCashback' => 'PMG\\BingAds\\CampaignManagement\\CriterionCashback',
      'CashbackAdjustment' => 'PMG\\BingAds\\CampaignManagement\\CashbackAdjustment',
      'NegativeAdGroupCriterion' => 'PMG\\BingAds\\CampaignManagement\\NegativeAdGroupCriterion',
      'AddAdGroupCriterionsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddAdGroupCriterionsRequest',
      'AddAdGroupCriterionsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddAdGroupCriterionsResponse',
      'UpdateAdGroupCriterionsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateAdGroupCriterionsRequest',
      'UpdateAdGroupCriterionsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateAdGroupCriterionsResponse',
      'DeleteAdGroupCriterionsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdGroupCriterionsRequest',
      'DeleteAdGroupCriterionsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteAdGroupCriterionsResponse',
      'ApplyProductPartitionActionsRequest' => 'PMG\\BingAds\\CampaignManagement\\ApplyProductPartitionActionsRequest',
      'ArrayOfAdGroupCriterionAction' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdGroupCriterionAction',
      'AdGroupCriterionAction' => 'PMG\\BingAds\\CampaignManagement\\AdGroupCriterionAction',
      'ApplyProductPartitionActionsResponse' => 'PMG\\BingAds\\CampaignManagement\\ApplyProductPartitionActionsResponse',
      'GetBMCStoresByCustomerIdRequest' => 'PMG\\BingAds\\CampaignManagement\\GetBMCStoresByCustomerIdRequest',
      'GetBMCStoresByCustomerIdResponse' => 'PMG\\BingAds\\CampaignManagement\\GetBMCStoresByCustomerIdResponse',
      'ArrayOfBMCStore' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfBMCStore',
      'BMCStore' => 'PMG\\BingAds\\CampaignManagement\\BMCStore',
      'AddNegativeKeywordsToEntitiesRequest' => 'PMG\\BingAds\\CampaignManagement\\AddNegativeKeywordsToEntitiesRequest',
      'ArrayOfEntityNegativeKeyword' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfEntityNegativeKeyword',
      'EntityNegativeKeyword' => 'PMG\\BingAds\\CampaignManagement\\EntityNegativeKeyword',
      'ArrayOfNegativeKeyword' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfNegativeKeyword',
      'NegativeKeyword' => 'PMG\\BingAds\\CampaignManagement\\NegativeKeyword',
      'SharedListItem' => 'PMG\\BingAds\\CampaignManagement\\SharedListItem',
      'NegativeSite' => 'PMG\\BingAds\\CampaignManagement\\NegativeSite',
      'AddNegativeKeywordsToEntitiesResponse' => 'PMG\\BingAds\\CampaignManagement\\AddNegativeKeywordsToEntitiesResponse',
      'ArrayOfIdCollection' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfIdCollection',
      'IdCollection' => 'PMG\\BingAds\\CampaignManagement\\IdCollection',
      'GetNegativeKeywordsByEntityIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetNegativeKeywordsByEntityIdsRequest',
      'GetNegativeKeywordsByEntityIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetNegativeKeywordsByEntityIdsResponse',
      'DeleteNegativeKeywordsFromEntitiesRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteNegativeKeywordsFromEntitiesRequest',
      'DeleteNegativeKeywordsFromEntitiesResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteNegativeKeywordsFromEntitiesResponse',
      'GetSharedEntitiesByAccountIdRequest' => 'PMG\\BingAds\\CampaignManagement\\GetSharedEntitiesByAccountIdRequest',
      'GetSharedEntitiesByAccountIdResponse' => 'PMG\\BingAds\\CampaignManagement\\GetSharedEntitiesByAccountIdResponse',
      'ArrayOfSharedEntity' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfSharedEntity',
      'SharedEntity' => 'PMG\\BingAds\\CampaignManagement\\SharedEntity',
      'SharedList' => 'PMG\\BingAds\\CampaignManagement\\SharedList',
      'NegativeKeywordList' => 'PMG\\BingAds\\CampaignManagement\\NegativeKeywordList',
      'PlacementExclusionList' => 'PMG\\BingAds\\CampaignManagement\\PlacementExclusionList',
      'GetSharedEntitiesRequest' => 'PMG\\BingAds\\CampaignManagement\\GetSharedEntitiesRequest',
      'GetSharedEntitiesResponse' => 'PMG\\BingAds\\CampaignManagement\\GetSharedEntitiesResponse',
      'AddSharedEntityRequest' => 'PMG\\BingAds\\CampaignManagement\\AddSharedEntityRequest',
      'ArrayOfSharedListItem' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfSharedListItem',
      'AddSharedEntityResponse' => 'PMG\\BingAds\\CampaignManagement\\AddSharedEntityResponse',
      'GetListItemsBySharedListRequest' => 'PMG\\BingAds\\CampaignManagement\\GetListItemsBySharedListRequest',
      'GetListItemsBySharedListResponse' => 'PMG\\BingAds\\CampaignManagement\\GetListItemsBySharedListResponse',
      'AddListItemsToSharedListRequest' => 'PMG\\BingAds\\CampaignManagement\\AddListItemsToSharedListRequest',
      'AddListItemsToSharedListResponse' => 'PMG\\BingAds\\CampaignManagement\\AddListItemsToSharedListResponse',
      'UpdateSharedEntitiesRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateSharedEntitiesRequest',
      'UpdateSharedEntitiesResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateSharedEntitiesResponse',
      'DeleteListItemsFromSharedListRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteListItemsFromSharedListRequest',
      'DeleteListItemsFromSharedListResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteListItemsFromSharedListResponse',
      'SetSharedEntityAssociationsRequest' => 'PMG\\BingAds\\CampaignManagement\\SetSharedEntityAssociationsRequest',
      'ArrayOfSharedEntityAssociation' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfSharedEntityAssociation',
      'SharedEntityAssociation' => 'PMG\\BingAds\\CampaignManagement\\SharedEntityAssociation',
      'SetSharedEntityAssociationsResponse' => 'PMG\\BingAds\\CampaignManagement\\SetSharedEntityAssociationsResponse',
      'DeleteSharedEntityAssociationsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteSharedEntityAssociationsRequest',
      'DeleteSharedEntityAssociationsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteSharedEntityAssociationsResponse',
      'GetSharedEntityAssociationsBySharedEntityIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetSharedEntityAssociationsBySharedEntityIdsRequest',
      'GetSharedEntityAssociationsBySharedEntityIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetSharedEntityAssociationsBySharedEntityIdsResponse',
      'GetSharedEntityAssociationsByEntityIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetSharedEntityAssociationsByEntityIdsRequest',
      'GetSharedEntityAssociationsByEntityIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetSharedEntityAssociationsByEntityIdsResponse',
      'DeleteSharedEntitiesRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteSharedEntitiesRequest',
      'DeleteSharedEntitiesResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteSharedEntitiesResponse',
      'GetCampaignSizesByAccountIdRequest' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignSizesByAccountIdRequest',
      'GetCampaignSizesByAccountIdResponse' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignSizesByAccountIdResponse',
      'ArrayOfCampaignSize' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCampaignSize',
      'CampaignSize' => 'PMG\\BingAds\\CampaignManagement\\CampaignSize',
      'AddCampaignCriterionsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddCampaignCriterionsRequest',
      'ArrayOfCampaignCriterion' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCampaignCriterion',
      'CampaignCriterion' => 'PMG\\BingAds\\CampaignManagement\\CampaignCriterion',
      'NegativeCampaignCriterion' => 'PMG\\BingAds\\CampaignManagement\\NegativeCampaignCriterion',
      'BiddableCampaignCriterion' => 'PMG\\BingAds\\CampaignManagement\\BiddableCampaignCriterion',
      'AddCampaignCriterionsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddCampaignCriterionsResponse',
      'UpdateCampaignCriterionsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateCampaignCriterionsRequest',
      'UpdateCampaignCriterionsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateCampaignCriterionsResponse',
      'DeleteCampaignCriterionsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteCampaignCriterionsRequest',
      'DeleteCampaignCriterionsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteCampaignCriterionsResponse',
      'GetCampaignCriterionsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignCriterionsByIdsRequest',
      'GetCampaignCriterionsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignCriterionsByIdsResponse',
      'AddBudgetsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddBudgetsRequest',
      'ArrayOfBudget' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfBudget',
      'Budget' => 'PMG\\BingAds\\CampaignManagement\\Budget',
      'AddBudgetsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddBudgetsResponse',
      'UpdateBudgetsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateBudgetsRequest',
      'UpdateBudgetsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateBudgetsResponse',
      'DeleteBudgetsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteBudgetsRequest',
      'DeleteBudgetsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteBudgetsResponse',
      'GetBudgetsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetBudgetsByIdsRequest',
      'GetBudgetsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetBudgetsByIdsResponse',
      'GetCampaignIdsByBudgetIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignIdsByBudgetIdsRequest',
      'GetCampaignIdsByBudgetIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignIdsByBudgetIdsResponse',
      'AddBidStrategiesRequest' => 'PMG\\BingAds\\CampaignManagement\\AddBidStrategiesRequest',
      'ArrayOfBidStrategy' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfBidStrategy',
      'BidStrategy' => 'PMG\\BingAds\\CampaignManagement\\BidStrategy',
      'AddBidStrategiesResponse' => 'PMG\\BingAds\\CampaignManagement\\AddBidStrategiesResponse',
      'UpdateBidStrategiesRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateBidStrategiesRequest',
      'UpdateBidStrategiesResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateBidStrategiesResponse',
      'DeleteBidStrategiesRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteBidStrategiesRequest',
      'DeleteBidStrategiesResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteBidStrategiesResponse',
      'GetBidStrategiesByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetBidStrategiesByIdsRequest',
      'GetBidStrategiesByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetBidStrategiesByIdsResponse',
      'GetCampaignIdsByBidStrategyIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignIdsByBidStrategyIdsRequest',
      'GetCampaignIdsByBidStrategyIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetCampaignIdsByBidStrategyIdsResponse',
      'AddAudiencesRequest' => 'PMG\\BingAds\\CampaignManagement\\AddAudiencesRequest',
      'ArrayOfAudience' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAudience',
      'Audience' => 'PMG\\BingAds\\CampaignManagement\\Audience',
      'CustomerShare' => 'PMG\\BingAds\\CampaignManagement\\CustomerShare',
      'ArrayOfCustomerAccountShare' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCustomerAccountShare',
      'CustomerAccountShare' => 'PMG\\BingAds\\CampaignManagement\\CustomerAccountShare',
      'ArrayOfCustomerAccountShareAssociation' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCustomerAccountShareAssociation',
      'CustomerAccountShareAssociation' => 'PMG\\BingAds\\CampaignManagement\\CustomerAccountShareAssociation',
      'RemarketingList' => 'PMG\\BingAds\\CampaignManagement\\RemarketingList',
      'RemarketingRule' => 'PMG\\BingAds\\CampaignManagement\\RemarketingRule',
      'PageVisitorsRule' => 'PMG\\BingAds\\CampaignManagement\\PageVisitorsRule',
      'ArrayOfRuleItemGroup' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfRuleItemGroup',
      'RuleItemGroup' => 'PMG\\BingAds\\CampaignManagement\\RuleItemGroup',
      'ArrayOfRuleItem' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfRuleItem',
      'RuleItem' => 'PMG\\BingAds\\CampaignManagement\\RuleItem',
      'StringRuleItem' => 'PMG\\BingAds\\CampaignManagement\\StringRuleItem',
      'PageVisitorsWhoVisitedAnotherPageRule' => 'PMG\\BingAds\\CampaignManagement\\PageVisitorsWhoVisitedAnotherPageRule',
      'PageVisitorsWhoDidNotVisitAnotherPageRule' => 'PMG\\BingAds\\CampaignManagement\\PageVisitorsWhoDidNotVisitAnotherPageRule',
      'CustomEventsRule' => 'PMG\\BingAds\\CampaignManagement\\CustomEventsRule',
      'CustomAudience' => 'PMG\\BingAds\\CampaignManagement\\CustomAudience',
      'InMarketAudience' => 'PMG\\BingAds\\CampaignManagement\\InMarketAudience',
      'ProductAudience' => 'PMG\\BingAds\\CampaignManagement\\ProductAudience',
      'SimilarRemarketingList' => 'PMG\\BingAds\\CampaignManagement\\SimilarRemarketingList',
      'CombinedList' => 'PMG\\BingAds\\CampaignManagement\\CombinedList',
      'ArrayOfCombinationRule' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCombinationRule',
      'CombinationRule' => 'PMG\\BingAds\\CampaignManagement\\CombinationRule',
      'AddAudiencesResponse' => 'PMG\\BingAds\\CampaignManagement\\AddAudiencesResponse',
      'UpdateAudiencesRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateAudiencesRequest',
      'UpdateAudiencesResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateAudiencesResponse',
      'DeleteAudiencesRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteAudiencesRequest',
      'DeleteAudiencesResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteAudiencesResponse',
      'GetAudiencesByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetAudiencesByIdsRequest',
      'GetAudiencesByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetAudiencesByIdsResponse',
      'GetUetTagsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetUetTagsByIdsRequest',
      'GetUetTagsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetUetTagsByIdsResponse',
      'ArrayOfUetTag' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfUetTag',
      'UetTag' => 'PMG\\BingAds\\CampaignManagement\\UetTag',
      'AddUetTagsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddUetTagsRequest',
      'AddUetTagsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddUetTagsResponse',
      'UpdateUetTagsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateUetTagsRequest',
      'UpdateUetTagsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateUetTagsResponse',
      'GetConversionGoalsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetConversionGoalsByIdsRequest',
      'GetConversionGoalsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetConversionGoalsByIdsResponse',
      'ArrayOfConversionGoal' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfConversionGoal',
      'ConversionGoal' => 'PMG\\BingAds\\CampaignManagement\\ConversionGoal',
      'ConversionGoalRevenue' => 'PMG\\BingAds\\CampaignManagement\\ConversionGoalRevenue',
      'UrlGoal' => 'PMG\\BingAds\\CampaignManagement\\UrlGoal',
      'DurationGoal' => 'PMG\\BingAds\\CampaignManagement\\DurationGoal',
      'PagesViewedPerVisitGoal' => 'PMG\\BingAds\\CampaignManagement\\PagesViewedPerVisitGoal',
      'EventGoal' => 'PMG\\BingAds\\CampaignManagement\\EventGoal',
      'AppInstallGoal' => 'PMG\\BingAds\\CampaignManagement\\AppInstallGoal',
      'OfflineConversionGoal' => 'PMG\\BingAds\\CampaignManagement\\OfflineConversionGoal',
      'InStoreTransactionGoal' => 'PMG\\BingAds\\CampaignManagement\\InStoreTransactionGoal',
      'GetConversionGoalsByTagIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetConversionGoalsByTagIdsRequest',
      'GetConversionGoalsByTagIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetConversionGoalsByTagIdsResponse',
      'AddConversionGoalsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddConversionGoalsRequest',
      'AddConversionGoalsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddConversionGoalsResponse',
      'UpdateConversionGoalsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateConversionGoalsRequest',
      'UpdateConversionGoalsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateConversionGoalsResponse',
      'ApplyOfflineConversionsRequest' => 'PMG\\BingAds\\CampaignManagement\\ApplyOfflineConversionsRequest',
      'ArrayOfOfflineConversion' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfOfflineConversion',
      'OfflineConversion' => 'PMG\\BingAds\\CampaignManagement\\OfflineConversion',
      'ApplyOfflineConversionsResponse' => 'PMG\\BingAds\\CampaignManagement\\ApplyOfflineConversionsResponse',
      'ApplyOfflineConversionAdjustmentsRequest' => 'PMG\\BingAds\\CampaignManagement\\ApplyOfflineConversionAdjustmentsRequest',
      'ArrayOfOfflineConversionAdjustment' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfOfflineConversionAdjustment',
      'OfflineConversionAdjustment' => 'PMG\\BingAds\\CampaignManagement\\OfflineConversionAdjustment',
      'ApplyOfflineConversionAdjustmentsResponse' => 'PMG\\BingAds\\CampaignManagement\\ApplyOfflineConversionAdjustmentsResponse',
      'AddLabelsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddLabelsRequest',
      'ArrayOfLabel' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfLabel',
      'Label' => 'PMG\\BingAds\\CampaignManagement\\Label',
      'AddLabelsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddLabelsResponse',
      'DeleteLabelsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteLabelsRequest',
      'DeleteLabelsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteLabelsResponse',
      'UpdateLabelsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateLabelsRequest',
      'UpdateLabelsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateLabelsResponse',
      'GetLabelsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetLabelsByIdsRequest',
      'GetLabelsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetLabelsByIdsResponse',
      'SetLabelAssociationsRequest' => 'PMG\\BingAds\\CampaignManagement\\SetLabelAssociationsRequest',
      'ArrayOfLabelAssociation' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfLabelAssociation',
      'LabelAssociation' => 'PMG\\BingAds\\CampaignManagement\\LabelAssociation',
      'SetLabelAssociationsResponse' => 'PMG\\BingAds\\CampaignManagement\\SetLabelAssociationsResponse',
      'DeleteLabelAssociationsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteLabelAssociationsRequest',
      'DeleteLabelAssociationsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteLabelAssociationsResponse',
      'GetLabelAssociationsByEntityIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetLabelAssociationsByEntityIdsRequest',
      'GetLabelAssociationsByEntityIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetLabelAssociationsByEntityIdsResponse',
      'GetLabelAssociationsByLabelIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetLabelAssociationsByLabelIdsRequest',
      'GetLabelAssociationsByLabelIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetLabelAssociationsByLabelIdsResponse',
      'AddExperimentsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddExperimentsRequest',
      'ArrayOfExperiment' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfExperiment',
      'Experiment' => 'PMG\\BingAds\\CampaignManagement\\Experiment',
      'AddExperimentsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddExperimentsResponse',
      'DeleteExperimentsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteExperimentsRequest',
      'DeleteExperimentsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteExperimentsResponse',
      'UpdateExperimentsRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateExperimentsRequest',
      'UpdateExperimentsResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateExperimentsResponse',
      'GetExperimentsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetExperimentsByIdsRequest',
      'GetExperimentsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetExperimentsByIdsResponse',
      'GetProfileDataFileUrlRequest' => 'PMG\\BingAds\\CampaignManagement\\GetProfileDataFileUrlRequest',
      'GetProfileDataFileUrlResponse' => 'PMG\\BingAds\\CampaignManagement\\GetProfileDataFileUrlResponse',
      'SearchCompaniesRequest' => 'PMG\\BingAds\\CampaignManagement\\SearchCompaniesRequest',
      'SearchCompaniesResponse' => 'PMG\\BingAds\\CampaignManagement\\SearchCompaniesResponse',
      'ArrayOfCompany' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCompany',
      'Company' => 'PMG\\BingAds\\CampaignManagement\\Company',
      'GetFileImportUploadUrlRequest' => 'PMG\\BingAds\\CampaignManagement\\GetFileImportUploadUrlRequest',
      'GetFileImportUploadUrlResponse' => 'PMG\\BingAds\\CampaignManagement\\GetFileImportUploadUrlResponse',
      'AddImportJobsRequest' => 'PMG\\BingAds\\CampaignManagement\\AddImportJobsRequest',
      'ArrayOfImportJob' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfImportJob',
      'ImportJob' => 'PMG\\BingAds\\CampaignManagement\\ImportJob',
      'Frequency' => 'PMG\\BingAds\\CampaignManagement\\Frequency',
      'ImportOption' => 'PMG\\BingAds\\CampaignManagement\\ImportOption',
      'GoogleImportOption' => 'PMG\\BingAds\\CampaignManagement\\GoogleImportOption',
      'ImportSearchAndReplaceForStringProperty' => 'PMG\\BingAds\\CampaignManagement\\ImportSearchAndReplaceForStringProperty',
      'FileImportOption' => 'PMG\\BingAds\\CampaignManagement\\FileImportOption',
      'GoogleImportJob' => 'PMG\\BingAds\\CampaignManagement\\GoogleImportJob',
      'ArrayOfCampaignAdGroupIds' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfCampaignAdGroupIds',
      'CampaignAdGroupIds' => 'PMG\\BingAds\\CampaignManagement\\CampaignAdGroupIds',
      'FileImportJob' => 'PMG\\BingAds\\CampaignManagement\\FileImportJob',
      'AddImportJobsResponse' => 'PMG\\BingAds\\CampaignManagement\\AddImportJobsResponse',
      'GetImportResultsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetImportResultsRequest',
      'GetImportResultsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetImportResultsResponse',
      'ArrayOfImportResult' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfImportResult',
      'ImportResult' => 'PMG\\BingAds\\CampaignManagement\\ImportResult',
      'ArrayOfImportEntityStatistics' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfImportEntityStatistics',
      'ImportEntityStatistics' => 'PMG\\BingAds\\CampaignManagement\\ImportEntityStatistics',
      'GetImportJobsByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetImportJobsByIdsRequest',
      'GetImportJobsByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetImportJobsByIdsResponse',
      'DeleteImportJobsRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteImportJobsRequest',
      'DeleteImportJobsResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteImportJobsResponse',
      'GetImportEntityIdsMappingRequest' => 'PMG\\BingAds\\CampaignManagement\\GetImportEntityIdsMappingRequest',
      'GetImportEntityIdsMappingResponse' => 'PMG\\BingAds\\CampaignManagement\\GetImportEntityIdsMappingResponse',
      'AddVideosRequest' => 'PMG\\BingAds\\CampaignManagement\\AddVideosRequest',
      'ArrayOfVideo' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfVideo',
      'Video' => 'PMG\\BingAds\\CampaignManagement\\Video',
      'AddVideosResponse' => 'PMG\\BingAds\\CampaignManagement\\AddVideosResponse',
      'DeleteVideosRequest' => 'PMG\\BingAds\\CampaignManagement\\DeleteVideosRequest',
      'DeleteVideosResponse' => 'PMG\\BingAds\\CampaignManagement\\DeleteVideosResponse',
      'GetVideosByIdsRequest' => 'PMG\\BingAds\\CampaignManagement\\GetVideosByIdsRequest',
      'GetVideosByIdsResponse' => 'PMG\\BingAds\\CampaignManagement\\GetVideosByIdsResponse',
      'UpdateVideosRequest' => 'PMG\\BingAds\\CampaignManagement\\UpdateVideosRequest',
      'UpdateVideosResponse' => 'PMG\\BingAds\\CampaignManagement\\UpdateVideosResponse',
      'ArrayOfstring' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfstring',
      'ArrayOfKeyValueOfstringstring' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfKeyValueOfstringstring',
      'KeyValueOfstringstring' => 'PMG\\BingAds\\CampaignManagement\\KeyValueOfstringstring',
      'ArrayOflong' => 'PMG\\BingAds\\CampaignManagement\\ArrayOflong',
      'ArrayOfKeyValuePairOfstringstring' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfKeyValuePairOfstringstring',
      'KeyValuePairOfstringstring' => 'PMG\\BingAds\\CampaignManagement\\KeyValuePairOfstringstring',
      'ArrayOfKeyValuePairOflonglong' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfKeyValuePairOflonglong',
      'KeyValuePairOflonglong' => 'PMG\\BingAds\\CampaignManagement\\KeyValuePairOflonglong',
      'ArrayOfNullableOflong' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfNullableOflong',
      'ArrayOfAdApiError' => 'PMG\\BingAds\\CampaignManagement\\ArrayOfAdApiError',
      'AdApiError' => 'PMG\\BingAds\\CampaignManagement\\AdApiError',
      'ApplicationFault' => 'PMG\\BingAds\\CampaignManagement\\ApplicationFault',
      'ApiFault' => 'PMG\\BingAds\\CampaignManagement\\ApiFault',
      'ApiFaultDetail' => 'PMG\\BingAds\\CampaignManagement\\ApiFault',
      'AdApiFault' => 'PMG\\BingAds\\CampaignManagement\\AdApiFault',
      'AdApiFaultDetail' => 'PMG\\BingAds\\CampaignManagement\\AdApiFault',
      'EditorialApiFault' => 'PMG\\BingAds\\CampaignManagement\\EditorialApiFault',
      'EditorialApiFaultDetail' => 'PMG\\BingAds\\CampaignManagement\\EditorialApiFault',
    );

    /**
     * @param PMG\BingAds\BingSession $session A session object with credentials, etc
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @param PMG\BingAds\ServiceDescriptor $sd The services descriptor for the service
     */
    public function __construct(\PMG\BingAds\BingSession $session, string $wsdl, array $options=array(), \PMG\BingAds\ServiceDescriptor $sd=null)
    {
    $options["classmap"] = array_replace(self::$classmap, $options["classmap"] ?? []);
    parent::__construct($session, $wsdl, $options, $sd);
    }

    /**
     * @param AddCampaignsRequest $parameters
     * @return AddCampaignsResponse
     */
    public function addCampaigns(AddCampaignsRequest $parameters)
    {
        return $this->__soapCall("AddCampaigns", [$parameters]);
    }

    /**
     * @param GetCampaignsByAccountIdRequest $parameters
     * @return GetCampaignsByAccountIdResponse
     */
    public function getCampaignsByAccountId(GetCampaignsByAccountIdRequest $parameters)
    {
        return $this->__soapCall("GetCampaignsByAccountId", [$parameters]);
    }

    /**
     * @param GetCampaignsByIdsRequest $parameters
     * @return GetCampaignsByIdsResponse
     */
    public function getCampaignsByIds(GetCampaignsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetCampaignsByIds", [$parameters]);
    }

    /**
     * @param DeleteCampaignsRequest $parameters
     * @return DeleteCampaignsResponse
     */
    public function deleteCampaigns(DeleteCampaignsRequest $parameters)
    {
        return $this->__soapCall("DeleteCampaigns", [$parameters]);
    }

    /**
     * @param UpdateCampaignsRequest $parameters
     * @return UpdateCampaignsResponse
     */
    public function updateCampaigns(UpdateCampaignsRequest $parameters)
    {
        return $this->__soapCall("UpdateCampaigns", [$parameters]);
    }

    /**
     * @param GetNegativeSitesByCampaignIdsRequest $parameters
     * @return GetNegativeSitesByCampaignIdsResponse
     */
    public function getNegativeSitesByCampaignIds(GetNegativeSitesByCampaignIdsRequest $parameters)
    {
        return $this->__soapCall("GetNegativeSitesByCampaignIds", [$parameters]);
    }

    /**
     * @param SetNegativeSitesToCampaignsRequest $parameters
     * @return SetNegativeSitesToCampaignsResponse
     */
    public function setNegativeSitesToCampaigns(SetNegativeSitesToCampaignsRequest $parameters)
    {
        return $this->__soapCall("SetNegativeSitesToCampaigns", [$parameters]);
    }

    /**
     * @param GetConfigValueRequest $parameters
     * @return GetConfigValueResponse
     */
    public function getConfigValue(GetConfigValueRequest $parameters)
    {
        return $this->__soapCall("GetConfigValue", [$parameters]);
    }

    /**
     * @param GetBSCCountriesRequest $parameters
     * @return GetBSCCountriesResponse
     */
    public function getBSCCountries(GetBSCCountriesRequest $parameters)
    {
        return $this->__soapCall("GetBSCCountries", [$parameters]);
    }

    /**
     * @param AddAdGroupsRequest $parameters
     * @return AddAdGroupsResponse
     */
    public function addAdGroups(AddAdGroupsRequest $parameters)
    {
        return $this->__soapCall("AddAdGroups", [$parameters]);
    }

    /**
     * @param DeleteAdGroupsRequest $parameters
     * @return DeleteAdGroupsResponse
     */
    public function deleteAdGroups(DeleteAdGroupsRequest $parameters)
    {
        return $this->__soapCall("DeleteAdGroups", [$parameters]);
    }

    /**
     * @param GetAdGroupsByIdsRequest $parameters
     * @return GetAdGroupsByIdsResponse
     */
    public function getAdGroupsByIds(GetAdGroupsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetAdGroupsByIds", [$parameters]);
    }

    /**
     * @param GetAdGroupsByCampaignIdRequest $parameters
     * @return GetAdGroupsByCampaignIdResponse
     */
    public function getAdGroupsByCampaignId(GetAdGroupsByCampaignIdRequest $parameters)
    {
        return $this->__soapCall("GetAdGroupsByCampaignId", [$parameters]);
    }

    /**
     * @param UpdateAdGroupsRequest $parameters
     * @return UpdateAdGroupsResponse
     */
    public function updateAdGroups(UpdateAdGroupsRequest $parameters)
    {
        return $this->__soapCall("UpdateAdGroups", [$parameters]);
    }

    /**
     * @param GetNegativeSitesByAdGroupIdsRequest $parameters
     * @return GetNegativeSitesByAdGroupIdsResponse
     */
    public function getNegativeSitesByAdGroupIds(GetNegativeSitesByAdGroupIdsRequest $parameters)
    {
        return $this->__soapCall("GetNegativeSitesByAdGroupIds", [$parameters]);
    }

    /**
     * @param SetNegativeSitesToAdGroupsRequest $parameters
     * @return SetNegativeSitesToAdGroupsResponse
     */
    public function setNegativeSitesToAdGroups(SetNegativeSitesToAdGroupsRequest $parameters)
    {
        return $this->__soapCall("SetNegativeSitesToAdGroups", [$parameters]);
    }

    /**
     * @param GetGeoLocationsFileUrlRequest $parameters
     * @return GetGeoLocationsFileUrlResponse
     */
    public function getGeoLocationsFileUrl(GetGeoLocationsFileUrlRequest $parameters)
    {
        return $this->__soapCall("GetGeoLocationsFileUrl", [$parameters]);
    }

    /**
     * @param AddAdsRequest $parameters
     * @return AddAdsResponse
     */
    public function addAds(AddAdsRequest $parameters)
    {
        return $this->__soapCall("AddAds", [$parameters]);
    }

    /**
     * @param DeleteAdsRequest $parameters
     * @return DeleteAdsResponse
     */
    public function deleteAds(DeleteAdsRequest $parameters)
    {
        return $this->__soapCall("DeleteAds", [$parameters]);
    }

    /**
     * @param GetAdsByEditorialStatusRequest $parameters
     * @return GetAdsByEditorialStatusResponse
     */
    public function getAdsByEditorialStatus(GetAdsByEditorialStatusRequest $parameters)
    {
        return $this->__soapCall("GetAdsByEditorialStatus", [$parameters]);
    }

    /**
     * @param GetAdsByIdsRequest $parameters
     * @return GetAdsByIdsResponse
     */
    public function getAdsByIds(GetAdsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetAdsByIds", [$parameters]);
    }

    /**
     * @param GetAdsByAdGroupIdRequest $parameters
     * @return GetAdsByAdGroupIdResponse
     */
    public function getAdsByAdGroupId(GetAdsByAdGroupIdRequest $parameters)
    {
        return $this->__soapCall("GetAdsByAdGroupId", [$parameters]);
    }

    /**
     * @param UpdateAdsRequest $parameters
     * @return UpdateAdsResponse
     */
    public function updateAds(UpdateAdsRequest $parameters)
    {
        return $this->__soapCall("UpdateAds", [$parameters]);
    }

    /**
     * @param AddKeywordsRequest $parameters
     * @return AddKeywordsResponse
     */
    public function addKeywords(AddKeywordsRequest $parameters)
    {
        return $this->__soapCall("AddKeywords", [$parameters]);
    }

    /**
     * @param DeleteKeywordsRequest $parameters
     * @return DeleteKeywordsResponse
     */
    public function deleteKeywords(DeleteKeywordsRequest $parameters)
    {
        return $this->__soapCall("DeleteKeywords", [$parameters]);
    }

    /**
     * @param GetKeywordsByEditorialStatusRequest $parameters
     * @return GetKeywordsByEditorialStatusResponse
     */
    public function getKeywordsByEditorialStatus(GetKeywordsByEditorialStatusRequest $parameters)
    {
        return $this->__soapCall("GetKeywordsByEditorialStatus", [$parameters]);
    }

    /**
     * @param GetKeywordsByIdsRequest $parameters
     * @return GetKeywordsByIdsResponse
     */
    public function getKeywordsByIds(GetKeywordsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetKeywordsByIds", [$parameters]);
    }

    /**
     * @param GetKeywordsByAdGroupIdRequest $parameters
     * @return GetKeywordsByAdGroupIdResponse
     */
    public function getKeywordsByAdGroupId(GetKeywordsByAdGroupIdRequest $parameters)
    {
        return $this->__soapCall("GetKeywordsByAdGroupId", [$parameters]);
    }

    /**
     * @param UpdateKeywordsRequest $parameters
     * @return UpdateKeywordsResponse
     */
    public function updateKeywords(UpdateKeywordsRequest $parameters)
    {
        return $this->__soapCall("UpdateKeywords", [$parameters]);
    }

    /**
     * @param AppealEditorialRejectionsRequest $parameters
     * @return AppealEditorialRejectionsResponse
     */
    public function appealEditorialRejections(AppealEditorialRejectionsRequest $parameters)
    {
        return $this->__soapCall("AppealEditorialRejections", [$parameters]);
    }

    /**
     * @param GetEditorialReasonsByIdsRequest $parameters
     * @return GetEditorialReasonsByIdsResponse
     */
    public function getEditorialReasonsByIds(GetEditorialReasonsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetEditorialReasonsByIds", [$parameters]);
    }

    /**
     * @param GetAccountMigrationStatusesRequest $parameters
     * @return GetAccountMigrationStatusesResponse
     */
    public function getAccountMigrationStatuses(GetAccountMigrationStatusesRequest $parameters)
    {
        return $this->__soapCall("GetAccountMigrationStatuses", [$parameters]);
    }

    /**
     * @param SetAccountPropertiesRequest $parameters
     * @return SetAccountPropertiesResponse
     */
    public function setAccountProperties(SetAccountPropertiesRequest $parameters)
    {
        return $this->__soapCall("SetAccountProperties", [$parameters]);
    }

    /**
     * @param GetAccountPropertiesRequest $parameters
     * @return GetAccountPropertiesResponse
     */
    public function getAccountProperties(GetAccountPropertiesRequest $parameters)
    {
        return $this->__soapCall("GetAccountProperties", [$parameters]);
    }

    /**
     * @param AddAdExtensionsRequest $parameters
     * @return AddAdExtensionsResponse
     */
    public function addAdExtensions(AddAdExtensionsRequest $parameters)
    {
        return $this->__soapCall("AddAdExtensions", [$parameters]);
    }

    /**
     * @param GetAdExtensionsByIdsRequest $parameters
     * @return GetAdExtensionsByIdsResponse
     */
    public function getAdExtensionsByIds(GetAdExtensionsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetAdExtensionsByIds", [$parameters]);
    }

    /**
     * @param UpdateAdExtensionsRequest $parameters
     * @return UpdateAdExtensionsResponse
     */
    public function updateAdExtensions(UpdateAdExtensionsRequest $parameters)
    {
        return $this->__soapCall("UpdateAdExtensions", [$parameters]);
    }

    /**
     * @param DeleteAdExtensionsRequest $parameters
     * @return DeleteAdExtensionsResponse
     */
    public function deleteAdExtensions(DeleteAdExtensionsRequest $parameters)
    {
        return $this->__soapCall("DeleteAdExtensions", [$parameters]);
    }

    /**
     * @param GetAdExtensionsEditorialReasonsRequest $parameters
     * @return GetAdExtensionsEditorialReasonsResponse
     */
    public function getAdExtensionsEditorialReasons(GetAdExtensionsEditorialReasonsRequest $parameters)
    {
        return $this->__soapCall("GetAdExtensionsEditorialReasons", [$parameters]);
    }

    /**
     * @param SetAdExtensionsAssociationsRequest $parameters
     * @return SetAdExtensionsAssociationsResponse
     */
    public function setAdExtensionsAssociations(SetAdExtensionsAssociationsRequest $parameters)
    {
        return $this->__soapCall("SetAdExtensionsAssociations", [$parameters]);
    }

    /**
     * @param GetAdExtensionsAssociationsRequest $parameters
     * @return GetAdExtensionsAssociationsResponse
     */
    public function getAdExtensionsAssociations(GetAdExtensionsAssociationsRequest $parameters)
    {
        return $this->__soapCall("GetAdExtensionsAssociations", [$parameters]);
    }

    /**
     * @param DeleteAdExtensionsAssociationsRequest $parameters
     * @return DeleteAdExtensionsAssociationsResponse
     */
    public function deleteAdExtensionsAssociations(DeleteAdExtensionsAssociationsRequest $parameters)
    {
        return $this->__soapCall("DeleteAdExtensionsAssociations", [$parameters]);
    }

    /**
     * @param GetAdExtensionIdsByAccountIdRequest $parameters
     * @return GetAdExtensionIdsByAccountIdResponse
     */
    public function getAdExtensionIdsByAccountId(GetAdExtensionIdsByAccountIdRequest $parameters)
    {
        return $this->__soapCall("GetAdExtensionIdsByAccountId", [$parameters]);
    }

    /**
     * @param AddMediaRequest $parameters
     * @return AddMediaResponse
     */
    public function addMedia(AddMediaRequest $parameters)
    {
        return $this->__soapCall("AddMedia", [$parameters]);
    }

    /**
     * @param DeleteMediaRequest $parameters
     * @return DeleteMediaResponse
     */
    public function deleteMedia(DeleteMediaRequest $parameters)
    {
        return $this->__soapCall("DeleteMedia", [$parameters]);
    }

    /**
     * @param GetMediaMetaDataByAccountIdRequest $parameters
     * @return GetMediaMetaDataByAccountIdResponse
     */
    public function getMediaMetaDataByAccountId(GetMediaMetaDataByAccountIdRequest $parameters)
    {
        return $this->__soapCall("GetMediaMetaDataByAccountId", [$parameters]);
    }

    /**
     * @param GetMediaMetaDataByIdsRequest $parameters
     * @return GetMediaMetaDataByIdsResponse
     */
    public function getMediaMetaDataByIds(GetMediaMetaDataByIdsRequest $parameters)
    {
        return $this->__soapCall("GetMediaMetaDataByIds", [$parameters]);
    }

    /**
     * @param GetMediaAssociationsRequest $parameters
     * @return GetMediaAssociationsResponse
     */
    public function getMediaAssociations(GetMediaAssociationsRequest $parameters)
    {
        return $this->__soapCall("GetMediaAssociations", [$parameters]);
    }

    /**
     * @param GetAdGroupCriterionsByIdsRequest $parameters
     * @return GetAdGroupCriterionsByIdsResponse
     */
    public function getAdGroupCriterionsByIds(GetAdGroupCriterionsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetAdGroupCriterionsByIds", [$parameters]);
    }

    /**
     * @param AddAdGroupCriterionsRequest $parameters
     * @return AddAdGroupCriterionsResponse
     */
    public function addAdGroupCriterions(AddAdGroupCriterionsRequest $parameters)
    {
        return $this->__soapCall("AddAdGroupCriterions", [$parameters]);
    }

    /**
     * @param UpdateAdGroupCriterionsRequest $parameters
     * @return UpdateAdGroupCriterionsResponse
     */
    public function updateAdGroupCriterions(UpdateAdGroupCriterionsRequest $parameters)
    {
        return $this->__soapCall("UpdateAdGroupCriterions", [$parameters]);
    }

    /**
     * @param DeleteAdGroupCriterionsRequest $parameters
     * @return DeleteAdGroupCriterionsResponse
     */
    public function deleteAdGroupCriterions(DeleteAdGroupCriterionsRequest $parameters)
    {
        return $this->__soapCall("DeleteAdGroupCriterions", [$parameters]);
    }

    /**
     * @param ApplyProductPartitionActionsRequest $parameters
     * @return ApplyProductPartitionActionsResponse
     */
    public function applyProductPartitionActions(ApplyProductPartitionActionsRequest $parameters)
    {
        return $this->__soapCall("ApplyProductPartitionActions", [$parameters]);
    }

    /**
     * @param GetBMCStoresByCustomerIdRequest $parameters
     * @return GetBMCStoresByCustomerIdResponse
     */
    public function getBMCStoresByCustomerId(GetBMCStoresByCustomerIdRequest $parameters)
    {
        return $this->__soapCall("GetBMCStoresByCustomerId", [$parameters]);
    }

    /**
     * @param AddNegativeKeywordsToEntitiesRequest $parameters
     * @return AddNegativeKeywordsToEntitiesResponse
     */
    public function addNegativeKeywordsToEntities(AddNegativeKeywordsToEntitiesRequest $parameters)
    {
        return $this->__soapCall("AddNegativeKeywordsToEntities", [$parameters]);
    }

    /**
     * @param GetNegativeKeywordsByEntityIdsRequest $parameters
     * @return GetNegativeKeywordsByEntityIdsResponse
     */
    public function getNegativeKeywordsByEntityIds(GetNegativeKeywordsByEntityIdsRequest $parameters)
    {
        return $this->__soapCall("GetNegativeKeywordsByEntityIds", [$parameters]);
    }

    /**
     * @param DeleteNegativeKeywordsFromEntitiesRequest $parameters
     * @return DeleteNegativeKeywordsFromEntitiesResponse
     */
    public function deleteNegativeKeywordsFromEntities(DeleteNegativeKeywordsFromEntitiesRequest $parameters)
    {
        return $this->__soapCall("DeleteNegativeKeywordsFromEntities", [$parameters]);
    }

    /**
     * @param GetSharedEntitiesByAccountIdRequest $parameters
     * @return GetSharedEntitiesByAccountIdResponse
     */
    public function getSharedEntitiesByAccountId(GetSharedEntitiesByAccountIdRequest $parameters)
    {
        return $this->__soapCall("GetSharedEntitiesByAccountId", [$parameters]);
    }

    /**
     * @param GetSharedEntitiesRequest $parameters
     * @return GetSharedEntitiesResponse
     */
    public function getSharedEntities(GetSharedEntitiesRequest $parameters)
    {
        return $this->__soapCall("GetSharedEntities", [$parameters]);
    }

    /**
     * @param AddSharedEntityRequest $parameters
     * @return AddSharedEntityResponse
     */
    public function addSharedEntity(AddSharedEntityRequest $parameters)
    {
        return $this->__soapCall("AddSharedEntity", [$parameters]);
    }

    /**
     * @param GetListItemsBySharedListRequest $parameters
     * @return GetListItemsBySharedListResponse
     */
    public function getListItemsBySharedList(GetListItemsBySharedListRequest $parameters)
    {
        return $this->__soapCall("GetListItemsBySharedList", [$parameters]);
    }

    /**
     * @param AddListItemsToSharedListRequest $parameters
     * @return AddListItemsToSharedListResponse
     */
    public function addListItemsToSharedList(AddListItemsToSharedListRequest $parameters)
    {
        return $this->__soapCall("AddListItemsToSharedList", [$parameters]);
    }

    /**
     * @param UpdateSharedEntitiesRequest $parameters
     * @return UpdateSharedEntitiesResponse
     */
    public function updateSharedEntities(UpdateSharedEntitiesRequest $parameters)
    {
        return $this->__soapCall("UpdateSharedEntities", [$parameters]);
    }

    /**
     * @param DeleteListItemsFromSharedListRequest $parameters
     * @return DeleteListItemsFromSharedListResponse
     */
    public function deleteListItemsFromSharedList(DeleteListItemsFromSharedListRequest $parameters)
    {
        return $this->__soapCall("DeleteListItemsFromSharedList", [$parameters]);
    }

    /**
     * @param SetSharedEntityAssociationsRequest $parameters
     * @return SetSharedEntityAssociationsResponse
     */
    public function setSharedEntityAssociations(SetSharedEntityAssociationsRequest $parameters)
    {
        return $this->__soapCall("SetSharedEntityAssociations", [$parameters]);
    }

    /**
     * @param DeleteSharedEntityAssociationsRequest $parameters
     * @return DeleteSharedEntityAssociationsResponse
     */
    public function deleteSharedEntityAssociations(DeleteSharedEntityAssociationsRequest $parameters)
    {
        return $this->__soapCall("DeleteSharedEntityAssociations", [$parameters]);
    }

    /**
     * @param GetSharedEntityAssociationsBySharedEntityIdsRequest $parameters
     * @return GetSharedEntityAssociationsBySharedEntityIdsResponse
     */
    public function getSharedEntityAssociationsBySharedEntityIds(GetSharedEntityAssociationsBySharedEntityIdsRequest $parameters)
    {
        return $this->__soapCall("GetSharedEntityAssociationsBySharedEntityIds", [$parameters]);
    }

    /**
     * @param GetSharedEntityAssociationsByEntityIdsRequest $parameters
     * @return GetSharedEntityAssociationsByEntityIdsResponse
     */
    public function getSharedEntityAssociationsByEntityIds(GetSharedEntityAssociationsByEntityIdsRequest $parameters)
    {
        return $this->__soapCall("GetSharedEntityAssociationsByEntityIds", [$parameters]);
    }

    /**
     * @param DeleteSharedEntitiesRequest $parameters
     * @return DeleteSharedEntitiesResponse
     */
    public function deleteSharedEntities(DeleteSharedEntitiesRequest $parameters)
    {
        return $this->__soapCall("DeleteSharedEntities", [$parameters]);
    }

    /**
     * @param GetCampaignSizesByAccountIdRequest $parameters
     * @return GetCampaignSizesByAccountIdResponse
     */
    public function getCampaignSizesByAccountId(GetCampaignSizesByAccountIdRequest $parameters)
    {
        return $this->__soapCall("GetCampaignSizesByAccountId", [$parameters]);
    }

    /**
     * @param AddCampaignCriterionsRequest $parameters
     * @return AddCampaignCriterionsResponse
     */
    public function addCampaignCriterions(AddCampaignCriterionsRequest $parameters)
    {
        return $this->__soapCall("AddCampaignCriterions", [$parameters]);
    }

    /**
     * @param UpdateCampaignCriterionsRequest $parameters
     * @return UpdateCampaignCriterionsResponse
     */
    public function updateCampaignCriterions(UpdateCampaignCriterionsRequest $parameters)
    {
        return $this->__soapCall("UpdateCampaignCriterions", [$parameters]);
    }

    /**
     * @param DeleteCampaignCriterionsRequest $parameters
     * @return DeleteCampaignCriterionsResponse
     */
    public function deleteCampaignCriterions(DeleteCampaignCriterionsRequest $parameters)
    {
        return $this->__soapCall("DeleteCampaignCriterions", [$parameters]);
    }

    /**
     * @param GetCampaignCriterionsByIdsRequest $parameters
     * @return GetCampaignCriterionsByIdsResponse
     */
    public function getCampaignCriterionsByIds(GetCampaignCriterionsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetCampaignCriterionsByIds", [$parameters]);
    }

    /**
     * @param AddBudgetsRequest $parameters
     * @return AddBudgetsResponse
     */
    public function addBudgets(AddBudgetsRequest $parameters)
    {
        return $this->__soapCall("AddBudgets", [$parameters]);
    }

    /**
     * @param UpdateBudgetsRequest $parameters
     * @return UpdateBudgetsResponse
     */
    public function updateBudgets(UpdateBudgetsRequest $parameters)
    {
        return $this->__soapCall("UpdateBudgets", [$parameters]);
    }

    /**
     * @param DeleteBudgetsRequest $parameters
     * @return DeleteBudgetsResponse
     */
    public function deleteBudgets(DeleteBudgetsRequest $parameters)
    {
        return $this->__soapCall("DeleteBudgets", [$parameters]);
    }

    /**
     * @param GetBudgetsByIdsRequest $parameters
     * @return GetBudgetsByIdsResponse
     */
    public function getBudgetsByIds(GetBudgetsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetBudgetsByIds", [$parameters]);
    }

    /**
     * @param GetCampaignIdsByBudgetIdsRequest $parameters
     * @return GetCampaignIdsByBudgetIdsResponse
     */
    public function getCampaignIdsByBudgetIds(GetCampaignIdsByBudgetIdsRequest $parameters)
    {
        return $this->__soapCall("GetCampaignIdsByBudgetIds", [$parameters]);
    }

    /**
     * @param AddBidStrategiesRequest $parameters
     * @return AddBidStrategiesResponse
     */
    public function addBidStrategies(AddBidStrategiesRequest $parameters)
    {
        return $this->__soapCall("AddBidStrategies", [$parameters]);
    }

    /**
     * @param UpdateBidStrategiesRequest $parameters
     * @return UpdateBidStrategiesResponse
     */
    public function updateBidStrategies(UpdateBidStrategiesRequest $parameters)
    {
        return $this->__soapCall("UpdateBidStrategies", [$parameters]);
    }

    /**
     * @param DeleteBidStrategiesRequest $parameters
     * @return DeleteBidStrategiesResponse
     */
    public function deleteBidStrategies(DeleteBidStrategiesRequest $parameters)
    {
        return $this->__soapCall("DeleteBidStrategies", [$parameters]);
    }

    /**
     * @param GetBidStrategiesByIdsRequest $parameters
     * @return GetBidStrategiesByIdsResponse
     */
    public function getBidStrategiesByIds(GetBidStrategiesByIdsRequest $parameters)
    {
        return $this->__soapCall("GetBidStrategiesByIds", [$parameters]);
    }

    /**
     * @param GetCampaignIdsByBidStrategyIdsRequest $parameters
     * @return GetCampaignIdsByBidStrategyIdsResponse
     */
    public function getCampaignIdsByBidStrategyIds(GetCampaignIdsByBidStrategyIdsRequest $parameters)
    {
        return $this->__soapCall("GetCampaignIdsByBidStrategyIds", [$parameters]);
    }

    /**
     * @param AddAudiencesRequest $parameters
     * @return AddAudiencesResponse
     */
    public function addAudiences(AddAudiencesRequest $parameters)
    {
        return $this->__soapCall("AddAudiences", [$parameters]);
    }

    /**
     * @param UpdateAudiencesRequest $parameters
     * @return UpdateAudiencesResponse
     */
    public function updateAudiences(UpdateAudiencesRequest $parameters)
    {
        return $this->__soapCall("UpdateAudiences", [$parameters]);
    }

    /**
     * @param DeleteAudiencesRequest $parameters
     * @return DeleteAudiencesResponse
     */
    public function deleteAudiences(DeleteAudiencesRequest $parameters)
    {
        return $this->__soapCall("DeleteAudiences", [$parameters]);
    }

    /**
     * @param GetAudiencesByIdsRequest $parameters
     * @return GetAudiencesByIdsResponse
     */
    public function getAudiencesByIds(GetAudiencesByIdsRequest $parameters)
    {
        return $this->__soapCall("GetAudiencesByIds", [$parameters]);
    }

    /**
     * @param GetUetTagsByIdsRequest $parameters
     * @return GetUetTagsByIdsResponse
     */
    public function getUetTagsByIds(GetUetTagsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetUetTagsByIds", [$parameters]);
    }

    /**
     * @param AddUetTagsRequest $parameters
     * @return AddUetTagsResponse
     */
    public function addUetTags(AddUetTagsRequest $parameters)
    {
        return $this->__soapCall("AddUetTags", [$parameters]);
    }

    /**
     * @param UpdateUetTagsRequest $parameters
     * @return UpdateUetTagsResponse
     */
    public function updateUetTags(UpdateUetTagsRequest $parameters)
    {
        return $this->__soapCall("UpdateUetTags", [$parameters]);
    }

    /**
     * @param GetConversionGoalsByIdsRequest $parameters
     * @return GetConversionGoalsByIdsResponse
     */
    public function getConversionGoalsByIds(GetConversionGoalsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetConversionGoalsByIds", [$parameters]);
    }

    /**
     * @param GetConversionGoalsByTagIdsRequest $parameters
     * @return GetConversionGoalsByTagIdsResponse
     */
    public function getConversionGoalsByTagIds(GetConversionGoalsByTagIdsRequest $parameters)
    {
        return $this->__soapCall("GetConversionGoalsByTagIds", [$parameters]);
    }

    /**
     * @param AddConversionGoalsRequest $parameters
     * @return AddConversionGoalsResponse
     */
    public function addConversionGoals(AddConversionGoalsRequest $parameters)
    {
        return $this->__soapCall("AddConversionGoals", [$parameters]);
    }

    /**
     * @param UpdateConversionGoalsRequest $parameters
     * @return UpdateConversionGoalsResponse
     */
    public function updateConversionGoals(UpdateConversionGoalsRequest $parameters)
    {
        return $this->__soapCall("UpdateConversionGoals", [$parameters]);
    }

    /**
     * @param ApplyOfflineConversionsRequest $parameters
     * @return ApplyOfflineConversionsResponse
     */
    public function applyOfflineConversions(ApplyOfflineConversionsRequest $parameters)
    {
        return $this->__soapCall("ApplyOfflineConversions", [$parameters]);
    }

    /**
     * @param ApplyOfflineConversionAdjustmentsRequest $parameters
     * @return ApplyOfflineConversionAdjustmentsResponse
     */
    public function applyOfflineConversionAdjustments(ApplyOfflineConversionAdjustmentsRequest $parameters)
    {
        return $this->__soapCall("ApplyOfflineConversionAdjustments", [$parameters]);
    }

    /**
     * @param AddLabelsRequest $parameters
     * @return AddLabelsResponse
     */
    public function addLabels(AddLabelsRequest $parameters)
    {
        return $this->__soapCall("AddLabels", [$parameters]);
    }

    /**
     * @param DeleteLabelsRequest $parameters
     * @return DeleteLabelsResponse
     */
    public function deleteLabels(DeleteLabelsRequest $parameters)
    {
        return $this->__soapCall("DeleteLabels", [$parameters]);
    }

    /**
     * @param UpdateLabelsRequest $parameters
     * @return UpdateLabelsResponse
     */
    public function updateLabels(UpdateLabelsRequest $parameters)
    {
        return $this->__soapCall("UpdateLabels", [$parameters]);
    }

    /**
     * @param GetLabelsByIdsRequest $parameters
     * @return GetLabelsByIdsResponse
     */
    public function getLabelsByIds(GetLabelsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetLabelsByIds", [$parameters]);
    }

    /**
     * @param SetLabelAssociationsRequest $parameters
     * @return SetLabelAssociationsResponse
     */
    public function setLabelAssociations(SetLabelAssociationsRequest $parameters)
    {
        return $this->__soapCall("SetLabelAssociations", [$parameters]);
    }

    /**
     * @param DeleteLabelAssociationsRequest $parameters
     * @return DeleteLabelAssociationsResponse
     */
    public function deleteLabelAssociations(DeleteLabelAssociationsRequest $parameters)
    {
        return $this->__soapCall("DeleteLabelAssociations", [$parameters]);
    }

    /**
     * @param GetLabelAssociationsByEntityIdsRequest $parameters
     * @return GetLabelAssociationsByEntityIdsResponse
     */
    public function getLabelAssociationsByEntityIds(GetLabelAssociationsByEntityIdsRequest $parameters)
    {
        return $this->__soapCall("GetLabelAssociationsByEntityIds", [$parameters]);
    }

    /**
     * @param GetLabelAssociationsByLabelIdsRequest $parameters
     * @return GetLabelAssociationsByLabelIdsResponse
     */
    public function getLabelAssociationsByLabelIds(GetLabelAssociationsByLabelIdsRequest $parameters)
    {
        return $this->__soapCall("GetLabelAssociationsByLabelIds", [$parameters]);
    }

    /**
     * @param AddExperimentsRequest $parameters
     * @return AddExperimentsResponse
     */
    public function addExperiments(AddExperimentsRequest $parameters)
    {
        return $this->__soapCall("AddExperiments", [$parameters]);
    }

    /**
     * @param DeleteExperimentsRequest $parameters
     * @return DeleteExperimentsResponse
     */
    public function deleteExperiments(DeleteExperimentsRequest $parameters)
    {
        return $this->__soapCall("DeleteExperiments", [$parameters]);
    }

    /**
     * @param UpdateExperimentsRequest $parameters
     * @return UpdateExperimentsResponse
     */
    public function updateExperiments(UpdateExperimentsRequest $parameters)
    {
        return $this->__soapCall("UpdateExperiments", [$parameters]);
    }

    /**
     * @param GetExperimentsByIdsRequest $parameters
     * @return GetExperimentsByIdsResponse
     */
    public function getExperimentsByIds(GetExperimentsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetExperimentsByIds", [$parameters]);
    }

    /**
     * @param GetProfileDataFileUrlRequest $parameters
     * @return GetProfileDataFileUrlResponse
     */
    public function getProfileDataFileUrl(GetProfileDataFileUrlRequest $parameters)
    {
        return $this->__soapCall("GetProfileDataFileUrl", [$parameters]);
    }

    /**
     * @param SearchCompaniesRequest $parameters
     * @return SearchCompaniesResponse
     */
    public function searchCompanies(SearchCompaniesRequest $parameters)
    {
        return $this->__soapCall("SearchCompanies", [$parameters]);
    }

    /**
     * @param GetFileImportUploadUrlRequest $parameters
     * @return GetFileImportUploadUrlResponse
     */
    public function getFileImportUploadUrl(GetFileImportUploadUrlRequest $parameters)
    {
        return $this->__soapCall("GetFileImportUploadUrl", [$parameters]);
    }

    /**
     * @param AddImportJobsRequest $parameters
     * @return AddImportJobsResponse
     */
    public function addImportJobs(AddImportJobsRequest $parameters)
    {
        return $this->__soapCall("AddImportJobs", [$parameters]);
    }

    /**
     * @param GetImportResultsRequest $parameters
     * @return GetImportResultsResponse
     */
    public function getImportResults(GetImportResultsRequest $parameters)
    {
        return $this->__soapCall("GetImportResults", [$parameters]);
    }

    /**
     * @param GetImportJobsByIdsRequest $parameters
     * @return GetImportJobsByIdsResponse
     */
    public function getImportJobsByIds(GetImportJobsByIdsRequest $parameters)
    {
        return $this->__soapCall("GetImportJobsByIds", [$parameters]);
    }

    /**
     * @param DeleteImportJobsRequest $parameters
     * @return DeleteImportJobsResponse
     */
    public function deleteImportJobs(DeleteImportJobsRequest $parameters)
    {
        return $this->__soapCall("DeleteImportJobs", [$parameters]);
    }

    /**
     * @param GetImportEntityIdsMappingRequest $parameters
     * @return GetImportEntityIdsMappingResponse
     */
    public function getImportEntityIdsMapping(GetImportEntityIdsMappingRequest $parameters)
    {
        return $this->__soapCall("GetImportEntityIdsMapping", [$parameters]);
    }

    /**
     * @param AddVideosRequest $parameters
     * @return AddVideosResponse
     */
    public function addVideos(AddVideosRequest $parameters)
    {
        return $this->__soapCall("AddVideos", [$parameters]);
    }

    /**
     * @param DeleteVideosRequest $parameters
     * @return DeleteVideosResponse
     */
    public function deleteVideos(DeleteVideosRequest $parameters)
    {
        return $this->__soapCall("DeleteVideos", [$parameters]);
    }

    /**
     * @param GetVideosByIdsRequest $parameters
     * @return GetVideosByIdsResponse
     */
    public function getVideosByIds(GetVideosByIdsRequest $parameters)
    {
        return $this->__soapCall("GetVideosByIds", [$parameters]);
    }

    /**
     * @param UpdateVideosRequest $parameters
     * @return UpdateVideosResponse
     */
    public function updateVideos(UpdateVideosRequest $parameters)
    {
        return $this->__soapCall("UpdateVideos", [$parameters]);
    }

}
