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

/**
 * Service definition for ShoppingContent (v2).
 *
 * <p>
 * Manage product items, inventory, and Merchant Center accounts for Google
 * Shopping.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/shopping-content" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_ShoppingContent extends Google_Service
{
  /** Manage your product listings and accounts for Google Shopping. */
  const CONTENT =
      "https://www.googleapis.com/auth/content";

  public $accounts;
  public $accountshipping;
  public $accountstatuses;
  public $accounttax;
  public $datafeeds;
  public $datafeedstatuses;
  public $inventory;
  public $orders;
  public $products;
  public $productstatuses;
  

  /**
   * Constructs the internal representation of the ShoppingContent service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'content/v2/';
    $this->version = 'v2';
    $this->serviceName = 'content';

    $this->accounts = new Google_Service_ShoppingContent_Accounts_Resource(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'authinfo' => array(
              'path' => 'accounts/authinfo',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'custombatch' => array(
              'path' => 'accounts/batch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => '{merchantId}/accounts/{accountId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'get' => array(
              'path' => '{merchantId}/accounts/{accountId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{merchantId}/accounts',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => '{merchantId}/accounts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => '{merchantId}/accounts/{accountId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => '{merchantId}/accounts/{accountId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->accountshipping = new Google_Service_ShoppingContent_Accountshipping_Resource(
        $this,
        $this->serviceName,
        'accountshipping',
        array(
          'methods' => array(
            'custombatch' => array(
              'path' => 'accountshipping/batch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'get' => array(
              'path' => '{merchantId}/accountshipping/{accountId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{merchantId}/accountshipping',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => '{merchantId}/accountshipping/{accountId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => '{merchantId}/accountshipping/{accountId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->accountstatuses = new Google_Service_ShoppingContent_Accountstatuses_Resource(
        $this,
        $this->serviceName,
        'accountstatuses',
        array(
          'methods' => array(
            'custombatch' => array(
              'path' => 'accountstatuses/batch',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => '{merchantId}/accountstatuses/{accountId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{merchantId}/accountstatuses',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounttax = new Google_Service_ShoppingContent_Accounttax_Resource(
        $this,
        $this->serviceName,
        'accounttax',
        array(
          'methods' => array(
            'custombatch' => array(
              'path' => 'accounttax/batch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'get' => array(
              'path' => '{merchantId}/accounttax/{accountId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{merchantId}/accounttax',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => '{merchantId}/accounttax/{accountId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => '{merchantId}/accounttax/{accountId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->datafeeds = new Google_Service_ShoppingContent_Datafeeds_Resource(
        $this,
        $this->serviceName,
        'datafeeds',
        array(
          'methods' => array(
            'custombatch' => array(
              'path' => 'datafeeds/batch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => '{merchantId}/datafeeds/{datafeedId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'datafeedId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'get' => array(
              'path' => '{merchantId}/datafeeds/{datafeedId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'datafeedId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{merchantId}/datafeeds',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => '{merchantId}/datafeeds',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => '{merchantId}/datafeeds/{datafeedId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'datafeedId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => '{merchantId}/datafeeds/{datafeedId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'datafeedId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->datafeedstatuses = new Google_Service_ShoppingContent_Datafeedstatuses_Resource(
        $this,
        $this->serviceName,
        'datafeedstatuses',
        array(
          'methods' => array(
            'custombatch' => array(
              'path' => 'datafeedstatuses/batch',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => '{merchantId}/datafeedstatuses/{datafeedId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'datafeedId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{merchantId}/datafeedstatuses',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->inventory = new Google_Service_ShoppingContent_Inventory_Resource(
        $this,
        $this->serviceName,
        'inventory',
        array(
          'methods' => array(
            'custombatch' => array(
              'path' => 'inventory/batch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'set' => array(
              'path' => '{merchantId}/inventory/{storeCode}/products/{productId}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'storeCode' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->orders = new Google_Service_ShoppingContent_Orders_Resource(
        $this,
        $this->serviceName,
        'orders',
        array(
          'methods' => array(
            'acknowledge' => array(
              'path' => '{merchantId}/orders/{orderId}/acknowledge',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'advancetestorder' => array(
              'path' => '{merchantId}/testorders/{orderId}/advance',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'cancel' => array(
              'path' => '{merchantId}/orders/{orderId}/cancel',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'cancellineitem' => array(
              'path' => '{merchantId}/orders/{orderId}/cancelLineItem',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'createtestorder' => array(
              'path' => '{merchantId}/testorders',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'custombatch' => array(
              'path' => 'orders/batch',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => '{merchantId}/orders/{orderId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getbymerchantorderid' => array(
              'path' => '{merchantId}/ordersbymerchantid/{merchantOrderId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'merchantOrderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'gettestordertemplate' => array(
              'path' => '{merchantId}/testordertemplates/{templateName}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{merchantId}/orders',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acknowledged' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'placedDateEnd' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'placedDateStart' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'statuses' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'refund' => array(
              'path' => '{merchantId}/orders/{orderId}/refund',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'returnlineitem' => array(
              'path' => '{merchantId}/orders/{orderId}/returnLineItem',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'shiplineitems' => array(
              'path' => '{merchantId}/orders/{orderId}/shipLineItems',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updatemerchantorderid' => array(
              'path' => '{merchantId}/orders/{orderId}/updateMerchantOrderId',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateshipment' => array(
              'path' => '{merchantId}/orders/{orderId}/updateShipment',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->products = new Google_Service_ShoppingContent_Products_Resource(
        $this,
        $this->serviceName,
        'products',
        array(
          'methods' => array(
            'custombatch' => array(
              'path' => 'products/batch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => '{merchantId}/products/{productId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'get' => array(
              'path' => '{merchantId}/products/{productId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{merchantId}/products',
              'httpMethod' => 'POST',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dryRun' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => '{merchantId}/products',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeInvalidInsertedItems' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->productstatuses = new Google_Service_ShoppingContent_Productstatuses_Resource(
        $this,
        $this->serviceName,
        'productstatuses',
        array(
          'methods' => array(
            'custombatch' => array(
              'path' => 'productstatuses/batch',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => '{merchantId}/productstatuses/{productId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{merchantId}/productstatuses',
              'httpMethod' => 'GET',
              'parameters' => array(
                'merchantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeInvalidInsertedItems' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $accounts = $contentService->accounts;
 *  </code>
 */
class Google_Service_ShoppingContent_Accounts_Resource extends Google_Service_Resource
{

  /**
   * Returns information about the authenticated user. (accounts.authinfo)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_AccountsAuthInfoResponse
   */
  public function authinfo($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('authinfo', array($params), "Google_Service_ShoppingContent_AccountsAuthInfoResponse");
  }

  /**
   * Retrieves, inserts, updates, and deletes multiple Merchant Center
   * (sub-)accounts in a single request. (accounts.custombatch)
   *
   * @param Google_AccountsCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_AccountsCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_AccountsCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_AccountsCustomBatchResponse");
  }

  /**
   * Deletes a Merchant Center sub-account. (accounts.delete)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   */
  public function delete($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Retrieves a Merchant Center account. (accounts.get)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_Account
   */
  public function get($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_Account");
  }

  /**
   * Creates a Merchant Center sub-account. (accounts.insert)
   *
   * @param string $merchantId The ID of the managing account.
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_Account
   */
  public function insert($merchantId, Google_Service_ShoppingContent_Account $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_ShoppingContent_Account");
  }

  /**
   * Lists the sub-accounts in your Merchant Center account.
   * (accounts.listAccounts)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults The maximum number of accounts to return in the
   * response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_AccountsListResponse
   */
  public function listAccounts($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_AccountsListResponse");
  }

  /**
   * Updates a Merchant Center account. This method supports patch semantics.
   * (accounts.patch)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account.
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_Account
   */
  public function patch($merchantId, $accountId, Google_Service_ShoppingContent_Account $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ShoppingContent_Account");
  }

  /**
   * Updates a Merchant Center account. (accounts.update)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account.
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_Account
   */
  public function update($merchantId, $accountId, Google_Service_ShoppingContent_Account $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_ShoppingContent_Account");
  }
}

/**
 * The "accountshipping" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $accountshipping = $contentService->accountshipping;
 *  </code>
 */
class Google_Service_ShoppingContent_Accountshipping_Resource extends Google_Service_Resource
{

  /**
   * Retrieves and updates the shipping settings of multiple accounts in a single
   * request. (accountshipping.custombatch)
   *
   * @param Google_AccountshippingCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_AccountshippingCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_AccountshippingCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_AccountshippingCustomBatchResponse");
  }

  /**
   * Retrieves the shipping settings of the account. (accountshipping.get)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account for which to get/update
   * account shipping settings.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_AccountShipping
   */
  public function get($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_AccountShipping");
  }

  /**
   * Lists the shipping settings of the sub-accounts in your Merchant Center
   * account. (accountshipping.listAccountshipping)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults The maximum number of shipping settings to
   * return in the response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_AccountshippingListResponse
   */
  public function listAccountshipping($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_AccountshippingListResponse");
  }

  /**
   * Updates the shipping settings of the account. This method supports patch
   * semantics. (accountshipping.patch)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account for which to get/update
   * account shipping settings.
   * @param Google_AccountShipping $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_AccountShipping
   */
  public function patch($merchantId, $accountId, Google_Service_ShoppingContent_AccountShipping $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ShoppingContent_AccountShipping");
  }

  /**
   * Updates the shipping settings of the account. (accountshipping.update)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account for which to get/update
   * account shipping settings.
   * @param Google_AccountShipping $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_AccountShipping
   */
  public function update($merchantId, $accountId, Google_Service_ShoppingContent_AccountShipping $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_ShoppingContent_AccountShipping");
  }
}

/**
 * The "accountstatuses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $accountstatuses = $contentService->accountstatuses;
 *  </code>
 */
class Google_Service_ShoppingContent_Accountstatuses_Resource extends Google_Service_Resource
{

  /**
   * (accountstatuses.custombatch)
   *
   * @param Google_AccountstatusesCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_AccountstatusesCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_AccountstatusesCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_AccountstatusesCustomBatchResponse");
  }

  /**
   * Retrieves the status of a Merchant Center account. (accountstatuses.get)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_AccountStatus
   */
  public function get($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_AccountStatus");
  }

  /**
   * Lists the statuses of the sub-accounts in your Merchant Center account.
   * (accountstatuses.listAccountstatuses)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults The maximum number of account statuses to return
   * in the response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_AccountstatusesListResponse
   */
  public function listAccountstatuses($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_AccountstatusesListResponse");
  }
}

/**
 * The "accounttax" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $accounttax = $contentService->accounttax;
 *  </code>
 */
class Google_Service_ShoppingContent_Accounttax_Resource extends Google_Service_Resource
{

  /**
   * Retrieves and updates tax settings of multiple accounts in a single request.
   * (accounttax.custombatch)
   *
   * @param Google_AccounttaxCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_AccounttaxCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_AccounttaxCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_AccounttaxCustomBatchResponse");
  }

  /**
   * Retrieves the tax settings of the account. (accounttax.get)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account for which to get/update
   * account tax settings.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_AccountTax
   */
  public function get($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_AccountTax");
  }

  /**
   * Lists the tax settings of the sub-accounts in your Merchant Center account.
   * (accounttax.listAccounttax)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults The maximum number of tax settings to return in
   * the response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_AccounttaxListResponse
   */
  public function listAccounttax($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_AccounttaxListResponse");
  }

  /**
   * Updates the tax settings of the account. This method supports patch
   * semantics. (accounttax.patch)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account for which to get/update
   * account tax settings.
   * @param Google_AccountTax $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_AccountTax
   */
  public function patch($merchantId, $accountId, Google_Service_ShoppingContent_AccountTax $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ShoppingContent_AccountTax");
  }

  /**
   * Updates the tax settings of the account. (accounttax.update)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $accountId The ID of the account for which to get/update
   * account tax settings.
   * @param Google_AccountTax $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_AccountTax
   */
  public function update($merchantId, $accountId, Google_Service_ShoppingContent_AccountTax $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_ShoppingContent_AccountTax");
  }
}

/**
 * The "datafeeds" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $datafeeds = $contentService->datafeeds;
 *  </code>
 */
class Google_Service_ShoppingContent_Datafeeds_Resource extends Google_Service_Resource
{

  /**
   * (datafeeds.custombatch)
   *
   * @param Google_DatafeedsCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_DatafeedsCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_DatafeedsCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_DatafeedsCustomBatchResponse");
  }

  /**
   * Deletes a datafeed from your Merchant Center account. (datafeeds.delete)
   *
   * @param string $merchantId
   * @param string $datafeedId
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   */
  public function delete($merchantId, $datafeedId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'datafeedId' => $datafeedId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Retrieves a datafeed from your Merchant Center account. (datafeeds.get)
   *
   * @param string $merchantId
   * @param string $datafeedId
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_Datafeed
   */
  public function get($merchantId, $datafeedId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'datafeedId' => $datafeedId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_Datafeed");
  }

  /**
   * Registers a datafeed with your Merchant Center account. (datafeeds.insert)
   *
   * @param string $merchantId
   * @param Google_Datafeed $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_Datafeed
   */
  public function insert($merchantId, Google_Service_ShoppingContent_Datafeed $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_ShoppingContent_Datafeed");
  }

  /**
   * Lists the datafeeds in your Merchant Center account.
   * (datafeeds.listDatafeeds)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults The maximum number of products to return in the
   * response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_DatafeedsListResponse
   */
  public function listDatafeeds($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_DatafeedsListResponse");
  }

  /**
   * Updates a datafeed of your Merchant Center account. This method supports
   * patch semantics. (datafeeds.patch)
   *
   * @param string $merchantId
   * @param string $datafeedId
   * @param Google_Datafeed $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_Datafeed
   */
  public function patch($merchantId, $datafeedId, Google_Service_ShoppingContent_Datafeed $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'datafeedId' => $datafeedId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ShoppingContent_Datafeed");
  }

  /**
   * Updates a datafeed of your Merchant Center account. (datafeeds.update)
   *
   * @param string $merchantId
   * @param string $datafeedId
   * @param Google_Datafeed $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_Datafeed
   */
  public function update($merchantId, $datafeedId, Google_Service_ShoppingContent_Datafeed $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'datafeedId' => $datafeedId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_ShoppingContent_Datafeed");
  }
}

/**
 * The "datafeedstatuses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $datafeedstatuses = $contentService->datafeedstatuses;
 *  </code>
 */
class Google_Service_ShoppingContent_Datafeedstatuses_Resource extends Google_Service_Resource
{

  /**
   * (datafeedstatuses.custombatch)
   *
   * @param Google_DatafeedstatusesCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_DatafeedstatusesCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_DatafeedstatusesCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_DatafeedstatusesCustomBatchResponse");
  }

  /**
   * Retrieves the status of a datafeed from your Merchant Center account.
   * (datafeedstatuses.get)
   *
   * @param string $merchantId
   * @param string $datafeedId
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_DatafeedStatus
   */
  public function get($merchantId, $datafeedId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'datafeedId' => $datafeedId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_DatafeedStatus");
  }

  /**
   * Lists the statuses of the datafeeds in your Merchant Center account.
   * (datafeedstatuses.listDatafeedstatuses)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults The maximum number of products to return in the
   * response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_DatafeedstatusesListResponse
   */
  public function listDatafeedstatuses($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_DatafeedstatusesListResponse");
  }
}

/**
 * The "inventory" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $inventory = $contentService->inventory;
 *  </code>
 */
class Google_Service_ShoppingContent_Inventory_Resource extends Google_Service_Resource
{

  /**
   * Updates price and availability for multiple products or stores in a single
   * request. This operation does not update the expiration date of the products.
   * (inventory.custombatch)
   *
   * @param Google_InventoryCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_InventoryCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_InventoryCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_InventoryCustomBatchResponse");
  }

  /**
   * Updates price and availability of a product in your Merchant Center account.
   * This operation does not update the expiration date of the product.
   * (inventory.set)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $storeCode The code of the store for which to update price and
   * availability. Use online to update price and availability of an online
   * product.
   * @param string $productId The ID of the product for which to update price and
   * availability.
   * @param Google_InventorySetRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_InventorySetResponse
   */
  public function set($merchantId, $storeCode, $productId, Google_Service_ShoppingContent_InventorySetRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'storeCode' => $storeCode, 'productId' => $productId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('set', array($params), "Google_Service_ShoppingContent_InventorySetResponse");
  }
}

/**
 * The "orders" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $orders = $contentService->orders;
 *  </code>
 */
class Google_Service_ShoppingContent_Orders_Resource extends Google_Service_Resource
{

  /**
   * Marks an order as acknowledged. (orders.acknowledge)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersAcknowledgeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersAcknowledgeResponse
   */
  public function acknowledge($merchantId, $orderId, Google_Service_ShoppingContent_OrdersAcknowledgeRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('acknowledge', array($params), "Google_Service_ShoppingContent_OrdersAcknowledgeResponse");
  }

  /**
   * Sandbox only. Moves a test order from state "inProgress" to state
   * "pendingShipment". (orders.advancetestorder)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the test order to modify.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersAdvanceTestOrderResponse
   */
  public function advancetestorder($merchantId, $orderId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId);
    $params = array_merge($params, $optParams);
    return $this->call('advancetestorder', array($params), "Google_Service_ShoppingContent_OrdersAdvanceTestOrderResponse");
  }

  /**
   * Cancels all line items in an order. (orders.cancel)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order to cancel.
   * @param Google_OrdersCancelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersCancelResponse
   */
  public function cancel($merchantId, $orderId, Google_Service_ShoppingContent_OrdersCancelRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), "Google_Service_ShoppingContent_OrdersCancelResponse");
  }

  /**
   * Cancels a line item. (orders.cancellineitem)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersCancelLineItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersCancelLineItemResponse
   */
  public function cancellineitem($merchantId, $orderId, Google_Service_ShoppingContent_OrdersCancelLineItemRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancellineitem', array($params), "Google_Service_ShoppingContent_OrdersCancelLineItemResponse");
  }

  /**
   * Sandbox only. Creates a test order. (orders.createtestorder)
   *
   * @param string $merchantId The ID of the managing account.
   * @param Google_OrdersCreateTestOrderRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersCreateTestOrderResponse
   */
  public function createtestorder($merchantId, Google_Service_ShoppingContent_OrdersCreateTestOrderRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createtestorder', array($params), "Google_Service_ShoppingContent_OrdersCreateTestOrderResponse");
  }

  /**
   * Retrieves or modifies multiple orders in a single request.
   * (orders.custombatch)
   *
   * @param Google_OrdersCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_OrdersCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_OrdersCustomBatchResponse");
  }

  /**
   * Retrieves an order from your Merchant Center account. (orders.get)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_Order
   */
  public function get($merchantId, $orderId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_Order");
  }

  /**
   * Retrieves an order using merchant order id. (orders.getbymerchantorderid)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $merchantOrderId The merchant order id to be looked for.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersGetByMerchantOrderIdResponse
   */
  public function getbymerchantorderid($merchantId, $merchantOrderId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'merchantOrderId' => $merchantOrderId);
    $params = array_merge($params, $optParams);
    return $this->call('getbymerchantorderid', array($params), "Google_Service_ShoppingContent_OrdersGetByMerchantOrderIdResponse");
  }

  /**
   * Sandbox only. Retrieves an order template that can be used to quickly create
   * a new order in sandbox. (orders.gettestordertemplate)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $templateName The name of the template to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersGetTestOrderTemplateResponse
   */
  public function gettestordertemplate($merchantId, $templateName, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'templateName' => $templateName);
    $params = array_merge($params, $optParams);
    return $this->call('gettestordertemplate', array($params), "Google_Service_ShoppingContent_OrdersGetTestOrderTemplateResponse");
  }

  /**
   * Lists the orders in your Merchant Center account. (orders.listOrders)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acknowledged Obtains orders that match the acknowledgement
   * status. When set to true, obtains orders that have been acknowledged. When
   * false, obtains orders that have not been acknowledged. We recommend using
   * this filter set to false, in conjunction with the acknowledge call, such that
   * only un-acknowledged orders are returned.
   * @opt_param string maxResults The maximum number of orders to return in the
   * response, used for paging. The default value is 25 orders per page, and the
   * maximum allowed value is 250 orders per page. Known issue: All List calls
   * will return all Orders without limit regardless of the value of this field.
   * @opt_param string orderBy The ordering of the returned list. The only
   * supported value are placedDate desc and placedDate asc for now, which returns
   * orders sorted by placement date. "placedDate desc" stands for listing orders
   * by placement date, from oldest to most recent. "placedDate asc" stands for
   * listing orders by placement date, from most recent to oldest. In future
   * releases we'll support other sorting criteria.
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param string placedDateEnd Obtains orders placed before this date
   * (exclusively), in ISO 8601 format.
   * @opt_param string placedDateStart Obtains orders placed after this date
   * (inclusively), in ISO 8601 format.
   * @opt_param string statuses Obtains orders that match any of the specified
   * statuses. Multiple values can be specified with comma separation.
   * Additionally, please note that active is a shortcut for pendingShipment and
   * partiallyShipped, and completed is a shortcut for shipped ,
   * partiallyDelivered, delivered, partiallyReturned, returned, and canceled.
   * @return Google_Service_ShoppingContent_OrdersListResponse
   */
  public function listOrders($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_OrdersListResponse");
  }

  /**
   * Refund a portion of the order, up to the full amount paid. (orders.refund)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order to refund.
   * @param Google_OrdersRefundRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersRefundResponse
   */
  public function refund($merchantId, $orderId, Google_Service_ShoppingContent_OrdersRefundRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('refund', array($params), "Google_Service_ShoppingContent_OrdersRefundResponse");
  }

  /**
   * Returns a line item. (orders.returnlineitem)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersReturnLineItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersReturnLineItemResponse
   */
  public function returnlineitem($merchantId, $orderId, Google_Service_ShoppingContent_OrdersReturnLineItemRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('returnlineitem', array($params), "Google_Service_ShoppingContent_OrdersReturnLineItemResponse");
  }

  /**
   * Marks line item(s) as shipped. (orders.shiplineitems)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersShipLineItemsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersShipLineItemsResponse
   */
  public function shiplineitems($merchantId, $orderId, Google_Service_ShoppingContent_OrdersShipLineItemsRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('shiplineitems', array($params), "Google_Service_ShoppingContent_OrdersShipLineItemsResponse");
  }

  /**
   * Updates the merchant order ID for a given order.
   * (orders.updatemerchantorderid)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersUpdateMerchantOrderIdRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdResponse
   */
  public function updatemerchantorderid($merchantId, $orderId, Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updatemerchantorderid', array($params), "Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdResponse");
  }

  /**
   * Updates a shipment's status, carrier, and/or tracking ID.
   * (orders.updateshipment)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersUpdateShipmentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersUpdateShipmentResponse
   */
  public function updateshipment($merchantId, $orderId, Google_Service_ShoppingContent_OrdersUpdateShipmentRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateshipment', array($params), "Google_Service_ShoppingContent_OrdersUpdateShipmentResponse");
  }
}

/**
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $products = $contentService->products;
 *  </code>
 */
class Google_Service_ShoppingContent_Products_Resource extends Google_Service_Resource
{

  /**
   * Retrieves, inserts, and deletes multiple products in a single request.
   * (products.custombatch)
   *
   * @param Google_ProductsCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_ProductsCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_ProductsCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_ProductsCustomBatchResponse");
  }

  /**
   * Deletes a product from your Merchant Center account. (products.delete)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $productId The ID of the product.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   */
  public function delete($merchantId, $productId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'productId' => $productId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Retrieves a product from your Merchant Center account. (products.get)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $productId The ID of the product.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_Product
   */
  public function get($merchantId, $productId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'productId' => $productId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_Product");
  }

  /**
   * Uploads a product to your Merchant Center account. (products.insert)
   *
   * @param string $merchantId The ID of the managing account.
   * @param Google_Product $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool dryRun Flag to run the request in dry-run mode.
   * @return Google_Service_ShoppingContent_Product
   */
  public function insert($merchantId, Google_Service_ShoppingContent_Product $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_ShoppingContent_Product");
  }

  /**
   * Lists the products in your Merchant Center account. (products.listProducts)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeInvalidInsertedItems Flag to include the invalid
   * inserted items in the result of the list request. By default the invalid
   * items are not shown (the default value is false).
   * @opt_param string maxResults The maximum number of products to return in the
   * response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_ProductsListResponse
   */
  public function listProducts($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_ProductsListResponse");
  }
}

/**
 * The "productstatuses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $productstatuses = $contentService->productstatuses;
 *  </code>
 */
class Google_Service_ShoppingContent_Productstatuses_Resource extends Google_Service_Resource
{

  /**
   * Gets the statuses of multiple products in a single request.
   * (productstatuses.custombatch)
   *
   * @param Google_ProductstatusesCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ProductstatusesCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_ProductstatusesCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_ProductstatusesCustomBatchResponse");
  }

  /**
   * Gets the status of a product from your Merchant Center account.
   * (productstatuses.get)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $productId The ID of the product.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ProductStatus
   */
  public function get($merchantId, $productId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'productId' => $productId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_ProductStatus");
  }

  /**
   * Lists the statuses of the products in your Merchant Center account.
   * (productstatuses.listProductstatuses)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeInvalidInsertedItems Flag to include the invalid
   * inserted items in the result of the list request. By default the invalid
   * items are not shown (the default value is false).
   * @opt_param string maxResults The maximum number of product statuses to return
   * in the response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_ProductstatusesListResponse
   */
  public function listProductstatuses($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_ProductstatusesListResponse");
  }
}




class Google_Service_ShoppingContent_Account extends Google_Collection
{
  public $adultContent;
  public $id;
  public $kind;
  public $name;
  public $reviewsUrl;
  public $sellerId;
  public $websiteUrl;
  protected $collection_key = 'users';
  protected $internal_gapi_mappings = array(
  );
  protected $adwordsLinksType = 'Google_Service_ShoppingContent_AccountAdwordsLink';
  protected $adwordsLinksDataType = 'array';
  protected $usersType = 'Google_Service_ShoppingContent_AccountUser';
  protected $usersDataType = 'array';

  public function getAdultContent()
  {
    return $this->adultContent;
  }

  public function setAdultContent($adultContent)
  {
    $this->adultContent = $adultContent;
  }

  public function setAdwordsLinks($adwordsLinks)
  {
    $this->adwordsLinks = $adwordsLinks;
  }
  public function getAdwordsLinks()
  {
    return $this->adwordsLinks;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getReviewsUrl()
  {
    return $this->reviewsUrl;
  }

  public function setReviewsUrl($reviewsUrl)
  {
    $this->reviewsUrl = $reviewsUrl;
  }

  public function getSellerId()
  {
    return $this->sellerId;
  }

  public function setSellerId($sellerId)
  {
    $this->sellerId = $sellerId;
  }

  public function setUsers($users)
  {
    $this->users = $users;
  }
  public function getUsers()
  {
    return $this->users;
  }

  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }

  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
}

class Google_Service_ShoppingContent_AccountAdwordsLink extends Google_Model
{
  public $adwordsId;
  public $status;
  protected $internal_gapi_mappings = array(
  );

  public function getAdwordsId()
  {
    return $this->adwordsId;
  }

  public function setAdwordsId($adwordsId)
  {
    $this->adwordsId = $adwordsId;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }
}

class Google_Service_ShoppingContent_AccountIdentifier extends Google_Model
{
  public $aggregatorId;
  public $merchantId;
  protected $internal_gapi_mappings = array(
  );

  public function getAggregatorId()
  {
    return $this->aggregatorId;
  }

  public function setAggregatorId($aggregatorId)
  {
    $this->aggregatorId = $aggregatorId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
}

class Google_Service_ShoppingContent_AccountShipping extends Google_Collection
{
  public $accountId;
  public $kind;
  protected $collection_key = 'services';
  protected $internal_gapi_mappings = array(
  );
  protected $carrierRatesType = 'Google_Service_ShoppingContent_AccountShippingCarrierRate';
  protected $carrierRatesDataType = 'array';
  protected $locationGroupsType = 'Google_Service_ShoppingContent_AccountShippingLocationGroup';
  protected $locationGroupsDataType = 'array';
  protected $rateTablesType = 'Google_Service_ShoppingContent_AccountShippingRateTable';
  protected $rateTablesDataType = 'array';
  protected $servicesType = 'Google_Service_ShoppingContent_AccountShippingShippingService';
  protected $servicesDataType = 'array';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function setCarrierRates($carrierRates)
  {
    $this->carrierRates = $carrierRates;
  }
  public function getCarrierRates()
  {
    return $this->carrierRates;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLocationGroups($locationGroups)
  {
    $this->locationGroups = $locationGroups;
  }
  public function getLocationGroups()
  {
    return $this->locationGroups;
  }
  public function setRateTables($rateTables)
  {
    $this->rateTables = $rateTables;
  }
  public function getRateTables()
  {
    return $this->rateTables;
  }
  public function setServices($services)
  {
    $this->services = $services;
  }
  public function getServices()
  {
    return $this->services;
  }
}

class Google_Service_ShoppingContent_AccountShippingCarrierRate extends Google_Model
{
  public $carrier;
  public $carrierService;
  public $modifierPercent;
  public $name;
  public $saleCountry;
  public $shippingOrigin;
  protected $internal_gapi_mappings = array(
  );
  protected $modifierFlatRateType = 'Google_Service_ShoppingContent_Price';
  protected $modifierFlatRateDataType = '';

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function getCarrierService()
  {
    return $this->carrierService;
  }

  public function setCarrierService($carrierService)
  {
    $this->carrierService = $carrierService;
  }

  public function setModifierFlatRate(Google_Service_ShoppingContent_Price $modifierFlatRate)
  {
    $this->modifierFlatRate = $modifierFlatRate;
  }
  public function getModifierFlatRate()
  {
    return $this->modifierFlatRate;
  }

  public function getModifierPercent()
  {
    return $this->modifierPercent;
  }

  public function setModifierPercent($modifierPercent)
  {
    $this->modifierPercent = $modifierPercent;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getSaleCountry()
  {
    return $this->saleCountry;
  }

  public function setSaleCountry($saleCountry)
  {
    $this->saleCountry = $saleCountry;
  }

  public function getShippingOrigin()
  {
    return $this->shippingOrigin;
  }

  public function setShippingOrigin($shippingOrigin)
  {
    $this->shippingOrigin = $shippingOrigin;
  }
}

class Google_Service_ShoppingContent_AccountShippingCondition extends Google_Model
{
  public $deliveryLocationGroup;
  public $deliveryLocationId;
  public $deliveryPostalCode;
  public $shippingLabel;
  protected $internal_gapi_mappings = array(
  );
  protected $deliveryPostalCodeRangeType = 'Google_Service_ShoppingContent_AccountShippingPostalCodeRange';
  protected $deliveryPostalCodeRangeDataType = '';
  protected $priceMaxType = 'Google_Service_ShoppingContent_Price';
  protected $priceMaxDataType = '';
  protected $weightMaxType = 'Google_Service_ShoppingContent_Weight';
  protected $weightMaxDataType = '';

  public function getDeliveryLocationGroup()
  {
    return $this->deliveryLocationGroup;
  }

  public function setDeliveryLocationGroup($deliveryLocationGroup)
  {
    $this->deliveryLocationGroup = $deliveryLocationGroup;
  }

  public function getDeliveryLocationId()
  {
    return $this->deliveryLocationId;
  }

  public function setDeliveryLocationId($deliveryLocationId)
  {
    $this->deliveryLocationId = $deliveryLocationId;
  }

  public function getDeliveryPostalCode()
  {
    return $this->deliveryPostalCode;
  }

  public function setDeliveryPostalCode($deliveryPostalCode)
  {
    $this->deliveryPostalCode = $deliveryPostalCode;
  }

  public function setDeliveryPostalCodeRange(Google_Service_ShoppingContent_AccountShippingPostalCodeRange $deliveryPostalCodeRange)
  {
    $this->deliveryPostalCodeRange = $deliveryPostalCodeRange;
  }
  public function getDeliveryPostalCodeRange()
  {
    return $this->deliveryPostalCodeRange;
  }
  public function setPriceMax(Google_Service_ShoppingContent_Price $priceMax)
  {
    $this->priceMax = $priceMax;
  }
  public function getPriceMax()
  {
    return $this->priceMax;
  }

  public function getShippingLabel()
  {
    return $this->shippingLabel;
  }

  public function setShippingLabel($shippingLabel)
  {
    $this->shippingLabel = $shippingLabel;
  }

  public function setWeightMax(Google_Service_ShoppingContent_Weight $weightMax)
  {
    $this->weightMax = $weightMax;
  }
  public function getWeightMax()
  {
    return $this->weightMax;
  }
}

class Google_Service_ShoppingContent_AccountShippingLocationGroup extends Google_Collection
{
  public $country;
  public $locationIds;
  public $name;
  public $postalCodes;
  protected $collection_key = 'postalCodes';
  protected $internal_gapi_mappings = array(
  );
  protected $postalCodeRangesType = 'Google_Service_ShoppingContent_AccountShippingPostalCodeRange';
  protected $postalCodeRangesDataType = 'array';

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getLocationIds()
  {
    return $this->locationIds;
  }

  public function setLocationIds($locationIds)
  {
    $this->locationIds = $locationIds;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setPostalCodeRanges($postalCodeRanges)
  {
    $this->postalCodeRanges = $postalCodeRanges;
  }
  public function getPostalCodeRanges()
  {
    return $this->postalCodeRanges;
  }

  public function getPostalCodes()
  {
    return $this->postalCodes;
  }

  public function setPostalCodes($postalCodes)
  {
    $this->postalCodes = $postalCodes;
  }
}

class Google_Service_ShoppingContent_AccountShippingPostalCodeRange extends Google_Model
{
  public $end;
  public $start;
  protected $internal_gapi_mappings = array(
  );

  public function getEnd()
  {
    return $this->end;
  }

  public function setEnd($end)
  {
    $this->end = $end;
  }

  public function getStart()
  {
    return $this->start;
  }

  public function setStart($start)
  {
    $this->start = $start;
  }
}

class Google_Service_ShoppingContent_AccountShippingRateTable extends Google_Collection
{
  public $name;
  public $saleCountry;
  protected $collection_key = 'content';
  protected $internal_gapi_mappings = array(
  );
  protected $contentType = 'Google_Service_ShoppingContent_AccountShippingRateTableCell';
  protected $contentDataType = 'array';

  public function setContent($content)
  {
    $this->content = $content;
  }
  public function getContent()
  {
    return $this->content;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getSaleCountry()
  {
    return $this->saleCountry;
  }

  public function setSaleCountry($saleCountry)
  {
    $this->saleCountry = $saleCountry;
  }
}

class Google_Service_ShoppingContent_AccountShippingRateTableCell extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $conditionType = 'Google_Service_ShoppingContent_AccountShippingCondition';
  protected $conditionDataType = '';
  protected $rateType = 'Google_Service_ShoppingContent_Price';
  protected $rateDataType = '';


  public function setCondition(Google_Service_ShoppingContent_AccountShippingCondition $condition)
  {
    $this->condition = $condition;
  }
  public function getCondition()
  {
    return $this->condition;
  }
  public function setRate(Google_Service_ShoppingContent_Price $rate)
  {
    $this->rate = $rate;
  }
  public function getRate()
  {
    return $this->rate;
  }
}

class Google_Service_ShoppingContent_AccountShippingShippingService extends Google_Model
{
  public $active;
  public $name;
  public $saleCountry;
  protected $internal_gapi_mappings = array(
  );
  protected $calculationMethodType = 'Google_Service_ShoppingContent_AccountShippingShippingServiceCalculationMethod';
  protected $calculationMethodDataType = '';
  protected $costRuleTreeType = 'Google_Service_ShoppingContent_AccountShippingShippingServiceCostRule';
  protected $costRuleTreeDataType = '';

  public function getActive()
  {
    return $this->active;
  }

  public function setActive($active)
  {
    $this->active = $active;
  }

  public function setCalculationMethod(Google_Service_ShoppingContent_AccountShippingShippingServiceCalculationMethod $calculationMethod)
  {
    $this->calculationMethod = $calculationMethod;
  }
  public function getCalculationMethod()
  {
    return $this->calculationMethod;
  }
  public function setCostRuleTree(Google_Service_ShoppingContent_AccountShippingShippingServiceCostRule $costRuleTree)
  {
    $this->costRuleTree = $costRuleTree;
  }
  public function getCostRuleTree()
  {
    return $this->costRuleTree;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getSaleCountry()
  {
    return $this->saleCountry;
  }

  public function setSaleCountry($saleCountry)
  {
    $this->saleCountry = $saleCountry;
  }
}

class Google_Service_ShoppingContent_AccountShippingShippingServiceCalculationMethod extends Google_Model
{
  public $carrierRate;
  public $excluded;
  public $percentageRate;
  public $rateTable;
  protected $internal_gapi_mappings = array(
  );
  protected $flatRateType = 'Google_Service_ShoppingContent_Price';
  protected $flatRateDataType = '';

  public function getCarrierRate()
  {
    return $this->carrierRate;
  }

  public function setCarrierRate($carrierRate)
  {
    $this->carrierRate = $carrierRate;
  }

  public function getExcluded()
  {
    return $this->excluded;
  }

  public function setExcluded($excluded)
  {
    $this->excluded = $excluded;
  }

  public function setFlatRate(Google_Service_ShoppingContent_Price $flatRate)
  {
    $this->flatRate = $flatRate;
  }
  public function getFlatRate()
  {
    return $this->flatRate;
  }

  public function getPercentageRate()
  {
    return $this->percentageRate;
  }

  public function setPercentageRate($percentageRate)
  {
    $this->percentageRate = $percentageRate;
  }

  public function getRateTable()
  {
    return $this->rateTable;
  }

  public function setRateTable($rateTable)
  {
    $this->rateTable = $rateTable;
  }
}

class Google_Service_ShoppingContent_AccountShippingShippingServiceCostRule extends Google_Collection
{
  protected $collection_key = 'children';
  protected $internal_gapi_mappings = array(
  );
  protected $calculationMethodType = 'Google_Service_ShoppingContent_AccountShippingShippingServiceCalculationMethod';
  protected $calculationMethodDataType = '';
  protected $childrenType = 'Google_Service_ShoppingContent_AccountShippingShippingServiceCostRule';
  protected $childrenDataType = 'array';
  protected $conditionType = 'Google_Service_ShoppingContent_AccountShippingCondition';
  protected $conditionDataType = '';


  public function setCalculationMethod(Google_Service_ShoppingContent_AccountShippingShippingServiceCalculationMethod $calculationMethod)
  {
    $this->calculationMethod = $calculationMethod;
  }
  public function getCalculationMethod()
  {
    return $this->calculationMethod;
  }
  public function setChildren($children)
  {
    $this->children = $children;
  }
  public function getChildren()
  {
    return $this->children;
  }
  public function setCondition(Google_Service_ShoppingContent_AccountShippingCondition $condition)
  {
    $this->condition = $condition;
  }
  public function getCondition()
  {
    return $this->condition;
  }
}

class Google_Service_ShoppingContent_AccountStatus extends Google_Collection
{
  public $accountId;
  public $kind;
  protected $collection_key = 'dataQualityIssues';
  protected $internal_gapi_mappings = array(
  );
  protected $dataQualityIssuesType = 'Google_Service_ShoppingContent_AccountStatusDataQualityIssue';
  protected $dataQualityIssuesDataType = 'array';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function setDataQualityIssues($dataQualityIssues)
  {
    $this->dataQualityIssues = $dataQualityIssues;
  }
  public function getDataQualityIssues()
  {
    return $this->dataQualityIssues;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_AccountStatusDataQualityIssue extends Google_Collection
{
  public $country;
  public $displayedValue;
  public $id;
  public $lastChecked;
  public $numItems;
  public $severity;
  public $submittedValue;
  protected $collection_key = 'exampleItems';
  protected $internal_gapi_mappings = array(
  );
  protected $exampleItemsType = 'Google_Service_ShoppingContent_AccountStatusExampleItem';
  protected $exampleItemsDataType = 'array';

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getDisplayedValue()
  {
    return $this->displayedValue;
  }

  public function setDisplayedValue($displayedValue)
  {
    $this->displayedValue = $displayedValue;
  }

  public function setExampleItems($exampleItems)
  {
    $this->exampleItems = $exampleItems;
  }
  public function getExampleItems()
  {
    return $this->exampleItems;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getLastChecked()
  {
    return $this->lastChecked;
  }

  public function setLastChecked($lastChecked)
  {
    $this->lastChecked = $lastChecked;
  }

  public function getNumItems()
  {
    return $this->numItems;
  }

  public function setNumItems($numItems)
  {
    $this->numItems = $numItems;
  }

  public function getSeverity()
  {
    return $this->severity;
  }

  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }

  public function getSubmittedValue()
  {
    return $this->submittedValue;
  }

  public function setSubmittedValue($submittedValue)
  {
    $this->submittedValue = $submittedValue;
  }
}

class Google_Service_ShoppingContent_AccountStatusExampleItem extends Google_Model
{
  public $itemId;
  public $link;
  public $submittedValue;
  public $title;
  public $valueOnLandingPage;
  protected $internal_gapi_mappings = array(
  );

  public function getItemId()
  {
    return $this->itemId;
  }

  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setLink($link)
  {
    $this->link = $link;
  }

  public function getSubmittedValue()
  {
    return $this->submittedValue;
  }

  public function setSubmittedValue($submittedValue)
  {
    $this->submittedValue = $submittedValue;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getValueOnLandingPage()
  {
    return $this->valueOnLandingPage;
  }

  public function setValueOnLandingPage($valueOnLandingPage)
  {
    $this->valueOnLandingPage = $valueOnLandingPage;
  }
}

class Google_Service_ShoppingContent_AccountTax extends Google_Collection
{
  public $accountId;
  public $kind;
  protected $collection_key = 'rules';
  protected $internal_gapi_mappings = array(
  );
  protected $rulesType = 'Google_Service_ShoppingContent_AccountTaxTaxRule';
  protected $rulesDataType = 'array';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  public function getRules()
  {
    return $this->rules;
  }
}

class Google_Service_ShoppingContent_AccountTaxTaxRule extends Google_Model
{
  public $country;
  public $locationId;
  public $ratePercent;
  public $shippingTaxed;
  public $useGlobalRate;
  protected $internal_gapi_mappings = array(
  );

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getLocationId()
  {
    return $this->locationId;
  }

  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }

  public function getRatePercent()
  {
    return $this->ratePercent;
  }

  public function setRatePercent($ratePercent)
  {
    $this->ratePercent = $ratePercent;
  }

  public function getShippingTaxed()
  {
    return $this->shippingTaxed;
  }

  public function setShippingTaxed($shippingTaxed)
  {
    $this->shippingTaxed = $shippingTaxed;
  }

  public function getUseGlobalRate()
  {
    return $this->useGlobalRate;
  }

  public function setUseGlobalRate($useGlobalRate)
  {
    $this->useGlobalRate = $useGlobalRate;
  }
}

class Google_Service_ShoppingContent_AccountUser extends Google_Model
{
  public $admin;
  public $emailAddress;
  protected $internal_gapi_mappings = array(
  );

  public function getAdmin()
  {
    return $this->admin;
  }

  public function setAdmin($admin)
  {
    $this->admin = $admin;
  }

  public function getEmailAddress()
  {
    return $this->emailAddress;
  }

  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
}

class Google_Service_ShoppingContent_AccountsAuthInfoResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'accountIdentifiers';
  protected $internal_gapi_mappings = array(
  );
  protected $accountIdentifiersType = 'Google_Service_ShoppingContent_AccountIdentifier';
  protected $accountIdentifiersDataType = 'array';

  public function setAccountIdentifiers($accountIdentifiers)
  {
    $this->accountIdentifiers = $accountIdentifiers;
  }
  public function getAccountIdentifiers()
  {
    return $this->accountIdentifiers;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_AccountsCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_AccountsCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_AccountsCustomBatchRequestEntry extends Google_Model
{
  public $accountId;
  public $batchId;
  public $merchantId;
  public $method;
  protected $internal_gapi_mappings = array(
  );
  protected $accountType = 'Google_Service_ShoppingContent_Account';
  protected $accountDataType = '';

  public function setAccount(Google_Service_ShoppingContent_Account $account)
  {
    $this->account = $account;
  }
  public function getAccount()
  {
    return $this->account;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }
}

class Google_Service_ShoppingContent_AccountsCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_AccountsCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_AccountsCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $accountType = 'Google_Service_ShoppingContent_Account';
  protected $accountDataType = '';
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';

  public function setAccount(Google_Service_ShoppingContent_Account $account)
  {
    $this->account = $account;
  }
  public function getAccount()
  {
    return $this->account;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_AccountsListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_ShoppingContent_Account';
  protected $resourcesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_ShoppingContent_AccountshippingCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_AccountshippingCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_AccountshippingCustomBatchRequestEntry extends Google_Model
{
  public $accountId;
  public $batchId;
  public $merchantId;
  public $method;
  protected $internal_gapi_mappings = array(
  );
  protected $accountShippingType = 'Google_Service_ShoppingContent_AccountShipping';
  protected $accountShippingDataType = '';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function setAccountShipping(Google_Service_ShoppingContent_AccountShipping $accountShipping)
  {
    $this->accountShipping = $accountShipping;
  }
  public function getAccountShipping()
  {
    return $this->accountShipping;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }
}

class Google_Service_ShoppingContent_AccountshippingCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_AccountshippingCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_AccountshippingCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $accountShippingType = 'Google_Service_ShoppingContent_AccountShipping';
  protected $accountShippingDataType = '';
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';

  public function setAccountShipping(Google_Service_ShoppingContent_AccountShipping $accountShipping)
  {
    $this->accountShipping = $accountShipping;
  }
  public function getAccountShipping()
  {
    return $this->accountShipping;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_AccountshippingListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_ShoppingContent_AccountShipping';
  protected $resourcesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_ShoppingContent_AccountstatusesCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_AccountstatusesCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_AccountstatusesCustomBatchRequestEntry extends Google_Model
{
  public $accountId;
  public $batchId;
  public $merchantId;
  public $method;
  protected $internal_gapi_mappings = array(
  );

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }
}

class Google_Service_ShoppingContent_AccountstatusesCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_AccountstatusesCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_AccountstatusesCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  protected $internal_gapi_mappings = array(
  );
  protected $accountStatusType = 'Google_Service_ShoppingContent_AccountStatus';
  protected $accountStatusDataType = '';
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';


  public function setAccountStatus(Google_Service_ShoppingContent_AccountStatus $accountStatus)
  {
    $this->accountStatus = $accountStatus;
  }
  public function getAccountStatus()
  {
    return $this->accountStatus;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
}

class Google_Service_ShoppingContent_AccountstatusesListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_ShoppingContent_AccountStatus';
  protected $resourcesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_ShoppingContent_AccounttaxCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_AccounttaxCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_AccounttaxCustomBatchRequestEntry extends Google_Model
{
  public $accountId;
  public $batchId;
  public $merchantId;
  public $method;
  protected $internal_gapi_mappings = array(
  );
  protected $accountTaxType = 'Google_Service_ShoppingContent_AccountTax';
  protected $accountTaxDataType = '';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function setAccountTax(Google_Service_ShoppingContent_AccountTax $accountTax)
  {
    $this->accountTax = $accountTax;
  }
  public function getAccountTax()
  {
    return $this->accountTax;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }
}

class Google_Service_ShoppingContent_AccounttaxCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_AccounttaxCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_AccounttaxCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $accountTaxType = 'Google_Service_ShoppingContent_AccountTax';
  protected $accountTaxDataType = '';
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';

  public function setAccountTax(Google_Service_ShoppingContent_AccountTax $accountTax)
  {
    $this->accountTax = $accountTax;
  }
  public function getAccountTax()
  {
    return $this->accountTax;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_AccounttaxListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_ShoppingContent_AccountTax';
  protected $resourcesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_ShoppingContent_Datafeed extends Google_Collection
{
  public $attributeLanguage;
  public $contentLanguage;
  public $contentType;
  public $fileName;
  public $id;
  public $intendedDestinations;
  public $kind;
  public $name;
  public $targetCountry;
  protected $collection_key = 'intendedDestinations';
  protected $internal_gapi_mappings = array(
  );
  protected $fetchScheduleType = 'Google_Service_ShoppingContent_DatafeedFetchSchedule';
  protected $fetchScheduleDataType = '';
  protected $formatType = 'Google_Service_ShoppingContent_DatafeedFormat';
  protected $formatDataType = '';

  public function getAttributeLanguage()
  {
    return $this->attributeLanguage;
  }

  public function setAttributeLanguage($attributeLanguage)
  {
    $this->attributeLanguage = $attributeLanguage;
  }

  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }

  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }

  public function getContentType()
  {
    return $this->contentType;
  }

  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }

  public function setFetchSchedule(Google_Service_ShoppingContent_DatafeedFetchSchedule $fetchSchedule)
  {
    $this->fetchSchedule = $fetchSchedule;
  }
  public function getFetchSchedule()
  {
    return $this->fetchSchedule;
  }

  public function getFileName()
  {
    return $this->fileName;
  }

  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }

  public function setFormat(Google_Service_ShoppingContent_DatafeedFormat $format)
  {
    $this->format = $format;
  }
  public function getFormat()
  {
    return $this->format;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIntendedDestinations()
  {
    return $this->intendedDestinations;
  }

  public function setIntendedDestinations($intendedDestinations)
  {
    $this->intendedDestinations = $intendedDestinations;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getTargetCountry()
  {
    return $this->targetCountry;
  }

  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
}

class Google_Service_ShoppingContent_DatafeedFetchSchedule extends Google_Model
{
  public $dayOfMonth;
  public $fetchUrl;
  public $hour;
  public $password;
  public $timeZone;
  public $username;
  public $weekday;
  protected $internal_gapi_mappings = array(
  );

  public function getDayOfMonth()
  {
    return $this->dayOfMonth;
  }

  public function setDayOfMonth($dayOfMonth)
  {
    $this->dayOfMonth = $dayOfMonth;
  }

  public function getFetchUrl()
  {
    return $this->fetchUrl;
  }

  public function setFetchUrl($fetchUrl)
  {
    $this->fetchUrl = $fetchUrl;
  }

  public function getHour()
  {
    return $this->hour;
  }

  public function setHour($hour)
  {
    $this->hour = $hour;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getTimeZone()
  {
    return $this->timeZone;
  }

  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }

  public function getWeekday()
  {
    return $this->weekday;
  }

  public function setWeekday($weekday)
  {
    $this->weekday = $weekday;
  }
}

class Google_Service_ShoppingContent_DatafeedFormat extends Google_Model
{
  public $columnDelimiter;
  public $fileEncoding;
  public $quotingMode;
  protected $internal_gapi_mappings = array(
  );

  public function getColumnDelimiter()
  {
    return $this->columnDelimiter;
  }

  public function setColumnDelimiter($columnDelimiter)
  {
    $this->columnDelimiter = $columnDelimiter;
  }

  public function getFileEncoding()
  {
    return $this->fileEncoding;
  }

  public function setFileEncoding($fileEncoding)
  {
    $this->fileEncoding = $fileEncoding;
  }

  public function getQuotingMode()
  {
    return $this->quotingMode;
  }

  public function setQuotingMode($quotingMode)
  {
    $this->quotingMode = $quotingMode;
  }
}

class Google_Service_ShoppingContent_DatafeedStatus extends Google_Collection
{
  public $datafeedId;
  public $itemsTotal;
  public $itemsValid;
  public $kind;
  public $lastUploadDate;
  public $processingStatus;
  protected $collection_key = 'warnings';
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_ShoppingContent_DatafeedStatusError';
  protected $errorsDataType = 'array';
  protected $warningsType = 'Google_Service_ShoppingContent_DatafeedStatusError';
  protected $warningsDataType = 'array';

  public function getDatafeedId()
  {
    return $this->datafeedId;
  }

  public function setDatafeedId($datafeedId)
  {
    $this->datafeedId = $datafeedId;
  }

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }

  public function getItemsTotal()
  {
    return $this->itemsTotal;
  }

  public function setItemsTotal($itemsTotal)
  {
    $this->itemsTotal = $itemsTotal;
  }

  public function getItemsValid()
  {
    return $this->itemsValid;
  }

  public function setItemsValid($itemsValid)
  {
    $this->itemsValid = $itemsValid;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastUploadDate()
  {
    return $this->lastUploadDate;
  }

  public function setLastUploadDate($lastUploadDate)
  {
    $this->lastUploadDate = $lastUploadDate;
  }

  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }

  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }

  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class Google_Service_ShoppingContent_DatafeedStatusError extends Google_Collection
{
  public $code;
  public $count;
  public $message;
  protected $collection_key = 'examples';
  protected $internal_gapi_mappings = array(
  );
  protected $examplesType = 'Google_Service_ShoppingContent_DatafeedStatusExample';
  protected $examplesDataType = 'array';

  public function getCode()
  {
    return $this->code;
  }

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getCount()
  {
    return $this->count;
  }

  public function setCount($count)
  {
    $this->count = $count;
  }

  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  public function getExamples()
  {
    return $this->examples;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setMessage($message)
  {
    $this->message = $message;
  }
}

class Google_Service_ShoppingContent_DatafeedStatusExample extends Google_Model
{
  public $itemId;
  public $lineNumber;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getItemId()
  {
    return $this->itemId;
  }

  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }

  public function getLineNumber()
  {
    return $this->lineNumber;
  }

  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}

class Google_Service_ShoppingContent_DatafeedsCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_DatafeedsCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_DatafeedsCustomBatchRequestEntry extends Google_Model
{
  public $batchId;
  public $datafeedId;
  public $merchantId;
  public $method;
  protected $internal_gapi_mappings = array(
  );
  protected $datafeedType = 'Google_Service_ShoppingContent_Datafeed';
  protected $datafeedDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setDatafeed(Google_Service_ShoppingContent_Datafeed $datafeed)
  {
    $this->datafeed = $datafeed;
  }
  public function getDatafeed()
  {
    return $this->datafeed;
  }

  public function getDatafeedId()
  {
    return $this->datafeedId;
  }

  public function setDatafeedId($datafeedId)
  {
    $this->datafeedId = $datafeedId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }
}

class Google_Service_ShoppingContent_DatafeedsCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_DatafeedsCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_DatafeedsCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  protected $internal_gapi_mappings = array(
  );
  protected $datafeedType = 'Google_Service_ShoppingContent_Datafeed';
  protected $datafeedDataType = '';
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setDatafeed(Google_Service_ShoppingContent_Datafeed $datafeed)
  {
    $this->datafeed = $datafeed;
  }
  public function getDatafeed()
  {
    return $this->datafeed;
  }
  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
}

class Google_Service_ShoppingContent_DatafeedsListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_ShoppingContent_Datafeed';
  protected $resourcesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_ShoppingContent_DatafeedstatusesCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_DatafeedstatusesCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_DatafeedstatusesCustomBatchRequestEntry extends Google_Model
{
  public $batchId;
  public $datafeedId;
  public $merchantId;
  public $method;
  protected $internal_gapi_mappings = array(
  );

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function getDatafeedId()
  {
    return $this->datafeedId;
  }

  public function setDatafeedId($datafeedId)
  {
    $this->datafeedId = $datafeedId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }
}

class Google_Service_ShoppingContent_DatafeedstatusesCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_DatafeedstatusesCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_DatafeedstatusesCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  protected $internal_gapi_mappings = array(
  );
  protected $datafeedStatusType = 'Google_Service_ShoppingContent_DatafeedStatus';
  protected $datafeedStatusDataType = '';
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setDatafeedStatus(Google_Service_ShoppingContent_DatafeedStatus $datafeedStatus)
  {
    $this->datafeedStatus = $datafeedStatus;
  }
  public function getDatafeedStatus()
  {
    return $this->datafeedStatus;
  }
  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
}

class Google_Service_ShoppingContent_DatafeedstatusesListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_ShoppingContent_DatafeedStatus';
  protected $resourcesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_ShoppingContent_Error extends Google_Model
{
  public $domain;
  public $message;
  public $reason;
  protected $internal_gapi_mappings = array(
  );

  public function getDomain()
  {
    return $this->domain;
  }

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setMessage($message)
  {
    $this->message = $message;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }
}

class Google_Service_ShoppingContent_Errors extends Google_Collection
{
  public $code;
  public $message;
  protected $collection_key = 'errors';
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_ShoppingContent_Error';
  protected $errorsDataType = 'array';

  public function getCode()
  {
    return $this->code;
  }

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setMessage($message)
  {
    $this->message = $message;
  }
}

class Google_Service_ShoppingContent_Installment extends Google_Model
{
  public $months;
  protected $internal_gapi_mappings = array(
  );
  protected $amountType = 'Google_Service_ShoppingContent_Price';
  protected $amountDataType = '';

  public function setAmount(Google_Service_ShoppingContent_Price $amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }

  public function getMonths()
  {
    return $this->months;
  }

  public function setMonths($months)
  {
    $this->months = $months;
  }
}

class Google_Service_ShoppingContent_Inventory extends Google_Model
{
  public $availability;
  public $kind;
  public $quantity;
  public $salePriceEffectiveDate;
  public $sellOnGoogleQuantity;
  protected $internal_gapi_mappings = array(
  );
  protected $installmentType = 'Google_Service_ShoppingContent_Installment';
  protected $installmentDataType = '';
  protected $loyaltyPointsType = 'Google_Service_ShoppingContent_LoyaltyPoints';
  protected $loyaltyPointsDataType = '';
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';
  protected $salePriceType = 'Google_Service_ShoppingContent_Price';
  protected $salePriceDataType = '';

  public function getAvailability()
  {
    return $this->availability;
  }

  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }

  public function setInstallment(Google_Service_ShoppingContent_Installment $installment)
  {
    $this->installment = $installment;
  }
  public function getInstallment()
  {
    return $this->installment;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLoyaltyPoints(Google_Service_ShoppingContent_LoyaltyPoints $loyaltyPoints)
  {
    $this->loyaltyPoints = $loyaltyPoints;
  }
  public function getLoyaltyPoints()
  {
    return $this->loyaltyPoints;
  }
  public function setPrice(Google_Service_ShoppingContent_Price $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function setSalePrice(Google_Service_ShoppingContent_Price $salePrice)
  {
    $this->salePrice = $salePrice;
  }
  public function getSalePrice()
  {
    return $this->salePrice;
  }

  public function getSalePriceEffectiveDate()
  {
    return $this->salePriceEffectiveDate;
  }

  public function setSalePriceEffectiveDate($salePriceEffectiveDate)
  {
    $this->salePriceEffectiveDate = $salePriceEffectiveDate;
  }

  public function getSellOnGoogleQuantity()
  {
    return $this->sellOnGoogleQuantity;
  }

  public function setSellOnGoogleQuantity($sellOnGoogleQuantity)
  {
    $this->sellOnGoogleQuantity = $sellOnGoogleQuantity;
  }
}

class Google_Service_ShoppingContent_InventoryCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_InventoryCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_InventoryCustomBatchRequestEntry extends Google_Model
{
  public $batchId;
  public $merchantId;
  public $productId;
  public $storeCode;
  protected $internal_gapi_mappings = array(
  );
  protected $inventoryType = 'Google_Service_ShoppingContent_Inventory';
  protected $inventoryDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setInventory(Google_Service_ShoppingContent_Inventory $inventory)
  {
    $this->inventory = $inventory;
  }
  public function getInventory()
  {
    return $this->inventory;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function getStoreCode()
  {
    return $this->storeCode;
  }

  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
}

class Google_Service_ShoppingContent_InventoryCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_InventoryCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_InventoryCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_InventorySetRequest extends Google_Model
{
  public $availability;
  public $quantity;
  public $salePriceEffectiveDate;
  public $sellOnGoogleQuantity;
  protected $internal_gapi_mappings = array(
  );
  protected $installmentType = 'Google_Service_ShoppingContent_Installment';
  protected $installmentDataType = '';
  protected $loyaltyPointsType = 'Google_Service_ShoppingContent_LoyaltyPoints';
  protected $loyaltyPointsDataType = '';
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';
  protected $salePriceType = 'Google_Service_ShoppingContent_Price';
  protected $salePriceDataType = '';

  public function getAvailability()
  {
    return $this->availability;
  }

  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }

  public function setInstallment(Google_Service_ShoppingContent_Installment $installment)
  {
    $this->installment = $installment;
  }
  public function getInstallment()
  {
    return $this->installment;
  }
  public function setLoyaltyPoints(Google_Service_ShoppingContent_LoyaltyPoints $loyaltyPoints)
  {
    $this->loyaltyPoints = $loyaltyPoints;
  }
  public function getLoyaltyPoints()
  {
    return $this->loyaltyPoints;
  }
  public function setPrice(Google_Service_ShoppingContent_Price $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function setSalePrice(Google_Service_ShoppingContent_Price $salePrice)
  {
    $this->salePrice = $salePrice;
  }
  public function getSalePrice()
  {
    return $this->salePrice;
  }

  public function getSalePriceEffectiveDate()
  {
    return $this->salePriceEffectiveDate;
  }

  public function setSalePriceEffectiveDate($salePriceEffectiveDate)
  {
    $this->salePriceEffectiveDate = $salePriceEffectiveDate;
  }

  public function getSellOnGoogleQuantity()
  {
    return $this->sellOnGoogleQuantity;
  }

  public function setSellOnGoogleQuantity($sellOnGoogleQuantity)
  {
    $this->sellOnGoogleQuantity = $sellOnGoogleQuantity;
  }
}

class Google_Service_ShoppingContent_InventorySetResponse extends Google_Model
{
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_LoyaltyPoints extends Google_Model
{
  public $name;
  public $pointsValue;
  public $ratio;
  protected $internal_gapi_mappings = array(
  );

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPointsValue()
  {
    return $this->pointsValue;
  }

  public function setPointsValue($pointsValue)
  {
    $this->pointsValue = $pointsValue;
  }

  public function getRatio()
  {
    return $this->ratio;
  }

  public function setRatio($ratio)
  {
    $this->ratio = $ratio;
  }
}

class Google_Service_ShoppingContent_Order extends Google_Collection
{
  public $acknowledged;
  public $id;
  public $kind;
  public $merchantId;
  public $merchantOrderId;
  public $paymentStatus;
  public $placedDate;
  public $shippingOption;
  public $status;
  protected $collection_key = 'shipments';
  protected $internal_gapi_mappings = array(
  );
  protected $customerType = 'Google_Service_ShoppingContent_OrderCustomer';
  protected $customerDataType = '';
  protected $deliveryDetailsType = 'Google_Service_ShoppingContent_OrderDeliveryDetails';
  protected $deliveryDetailsDataType = '';
  protected $lineItemsType = 'Google_Service_ShoppingContent_OrderLineItem';
  protected $lineItemsDataType = 'array';
  protected $netAmountType = 'Google_Service_ShoppingContent_Price';
  protected $netAmountDataType = '';
  protected $paymentMethodType = 'Google_Service_ShoppingContent_OrderPaymentMethod';
  protected $paymentMethodDataType = '';
  protected $promotionsType = 'Google_Service_ShoppingContent_OrderPromotion';
  protected $promotionsDataType = 'array';
  protected $refundsType = 'Google_Service_ShoppingContent_OrderRefund';
  protected $refundsDataType = 'array';
  protected $shipmentsType = 'Google_Service_ShoppingContent_OrderShipment';
  protected $shipmentsDataType = 'array';
  protected $shippingCostType = 'Google_Service_ShoppingContent_Price';
  protected $shippingCostDataType = '';
  protected $shippingCostTaxType = 'Google_Service_ShoppingContent_Price';
  protected $shippingCostTaxDataType = '';

  public function getAcknowledged()
  {
    return $this->acknowledged;
  }

  public function setAcknowledged($acknowledged)
  {
    $this->acknowledged = $acknowledged;
  }

  public function setCustomer(Google_Service_ShoppingContent_OrderCustomer $customer)
  {
    $this->customer = $customer;
  }
  public function getCustomer()
  {
    return $this->customer;
  }
  public function setDeliveryDetails(Google_Service_ShoppingContent_OrderDeliveryDetails $deliveryDetails)
  {
    $this->deliveryDetails = $deliveryDetails;
  }
  public function getDeliveryDetails()
  {
    return $this->deliveryDetails;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  public function getLineItems()
  {
    return $this->lineItems;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }

  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }

  public function setNetAmount(Google_Service_ShoppingContent_Price $netAmount)
  {
    $this->netAmount = $netAmount;
  }
  public function getNetAmount()
  {
    return $this->netAmount;
  }
  public function setPaymentMethod(Google_Service_ShoppingContent_OrderPaymentMethod $paymentMethod)
  {
    $this->paymentMethod = $paymentMethod;
  }
  public function getPaymentMethod()
  {
    return $this->paymentMethod;
  }

  public function getPaymentStatus()
  {
    return $this->paymentStatus;
  }

  public function setPaymentStatus($paymentStatus)
  {
    $this->paymentStatus = $paymentStatus;
  }

  public function getPlacedDate()
  {
    return $this->placedDate;
  }

  public function setPlacedDate($placedDate)
  {
    $this->placedDate = $placedDate;
  }

  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  public function getPromotions()
  {
    return $this->promotions;
  }
  public function setRefunds($refunds)
  {
    $this->refunds = $refunds;
  }
  public function getRefunds()
  {
    return $this->refunds;
  }
  public function setShipments($shipments)
  {
    $this->shipments = $shipments;
  }
  public function getShipments()
  {
    return $this->shipments;
  }
  public function setShippingCost(Google_Service_ShoppingContent_Price $shippingCost)
  {
    $this->shippingCost = $shippingCost;
  }
  public function getShippingCost()
  {
    return $this->shippingCost;
  }
  public function setShippingCostTax(Google_Service_ShoppingContent_Price $shippingCostTax)
  {
    $this->shippingCostTax = $shippingCostTax;
  }
  public function getShippingCostTax()
  {
    return $this->shippingCostTax;
  }

  public function getShippingOption()
  {
    return $this->shippingOption;
  }

  public function setShippingOption($shippingOption)
  {
    $this->shippingOption = $shippingOption;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }
}

class Google_Service_ShoppingContent_OrderAddress extends Google_Collection
{
  public $country;
  public $fullAddress;
  public $isPostOfficeBox;
  public $locality;
  public $postalCode;
  public $recipientName;
  public $region;
  public $streetAddress;
  protected $collection_key = 'streetAddress';
  protected $internal_gapi_mappings = array(
  );

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getFullAddress()
  {
    return $this->fullAddress;
  }

  public function setFullAddress($fullAddress)
  {
    $this->fullAddress = $fullAddress;
  }

  public function getIsPostOfficeBox()
  {
    return $this->isPostOfficeBox;
  }

  public function setIsPostOfficeBox($isPostOfficeBox)
  {
    $this->isPostOfficeBox = $isPostOfficeBox;
  }

  public function getLocality()
  {
    return $this->locality;
  }

  public function setLocality($locality)
  {
    $this->locality = $locality;
  }

  public function getPostalCode()
  {
    return $this->postalCode;
  }

  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }

  public function getRecipientName()
  {
    return $this->recipientName;
  }

  public function setRecipientName($recipientName)
  {
    $this->recipientName = $recipientName;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getStreetAddress()
  {
    return $this->streetAddress;
  }

  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
}

class Google_Service_ShoppingContent_OrderCancellation extends Google_Model
{
  public $actor;
  public $creationDate;
  public $quantity;
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );

  public function getActor()
  {
    return $this->actor;
  }

  public function setActor($actor)
  {
    $this->actor = $actor;
  }

  public function getCreationDate()
  {
    return $this->creationDate;
  }

  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrderCustomer extends Google_Model
{
  public $email;
  public $explicitMarketingPreference;
  public $fullName;
  protected $internal_gapi_mappings = array(
  );

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getExplicitMarketingPreference()
  {
    return $this->explicitMarketingPreference;
  }

  public function setExplicitMarketingPreference($explicitMarketingPreference)
  {
    $this->explicitMarketingPreference = $explicitMarketingPreference;
  }

  public function getFullName()
  {
    return $this->fullName;
  }

  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
}

class Google_Service_ShoppingContent_OrderDeliveryDetails extends Google_Model
{
  public $phoneNumber;
  protected $internal_gapi_mappings = array(
  );
  protected $addressType = 'Google_Service_ShoppingContent_OrderAddress';
  protected $addressDataType = '';

  public function setAddress(Google_Service_ShoppingContent_OrderAddress $address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
}

class Google_Service_ShoppingContent_OrderLineItem extends Google_Collection
{
  public $id;
  public $quantityCanceled;
  public $quantityDelivered;
  public $quantityOrdered;
  public $quantityPending;
  public $quantityReturned;
  public $quantityShipped;
  protected $collection_key = 'returns';
  protected $internal_gapi_mappings = array(
  );
  protected $cancellationsType = 'Google_Service_ShoppingContent_OrderCancellation';
  protected $cancellationsDataType = 'array';
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';
  protected $productType = 'Google_Service_ShoppingContent_OrderLineItemProduct';
  protected $productDataType = '';
  protected $returnInfoType = 'Google_Service_ShoppingContent_OrderLineItemReturnInfo';
  protected $returnInfoDataType = '';
  protected $returnsType = 'Google_Service_ShoppingContent_OrderReturn';
  protected $returnsDataType = 'array';
  protected $shippingDetailsType = 'Google_Service_ShoppingContent_OrderLineItemShippingDetails';
  protected $shippingDetailsDataType = '';
  protected $taxType = 'Google_Service_ShoppingContent_Price';
  protected $taxDataType = '';


  public function setCancellations($cancellations)
  {
    $this->cancellations = $cancellations;
  }
  public function getCancellations()
  {
    return $this->cancellations;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setPrice(Google_Service_ShoppingContent_Price $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setProduct(Google_Service_ShoppingContent_OrderLineItemProduct $product)
  {
    $this->product = $product;
  }
  public function getProduct()
  {
    return $this->product;
  }

  public function getQuantityCanceled()
  {
    return $this->quantityCanceled;
  }

  public function setQuantityCanceled($quantityCanceled)
  {
    $this->quantityCanceled = $quantityCanceled;
  }

  public function getQuantityDelivered()
  {
    return $this->quantityDelivered;
  }

  public function setQuantityDelivered($quantityDelivered)
  {
    $this->quantityDelivered = $quantityDelivered;
  }

  public function getQuantityOrdered()
  {
    return $this->quantityOrdered;
  }

  public function setQuantityOrdered($quantityOrdered)
  {
    $this->quantityOrdered = $quantityOrdered;
  }

  public function getQuantityPending()
  {
    return $this->quantityPending;
  }

  public function setQuantityPending($quantityPending)
  {
    $this->quantityPending = $quantityPending;
  }

  public function getQuantityReturned()
  {
    return $this->quantityReturned;
  }

  public function setQuantityReturned($quantityReturned)
  {
    $this->quantityReturned = $quantityReturned;
  }

  public function getQuantityShipped()
  {
    return $this->quantityShipped;
  }

  public function setQuantityShipped($quantityShipped)
  {
    $this->quantityShipped = $quantityShipped;
  }

  public function setReturnInfo(Google_Service_ShoppingContent_OrderLineItemReturnInfo $returnInfo)
  {
    $this->returnInfo = $returnInfo;
  }
  public function getReturnInfo()
  {
    return $this->returnInfo;
  }
  public function setReturns($returns)
  {
    $this->returns = $returns;
  }
  public function getReturns()
  {
    return $this->returns;
  }
  public function setShippingDetails(Google_Service_ShoppingContent_OrderLineItemShippingDetails $shippingDetails)
  {
    $this->shippingDetails = $shippingDetails;
  }
  public function getShippingDetails()
  {
    return $this->shippingDetails;
  }
  public function setTax(Google_Service_ShoppingContent_Price $tax)
  {
    $this->tax = $tax;
  }
  public function getTax()
  {
    return $this->tax;
  }
}

class Google_Service_ShoppingContent_OrderLineItemProduct extends Google_Collection
{
  public $brand;
  public $channel;
  public $condition;
  public $contentLanguage;
  public $gtin;
  public $id;
  public $imageLink;
  public $itemGroupId;
  public $mpn;
  public $offerId;
  public $shownImage;
  public $targetCountry;
  public $title;
  protected $collection_key = 'variantAttributes';
  protected $internal_gapi_mappings = array(
  );
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';
  protected $variantAttributesType = 'Google_Service_ShoppingContent_OrderLineItemProductVariantAttribute';
  protected $variantAttributesDataType = 'array';

  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getChannel()
  {
    return $this->channel;
  }

  public function setChannel($channel)
  {
    $this->channel = $channel;
  }

  public function getCondition()
  {
    return $this->condition;
  }

  public function setCondition($condition)
  {
    $this->condition = $condition;
  }

  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }

  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }

  public function getGtin()
  {
    return $this->gtin;
  }

  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getImageLink()
  {
    return $this->imageLink;
  }

  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }

  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }

  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }

  public function getMpn()
  {
    return $this->mpn;
  }

  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }

  public function getOfferId()
  {
    return $this->offerId;
  }

  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }

  public function setPrice(Google_Service_ShoppingContent_Price $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }

  public function getShownImage()
  {
    return $this->shownImage;
  }

  public function setShownImage($shownImage)
  {
    $this->shownImage = $shownImage;
  }

  public function getTargetCountry()
  {
    return $this->targetCountry;
  }

  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function setVariantAttributes($variantAttributes)
  {
    $this->variantAttributes = $variantAttributes;
  }
  public function getVariantAttributes()
  {
    return $this->variantAttributes;
  }
}

class Google_Service_ShoppingContent_OrderLineItemProductVariantAttribute extends Google_Model
{
  public $dimension;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getDimension()
  {
    return $this->dimension;
  }

  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}

class Google_Service_ShoppingContent_OrderLineItemReturnInfo extends Google_Model
{
  public $daysToReturn;
  public $isReturnable;
  public $policyUrl;
  protected $internal_gapi_mappings = array(
  );

  public function getDaysToReturn()
  {
    return $this->daysToReturn;
  }

  public function setDaysToReturn($daysToReturn)
  {
    $this->daysToReturn = $daysToReturn;
  }

  public function getIsReturnable()
  {
    return $this->isReturnable;
  }

  public function setIsReturnable($isReturnable)
  {
    $this->isReturnable = $isReturnable;
  }

  public function getPolicyUrl()
  {
    return $this->policyUrl;
  }

  public function setPolicyUrl($policyUrl)
  {
    $this->policyUrl = $policyUrl;
  }
}

class Google_Service_ShoppingContent_OrderLineItemShippingDetails extends Google_Model
{
  public $deliverByDate;
  public $shipByDate;
  protected $internal_gapi_mappings = array(
  );
  protected $methodType = 'Google_Service_ShoppingContent_OrderLineItemShippingDetailsMethod';
  protected $methodDataType = '';

  public function getDeliverByDate()
  {
    return $this->deliverByDate;
  }

  public function setDeliverByDate($deliverByDate)
  {
    $this->deliverByDate = $deliverByDate;
  }

  public function setMethod(Google_Service_ShoppingContent_OrderLineItemShippingDetailsMethod $method)
  {
    $this->method = $method;
  }
  public function getMethod()
  {
    return $this->method;
  }

  public function getShipByDate()
  {
    return $this->shipByDate;
  }

  public function setShipByDate($shipByDate)
  {
    $this->shipByDate = $shipByDate;
  }
}

class Google_Service_ShoppingContent_OrderLineItemShippingDetailsMethod extends Google_Model
{
  public $carrier;
  public $maxDaysInTransit;
  public $methodName;
  public $minDaysInTransit;
  protected $internal_gapi_mappings = array(
  );

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function getMaxDaysInTransit()
  {
    return $this->maxDaysInTransit;
  }

  public function setMaxDaysInTransit($maxDaysInTransit)
  {
    $this->maxDaysInTransit = $maxDaysInTransit;
  }

  public function getMethodName()
  {
    return $this->methodName;
  }

  public function setMethodName($methodName)
  {
    $this->methodName = $methodName;
  }

  public function getMinDaysInTransit()
  {
    return $this->minDaysInTransit;
  }

  public function setMinDaysInTransit($minDaysInTransit)
  {
    $this->minDaysInTransit = $minDaysInTransit;
  }
}

class Google_Service_ShoppingContent_OrderPaymentMethod extends Google_Model
{
  public $expirationMonth;
  public $expirationYear;
  public $lastFourDigits;
  public $phoneNumber;
  public $type;
  protected $internal_gapi_mappings = array(
  );
  protected $billingAddressType = 'Google_Service_ShoppingContent_OrderAddress';
  protected $billingAddressDataType = '';

  public function setBillingAddress(Google_Service_ShoppingContent_OrderAddress $billingAddress)
  {
    $this->billingAddress = $billingAddress;
  }
  public function getBillingAddress()
  {
    return $this->billingAddress;
  }

  public function getExpirationMonth()
  {
    return $this->expirationMonth;
  }

  public function setExpirationMonth($expirationMonth)
  {
    $this->expirationMonth = $expirationMonth;
  }

  public function getExpirationYear()
  {
    return $this->expirationYear;
  }

  public function setExpirationYear($expirationYear)
  {
    $this->expirationYear = $expirationYear;
  }

  public function getLastFourDigits()
  {
    return $this->lastFourDigits;
  }

  public function setLastFourDigits($lastFourDigits)
  {
    $this->lastFourDigits = $lastFourDigits;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }
}

class Google_Service_ShoppingContent_OrderPromotion extends Google_Collection
{
  public $effectiveDates;
  public $genericRedemptionCode;
  public $id;
  public $longTitle;
  public $productApplicability;
  public $redemptionChannel;
  protected $collection_key = 'benefits';
  protected $internal_gapi_mappings = array(
  );
  protected $benefitsType = 'Google_Service_ShoppingContent_OrderPromotionBenefit';
  protected $benefitsDataType = 'array';

  public function setBenefits($benefits)
  {
    $this->benefits = $benefits;
  }
  public function getBenefits()
  {
    return $this->benefits;
  }

  public function getEffectiveDates()
  {
    return $this->effectiveDates;
  }

  public function setEffectiveDates($effectiveDates)
  {
    $this->effectiveDates = $effectiveDates;
  }

  public function getGenericRedemptionCode()
  {
    return $this->genericRedemptionCode;
  }

  public function setGenericRedemptionCode($genericRedemptionCode)
  {
    $this->genericRedemptionCode = $genericRedemptionCode;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getLongTitle()
  {
    return $this->longTitle;
  }

  public function setLongTitle($longTitle)
  {
    $this->longTitle = $longTitle;
  }

  public function getProductApplicability()
  {
    return $this->productApplicability;
  }

  public function setProductApplicability($productApplicability)
  {
    $this->productApplicability = $productApplicability;
  }

  public function getRedemptionChannel()
  {
    return $this->redemptionChannel;
  }

  public function setRedemptionChannel($redemptionChannel)
  {
    $this->redemptionChannel = $redemptionChannel;
  }
}

class Google_Service_ShoppingContent_OrderPromotionBenefit extends Google_Collection
{
  public $offerIds;
  public $subType;
  public $type;
  protected $collection_key = 'offerIds';
  protected $internal_gapi_mappings = array(
  );
  protected $discountType = 'Google_Service_ShoppingContent_Price';
  protected $discountDataType = '';
  protected $taxImpactType = 'Google_Service_ShoppingContent_Price';
  protected $taxImpactDataType = '';

  public function setDiscount(Google_Service_ShoppingContent_Price $discount)
  {
    $this->discount = $discount;
  }
  public function getDiscount()
  {
    return $this->discount;
  }

  public function getOfferIds()
  {
    return $this->offerIds;
  }

  public function setOfferIds($offerIds)
  {
    $this->offerIds = $offerIds;
  }

  public function getSubType()
  {
    return $this->subType;
  }

  public function setSubType($subType)
  {
    $this->subType = $subType;
  }

  public function setTaxImpact(Google_Service_ShoppingContent_Price $taxImpact)
  {
    $this->taxImpact = $taxImpact;
  }
  public function getTaxImpact()
  {
    return $this->taxImpact;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }
}

class Google_Service_ShoppingContent_OrderRefund extends Google_Model
{
  public $actor;
  public $creationDate;
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );
  protected $amountType = 'Google_Service_ShoppingContent_Price';
  protected $amountDataType = '';

  public function getActor()
  {
    return $this->actor;
  }

  public function setActor($actor)
  {
    $this->actor = $actor;
  }

  public function setAmount(Google_Service_ShoppingContent_Price $amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }

  public function getCreationDate()
  {
    return $this->creationDate;
  }

  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrderReturn extends Google_Model
{
  public $actor;
  public $creationDate;
  public $quantity;
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );

  public function getActor()
  {
    return $this->actor;
  }

  public function setActor($actor)
  {
    $this->actor = $actor;
  }

  public function getCreationDate()
  {
    return $this->creationDate;
  }

  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrderShipment extends Google_Collection
{
  public $carrier;
  public $creationDate;
  public $deliveryDate;
  public $id;
  public $status;
  public $trackingId;
  protected $collection_key = 'lineItems';
  protected $internal_gapi_mappings = array(
  );
  protected $lineItemsType = 'Google_Service_ShoppingContent_OrderShipmentLineItemShipment';
  protected $lineItemsDataType = 'array';

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function getCreationDate()
  {
    return $this->creationDate;
  }

  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }

  public function getDeliveryDate()
  {
    return $this->deliveryDate;
  }

  public function setDeliveryDate($deliveryDate)
  {
    $this->deliveryDate = $deliveryDate;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  public function getLineItems()
  {
    return $this->lineItems;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getTrackingId()
  {
    return $this->trackingId;
  }

  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
}

class Google_Service_ShoppingContent_OrderShipmentLineItemShipment extends Google_Model
{
  public $lineItemId;
  public $quantity;
  protected $internal_gapi_mappings = array(
  );

  public function getLineItemId()
  {
    return $this->lineItemId;
  }

  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
}

class Google_Service_ShoppingContent_OrdersAcknowledgeRequest extends Google_Model
{
  public $operationId;
  protected $internal_gapi_mappings = array(
  );

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
}

class Google_Service_ShoppingContent_OrdersAcknowledgeResponse extends Google_Model
{
  public $executionStatus;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_OrdersAdvanceTestOrderResponse extends Google_Model
{
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_OrdersCancelLineItemRequest extends Google_Model
{
  public $lineItemId;
  public $operationId;
  public $quantity;
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );
  protected $amountType = 'Google_Service_ShoppingContent_Price';
  protected $amountDataType = '';

  public function setAmount(Google_Service_ShoppingContent_Price $amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }

  public function getLineItemId()
  {
    return $this->lineItemId;
  }

  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrdersCancelLineItemResponse extends Google_Model
{
  public $executionStatus;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_OrdersCancelRequest extends Google_Model
{
  public $operationId;
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrdersCancelResponse extends Google_Model
{
  public $executionStatus;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_OrdersCreateTestOrderRequest extends Google_Model
{
  public $templateName;
  protected $internal_gapi_mappings = array(
  );
  protected $testOrderType = 'Google_Service_ShoppingContent_TestOrder';
  protected $testOrderDataType = '';

  public function getTemplateName()
  {
    return $this->templateName;
  }

  public function setTemplateName($templateName)
  {
    $this->templateName = $templateName;
  }

  public function setTestOrder(Google_Service_ShoppingContent_TestOrder $testOrder)
  {
    $this->testOrder = $testOrder;
  }
  public function getTestOrder()
  {
    return $this->testOrder;
  }
}

class Google_Service_ShoppingContent_OrdersCreateTestOrderResponse extends Google_Model
{
  public $kind;
  public $orderId;
  protected $internal_gapi_mappings = array(
  );

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getOrderId()
  {
    return $this->orderId;
  }

  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntry extends Google_Model
{
  public $batchId;
  public $merchantId;
  public $merchantOrderId;
  public $method;
  public $operationId;
  public $orderId;
  protected $internal_gapi_mappings = array(
  );
  protected $cancelType = 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancel';
  protected $cancelDataType = '';
  protected $cancelLineItemType = 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancelLineItem';
  protected $cancelLineItemDataType = '';
  protected $refundType = 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryRefund';
  protected $refundDataType = '';
  protected $returnLineItemType = 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryReturnLineItem';
  protected $returnLineItemDataType = '';
  protected $shipLineItemsType = 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryShipLineItems';
  protected $shipLineItemsDataType = '';
  protected $updateShipmentType = 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryUpdateShipment';
  protected $updateShipmentDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setCancel(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancel $cancel)
  {
    $this->cancel = $cancel;
  }
  public function getCancel()
  {
    return $this->cancel;
  }
  public function setCancelLineItem(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancelLineItem $cancelLineItem)
  {
    $this->cancelLineItem = $cancelLineItem;
  }
  public function getCancelLineItem()
  {
    return $this->cancelLineItem;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }

  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }

  public function getOrderId()
  {
    return $this->orderId;
  }

  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }

  public function setRefund(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryRefund $refund)
  {
    $this->refund = $refund;
  }
  public function getRefund()
  {
    return $this->refund;
  }
  public function setReturnLineItem(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryReturnLineItem $returnLineItem)
  {
    $this->returnLineItem = $returnLineItem;
  }
  public function getReturnLineItem()
  {
    return $this->returnLineItem;
  }
  public function setShipLineItems(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryShipLineItems $shipLineItems)
  {
    $this->shipLineItems = $shipLineItems;
  }
  public function getShipLineItems()
  {
    return $this->shipLineItems;
  }
  public function setUpdateShipment(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryUpdateShipment $updateShipment)
  {
    $this->updateShipment = $updateShipment;
  }
  public function getUpdateShipment()
  {
    return $this->updateShipment;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancel extends Google_Model
{
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancelLineItem extends Google_Model
{
  public $lineItemId;
  public $quantity;
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );
  protected $amountType = 'Google_Service_ShoppingContent_Price';
  protected $amountDataType = '';

  public function setAmount(Google_Service_ShoppingContent_Price $amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }

  public function getLineItemId()
  {
    return $this->lineItemId;
  }

  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryRefund extends Google_Model
{
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );
  protected $amountType = 'Google_Service_ShoppingContent_Price';
  protected $amountDataType = '';

  public function setAmount(Google_Service_ShoppingContent_Price $amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryReturnLineItem extends Google_Model
{
  public $lineItemId;
  public $quantity;
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );

  public function getLineItemId()
  {
    return $this->lineItemId;
  }

  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryShipLineItems extends Google_Collection
{
  public $carrier;
  public $shipmentId;
  public $trackingId;
  protected $collection_key = 'lineItems';
  protected $internal_gapi_mappings = array(
  );
  protected $lineItemsType = 'Google_Service_ShoppingContent_OrderShipmentLineItemShipment';
  protected $lineItemsDataType = 'array';

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  public function getLineItems()
  {
    return $this->lineItems;
  }

  public function getShipmentId()
  {
    return $this->shipmentId;
  }

  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }

  public function getTrackingId()
  {
    return $this->trackingId;
  }

  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryUpdateShipment extends Google_Model
{
  public $carrier;
  public $shipmentId;
  public $status;
  public $trackingId;
  protected $internal_gapi_mappings = array(
  );

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function getShipmentId()
  {
    return $this->shipmentId;
  }

  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getTrackingId()
  {
    return $this->trackingId;
  }

  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_OrdersCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_OrdersCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  public $executionStatus;
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';
  protected $orderType = 'Google_Service_ShoppingContent_Order';
  protected $orderDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setOrder(Google_Service_ShoppingContent_Order $order)
  {
    $this->order = $order;
  }
  public function getOrder()
  {
    return $this->order;
  }
}

class Google_Service_ShoppingContent_OrdersGetByMerchantOrderIdResponse extends Google_Model
{
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $orderType = 'Google_Service_ShoppingContent_Order';
  protected $orderDataType = '';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setOrder(Google_Service_ShoppingContent_Order $order)
  {
    $this->order = $order;
  }
  public function getOrder()
  {
    return $this->order;
  }
}

class Google_Service_ShoppingContent_OrdersGetTestOrderTemplateResponse extends Google_Model
{
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $templateType = 'Google_Service_ShoppingContent_TestOrder';
  protected $templateDataType = '';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setTemplate(Google_Service_ShoppingContent_TestOrder $template)
  {
    $this->template = $template;
  }
  public function getTemplate()
  {
    return $this->template;
  }
}

class Google_Service_ShoppingContent_OrdersListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_ShoppingContent_Order';
  protected $resourcesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_ShoppingContent_OrdersRefundRequest extends Google_Model
{
  public $operationId;
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );
  protected $amountType = 'Google_Service_ShoppingContent_Price';
  protected $amountDataType = '';

  public function setAmount(Google_Service_ShoppingContent_Price $amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrdersRefundResponse extends Google_Model
{
  public $executionStatus;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_OrdersReturnLineItemRequest extends Google_Model
{
  public $lineItemId;
  public $operationId;
  public $quantity;
  public $reason;
  public $reasonText;
  protected $internal_gapi_mappings = array(
  );

  public function getLineItemId()
  {
    return $this->lineItemId;
  }

  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
}

class Google_Service_ShoppingContent_OrdersReturnLineItemResponse extends Google_Model
{
  public $executionStatus;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_OrdersShipLineItemsRequest extends Google_Collection
{
  public $carrier;
  public $operationId;
  public $shipmentId;
  public $trackingId;
  protected $collection_key = 'lineItems';
  protected $internal_gapi_mappings = array(
  );
  protected $lineItemsType = 'Google_Service_ShoppingContent_OrderShipmentLineItemShipment';
  protected $lineItemsDataType = 'array';

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  public function getLineItems()
  {
    return $this->lineItems;
  }

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }

  public function getShipmentId()
  {
    return $this->shipmentId;
  }

  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }

  public function getTrackingId()
  {
    return $this->trackingId;
  }

  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
}

class Google_Service_ShoppingContent_OrdersShipLineItemsResponse extends Google_Model
{
  public $executionStatus;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdRequest extends Google_Model
{
  public $merchantOrderId;
  public $operationId;
  protected $internal_gapi_mappings = array(
  );

  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }

  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
}

class Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdResponse extends Google_Model
{
  public $executionStatus;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_OrdersUpdateShipmentRequest extends Google_Model
{
  public $carrier;
  public $operationId;
  public $shipmentId;
  public $status;
  public $trackingId;
  protected $internal_gapi_mappings = array(
  );

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }

  public function getShipmentId()
  {
    return $this->shipmentId;
  }

  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getTrackingId()
  {
    return $this->trackingId;
  }

  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
}

class Google_Service_ShoppingContent_OrdersUpdateShipmentResponse extends Google_Model
{
  public $executionStatus;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_Price extends Google_Model
{
  public $currency;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getCurrency()
  {
    return $this->currency;
  }

  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}

class Google_Service_ShoppingContent_Product extends Google_Collection
{
  public $additionalImageLinks;
  public $adult;
  public $adwordsGrouping;
  public $adwordsLabels;
  public $adwordsRedirect;
  public $ageGroup;
  public $availability;
  public $availabilityDate;
  public $brand;
  public $channel;
  public $color;
  public $condition;
  public $contentLanguage;
  public $customLabel0;
  public $customLabel1;
  public $customLabel2;
  public $customLabel3;
  public $customLabel4;
  public $description;
  public $displayAdsId;
  public $displayAdsLink;
  public $displayAdsSimilarIds;
  public $displayAdsTitle;
  public $displayAdsValue;
  public $energyEfficiencyClass;
  public $expirationDate;
  public $gender;
  public $googleProductCategory;
  public $gtin;
  public $id;
  public $identifierExists;
  public $imageLink;
  public $isBundle;
  public $itemGroupId;
  public $kind;
  public $link;
  public $material;
  public $mobileLink;
  public $mpn;
  public $multipack;
  public $offerId;
  public $onlineOnly;
  public $pattern;
  public $productType;
  public $promotionIds;
  public $salePriceEffectiveDate;
  public $sellOnGoogleQuantity;
  public $shippingLabel;
  public $sizeSystem;
  public $sizeType;
  public $sizes;
  public $targetCountry;
  public $title;
  public $validatedDestinations;
  protected $collection_key = 'warnings';
  protected $internal_gapi_mappings = array(
  );
  protected $aspectsType = 'Google_Service_ShoppingContent_ProductAspect';
  protected $aspectsDataType = 'array';
  protected $customAttributesType = 'Google_Service_ShoppingContent_ProductCustomAttribute';
  protected $customAttributesDataType = 'array';
  protected $customGroupsType = 'Google_Service_ShoppingContent_ProductCustomGroup';
  protected $customGroupsDataType = 'array';
  protected $destinationsType = 'Google_Service_ShoppingContent_ProductDestination';
  protected $destinationsDataType = 'array';
  protected $installmentType = 'Google_Service_ShoppingContent_Installment';
  protected $installmentDataType = '';
  protected $loyaltyPointsType = 'Google_Service_ShoppingContent_LoyaltyPoints';
  protected $loyaltyPointsDataType = '';
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';
  protected $salePriceType = 'Google_Service_ShoppingContent_Price';
  protected $salePriceDataType = '';
  protected $shippingType = 'Google_Service_ShoppingContent_ProductShipping';
  protected $shippingDataType = 'array';
  protected $shippingHeightType = 'Google_Service_ShoppingContent_ProductShippingDimension';
  protected $shippingHeightDataType = '';
  protected $shippingLengthType = 'Google_Service_ShoppingContent_ProductShippingDimension';
  protected $shippingLengthDataType = '';
  protected $shippingWeightType = 'Google_Service_ShoppingContent_ProductShippingWeight';
  protected $shippingWeightDataType = '';
  protected $shippingWidthType = 'Google_Service_ShoppingContent_ProductShippingDimension';
  protected $shippingWidthDataType = '';
  protected $taxesType = 'Google_Service_ShoppingContent_ProductTax';
  protected $taxesDataType = 'array';
  protected $unitPricingBaseMeasureType = 'Google_Service_ShoppingContent_ProductUnitPricingBaseMeasure';
  protected $unitPricingBaseMeasureDataType = '';
  protected $unitPricingMeasureType = 'Google_Service_ShoppingContent_ProductUnitPricingMeasure';
  protected $unitPricingMeasureDataType = '';
  protected $warningsType = 'Google_Service_ShoppingContent_Error';
  protected $warningsDataType = 'array';

  public function getAdditionalImageLinks()
  {
    return $this->additionalImageLinks;
  }

  public function setAdditionalImageLinks($additionalImageLinks)
  {
    $this->additionalImageLinks = $additionalImageLinks;
  }

  public function getAdult()
  {
    return $this->adult;
  }

  public function setAdult($adult)
  {
    $this->adult = $adult;
  }

  public function getAdwordsGrouping()
  {
    return $this->adwordsGrouping;
  }

  public function setAdwordsGrouping($adwordsGrouping)
  {
    $this->adwordsGrouping = $adwordsGrouping;
  }

  public function getAdwordsLabels()
  {
    return $this->adwordsLabels;
  }

  public function setAdwordsLabels($adwordsLabels)
  {
    $this->adwordsLabels = $adwordsLabels;
  }

  public function getAdwordsRedirect()
  {
    return $this->adwordsRedirect;
  }

  public function setAdwordsRedirect($adwordsRedirect)
  {
    $this->adwordsRedirect = $adwordsRedirect;
  }

  public function getAgeGroup()
  {
    return $this->ageGroup;
  }

  public function setAgeGroup($ageGroup)
  {
    $this->ageGroup = $ageGroup;
  }

  public function setAspects($aspects)
  {
    $this->aspects = $aspects;
  }
  public function getAspects()
  {
    return $this->aspects;
  }

  public function getAvailability()
  {
    return $this->availability;
  }

  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }

  public function getAvailabilityDate()
  {
    return $this->availabilityDate;
  }

  public function setAvailabilityDate($availabilityDate)
  {
    $this->availabilityDate = $availabilityDate;
  }

  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getChannel()
  {
    return $this->channel;
  }

  public function setChannel($channel)
  {
    $this->channel = $channel;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getCondition()
  {
    return $this->condition;
  }

  public function setCondition($condition)
  {
    $this->condition = $condition;
  }

  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }

  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }

  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  public function getCustomAttributes()
  {
    return $this->customAttributes;
  }
  public function setCustomGroups($customGroups)
  {
    $this->customGroups = $customGroups;
  }
  public function getCustomGroups()
  {
    return $this->customGroups;
  }

  public function getCustomLabel0()
  {
    return $this->customLabel0;
  }

  public function setCustomLabel0($customLabel0)
  {
    $this->customLabel0 = $customLabel0;
  }

  public function getCustomLabel1()
  {
    return $this->customLabel1;
  }

  public function setCustomLabel1($customLabel1)
  {
    $this->customLabel1 = $customLabel1;
  }

  public function getCustomLabel2()
  {
    return $this->customLabel2;
  }

  public function setCustomLabel2($customLabel2)
  {
    $this->customLabel2 = $customLabel2;
  }

  public function getCustomLabel3()
  {
    return $this->customLabel3;
  }

  public function setCustomLabel3($customLabel3)
  {
    $this->customLabel3 = $customLabel3;
  }

  public function getCustomLabel4()
  {
    return $this->customLabel4;
  }

  public function setCustomLabel4($customLabel4)
  {
    $this->customLabel4 = $customLabel4;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  public function getDestinations()
  {
    return $this->destinations;
  }

  public function getDisplayAdsId()
  {
    return $this->displayAdsId;
  }

  public function setDisplayAdsId($displayAdsId)
  {
    $this->displayAdsId = $displayAdsId;
  }

  public function getDisplayAdsLink()
  {
    return $this->displayAdsLink;
  }

  public function setDisplayAdsLink($displayAdsLink)
  {
    $this->displayAdsLink = $displayAdsLink;
  }

  public function getDisplayAdsSimilarIds()
  {
    return $this->displayAdsSimilarIds;
  }

  public function setDisplayAdsSimilarIds($displayAdsSimilarIds)
  {
    $this->displayAdsSimilarIds = $displayAdsSimilarIds;
  }

  public function getDisplayAdsTitle()
  {
    return $this->displayAdsTitle;
  }

  public function setDisplayAdsTitle($displayAdsTitle)
  {
    $this->displayAdsTitle = $displayAdsTitle;
  }

  public function getDisplayAdsValue()
  {
    return $this->displayAdsValue;
  }

  public function setDisplayAdsValue($displayAdsValue)
  {
    $this->displayAdsValue = $displayAdsValue;
  }

  public function getEnergyEfficiencyClass()
  {
    return $this->energyEfficiencyClass;
  }

  public function setEnergyEfficiencyClass($energyEfficiencyClass)
  {
    $this->energyEfficiencyClass = $energyEfficiencyClass;
  }

  public function getExpirationDate()
  {
    return $this->expirationDate;
  }

  public function setExpirationDate($expirationDate)
  {
    $this->expirationDate = $expirationDate;
  }

  public function getGender()
  {
    return $this->gender;
  }

  public function setGender($gender)
  {
    $this->gender = $gender;
  }

  public function getGoogleProductCategory()
  {
    return $this->googleProductCategory;
  }

  public function setGoogleProductCategory($googleProductCategory)
  {
    $this->googleProductCategory = $googleProductCategory;
  }

  public function getGtin()
  {
    return $this->gtin;
  }

  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIdentifierExists()
  {
    return $this->identifierExists;
  }

  public function setIdentifierExists($identifierExists)
  {
    $this->identifierExists = $identifierExists;
  }

  public function getImageLink()
  {
    return $this->imageLink;
  }

  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }

  public function setInstallment(Google_Service_ShoppingContent_Installment $installment)
  {
    $this->installment = $installment;
  }
  public function getInstallment()
  {
    return $this->installment;
  }

  public function getIsBundle()
  {
    return $this->isBundle;
  }

  public function setIsBundle($isBundle)
  {
    $this->isBundle = $isBundle;
  }

  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }

  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setLink($link)
  {
    $this->link = $link;
  }

  public function setLoyaltyPoints(Google_Service_ShoppingContent_LoyaltyPoints $loyaltyPoints)
  {
    $this->loyaltyPoints = $loyaltyPoints;
  }
  public function getLoyaltyPoints()
  {
    return $this->loyaltyPoints;
  }

  public function getMaterial()
  {
    return $this->material;
  }

  public function setMaterial($material)
  {
    $this->material = $material;
  }

  public function getMobileLink()
  {
    return $this->mobileLink;
  }

  public function setMobileLink($mobileLink)
  {
    $this->mobileLink = $mobileLink;
  }

  public function getMpn()
  {
    return $this->mpn;
  }

  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }

  public function getMultipack()
  {
    return $this->multipack;
  }

  public function setMultipack($multipack)
  {
    $this->multipack = $multipack;
  }

  public function getOfferId()
  {
    return $this->offerId;
  }

  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }

  public function getOnlineOnly()
  {
    return $this->onlineOnly;
  }

  public function setOnlineOnly($onlineOnly)
  {
    $this->onlineOnly = $onlineOnly;
  }

  public function getPattern()
  {
    return $this->pattern;
  }

  public function setPattern($pattern)
  {
    $this->pattern = $pattern;
  }

  public function setPrice(Google_Service_ShoppingContent_Price $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }

  public function getProductType()
  {
    return $this->productType;
  }

  public function setProductType($productType)
  {
    $this->productType = $productType;
  }

  public function getPromotionIds()
  {
    return $this->promotionIds;
  }

  public function setPromotionIds($promotionIds)
  {
    $this->promotionIds = $promotionIds;
  }

  public function setSalePrice(Google_Service_ShoppingContent_Price $salePrice)
  {
    $this->salePrice = $salePrice;
  }
  public function getSalePrice()
  {
    return $this->salePrice;
  }

  public function getSalePriceEffectiveDate()
  {
    return $this->salePriceEffectiveDate;
  }

  public function setSalePriceEffectiveDate($salePriceEffectiveDate)
  {
    $this->salePriceEffectiveDate = $salePriceEffectiveDate;
  }

  public function getSellOnGoogleQuantity()
  {
    return $this->sellOnGoogleQuantity;
  }

  public function setSellOnGoogleQuantity($sellOnGoogleQuantity)
  {
    $this->sellOnGoogleQuantity = $sellOnGoogleQuantity;
  }

  public function setShipping($shipping)
  {
    $this->shipping = $shipping;
  }
  public function getShipping()
  {
    return $this->shipping;
  }
  public function setShippingHeight(Google_Service_ShoppingContent_ProductShippingDimension $shippingHeight)
  {
    $this->shippingHeight = $shippingHeight;
  }
  public function getShippingHeight()
  {
    return $this->shippingHeight;
  }

  public function getShippingLabel()
  {
    return $this->shippingLabel;
  }

  public function setShippingLabel($shippingLabel)
  {
    $this->shippingLabel = $shippingLabel;
  }

  public function setShippingLength(Google_Service_ShoppingContent_ProductShippingDimension $shippingLength)
  {
    $this->shippingLength = $shippingLength;
  }
  public function getShippingLength()
  {
    return $this->shippingLength;
  }
  public function setShippingWeight(Google_Service_ShoppingContent_ProductShippingWeight $shippingWeight)
  {
    $this->shippingWeight = $shippingWeight;
  }
  public function getShippingWeight()
  {
    return $this->shippingWeight;
  }
  public function setShippingWidth(Google_Service_ShoppingContent_ProductShippingDimension $shippingWidth)
  {
    $this->shippingWidth = $shippingWidth;
  }
  public function getShippingWidth()
  {
    return $this->shippingWidth;
  }

  public function getSizeSystem()
  {
    return $this->sizeSystem;
  }

  public function setSizeSystem($sizeSystem)
  {
    $this->sizeSystem = $sizeSystem;
  }

  public function getSizeType()
  {
    return $this->sizeType;
  }

  public function setSizeType($sizeType)
  {
    $this->sizeType = $sizeType;
  }

  public function getSizes()
  {
    return $this->sizes;
  }

  public function setSizes($sizes)
  {
    $this->sizes = $sizes;
  }

  public function getTargetCountry()
  {
    return $this->targetCountry;
  }

  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }

  public function setTaxes($taxes)
  {
    $this->taxes = $taxes;
  }
  public function getTaxes()
  {
    return $this->taxes;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function setUnitPricingBaseMeasure(Google_Service_ShoppingContent_ProductUnitPricingBaseMeasure $unitPricingBaseMeasure)
  {
    $this->unitPricingBaseMeasure = $unitPricingBaseMeasure;
  }
  public function getUnitPricingBaseMeasure()
  {
    return $this->unitPricingBaseMeasure;
  }
  public function setUnitPricingMeasure(Google_Service_ShoppingContent_ProductUnitPricingMeasure $unitPricingMeasure)
  {
    $this->unitPricingMeasure = $unitPricingMeasure;
  }
  public function getUnitPricingMeasure()
  {
    return $this->unitPricingMeasure;
  }

  public function getValidatedDestinations()
  {
    return $this->validatedDestinations;
  }

  public function setValidatedDestinations($validatedDestinations)
  {
    $this->validatedDestinations = $validatedDestinations;
  }

  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class Google_Service_ShoppingContent_ProductAspect extends Google_Model
{
  public $aspectName;
  public $destinationName;
  public $intention;
  protected $internal_gapi_mappings = array(
  );

  public function getAspectName()
  {
    return $this->aspectName;
  }

  public function setAspectName($aspectName)
  {
    $this->aspectName = $aspectName;
  }

  public function getDestinationName()
  {
    return $this->destinationName;
  }

  public function setDestinationName($destinationName)
  {
    $this->destinationName = $destinationName;
  }

  public function getIntention()
  {
    return $this->intention;
  }

  public function setIntention($intention)
  {
    $this->intention = $intention;
  }
}

class Google_Service_ShoppingContent_ProductCustomAttribute extends Google_Model
{
  public $name;
  public $type;
  public $unit;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getUnit()
  {
    return $this->unit;
  }

  public function setUnit($unit)
  {
    $this->unit = $unit;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}

class Google_Service_ShoppingContent_ProductCustomGroup extends Google_Collection
{
  public $name;
  protected $collection_key = 'attributes';
  protected $internal_gapi_mappings = array(
  );
  protected $attributesType = 'Google_Service_ShoppingContent_ProductCustomAttribute';
  protected $attributesDataType = 'array';

  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }
}

class Google_Service_ShoppingContent_ProductDestination extends Google_Model
{
  public $destinationName;
  public $intention;
  protected $internal_gapi_mappings = array(
  );

  public function getDestinationName()
  {
    return $this->destinationName;
  }

  public function setDestinationName($destinationName)
  {
    $this->destinationName = $destinationName;
  }

  public function getIntention()
  {
    return $this->intention;
  }

  public function setIntention($intention)
  {
    $this->intention = $intention;
  }
}

class Google_Service_ShoppingContent_ProductShipping extends Google_Model
{
  public $country;
  public $locationGroupName;
  public $locationId;
  public $postalCode;
  public $region;
  public $service;
  protected $internal_gapi_mappings = array(
  );
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getLocationGroupName()
  {
    return $this->locationGroupName;
  }

  public function setLocationGroupName($locationGroupName)
  {
    $this->locationGroupName = $locationGroupName;
  }

  public function getLocationId()
  {
    return $this->locationId;
  }

  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }

  public function getPostalCode()
  {
    return $this->postalCode;
  }

  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }

  public function setPrice(Google_Service_ShoppingContent_Price $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getService()
  {
    return $this->service;
  }

  public function setService($service)
  {
    $this->service = $service;
  }
}

class Google_Service_ShoppingContent_ProductShippingDimension extends Google_Model
{
  public $unit;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getUnit()
  {
    return $this->unit;
  }

  public function setUnit($unit)
  {
    $this->unit = $unit;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}

class Google_Service_ShoppingContent_ProductShippingWeight extends Google_Model
{
  public $unit;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getUnit()
  {
    return $this->unit;
  }

  public function setUnit($unit)
  {
    $this->unit = $unit;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}

class Google_Service_ShoppingContent_ProductStatus extends Google_Collection
{
  public $creationDate;
  public $googleExpirationDate;
  public $kind;
  public $lastUpdateDate;
  public $link;
  public $productId;
  public $title;
  protected $collection_key = 'destinationStatuses';
  protected $internal_gapi_mappings = array(
  );
  protected $dataQualityIssuesType = 'Google_Service_ShoppingContent_ProductStatusDataQualityIssue';
  protected $dataQualityIssuesDataType = 'array';
  protected $destinationStatusesType = 'Google_Service_ShoppingContent_ProductStatusDestinationStatus';
  protected $destinationStatusesDataType = 'array';

  public function getCreationDate()
  {
    return $this->creationDate;
  }

  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }

  public function setDataQualityIssues($dataQualityIssues)
  {
    $this->dataQualityIssues = $dataQualityIssues;
  }
  public function getDataQualityIssues()
  {
    return $this->dataQualityIssues;
  }
  public function setDestinationStatuses($destinationStatuses)
  {
    $this->destinationStatuses = $destinationStatuses;
  }
  public function getDestinationStatuses()
  {
    return $this->destinationStatuses;
  }

  public function getGoogleExpirationDate()
  {
    return $this->googleExpirationDate;
  }

  public function setGoogleExpirationDate($googleExpirationDate)
  {
    $this->googleExpirationDate = $googleExpirationDate;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastUpdateDate()
  {
    return $this->lastUpdateDate;
  }

  public function setLastUpdateDate($lastUpdateDate)
  {
    $this->lastUpdateDate = $lastUpdateDate;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setLink($link)
  {
    $this->link = $link;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }
}

class Google_Service_ShoppingContent_ProductStatusDataQualityIssue extends Google_Model
{
  public $detail;
  public $fetchStatus;
  public $id;
  public $location;
  public $severity;
  public $timestamp;
  public $valueOnLandingPage;
  public $valueProvided;
  protected $internal_gapi_mappings = array(
  );

  public function getDetail()
  {
    return $this->detail;
  }

  public function setDetail($detail)
  {
    $this->detail = $detail;
  }

  public function getFetchStatus()
  {
    return $this->fetchStatus;
  }

  public function setFetchStatus($fetchStatus)
  {
    $this->fetchStatus = $fetchStatus;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getSeverity()
  {
    return $this->severity;
  }

  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }

  public function getTimestamp()
  {
    return $this->timestamp;
  }

  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }

  public function getValueOnLandingPage()
  {
    return $this->valueOnLandingPage;
  }

  public function setValueOnLandingPage($valueOnLandingPage)
  {
    $this->valueOnLandingPage = $valueOnLandingPage;
  }

  public function getValueProvided()
  {
    return $this->valueProvided;
  }

  public function setValueProvided($valueProvided)
  {
    $this->valueProvided = $valueProvided;
  }
}

class Google_Service_ShoppingContent_ProductStatusDestinationStatus extends Google_Model
{
  public $approvalStatus;
  public $destination;
  public $intention;
  protected $internal_gapi_mappings = array(
  );

  public function getApprovalStatus()
  {
    return $this->approvalStatus;
  }

  public function setApprovalStatus($approvalStatus)
  {
    $this->approvalStatus = $approvalStatus;
  }

  public function getDestination()
  {
    return $this->destination;
  }

  public function setDestination($destination)
  {
    $this->destination = $destination;
  }

  public function getIntention()
  {
    return $this->intention;
  }

  public function setIntention($intention)
  {
    $this->intention = $intention;
  }
}

class Google_Service_ShoppingContent_ProductTax extends Google_Model
{
  public $country;
  public $locationId;
  public $postalCode;
  public $rate;
  public $region;
  public $taxShip;
  protected $internal_gapi_mappings = array(
  );

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getLocationId()
  {
    return $this->locationId;
  }

  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }

  public function getPostalCode()
  {
    return $this->postalCode;
  }

  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }

  public function getRate()
  {
    return $this->rate;
  }

  public function setRate($rate)
  {
    $this->rate = $rate;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getTaxShip()
  {
    return $this->taxShip;
  }

  public function setTaxShip($taxShip)
  {
    $this->taxShip = $taxShip;
  }
}

class Google_Service_ShoppingContent_ProductUnitPricingBaseMeasure extends Google_Model
{
  public $unit;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getUnit()
  {
    return $this->unit;
  }

  public function setUnit($unit)
  {
    $this->unit = $unit;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}

class Google_Service_ShoppingContent_ProductUnitPricingMeasure extends Google_Model
{
  public $unit;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getUnit()
  {
    return $this->unit;
  }

  public function setUnit($unit)
  {
    $this->unit = $unit;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}

class Google_Service_ShoppingContent_ProductsCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_ProductsCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_ProductsCustomBatchRequestEntry extends Google_Model
{
  public $batchId;
  public $merchantId;
  public $method;
  public $productId;
  protected $internal_gapi_mappings = array(
  );
  protected $productType = 'Google_Service_ShoppingContent_Product';
  protected $productDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }

  public function setProduct(Google_Service_ShoppingContent_Product $product)
  {
    $this->product = $product;
  }
  public function getProduct()
  {
    return $this->product;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
}

class Google_Service_ShoppingContent_ProductsCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_ProductsCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_ProductsCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';
  protected $productType = 'Google_Service_ShoppingContent_Product';
  protected $productDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setProduct(Google_Service_ShoppingContent_Product $product)
  {
    $this->product = $product;
  }
  public function getProduct()
  {
    return $this->product;
  }
}

class Google_Service_ShoppingContent_ProductsListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_ShoppingContent_Product';
  protected $resourcesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_ShoppingContent_ProductstatusesCustomBatchRequest extends Google_Collection
{
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_ProductstatusesCustomBatchRequestEntry';
  protected $entriesDataType = 'array';


  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}

class Google_Service_ShoppingContent_ProductstatusesCustomBatchRequestEntry extends Google_Model
{
  public $batchId;
  public $merchantId;
  public $method;
  public $productId;
  protected $internal_gapi_mappings = array(
  );

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
}

class Google_Service_ShoppingContent_ProductstatusesCustomBatchResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'entries';
  protected $internal_gapi_mappings = array(
  );
  protected $entriesType = 'Google_Service_ShoppingContent_ProductstatusesCustomBatchResponseEntry';
  protected $entriesDataType = 'array';

  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}

class Google_Service_ShoppingContent_ProductstatusesCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';
  protected $productStatusType = 'Google_Service_ShoppingContent_ProductStatus';
  protected $productStatusDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setProductStatus(Google_Service_ShoppingContent_ProductStatus $productStatus)
  {
    $this->productStatus = $productStatus;
  }
  public function getProductStatus()
  {
    return $this->productStatus;
  }
}

class Google_Service_ShoppingContent_ProductstatusesListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_ShoppingContent_ProductStatus';
  protected $resourcesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_ShoppingContent_TestOrder extends Google_Collection
{
  public $kind;
  public $predefinedDeliveryAddress;
  public $shippingOption;
  protected $collection_key = 'promotions';
  protected $internal_gapi_mappings = array(
  );
  protected $customerType = 'Google_Service_ShoppingContent_TestOrderCustomer';
  protected $customerDataType = '';
  protected $lineItemsType = 'Google_Service_ShoppingContent_TestOrderLineItem';
  protected $lineItemsDataType = 'array';
  protected $paymentMethodType = 'Google_Service_ShoppingContent_TestOrderPaymentMethod';
  protected $paymentMethodDataType = '';
  protected $promotionsType = 'Google_Service_ShoppingContent_OrderPromotion';
  protected $promotionsDataType = 'array';
  protected $shippingCostType = 'Google_Service_ShoppingContent_Price';
  protected $shippingCostDataType = '';
  protected $shippingCostTaxType = 'Google_Service_ShoppingContent_Price';
  protected $shippingCostTaxDataType = '';

  public function setCustomer(Google_Service_ShoppingContent_TestOrderCustomer $customer)
  {
    $this->customer = $customer;
  }
  public function getCustomer()
  {
    return $this->customer;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  public function getLineItems()
  {
    return $this->lineItems;
  }
  public function setPaymentMethod(Google_Service_ShoppingContent_TestOrderPaymentMethod $paymentMethod)
  {
    $this->paymentMethod = $paymentMethod;
  }
  public function getPaymentMethod()
  {
    return $this->paymentMethod;
  }

  public function getPredefinedDeliveryAddress()
  {
    return $this->predefinedDeliveryAddress;
  }

  public function setPredefinedDeliveryAddress($predefinedDeliveryAddress)
  {
    $this->predefinedDeliveryAddress = $predefinedDeliveryAddress;
  }

  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  public function getPromotions()
  {
    return $this->promotions;
  }
  public function setShippingCost(Google_Service_ShoppingContent_Price $shippingCost)
  {
    $this->shippingCost = $shippingCost;
  }
  public function getShippingCost()
  {
    return $this->shippingCost;
  }
  public function setShippingCostTax(Google_Service_ShoppingContent_Price $shippingCostTax)
  {
    $this->shippingCostTax = $shippingCostTax;
  }
  public function getShippingCostTax()
  {
    return $this->shippingCostTax;
  }

  public function getShippingOption()
  {
    return $this->shippingOption;
  }

  public function setShippingOption($shippingOption)
  {
    $this->shippingOption = $shippingOption;
  }
}

class Google_Service_ShoppingContent_TestOrderCustomer extends Google_Model
{
  public $email;
  public $explicitMarketingPreference;
  public $fullName;
  protected $internal_gapi_mappings = array(
  );

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getExplicitMarketingPreference()
  {
    return $this->explicitMarketingPreference;
  }

  public function setExplicitMarketingPreference($explicitMarketingPreference)
  {
    $this->explicitMarketingPreference = $explicitMarketingPreference;
  }

  public function getFullName()
  {
    return $this->fullName;
  }

  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
}

class Google_Service_ShoppingContent_TestOrderLineItem extends Google_Model
{
  public $quantityOrdered;
  protected $internal_gapi_mappings = array(
  );
  protected $productType = 'Google_Service_ShoppingContent_TestOrderLineItemProduct';
  protected $productDataType = '';
  protected $returnInfoType = 'Google_Service_ShoppingContent_OrderLineItemReturnInfo';
  protected $returnInfoDataType = '';
  protected $shippingDetailsType = 'Google_Service_ShoppingContent_OrderLineItemShippingDetails';
  protected $shippingDetailsDataType = '';
  protected $unitTaxType = 'Google_Service_ShoppingContent_Price';
  protected $unitTaxDataType = '';


  public function setProduct(Google_Service_ShoppingContent_TestOrderLineItemProduct $product)
  {
    $this->product = $product;
  }
  public function getProduct()
  {
    return $this->product;
  }

  public function getQuantityOrdered()
  {
    return $this->quantityOrdered;
  }

  public function setQuantityOrdered($quantityOrdered)
  {
    $this->quantityOrdered = $quantityOrdered;
  }

  public function setReturnInfo(Google_Service_ShoppingContent_OrderLineItemReturnInfo $returnInfo)
  {
    $this->returnInfo = $returnInfo;
  }
  public function getReturnInfo()
  {
    return $this->returnInfo;
  }
  public function setShippingDetails(Google_Service_ShoppingContent_OrderLineItemShippingDetails $shippingDetails)
  {
    $this->shippingDetails = $shippingDetails;
  }
  public function getShippingDetails()
  {
    return $this->shippingDetails;
  }
  public function setUnitTax(Google_Service_ShoppingContent_Price $unitTax)
  {
    $this->unitTax = $unitTax;
  }
  public function getUnitTax()
  {
    return $this->unitTax;
  }
}

class Google_Service_ShoppingContent_TestOrderLineItemProduct extends Google_Collection
{
  public $brand;
  public $channel;
  public $condition;
  public $contentLanguage;
  public $gtin;
  public $imageLink;
  public $itemGroupId;
  public $mpn;
  public $offerId;
  public $targetCountry;
  public $title;
  protected $collection_key = 'variantAttributes';
  protected $internal_gapi_mappings = array(
  );
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';
  protected $variantAttributesType = 'Google_Service_ShoppingContent_OrderLineItemProductVariantAttribute';
  protected $variantAttributesDataType = 'array';

  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getChannel()
  {
    return $this->channel;
  }

  public function setChannel($channel)
  {
    $this->channel = $channel;
  }

  public function getCondition()
  {
    return $this->condition;
  }

  public function setCondition($condition)
  {
    $this->condition = $condition;
  }

  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }

  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }

  public function getGtin()
  {
    return $this->gtin;
  }

  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }

  public function getImageLink()
  {
    return $this->imageLink;
  }

  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }

  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }

  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }

  public function getMpn()
  {
    return $this->mpn;
  }

  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }

  public function getOfferId()
  {
    return $this->offerId;
  }

  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }

  public function setPrice(Google_Service_ShoppingContent_Price $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }

  public function getTargetCountry()
  {
    return $this->targetCountry;
  }

  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function setVariantAttributes($variantAttributes)
  {
    $this->variantAttributes = $variantAttributes;
  }
  public function getVariantAttributes()
  {
    return $this->variantAttributes;
  }
}

class Google_Service_ShoppingContent_TestOrderPaymentMethod extends Google_Model
{
  public $expirationMonth;
  public $expirationYear;
  public $lastFourDigits;
  public $predefinedBillingAddress;
  public $type;
  protected $internal_gapi_mappings = array(
  );

  public function getExpirationMonth()
  {
    return $this->expirationMonth;
  }

  public function setExpirationMonth($expirationMonth)
  {
    $this->expirationMonth = $expirationMonth;
  }

  public function getExpirationYear()
  {
    return $this->expirationYear;
  }

  public function setExpirationYear($expirationYear)
  {
    $this->expirationYear = $expirationYear;
  }

  public function getLastFourDigits()
  {
    return $this->lastFourDigits;
  }

  public function setLastFourDigits($lastFourDigits)
  {
    $this->lastFourDigits = $lastFourDigits;
  }

  public function getPredefinedBillingAddress()
  {
    return $this->predefinedBillingAddress;
  }

  public function setPredefinedBillingAddress($predefinedBillingAddress)
  {
    $this->predefinedBillingAddress = $predefinedBillingAddress;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }
}

class Google_Service_ShoppingContent_Weight extends Google_Model
{
  public $unit;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getUnit()
  {
    return $this->unit;
  }

  public function setUnit($unit)
  {
    $this->unit = $unit;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}
