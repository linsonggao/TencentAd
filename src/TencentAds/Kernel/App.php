<?php
namespace ZzyLsg\TencentAds\Kernel;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Container\AdDiagnosisApiContainer;
use ZzyLsg\TencentAds\Container\AdLabelApiContainer;
use ZzyLsg\TencentAds\Container\AdParamApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativePreviewsApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativePreviewsQrcodeApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativeTemplateApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativeTemplateDetailApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativeTemplateListApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativeTemplatePreviewApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativeTemplatePreviewsApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativeTemplatesApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativesApiContainer;
use ZzyLsg\TencentAds\Container\AdcreativesRelatedCapabilityApiContainer;
use ZzyLsg\TencentAds\Container\AdgroupsApiContainer;
use ZzyLsg\TencentAds\Container\AdsApiContainer;
use ZzyLsg\TencentAds\Container\AdvertiserApiContainer;
use ZzyLsg\TencentAds\Container\AgencyInnerTransferApiContainer;
use ZzyLsg\TencentAds\Container\AgencyRealtimeCostApiContainer;
use ZzyLsg\TencentAds\Container\AndroidChannelPackagesApiContainer;
use ZzyLsg\TencentAds\Container\AndroidUnionChannelPackagesApiContainer;
use ZzyLsg\TencentAds\Container\AppAndroidChannelPackagesApiContainer;
use ZzyLsg\TencentAds\Container\AssetPermissionsApiContainer;
use ZzyLsg\TencentAds\Container\AssetPrePermissionsApiContainer;
use ZzyLsg\TencentAds\Container\AsyncReportFilesApiContainer;
use ZzyLsg\TencentAds\Container\AsyncReportsApiContainer;
use ZzyLsg\TencentAds\Container\AsyncTaskFilesApiContainer;
use ZzyLsg\TencentAds\Container\AsyncTasksApiContainer;
use ZzyLsg\TencentAds\Container\AudienceGrantRelationsApiContainer;
use ZzyLsg\TencentAds\Container\AuthorizationApiContainer;
use ZzyLsg\TencentAds\Container\BarrageApiContainer;
use ZzyLsg\TencentAds\Container\BarrageRecommendApiContainer;
use ZzyLsg\TencentAds\Container\BatchAsyncRequestSpecificationApiContainer;
use ZzyLsg\TencentAds\Container\BatchAsyncRequestsApiContainer;
use ZzyLsg\TencentAds\Container\BatchOperationApiContainer;
use ZzyLsg\TencentAds\Container\BatchRequestsApiContainer;
use ZzyLsg\TencentAds\Container\BidSimulationApiContainer;
use ZzyLsg\TencentAds\Container\BrandApiContainer;
use ZzyLsg\TencentAds\Container\BusinessManagerRelationsApiContainer;
use ZzyLsg\TencentAds\Container\BusinessMdmAccountRelationsApiContainer;
use ZzyLsg\TencentAds\Container\CampaignsApiContainer;
use ZzyLsg\TencentAds\Container\CapabilitiesApiContainer;
use ZzyLsg\TencentAds\Container\ChannelsApiContainer;
use ZzyLsg\TencentAds\Container\ComplianceValidationApiContainer;
use ZzyLsg\TencentAds\Container\ConversionsApiContainer;
use ZzyLsg\TencentAds\Container\CreativetoolsTextApiContainer;
use ZzyLsg\TencentAds\Container\CustomAudienceEstimationsApiContainer;
use ZzyLsg\TencentAds\Container\CustomAudienceFilesApiContainer;
use ZzyLsg\TencentAds\Container\CustomAudienceInsightsApiContainer;
use ZzyLsg\TencentAds\Container\CustomAudienceReportsApiContainer;
use ZzyLsg\TencentAds\Container\CustomAudiencesApiContainer;
use ZzyLsg\TencentAds\Container\CustomFeaturesApiContainer;
use ZzyLsg\TencentAds\Container\CustomTagFilesApiContainer;
use ZzyLsg\TencentAds\Container\CustomTagsApiContainer;
use ZzyLsg\TencentAds\Container\DailyBalanceReportApiContainer;
use ZzyLsg\TencentAds\Container\DailyCostApiContainer;
use ZzyLsg\TencentAds\Container\DailyReportsApiContainer;
use ZzyLsg\TencentAds\Container\DiagnosisApiContainer;
use ZzyLsg\TencentAds\Container\DplabelAdLabelApiContainer;
use ZzyLsg\TencentAds\Container\DynamicAdImageTemplatesApiContainer;
use ZzyLsg\TencentAds\Container\DynamicAdImagesApiContainer;
use ZzyLsg\TencentAds\Container\DynamicAdTemplatesApiContainer;
use ZzyLsg\TencentAds\Container\DynamicAdVideoApiContainer;
use ZzyLsg\TencentAds\Container\DynamicAdVideoTemplatesApiContainer;
use ZzyLsg\TencentAds\Container\DynamicCreativesApiContainer;
use ZzyLsg\TencentAds\Container\EcommerceOrderApiContainer;
use ZzyLsg\TencentAds\Container\EstimationApiContainer;
use ZzyLsg\TencentAds\Container\FundStatementsDailyApiContainer;
use ZzyLsg\TencentAds\Container\FundStatementsDetailedApiContainer;
use ZzyLsg\TencentAds\Container\FundTransferApiContainer;
use ZzyLsg\TencentAds\Container\FundsApiContainer;
use ZzyLsg\TencentAds\Container\HourlyReportsApiContainer;
use ZzyLsg\TencentAds\Container\ImageProcessingApiContainer;
use ZzyLsg\TencentAds\Container\ImagesApiContainer;
use ZzyLsg\TencentAds\Container\LabelAudiencesApiContainer;
use ZzyLsg\TencentAds\Container\LabelsApiContainer;
use ZzyLsg\TencentAds\Container\LeadCluesApiContainer;
use ZzyLsg\TencentAds\Container\LeadsFormApiContainer;
use ZzyLsg\TencentAds\Container\LeadsFormListApiContainer;
use ZzyLsg\TencentAds\Container\LeadsInvalidPayApiContainer;
use ZzyLsg\TencentAds\Container\LocalApiContainer;
use ZzyLsg\TencentAds\Container\LocalEndadsmanuallyApiContainer;
use ZzyLsg\TencentAds\Container\LocalEstimatedamountApiContainer;
use ZzyLsg\TencentAds\Container\LocalStoresAddressParsingResultApiContainer;
use ZzyLsg\TencentAds\Container\LocalStoresApiContainer;
use ZzyLsg\TencentAds\Container\LocalStoresCategoriesApiContainer;
use ZzyLsg\TencentAds\Container\LocalStoresSearchInfoApiContainer;
use ZzyLsg\TencentAds\Container\LocalStoresWxpayMerchantsApiContainer;
use ZzyLsg\TencentAds\Container\MergeFundTypeDailyBalanceReportApiContainer;
use ZzyLsg\TencentAds\Container\MergeFundTypeFundStatementsDetailedApiContainer;
use ZzyLsg\TencentAds\Container\MergeFundTypeFundsApiContainer;
use ZzyLsg\TencentAds\Container\MergeFundTypeSubcustomerTransferApiContainer;
use ZzyLsg\TencentAds\Container\OauthApiContainer;
use ZzyLsg\TencentAds\Container\OptimizationGoalPermissionsApiContainer;
use ZzyLsg\TencentAds\Container\OuterCluesApiContainer;
use ZzyLsg\TencentAds\Container\OuterCluesContactApiContainer;
use ZzyLsg\TencentAds\Container\PagesApiContainer;
use ZzyLsg\TencentAds\Container\PlayablePagesApiContainer;
use ZzyLsg\TencentAds\Container\ProductCatalogsApiContainer;
use ZzyLsg\TencentAds\Container\ProductCatalogsReportsApiContainer;
use ZzyLsg\TencentAds\Container\ProductCategoriesListApiContainer;
use ZzyLsg\TencentAds\Container\ProductItemsApiContainer;
use ZzyLsg\TencentAds\Container\ProductItemsDetailApiContainer;
use ZzyLsg\TencentAds\Container\ProductItemsVerticalsApiContainer;
use ZzyLsg\TencentAds\Container\ProductSeriesApiContainer;
use ZzyLsg\TencentAds\Container\ProductsSystemStatusApiContainer;
use ZzyLsg\TencentAds\Container\ProfilesApiContainer;
use ZzyLsg\TencentAds\Container\PromotedObjectsApiContainer;
use ZzyLsg\TencentAds\Container\PropertyFileSessionsApiContainer;
use ZzyLsg\TencentAds\Container\PropertyFilesApiContainer;
use ZzyLsg\TencentAds\Container\PropertySetSchemasApiContainer;
use ZzyLsg\TencentAds\Container\PropertySetsApiContainer;
use ZzyLsg\TencentAds\Container\QualificationsApiContainer;
use ZzyLsg\TencentAds\Container\RealtimeCostApiContainer;
use ZzyLsg\TencentAds\Container\ReportApiContainer;
use ZzyLsg\TencentAds\Container\ReviewElementPrereviewResultsApiContainer;
use ZzyLsg\TencentAds\Container\SceneSpecTagsApiContainer;
use ZzyLsg\TencentAds\Container\ShopApiContainer;
use ZzyLsg\TencentAds\Container\SplitTestsApiContainer;
use ZzyLsg\TencentAds\Container\SubcustomerTransferApiContainer;
use ZzyLsg\TencentAds\Container\SystemStatusApiContainer;
use ZzyLsg\TencentAds\Container\TargetingTagReportsApiContainer;
use ZzyLsg\TencentAds\Container\TargetingTagsApiContainer;
use ZzyLsg\TencentAds\Container\TargetingTagsUvApiContainer;
use ZzyLsg\TencentAds\Container\TargetingsApiContainer;
use ZzyLsg\TencentAds\Container\TargetingsShareApiContainer;
use ZzyLsg\TencentAds\Container\TrackingReportsApiContainer;
use ZzyLsg\TencentAds\Container\UnionPositionPackagesApiContainer;
use ZzyLsg\TencentAds\Container\UserActionSetReportsApiContainer;
use ZzyLsg\TencentAds\Container\UserActionSetsApiContainer;
use ZzyLsg\TencentAds\Container\UserActionsApiContainer;
use ZzyLsg\TencentAds\Container\UserPropertiesApiContainer;
use ZzyLsg\TencentAds\Container\UserPropertySetsApiContainer;
use ZzyLsg\TencentAds\Container\VideomakerAutoadjustmentsApiContainer;
use ZzyLsg\TencentAds\Container\VideomakerSubtitlesApiContainer;
use ZzyLsg\TencentAds\Container\VideomakerTasksApiContainer;
use ZzyLsg\TencentAds\Container\VideomakerVideocapturesApiContainer;
use ZzyLsg\TencentAds\Container\VideosApiContainer;
use ZzyLsg\TencentAds\Container\WechatAdFollowersApiContainer;
use ZzyLsg\TencentAds\Container\WechatAdLabelsApiContainer;
use ZzyLsg\TencentAds\Container\WechatAdvertiserApiContainer;
use ZzyLsg\TencentAds\Container\WechatAdvertiserDetailApiContainer;
use ZzyLsg\TencentAds\Container\WechatAdvertiserLocalBusinessApiContainer;
use ZzyLsg\TencentAds\Container\WechatAdvertiserSpecificationApiContainer;
use ZzyLsg\TencentAds\Container\WechatAgencyApiContainer;
use ZzyLsg\TencentAds\Container\WechatDailyCostApiContainer;
use ZzyLsg\TencentAds\Container\WechatFundStatementsDetailedApiContainer;
use ZzyLsg\TencentAds\Container\WechatFundTransferApiContainer;
use ZzyLsg\TencentAds\Container\WechatFundsApiContainer;
use ZzyLsg\TencentAds\Container\WechatPagesApiContainer;
use ZzyLsg\TencentAds\Container\WechatPagesCsgroupStatusApiContainer;
use ZzyLsg\TencentAds\Container\WechatPagesCsgroupUserApiContainer;
use ZzyLsg\TencentAds\Container\WechatPagesCsgrouplistApiContainer;
use ZzyLsg\TencentAds\Container\WechatPagesCustomApiContainer;
use ZzyLsg\TencentAds\Container\WechatPagesGrantinfoApiContainer;
use ZzyLsg\TencentAds\Container\WechatQualificationsApiContainer;
use ZzyLsg\TencentAds\Container\WildcardsApiContainer;
use ZzyLsg\TencentAds\Container\XijingComplexTemplateApiContainer;
use ZzyLsg\TencentAds\Container\XijingPageApiContainer;
use ZzyLsg\TencentAds\Container\XijingPageByComponentsApiContainer;
use ZzyLsg\TencentAds\Container\XijingPageInteractiveApiContainer;
use ZzyLsg\TencentAds\Container\XijingPageListApiContainer;
use ZzyLsg\TencentAds\Container\XijingTemplateApiContainer;
use ZzyLsg\TencentAds\Container\XijingTemplateListApiContainer;

class App
{
    /** @var Client */
    public $client;

    /** @var AdDiagnosisApiContainer */
    public $adDiagnosisApiContainer;

    /** @var AdLabelApiContainer */
    public $adLabelApiContainer;

    /** @var AdParamApiContainer */
    public $adParamApiContainer;

    /** @var AdcreativePreviewsApiContainer */
    public $adcreativePreviewsApiContainer;

    /** @var AdcreativePreviewsQrcodeApiContainer */
    public $adcreativePreviewsQrcodeApiContainer;

    /** @var AdcreativeTemplateApiContainer */
    public $adcreativeTemplateApiContainer;

    /** @var AdcreativeTemplateDetailApiContainer */
    public $adcreativeTemplateDetailApiContainer;

    /** @var AdcreativeTemplateListApiContainer */
    public $adcreativeTemplateListApiContainer;

    /** @var AdcreativeTemplatePreviewApiContainer */
    public $adcreativeTemplatePreviewApiContainer;

    /** @var AdcreativeTemplatePreviewsApiContainer */
    public $adcreativeTemplatePreviewsApiContainer;

    /** @var AdcreativeTemplatesApiContainer */
    public $adcreativeTemplatesApiContainer;

    /** @var AdcreativesApiContainer */
    public $adcreativesApiContainer;

    /** @var AdcreativesRelatedCapabilityApiContainer */
    public $adcreativesRelatedCapabilityApiContainer;

    /** @var AdgroupsApiContainer */
    public $adgroupsApiContainer;

    /** @var AdsApiContainer */
    public $adsApiContainer;

    /** @var AdvertiserApiContainer */
    public $advertiserApiContainer;

    /** @var AgencyInnerTransferApiContainer */
    public $agencyInnerTransferApiContainer;

    /** @var AgencyRealtimeCostApiContainer */
    public $agencyRealtimeCostApiContainer;

    /** @var AndroidChannelPackagesApiContainer */
    public $androidChannelPackagesApiContainer;

    /** @var AndroidUnionChannelPackagesApiContainer */
    public $androidUnionChannelPackagesApiContainer;

    /** @var AppAndroidChannelPackagesApiContainer */
    public $appAndroidChannelPackagesApiContainer;

    /** @var AssetPermissionsApiContainer */
    public $assetPermissionsApiContainer;

    /** @var AssetPrePermissionsApiContainer */
    public $assetPrePermissionsApiContainer;

    /** @var AsyncReportFilesApiContainer */
    public $asyncReportFilesApiContainer;

    /** @var AsyncReportsApiContainer */
    public $asyncReportsApiContainer;

    /** @var AsyncTaskFilesApiContainer */
    public $asyncTaskFilesApiContainer;

    /** @var AsyncTasksApiContainer */
    public $asyncTasksApiContainer;

    /** @var AudienceGrantRelationsApiContainer */
    public $audienceGrantRelationsApiContainer;

    /** @var AuthorizationApiContainer */
    public $authorizationApiContainer;

    /** @var BarrageApiContainer */
    public $barrageApiContainer;

    /** @var BarrageRecommendApiContainer */
    public $barrageRecommendApiContainer;

    /** @var BatchAsyncRequestSpecificationApiContainer */
    public $batchAsyncRequestSpecificationApiContainer;

    /** @var BatchAsyncRequestsApiContainer */
    public $batchAsyncRequestsApiContainer;

    /** @var BatchOperationApiContainer */
    public $batchOperationApiContainer;

    /** @var BatchRequestsApiContainer */
    public $batchRequestsApiContainer;

    /** @var BidSimulationApiContainer */
    public $bidSimulationApiContainer;

    /** @var BrandApiContainer */
    public $brandApiContainer;

    /** @var BusinessManagerRelationsApiContainer */
    public $businessManagerRelationsApiContainer;

    /** @var BusinessMdmAccountRelationsApiContainer */
    public $businessMdmAccountRelationsApiContainer;

    /** @var CampaignsApiContainer */
    public $campaignsApiContainer;

    /** @var CapabilitiesApiContainer */
    public $capabilitiesApiContainer;

    /** @var ChannelsApiContainer */
    public $channelsApiContainer;

    /** @var ComplianceValidationApiContainer */
    public $complianceValidationApiContainer;

    /** @var ConversionsApiContainer */
    public $conversionsApiContainer;

    /** @var CreativetoolsTextApiContainer */
    public $creativetoolsTextApiContainer;

    /** @var CustomAudienceEstimationsApiContainer */
    public $customAudienceEstimationsApiContainer;

    /** @var CustomAudienceFilesApiContainer */
    public $customAudienceFilesApiContainer;

    /** @var CustomAudienceInsightsApiContainer */
    public $customAudienceInsightsApiContainer;

    /** @var CustomAudienceReportsApiContainer */
    public $customAudienceReportsApiContainer;

    /** @var CustomAudiencesApiContainer */
    public $customAudiencesApiContainer;

    /** @var CustomFeaturesApiContainer */
    public $customFeaturesApiContainer;

    /** @var CustomTagFilesApiContainer */
    public $customTagFilesApiContainer;

    /** @var CustomTagsApiContainer */
    public $customTagsApiContainer;

    /** @var DailyBalanceReportApiContainer */
    public $dailyBalanceReportApiContainer;

    /** @var DailyCostApiContainer */
    public $dailyCostApiContainer;

    /** @var DailyReportsApiContainer */
    public $dailyReportsApiContainer;

    /** @var DiagnosisApiContainer */
    public $diagnosisApiContainer;

    /** @var DplabelAdLabelApiContainer */
    public $dplabelAdLabelApiContainer;

    /** @var DynamicAdImageTemplatesApiContainer */
    public $dynamicAdImageTemplatesApiContainer;

    /** @var DynamicAdImagesApiContainer */
    public $dynamicAdImagesApiContainer;

    /** @var DynamicAdTemplatesApiContainer */
    public $dynamicAdTemplatesApiContainer;

    /** @var DynamicAdVideoApiContainer */
    public $dynamicAdVideoApiContainer;

    /** @var DynamicAdVideoTemplatesApiContainer */
    public $dynamicAdVideoTemplatesApiContainer;

    /** @var DynamicCreativesApiContainer */
    public $dynamicCreativesApiContainer;

    /** @var EcommerceOrderApiContainer */
    public $ecommerceOrderApiContainer;

    /** @var EstimationApiContainer */
    public $estimationApiContainer;

    /** @var FundStatementsDailyApiContainer */
    public $fundStatementsDailyApiContainer;

    /** @var FundStatementsDetailedApiContainer */
    public $fundStatementsDetailedApiContainer;

    /** @var FundTransferApiContainer */
    public $fundTransferApiContainer;

    /** @var FundsApiContainer */
    public $fundsApiContainer;

    /** @var HourlyReportsApiContainer */
    public $hourlyReportsApiContainer;

    /** @var ImageProcessingApiContainer */
    public $imageProcessingApiContainer;

    /** @var ImagesApiContainer */
    public $imagesApiContainer;

    /** @var LabelAudiencesApiContainer */
    public $labelAudiencesApiContainer;

    /** @var LabelsApiContainer */
    public $labelsApiContainer;

    /** @var LeadCluesApiContainer */
    public $leadCluesApiContainer;

    /** @var LeadsFormApiContainer */
    public $leadsFormApiContainer;

    /** @var LeadsFormListApiContainer */
    public $leadsFormListApiContainer;

    /** @var LeadsInvalidPayApiContainer */
    public $leadsInvalidPayApiContainer;

    /** @var LocalApiContainer */
    public $localApiContainer;

    /** @var LocalEndadsmanuallyApiContainer */
    public $localEndadsmanuallyApiContainer;

    /** @var LocalEstimatedamountApiContainer */
    public $localEstimatedamountApiContainer;

    /** @var LocalStoresAddressParsingResultApiContainer */
    public $localStoresAddressParsingResultApiContainer;

    /** @var LocalStoresApiContainer */
    public $localStoresApiContainer;

    /** @var LocalStoresCategoriesApiContainer */
    public $localStoresCategoriesApiContainer;

    /** @var LocalStoresSearchInfoApiContainer */
    public $localStoresSearchInfoApiContainer;

    /** @var LocalStoresWxpayMerchantsApiContainer */
    public $localStoresWxpayMerchantsApiContainer;

    /** @var MergeFundTypeDailyBalanceReportApiContainer */
    public $mergeFundTypeDailyBalanceReportApiContainer;

    /** @var MergeFundTypeFundStatementsDetailedApiContainer */
    public $mergeFundTypeFundStatementsDetailedApiContainer;

    /** @var MergeFundTypeFundsApiContainer */
    public $mergeFundTypeFundsApiContainer;

    /** @var MergeFundTypeSubcustomerTransferApiContainer */
    public $mergeFundTypeSubcustomerTransferApiContainer;

    /** @var OauthApiContainer */
    public $oauthApiContainer;

    /** @var OptimizationGoalPermissionsApiContainer */
    public $optimizationGoalPermissionsApiContainer;

    /** @var OuterCluesApiContainer */
    public $outerCluesApiContainer;

    /** @var OuterCluesContactApiContainer */
    public $outerCluesContactApiContainer;

    /** @var PagesApiContainer */
    public $pagesApiContainer;

    /** @var PlayablePagesApiContainer */
    public $playablePagesApiContainer;

    /** @var ProductCatalogsApiContainer */
    public $productCatalogsApiContainer;

    /** @var ProductCatalogsReportsApiContainer */
    public $productCatalogsReportsApiContainer;

    /** @var ProductCategoriesListApiContainer */
    public $productCategoriesListApiContainer;

    /** @var ProductItemsApiContainer */
    public $productItemsApiContainer;

    /** @var ProductItemsDetailApiContainer */
    public $productItemsDetailApiContainer;

    /** @var ProductItemsVerticalsApiContainer */
    public $productItemsVerticalsApiContainer;

    /** @var ProductSeriesApiContainer */
    public $productSeriesApiContainer;

    /** @var ProductsSystemStatusApiContainer */
    public $productsSystemStatusApiContainer;

    /** @var ProfilesApiContainer */
    public $profilesApiContainer;

    /** @var PromotedObjectsApiContainer */
    public $promotedObjectsApiContainer;

    /** @var PropertyFileSessionsApiContainer */
    public $propertyFileSessionsApiContainer;

    /** @var PropertyFilesApiContainer */
    public $propertyFilesApiContainer;

    /** @var PropertySetSchemasApiContainer */
    public $propertySetSchemasApiContainer;

    /** @var PropertySetsApiContainer */
    public $propertySetsApiContainer;

    /** @var QualificationsApiContainer */
    public $qualificationsApiContainer;

    /** @var RealtimeCostApiContainer */
    public $realtimeCostApiContainer;

    /** @var ReportApiContainer */
    public $reportApiContainer;

    /** @var ReviewElementPrereviewResultsApiContainer */
    public $reviewElementPrereviewResultsApiContainer;

    /** @var SceneSpecTagsApiContainer */
    public $sceneSpecTagsApiContainer;

    /** @var ShopApiContainer */
    public $shopApiContainer;

    /** @var SplitTestsApiContainer */
    public $splitTestsApiContainer;

    /** @var SubcustomerTransferApiContainer */
    public $subcustomerTransferApiContainer;

    /** @var SystemStatusApiContainer */
    public $systemStatusApiContainer;

    /** @var TargetingTagReportsApiContainer */
    public $targetingTagReportsApiContainer;

    /** @var TargetingTagsApiContainer */
    public $targetingTagsApiContainer;

    /** @var TargetingTagsUvApiContainer */
    public $targetingTagsUvApiContainer;

    /** @var TargetingsApiContainer */
    public $targetingsApiContainer;

    /** @var TargetingsShareApiContainer */
    public $targetingsShareApiContainer;

    /** @var TrackingReportsApiContainer */
    public $trackingReportsApiContainer;

    /** @var UnionPositionPackagesApiContainer */
    public $unionPositionPackagesApiContainer;

    /** @var UserActionSetReportsApiContainer */
    public $userActionSetReportsApiContainer;

    /** @var UserActionSetsApiContainer */
    public $userActionSetsApiContainer;

    /** @var UserActionsApiContainer */
    public $userActionsApiContainer;

    /** @var UserPropertiesApiContainer */
    public $userPropertiesApiContainer;

    /** @var UserPropertySetsApiContainer */
    public $userPropertySetsApiContainer;

    /** @var VideomakerAutoadjustmentsApiContainer */
    public $videomakerAutoadjustmentsApiContainer;

    /** @var VideomakerSubtitlesApiContainer */
    public $videomakerSubtitlesApiContainer;

    /** @var VideomakerTasksApiContainer */
    public $videomakerTasksApiContainer;

    /** @var VideomakerVideocapturesApiContainer */
    public $videomakerVideocapturesApiContainer;

    /** @var VideosApiContainer */
    public $videosApiContainer;

    /** @var WechatAdFollowersApiContainer */
    public $wechatAdFollowersApiContainer;

    /** @var WechatAdLabelsApiContainer */
    public $wechatAdLabelsApiContainer;

    /** @var WechatAdvertiserApiContainer */
    public $wechatAdvertiserApiContainer;

    /** @var WechatAdvertiserDetailApiContainer */
    public $wechatAdvertiserDetailApiContainer;

    /** @var WechatAdvertiserLocalBusinessApiContainer */
    public $wechatAdvertiserLocalBusinessApiContainer;

    /** @var WechatAdvertiserSpecificationApiContainer */
    public $wechatAdvertiserSpecificationApiContainer;

    /** @var WechatAgencyApiContainer */
    public $wechatAgencyApiContainer;

    /** @var WechatDailyCostApiContainer */
    public $wechatDailyCostApiContainer;

    /** @var WechatFundStatementsDetailedApiContainer */
    public $wechatFundStatementsDetailedApiContainer;

    /** @var WechatFundTransferApiContainer */
    public $wechatFundTransferApiContainer;

    /** @var WechatFundsApiContainer */
    public $wechatFundsApiContainer;

    /** @var WechatPagesApiContainer */
    public $wechatPagesApiContainer;

    /** @var WechatPagesCsgroupStatusApiContainer */
    public $wechatPagesCsgroupStatusApiContainer;

    /** @var WechatPagesCsgroupUserApiContainer */
    public $wechatPagesCsgroupUserApiContainer;

    /** @var WechatPagesCsgrouplistApiContainer */
    public $wechatPagesCsgrouplistApiContainer;

    /** @var WechatPagesCustomApiContainer */
    public $wechatPagesCustomApiContainer;

    /** @var WechatPagesGrantinfoApiContainer */
    public $wechatPagesGrantinfoApiContainer;

    /** @var WechatQualificationsApiContainer */
    public $wechatQualificationsApiContainer;

    /** @var WildcardsApiContainer */
    public $wildcardsApiContainer;

    /** @var XijingComplexTemplateApiContainer */
    public $xijingComplexTemplateApiContainer;

    /** @var XijingPageApiContainer */
    public $xijingPageApiContainer;

    /** @var XijingPageByComponentsApiContainer */
    public $xijingPageByComponentsApiContainer;

    /** @var XijingPageInteractiveApiContainer */
    public $xijingPageInteractiveApiContainer;

    /** @var XijingPageListApiContainer */
    public $xijingPageListApiContainer;

    /** @var XijingTemplateApiContainer */
    public $xijingTemplateApiContainer;

    /** @var XijingTemplateListApiContainer */
    public $xijingTemplateListApiContainer;


    /**
     * @return Client
     */
    public function getClient()
    {
        if (empty($this->client)) {
            $this->client = new Client();
        }
        return $this->client;
    }


    /**
     * @return AdDiagnosisApiContainer
     */
    public function adDiagnosis()
    {
        if (empty($this->adDiagnosisApiContainer)) {
            $container = new AdDiagnosisApiContainer();
            $container->init($this, $this->getClient());
            $this->adDiagnosisApiContainer = $container;
        }
        return $this->adDiagnosisApiContainer;
    }


    /**
     * @return AdLabelApiContainer
     */
    public function adLabel()
    {
        if (empty($this->adLabelApiContainer)) {
            $container = new AdLabelApiContainer();
            $container->init($this, $this->getClient());
            $this->adLabelApiContainer = $container;
        }
        return $this->adLabelApiContainer;
    }


    /**
     * @return AdParamApiContainer
     */
    public function adParam()
    {
        if (empty($this->adParamApiContainer)) {
            $container = new AdParamApiContainer();
            $container->init($this, $this->getClient());
            $this->adParamApiContainer = $container;
        }
        return $this->adParamApiContainer;
    }


    /**
     * @return AdcreativePreviewsApiContainer
     */
    public function adcreativePreviews()
    {
        if (empty($this->adcreativePreviewsApiContainer)) {
            $container = new AdcreativePreviewsApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativePreviewsApiContainer = $container;
        }
        return $this->adcreativePreviewsApiContainer;
    }


    /**
     * @return AdcreativePreviewsQrcodeApiContainer
     */
    public function adcreativePreviewsQrcode()
    {
        if (empty($this->adcreativePreviewsQrcodeApiContainer)) {
            $container = new AdcreativePreviewsQrcodeApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativePreviewsQrcodeApiContainer = $container;
        }
        return $this->adcreativePreviewsQrcodeApiContainer;
    }


    /**
     * @return AdcreativeTemplateApiContainer
     */
    public function adcreativeTemplate()
    {
        if (empty($this->adcreativeTemplateApiContainer)) {
            $container = new AdcreativeTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplateApiContainer = $container;
        }
        return $this->adcreativeTemplateApiContainer;
    }


    /**
     * @return AdcreativeTemplateDetailApiContainer
     */
    public function adcreativeTemplateDetail()
    {
        if (empty($this->adcreativeTemplateDetailApiContainer)) {
            $container = new AdcreativeTemplateDetailApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplateDetailApiContainer = $container;
        }
        return $this->adcreativeTemplateDetailApiContainer;
    }


    /**
     * @return AdcreativeTemplateListApiContainer
     */
    public function adcreativeTemplateList()
    {
        if (empty($this->adcreativeTemplateListApiContainer)) {
            $container = new AdcreativeTemplateListApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplateListApiContainer = $container;
        }
        return $this->adcreativeTemplateListApiContainer;
    }


    /**
     * @return AdcreativeTemplatePreviewApiContainer
     */
    public function adcreativeTemplatePreview()
    {
        if (empty($this->adcreativeTemplatePreviewApiContainer)) {
            $container = new AdcreativeTemplatePreviewApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplatePreviewApiContainer = $container;
        }
        return $this->adcreativeTemplatePreviewApiContainer;
    }


    /**
     * @return AdcreativeTemplatePreviewsApiContainer
     */
    public function adcreativeTemplatePreviews()
    {
        if (empty($this->adcreativeTemplatePreviewsApiContainer)) {
            $container = new AdcreativeTemplatePreviewsApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplatePreviewsApiContainer = $container;
        }
        return $this->adcreativeTemplatePreviewsApiContainer;
    }


    /**
     * @return AdcreativeTemplatesApiContainer
     */
    public function adcreativeTemplates()
    {
        if (empty($this->adcreativeTemplatesApiContainer)) {
            $container = new AdcreativeTemplatesApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplatesApiContainer = $container;
        }
        return $this->adcreativeTemplatesApiContainer;
    }


    /**
     * @return AdcreativesApiContainer
     */
    public function adcreatives()
    {
        if (empty($this->adcreativesApiContainer)) {
            $container = new AdcreativesApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativesApiContainer = $container;
        }
        return $this->adcreativesApiContainer;
    }


    /**
     * @return AdcreativesRelatedCapabilityApiContainer
     */
    public function adcreativesRelatedCapability()
    {
        if (empty($this->adcreativesRelatedCapabilityApiContainer)) {
            $container = new AdcreativesRelatedCapabilityApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativesRelatedCapabilityApiContainer = $container;
        }
        return $this->adcreativesRelatedCapabilityApiContainer;
    }


    /**
     * @return AdgroupsApiContainer
     */
    public function adgroups()
    {
        if (empty($this->adgroupsApiContainer)) {
            $container = new AdgroupsApiContainer();
            $container->init($this, $this->getClient());
            $this->adgroupsApiContainer = $container;
        }
        return $this->adgroupsApiContainer;
    }


    /**
     * @return AdsApiContainer
     */
    public function ads()
    {
        if (empty($this->adsApiContainer)) {
            $container = new AdsApiContainer();
            $container->init($this, $this->getClient());
            $this->adsApiContainer = $container;
        }
        return $this->adsApiContainer;
    }


    /**
     * @return AdvertiserApiContainer
     */
    public function advertiser()
    {
        if (empty($this->advertiserApiContainer)) {
            $container = new AdvertiserApiContainer();
            $container->init($this, $this->getClient());
            $this->advertiserApiContainer = $container;
        }
        return $this->advertiserApiContainer;
    }


    /**
     * @return AgencyInnerTransferApiContainer
     */
    public function agencyInnerTransfer()
    {
        if (empty($this->agencyInnerTransferApiContainer)) {
            $container = new AgencyInnerTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyInnerTransferApiContainer = $container;
        }
        return $this->agencyInnerTransferApiContainer;
    }


    /**
     * @return AgencyRealtimeCostApiContainer
     */
    public function agencyRealtimeCost()
    {
        if (empty($this->agencyRealtimeCostApiContainer)) {
            $container = new AgencyRealtimeCostApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyRealtimeCostApiContainer = $container;
        }
        return $this->agencyRealtimeCostApiContainer;
    }


    /**
     * @return AndroidChannelPackagesApiContainer
     */
    public function androidChannelPackages()
    {
        if (empty($this->androidChannelPackagesApiContainer)) {
            $container = new AndroidChannelPackagesApiContainer();
            $container->init($this, $this->getClient());
            $this->androidChannelPackagesApiContainer = $container;
        }
        return $this->androidChannelPackagesApiContainer;
    }


    /**
     * @return AndroidUnionChannelPackagesApiContainer
     */
    public function androidUnionChannelPackages()
    {
        if (empty($this->androidUnionChannelPackagesApiContainer)) {
            $container = new AndroidUnionChannelPackagesApiContainer();
            $container->init($this, $this->getClient());
            $this->androidUnionChannelPackagesApiContainer = $container;
        }
        return $this->androidUnionChannelPackagesApiContainer;
    }


    /**
     * @return AppAndroidChannelPackagesApiContainer
     */
    public function appAndroidChannelPackages()
    {
        if (empty($this->appAndroidChannelPackagesApiContainer)) {
            $container = new AppAndroidChannelPackagesApiContainer();
            $container->init($this, $this->getClient());
            $this->appAndroidChannelPackagesApiContainer = $container;
        }
        return $this->appAndroidChannelPackagesApiContainer;
    }


    /**
     * @return AssetPermissionsApiContainer
     */
    public function assetPermissions()
    {
        if (empty($this->assetPermissionsApiContainer)) {
            $container = new AssetPermissionsApiContainer();
            $container->init($this, $this->getClient());
            $this->assetPermissionsApiContainer = $container;
        }
        return $this->assetPermissionsApiContainer;
    }


    /**
     * @return AssetPrePermissionsApiContainer
     */
    public function assetPrePermissions()
    {
        if (empty($this->assetPrePermissionsApiContainer)) {
            $container = new AssetPrePermissionsApiContainer();
            $container->init($this, $this->getClient());
            $this->assetPrePermissionsApiContainer = $container;
        }
        return $this->assetPrePermissionsApiContainer;
    }


    /**
     * @return AsyncReportFilesApiContainer
     */
    public function asyncReportFiles()
    {
        if (empty($this->asyncReportFilesApiContainer)) {
            $container = new AsyncReportFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncReportFilesApiContainer = $container;
        }
        return $this->asyncReportFilesApiContainer;
    }


    /**
     * @return AsyncReportsApiContainer
     */
    public function asyncReports()
    {
        if (empty($this->asyncReportsApiContainer)) {
            $container = new AsyncReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncReportsApiContainer = $container;
        }
        return $this->asyncReportsApiContainer;
    }


    /**
     * @return AsyncTaskFilesApiContainer
     */
    public function asyncTaskFiles()
    {
        if (empty($this->asyncTaskFilesApiContainer)) {
            $container = new AsyncTaskFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncTaskFilesApiContainer = $container;
        }
        return $this->asyncTaskFilesApiContainer;
    }


    /**
     * @return AsyncTasksApiContainer
     */
    public function asyncTasks()
    {
        if (empty($this->asyncTasksApiContainer)) {
            $container = new AsyncTasksApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncTasksApiContainer = $container;
        }
        return $this->asyncTasksApiContainer;
    }


    /**
     * @return AudienceGrantRelationsApiContainer
     */
    public function audienceGrantRelations()
    {
        if (empty($this->audienceGrantRelationsApiContainer)) {
            $container = new AudienceGrantRelationsApiContainer();
            $container->init($this, $this->getClient());
            $this->audienceGrantRelationsApiContainer = $container;
        }
        return $this->audienceGrantRelationsApiContainer;
    }


    /**
     * @return AuthorizationApiContainer
     */
    public function authorization()
    {
        if (empty($this->authorizationApiContainer)) {
            $container = new AuthorizationApiContainer();
            $container->init($this, $this->getClient());
            $this->authorizationApiContainer = $container;
        }
        return $this->authorizationApiContainer;
    }


    /**
     * @return BarrageApiContainer
     */
    public function barrage()
    {
        if (empty($this->barrageApiContainer)) {
            $container = new BarrageApiContainer();
            $container->init($this, $this->getClient());
            $this->barrageApiContainer = $container;
        }
        return $this->barrageApiContainer;
    }


    /**
     * @return BarrageRecommendApiContainer
     */
    public function barrageRecommend()
    {
        if (empty($this->barrageRecommendApiContainer)) {
            $container = new BarrageRecommendApiContainer();
            $container->init($this, $this->getClient());
            $this->barrageRecommendApiContainer = $container;
        }
        return $this->barrageRecommendApiContainer;
    }


    /**
     * @return BatchAsyncRequestSpecificationApiContainer
     */
    public function batchAsyncRequestSpecification()
    {
        if (empty($this->batchAsyncRequestSpecificationApiContainer)) {
            $container = new BatchAsyncRequestSpecificationApiContainer();
            $container->init($this, $this->getClient());
            $this->batchAsyncRequestSpecificationApiContainer = $container;
        }
        return $this->batchAsyncRequestSpecificationApiContainer;
    }


    /**
     * @return BatchAsyncRequestsApiContainer
     */
    public function batchAsyncRequests()
    {
        if (empty($this->batchAsyncRequestsApiContainer)) {
            $container = new BatchAsyncRequestsApiContainer();
            $container->init($this, $this->getClient());
            $this->batchAsyncRequestsApiContainer = $container;
        }
        return $this->batchAsyncRequestsApiContainer;
    }


    /**
     * @return BatchOperationApiContainer
     */
    public function batchOperation()
    {
        if (empty($this->batchOperationApiContainer)) {
            $container = new BatchOperationApiContainer();
            $container->init($this, $this->getClient());
            $this->batchOperationApiContainer = $container;
        }
        return $this->batchOperationApiContainer;
    }


    /**
     * @return BatchRequestsApiContainer
     */
    public function batchRequests()
    {
        if (empty($this->batchRequestsApiContainer)) {
            $container = new BatchRequestsApiContainer();
            $container->init($this, $this->getClient());
            $this->batchRequestsApiContainer = $container;
        }
        return $this->batchRequestsApiContainer;
    }


    /**
     * @return BidSimulationApiContainer
     */
    public function bidSimulation()
    {
        if (empty($this->bidSimulationApiContainer)) {
            $container = new BidSimulationApiContainer();
            $container->init($this, $this->getClient());
            $this->bidSimulationApiContainer = $container;
        }
        return $this->bidSimulationApiContainer;
    }


    /**
     * @return BrandApiContainer
     */
    public function brand()
    {
        if (empty($this->brandApiContainer)) {
            $container = new BrandApiContainer();
            $container->init($this, $this->getClient());
            $this->brandApiContainer = $container;
        }
        return $this->brandApiContainer;
    }


    /**
     * @return BusinessManagerRelationsApiContainer
     */
    public function businessManagerRelations()
    {
        if (empty($this->businessManagerRelationsApiContainer)) {
            $container = new BusinessManagerRelationsApiContainer();
            $container->init($this, $this->getClient());
            $this->businessManagerRelationsApiContainer = $container;
        }
        return $this->businessManagerRelationsApiContainer;
    }


    /**
     * @return BusinessMdmAccountRelationsApiContainer
     */
    public function businessMdmAccountRelations()
    {
        if (empty($this->businessMdmAccountRelationsApiContainer)) {
            $container = new BusinessMdmAccountRelationsApiContainer();
            $container->init($this, $this->getClient());
            $this->businessMdmAccountRelationsApiContainer = $container;
        }
        return $this->businessMdmAccountRelationsApiContainer;
    }


    /**
     * @return CampaignsApiContainer
     */
    public function campaigns()
    {
        if (empty($this->campaignsApiContainer)) {
            $container = new CampaignsApiContainer();
            $container->init($this, $this->getClient());
            $this->campaignsApiContainer = $container;
        }
        return $this->campaignsApiContainer;
    }


    /**
     * @return CapabilitiesApiContainer
     */
    public function capabilities()
    {
        if (empty($this->capabilitiesApiContainer)) {
            $container = new CapabilitiesApiContainer();
            $container->init($this, $this->getClient());
            $this->capabilitiesApiContainer = $container;
        }
        return $this->capabilitiesApiContainer;
    }


    /**
     * @return ChannelsApiContainer
     */
    public function channels()
    {
        if (empty($this->channelsApiContainer)) {
            $container = new ChannelsApiContainer();
            $container->init($this, $this->getClient());
            $this->channelsApiContainer = $container;
        }
        return $this->channelsApiContainer;
    }


    /**
     * @return ComplianceValidationApiContainer
     */
    public function complianceValidation()
    {
        if (empty($this->complianceValidationApiContainer)) {
            $container = new ComplianceValidationApiContainer();
            $container->init($this, $this->getClient());
            $this->complianceValidationApiContainer = $container;
        }
        return $this->complianceValidationApiContainer;
    }


    /**
     * @return ConversionsApiContainer
     */
    public function conversions()
    {
        if (empty($this->conversionsApiContainer)) {
            $container = new ConversionsApiContainer();
            $container->init($this, $this->getClient());
            $this->conversionsApiContainer = $container;
        }
        return $this->conversionsApiContainer;
    }


    /**
     * @return CreativetoolsTextApiContainer
     */
    public function creativetoolsText()
    {
        if (empty($this->creativetoolsTextApiContainer)) {
            $container = new CreativetoolsTextApiContainer();
            $container->init($this, $this->getClient());
            $this->creativetoolsTextApiContainer = $container;
        }
        return $this->creativetoolsTextApiContainer;
    }


    /**
     * @return CustomAudienceEstimationsApiContainer
     */
    public function customAudienceEstimations()
    {
        if (empty($this->customAudienceEstimationsApiContainer)) {
            $container = new CustomAudienceEstimationsApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudienceEstimationsApiContainer = $container;
        }
        return $this->customAudienceEstimationsApiContainer;
    }


    /**
     * @return CustomAudienceFilesApiContainer
     */
    public function customAudienceFiles()
    {
        if (empty($this->customAudienceFilesApiContainer)) {
            $container = new CustomAudienceFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudienceFilesApiContainer = $container;
        }
        return $this->customAudienceFilesApiContainer;
    }


    /**
     * @return CustomAudienceInsightsApiContainer
     */
    public function customAudienceInsights()
    {
        if (empty($this->customAudienceInsightsApiContainer)) {
            $container = new CustomAudienceInsightsApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudienceInsightsApiContainer = $container;
        }
        return $this->customAudienceInsightsApiContainer;
    }


    /**
     * @return CustomAudienceReportsApiContainer
     */
    public function customAudienceReports()
    {
        if (empty($this->customAudienceReportsApiContainer)) {
            $container = new CustomAudienceReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudienceReportsApiContainer = $container;
        }
        return $this->customAudienceReportsApiContainer;
    }


    /**
     * @return CustomAudiencesApiContainer
     */
    public function customAudiences()
    {
        if (empty($this->customAudiencesApiContainer)) {
            $container = new CustomAudiencesApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudiencesApiContainer = $container;
        }
        return $this->customAudiencesApiContainer;
    }


    /**
     * @return CustomFeaturesApiContainer
     */
    public function customFeatures()
    {
        if (empty($this->customFeaturesApiContainer)) {
            $container = new CustomFeaturesApiContainer();
            $container->init($this, $this->getClient());
            $this->customFeaturesApiContainer = $container;
        }
        return $this->customFeaturesApiContainer;
    }


    /**
     * @return CustomTagFilesApiContainer
     */
    public function customTagFiles()
    {
        if (empty($this->customTagFilesApiContainer)) {
            $container = new CustomTagFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->customTagFilesApiContainer = $container;
        }
        return $this->customTagFilesApiContainer;
    }


    /**
     * @return CustomTagsApiContainer
     */
    public function customTags()
    {
        if (empty($this->customTagsApiContainer)) {
            $container = new CustomTagsApiContainer();
            $container->init($this, $this->getClient());
            $this->customTagsApiContainer = $container;
        }
        return $this->customTagsApiContainer;
    }


    /**
     * @return DailyBalanceReportApiContainer
     */
    public function dailyBalanceReport()
    {
        if (empty($this->dailyBalanceReportApiContainer)) {
            $container = new DailyBalanceReportApiContainer();
            $container->init($this, $this->getClient());
            $this->dailyBalanceReportApiContainer = $container;
        }
        return $this->dailyBalanceReportApiContainer;
    }


    /**
     * @return DailyCostApiContainer
     */
    public function dailyCost()
    {
        if (empty($this->dailyCostApiContainer)) {
            $container = new DailyCostApiContainer();
            $container->init($this, $this->getClient());
            $this->dailyCostApiContainer = $container;
        }
        return $this->dailyCostApiContainer;
    }


    /**
     * @return DailyReportsApiContainer
     */
    public function dailyReports()
    {
        if (empty($this->dailyReportsApiContainer)) {
            $container = new DailyReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->dailyReportsApiContainer = $container;
        }
        return $this->dailyReportsApiContainer;
    }


    /**
     * @return DiagnosisApiContainer
     */
    public function diagnosis()
    {
        if (empty($this->diagnosisApiContainer)) {
            $container = new DiagnosisApiContainer();
            $container->init($this, $this->getClient());
            $this->diagnosisApiContainer = $container;
        }
        return $this->diagnosisApiContainer;
    }


    /**
     * @return DplabelAdLabelApiContainer
     */
    public function dplabelAdLabel()
    {
        if (empty($this->dplabelAdLabelApiContainer)) {
            $container = new DplabelAdLabelApiContainer();
            $container->init($this, $this->getClient());
            $this->dplabelAdLabelApiContainer = $container;
        }
        return $this->dplabelAdLabelApiContainer;
    }


    /**
     * @return DynamicAdImageTemplatesApiContainer
     */
    public function dynamicAdImageTemplates()
    {
        if (empty($this->dynamicAdImageTemplatesApiContainer)) {
            $container = new DynamicAdImageTemplatesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdImageTemplatesApiContainer = $container;
        }
        return $this->dynamicAdImageTemplatesApiContainer;
    }


    /**
     * @return DynamicAdImagesApiContainer
     */
    public function dynamicAdImages()
    {
        if (empty($this->dynamicAdImagesApiContainer)) {
            $container = new DynamicAdImagesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdImagesApiContainer = $container;
        }
        return $this->dynamicAdImagesApiContainer;
    }


    /**
     * @return DynamicAdTemplatesApiContainer
     */
    public function dynamicAdTemplates()
    {
        if (empty($this->dynamicAdTemplatesApiContainer)) {
            $container = new DynamicAdTemplatesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdTemplatesApiContainer = $container;
        }
        return $this->dynamicAdTemplatesApiContainer;
    }


    /**
     * @return DynamicAdVideoApiContainer
     */
    public function dynamicAdVideo()
    {
        if (empty($this->dynamicAdVideoApiContainer)) {
            $container = new DynamicAdVideoApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdVideoApiContainer = $container;
        }
        return $this->dynamicAdVideoApiContainer;
    }


    /**
     * @return DynamicAdVideoTemplatesApiContainer
     */
    public function dynamicAdVideoTemplates()
    {
        if (empty($this->dynamicAdVideoTemplatesApiContainer)) {
            $container = new DynamicAdVideoTemplatesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdVideoTemplatesApiContainer = $container;
        }
        return $this->dynamicAdVideoTemplatesApiContainer;
    }


    /**
     * @return DynamicCreativesApiContainer
     */
    public function dynamicCreatives()
    {
        if (empty($this->dynamicCreativesApiContainer)) {
            $container = new DynamicCreativesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicCreativesApiContainer = $container;
        }
        return $this->dynamicCreativesApiContainer;
    }


    /**
     * @return EcommerceOrderApiContainer
     */
    public function ecommerceOrder()
    {
        if (empty($this->ecommerceOrderApiContainer)) {
            $container = new EcommerceOrderApiContainer();
            $container->init($this, $this->getClient());
            $this->ecommerceOrderApiContainer = $container;
        }
        return $this->ecommerceOrderApiContainer;
    }


    /**
     * @return EstimationApiContainer
     */
    public function estimation()
    {
        if (empty($this->estimationApiContainer)) {
            $container = new EstimationApiContainer();
            $container->init($this, $this->getClient());
            $this->estimationApiContainer = $container;
        }
        return $this->estimationApiContainer;
    }


    /**
     * @return FundStatementsDailyApiContainer
     */
    public function fundStatementsDaily()
    {
        if (empty($this->fundStatementsDailyApiContainer)) {
            $container = new FundStatementsDailyApiContainer();
            $container->init($this, $this->getClient());
            $this->fundStatementsDailyApiContainer = $container;
        }
        return $this->fundStatementsDailyApiContainer;
    }


    /**
     * @return FundStatementsDetailedApiContainer
     */
    public function fundStatementsDetailed()
    {
        if (empty($this->fundStatementsDetailedApiContainer)) {
            $container = new FundStatementsDetailedApiContainer();
            $container->init($this, $this->getClient());
            $this->fundStatementsDetailedApiContainer = $container;
        }
        return $this->fundStatementsDetailedApiContainer;
    }


    /**
     * @return FundTransferApiContainer
     */
    public function fundTransfer()
    {
        if (empty($this->fundTransferApiContainer)) {
            $container = new FundTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->fundTransferApiContainer = $container;
        }
        return $this->fundTransferApiContainer;
    }


    /**
     * @return FundsApiContainer
     */
    public function funds()
    {
        if (empty($this->fundsApiContainer)) {
            $container = new FundsApiContainer();
            $container->init($this, $this->getClient());
            $this->fundsApiContainer = $container;
        }
        return $this->fundsApiContainer;
    }


    /**
     * @return HourlyReportsApiContainer
     */
    public function hourlyReports()
    {
        if (empty($this->hourlyReportsApiContainer)) {
            $container = new HourlyReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->hourlyReportsApiContainer = $container;
        }
        return $this->hourlyReportsApiContainer;
    }


    /**
     * @return ImageProcessingApiContainer
     */
    public function imageProcessing()
    {
        if (empty($this->imageProcessingApiContainer)) {
            $container = new ImageProcessingApiContainer();
            $container->init($this, $this->getClient());
            $this->imageProcessingApiContainer = $container;
        }
        return $this->imageProcessingApiContainer;
    }


    /**
     * @return ImagesApiContainer
     */
    public function images()
    {
        if (empty($this->imagesApiContainer)) {
            $container = new ImagesApiContainer();
            $container->init($this, $this->getClient());
            $this->imagesApiContainer = $container;
        }
        return $this->imagesApiContainer;
    }


    /**
     * @return LabelAudiencesApiContainer
     */
    public function labelAudiences()
    {
        if (empty($this->labelAudiencesApiContainer)) {
            $container = new LabelAudiencesApiContainer();
            $container->init($this, $this->getClient());
            $this->labelAudiencesApiContainer = $container;
        }
        return $this->labelAudiencesApiContainer;
    }


    /**
     * @return LabelsApiContainer
     */
    public function labels()
    {
        if (empty($this->labelsApiContainer)) {
            $container = new LabelsApiContainer();
            $container->init($this, $this->getClient());
            $this->labelsApiContainer = $container;
        }
        return $this->labelsApiContainer;
    }


    /**
     * @return LeadCluesApiContainer
     */
    public function leadClues()
    {
        if (empty($this->leadCluesApiContainer)) {
            $container = new LeadCluesApiContainer();
            $container->init($this, $this->getClient());
            $this->leadCluesApiContainer = $container;
        }
        return $this->leadCluesApiContainer;
    }


    /**
     * @return LeadsFormApiContainer
     */
    public function leadsForm()
    {
        if (empty($this->leadsFormApiContainer)) {
            $container = new LeadsFormApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsFormApiContainer = $container;
        }
        return $this->leadsFormApiContainer;
    }


    /**
     * @return LeadsFormListApiContainer
     */
    public function leadsFormList()
    {
        if (empty($this->leadsFormListApiContainer)) {
            $container = new LeadsFormListApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsFormListApiContainer = $container;
        }
        return $this->leadsFormListApiContainer;
    }


    /**
     * @return LeadsInvalidPayApiContainer
     */
    public function leadsInvalidPay()
    {
        if (empty($this->leadsInvalidPayApiContainer)) {
            $container = new LeadsInvalidPayApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsInvalidPayApiContainer = $container;
        }
        return $this->leadsInvalidPayApiContainer;
    }


    /**
     * @return LocalApiContainer
     */
    public function local()
    {
        if (empty($this->localApiContainer)) {
            $container = new LocalApiContainer();
            $container->init($this, $this->getClient());
            $this->localApiContainer = $container;
        }
        return $this->localApiContainer;
    }


    /**
     * @return LocalEndadsmanuallyApiContainer
     */
    public function localEndadsmanually()
    {
        if (empty($this->localEndadsmanuallyApiContainer)) {
            $container = new LocalEndadsmanuallyApiContainer();
            $container->init($this, $this->getClient());
            $this->localEndadsmanuallyApiContainer = $container;
        }
        return $this->localEndadsmanuallyApiContainer;
    }


    /**
     * @return LocalEstimatedamountApiContainer
     */
    public function localEstimatedamount()
    {
        if (empty($this->localEstimatedamountApiContainer)) {
            $container = new LocalEstimatedamountApiContainer();
            $container->init($this, $this->getClient());
            $this->localEstimatedamountApiContainer = $container;
        }
        return $this->localEstimatedamountApiContainer;
    }


    /**
     * @return LocalStoresAddressParsingResultApiContainer
     */
    public function localStoresAddressParsingResult()
    {
        if (empty($this->localStoresAddressParsingResultApiContainer)) {
            $container = new LocalStoresAddressParsingResultApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresAddressParsingResultApiContainer = $container;
        }
        return $this->localStoresAddressParsingResultApiContainer;
    }


    /**
     * @return LocalStoresApiContainer
     */
    public function localStores()
    {
        if (empty($this->localStoresApiContainer)) {
            $container = new LocalStoresApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresApiContainer = $container;
        }
        return $this->localStoresApiContainer;
    }


    /**
     * @return LocalStoresCategoriesApiContainer
     */
    public function localStoresCategories()
    {
        if (empty($this->localStoresCategoriesApiContainer)) {
            $container = new LocalStoresCategoriesApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresCategoriesApiContainer = $container;
        }
        return $this->localStoresCategoriesApiContainer;
    }


    /**
     * @return LocalStoresSearchInfoApiContainer
     */
    public function localStoresSearchInfo()
    {
        if (empty($this->localStoresSearchInfoApiContainer)) {
            $container = new LocalStoresSearchInfoApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresSearchInfoApiContainer = $container;
        }
        return $this->localStoresSearchInfoApiContainer;
    }


    /**
     * @return LocalStoresWxpayMerchantsApiContainer
     */
    public function localStoresWxpayMerchants()
    {
        if (empty($this->localStoresWxpayMerchantsApiContainer)) {
            $container = new LocalStoresWxpayMerchantsApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresWxpayMerchantsApiContainer = $container;
        }
        return $this->localStoresWxpayMerchantsApiContainer;
    }


    /**
     * @return MergeFundTypeDailyBalanceReportApiContainer
     */
    public function mergeFundTypeDailyBalanceReport()
    {
        if (empty($this->mergeFundTypeDailyBalanceReportApiContainer)) {
            $container = new MergeFundTypeDailyBalanceReportApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeDailyBalanceReportApiContainer = $container;
        }
        return $this->mergeFundTypeDailyBalanceReportApiContainer;
    }


    /**
     * @return MergeFundTypeFundStatementsDetailedApiContainer
     */
    public function mergeFundTypeFundStatementsDetailed()
    {
        if (empty($this->mergeFundTypeFundStatementsDetailedApiContainer)) {
            $container = new MergeFundTypeFundStatementsDetailedApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeFundStatementsDetailedApiContainer = $container;
        }
        return $this->mergeFundTypeFundStatementsDetailedApiContainer;
    }


    /**
     * @return MergeFundTypeFundsApiContainer
     */
    public function mergeFundTypeFunds()
    {
        if (empty($this->mergeFundTypeFundsApiContainer)) {
            $container = new MergeFundTypeFundsApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeFundsApiContainer = $container;
        }
        return $this->mergeFundTypeFundsApiContainer;
    }


    /**
     * @return MergeFundTypeSubcustomerTransferApiContainer
     */
    public function mergeFundTypeSubcustomerTransfer()
    {
        if (empty($this->mergeFundTypeSubcustomerTransferApiContainer)) {
            $container = new MergeFundTypeSubcustomerTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeSubcustomerTransferApiContainer = $container;
        }
        return $this->mergeFundTypeSubcustomerTransferApiContainer;
    }


    /**
     * @return OauthApiContainer
     */
    public function oauth()
    {
        if (empty($this->oauthApiContainer)) {
            $container = new OauthApiContainer();
            $container->init($this, $this->getClient());
            $this->oauthApiContainer = $container;
        }
        return $this->oauthApiContainer;
    }


    /**
     * @return OptimizationGoalPermissionsApiContainer
     */
    public function optimizationGoalPermissions()
    {
        if (empty($this->optimizationGoalPermissionsApiContainer)) {
            $container = new OptimizationGoalPermissionsApiContainer();
            $container->init($this, $this->getClient());
            $this->optimizationGoalPermissionsApiContainer = $container;
        }
        return $this->optimizationGoalPermissionsApiContainer;
    }


    /**
     * @return OuterCluesApiContainer
     */
    public function outerClues()
    {
        if (empty($this->outerCluesApiContainer)) {
            $container = new OuterCluesApiContainer();
            $container->init($this, $this->getClient());
            $this->outerCluesApiContainer = $container;
        }
        return $this->outerCluesApiContainer;
    }


    /**
     * @return OuterCluesContactApiContainer
     */
    public function outerCluesContact()
    {
        if (empty($this->outerCluesContactApiContainer)) {
            $container = new OuterCluesContactApiContainer();
            $container->init($this, $this->getClient());
            $this->outerCluesContactApiContainer = $container;
        }
        return $this->outerCluesContactApiContainer;
    }


    /**
     * @return PagesApiContainer
     */
    public function pages()
    {
        if (empty($this->pagesApiContainer)) {
            $container = new PagesApiContainer();
            $container->init($this, $this->getClient());
            $this->pagesApiContainer = $container;
        }
        return $this->pagesApiContainer;
    }


    /**
     * @return PlayablePagesApiContainer
     */
    public function playablePages()
    {
        if (empty($this->playablePagesApiContainer)) {
            $container = new PlayablePagesApiContainer();
            $container->init($this, $this->getClient());
            $this->playablePagesApiContainer = $container;
        }
        return $this->playablePagesApiContainer;
    }


    /**
     * @return ProductCatalogsApiContainer
     */
    public function productCatalogs()
    {
        if (empty($this->productCatalogsApiContainer)) {
            $container = new ProductCatalogsApiContainer();
            $container->init($this, $this->getClient());
            $this->productCatalogsApiContainer = $container;
        }
        return $this->productCatalogsApiContainer;
    }


    /**
     * @return ProductCatalogsReportsApiContainer
     */
    public function productCatalogsReports()
    {
        if (empty($this->productCatalogsReportsApiContainer)) {
            $container = new ProductCatalogsReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->productCatalogsReportsApiContainer = $container;
        }
        return $this->productCatalogsReportsApiContainer;
    }


    /**
     * @return ProductCategoriesListApiContainer
     */
    public function productCategoriesList()
    {
        if (empty($this->productCategoriesListApiContainer)) {
            $container = new ProductCategoriesListApiContainer();
            $container->init($this, $this->getClient());
            $this->productCategoriesListApiContainer = $container;
        }
        return $this->productCategoriesListApiContainer;
    }


    /**
     * @return ProductItemsApiContainer
     */
    public function productItems()
    {
        if (empty($this->productItemsApiContainer)) {
            $container = new ProductItemsApiContainer();
            $container->init($this, $this->getClient());
            $this->productItemsApiContainer = $container;
        }
        return $this->productItemsApiContainer;
    }


    /**
     * @return ProductItemsDetailApiContainer
     */
    public function productItemsDetail()
    {
        if (empty($this->productItemsDetailApiContainer)) {
            $container = new ProductItemsDetailApiContainer();
            $container->init($this, $this->getClient());
            $this->productItemsDetailApiContainer = $container;
        }
        return $this->productItemsDetailApiContainer;
    }


    /**
     * @return ProductItemsVerticalsApiContainer
     */
    public function productItemsVerticals()
    {
        if (empty($this->productItemsVerticalsApiContainer)) {
            $container = new ProductItemsVerticalsApiContainer();
            $container->init($this, $this->getClient());
            $this->productItemsVerticalsApiContainer = $container;
        }
        return $this->productItemsVerticalsApiContainer;
    }


    /**
     * @return ProductSeriesApiContainer
     */
    public function productSeries()
    {
        if (empty($this->productSeriesApiContainer)) {
            $container = new ProductSeriesApiContainer();
            $container->init($this, $this->getClient());
            $this->productSeriesApiContainer = $container;
        }
        return $this->productSeriesApiContainer;
    }


    /**
     * @return ProductsSystemStatusApiContainer
     */
    public function productsSystemStatus()
    {
        if (empty($this->productsSystemStatusApiContainer)) {
            $container = new ProductsSystemStatusApiContainer();
            $container->init($this, $this->getClient());
            $this->productsSystemStatusApiContainer = $container;
        }
        return $this->productsSystemStatusApiContainer;
    }


    /**
     * @return ProfilesApiContainer
     */
    public function profiles()
    {
        if (empty($this->profilesApiContainer)) {
            $container = new ProfilesApiContainer();
            $container->init($this, $this->getClient());
            $this->profilesApiContainer = $container;
        }
        return $this->profilesApiContainer;
    }


    /**
     * @return PromotedObjectsApiContainer
     */
    public function promotedObjects()
    {
        if (empty($this->promotedObjectsApiContainer)) {
            $container = new PromotedObjectsApiContainer();
            $container->init($this, $this->getClient());
            $this->promotedObjectsApiContainer = $container;
        }
        return $this->promotedObjectsApiContainer;
    }


    /**
     * @return PropertyFileSessionsApiContainer
     */
    public function propertyFileSessions()
    {
        if (empty($this->propertyFileSessionsApiContainer)) {
            $container = new PropertyFileSessionsApiContainer();
            $container->init($this, $this->getClient());
            $this->propertyFileSessionsApiContainer = $container;
        }
        return $this->propertyFileSessionsApiContainer;
    }


    /**
     * @return PropertyFilesApiContainer
     */
    public function propertyFiles()
    {
        if (empty($this->propertyFilesApiContainer)) {
            $container = new PropertyFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->propertyFilesApiContainer = $container;
        }
        return $this->propertyFilesApiContainer;
    }


    /**
     * @return PropertySetSchemasApiContainer
     */
    public function propertySetSchemas()
    {
        if (empty($this->propertySetSchemasApiContainer)) {
            $container = new PropertySetSchemasApiContainer();
            $container->init($this, $this->getClient());
            $this->propertySetSchemasApiContainer = $container;
        }
        return $this->propertySetSchemasApiContainer;
    }


    /**
     * @return PropertySetsApiContainer
     */
    public function propertySets()
    {
        if (empty($this->propertySetsApiContainer)) {
            $container = new PropertySetsApiContainer();
            $container->init($this, $this->getClient());
            $this->propertySetsApiContainer = $container;
        }
        return $this->propertySetsApiContainer;
    }


    /**
     * @return QualificationsApiContainer
     */
    public function qualifications()
    {
        if (empty($this->qualificationsApiContainer)) {
            $container = new QualificationsApiContainer();
            $container->init($this, $this->getClient());
            $this->qualificationsApiContainer = $container;
        }
        return $this->qualificationsApiContainer;
    }


    /**
     * @return RealtimeCostApiContainer
     */
    public function realtimeCost()
    {
        if (empty($this->realtimeCostApiContainer)) {
            $container = new RealtimeCostApiContainer();
            $container->init($this, $this->getClient());
            $this->realtimeCostApiContainer = $container;
        }
        return $this->realtimeCostApiContainer;
    }


    /**
     * @return ReportApiContainer
     */
    public function report()
    {
        if (empty($this->reportApiContainer)) {
            $container = new ReportApiContainer();
            $container->init($this, $this->getClient());
            $this->reportApiContainer = $container;
        }
        return $this->reportApiContainer;
    }


    /**
     * @return ReviewElementPrereviewResultsApiContainer
     */
    public function reviewElementPrereviewResults()
    {
        if (empty($this->reviewElementPrereviewResultsApiContainer)) {
            $container = new ReviewElementPrereviewResultsApiContainer();
            $container->init($this, $this->getClient());
            $this->reviewElementPrereviewResultsApiContainer = $container;
        }
        return $this->reviewElementPrereviewResultsApiContainer;
    }


    /**
     * @return SceneSpecTagsApiContainer
     */
    public function sceneSpecTags()
    {
        if (empty($this->sceneSpecTagsApiContainer)) {
            $container = new SceneSpecTagsApiContainer();
            $container->init($this, $this->getClient());
            $this->sceneSpecTagsApiContainer = $container;
        }
        return $this->sceneSpecTagsApiContainer;
    }


    /**
     * @return ShopApiContainer
     */
    public function shop()
    {
        if (empty($this->shopApiContainer)) {
            $container = new ShopApiContainer();
            $container->init($this, $this->getClient());
            $this->shopApiContainer = $container;
        }
        return $this->shopApiContainer;
    }


    /**
     * @return SplitTestsApiContainer
     */
    public function splitTests()
    {
        if (empty($this->splitTestsApiContainer)) {
            $container = new SplitTestsApiContainer();
            $container->init($this, $this->getClient());
            $this->splitTestsApiContainer = $container;
        }
        return $this->splitTestsApiContainer;
    }


    /**
     * @return SubcustomerTransferApiContainer
     */
    public function subcustomerTransfer()
    {
        if (empty($this->subcustomerTransferApiContainer)) {
            $container = new SubcustomerTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->subcustomerTransferApiContainer = $container;
        }
        return $this->subcustomerTransferApiContainer;
    }


    /**
     * @return SystemStatusApiContainer
     */
    public function systemStatus()
    {
        if (empty($this->systemStatusApiContainer)) {
            $container = new SystemStatusApiContainer();
            $container->init($this, $this->getClient());
            $this->systemStatusApiContainer = $container;
        }
        return $this->systemStatusApiContainer;
    }


    /**
     * @return TargetingTagReportsApiContainer
     */
    public function targetingTagReports()
    {
        if (empty($this->targetingTagReportsApiContainer)) {
            $container = new TargetingTagReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingTagReportsApiContainer = $container;
        }
        return $this->targetingTagReportsApiContainer;
    }


    /**
     * @return TargetingTagsApiContainer
     */
    public function targetingTags()
    {
        if (empty($this->targetingTagsApiContainer)) {
            $container = new TargetingTagsApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingTagsApiContainer = $container;
        }
        return $this->targetingTagsApiContainer;
    }


    /**
     * @return TargetingTagsUvApiContainer
     */
    public function targetingTagsUv()
    {
        if (empty($this->targetingTagsUvApiContainer)) {
            $container = new TargetingTagsUvApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingTagsUvApiContainer = $container;
        }
        return $this->targetingTagsUvApiContainer;
    }


    /**
     * @return TargetingsApiContainer
     */
    public function targetings()
    {
        if (empty($this->targetingsApiContainer)) {
            $container = new TargetingsApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingsApiContainer = $container;
        }
        return $this->targetingsApiContainer;
    }


    /**
     * @return TargetingsShareApiContainer
     */
    public function targetingsShare()
    {
        if (empty($this->targetingsShareApiContainer)) {
            $container = new TargetingsShareApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingsShareApiContainer = $container;
        }
        return $this->targetingsShareApiContainer;
    }


    /**
     * @return TrackingReportsApiContainer
     */
    public function trackingReports()
    {
        if (empty($this->trackingReportsApiContainer)) {
            $container = new TrackingReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->trackingReportsApiContainer = $container;
        }
        return $this->trackingReportsApiContainer;
    }


    /**
     * @return UnionPositionPackagesApiContainer
     */
    public function unionPositionPackages()
    {
        if (empty($this->unionPositionPackagesApiContainer)) {
            $container = new UnionPositionPackagesApiContainer();
            $container->init($this, $this->getClient());
            $this->unionPositionPackagesApiContainer = $container;
        }
        return $this->unionPositionPackagesApiContainer;
    }


    /**
     * @return UserActionSetReportsApiContainer
     */
    public function userActionSetReports()
    {
        if (empty($this->userActionSetReportsApiContainer)) {
            $container = new UserActionSetReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->userActionSetReportsApiContainer = $container;
        }
        return $this->userActionSetReportsApiContainer;
    }


    /**
     * @return UserActionSetsApiContainer
     */
    public function userActionSets()
    {
        if (empty($this->userActionSetsApiContainer)) {
            $container = new UserActionSetsApiContainer();
            $container->init($this, $this->getClient());
            $this->userActionSetsApiContainer = $container;
        }
        return $this->userActionSetsApiContainer;
    }


    /**
     * @return UserActionsApiContainer
     */
    public function userActions()
    {
        if (empty($this->userActionsApiContainer)) {
            $container = new UserActionsApiContainer();
            $container->init($this, $this->getClient());
            $this->userActionsApiContainer = $container;
        }
        return $this->userActionsApiContainer;
    }


    /**
     * @return UserPropertiesApiContainer
     */
    public function userProperties()
    {
        if (empty($this->userPropertiesApiContainer)) {
            $container = new UserPropertiesApiContainer();
            $container->init($this, $this->getClient());
            $this->userPropertiesApiContainer = $container;
        }
        return $this->userPropertiesApiContainer;
    }


    /**
     * @return UserPropertySetsApiContainer
     */
    public function userPropertySets()
    {
        if (empty($this->userPropertySetsApiContainer)) {
            $container = new UserPropertySetsApiContainer();
            $container->init($this, $this->getClient());
            $this->userPropertySetsApiContainer = $container;
        }
        return $this->userPropertySetsApiContainer;
    }


    /**
     * @return VideomakerAutoadjustmentsApiContainer
     */
    public function videomakerAutoadjustments()
    {
        if (empty($this->videomakerAutoadjustmentsApiContainer)) {
            $container = new VideomakerAutoadjustmentsApiContainer();
            $container->init($this, $this->getClient());
            $this->videomakerAutoadjustmentsApiContainer = $container;
        }
        return $this->videomakerAutoadjustmentsApiContainer;
    }


    /**
     * @return VideomakerSubtitlesApiContainer
     */
    public function videomakerSubtitles()
    {
        if (empty($this->videomakerSubtitlesApiContainer)) {
            $container = new VideomakerSubtitlesApiContainer();
            $container->init($this, $this->getClient());
            $this->videomakerSubtitlesApiContainer = $container;
        }
        return $this->videomakerSubtitlesApiContainer;
    }


    /**
     * @return VideomakerTasksApiContainer
     */
    public function videomakerTasks()
    {
        if (empty($this->videomakerTasksApiContainer)) {
            $container = new VideomakerTasksApiContainer();
            $container->init($this, $this->getClient());
            $this->videomakerTasksApiContainer = $container;
        }
        return $this->videomakerTasksApiContainer;
    }


    /**
     * @return VideomakerVideocapturesApiContainer
     */
    public function videomakerVideocaptures()
    {
        if (empty($this->videomakerVideocapturesApiContainer)) {
            $container = new VideomakerVideocapturesApiContainer();
            $container->init($this, $this->getClient());
            $this->videomakerVideocapturesApiContainer = $container;
        }
        return $this->videomakerVideocapturesApiContainer;
    }


    /**
     * @return VideosApiContainer
     */
    public function videos()
    {
        if (empty($this->videosApiContainer)) {
            $container = new VideosApiContainer();
            $container->init($this, $this->getClient());
            $this->videosApiContainer = $container;
        }
        return $this->videosApiContainer;
    }


    /**
     * @return WechatAdFollowersApiContainer
     */
    public function wechatAdFollowers()
    {
        if (empty($this->wechatAdFollowersApiContainer)) {
            $container = new WechatAdFollowersApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdFollowersApiContainer = $container;
        }
        return $this->wechatAdFollowersApiContainer;
    }


    /**
     * @return WechatAdLabelsApiContainer
     */
    public function wechatAdLabels()
    {
        if (empty($this->wechatAdLabelsApiContainer)) {
            $container = new WechatAdLabelsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdLabelsApiContainer = $container;
        }
        return $this->wechatAdLabelsApiContainer;
    }


    /**
     * @return WechatAdvertiserApiContainer
     */
    public function wechatAdvertiser()
    {
        if (empty($this->wechatAdvertiserApiContainer)) {
            $container = new WechatAdvertiserApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdvertiserApiContainer = $container;
        }
        return $this->wechatAdvertiserApiContainer;
    }


    /**
     * @return WechatAdvertiserDetailApiContainer
     */
    public function wechatAdvertiserDetail()
    {
        if (empty($this->wechatAdvertiserDetailApiContainer)) {
            $container = new WechatAdvertiserDetailApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdvertiserDetailApiContainer = $container;
        }
        return $this->wechatAdvertiserDetailApiContainer;
    }


    /**
     * @return WechatAdvertiserLocalBusinessApiContainer
     */
    public function wechatAdvertiserLocalBusiness()
    {
        if (empty($this->wechatAdvertiserLocalBusinessApiContainer)) {
            $container = new WechatAdvertiserLocalBusinessApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdvertiserLocalBusinessApiContainer = $container;
        }
        return $this->wechatAdvertiserLocalBusinessApiContainer;
    }


    /**
     * @return WechatAdvertiserSpecificationApiContainer
     */
    public function wechatAdvertiserSpecification()
    {
        if (empty($this->wechatAdvertiserSpecificationApiContainer)) {
            $container = new WechatAdvertiserSpecificationApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdvertiserSpecificationApiContainer = $container;
        }
        return $this->wechatAdvertiserSpecificationApiContainer;
    }


    /**
     * @return WechatAgencyApiContainer
     */
    public function wechatAgency()
    {
        if (empty($this->wechatAgencyApiContainer)) {
            $container = new WechatAgencyApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAgencyApiContainer = $container;
        }
        return $this->wechatAgencyApiContainer;
    }


    /**
     * @return WechatDailyCostApiContainer
     */
    public function wechatDailyCost()
    {
        if (empty($this->wechatDailyCostApiContainer)) {
            $container = new WechatDailyCostApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatDailyCostApiContainer = $container;
        }
        return $this->wechatDailyCostApiContainer;
    }


    /**
     * @return WechatFundStatementsDetailedApiContainer
     */
    public function wechatFundStatementsDetailed()
    {
        if (empty($this->wechatFundStatementsDetailedApiContainer)) {
            $container = new WechatFundStatementsDetailedApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatFundStatementsDetailedApiContainer = $container;
        }
        return $this->wechatFundStatementsDetailedApiContainer;
    }


    /**
     * @return WechatFundTransferApiContainer
     */
    public function wechatFundTransfer()
    {
        if (empty($this->wechatFundTransferApiContainer)) {
            $container = new WechatFundTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatFundTransferApiContainer = $container;
        }
        return $this->wechatFundTransferApiContainer;
    }


    /**
     * @return WechatFundsApiContainer
     */
    public function wechatFunds()
    {
        if (empty($this->wechatFundsApiContainer)) {
            $container = new WechatFundsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatFundsApiContainer = $container;
        }
        return $this->wechatFundsApiContainer;
    }


    /**
     * @return WechatPagesApiContainer
     */
    public function wechatPages()
    {
        if (empty($this->wechatPagesApiContainer)) {
            $container = new WechatPagesApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesApiContainer = $container;
        }
        return $this->wechatPagesApiContainer;
    }


    /**
     * @return WechatPagesCsgroupStatusApiContainer
     */
    public function wechatPagesCsgroupStatus()
    {
        if (empty($this->wechatPagesCsgroupStatusApiContainer)) {
            $container = new WechatPagesCsgroupStatusApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesCsgroupStatusApiContainer = $container;
        }
        return $this->wechatPagesCsgroupStatusApiContainer;
    }


    /**
     * @return WechatPagesCsgroupUserApiContainer
     */
    public function wechatPagesCsgroupUser()
    {
        if (empty($this->wechatPagesCsgroupUserApiContainer)) {
            $container = new WechatPagesCsgroupUserApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesCsgroupUserApiContainer = $container;
        }
        return $this->wechatPagesCsgroupUserApiContainer;
    }


    /**
     * @return WechatPagesCsgrouplistApiContainer
     */
    public function wechatPagesCsgrouplist()
    {
        if (empty($this->wechatPagesCsgrouplistApiContainer)) {
            $container = new WechatPagesCsgrouplistApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesCsgrouplistApiContainer = $container;
        }
        return $this->wechatPagesCsgrouplistApiContainer;
    }


    /**
     * @return WechatPagesCustomApiContainer
     */
    public function wechatPagesCustom()
    {
        if (empty($this->wechatPagesCustomApiContainer)) {
            $container = new WechatPagesCustomApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesCustomApiContainer = $container;
        }
        return $this->wechatPagesCustomApiContainer;
    }


    /**
     * @return WechatPagesGrantinfoApiContainer
     */
    public function wechatPagesGrantinfo()
    {
        if (empty($this->wechatPagesGrantinfoApiContainer)) {
            $container = new WechatPagesGrantinfoApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesGrantinfoApiContainer = $container;
        }
        return $this->wechatPagesGrantinfoApiContainer;
    }


    /**
     * @return WechatQualificationsApiContainer
     */
    public function wechatQualifications()
    {
        if (empty($this->wechatQualificationsApiContainer)) {
            $container = new WechatQualificationsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatQualificationsApiContainer = $container;
        }
        return $this->wechatQualificationsApiContainer;
    }


    /**
     * @return WildcardsApiContainer
     */
    public function wildcards()
    {
        if (empty($this->wildcardsApiContainer)) {
            $container = new WildcardsApiContainer();
            $container->init($this, $this->getClient());
            $this->wildcardsApiContainer = $container;
        }
        return $this->wildcardsApiContainer;
    }


    /**
     * @return XijingComplexTemplateApiContainer
     */
    public function xijingComplexTemplate()
    {
        if (empty($this->xijingComplexTemplateApiContainer)) {
            $container = new XijingComplexTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingComplexTemplateApiContainer = $container;
        }
        return $this->xijingComplexTemplateApiContainer;
    }


    /**
     * @return XijingPageApiContainer
     */
    public function xijingPage()
    {
        if (empty($this->xijingPageApiContainer)) {
            $container = new XijingPageApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingPageApiContainer = $container;
        }
        return $this->xijingPageApiContainer;
    }


    /**
     * @return XijingPageByComponentsApiContainer
     */
    public function xijingPageByComponents()
    {
        if (empty($this->xijingPageByComponentsApiContainer)) {
            $container = new XijingPageByComponentsApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingPageByComponentsApiContainer = $container;
        }
        return $this->xijingPageByComponentsApiContainer;
    }


    /**
     * @return XijingPageInteractiveApiContainer
     */
    public function xijingPageInteractive()
    {
        if (empty($this->xijingPageInteractiveApiContainer)) {
            $container = new XijingPageInteractiveApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingPageInteractiveApiContainer = $container;
        }
        return $this->xijingPageInteractiveApiContainer;
    }


    /**
     * @return XijingPageListApiContainer
     */
    public function xijingPageList()
    {
        if (empty($this->xijingPageListApiContainer)) {
            $container = new XijingPageListApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingPageListApiContainer = $container;
        }
        return $this->xijingPageListApiContainer;
    }


    /**
     * @return XijingTemplateApiContainer
     */
    public function xijingTemplate()
    {
        if (empty($this->xijingTemplateApiContainer)) {
            $container = new XijingTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingTemplateApiContainer = $container;
        }
        return $this->xijingTemplateApiContainer;
    }


    /**
     * @return XijingTemplateListApiContainer
     */
    public function xijingTemplateList()
    {
        if (empty($this->xijingTemplateListApiContainer)) {
            $container = new XijingTemplateListApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingTemplateListApiContainer = $container;
        }
        return $this->xijingTemplateListApiContainer;
    }
}
