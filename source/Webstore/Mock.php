<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Webstore
 * @version  2014-09-01
 * Library Version: 2015-03-12
 * Generated: Wed Mar 11 20:32:23 GMT 2015
 */

/**
 *  @see MarketplaceWebServiceWebstore_Interface
 */
require_once (dirname(__FILE__) . '/Interface.php'); 

class MarketplaceWebServiceWebstore_Mock implements MarketplaceWebServiceWebstore_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Subscription Details
     * Returns a list of active subscriptions based on the list of subscription identifiers.
     *         Subscription identifier can be fetched from ListSubscriptionsCount and ListActiveSubscriptionByNextToken APIs.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceWebstore_Model_GetSubscriptionDetails request or MarketplaceWebServiceWebstore_Model_GetSubscriptionDetails object itself
     * @see MarketplaceWebServiceWebstore_Model_GetSubscriptionDetails
     * @return MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResponse
     *
     * @throws MarketplaceWebServiceWebstore_Exception
     */
    public function getSubscriptionDetails($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetSubscriptionDetailsResponse.php');
        return MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResponse::fromXML($this->_invoke('GetSubscriptionDetails'));
    }

    /**
     * List Subscriptions Count
     * Returns a list of active subscriptions for the seller.
     *         In the case there are more subscription results than can be returned
     *         in a single response, a next token is provided which can be used
     *         to obtain more results via ListSubscriptionsCountByNextToken.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceWebstore_Model_ListSubscriptionsCount request or MarketplaceWebServiceWebstore_Model_ListSubscriptionsCount object itself
     * @see MarketplaceWebServiceWebstore_Model_ListSubscriptionsCount
     * @return MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResponse
     *
     * @throws MarketplaceWebServiceWebstore_Exception
     */
    public function listSubscriptionsCount($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListSubscriptionsCountResponse.php');
        return MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResponse::fromXML($this->_invoke('ListSubscriptionsCount'));
    }

    /**
     * List Subscriptions Count By Next Token
     * Returns a list of active subscription based on the next token generated by ListSubscriptionsCount or ListSubscriptionsCountByNextToken API.
     *         In the case there are more subscription results than can be returned
     *         in a single response, a next token is provided which can be used
     *         to obtain more results via same API.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountByNextToken request or MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountByNextToken object itself
     * @see MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountByNextToken
     * @return MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountByNextTokenResponse
     *
     * @throws MarketplaceWebServiceWebstore_Exception
     */
    public function listSubscriptionsCountByNextToken($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListSubscriptionsCountByNextTokenResponse.php');
        return MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountByNextTokenResponse::fromXML($this->_invoke('ListSubscriptionsCountByNextToken'));
    }

    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceWebstore_Model_GetServiceStatus request or MarketplaceWebServiceWebstore_Model_GetServiceStatus object itself
     * @see MarketplaceWebServiceWebstore_Model_GetServiceStatus
     * @return MarketplaceWebServiceWebstore_Model_GetServiceStatusResponse
     *
     * @throws MarketplaceWebServiceWebstore_Exception
     */
    public function getServiceStatus($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return MarketplaceWebServiceWebstore_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
