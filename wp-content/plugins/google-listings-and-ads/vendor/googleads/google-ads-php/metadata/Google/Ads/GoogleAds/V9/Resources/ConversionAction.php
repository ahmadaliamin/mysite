<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/conversion_action.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Resources;

class ConversionAction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v9/enums/mobile_app_vendor.protogoogle.ads.googleads.v9.enums"q
MobileAppVendorEnum"Z
MobileAppVendor
UNSPECIFIED 
UNKNOWN
APPLE_APP_STORE
GOOGLE_APP_STOREB�
!com.google.ads.googleads.v9.enumsBMobileAppVendorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
>google/ads/googleads/v9/enums/conversion_action_category.protogoogle.ads.googleads.v9.enums"�
ConversionActionCategoryEnum"�
ConversionActionCategory
UNSPECIFIED 
UNKNOWN
DEFAULT
	PAGE_VIEW
PURCHASE

SIGNUP
LEAD
DOWNLOAD
ADD_TO_CART
BEGIN_CHECKOUT	
SUBSCRIBE_PAID

PHONE_CALL_LEAD
IMPORTED_LEAD
SUBMIT_LEAD_FORM
BOOK_APPOINTMENT
REQUEST_QUOTE
GET_DIRECTIONS
OUTBOUND_CLICK
CONTACT

ENGAGEMENT
STORE_VISIT

STORE_SALEB�
!com.google.ads.googleads.v9.enumsBConversionActionCategoryProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
=google/ads/googleads/v9/enums/tracking_code_page_format.protogoogle.ads.googleads.v9.enums"g
TrackingCodePageFormatEnum"I
TrackingCodePageFormat
UNSPECIFIED 
UNKNOWN
HTML
AMPB�
!com.google.ads.googleads.v9.enumsBTrackingCodePageFormatProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
6google/ads/googleads/v9/enums/tracking_code_type.protogoogle.ads.googleads.v9.enums"�
TrackingCodeTypeEnum"w
TrackingCodeType
UNSPECIFIED 
UNKNOWN
WEBPAGE
WEBPAGE_ONCLICK
CLICK_TO_CALL
WEBSITE_CALLB�
!com.google.ads.googleads.v9.enumsBTrackingCodeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
0google/ads/googleads/v9/common/tag_snippet.protogoogle.ads.googleads.v9.common6google/ads/googleads/v9/enums/tracking_code_type.protogoogle/api/annotations.proto"�

TagSnippetR
type (2D.google.ads.googleads.v9.enums.TrackingCodeTypeEnum.TrackingCodeTypee
page_format (2P.google.ads.googleads.v9.enums.TrackingCodePageFormatEnum.TrackingCodePageFormat
global_site_tag (	H �
event_snippet (	H�B
_global_site_tagB
_event_snippetB�
"com.google.ads.googleads.v9.commonBTagSnippetProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v9/common;common�GAA�Google.Ads.GoogleAds.V9.Common�Google\\Ads\\GoogleAds\\V9\\Common�"Google::Ads::GoogleAds::V9::Commonbproto3
�
5google/ads/googleads/v9/enums/attribution_model.protogoogle.ads.googleads.v9.enums"�
AttributionModelEnum"�
AttributionModel
UNSPECIFIED 
UNKNOWN
EXTERNALd
GOOGLE_ADS_LAST_CLICKe)
%GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICKf$
 GOOGLE_SEARCH_ATTRIBUTION_LINEARg(
$GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAYh,
(GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASEDi)
%GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVENjB�
!com.google.ads.googleads.v9.enumsBAttributionModelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
Cgoogle/ads/googleads/v9/enums/conversion_action_counting_type.protogoogle.ads.googleads.v9.enums"�
 ConversionActionCountingTypeEnum"c
ConversionActionCountingType
UNSPECIFIED 
UNKNOWN
ONE_PER_CLICK
MANY_PER_CLICKB�
!com.google.ads.googleads.v9.enumsB!ConversionActionCountingTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
<google/ads/googleads/v9/enums/conversion_action_status.protogoogle.ads.googleads.v9.enums"z
ConversionActionStatusEnum"\\
ConversionActionStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED

HIDDENB�
!com.google.ads.googleads.v9.enumsBConversionActionStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
:google/ads/googleads/v9/enums/conversion_action_type.protogoogle.ads.googleads.v9.enums"�
ConversionActionTypeEnum"�
ConversionActionType
UNSPECIFIED 
UNKNOWN
AD_CALL
CLICK_TO_CALL
GOOGLE_PLAY_DOWNLOAD
GOOGLE_PLAY_IN_APP_PURCHASE
UPLOAD_CALLS
UPLOAD_CLICKS
WEBPAGE
WEBSITE_CALL	
STORE_SALES_DIRECT_UPLOAD

STORE_SALES
FIREBASE_ANDROID_FIRST_OPEN$
 FIREBASE_ANDROID_IN_APP_PURCHASE
FIREBASE_ANDROID_CUSTOM
FIREBASE_IOS_FIRST_OPEN 
FIREBASE_IOS_IN_APP_PURCHASE
FIREBASE_IOS_CUSTOM0
,THIRD_PARTY_APP_ANALYTICS_ANDROID_FIRST_OPEN5
1THIRD_PARTY_APP_ANALYTICS_ANDROID_IN_APP_PURCHASE,
(THIRD_PARTY_APP_ANALYTICS_ANDROID_CUSTOM,
(THIRD_PARTY_APP_ANALYTICS_IOS_FIRST_OPEN1
-THIRD_PARTY_APP_ANALYTICS_IOS_IN_APP_PURCHASE(
$THIRD_PARTY_APP_ANALYTICS_IOS_CUSTOM 
ANDROID_APP_PRE_REGISTRATION#
ANDROID_INSTALLS_ALL_OTHER_APPS
FLOODLIGHT_ACTION
FLOODLIGHT_TRANSACTION
GOOGLE_HOSTED
LEAD_FORM_SUBMIT

SALESFORCE
SEARCH_ADS_360$
 SMART_CAMPAIGN_AD_CLICKS_TO_CALL %
!SMART_CAMPAIGN_MAP_CLICKS_TO_CALL!!
SMART_CAMPAIGN_MAP_DIRECTIONS" 
SMART_CAMPAIGN_TRACKED_CALLS#
STORE_VISITS$B�
!com.google.ads.googleads.v9.enumsBConversionActionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
5google/ads/googleads/v9/enums/conversion_origin.protogoogle.ads.googleads.v9.enums"�
ConversionOriginEnum"�
ConversionOrigin
UNSPECIFIED 
UNKNOWN
WEBSITE
GOOGLE_HOSTED
APP
CALL_FROM_ADS	
STORE
YOUTUBE_HOSTEDB�
!com.google.ads.googleads.v9.enumsBConversionOriginProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
<google/ads/googleads/v9/enums/data_driven_model_status.protogoogle.ads.googleads.v9.enums"�
DataDrivenModelStatusEnum"q
DataDrivenModelStatus
UNSPECIFIED 
UNKNOWN
	AVAILABLE	
STALE
EXPIRED
NEVER_GENERATEDB�
!com.google.ads.googleads.v9.enumsBDataDrivenModelStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
9google/ads/googleads/v9/resources/conversion_action.proto!google.ads.googleads.v9.resources5google/ads/googleads/v9/enums/attribution_model.proto>google/ads/googleads/v9/enums/conversion_action_category.protoCgoogle/ads/googleads/v9/enums/conversion_action_counting_type.proto<google/ads/googleads/v9/enums/conversion_action_status.proto:google/ads/googleads/v9/enums/conversion_action_type.proto5google/ads/googleads/v9/enums/conversion_origin.proto<google/ads/googleads/v9/enums/data_driven_model_status.proto5google/ads/googleads/v9/enums/mobile_app_vendor.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
ConversionActionH
resource_name (	B1�A�A+
)googleads.googleapis.com/ConversionAction
id (B�AH �
name (	H�`
status (2P.google.ads.googleads.v9.enums.ConversionActionStatusEnum.ConversionActionStatus_
type (2L.google.ads.googleads.v9.enums.ConversionActionTypeEnum.ConversionActionTypeB�AY
origin (2D.google.ads.googleads.v9.enums.ConversionOriginEnum.ConversionOriginB�A
primary_for_goal (f
category (2T.google.ads.googleads.v9.enums.ConversionActionCategoryEnum.ConversionActionCategoryF
owner_customer (	B)�A�A#
!googleads.googleapis.com/CustomerH�*
include_in_conversions_metric (H�/
"click_through_lookback_window_days (H�.
!view_through_lookback_window_days (H�Y
value_settings (2A.google.ads.googleads.v9.resources.ConversionAction.ValueSettingss
counting_type (2\\.google.ads.googleads.v9.enums.ConversionActionCountingTypeEnum.ConversionActionCountingTypep
attribution_model_settings (2L.google.ads.googleads.v9.resources.ConversionAction.AttributionModelSettingsE
tag_snippets (2*.google.ads.googleads.v9.common.TagSnippetB�A(
phone_call_duration_seconds (H�
app_id (	H�b
mobile_app_vendor (2B.google.ads.googleads.v9.enums.MobileAppVendorEnum.MobileAppVendorB�Ad
firebase_settings (2D.google.ads.googleads.v9.resources.ConversionAction.FirebaseSettingsB�A�
"third_party_app_analytics_settings (2R.google.ads.googleads.v9.resources.ConversionAction.ThirdPartyAppAnalyticsSettingsB�A�
AttributionModelSettings_
attribution_model (2D.google.ads.googleads.v9.enums.AttributionModelEnum.AttributionModelu
data_driven_model_status (2N.google.ads.googleads.v9.enums.DataDrivenModelStatusEnum.DataDrivenModelStatusB�A�
ValueSettings
default_value (H �"
default_currency_code (	H�%
always_use_default_value (H�B
_default_valueB
_default_currency_codeB
_always_use_default_valuei
ThirdPartyAppAnalyticsSettings

event_name (	B�AH �
provider_name (	B�AB
_event_namel
FirebaseSettings

event_name (	B�AH �

project_id (	B�AH�B
_event_nameB
_project_id:p�Am
)googleads.googleapis.com/ConversionAction@customers/{customer_id}/conversionActions/{conversion_action_id}B
_idB
_nameB
_owner_customerB 
_include_in_conversions_metricB%
#_click_through_lookback_window_daysB$
"_view_through_lookback_window_daysB
_phone_call_duration_secondsB	
_app_idB�
%com.google.ads.googleads.v9.resourcesBConversionActionProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

