<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/common/asset_set_types.proto

namespace Google\Ads\GoogleAds\V18\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data used to configure a location set populated from Google Business Profile
 * locations.
 * Different types of filters are AND'ed together, if they are specified.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.common.BusinessProfileLocationSet</code>
 */
class BusinessProfileLocationSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Immutable. The HTTP authorization token used to obtain
     * authorization.
     *
     * Generated from protobuf field <code>string http_authorization_token = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $http_authorization_token = '';
    /**
     * Required. Immutable. Email address of a Google Business Profile account or
     * email address of a manager of the Google Business Profile account.
     *
     * Generated from protobuf field <code>string email_address = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $email_address = '';
    /**
     * Used to filter Google Business Profile listings by business name. If
     * businessNameFilter is set, only listings with a matching business name are
     * candidates to be sync'd into Assets.
     *
     * Generated from protobuf field <code>string business_name_filter = 3;</code>
     */
    protected $business_name_filter = '';
    /**
     * Used to filter Google Business Profile listings by labels. If entries exist
     * in labelFilters, only listings that have any of the labels set are
     * candidates to be synchronized into Assets. If no entries exist in
     * labelFilters, then all listings are candidates for syncing.
     * Label filters are OR'ed together.
     *
     * Generated from protobuf field <code>repeated string label_filters = 4;</code>
     */
    private $label_filters;
    /**
     * Used to filter Google Business Profile listings by listing id. If entries
     * exist in listingIdFilters, only listings specified by the filters are
     * candidates to be synchronized into Assets. If no entries exist in
     * listingIdFilters, then all listings are candidates for syncing.
     * Listing ID filters are OR'ed together.
     *
     * Generated from protobuf field <code>repeated int64 listing_id_filters = 5;</code>
     */
    private $listing_id_filters;
    /**
     * Immutable. The account ID of the managed business whose locations are to be
     * used. If this field is not set, then all businesses accessible by the user
     * (specified by the emailAddress) are used.
     *
     * Generated from protobuf field <code>string business_account_id = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $business_account_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $http_authorization_token
     *           Required. Immutable. The HTTP authorization token used to obtain
     *           authorization.
     *     @type string $email_address
     *           Required. Immutable. Email address of a Google Business Profile account or
     *           email address of a manager of the Google Business Profile account.
     *     @type string $business_name_filter
     *           Used to filter Google Business Profile listings by business name. If
     *           businessNameFilter is set, only listings with a matching business name are
     *           candidates to be sync'd into Assets.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $label_filters
     *           Used to filter Google Business Profile listings by labels. If entries exist
     *           in labelFilters, only listings that have any of the labels set are
     *           candidates to be synchronized into Assets. If no entries exist in
     *           labelFilters, then all listings are candidates for syncing.
     *           Label filters are OR'ed together.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $listing_id_filters
     *           Used to filter Google Business Profile listings by listing id. If entries
     *           exist in listingIdFilters, only listings specified by the filters are
     *           candidates to be synchronized into Assets. If no entries exist in
     *           listingIdFilters, then all listings are candidates for syncing.
     *           Listing ID filters are OR'ed together.
     *     @type string $business_account_id
     *           Immutable. The account ID of the managed business whose locations are to be
     *           used. If this field is not set, then all businesses accessible by the user
     *           (specified by the emailAddress) are used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Common\AssetSetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Immutable. The HTTP authorization token used to obtain
     * authorization.
     *
     * Generated from protobuf field <code>string http_authorization_token = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHttpAuthorizationToken()
    {
        return $this->http_authorization_token;
    }

    /**
     * Required. Immutable. The HTTP authorization token used to obtain
     * authorization.
     *
     * Generated from protobuf field <code>string http_authorization_token = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHttpAuthorizationToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->http_authorization_token = $var;

        return $this;
    }

    /**
     * Required. Immutable. Email address of a Google Business Profile account or
     * email address of a manager of the Google Business Profile account.
     *
     * Generated from protobuf field <code>string email_address = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * Required. Immutable. Email address of a Google Business Profile account or
     * email address of a manager of the Google Business Profile account.
     *
     * Generated from protobuf field <code>string email_address = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_address = $var;

        return $this;
    }

    /**
     * Used to filter Google Business Profile listings by business name. If
     * businessNameFilter is set, only listings with a matching business name are
     * candidates to be sync'd into Assets.
     *
     * Generated from protobuf field <code>string business_name_filter = 3;</code>
     * @return string
     */
    public function getBusinessNameFilter()
    {
        return $this->business_name_filter;
    }

    /**
     * Used to filter Google Business Profile listings by business name. If
     * businessNameFilter is set, only listings with a matching business name are
     * candidates to be sync'd into Assets.
     *
     * Generated from protobuf field <code>string business_name_filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessNameFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name_filter = $var;

        return $this;
    }

    /**
     * Used to filter Google Business Profile listings by labels. If entries exist
     * in labelFilters, only listings that have any of the labels set are
     * candidates to be synchronized into Assets. If no entries exist in
     * labelFilters, then all listings are candidates for syncing.
     * Label filters are OR'ed together.
     *
     * Generated from protobuf field <code>repeated string label_filters = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabelFilters()
    {
        return $this->label_filters;
    }

    /**
     * Used to filter Google Business Profile listings by labels. If entries exist
     * in labelFilters, only listings that have any of the labels set are
     * candidates to be synchronized into Assets. If no entries exist in
     * labelFilters, then all listings are candidates for syncing.
     * Label filters are OR'ed together.
     *
     * Generated from protobuf field <code>repeated string label_filters = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabelFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->label_filters = $arr;

        return $this;
    }

    /**
     * Used to filter Google Business Profile listings by listing id. If entries
     * exist in listingIdFilters, only listings specified by the filters are
     * candidates to be synchronized into Assets. If no entries exist in
     * listingIdFilters, then all listings are candidates for syncing.
     * Listing ID filters are OR'ed together.
     *
     * Generated from protobuf field <code>repeated int64 listing_id_filters = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getListingIdFilters()
    {
        return $this->listing_id_filters;
    }

    /**
     * Used to filter Google Business Profile listings by listing id. If entries
     * exist in listingIdFilters, only listings specified by the filters are
     * candidates to be synchronized into Assets. If no entries exist in
     * listingIdFilters, then all listings are candidates for syncing.
     * Listing ID filters are OR'ed together.
     *
     * Generated from protobuf field <code>repeated int64 listing_id_filters = 5;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setListingIdFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->listing_id_filters = $arr;

        return $this;
    }

    /**
     * Immutable. The account ID of the managed business whose locations are to be
     * used. If this field is not set, then all businesses accessible by the user
     * (specified by the emailAddress) are used.
     *
     * Generated from protobuf field <code>string business_account_id = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getBusinessAccountId()
    {
        return $this->business_account_id;
    }

    /**
     * Immutable. The account ID of the managed business whose locations are to be
     * used. If this field is not set, then all businesses accessible by the user
     * (specified by the emailAddress) are used.
     *
     * Generated from protobuf field <code>string business_account_id = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_account_id = $var;

        return $this;
    }

}

