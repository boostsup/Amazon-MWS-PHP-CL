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
 *  @see MarketplaceWebServiceWebstore_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListSubscriptionsCountResult: MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceWebstore_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MarketplaceWebServiceWebstore_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResponse extends MarketplaceWebServiceWebstore_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListSubscriptionsCountResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceWebstore_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceWebstore_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListSubscriptionsCountResult property.
     *
     * @return ListSubscriptionsCountResult ListSubscriptionsCountResult.
     */
    public function getListSubscriptionsCountResult()
    {
        return $this->_fields['ListSubscriptionsCountResult']['FieldValue'];
    }

    /**
     * Set the value of the ListSubscriptionsCountResult property.
     *
     * @param MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResult listSubscriptionsCountResult
     * @return this instance
     */
    public function setListSubscriptionsCountResult($value)
    {
        $this->_fields['ListSubscriptionsCountResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListSubscriptionsCountResult is set.
     *
     * @return true if ListSubscriptionsCountResult is set.
     */
    public function isSetListSubscriptionsCountResult()
    {
                return !is_null($this->_fields['ListSubscriptionsCountResult']['FieldValue']);
            }

    /**
     * Set the value of ListSubscriptionsCountResult, return this.
     *
     * @param listSubscriptionsCountResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListSubscriptionsCountResult($value)
    {
        $this->setListSubscriptionsCountResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MarketplaceWebServiceWebstore_Model_ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
                return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MarketplaceWebServiceWebstore_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
                return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListSubscriptionsCountResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountResponse from provided XML. 
                                  Make sure that ListSubscriptionsCountResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<ListSubscriptionsCountResponse xmlns=\"http://mws.amazonservices.com/schema/Webstore/2014-09-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListSubscriptionsCountResponse>";
        return $xml;
    }

}
