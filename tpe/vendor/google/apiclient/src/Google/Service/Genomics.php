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
 * Service definition for Genomics (v1).
 *
 * <p>
 * An API to store, process, explore, and share genomic data. It supports
 * reference-based alignments, genetic variants, and reference genomes. This API
 * provides an implementation of the Global Alliance for Genomics and Health
 * (GA4GH) v0.5.1 API as well as several extensions.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Genomics extends Google_Service
{
  /** View and manage your data in Google BigQuery. */
  const BIGQUERY =
      "https://www.googleapis.com/auth/bigquery";
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** Manage your data in Google Cloud Storage. */
  const DEVSTORAGE_READ_WRITE =
      "https://www.googleapis.com/auth/devstorage.read_write";
  /** View and manage Genomics data. */
  const GENOMICS =
      "https://www.googleapis.com/auth/genomics";
  /** View Genomics data. */
  const GENOMICS_READONLY =
      "https://www.googleapis.com/auth/genomics.readonly";

  public $callsets;
  public $datasets;
  public $operations;
  public $readgroupsets;
  public $readgroupsets_coveragebuckets;
  public $reads;
  public $references;
  public $references_bases;
  public $referencesets;
  public $variants;
  public $variantsets;
  

  /**
   * Constructs the internal representation of the Genomics service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://genomics.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1';
    $this->serviceName = 'genomics';

    $this->callsets = new Google_Service_Genomics_Callsets_Resource(
        $this,
        $this->serviceName,
        'callsets',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/callsets',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'v1/callsets/{callSetId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'callSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/callsets/{callSetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'callSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'v1/callsets/{callSetId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'callSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'search' => array(
              'path' => 'v1/callsets/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->datasets = new Google_Service_Genomics_Datasets_Resource(
        $this,
        $this->serviceName,
        'datasets',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/datasets',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'v1/datasets/{datasetId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/datasets/{datasetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getIamPolicy' => array(
              'path' => 'v1/{+resource}:getIamPolicy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1/datasets',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v1/datasets/{datasetId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'setIamPolicy' => array(
              'path' => 'v1/{+resource}:setIamPolicy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'testIamPermissions' => array(
              'path' => 'v1/{+resource}:testIamPermissions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'undelete' => array(
              'path' => 'v1/datasets/{datasetId}:undelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->operations = new Google_Service_Genomics_Operations_Resource(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'cancel' => array(
              'path' => 'v1/{+name}:cancel',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
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
    $this->readgroupsets = new Google_Service_Genomics_Readgroupsets_Resource(
        $this,
        $this->serviceName,
        'readgroupsets',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'export' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}:export',
              'httpMethod' => 'POST',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'import' => array(
              'path' => 'v1/readgroupsets:import',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'search' => array(
              'path' => 'v1/readgroupsets/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->readgroupsets_coveragebuckets = new Google_Service_Genomics_ReadgroupsetsCoveragebuckets_Resource(
        $this,
        $this->serviceName,
        'coveragebuckets',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}/coveragebuckets',
              'httpMethod' => 'GET',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'referenceName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'start' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'end' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'targetBucketWidth' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->reads = new Google_Service_Genomics_Reads_Resource(
        $this,
        $this->serviceName,
        'reads',
        array(
          'methods' => array(
            'search' => array(
              'path' => 'v1/reads/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'stream' => array(
              'path' => 'v1/reads:stream',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->references = new Google_Service_Genomics_References_Resource(
        $this,
        $this->serviceName,
        'references',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1/references/{referenceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'referenceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'search' => array(
              'path' => 'v1/references/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->references_bases = new Google_Service_Genomics_ReferencesBases_Resource(
        $this,
        $this->serviceName,
        'bases',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v1/references/{referenceId}/bases',
              'httpMethod' => 'GET',
              'parameters' => array(
                'referenceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'start' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'end' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->referencesets = new Google_Service_Genomics_Referencesets_Resource(
        $this,
        $this->serviceName,
        'referencesets',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1/referencesets/{referenceSetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'referenceSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'search' => array(
              'path' => 'v1/referencesets/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->variants = new Google_Service_Genomics_Variants_Resource(
        $this,
        $this->serviceName,
        'variants',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/variants',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'v1/variants/{variantId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'variantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/variants/{variantId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'variantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'import' => array(
              'path' => 'v1/variants:import',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'v1/variants/{variantId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'variantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'search' => array(
              'path' => 'v1/variants/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'stream' => array(
              'path' => 'v1/variants:stream',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->variantsets = new Google_Service_Genomics_Variantsets_Resource(
        $this,
        $this->serviceName,
        'variantsets',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/variantsets',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'v1/variantsets/{variantSetId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'variantSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'export' => array(
              'path' => 'v1/variantsets/{variantSetId}:export',
              'httpMethod' => 'POST',
              'parameters' => array(
                'variantSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/variantsets/{variantSetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'variantSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'v1/variantsets/{variantSetId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'variantSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'search' => array(
              'path' => 'v1/variantsets/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}


/**
 * The "callsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $callsets = $genomicsService->callsets;
 *  </code>
 */
class Google_Service_Genomics_Callsets_Resource extends Google_Service_Resource
{

  /**
   * Creates a new call set. For the definitions of call sets and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (callsets.create)
   *
   * @param Google_CallSet $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_CallSet
   */
  public function create(Google_Service_Genomics_CallSet $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Genomics_CallSet");
  }

  /**
   * Deletes a call set. For the definitions of call sets and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (callsets.delete)
   *
   * @param string $callSetId The ID of the call set to be deleted.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Empty
   */
  public function delete($callSetId, $optParams = array())
  {
    $params = array('callSetId' => $callSetId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Genomics_Empty");
  }

  /**
   * Gets a call set by ID. For the definitions of call sets and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (callsets.get)
   *
   * @param string $callSetId The ID of the call set.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_CallSet
   */
  public function get($callSetId, $optParams = array())
  {
    $params = array('callSetId' => $callSetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_CallSet");
  }

  /**
   * Updates a call set. For the definitions of call sets and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * This method supports patch semantics. (callsets.patch)
   *
   * @param string $callSetId The ID of the call set to be updated.
   * @param Google_CallSet $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask An optional mask specifying which fields to
   * update. At this time, the only mutable field is name. The only acceptable
   * value is "name". If unspecified, all mutable fields will be updated.
   * @return Google_Service_Genomics_CallSet
   */
  public function patch($callSetId, Google_Service_Genomics_CallSet $postBody, $optParams = array())
  {
    $params = array('callSetId' => $callSetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Genomics_CallSet");
  }

  /**
   * Gets a list of call sets matching the criteria. For the definitions of call
   * sets and other genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * Implements [GlobalAllianceApi.searchCallSets](https://github.com/ga4gh/schema
   * s/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L178).
   * (callsets.search)
   *
   * @param Google_SearchCallSetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_SearchCallSetsResponse
   */
  public function search(Google_Service_Genomics_SearchCallSetsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchCallSetsResponse");
  }
}

/**
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $datasets = $genomicsService->datasets;
 *  </code>
 */
class Google_Service_Genomics_Datasets_Resource extends Google_Service_Resource
{

  /**
   * Creates a new dataset. For the definitions of datasets and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (datasets.create)
   *
   * @param Google_Dataset $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Dataset
   */
  public function create(Google_Service_Genomics_Dataset $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Genomics_Dataset");
  }

  /**
   * Deletes a dataset. For the definitions of datasets and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (datasets.delete)
   *
   * @param string $datasetId The ID of the dataset to be deleted.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Empty
   */
  public function delete($datasetId, $optParams = array())
  {
    $params = array('datasetId' => $datasetId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Genomics_Empty");
  }

  /**
   * Gets a dataset by ID. For the definitions of datasets and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (datasets.get)
   *
   * @param string $datasetId The ID of the dataset.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Dataset
   */
  public function get($datasetId, $optParams = array())
  {
    $params = array('datasetId' => $datasetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_Dataset");
  }

  /**
   * Gets the access control policy for the dataset. This is empty if the policy
   * or resource does not exist. See Getting a Policy for more information. For
   * the definitions of datasets and other genomics resources, see [Fundamentals
   * of Google Genomics](https://cloud.google.com/genomics/fundamentals-of-google-
   * genomics) (datasets.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which policy is being
   * specified. Format is `datasets/`.
   * @param Google_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Policy
   */
  public function getIamPolicy($resource, Google_Service_Genomics_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Genomics_Policy");
  }

  /**
   * Lists datasets within a project. For the definitions of datasets and other
   * genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (datasets.listDatasets)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Required. The project to list datasets for.
   * @opt_param int pageSize The maximum number of results to return in a single
   * page. If unspecified, defaults to 50. The maximum value is 1024.
   * @opt_param string pageToken The continuation token, which is used to page
   * through large result sets. To get the next page of results, set this
   * parameter to the value of `nextPageToken` from the previous response.
   * @return Google_Service_Genomics_ListDatasetsResponse
   */
  public function listDatasets($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Genomics_ListDatasetsResponse");
  }

  /**
   * Updates a dataset. For the definitions of datasets and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * This method supports patch semantics. (datasets.patch)
   *
   * @param string $datasetId The ID of the dataset to be updated.
   * @param Google_Dataset $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask An optional mask specifying which fields to
   * update. At this time, the only mutable field is name. The only acceptable
   * value is "name". If unspecified, all mutable fields will be updated.
   * @return Google_Service_Genomics_Dataset
   */
  public function patch($datasetId, Google_Service_Genomics_Dataset $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Genomics_Dataset");
  }

  /**
   * Sets the access control policy on the specified dataset. Replaces any
   * existing policy. For the definitions of datasets and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * See Setting a Policy for more information. (datasets.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which policy is being
   * specified. Format is `datasets/`.
   * @param Google_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Policy
   */
  public function setIamPolicy($resource, Google_Service_Genomics_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Genomics_Policy");
  }

  /**
   * Returns permissions that a caller has on the specified resource. See Testing
   * Permissions for more information. For the definitions of datasets and other
   * genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (datasets.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which policy is being
   * specified. Format is `datasets/`.
   * @param Google_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_Genomics_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Genomics_TestIamPermissionsResponse");
  }

  /**
   * Undeletes a dataset by restoring a dataset which was deleted via this API.
   * For the definitions of datasets and other genomics resources, see
   * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
   * /fundamentals-of-google-genomics) This operation is only possible for a week
   * after the deletion occurred. (datasets.undelete)
   *
   * @param string $datasetId The ID of the dataset to be undeleted.
   * @param Google_UndeleteDatasetRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Dataset
   */
  public function undelete($datasetId, Google_Service_Genomics_UndeleteDatasetRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('undelete', array($params), "Google_Service_Genomics_Dataset");
  }
}

/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $operations = $genomicsService->operations;
 *  </code>
 */
class Google_Service_Genomics_Operations_Resource extends Google_Service_Resource
{

  /**
   * Starts asynchronous cancellation on a long-running operation. The server
   * makes a best effort to cancel the operation, but success is not guaranteed.
   * Clients may use Operations.GetOperation or Operations.ListOperations to check
   * whether the cancellation succeeded or the operation completed despite
   * cancellation. (operations.cancel)
   *
   * @param string $name The name of the operation resource to be cancelled.
   * @param Google_CancelOperationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Empty
   */
  public function cancel($name, Google_Service_Genomics_CancelOperationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), "Google_Service_Genomics_Empty");
  }

  /**
   * Gets the latest state of a long-running operation. Clients can use this
   * method to poll the operation result at intervals as recommended by the API
   * service. (operations.get)
   *
   * @param string $name The name of the operation resource.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Operation
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_Operation");
  }

  /**
   * Lists operations that match the specified filter in the request.
   * (operations.listOperations)
   *
   * @param string $name The name of the operation collection.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter A string for filtering Operations. The following
   * filter fields are supported: * projectId: Required. Corresponds to
   * OperationMetadata.projectId. * createTime: The time this job was created, in
   * seconds from the [epoch](http://en.wikipedia.org/wiki/Unix_time). Can use
   * `>=` and/or `= 1432140000` * `projectId = my-project AND createTime >=
   * 1432140000 AND createTime <= 1432150000 AND status = RUNNING`
   * @opt_param int pageSize The maximum number of results to return. If
   * unspecified, defaults to 256. The maximum value is 2048.
   * @opt_param string pageToken The standard list page token.
   * @return Google_Service_Genomics_ListOperationsResponse
   */
  public function listOperations($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Genomics_ListOperationsResponse");
  }
}

/**
 * The "readgroupsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $readgroupsets = $genomicsService->readgroupsets;
 *  </code>
 */
class Google_Service_Genomics_Readgroupsets_Resource extends Google_Service_Resource
{

  /**
   * Deletes a read group set. For the definitions of read group sets and other
   * genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (readgroupsets.delete)
   *
   * @param string $readGroupSetId The ID of the read group set to be deleted. The
   * caller must have WRITE permissions to the dataset associated with this read
   * group set.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Empty
   */
  public function delete($readGroupSetId, $optParams = array())
  {
    $params = array('readGroupSetId' => $readGroupSetId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Genomics_Empty");
  }

  /**
   * Exports a read group set to a BAM file in Google Cloud Storage. For the
   * definitions of read group sets and other genomics resources, see
   * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
   * /fundamentals-of-google-genomics) Note that currently there may be some
   * differences between exported BAM files and the original BAM file at the time
   * of import. See
   * [ImportReadGroupSets](google.genomics.v1.ReadServiceV1.ImportReadGroupSets)
   * for caveats. (readgroupsets.export)
   *
   * @param string $readGroupSetId Required. The ID of the read group set to
   * export. The caller must have READ access to this read group set.
   * @param Google_ExportReadGroupSetRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Operation
   */
  public function export($readGroupSetId, Google_Service_Genomics_ExportReadGroupSetRequest $postBody, $optParams = array())
  {
    $params = array('readGroupSetId' => $readGroupSetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('export', array($params), "Google_Service_Genomics_Operation");
  }

  /**
   * Gets a read group set by ID. For the definitions of read group sets and other
   * genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (readgroupsets.get)
   *
   * @param string $readGroupSetId The ID of the read group set.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_ReadGroupSet
   */
  public function get($readGroupSetId, $optParams = array())
  {
    $params = array('readGroupSetId' => $readGroupSetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_ReadGroupSet");
  }

  /**
   * Creates read group sets by asynchronously importing the provided information.
   * For the definitions of read group sets and other genomics resources, see
   * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
   * /fundamentals-of-google-genomics) The caller must have WRITE permissions to
   * the dataset. ## Notes on [BAM](https://samtools.github.io/hts-
   * specs/SAMv1.pdf) import - Tags will be converted to strings - tag types are
   * not preserved - Comments (`@CO`) in the input file header will not be
   * preserved - Original header order of references (`@SQ`) will not be preserved
   * - Any reverse stranded unmapped reads will be reverse complemented, and their
   * qualities (also the "BQ" and "OQ" tags, if any) will be reversed - Unmapped
   * reads will be stripped of positional information (reference name and
   * position) (readgroupsets.import)
   *
   * @param Google_ImportReadGroupSetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Operation
   */
  public function import(Google_Service_Genomics_ImportReadGroupSetsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "Google_Service_Genomics_Operation");
  }

  /**
   * Updates a read group set. For the definitions of read group sets and other
   * genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * This method supports patch semantics. (readgroupsets.patch)
   *
   * @param string $readGroupSetId The ID of the read group set to be updated. The
   * caller must have WRITE permissions to the dataset associated with this read
   * group set.
   * @param Google_ReadGroupSet $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask An optional mask specifying which fields to
   * update. Supported fields: * name. * referenceSetId. Leaving `updateMask`
   * unset is equivalent to specifying all mutable fields.
   * @return Google_Service_Genomics_ReadGroupSet
   */
  public function patch($readGroupSetId, Google_Service_Genomics_ReadGroupSet $postBody, $optParams = array())
  {
    $params = array('readGroupSetId' => $readGroupSetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Genomics_ReadGroupSet");
  }

  /**
   * Searches for read group sets matching the criteria. For the definitions of
   * read group sets and other genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * Implements [GlobalAllianceApi.searchReadGroupSets](https://github.com/ga4gh/s
   * chemas/blob/v0.5.1/src/main/resources/avro/readmethods.avdl#L135).
   * (readgroupsets.search)
   *
   * @param Google_SearchReadGroupSetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_SearchReadGroupSetsResponse
   */
  public function search(Google_Service_Genomics_SearchReadGroupSetsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchReadGroupSetsResponse");
  }
}

/**
 * The "coveragebuckets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $coveragebuckets = $genomicsService->coveragebuckets;
 *  </code>
 */
class Google_Service_Genomics_ReadgroupsetsCoveragebuckets_Resource extends Google_Service_Resource
{

  /**
   * Lists fixed width coverage buckets for a read group set, each of which
   * correspond to a range of a reference sequence. Each bucket summarizes
   * coverage information across its corresponding genomic range. For the
   * definitions of read group sets and other genomics resources, see
   * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
   * /fundamentals-of-google-genomics) Coverage is defined as the number of reads
   * which are aligned to a given base in the reference sequence. Coverage buckets
   * are available at several precomputed bucket widths, enabling retrieval of
   * various coverage 'zoom levels'. The caller must have READ permissions for the
   * target read group set. (coveragebuckets.listReadgroupsetsCoveragebuckets)
   *
   * @param string $readGroupSetId Required. The ID of the read group set over
   * which coverage is requested.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string referenceName The name of the reference to query, within
   * the reference set associated with this query. Optional.
   * @opt_param string start The start position of the range on the reference,
   * 0-based inclusive. If specified, `referenceName` must also be specified.
   * Defaults to 0.
   * @opt_param string end The end position of the range on the reference, 0-based
   * exclusive. If specified, `referenceName` must also be specified. If unset or
   * 0, defaults to the length of the reference.
   * @opt_param string targetBucketWidth The desired width of each reported
   * coverage bucket in base pairs. This will be rounded down to the nearest
   * precomputed bucket width; the value of which is returned as `bucketWidth` in
   * the response. Defaults to infinity (each bucket spans an entire reference
   * sequence) or the length of the target range, if specified. The smallest
   * precomputed `bucketWidth` is currently 2048 base pairs; this is subject to
   * change.
   * @opt_param string pageToken The continuation token, which is used to page
   * through large result sets. To get the next page of results, set this
   * parameter to the value of `nextPageToken` from the previous response.
   * @opt_param int pageSize The maximum number of results to return in a single
   * page. If unspecified, defaults to 1024. The maximum value is 2048.
   * @return Google_Service_Genomics_ListCoverageBucketsResponse
   */
  public function listReadgroupsetsCoveragebuckets($readGroupSetId, $optParams = array())
  {
    $params = array('readGroupSetId' => $readGroupSetId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Genomics_ListCoverageBucketsResponse");
  }
}

/**
 * The "reads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $reads = $genomicsService->reads;
 *  </code>
 */
class Google_Service_Genomics_Reads_Resource extends Google_Service_Resource
{

  /**
   * Gets a list of reads for one or more read group sets. For the definitions of
   * read group sets and other genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * Reads search operates over a genomic coordinate space of reference sequence &
   * position defined over the reference sequences to which the requested read
   * group sets are aligned. If a target positional range is specified, search
   * returns all reads whose alignment to the reference genome overlap the range.
   * A query which specifies only read group set IDs yields all reads in those
   * read group sets, including unmapped reads. All reads returned (including
   * reads on subsequent pages) are ordered by genomic coordinate (by reference
   * sequence, then position). Reads with equivalent genomic coordinates are
   * returned in an unspecified order. This order is consistent, such that two
   * queries for the same content (regardless of page size) yield reads in the
   * same order across their respective streams of paginated responses. Implements
   * [GlobalAllianceApi.searchReads](https://github.com/ga4gh/schemas/blob/v0.5.1/
   * src/main/resources/avro/readmethods.avdl#L85). (reads.search)
   *
   * @param Google_SearchReadsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_SearchReadsResponse
   */
  public function search(Google_Service_Genomics_SearchReadsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchReadsResponse");
  }

  /**
   * Returns a stream of all the reads matching the search request, ordered by
   * reference name, position, and ID. (reads.stream)
   *
   * @param Google_StreamReadsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_StreamReadsResponse
   */
  public function stream(Google_Service_Genomics_StreamReadsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('stream', array($params), "Google_Service_Genomics_StreamReadsResponse");
  }
}

/**
 * The "references" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $references = $genomicsService->references;
 *  </code>
 */
class Google_Service_Genomics_References_Resource extends Google_Service_Resource
{

  /**
   * Gets a reference. For the definitions of references and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * Implements [GlobalAllianceApi.getReference](https://github.com/ga4gh/schemas/
   * blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L158).
   * (references.get)
   *
   * @param string $referenceId The ID of the reference.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Reference
   */
  public function get($referenceId, $optParams = array())
  {
    $params = array('referenceId' => $referenceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_Reference");
  }

  /**
   * Searches for references which match the given criteria. For the definitions
   * of references and other genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * Implements [GlobalAllianceApi.searchReferences](https://github.com/ga4gh/sche
   * mas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L146).
   * (references.search)
   *
   * @param Google_SearchReferencesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_SearchReferencesResponse
   */
  public function search(Google_Service_Genomics_SearchReferencesRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchReferencesResponse");
  }
}

/**
 * The "bases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $bases = $genomicsService->bases;
 *  </code>
 */
class Google_Service_Genomics_ReferencesBases_Resource extends Google_Service_Resource
{

  /**
   * Lists the bases in a reference, optionally restricted to a range. For the
   * definitions of references and other genomics resources, see [Fundamentals of
   * Google Genomics](https://cloud.google.com/genomics/fundamentals-of-google-
   * genomics) Implements [GlobalAllianceApi.getReferenceBases](https://github.com
   * /ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L221
   * ). (bases.listReferencesBases)
   *
   * @param string $referenceId The ID of the reference.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string start The start position (0-based) of this query. Defaults
   * to 0.
   * @opt_param string end The end position (0-based, exclusive) of this query.
   * Defaults to the length of this reference.
   * @opt_param string pageToken The continuation token, which is used to page
   * through large result sets. To get the next page of results, set this
   * parameter to the value of `nextPageToken` from the previous response.
   * @opt_param int pageSize The maximum number of bases to return in a single
   * page. If unspecified, defaults to 200Kbp (kilo base pairs). The maximum value
   * is 10Mbp (mega base pairs).
   * @return Google_Service_Genomics_ListBasesResponse
   */
  public function listReferencesBases($referenceId, $optParams = array())
  {
    $params = array('referenceId' => $referenceId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Genomics_ListBasesResponse");
  }
}

/**
 * The "referencesets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $referencesets = $genomicsService->referencesets;
 *  </code>
 */
class Google_Service_Genomics_Referencesets_Resource extends Google_Service_Resource
{

  /**
   * Gets a reference set. For the definitions of references and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * Implements [GlobalAllianceApi.getReferenceSet](https://github.com/ga4gh/schem
   * as/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L83).
   * (referencesets.get)
   *
   * @param string $referenceSetId The ID of the reference set.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_ReferenceSet
   */
  public function get($referenceSetId, $optParams = array())
  {
    $params = array('referenceSetId' => $referenceSetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_ReferenceSet");
  }

  /**
   * Searches for reference sets which match the given criteria. For the
   * definitions of references and other genomics resources, see [Fundamentals of
   * Google Genomics](https://cloud.google.com/genomics/fundamentals-of-google-
   * genomics) Implements [GlobalAllianceApi.searchReferenceSets](https://github.c
   * om/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L7
   * 1) (referencesets.search)
   *
   * @param Google_SearchReferenceSetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_SearchReferenceSetsResponse
   */
  public function search(Google_Service_Genomics_SearchReferenceSetsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchReferenceSetsResponse");
  }
}

/**
 * The "variants" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $variants = $genomicsService->variants;
 *  </code>
 */
class Google_Service_Genomics_Variants_Resource extends Google_Service_Resource
{

  /**
   * Creates a new variant. For the definitions of variants and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (variants.create)
   *
   * @param Google_Variant $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Variant
   */
  public function create(Google_Service_Genomics_Variant $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Genomics_Variant");
  }

  /**
   * Deletes a variant. For the definitions of variants and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (variants.delete)
   *
   * @param string $variantId The ID of the variant to be deleted.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Empty
   */
  public function delete($variantId, $optParams = array())
  {
    $params = array('variantId' => $variantId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Genomics_Empty");
  }

  /**
   * Gets a variant by ID. For the definitions of variants and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (variants.get)
   *
   * @param string $variantId The ID of the variant.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Variant
   */
  public function get($variantId, $optParams = array())
  {
    $params = array('variantId' => $variantId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_Variant");
  }

  /**
   * Creates variant data by asynchronously importing the provided information.
   * For the definitions of variant sets and other genomics resources, see
   * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
   * /fundamentals-of-google-genomics) The variants for import will be merged with
   * any existing variant that matches its reference sequence, start, end,
   * reference bases, and alternative bases. If no such variant exists, a new one
   * will be created. When variants are merged, the call information from the new
   * variant is added to the existing variant, and other fields (such as key/value
   * pairs) are discarded. In particular, this means for merged VCF variants that
   * have conflicting INFO fields, some data will be arbitrarily discarded. As a
   * special case, for single-sample VCF files, QUAL and FILTER fields will be
   * moved to the call level; these are sometimes interpreted in a call-specific
   * context. Imported VCF headers are appended to the metadata already in a
   * variant set. (variants.import)
   *
   * @param Google_ImportVariantsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Operation
   */
  public function import(Google_Service_Genomics_ImportVariantsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "Google_Service_Genomics_Operation");
  }

  /**
   * Updates a variant. For the definitions of variants and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * This method supports patch semantics. Returns the modified variant without
   * its calls. (variants.patch)
   *
   * @param string $variantId The ID of the variant to be updated.
   * @param Google_Variant $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask An optional mask specifying which fields to
   * update. At this time, mutable fields are names and info. Acceptable values
   * are "names" and "info". If unspecified, all mutable fields will be updated.
   * @return Google_Service_Genomics_Variant
   */
  public function patch($variantId, Google_Service_Genomics_Variant $postBody, $optParams = array())
  {
    $params = array('variantId' => $variantId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Genomics_Variant");
  }

  /**
   * Gets a list of variants matching the criteria. For the definitions of
   * variants and other genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * Implements [GlobalAllianceApi.searchVariants](https://github.com/ga4gh/schema
   * s/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L126).
   * (variants.search)
   *
   * @param Google_SearchVariantsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_SearchVariantsResponse
   */
  public function search(Google_Service_Genomics_SearchVariantsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchVariantsResponse");
  }

  /**
   * Returns a stream of all the variants matching the search request, ordered by
   * reference name, position, and ID. (variants.stream)
   *
   * @param Google_StreamVariantsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_StreamVariantsResponse
   */
  public function stream(Google_Service_Genomics_StreamVariantsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('stream', array($params), "Google_Service_Genomics_StreamVariantsResponse");
  }
}

/**
 * The "variantsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $variantsets = $genomicsService->variantsets;
 *  </code>
 */
class Google_Service_Genomics_Variantsets_Resource extends Google_Service_Resource
{

  /**
   * Creates a new variant set. For the definitions of variant sets and other
   * genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * The provided variant set must have a valid `datasetId` set - all other fields
   * are optional. Note that the `id` field will be ignored, as this is assigned
   * by the server. (variantsets.create)
   *
   * @param Google_VariantSet $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_VariantSet
   */
  public function create(Google_Service_Genomics_VariantSet $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Genomics_VariantSet");
  }

  /**
   * Deletes the contents of a variant set. The variant set object is not deleted.
   * For the definitions of variant sets and other genomics resources, see
   * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
   * /fundamentals-of-google-genomics) (variantsets.delete)
   *
   * @param string $variantSetId The ID of the variant set to be deleted.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Empty
   */
  public function delete($variantSetId, $optParams = array())
  {
    $params = array('variantSetId' => $variantSetId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Genomics_Empty");
  }

  /**
   * Exports variant set data to an external destination. For the definitions of
   * variant sets and other genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (variantsets.export)
   *
   * @param string $variantSetId Required. The ID of the variant set that contains
   * variant data which should be exported. The caller must have READ access to
   * this variant set.
   * @param Google_ExportVariantSetRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Operation
   */
  public function export($variantSetId, Google_Service_Genomics_ExportVariantSetRequest $postBody, $optParams = array())
  {
    $params = array('variantSetId' => $variantSetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('export', array($params), "Google_Service_Genomics_Operation");
  }

  /**
   * Gets a variant set by ID. For the definitions of variant sets and other
   * genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (variantsets.get)
   *
   * @param string $variantSetId Required. The ID of the variant set.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_VariantSet
   */
  public function get($variantSetId, $optParams = array())
  {
    $params = array('variantSetId' => $variantSetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_VariantSet");
  }

  /**
   * Updates a variant set using patch semantics. For the definitions of variant
   * sets and other genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (variantsets.patch)
   *
   * @param string $variantSetId The ID of the variant to be updated (must already
   * exist).
   * @param Google_VariantSet $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask An optional mask specifying which fields to
   * update. Supported fields: * metadata. Leaving `updateMask` unset is
   * equivalent to specifying all mutable fields.
   * @return Google_Service_Genomics_VariantSet
   */
  public function patch($variantSetId, Google_Service_Genomics_VariantSet $postBody, $optParams = array())
  {
    $params = array('variantSetId' => $variantSetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Genomics_VariantSet");
  }

  /**
   * Returns a list of all variant sets matching search criteria. For the
   * definitions of variant sets and other genomics resources, see [Fundamentals
   * of Google Genomics](https://cloud.google.com/genomics/fundamentals-of-google-
   * genomics) Implements [GlobalAllianceApi.searchVariantSets](https://github.com
   * /ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L49).
   * (variantsets.search)
   *
   * @param Google_SearchVariantSetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_SearchVariantSetsResponse
   */
  public function search(Google_Service_Genomics_SearchVariantSetsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchVariantSetsResponse");
  }
}




class Google_Service_Genomics_Binding extends Google_Collection
{
  public $members;
  public $role;
  protected $collection_key = 'members';
  protected $internal_gapi_mappings = array(
  );

  public function getMembers()
  {
    return $this->members;
  }

  public function setMembers($members)
  {
    $this->members = $members;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function setRole($role)
  {
    $this->role = $role;
  }
}

class Google_Service_Genomics_CallSet extends Google_Collection
{
  public $created;
  public $id;
  public $info;
  public $name;
  public $sampleId;
  public $variantSetIds;
  protected $collection_key = 'variantSetIds';
  protected $internal_gapi_mappings = array(
  );

  public function getCreated()
  {
    return $this->created;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInfo()
  {
    return $this->info;
  }

  public function setInfo($info)
  {
    $this->info = $info;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getSampleId()
  {
    return $this->sampleId;
  }

  public function setSampleId($sampleId)
  {
    $this->sampleId = $sampleId;
  }

  public function getVariantSetIds()
  {
    return $this->variantSetIds;
  }

  public function setVariantSetIds($variantSetIds)
  {
    $this->variantSetIds = $variantSetIds;
  }
}

class Google_Service_Genomics_CancelOperationRequest extends Google_Model
{
}

class Google_Service_Genomics_CigarUnit extends Google_Model
{
  public $operation;
  public $operationLength;
  public $referenceSequence;
  protected $internal_gapi_mappings = array(
  );

  public function getOperation()
  {
    return $this->operation;
  }

  public function setOperation($operation)
  {
    $this->operation = $operation;
  }

  public function getOperationLength()
  {
    return $this->operationLength;
  }

  public function setOperationLength($operationLength)
  {
    $this->operationLength = $operationLength;
  }

  public function getReferenceSequence()
  {
    return $this->referenceSequence;
  }

  public function setReferenceSequence($referenceSequence)
  {
    $this->referenceSequence = $referenceSequence;
  }
}

class Google_Service_Genomics_CloudAuditOptions extends Google_Model
{
}

class Google_Service_Genomics_Condition extends Google_Collection
{
  public $iam;
  public $op;
  public $svc;
  public $sys;
  public $value;
  public $values;
  protected $collection_key = 'values';
  protected $internal_gapi_mappings = array(
  );

  public function getIam()
  {
    return $this->iam;
  }

  public function setIam($iam)
  {
    $this->iam = $iam;
  }

  public function getOp()
  {
    return $this->op;
  }

  public function setOp($op)
  {
    $this->op = $op;
  }

  public function getSvc()
  {
    return $this->svc;
  }

  public function setSvc($svc)
  {
    $this->svc = $svc;
  }

  public function getSys()
  {
    return $this->sys;
  }

  public function setSys($sys)
  {
    $this->sys = $sys;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }

  public function getValues()
  {
    return $this->values;
  }

  public function setValues($values)
  {
    $this->values = $values;
  }
}

class Google_Service_Genomics_CounterOptions extends Google_Model
{
  public $field;
  public $metric;
  protected $internal_gapi_mappings = array(
  );

  public function getField()
  {
    return $this->field;
  }

  public function setField($field)
  {
    $this->field = $field;
  }

  public function getMetric()
  {
    return $this->metric;
  }

  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
}

class Google_Service_Genomics_CoverageBucket extends Google_Model
{
  public $meanCoverage;
  protected $internal_gapi_mappings = array(
  );
  protected $rangeType = 'Google_Service_Genomics_Range';
  protected $rangeDataType = '';

  public function getMeanCoverage()
  {
    return $this->meanCoverage;
  }

  public function setMeanCoverage($meanCoverage)
  {
    $this->meanCoverage = $meanCoverage;
  }

  public function setRange(Google_Service_Genomics_Range $range)
  {
    $this->range = $range;
  }
  public function getRange()
  {
    return $this->range;
  }
}

class Google_Service_Genomics_DataAccessOptions extends Google_Model
{
}

class Google_Service_Genomics_Dataset extends Google_Model
{
  public $createTime;
  public $id;
  public $name;
  public $projectId;
  protected $internal_gapi_mappings = array(
  );

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
}

class Google_Service_Genomics_Empty extends Google_Model
{
}

class Google_Service_Genomics_Experiment extends Google_Model
{
  public $instrumentModel;
  public $libraryId;
  public $platformUnit;
  public $sequencingCenter;
  protected $internal_gapi_mappings = array(
  );

  public function getInstrumentModel()
  {
    return $this->instrumentModel;
  }

  public function setInstrumentModel($instrumentModel)
  {
    $this->instrumentModel = $instrumentModel;
  }

  public function getLibraryId()
  {
    return $this->libraryId;
  }

  public function setLibraryId($libraryId)
  {
    $this->libraryId = $libraryId;
  }

  public function getPlatformUnit()
  {
    return $this->platformUnit;
  }

  public function setPlatformUnit($platformUnit)
  {
    $this->platformUnit = $platformUnit;
  }

  public function getSequencingCenter()
  {
    return $this->sequencingCenter;
  }

  public function setSequencingCenter($sequencingCenter)
  {
    $this->sequencingCenter = $sequencingCenter;
  }
}

class Google_Service_Genomics_ExportReadGroupSetRequest extends Google_Collection
{
  public $exportUri;
  public $projectId;
  public $referenceNames;
  protected $collection_key = 'referenceNames';
  protected $internal_gapi_mappings = array(
  );

  public function getExportUri()
  {
    return $this->exportUri;
  }

  public function setExportUri($exportUri)
  {
    $this->exportUri = $exportUri;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }

  public function getReferenceNames()
  {
    return $this->referenceNames;
  }

  public function setReferenceNames($referenceNames)
  {
    $this->referenceNames = $referenceNames;
  }
}

class Google_Service_Genomics_ExportVariantSetRequest extends Google_Collection
{
  public $bigqueryDataset;
  public $bigqueryTable;
  public $callSetIds;
  public $format;
  public $projectId;
  protected $collection_key = 'callSetIds';
  protected $internal_gapi_mappings = array(
  );

  public function getBigqueryDataset()
  {
    return $this->bigqueryDataset;
  }

  public function setBigqueryDataset($bigqueryDataset)
  {
    $this->bigqueryDataset = $bigqueryDataset;
  }

  public function getBigqueryTable()
  {
    return $this->bigqueryTable;
  }

  public function setBigqueryTable($bigqueryTable)
  {
    $this->bigqueryTable = $bigqueryTable;
  }

  public function getCallSetIds()
  {
    return $this->callSetIds;
  }

  public function setCallSetIds($callSetIds)
  {
    $this->callSetIds = $callSetIds;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
}

class Google_Service_Genomics_GetIamPolicyRequest extends Google_Model
{
}

class Google_Service_Genomics_ImportReadGroupSetsRequest extends Google_Collection
{
  public $datasetId;
  public $partitionStrategy;
  public $referenceSetId;
  public $sourceUris;
  protected $collection_key = 'sourceUris';
  protected $internal_gapi_mappings = array(
  );

  public function getDatasetId()
  {
    return $this->datasetId;
  }

  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }

  public function getPartitionStrategy()
  {
    return $this->partitionStrategy;
  }

  public function setPartitionStrategy($partitionStrategy)
  {
    $this->partitionStrategy = $partitionStrategy;
  }

  public function getReferenceSetId()
  {
    return $this->referenceSetId;
  }

  public function setReferenceSetId($referenceSetId)
  {
    $this->referenceSetId = $referenceSetId;
  }

  public function getSourceUris()
  {
    return $this->sourceUris;
  }

  public function setSourceUris($sourceUris)
  {
    $this->sourceUris = $sourceUris;
  }
}

class Google_Service_Genomics_ImportReadGroupSetsResponse extends Google_Collection
{
  public $readGroupSetIds;
  protected $collection_key = 'readGroupSetIds';
  protected $internal_gapi_mappings = array(
  );

  public function getReadGroupSetIds()
  {
    return $this->readGroupSetIds;
  }

  public function setReadGroupSetIds($readGroupSetIds)
  {
    $this->readGroupSetIds = $readGroupSetIds;
  }
}

class Google_Service_Genomics_ImportVariantsRequest extends Google_Collection
{
  public $format;
  public $normalizeReferenceNames;
  public $sourceUris;
  public $variantSetId;
  protected $collection_key = 'sourceUris';
  protected $internal_gapi_mappings = array(
  );

  public function getFormat()
  {
    return $this->format;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getNormalizeReferenceNames()
  {
    return $this->normalizeReferenceNames;
  }

  public function setNormalizeReferenceNames($normalizeReferenceNames)
  {
    $this->normalizeReferenceNames = $normalizeReferenceNames;
  }

  public function getSourceUris()
  {
    return $this->sourceUris;
  }

  public function setSourceUris($sourceUris)
  {
    $this->sourceUris = $sourceUris;
  }

  public function getVariantSetId()
  {
    return $this->variantSetId;
  }

  public function setVariantSetId($variantSetId)
  {
    $this->variantSetId = $variantSetId;
  }
}

class Google_Service_Genomics_ImportVariantsResponse extends Google_Collection
{
  public $callSetIds;
  protected $collection_key = 'callSetIds';
  protected $internal_gapi_mappings = array(
  );

  public function getCallSetIds()
  {
    return $this->callSetIds;
  }

  public function setCallSetIds($callSetIds)
  {
    $this->callSetIds = $callSetIds;
  }
}

class Google_Service_Genomics_LinearAlignment extends Google_Collection
{
  public $mappingQuality;
  protected $collection_key = 'cigar';
  protected $internal_gapi_mappings = array(
  );
  protected $cigarType = 'Google_Service_Genomics_CigarUnit';
  protected $cigarDataType = 'array';
  protected $positionType = 'Google_Service_Genomics_Position';
  protected $positionDataType = '';


  public function setCigar($cigar)
  {
    $this->cigar = $cigar;
  }
  public function getCigar()
  {
    return $this->cigar;
  }

  public function getMappingQuality()
  {
    return $this->mappingQuality;
  }

  public function setMappingQuality($mappingQuality)
  {
    $this->mappingQuality = $mappingQuality;
  }

  public function setPosition(Google_Service_Genomics_Position $position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
}

class Google_Service_Genomics_ListBasesResponse extends Google_Model
{
  public $nextPageToken;
  public $offset;
  public $sequence;
  protected $internal_gapi_mappings = array(
  );

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getOffset()
  {
    return $this->offset;
  }

  public function setOffset($offset)
  {
    $this->offset = $offset;
  }

  public function getSequence()
  {
    return $this->sequence;
  }

  public function setSequence($sequence)
  {
    $this->sequence = $sequence;
  }
}

class Google_Service_Genomics_ListCoverageBucketsResponse extends Google_Collection
{
  public $bucketWidth;
  public $nextPageToken;
  protected $collection_key = 'coverageBuckets';
  protected $internal_gapi_mappings = array(
  );
  protected $coverageBucketsType = 'Google_Service_Genomics_CoverageBucket';
  protected $coverageBucketsDataType = 'array';

  public function getBucketWidth()
  {
    return $this->bucketWidth;
  }

  public function setBucketWidth($bucketWidth)
  {
    $this->bucketWidth = $bucketWidth;
  }

  public function setCoverageBuckets($coverageBuckets)
  {
    $this->coverageBuckets = $coverageBuckets;
  }
  public function getCoverageBuckets()
  {
    return $this->coverageBuckets;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
}

class Google_Service_Genomics_ListDatasetsResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'datasets';
  protected $internal_gapi_mappings = array(
  );
  protected $datasetsType = 'Google_Service_Genomics_Dataset';
  protected $datasetsDataType = 'array';

  public function setDatasets($datasets)
  {
    $this->datasets = $datasets;
  }
  public function getDatasets()
  {
    return $this->datasets;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
}

class Google_Service_Genomics_ListOperationsResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'operations';
  protected $internal_gapi_mappings = array(
  );
  protected $operationsType = 'Google_Service_Genomics_Operation';
  protected $operationsDataType = 'array';

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  public function getOperations()
  {
    return $this->operations;
  }
}

class Google_Service_Genomics_LogConfig extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $cloudAuditType = 'Google_Service_Genomics_CloudAuditOptions';
  protected $cloudAuditDataType = '';
  protected $counterType = 'Google_Service_Genomics_CounterOptions';
  protected $counterDataType = '';
  protected $dataAccessType = 'Google_Service_Genomics_DataAccessOptions';
  protected $dataAccessDataType = '';


  public function setCloudAudit(Google_Service_Genomics_CloudAuditOptions $cloudAudit)
  {
    $this->cloudAudit = $cloudAudit;
  }
  public function getCloudAudit()
  {
    return $this->cloudAudit;
  }
  public function setCounter(Google_Service_Genomics_CounterOptions $counter)
  {
    $this->counter = $counter;
  }
  public function getCounter()
  {
    return $this->counter;
  }
  public function setDataAccess(Google_Service_Genomics_DataAccessOptions $dataAccess)
  {
    $this->dataAccess = $dataAccess;
  }
  public function getDataAccess()
  {
    return $this->dataAccess;
  }
}

class Google_Service_Genomics_Operation extends Google_Model
{
  public $done;
  public $metadata;
  public $name;
  public $response;
  protected $internal_gapi_mappings = array(
  );
  protected $errorType = 'Google_Service_Genomics_Status';
  protected $errorDataType = '';

  public function getDone()
  {
    return $this->done;
  }

  public function setDone($done)
  {
    $this->done = $done;
  }

  public function setError(Google_Service_Genomics_Status $error)
  {
    $this->error = $error;
  }
  public function getError()
  {
    return $this->error;
  }

  public function getMetadata()
  {
    return $this->metadata;
  }

  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getResponse()
  {
    return $this->response;
  }

  public function setResponse($response)
  {
    $this->response = $response;
  }
}

class Google_Service_Genomics_OperationEvent extends Google_Model
{
  public $description;
  protected $internal_gapi_mappings = array(
  );

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }
}

class Google_Service_Genomics_OperationMetadata extends Google_Collection
{
  public $createTime;
  public $projectId;
  public $request;
  protected $collection_key = 'events';
  protected $internal_gapi_mappings = array(
  );
  protected $eventsType = 'Google_Service_Genomics_OperationEvent';
  protected $eventsDataType = 'array';

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function setEvents($events)
  {
    $this->events = $events;
  }
  public function getEvents()
  {
    return $this->events;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }

  public function getRequest()
  {
    return $this->request;
  }

  public function setRequest($request)
  {
    $this->request = $request;
  }
}

class Google_Service_Genomics_Policy extends Google_Collection
{
  public $etag;
  public $version;
  protected $collection_key = 'rules';
  protected $internal_gapi_mappings = array(
  );
  protected $bindingsType = 'Google_Service_Genomics_Binding';
  protected $bindingsDataType = 'array';
  protected $rulesType = 'Google_Service_Genomics_Rule';
  protected $rulesDataType = 'array';

  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  public function getBindings()
  {
    return $this->bindings;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  public function getRules()
  {
    return $this->rules;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }
}

class Google_Service_Genomics_Position extends Google_Model
{
  public $position;
  public $referenceName;
  public $reverseStrand;
  protected $internal_gapi_mappings = array(
  );

  public function getPosition()
  {
    return $this->position;
  }

  public function setPosition($position)
  {
    $this->position = $position;
  }

  public function getReferenceName()
  {
    return $this->referenceName;
  }

  public function setReferenceName($referenceName)
  {
    $this->referenceName = $referenceName;
  }

  public function getReverseStrand()
  {
    return $this->reverseStrand;
  }

  public function setReverseStrand($reverseStrand)
  {
    $this->reverseStrand = $reverseStrand;
  }
}

class Google_Service_Genomics_Program extends Google_Model
{
  public $commandLine;
  public $id;
  public $name;
  public $prevProgramId;
  public $version;
  protected $internal_gapi_mappings = array(
  );

  public function getCommandLine()
  {
    return $this->commandLine;
  }

  public function setCommandLine($commandLine)
  {
    $this->commandLine = $commandLine;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPrevProgramId()
  {
    return $this->prevProgramId;
  }

  public function setPrevProgramId($prevProgramId)
  {
    $this->prevProgramId = $prevProgramId;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }
}

class Google_Service_Genomics_Range extends Google_Model
{
  public $end;
  public $referenceName;
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

  public function getReferenceName()
  {
    return $this->referenceName;
  }

  public function setReferenceName($referenceName)
  {
    $this->referenceName = $referenceName;
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

class Google_Service_Genomics_Read extends Google_Collection
{
  public $alignedQuality;
  public $alignedSequence;
  public $duplicateFragment;
  public $failedVendorQualityChecks;
  public $fragmentLength;
  public $fragmentName;
  public $id;
  public $info;
  public $numberReads;
  public $properPlacement;
  public $readGroupId;
  public $readGroupSetId;
  public $readNumber;
  public $secondaryAlignment;
  public $supplementaryAlignment;
  protected $collection_key = 'alignedQuality';
  protected $internal_gapi_mappings = array(
  );
  protected $alignmentType = 'Google_Service_Genomics_LinearAlignment';
  protected $alignmentDataType = '';
  protected $nextMatePositionType = 'Google_Service_Genomics_Position';
  protected $nextMatePositionDataType = '';

  public function getAlignedQuality()
  {
    return $this->alignedQuality;
  }

  public function setAlignedQuality($alignedQuality)
  {
    $this->alignedQuality = $alignedQuality;
  }

  public function getAlignedSequence()
  {
    return $this->alignedSequence;
  }

  public function setAlignedSequence($alignedSequence)
  {
    $this->alignedSequence = $alignedSequence;
  }

  public function setAlignment(Google_Service_Genomics_LinearAlignment $alignment)
  {
    $this->alignment = $alignment;
  }
  public function getAlignment()
  {
    return $this->alignment;
  }

  public function getDuplicateFragment()
  {
    return $this->duplicateFragment;
  }

  public function setDuplicateFragment($duplicateFragment)
  {
    $this->duplicateFragment = $duplicateFragment;
  }

  public function getFailedVendorQualityChecks()
  {
    return $this->failedVendorQualityChecks;
  }

  public function setFailedVendorQualityChecks($failedVendorQualityChecks)
  {
    $this->failedVendorQualityChecks = $failedVendorQualityChecks;
  }

  public function getFragmentLength()
  {
    return $this->fragmentLength;
  }

  public function setFragmentLength($fragmentLength)
  {
    $this->fragmentLength = $fragmentLength;
  }

  public function getFragmentName()
  {
    return $this->fragmentName;
  }

  public function setFragmentName($fragmentName)
  {
    $this->fragmentName = $fragmentName;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInfo()
  {
    return $this->info;
  }

  public function setInfo($info)
  {
    $this->info = $info;
  }

  public function setNextMatePosition(Google_Service_Genomics_Position $nextMatePosition)
  {
    $this->nextMatePosition = $nextMatePosition;
  }
  public function getNextMatePosition()
  {
    return $this->nextMatePosition;
  }

  public function getNumberReads()
  {
    return $this->numberReads;
  }

  public function setNumberReads($numberReads)
  {
    $this->numberReads = $numberReads;
  }

  public function getProperPlacement()
  {
    return $this->properPlacement;
  }

  public function setProperPlacement($properPlacement)
  {
    $this->properPlacement = $properPlacement;
  }

  public function getReadGroupId()
  {
    return $this->readGroupId;
  }

  public function setReadGroupId($readGroupId)
  {
    $this->readGroupId = $readGroupId;
  }

  public function getReadGroupSetId()
  {
    return $this->readGroupSetId;
  }

  public function setReadGroupSetId($readGroupSetId)
  {
    $this->readGroupSetId = $readGroupSetId;
  }

  public function getReadNumber()
  {
    return $this->readNumber;
  }

  public function setReadNumber($readNumber)
  {
    $this->readNumber = $readNumber;
  }

  public function getSecondaryAlignment()
  {
    return $this->secondaryAlignment;
  }

  public function setSecondaryAlignment($secondaryAlignment)
  {
    $this->secondaryAlignment = $secondaryAlignment;
  }

  public function getSupplementaryAlignment()
  {
    return $this->supplementaryAlignment;
  }

  public function setSupplementaryAlignment($supplementaryAlignment)
  {
    $this->supplementaryAlignment = $supplementaryAlignment;
  }
}

class Google_Service_Genomics_ReadGroup extends Google_Collection
{
  public $datasetId;
  public $description;
  public $id;
  public $info;
  public $name;
  public $predictedInsertSize;
  public $referenceSetId;
  public $sampleId;
  protected $collection_key = 'programs';
  protected $internal_gapi_mappings = array(
  );
  protected $experimentType = 'Google_Service_Genomics_Experiment';
  protected $experimentDataType = '';
  protected $programsType = 'Google_Service_Genomics_Program';
  protected $programsDataType = 'array';

  public function getDatasetId()
  {
    return $this->datasetId;
  }

  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function setExperiment(Google_Service_Genomics_Experiment $experiment)
  {
    $this->experiment = $experiment;
  }
  public function getExperiment()
  {
    return $this->experiment;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInfo()
  {
    return $this->info;
  }

  public function setInfo($info)
  {
    $this->info = $info;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPredictedInsertSize()
  {
    return $this->predictedInsertSize;
  }

  public function setPredictedInsertSize($predictedInsertSize)
  {
    $this->predictedInsertSize = $predictedInsertSize;
  }

  public function setPrograms($programs)
  {
    $this->programs = $programs;
  }
  public function getPrograms()
  {
    return $this->programs;
  }

  public function getReferenceSetId()
  {
    return $this->referenceSetId;
  }

  public function setReferenceSetId($referenceSetId)
  {
    $this->referenceSetId = $referenceSetId;
  }

  public function getSampleId()
  {
    return $this->sampleId;
  }

  public function setSampleId($sampleId)
  {
    $this->sampleId = $sampleId;
  }
}

class Google_Service_Genomics_ReadGroupSet extends Google_Collection
{
  public $datasetId;
  public $filename;
  public $id;
  public $info;
  public $name;
  public $referenceSetId;
  protected $collection_key = 'readGroups';
  protected $internal_gapi_mappings = array(
  );
  protected $readGroupsType = 'Google_Service_Genomics_ReadGroup';
  protected $readGroupsDataType = 'array';

  public function getDatasetId()
  {
    return $this->datasetId;
  }

  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }

  public function getFilename()
  {
    return $this->filename;
  }

  public function setFilename($filename)
  {
    $this->filename = $filename;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInfo()
  {
    return $this->info;
  }

  public function setInfo($info)
  {
    $this->info = $info;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setReadGroups($readGroups)
  {
    $this->readGroups = $readGroups;
  }
  public function getReadGroups()
  {
    return $this->readGroups;
  }

  public function getReferenceSetId()
  {
    return $this->referenceSetId;
  }

  public function setReferenceSetId($referenceSetId)
  {
    $this->referenceSetId = $referenceSetId;
  }
}

class Google_Service_Genomics_Reference extends Google_Collection
{
  public $id;
  public $length;
  public $md5checksum;
  public $name;
  public $ncbiTaxonId;
  public $sourceAccessions;
  public $sourceUri;
  protected $collection_key = 'sourceAccessions';
  protected $internal_gapi_mappings = array(
  );

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getLength()
  {
    return $this->length;
  }

  public function setLength($length)
  {
    $this->length = $length;
  }

  public function getMd5checksum()
  {
    return $this->md5checksum;
  }

  public function setMd5checksum($md5checksum)
  {
    $this->md5checksum = $md5checksum;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNcbiTaxonId()
  {
    return $this->ncbiTaxonId;
  }

  public function setNcbiTaxonId($ncbiTaxonId)
  {
    $this->ncbiTaxonId = $ncbiTaxonId;
  }

  public function getSourceAccessions()
  {
    return $this->sourceAccessions;
  }

  public function setSourceAccessions($sourceAccessions)
  {
    $this->sourceAccessions = $sourceAccessions;
  }

  public function getSourceUri()
  {
    return $this->sourceUri;
  }

  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
}

class Google_Service_Genomics_ReferenceBound extends Google_Model
{
  public $referenceName;
  public $upperBound;
  protected $internal_gapi_mappings = array(
  );

  public function getReferenceName()
  {
    return $this->referenceName;
  }

  public function setReferenceName($referenceName)
  {
    $this->referenceName = $referenceName;
  }

  public function getUpperBound()
  {
    return $this->upperBound;
  }

  public function setUpperBound($upperBound)
  {
    $this->upperBound = $upperBound;
  }
}

class Google_Service_Genomics_ReferenceSet extends Google_Collection
{
  public $assemblyId;
  public $description;
  public $id;
  public $md5checksum;
  public $ncbiTaxonId;
  public $referenceIds;
  public $sourceAccessions;
  public $sourceUri;
  protected $collection_key = 'sourceAccessions';
  protected $internal_gapi_mappings = array(
  );

  public function getAssemblyId()
  {
    return $this->assemblyId;
  }

  public function setAssemblyId($assemblyId)
  {
    $this->assemblyId = $assemblyId;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getMd5checksum()
  {
    return $this->md5checksum;
  }

  public function setMd5checksum($md5checksum)
  {
    $this->md5checksum = $md5checksum;
  }

  public function getNcbiTaxonId()
  {
    return $this->ncbiTaxonId;
  }

  public function setNcbiTaxonId($ncbiTaxonId)
  {
    $this->ncbiTaxonId = $ncbiTaxonId;
  }

  public function getReferenceIds()
  {
    return $this->referenceIds;
  }

  public function setReferenceIds($referenceIds)
  {
    $this->referenceIds = $referenceIds;
  }

  public function getSourceAccessions()
  {
    return $this->sourceAccessions;
  }

  public function setSourceAccessions($sourceAccessions)
  {
    $this->sourceAccessions = $sourceAccessions;
  }

  public function getSourceUri()
  {
    return $this->sourceUri;
  }

  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
}

class Google_Service_Genomics_Rule extends Google_Collection
{
  public $action;
  public $description;
  public $in;
  public $notIn;
  public $permissions;
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );
  protected $conditionsType = 'Google_Service_Genomics_Condition';
  protected $conditionsDataType = 'array';
  protected $logConfigType = 'Google_Service_Genomics_LogConfig';
  protected $logConfigDataType = 'array';

  public function getAction()
  {
    return $this->action;
  }

  public function setAction($action)
  {
    $this->action = $action;
  }

  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  public function getConditions()
  {
    return $this->conditions;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getIn()
  {
    return $this->in;
  }

  public function setIn($in)
  {
    $this->in = $in;
  }

  public function setLogConfig($logConfig)
  {
    $this->logConfig = $logConfig;
  }
  public function getLogConfig()
  {
    return $this->logConfig;
  }

  public function getNotIn()
  {
    return $this->notIn;
  }

  public function setNotIn($notIn)
  {
    $this->notIn = $notIn;
  }

  public function getPermissions()
  {
    return $this->permissions;
  }

  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
}

class Google_Service_Genomics_SearchCallSetsRequest extends Google_Collection
{
  public $name;
  public $pageSize;
  public $pageToken;
  public $variantSetIds;
  protected $collection_key = 'variantSetIds';
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

  public function getPageSize()
  {
    return $this->pageSize;
  }

  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }

  public function getVariantSetIds()
  {
    return $this->variantSetIds;
  }

  public function setVariantSetIds($variantSetIds)
  {
    $this->variantSetIds = $variantSetIds;
  }
}

class Google_Service_Genomics_SearchCallSetsResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'callSets';
  protected $internal_gapi_mappings = array(
  );
  protected $callSetsType = 'Google_Service_Genomics_CallSet';
  protected $callSetsDataType = 'array';

  public function setCallSets($callSets)
  {
    $this->callSets = $callSets;
  }
  public function getCallSets()
  {
    return $this->callSets;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
}

class Google_Service_Genomics_SearchReadGroupSetsRequest extends Google_Collection
{
  public $datasetIds;
  public $name;
  public $pageSize;
  public $pageToken;
  protected $collection_key = 'datasetIds';
  protected $internal_gapi_mappings = array(
  );

  public function getDatasetIds()
  {
    return $this->datasetIds;
  }

  public function setDatasetIds($datasetIds)
  {
    $this->datasetIds = $datasetIds;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPageSize()
  {
    return $this->pageSize;
  }

  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
}

class Google_Service_Genomics_SearchReadGroupSetsResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'readGroupSets';
  protected $internal_gapi_mappings = array(
  );
  protected $readGroupSetsType = 'Google_Service_Genomics_ReadGroupSet';
  protected $readGroupSetsDataType = 'array';

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setReadGroupSets($readGroupSets)
  {
    $this->readGroupSets = $readGroupSets;
  }
  public function getReadGroupSets()
  {
    return $this->readGroupSets;
  }
}

class Google_Service_Genomics_SearchReadsRequest extends Google_Collection
{
  public $end;
  public $pageSize;
  public $pageToken;
  public $readGroupIds;
  public $readGroupSetIds;
  public $referenceName;
  public $start;
  protected $collection_key = 'readGroupSetIds';
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

  public function getPageSize()
  {
    return $this->pageSize;
  }

  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }

  public function getReadGroupIds()
  {
    return $this->readGroupIds;
  }

  public function setReadGroupIds($readGroupIds)
  {
    $this->readGroupIds = $readGroupIds;
  }

  public function getReadGroupSetIds()
  {
    return $this->readGroupSetIds;
  }

  public function setReadGroupSetIds($readGroupSetIds)
  {
    $this->readGroupSetIds = $readGroupSetIds;
  }

  public function getReferenceName()
  {
    return $this->referenceName;
  }

  public function setReferenceName($referenceName)
  {
    $this->referenceName = $referenceName;
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

class Google_Service_Genomics_SearchReadsResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'alignments';
  protected $internal_gapi_mappings = array(
  );
  protected $alignmentsType = 'Google_Service_Genomics_Read';
  protected $alignmentsDataType = 'array';

  public function setAlignments($alignments)
  {
    $this->alignments = $alignments;
  }
  public function getAlignments()
  {
    return $this->alignments;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
}

class Google_Service_Genomics_SearchReferenceSetsRequest extends Google_Collection
{
  public $accessions;
  public $assemblyId;
  public $md5checksums;
  public $pageSize;
  public $pageToken;
  protected $collection_key = 'md5checksums';
  protected $internal_gapi_mappings = array(
  );

  public function getAccessions()
  {
    return $this->accessions;
  }

  public function setAccessions($accessions)
  {
    $this->accessions = $accessions;
  }

  public function getAssemblyId()
  {
    return $this->assemblyId;
  }

  public function setAssemblyId($assemblyId)
  {
    $this->assemblyId = $assemblyId;
  }

  public function getMd5checksums()
  {
    return $this->md5checksums;
  }

  public function setMd5checksums($md5checksums)
  {
    $this->md5checksums = $md5checksums;
  }

  public function getPageSize()
  {
    return $this->pageSize;
  }

  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
}

class Google_Service_Genomics_SearchReferenceSetsResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'referenceSets';
  protected $internal_gapi_mappings = array(
  );
  protected $referenceSetsType = 'Google_Service_Genomics_ReferenceSet';
  protected $referenceSetsDataType = 'array';

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setReferenceSets($referenceSets)
  {
    $this->referenceSets = $referenceSets;
  }
  public function getReferenceSets()
  {
    return $this->referenceSets;
  }
}

class Google_Service_Genomics_SearchReferencesRequest extends Google_Collection
{
  public $accessions;
  public $md5checksums;
  public $pageSize;
  public $pageToken;
  public $referenceSetId;
  protected $collection_key = 'md5checksums';
  protected $internal_gapi_mappings = array(
  );

  public function getAccessions()
  {
    return $this->accessions;
  }

  public function setAccessions($accessions)
  {
    $this->accessions = $accessions;
  }

  public function getMd5checksums()
  {
    return $this->md5checksums;
  }

  public function setMd5checksums($md5checksums)
  {
    $this->md5checksums = $md5checksums;
  }

  public function getPageSize()
  {
    return $this->pageSize;
  }

  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }

  public function getReferenceSetId()
  {
    return $this->referenceSetId;
  }

  public function setReferenceSetId($referenceSetId)
  {
    $this->referenceSetId = $referenceSetId;
  }
}

class Google_Service_Genomics_SearchReferencesResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'references';
  protected $internal_gapi_mappings = array(
  );
  protected $referencesType = 'Google_Service_Genomics_Reference';
  protected $referencesDataType = 'array';

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setReferences($references)
  {
    $this->references = $references;
  }
  public function getReferences()
  {
    return $this->references;
  }
}

class Google_Service_Genomics_SearchVariantSetsRequest extends Google_Collection
{
  public $datasetIds;
  public $pageSize;
  public $pageToken;
  protected $collection_key = 'datasetIds';
  protected $internal_gapi_mappings = array(
  );

  public function getDatasetIds()
  {
    return $this->datasetIds;
  }

  public function setDatasetIds($datasetIds)
  {
    $this->datasetIds = $datasetIds;
  }

  public function getPageSize()
  {
    return $this->pageSize;
  }

  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
}

class Google_Service_Genomics_SearchVariantSetsResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'variantSets';
  protected $internal_gapi_mappings = array(
  );
  protected $variantSetsType = 'Google_Service_Genomics_VariantSet';
  protected $variantSetsDataType = 'array';

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setVariantSets($variantSets)
  {
    $this->variantSets = $variantSets;
  }
  public function getVariantSets()
  {
    return $this->variantSets;
  }
}

class Google_Service_Genomics_SearchVariantsRequest extends Google_Collection
{
  public $callSetIds;
  public $end;
  public $maxCalls;
  public $pageSize;
  public $pageToken;
  public $referenceName;
  public $start;
  public $variantName;
  public $variantSetIds;
  protected $collection_key = 'variantSetIds';
  protected $internal_gapi_mappings = array(
  );

  public function getCallSetIds()
  {
    return $this->callSetIds;
  }

  public function setCallSetIds($callSetIds)
  {
    $this->callSetIds = $callSetIds;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function setEnd($end)
  {
    $this->end = $end;
  }

  public function getMaxCalls()
  {
    return $this->maxCalls;
  }

  public function setMaxCalls($maxCalls)
  {
    $this->maxCalls = $maxCalls;
  }

  public function getPageSize()
  {
    return $this->pageSize;
  }

  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }

  public function getReferenceName()
  {
    return $this->referenceName;
  }

  public function setReferenceName($referenceName)
  {
    $this->referenceName = $referenceName;
  }

  public function getStart()
  {
    return $this->start;
  }

  public function setStart($start)
  {
    $this->start = $start;
  }

  public function getVariantName()
  {
    return $this->variantName;
  }

  public function setVariantName($variantName)
  {
    $this->variantName = $variantName;
  }

  public function getVariantSetIds()
  {
    return $this->variantSetIds;
  }

  public function setVariantSetIds($variantSetIds)
  {
    $this->variantSetIds = $variantSetIds;
  }
}

class Google_Service_Genomics_SearchVariantsResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'variants';
  protected $internal_gapi_mappings = array(
  );
  protected $variantsType = 'Google_Service_Genomics_Variant';
  protected $variantsDataType = 'array';

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function setVariants($variants)
  {
    $this->variants = $variants;
  }
  public function getVariants()
  {
    return $this->variants;
  }
}

class Google_Service_Genomics_SetIamPolicyRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $policyType = 'Google_Service_Genomics_Policy';
  protected $policyDataType = '';


  public function setPolicy(Google_Service_Genomics_Policy $policy)
  {
    $this->policy = $policy;
  }
  public function getPolicy()
  {
    return $this->policy;
  }
}

class Google_Service_Genomics_Status extends Google_Collection
{
  public $code;
  public $details;
  public $message;
  protected $collection_key = 'details';
  protected $internal_gapi_mappings = array(
  );

  public function getCode()
  {
    return $this->code;
  }

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getDetails()
  {
    return $this->details;
  }

  public function setDetails($details)
  {
    $this->details = $details;
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

class Google_Service_Genomics_StreamReadsRequest extends Google_Model
{
  public $end;
  public $projectId;
  public $readGroupSetId;
  public $referenceName;
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

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }

  public function getReadGroupSetId()
  {
    return $this->readGroupSetId;
  }

  public function setReadGroupSetId($readGroupSetId)
  {
    $this->readGroupSetId = $readGroupSetId;
  }

  public function getReferenceName()
  {
    return $this->referenceName;
  }

  public function setReferenceName($referenceName)
  {
    $this->referenceName = $referenceName;
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

class Google_Service_Genomics_StreamReadsResponse extends Google_Collection
{
  protected $collection_key = 'alignments';
  protected $internal_gapi_mappings = array(
  );
  protected $alignmentsType = 'Google_Service_Genomics_Read';
  protected $alignmentsDataType = 'array';


  public function setAlignments($alignments)
  {
    $this->alignments = $alignments;
  }
  public function getAlignments()
  {
    return $this->alignments;
  }
}

class Google_Service_Genomics_StreamVariantsRequest extends Google_Collection
{
  public $callSetIds;
  public $end;
  public $projectId;
  public $referenceName;
  public $start;
  public $variantSetId;
  protected $collection_key = 'callSetIds';
  protected $internal_gapi_mappings = array(
  );

  public function getCallSetIds()
  {
    return $this->callSetIds;
  }

  public function setCallSetIds($callSetIds)
  {
    $this->callSetIds = $callSetIds;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function setEnd($end)
  {
    $this->end = $end;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }

  public function getReferenceName()
  {
    return $this->referenceName;
  }

  public function setReferenceName($referenceName)
  {
    $this->referenceName = $referenceName;
  }

  public function getStart()
  {
    return $this->start;
  }

  public function setStart($start)
  {
    $this->start = $start;
  }

  public function getVariantSetId()
  {
    return $this->variantSetId;
  }

  public function setVariantSetId($variantSetId)
  {
    $this->variantSetId = $variantSetId;
  }
}

class Google_Service_Genomics_StreamVariantsResponse extends Google_Collection
{
  protected $collection_key = 'variants';
  protected $internal_gapi_mappings = array(
  );
  protected $variantsType = 'Google_Service_Genomics_Variant';
  protected $variantsDataType = 'array';


  public function setVariants($variants)
  {
    $this->variants = $variants;
  }
  public function getVariants()
  {
    return $this->variants;
  }
}

class Google_Service_Genomics_TestIamPermissionsRequest extends Google_Collection
{
  public $permissions;
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );

  public function getPermissions()
  {
    return $this->permissions;
  }

  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
}

class Google_Service_Genomics_TestIamPermissionsResponse extends Google_Collection
{
  public $permissions;
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );

  public function getPermissions()
  {
    return $this->permissions;
  }

  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
}

class Google_Service_Genomics_UndeleteDatasetRequest extends Google_Model
{
}

class Google_Service_Genomics_Variant extends Google_Collection
{
  public $alternateBases;
  public $created;
  public $end;
  public $filter;
  public $id;
  public $info;
  public $names;
  public $quality;
  public $referenceBases;
  public $referenceName;
  public $start;
  public $variantSetId;
  protected $collection_key = 'names';
  protected $internal_gapi_mappings = array(
  );
  protected $callsType = 'Google_Service_Genomics_VariantCall';
  protected $callsDataType = 'array';

  public function getAlternateBases()
  {
    return $this->alternateBases;
  }

  public function setAlternateBases($alternateBases)
  {
    $this->alternateBases = $alternateBases;
  }

  public function setCalls($calls)
  {
    $this->calls = $calls;
  }
  public function getCalls()
  {
    return $this->calls;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function setEnd($end)
  {
    $this->end = $end;
  }

  public function getFilter()
  {
    return $this->filter;
  }

  public function setFilter($filter)
  {
    $this->filter = $filter;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInfo()
  {
    return $this->info;
  }

  public function setInfo($info)
  {
    $this->info = $info;
  }

  public function getNames()
  {
    return $this->names;
  }

  public function setNames($names)
  {
    $this->names = $names;
  }

  public function getQuality()
  {
    return $this->quality;
  }

  public function setQuality($quality)
  {
    $this->quality = $quality;
  }

  public function getReferenceBases()
  {
    return $this->referenceBases;
  }

  public function setReferenceBases($referenceBases)
  {
    $this->referenceBases = $referenceBases;
  }

  public function getReferenceName()
  {
    return $this->referenceName;
  }

  public function setReferenceName($referenceName)
  {
    $this->referenceName = $referenceName;
  }

  public function getStart()
  {
    return $this->start;
  }

  public function setStart($start)
  {
    $this->start = $start;
  }

  public function getVariantSetId()
  {
    return $this->variantSetId;
  }

  public function setVariantSetId($variantSetId)
  {
    $this->variantSetId = $variantSetId;
  }
}

class Google_Service_Genomics_VariantCall extends Google_Collection
{
  public $callSetId;
  public $callSetName;
  public $genotype;
  public $genotypeLikelihood;
  public $info;
  public $phaseset;
  protected $collection_key = 'genotypeLikelihood';
  protected $internal_gapi_mappings = array(
  );

  public function getCallSetId()
  {
    return $this->callSetId;
  }

  public function setCallSetId($callSetId)
  {
    $this->callSetId = $callSetId;
  }

  public function getCallSetName()
  {
    return $this->callSetName;
  }

  public function setCallSetName($callSetName)
  {
    $this->callSetName = $callSetName;
  }

  public function getGenotype()
  {
    return $this->genotype;
  }

  public function setGenotype($genotype)
  {
    $this->genotype = $genotype;
  }

  public function getGenotypeLikelihood()
  {
    return $this->genotypeLikelihood;
  }

  public function setGenotypeLikelihood($genotypeLikelihood)
  {
    $this->genotypeLikelihood = $genotypeLikelihood;
  }

  public function getInfo()
  {
    return $this->info;
  }

  public function setInfo($info)
  {
    $this->info = $info;
  }

  public function getPhaseset()
  {
    return $this->phaseset;
  }

  public function setPhaseset($phaseset)
  {
    $this->phaseset = $phaseset;
  }
}

class Google_Service_Genomics_VariantSet extends Google_Collection
{
  public $datasetId;
  public $id;
  public $referenceSetId;
  protected $collection_key = 'referenceBounds';
  protected $internal_gapi_mappings = array(
  );
  protected $metadataType = 'Google_Service_Genomics_VariantSetMetadata';
  protected $metadataDataType = 'array';
  protected $referenceBoundsType = 'Google_Service_Genomics_ReferenceBound';
  protected $referenceBoundsDataType = 'array';

  public function getDatasetId()
  {
    return $this->datasetId;
  }

  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setReferenceBounds($referenceBounds)
  {
    $this->referenceBounds = $referenceBounds;
  }
  public function getReferenceBounds()
  {
    return $this->referenceBounds;
  }

  public function getReferenceSetId()
  {
    return $this->referenceSetId;
  }

  public function setReferenceSetId($referenceSetId)
  {
    $this->referenceSetId = $referenceSetId;
  }
}

class Google_Service_Genomics_VariantSetMetadata extends Google_Model
{
  public $description;
  public $id;
  public $info;
  public $key;
  public $number;
  public $type;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInfo()
  {
    return $this->info;
  }

  public function setInfo($info)
  {
    $this->info = $info;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setKey($key)
  {
    $this->key = $key;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
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
