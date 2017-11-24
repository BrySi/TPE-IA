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
 * Service definition for ServiceRegistry (alpha).
 *
 * <p>
 * The Service Registry API allows users to manage service endpoints in Service
 * Registry and use DNS-based service discovery / name resolution.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/cloud-serviceregistry/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_ServiceRegistry extends Google_Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** View your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM_READ_ONLY =
      "https://www.googleapis.com/auth/cloud-platform.read-only";
  /** View and manage your Google Cloud Platform management resources and deployment status information. */
  const NDEV_CLOUDMAN =
      "https://www.googleapis.com/auth/ndev.cloudman";
  /** View your Google Cloud Platform management resources and deployment status information. */
  const NDEV_CLOUDMAN_READONLY =
      "https://www.googleapis.com/auth/ndev.cloudman.readonly";

  public $endpoints;
  public $operations;
  

  /**
   * Constructs the internal representation of the ServiceRegistry service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'serviceregistry/alpha/projects/';
    $this->version = 'alpha';
    $this->serviceName = 'serviceregistry';

    $this->endpoints = new Google_Service_ServiceRegistry_Endpoints_Resource(
        $this,
        $this->serviceName,
        'endpoints',
        array(
          'methods' => array(
            'delete' => array(
              'path' => '{project}/global/endpoints/{endpoint}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'endpoint' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{project}/global/endpoints/{endpoint}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'endpoint' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{project}/global/endpoints',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{project}/global/endpoints',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
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
              ),
            ),'patch' => array(
              'path' => '{project}/global/endpoints/{endpoint}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'endpoint' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => '{project}/global/endpoints/{endpoint}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'endpoint' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->operations = new Google_Service_ServiceRegistry_Operations_Resource(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{project}/global/operations/{operation}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'operation' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{project}/global/operations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
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
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "endpoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $serviceregistryService = new Google_Service_ServiceRegistry(...);
 *   $endpoints = $serviceregistryService->endpoints;
 *  </code>
 */
class Google_Service_ServiceRegistry_Endpoints_Resource extends Google_Service_Resource
{

  /**
   * Deletes an endpoint. (endpoints.delete)
   *
   * @param string $project The project ID for this request.
   * @param string $endpoint The name of the endpoint for this request.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceRegistry_Operation
   */
  public function delete($project, $endpoint, $optParams = array())
  {
    $params = array('project' => $project, 'endpoint' => $endpoint);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_ServiceRegistry_Operation");
  }

  /**
   * Gets an endpoint. (endpoints.get)
   *
   * @param string $project The project ID for this request.
   * @param string $endpoint The name of the endpoint for this request.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceRegistry_Endpoint
   */
  public function get($project, $endpoint, $optParams = array())
  {
    $params = array('project' => $project, 'endpoint' => $endpoint);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ServiceRegistry_Endpoint");
  }

  /**
   * Creates an endpoint. (endpoints.insert)
   *
   * @param string $project The project ID for this request.
   * @param Google_Endpoint $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceRegistry_Operation
   */
  public function insert($project, Google_Service_ServiceRegistry_Endpoint $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_ServiceRegistry_Operation");
  }

  /**
   * Lists endpoints for a project. (endpoints.listEndpoints)
   *
   * @param string $project The project ID for this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Sets a filter expression for filtering listed
   * resources, in the form filter={expression}. Your {expression} must be in the
   * format: field_name comparison_string literal_string.
   *
   * The field_name is the name of the field you want to compare. Only atomic
   * field types are supported (string, number, boolean). The comparison_string
   * must be either eq (equals) or ne (not equals). The literal_string is the
   * string value to filter to. The literal value must be valid for the type of
   * field you are filtering by (string, number, boolean). For string fields, the
   * literal value is interpreted as a regular expression using RE2 syntax. The
   * literal value must match the entire field.
   *
   * For example, filter=name ne example-instance.
   *
   * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
   * also filter on nested fields. For example, you could filter on instances that
   * have set the scheduling.automaticRestart field to true. In particular, use
   * filtering on nested fields to take advantage of instance labels to organize
   * and filter results based on label values.
   *
   * The Beta API also supports filtering on multiple expressions by providing
   * each separate expression within parentheses. For example,
   * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
   * expressions are treated as AND expressions meaning that resources must match
   * all expressions to pass the filters.
   * @opt_param string maxResults The maximum number of results per page that
   * Compute Engine should return. If the number of available results is larger
   * than maxResults, Compute Engine returns a nextPageToken that can be used to
   * get the next page of results in subsequent list requests.
   * @opt_param string orderBy Sorts list results by a certain order. By default,
   * results are returned in alphanumerical order based on the resource name.
   *
   * You can also sort results in descending order based on the creation timestamp
   * using orderBy="creationTimestamp desc". This sorts results based on the
   * creationTimestamp field in reverse chronological order (newest result first).
   * Use this to sort resources like operations so that the newest operation is
   * returned first.
   *
   * Currently, only sorting by name or creationTimestamp desc is supported.
   * @opt_param string pageToken Specifies a page token to use. Set pageToken to
   * the nextPageToken returned by a previous list request to get the next page of
   * results.
   * @return Google_Service_ServiceRegistry_EndpointsListResponse
   */
  public function listEndpoints($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ServiceRegistry_EndpointsListResponse");
  }

  /**
   * Updates an endpoint. This method supports patch semantics. (endpoints.patch)
   *
   * @param string $project The project ID for this request.
   * @param string $endpoint The name of the endpoint for this request.
   * @param Google_Endpoint $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceRegistry_Operation
   */
  public function patch($project, $endpoint, Google_Service_ServiceRegistry_Endpoint $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'endpoint' => $endpoint, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ServiceRegistry_Operation");
  }

  /**
   * Updates an endpoint. (endpoints.update)
   *
   * @param string $project The project ID for this request.
   * @param string $endpoint The name of the endpoint for this request.
   * @param Google_Endpoint $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceRegistry_Operation
   */
  public function update($project, $endpoint, Google_Service_ServiceRegistry_Endpoint $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'endpoint' => $endpoint, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_ServiceRegistry_Operation");
  }
}

/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $serviceregistryService = new Google_Service_ServiceRegistry(...);
 *   $operations = $serviceregistryService->operations;
 *  </code>
 */
class Google_Service_ServiceRegistry_Operations_Resource extends Google_Service_Resource
{

  /**
   * Gets information about a specific operation. (operations.get)
   *
   * @param string $project The project ID for this request.
   * @param string $operation The name of the operation for this request.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceRegistry_Operation
   */
  public function get($project, $operation, $optParams = array())
  {
    $params = array('project' => $project, 'operation' => $operation);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ServiceRegistry_Operation");
  }

  /**
   * Lists all operations for a project. (operations.listOperations)
   *
   * @param string $project The project ID for this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Sets a filter expression for filtering listed
   * resources, in the form filter={expression}. Your {expression} must be in the
   * format: field_name comparison_string literal_string.
   *
   * The field_name is the name of the field you want to compare. Only atomic
   * field types are supported (string, number, boolean). The comparison_string
   * must be either eq (equals) or ne (not equals). The literal_string is the
   * string value to filter to. The literal value must be valid for the type of
   * field you are filtering by (string, number, boolean). For string fields, the
   * literal value is interpreted as a regular expression using RE2 syntax. The
   * literal value must match the entire field.
   *
   * For example, filter=name ne example-instance.
   *
   * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
   * also filter on nested fields. For example, you could filter on instances that
   * have set the scheduling.automaticRestart field to true. In particular, use
   * filtering on nested fields to take advantage of instance labels to organize
   * and filter results based on label values.
   *
   * The Beta API also supports filtering on multiple expressions by providing
   * each separate expression within parentheses. For example,
   * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
   * expressions are treated as AND expressions meaning that resources must match
   * all expressions to pass the filters.
   * @opt_param string maxResults The maximum number of results per page that
   * Compute Engine should return. If the number of available results is larger
   * than maxResults, Compute Engine returns a nextPageToken that can be used to
   * get the next page of results in subsequent list requests.
   * @opt_param string orderBy Sorts list results by a certain order. By default,
   * results are returned in alphanumerical order based on the resource name.
   *
   * You can also sort results in descending order based on the creation timestamp
   * using orderBy="creationTimestamp desc". This sorts results based on the
   * creationTimestamp field in reverse chronological order (newest result first).
   * Use this to sort resources like operations so that the newest operation is
   * returned first.
   *
   * Currently, only sorting by name or creationTimestamp desc is supported.
   * @opt_param string pageToken Specifies a page token to use. Set pageToken to
   * the nextPageToken returned by a previous list request to get the next page of
   * results.
   * @return Google_Service_ServiceRegistry_OperationsListResponse
   */
  public function listOperations($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ServiceRegistry_OperationsListResponse");
  }
}




class Google_Service_ServiceRegistry_Endpoint extends Google_Model
{
  public $address;
  public $creationTimestamp;
  public $description;
  public $fingerprint;
  public $id;
  public $name;
  public $port;
  public $selfLink;
  public $state;
  protected $internal_gapi_mappings = array(
  );
  protected $visibilityType = 'Google_Service_ServiceRegistry_EndpointEndpointVisibility';
  protected $visibilityDataType = '';

  public function getAddress()
  {
    return $this->address;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getFingerprint()
  {
    return $this->fingerprint;
  }

  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
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

  public function getPort()
  {
    return $this->port;
  }

  public function setPort($port)
  {
    $this->port = $port;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function setVisibility(Google_Service_ServiceRegistry_EndpointEndpointVisibility $visibility)
  {
    $this->visibility = $visibility;
  }
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class Google_Service_ServiceRegistry_EndpointEndpointVisibility extends Google_Collection
{
  public $networks;
  public $projects;
  protected $collection_key = 'projects';
  protected $internal_gapi_mappings = array(
  );

  public function getNetworks()
  {
    return $this->networks;
  }

  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }

  public function getProjects()
  {
    return $this->projects;
  }

  public function setProjects($projects)
  {
    $this->projects = $projects;
  }
}

class Google_Service_ServiceRegistry_EndpointsListResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'endpoints';
  protected $internal_gapi_mappings = array(
  );
  protected $endpointsType = 'Google_Service_ServiceRegistry_Endpoint';
  protected $endpointsDataType = 'array';

  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  public function getEndpoints()
  {
    return $this->endpoints;
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

class Google_Service_ServiceRegistry_Operation extends Google_Collection
{
  public $clientOperationId;
  public $creationTimestamp;
  public $description;
  public $endTime;
  public $httpErrorMessage;
  public $httpErrorStatusCode;
  public $id;
  public $insertTime;
  public $kind;
  public $name;
  public $operationType;
  public $progress;
  public $region;
  public $selfLink;
  public $startTime;
  public $status;
  public $statusMessage;
  public $targetId;
  public $targetLink;
  public $user;
  public $zone;
  protected $collection_key = 'warnings';
  protected $internal_gapi_mappings = array(
  );
  protected $errorType = 'Google_Service_ServiceRegistry_OperationError';
  protected $errorDataType = '';
  protected $warningsType = 'Google_Service_ServiceRegistry_OperationWarnings';
  protected $warningsDataType = 'array';

  public function getClientOperationId()
  {
    return $this->clientOperationId;
  }

  public function setClientOperationId($clientOperationId)
  {
    $this->clientOperationId = $clientOperationId;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function setError(Google_Service_ServiceRegistry_OperationError $error)
  {
    $this->error = $error;
  }
  public function getError()
  {
    return $this->error;
  }

  public function getHttpErrorMessage()
  {
    return $this->httpErrorMessage;
  }

  public function setHttpErrorMessage($httpErrorMessage)
  {
    $this->httpErrorMessage = $httpErrorMessage;
  }

  public function getHttpErrorStatusCode()
  {
    return $this->httpErrorStatusCode;
  }

  public function setHttpErrorStatusCode($httpErrorStatusCode)
  {
    $this->httpErrorStatusCode = $httpErrorStatusCode;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInsertTime()
  {
    return $this->insertTime;
  }

  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
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

  public function getOperationType()
  {
    return $this->operationType;
  }

  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }

  public function getProgress()
  {
    return $this->progress;
  }

  public function setProgress($progress)
  {
    $this->progress = $progress;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatusMessage()
  {
    return $this->statusMessage;
  }

  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }

  public function getTargetId()
  {
    return $this->targetId;
  }

  public function setTargetId($targetId)
  {
    $this->targetId = $targetId;
  }

  public function getTargetLink()
  {
    return $this->targetLink;
  }

  public function setTargetLink($targetLink)
  {
    $this->targetLink = $targetLink;
  }

  public function getUser()
  {
    return $this->user;
  }

  public function setUser($user)
  {
    $this->user = $user;
  }

  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  public function getWarnings()
  {
    return $this->warnings;
  }

  public function getZone()
  {
    return $this->zone;
  }

  public function setZone($zone)
  {
    $this->zone = $zone;
  }
}

class Google_Service_ServiceRegistry_OperationError extends Google_Collection
{
  protected $collection_key = 'errors';
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_ServiceRegistry_OperationErrorErrors';
  protected $errorsDataType = 'array';


  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
}

class Google_Service_ServiceRegistry_OperationErrorErrors extends Google_Model
{
  public $code;
  public $location;
  public $message;
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

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
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

class Google_Service_ServiceRegistry_OperationWarnings extends Google_Collection
{
  public $code;
  public $message;
  protected $collection_key = 'data';
  protected $internal_gapi_mappings = array(
  );
  protected $dataType = 'Google_Service_ServiceRegistry_OperationWarningsData';
  protected $dataDataType = 'array';

  public function getCode()
  {
    return $this->code;
  }

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function setData($data)
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
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

class Google_Service_ServiceRegistry_OperationWarningsData extends Google_Model
{
  public $key;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getKey()
  {
    return $this->key;
  }

  public function setKey($key)
  {
    $this->key = $key;
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

class Google_Service_ServiceRegistry_OperationsListResponse extends Google_Collection
{
  public $nextPageToken;
  protected $collection_key = 'operations';
  protected $internal_gapi_mappings = array(
  );
  protected $operationsType = 'Google_Service_ServiceRegistry_Operation';
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
