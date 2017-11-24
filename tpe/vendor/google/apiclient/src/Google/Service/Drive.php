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
 * Service definition for Drive (v3).
 *
 * <p>
 * The API to interact with Drive.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/drive/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Drive extends Google_Service
{
  /** View and manage the files in your Google Drive. */
  const DRIVE =
      "https://www.googleapis.com/auth/drive";
  /** View and manage its own configuration data in your Google Drive. */
  const DRIVE_APPDATA =
      "https://www.googleapis.com/auth/drive.appdata";
  /** View and manage Google Drive files and folders that you have opened or created with this app. */
  const DRIVE_FILE =
      "https://www.googleapis.com/auth/drive.file";
  /** View and manage metadata of files in your Google Drive. */
  const DRIVE_METADATA =
      "https://www.googleapis.com/auth/drive.metadata";
  /** View metadata for files in your Google Drive. */
  const DRIVE_METADATA_READONLY =
      "https://www.googleapis.com/auth/drive.metadata.readonly";
  /** View the photos, videos and albums in your Google Photos. */
  const DRIVE_PHOTOS_READONLY =
      "https://www.googleapis.com/auth/drive.photos.readonly";
  /** View the files in your Google Drive. */
  const DRIVE_READONLY =
      "https://www.googleapis.com/auth/drive.readonly";
  /** Modify your Google Apps Script scripts' behavior. */
  const DRIVE_SCRIPTS =
      "https://www.googleapis.com/auth/drive.scripts";

  public $about;
  public $changes;
  public $channels;
  public $comments;
  public $files;
  public $permissions;
  public $replies;
  public $revisions;
  

  /**
   * Constructs the internal representation of the Drive service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'drive/v3/';
    $this->version = 'v3';
    $this->serviceName = 'drive';

    $this->about = new Google_Service_Drive_About_Resource(
        $this,
        $this->serviceName,
        'about',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'about',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->changes = new Google_Service_Drive_Changes_Resource(
        $this,
        $this->serviceName,
        'changes',
        array(
          'methods' => array(
            'getStartPageToken' => array(
              'path' => 'changes/startPageToken',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'changes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeRemoved' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'restrictToMyDrive' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'spaces' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'watch' => array(
              'path' => 'changes/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeRemoved' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'restrictToMyDrive' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'spaces' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->channels = new Google_Service_Drive_Channels_Resource(
        $this,
        $this->serviceName,
        'channels',
        array(
          'methods' => array(
            'stop' => array(
              'path' => 'channels/stop',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->comments = new Google_Service_Drive_Comments_Resource(
        $this,
        $this->serviceName,
        'comments',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'files/{fileId}/comments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'files/{fileId}/comments/{commentId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}/comments/{commentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/comments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startModifiedTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}/comments/{commentId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->files = new Google_Service_Drive_Files_Resource(
        $this,
        $this->serviceName,
        'files',
        array(
          'methods' => array(
            'copy' => array(
              'path' => 'files/{fileId}/copy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ignoreDefaultVisibility' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'keepRevisionForever' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocrLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'create' => array(
              'path' => 'files',
              'httpMethod' => 'POST',
              'parameters' => array(
                'ignoreDefaultVisibility' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'keepRevisionForever' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocrLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'useContentAsIndexableText' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => 'files/{fileId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'emptyTrash' => array(
              'path' => 'files/trash',
              'httpMethod' => 'DELETE',
              'parameters' => array(),
            ),'export' => array(
              'path' => 'files/{fileId}/export',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'mimeType' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'generateIds' => array(
              'path' => 'files/generateIds',
              'httpMethod' => 'GET',
              'parameters' => array(
                'count' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'space' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acknowledgeAbuse' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'files',
              'httpMethod' => 'GET',
              'parameters' => array(
                'corpus' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'orderBy' => array(
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
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'spaces' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'addParents' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'keepRevisionForever' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocrLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'removeParents' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'useContentAsIndexableText' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'watch' => array(
              'path' => 'files/{fileId}/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acknowledgeAbuse' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->permissions = new Google_Service_Drive_Permissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'files/{fileId}/permissions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'emailMessage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sendNotificationEmail' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'transferOwnership' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => 'files/{fileId}/permissions/{permissionId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'permissionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}/permissions/{permissionId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'permissionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/permissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}/permissions/{permissionId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'permissionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'transferOwnership' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->replies = new Google_Service_Drive_Replies_Resource(
        $this,
        $this->serviceName,
        'replies',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
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
            ),'update' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->revisions = new Google_Service_Drive_Revisions_Resource(
        $this,
        $this->serviceName,
        'revisions',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'files/{fileId}/revisions/{revisionId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'revisionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}/revisions/{revisionId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'revisionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acknowledgeAbuse' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/revisions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}/revisions/{revisionId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'revisionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "about" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $about = $driveService->about;
 *  </code>
 */
class Google_Service_Drive_About_Resource extends Google_Service_Resource
{

  /**
   * Gets information about the user, the user's Drive, and system capabilities.
   * (about.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_About
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Drive_About");
  }
}

/**
 * The "changes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $changes = $driveService->changes;
 *  </code>
 */
class Google_Service_Drive_Changes_Resource extends Google_Service_Resource
{

  /**
   * Gets the starting pageToken for listing future changes.
   * (changes.getStartPageToken)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_StartPageToken
   */
  public function getStartPageToken($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getStartPageToken', array($params), "Google_Service_Drive_StartPageToken");
  }

  /**
   * Lists changes for a user. (changes.listChanges)
   *
   * @param string $pageToken The token for continuing a previous list request on
   * the next page. This should be set to the value of 'nextPageToken' from the
   * previous response or to the response from the getStartPageToken method.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeRemoved Whether to include changes indicating that
   * items have left the view of the changes list, for example by deletion or lost
   * access.
   * @opt_param int pageSize The maximum number of changes to return per page.
   * @opt_param bool restrictToMyDrive Whether to restrict the results to changes
   * inside the My Drive hierarchy. This omits changes to files such as those in
   * the Application Data folder or shared files which have not been added to My
   * Drive.
   * @opt_param string spaces A comma-separated list of spaces to query within the
   * user corpus. Supported values are 'drive', 'appDataFolder' and 'photos'.
   * @return Google_Service_Drive_ChangeList
   */
  public function listChanges($pageToken, $optParams = array())
  {
    $params = array('pageToken' => $pageToken);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Drive_ChangeList");
  }

  /**
   * Subscribes to changes for a user. (changes.watch)
   *
   * @param string $pageToken The token for continuing a previous list request on
   * the next page. This should be set to the value of 'nextPageToken' from the
   * previous response or to the response from the getStartPageToken method.
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeRemoved Whether to include changes indicating that
   * items have left the view of the changes list, for example by deletion or lost
   * access.
   * @opt_param int pageSize The maximum number of changes to return per page.
   * @opt_param bool restrictToMyDrive Whether to restrict the results to changes
   * inside the My Drive hierarchy. This omits changes to files such as those in
   * the Application Data folder or shared files which have not been added to My
   * Drive.
   * @opt_param string spaces A comma-separated list of spaces to query within the
   * user corpus. Supported values are 'drive', 'appDataFolder' and 'photos'.
   * @return Google_Service_Drive_Channel
   */
  public function watch($pageToken, Google_Service_Drive_Channel $postBody, $optParams = array())
  {
    $params = array('pageToken' => $pageToken, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "Google_Service_Drive_Channel");
  }
}

/**
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $channels = $driveService->channels;
 *  </code>
 */
class Google_Service_Drive_Channels_Resource extends Google_Service_Resource
{

  /**
   * Stop watching resources through this channel (channels.stop)
   *
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   */
  public function stop(Google_Service_Drive_Channel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('stop', array($params));
  }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $comments = $driveService->comments;
 *  </code>
 */
class Google_Service_Drive_Comments_Resource extends Google_Service_Resource
{

  /**
   * Creates a new comment on a file. (comments.create)
   *
   * @param string $fileId The ID of the file.
   * @param Google_Comment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_Comment
   */
  public function create($fileId, Google_Service_Drive_Comment $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Drive_Comment");
  }

  /**
   * Deletes a comment. (comments.delete)
   *
   * @param string $fileId The ID of the file.
   * @param string $commentId The ID of the comment.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $commentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Gets a comment by ID. (comments.get)
   *
   * @param string $fileId The ID of the file.
   * @param string $commentId The ID of the comment.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeDeleted Whether to return deleted comments. Deleted
   * comments will not include their original content.
   * @return Google_Service_Drive_Comment
   */
  public function get($fileId, $commentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Drive_Comment");
  }

  /**
   * Lists a file's comments. (comments.listComments)
   *
   * @param string $fileId The ID of the file.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeDeleted Whether to include deleted comments. Deleted
   * comments will not include their original content.
   * @opt_param int pageSize The maximum number of comments to return per page.
   * @opt_param string pageToken The token for continuing a previous list request
   * on the next page. This should be set to the value of 'nextPageToken' from the
   * previous response.
   * @opt_param string startModifiedTime The minimum value of 'modifiedTime' for
   * the result comments (RFC 3339 date-time).
   * @return Google_Service_Drive_CommentList
   */
  public function listComments($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Drive_CommentList");
  }

  /**
   * Updates a comment with patch semantics. (comments.update)
   *
   * @param string $fileId The ID of the file.
   * @param string $commentId The ID of the comment.
   * @param Google_Comment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_Comment
   */
  public function update($fileId, $commentId, Google_Service_Drive_Comment $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Drive_Comment");
  }
}

/**
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $files = $driveService->files;
 *  </code>
 */
class Google_Service_Drive_Files_Resource extends Google_Service_Resource
{

  /**
   * Creates a copy of a file and applies any requested updates with patch
   * semantics. (files.copy)
   *
   * @param string $fileId The ID of the file.
   * @param Google_DriveFile $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool ignoreDefaultVisibility Whether to ignore the domain's
   * default visibility settings for the created file. Domain administrators can
   * choose to make all uploaded files visible to the domain by default; this
   * parameter bypasses that behavior for the request. Permissions are still
   * inherited from parent folders.
   * @opt_param bool keepRevisionForever Whether to set the 'keepForever' field in
   * the new head revision. This is only applicable to files with binary content
   * in Drive.
   * @opt_param string ocrLanguage A language hint for OCR processing during image
   * import (ISO 639-1 code).
   * @return Google_Service_Drive_DriveFile
   */
  public function copy($fileId, Google_Service_Drive_DriveFile $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('copy', array($params), "Google_Service_Drive_DriveFile");
  }

  /**
   * Creates a new file. (files.create)
   *
   * @param Google_DriveFile $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool ignoreDefaultVisibility Whether to ignore the domain's
   * default visibility settings for the created file. Domain administrators can
   * choose to make all uploaded files visible to the domain by default; this
   * parameter bypasses that behavior for the request. Permissions are still
   * inherited from parent folders.
   * @opt_param bool keepRevisionForever Whether to set the 'keepForever' field in
   * the new head revision. This is only applicable to files with binary content
   * in Drive.
   * @opt_param string ocrLanguage A language hint for OCR processing during image
   * import (ISO 639-1 code).
   * @opt_param bool useContentAsIndexableText Whether to use the uploaded content
   * as indexable text.
   * @return Google_Service_Drive_DriveFile
   */
  public function create(Google_Service_Drive_DriveFile $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Drive_DriveFile");
  }

  /**
   * Permanently deletes a file owned by the user without moving it to the trash.
   * If the target is a folder, all descendants owned by the user are also
   * deleted. (files.delete)
   *
   * @param string $fileId The ID of the file.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Permanently deletes all of the user's trashed files. (files.emptyTrash)
   *
   * @param array $optParams Optional parameters.
   */
  public function emptyTrash($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('emptyTrash', array($params));
  }

  /**
   * Exports a Google Doc to the requested MIME type and returns the exported
   * content. (files.export)
   *
   * @param string $fileId The ID of the file.
   * @param string $mimeType The MIME type of the format requested for this
   * export.
   * @param array $optParams Optional parameters.
   */
  public function export($fileId, $mimeType, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'mimeType' => $mimeType);
    $params = array_merge($params, $optParams);
    return $this->call('export', array($params));
  }

  /**
   * Generates a set of file IDs which can be provided in create requests.
   * (files.generateIds)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int count The number of IDs to return.
   * @opt_param string space The space in which the IDs can be used to create new
   * files. Supported values are 'drive' and 'appDataFolder'.
   * @return Google_Service_Drive_GeneratedIds
   */
  public function generateIds($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('generateIds', array($params), "Google_Service_Drive_GeneratedIds");
  }

  /**
   * Gets a file's metadata or content by ID. (files.get)
   *
   * @param string $fileId The ID of the file.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acknowledgeAbuse Whether the user is acknowledging the risk
   * of downloading known malware or other abusive files. This is only applicable
   * when alt=media.
   * @return Google_Service_Drive_DriveFile
   */
  public function get($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Drive_DriveFile");
  }

  /**
   * Lists or searches files. (files.listFiles)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string corpus The source of files to list.
   * @opt_param string orderBy A comma-separated list of sort keys. Valid keys are
   * 'createdTime', 'folder', 'modifiedByMeTime', 'modifiedTime', 'name',
   * 'quotaBytesUsed', 'recency', 'sharedWithMeTime', 'starred', and
   * 'viewedByMeTime'. Each key sorts ascending by default, but may be reversed
   * with the 'desc' modifier. Example usage: ?orderBy=folder,modifiedTime
   * desc,name. Please note that there is a current limitation for users with
   * approximately one million files in which the requested sort order is ignored.
   * @opt_param int pageSize The maximum number of files to return per page.
   * @opt_param string pageToken The token for continuing a previous list request
   * on the next page. This should be set to the value of 'nextPageToken' from the
   * previous response.
   * @opt_param string q A query for filtering the file results. See the "Search
   * for Files" guide for supported syntax.
   * @opt_param string spaces A comma-separated list of spaces to query within the
   * corpus. Supported values are 'drive', 'appDataFolder' and 'photos'.
   * @return Google_Service_Drive_FileList
   */
  public function listFiles($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Drive_FileList");
  }

  /**
   * Updates a file's metadata and/or content with patch semantics. (files.update)
   *
   * @param string $fileId The ID of the file.
   * @param Google_DriveFile $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string addParents A comma-separated list of parent IDs to add.
   * @opt_param bool keepRevisionForever Whether to set the 'keepForever' field in
   * the new head revision. This is only applicable to files with binary content
   * in Drive.
   * @opt_param string ocrLanguage A language hint for OCR processing during image
   * import (ISO 639-1 code).
   * @opt_param string removeParents A comma-separated list of parent IDs to
   * remove.
   * @opt_param bool useContentAsIndexableText Whether to use the uploaded content
   * as indexable text.
   * @return Google_Service_Drive_DriveFile
   */
  public function update($fileId, Google_Service_Drive_DriveFile $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Drive_DriveFile");
  }

  /**
   * Subscribes to changes to a file (files.watch)
   *
   * @param string $fileId The ID of the file.
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acknowledgeAbuse Whether the user is acknowledging the risk
   * of downloading known malware or other abusive files. This is only applicable
   * when alt=media.
   * @return Google_Service_Drive_Channel
   */
  public function watch($fileId, Google_Service_Drive_Channel $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "Google_Service_Drive_Channel");
  }
}

/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $permissions = $driveService->permissions;
 *  </code>
 */
class Google_Service_Drive_Permissions_Resource extends Google_Service_Resource
{

  /**
   * Creates a permission for a file. (permissions.create)
   *
   * @param string $fileId The ID of the file.
   * @param Google_Permission $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string emailMessage A custom message to include in the
   * notification email.
   * @opt_param bool sendNotificationEmail Whether to send a notification email
   * when sharing to users or groups. This defaults to true for users and groups,
   * and is not allowed for other requests. It must not be disabled for ownership
   * transfers.
   * @opt_param bool transferOwnership Whether to transfer ownership to the
   * specified user and downgrade the current owner to a writer. This parameter is
   * required as an acknowledgement of the side effect.
   * @return Google_Service_Drive_Permission
   */
  public function create($fileId, Google_Service_Drive_Permission $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Drive_Permission");
  }

  /**
   * Deletes a permission. (permissions.delete)
   *
   * @param string $fileId The ID of the file.
   * @param string $permissionId The ID of the permission.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $permissionId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Gets a permission by ID. (permissions.get)
   *
   * @param string $fileId The ID of the file.
   * @param string $permissionId The ID of the permission.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_Permission
   */
  public function get($fileId, $permissionId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Drive_Permission");
  }

  /**
   * Lists a file's permissions. (permissions.listPermissions)
   *
   * @param string $fileId The ID of the file.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_PermissionList
   */
  public function listPermissions($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Drive_PermissionList");
  }

  /**
   * Updates a permission with patch semantics. (permissions.update)
   *
   * @param string $fileId The ID of the file.
   * @param string $permissionId The ID of the permission.
   * @param Google_Permission $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool transferOwnership Whether to transfer ownership to the
   * specified user and downgrade the current owner to a writer. This parameter is
   * required as an acknowledgement of the side effect.
   * @return Google_Service_Drive_Permission
   */
  public function update($fileId, $permissionId, Google_Service_Drive_Permission $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Drive_Permission");
  }
}

/**
 * The "replies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $replies = $driveService->replies;
 *  </code>
 */
class Google_Service_Drive_Replies_Resource extends Google_Service_Resource
{

  /**
   * Creates a new reply to a comment. (replies.create)
   *
   * @param string $fileId The ID of the file.
   * @param string $commentId The ID of the comment.
   * @param Google_Reply $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_Reply
   */
  public function create($fileId, $commentId, Google_Service_Drive_Reply $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Drive_Reply");
  }

  /**
   * Deletes a reply. (replies.delete)
   *
   * @param string $fileId The ID of the file.
   * @param string $commentId The ID of the comment.
   * @param string $replyId The ID of the reply.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $commentId, $replyId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Gets a reply by ID. (replies.get)
   *
   * @param string $fileId The ID of the file.
   * @param string $commentId The ID of the comment.
   * @param string $replyId The ID of the reply.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeDeleted Whether to return deleted replies. Deleted
   * replies will not include their original content.
   * @return Google_Service_Drive_Reply
   */
  public function get($fileId, $commentId, $replyId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Drive_Reply");
  }

  /**
   * Lists a comment's replies. (replies.listReplies)
   *
   * @param string $fileId The ID of the file.
   * @param string $commentId The ID of the comment.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeDeleted Whether to include deleted replies. Deleted
   * replies will not include their original content.
   * @opt_param int pageSize The maximum number of replies to return per page.
   * @opt_param string pageToken The token for continuing a previous list request
   * on the next page. This should be set to the value of 'nextPageToken' from the
   * previous response.
   * @return Google_Service_Drive_ReplyList
   */
  public function listReplies($fileId, $commentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Drive_ReplyList");
  }

  /**
   * Updates a reply with patch semantics. (replies.update)
   *
   * @param string $fileId The ID of the file.
   * @param string $commentId The ID of the comment.
   * @param string $replyId The ID of the reply.
   * @param Google_Reply $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_Reply
   */
  public function update($fileId, $commentId, $replyId, Google_Service_Drive_Reply $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Drive_Reply");
  }
}

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $revisions = $driveService->revisions;
 *  </code>
 */
class Google_Service_Drive_Revisions_Resource extends Google_Service_Resource
{

  /**
   * Permanently deletes a revision. This method is only applicable to files with
   * binary content in Drive. (revisions.delete)
   *
   * @param string $fileId The ID of the file.
   * @param string $revisionId The ID of the revision.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $revisionId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Gets a revision's metadata or content by ID. (revisions.get)
   *
   * @param string $fileId The ID of the file.
   * @param string $revisionId The ID of the revision.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acknowledgeAbuse Whether the user is acknowledging the risk
   * of downloading known malware or other abusive files. This is only applicable
   * when alt=media.
   * @return Google_Service_Drive_Revision
   */
  public function get($fileId, $revisionId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Drive_Revision");
  }

  /**
   * Lists a file's revisions. (revisions.listRevisions)
   *
   * @param string $fileId The ID of the file.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_RevisionList
   */
  public function listRevisions($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Drive_RevisionList");
  }

  /**
   * Updates a revision with patch semantics. (revisions.update)
   *
   * @param string $fileId The ID of the file.
   * @param string $revisionId The ID of the revision.
   * @param Google_Revision $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_Revision
   */
  public function update($fileId, $revisionId, Google_Service_Drive_Revision $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Drive_Revision");
  }
}




class Google_Service_Drive_About extends Google_Collection
{
  public $appInstalled;
  public $exportFormats;
  public $folderColorPalette;
  public $importFormats;
  public $kind;
  public $maxImportSizes;
  public $maxUploadSize;
  protected $collection_key = 'folderColorPalette';
  protected $internal_gapi_mappings = array(
  );
  protected $storageQuotaType = 'Google_Service_Drive_AboutStorageQuota';
  protected $storageQuotaDataType = '';
  protected $userType = 'Google_Service_Drive_User';
  protected $userDataType = '';

  public function getAppInstalled()
  {
    return $this->appInstalled;
  }

  public function setAppInstalled($appInstalled)
  {
    $this->appInstalled = $appInstalled;
  }

  public function getExportFormats()
  {
    return $this->exportFormats;
  }

  public function setExportFormats($exportFormats)
  {
    $this->exportFormats = $exportFormats;
  }

  public function getFolderColorPalette()
  {
    return $this->folderColorPalette;
  }

  public function setFolderColorPalette($folderColorPalette)
  {
    $this->folderColorPalette = $folderColorPalette;
  }

  public function getImportFormats()
  {
    return $this->importFormats;
  }

  public function setImportFormats($importFormats)
  {
    $this->importFormats = $importFormats;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMaxImportSizes()
  {
    return $this->maxImportSizes;
  }

  public function setMaxImportSizes($maxImportSizes)
  {
    $this->maxImportSizes = $maxImportSizes;
  }

  public function getMaxUploadSize()
  {
    return $this->maxUploadSize;
  }

  public function setMaxUploadSize($maxUploadSize)
  {
    $this->maxUploadSize = $maxUploadSize;
  }

  public function setStorageQuota(Google_Service_Drive_AboutStorageQuota $storageQuota)
  {
    $this->storageQuota = $storageQuota;
  }
  public function getStorageQuota()
  {
    return $this->storageQuota;
  }
  public function setUser(Google_Service_Drive_User $user)
  {
    $this->user = $user;
  }
  public function getUser()
  {
    return $this->user;
  }
}

class Google_Service_Drive_AboutStorageQuota extends Google_Model
{
  public $limit;
  public $usage;
  public $usageInDrive;
  public $usageInDriveTrash;
  protected $internal_gapi_mappings = array(
  );

  public function getLimit()
  {
    return $this->limit;
  }

  public function setLimit($limit)
  {
    $this->limit = $limit;
  }

  public function getUsage()
  {
    return $this->usage;
  }

  public function setUsage($usage)
  {
    $this->usage = $usage;
  }

  public function getUsageInDrive()
  {
    return $this->usageInDrive;
  }

  public function setUsageInDrive($usageInDrive)
  {
    $this->usageInDrive = $usageInDrive;
  }

  public function getUsageInDriveTrash()
  {
    return $this->usageInDriveTrash;
  }

  public function setUsageInDriveTrash($usageInDriveTrash)
  {
    $this->usageInDriveTrash = $usageInDriveTrash;
  }
}

class Google_Service_Drive_Change extends Google_Model
{
  public $fileId;
  public $kind;
  public $removed;
  public $time;
  protected $internal_gapi_mappings = array(
  );
  protected $fileType = 'Google_Service_Drive_DriveFile';
  protected $fileDataType = '';

  public function setFile(Google_Service_Drive_DriveFile $file)
  {
    $this->file = $file;
  }
  public function getFile()
  {
    return $this->file;
  }

  public function getFileId()
  {
    return $this->fileId;
  }

  public function setFileId($fileId)
  {
    $this->fileId = $fileId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getRemoved()
  {
    return $this->removed;
  }

  public function setRemoved($removed)
  {
    $this->removed = $removed;
  }

  public function getTime()
  {
    return $this->time;
  }

  public function setTime($time)
  {
    $this->time = $time;
  }
}

class Google_Service_Drive_ChangeList extends Google_Collection
{
  public $kind;
  public $newStartPageToken;
  public $nextPageToken;
  protected $collection_key = 'changes';
  protected $internal_gapi_mappings = array(
  );
  protected $changesType = 'Google_Service_Drive_Change';
  protected $changesDataType = 'array';

  public function setChanges($changes)
  {
    $this->changes = $changes;
  }
  public function getChanges()
  {
    return $this->changes;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNewStartPageToken()
  {
    return $this->newStartPageToken;
  }

  public function setNewStartPageToken($newStartPageToken)
  {
    $this->newStartPageToken = $newStartPageToken;
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

class Google_Service_Drive_Channel extends Google_Model
{
  public $address;
  public $expiration;
  public $id;
  public $kind;
  public $params;
  public $payload;
  public $resourceId;
  public $resourceUri;
  public $token;
  public $type;
  protected $internal_gapi_mappings = array(
  );

  public function getAddress()
  {
    return $this->address;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getExpiration()
  {
    return $this->expiration;
  }

  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
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

  public function getParams()
  {
    return $this->params;
  }

  public function setParams($params)
  {
    $this->params = $params;
  }

  public function getPayload()
  {
    return $this->payload;
  }

  public function setPayload($payload)
  {
    $this->payload = $payload;
  }

  public function getResourceId()
  {
    return $this->resourceId;
  }

  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }

  public function getResourceUri()
  {
    return $this->resourceUri;
  }

  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }

  public function getToken()
  {
    return $this->token;
  }

  public function setToken($token)
  {
    $this->token = $token;
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

class Google_Service_Drive_Comment extends Google_Collection
{
  public $anchor;
  public $content;
  public $createdTime;
  public $deleted;
  public $htmlContent;
  public $id;
  public $kind;
  public $modifiedTime;
  public $resolved;
  protected $collection_key = 'replies';
  protected $internal_gapi_mappings = array(
  );
  protected $authorType = 'Google_Service_Drive_User';
  protected $authorDataType = '';
  protected $quotedFileContentType = 'Google_Service_Drive_CommentQuotedFileContent';
  protected $quotedFileContentDataType = '';
  protected $repliesType = 'Google_Service_Drive_Reply';
  protected $repliesDataType = 'array';

  public function getAnchor()
  {
    return $this->anchor;
  }

  public function setAnchor($anchor)
  {
    $this->anchor = $anchor;
  }

  public function setAuthor(Google_Service_Drive_User $author)
  {
    $this->author = $author;
  }
  public function getAuthor()
  {
    return $this->author;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getCreatedTime()
  {
    return $this->createdTime;
  }

  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }

  public function getDeleted()
  {
    return $this->deleted;
  }

  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }

  public function getHtmlContent()
  {
    return $this->htmlContent;
  }

  public function setHtmlContent($htmlContent)
  {
    $this->htmlContent = $htmlContent;
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

  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }

  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }

  public function setQuotedFileContent(Google_Service_Drive_CommentQuotedFileContent $quotedFileContent)
  {
    $this->quotedFileContent = $quotedFileContent;
  }
  public function getQuotedFileContent()
  {
    return $this->quotedFileContent;
  }
  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  public function getReplies()
  {
    return $this->replies;
  }

  public function getResolved()
  {
    return $this->resolved;
  }

  public function setResolved($resolved)
  {
    $this->resolved = $resolved;
  }
}

class Google_Service_Drive_CommentList extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'comments';
  protected $internal_gapi_mappings = array(
  );
  protected $commentsType = 'Google_Service_Drive_Comment';
  protected $commentsDataType = 'array';

  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  public function getComments()
  {
    return $this->comments;
  }

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
}

class Google_Service_Drive_CommentQuotedFileContent extends Google_Model
{
  public $mimeType;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getMimeType()
  {
    return $this->mimeType;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
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

class Google_Service_Drive_DriveFile extends Google_Collection
{
  public $appProperties;
  public $createdTime;
  public $description;
  public $explicitlyTrashed;
  public $fileExtension;
  public $folderColorRgb;
  public $fullFileExtension;
  public $headRevisionId;
  public $iconLink;
  public $id;
  public $kind;
  public $md5Checksum;
  public $mimeType;
  public $modifiedByMeTime;
  public $modifiedTime;
  public $name;
  public $originalFilename;
  public $ownedByMe;
  public $parents;
  public $properties;
  public $quotaBytesUsed;
  public $shared;
  public $sharedWithMeTime;
  public $size;
  public $spaces;
  public $starred;
  public $thumbnailLink;
  public $trashed;
  public $version;
  public $viewedByMe;
  public $viewedByMeTime;
  public $viewersCanCopyContent;
  public $webContentLink;
  public $webViewLink;
  public $writersCanShare;
  protected $collection_key = 'spaces';
  protected $internal_gapi_mappings = array(
  );
  protected $capabilitiesType = 'Google_Service_Drive_DriveFileCapabilities';
  protected $capabilitiesDataType = '';
  protected $contentHintsType = 'Google_Service_Drive_DriveFileContentHints';
  protected $contentHintsDataType = '';
  protected $imageMediaMetadataType = 'Google_Service_Drive_DriveFileImageMediaMetadata';
  protected $imageMediaMetadataDataType = '';
  protected $lastModifyingUserType = 'Google_Service_Drive_User';
  protected $lastModifyingUserDataType = '';
  protected $ownersType = 'Google_Service_Drive_User';
  protected $ownersDataType = 'array';
  protected $permissionsType = 'Google_Service_Drive_Permission';
  protected $permissionsDataType = 'array';
  protected $sharingUserType = 'Google_Service_Drive_User';
  protected $sharingUserDataType = '';
  protected $videoMediaMetadataType = 'Google_Service_Drive_DriveFileVideoMediaMetadata';
  protected $videoMediaMetadataDataType = '';

  public function getAppProperties()
  {
    return $this->appProperties;
  }

  public function setAppProperties($appProperties)
  {
    $this->appProperties = $appProperties;
  }

  public function setCapabilities(Google_Service_Drive_DriveFileCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  public function setContentHints(Google_Service_Drive_DriveFileContentHints $contentHints)
  {
    $this->contentHints = $contentHints;
  }
  public function getContentHints()
  {
    return $this->contentHints;
  }

  public function getCreatedTime()
  {
    return $this->createdTime;
  }

  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getExplicitlyTrashed()
  {
    return $this->explicitlyTrashed;
  }

  public function setExplicitlyTrashed($explicitlyTrashed)
  {
    $this->explicitlyTrashed = $explicitlyTrashed;
  }

  public function getFileExtension()
  {
    return $this->fileExtension;
  }

  public function setFileExtension($fileExtension)
  {
    $this->fileExtension = $fileExtension;
  }

  public function getFolderColorRgb()
  {
    return $this->folderColorRgb;
  }

  public function setFolderColorRgb($folderColorRgb)
  {
    $this->folderColorRgb = $folderColorRgb;
  }

  public function getFullFileExtension()
  {
    return $this->fullFileExtension;
  }

  public function setFullFileExtension($fullFileExtension)
  {
    $this->fullFileExtension = $fullFileExtension;
  }

  public function getHeadRevisionId()
  {
    return $this->headRevisionId;
  }

  public function setHeadRevisionId($headRevisionId)
  {
    $this->headRevisionId = $headRevisionId;
  }

  public function getIconLink()
  {
    return $this->iconLink;
  }

  public function setIconLink($iconLink)
  {
    $this->iconLink = $iconLink;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setImageMediaMetadata(Google_Service_Drive_DriveFileImageMediaMetadata $imageMediaMetadata)
  {
    $this->imageMediaMetadata = $imageMediaMetadata;
  }
  public function getImageMediaMetadata()
  {
    return $this->imageMediaMetadata;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLastModifyingUser(Google_Service_Drive_User $lastModifyingUser)
  {
    $this->lastModifyingUser = $lastModifyingUser;
  }
  public function getLastModifyingUser()
  {
    return $this->lastModifyingUser;
  }

  public function getMd5Checksum()
  {
    return $this->md5Checksum;
  }

  public function setMd5Checksum($md5Checksum)
  {
    $this->md5Checksum = $md5Checksum;
  }

  public function getMimeType()
  {
    return $this->mimeType;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }

  public function getModifiedByMeTime()
  {
    return $this->modifiedByMeTime;
  }

  public function setModifiedByMeTime($modifiedByMeTime)
  {
    $this->modifiedByMeTime = $modifiedByMeTime;
  }

  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }

  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getOriginalFilename()
  {
    return $this->originalFilename;
  }

  public function setOriginalFilename($originalFilename)
  {
    $this->originalFilename = $originalFilename;
  }

  public function getOwnedByMe()
  {
    return $this->ownedByMe;
  }

  public function setOwnedByMe($ownedByMe)
  {
    $this->ownedByMe = $ownedByMe;
  }

  public function setOwners($owners)
  {
    $this->owners = $owners;
  }
  public function getOwners()
  {
    return $this->owners;
  }

  public function getParents()
  {
    return $this->parents;
  }

  public function setParents($parents)
  {
    $this->parents = $parents;
  }

  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }

  public function getProperties()
  {
    return $this->properties;
  }

  public function setProperties($properties)
  {
    $this->properties = $properties;
  }

  public function getQuotaBytesUsed()
  {
    return $this->quotaBytesUsed;
  }

  public function setQuotaBytesUsed($quotaBytesUsed)
  {
    $this->quotaBytesUsed = $quotaBytesUsed;
  }

  public function getShared()
  {
    return $this->shared;
  }

  public function setShared($shared)
  {
    $this->shared = $shared;
  }

  public function getSharedWithMeTime()
  {
    return $this->sharedWithMeTime;
  }

  public function setSharedWithMeTime($sharedWithMeTime)
  {
    $this->sharedWithMeTime = $sharedWithMeTime;
  }

  public function setSharingUser(Google_Service_Drive_User $sharingUser)
  {
    $this->sharingUser = $sharingUser;
  }
  public function getSharingUser()
  {
    return $this->sharingUser;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function getSpaces()
  {
    return $this->spaces;
  }

  public function setSpaces($spaces)
  {
    $this->spaces = $spaces;
  }

  public function getStarred()
  {
    return $this->starred;
  }

  public function setStarred($starred)
  {
    $this->starred = $starred;
  }

  public function getThumbnailLink()
  {
    return $this->thumbnailLink;
  }

  public function setThumbnailLink($thumbnailLink)
  {
    $this->thumbnailLink = $thumbnailLink;
  }

  public function getTrashed()
  {
    return $this->trashed;
  }

  public function setTrashed($trashed)
  {
    $this->trashed = $trashed;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function setVideoMediaMetadata(Google_Service_Drive_DriveFileVideoMediaMetadata $videoMediaMetadata)
  {
    $this->videoMediaMetadata = $videoMediaMetadata;
  }
  public function getVideoMediaMetadata()
  {
    return $this->videoMediaMetadata;
  }

  public function getViewedByMe()
  {
    return $this->viewedByMe;
  }

  public function setViewedByMe($viewedByMe)
  {
    $this->viewedByMe = $viewedByMe;
  }

  public function getViewedByMeTime()
  {
    return $this->viewedByMeTime;
  }

  public function setViewedByMeTime($viewedByMeTime)
  {
    $this->viewedByMeTime = $viewedByMeTime;
  }

  public function getViewersCanCopyContent()
  {
    return $this->viewersCanCopyContent;
  }

  public function setViewersCanCopyContent($viewersCanCopyContent)
  {
    $this->viewersCanCopyContent = $viewersCanCopyContent;
  }

  public function getWebContentLink()
  {
    return $this->webContentLink;
  }

  public function setWebContentLink($webContentLink)
  {
    $this->webContentLink = $webContentLink;
  }

  public function getWebViewLink()
  {
    return $this->webViewLink;
  }

  public function setWebViewLink($webViewLink)
  {
    $this->webViewLink = $webViewLink;
  }

  public function getWritersCanShare()
  {
    return $this->writersCanShare;
  }

  public function setWritersCanShare($writersCanShare)
  {
    $this->writersCanShare = $writersCanShare;
  }
}

class Google_Service_Drive_DriveFileCapabilities extends Google_Model
{
  public $canComment;
  public $canCopy;
  public $canEdit;
  public $canShare;
  protected $internal_gapi_mappings = array(
  );

  public function getCanComment()
  {
    return $this->canComment;
  }

  public function setCanComment($canComment)
  {
    $this->canComment = $canComment;
  }

  public function getCanCopy()
  {
    return $this->canCopy;
  }

  public function setCanCopy($canCopy)
  {
    $this->canCopy = $canCopy;
  }

  public function getCanEdit()
  {
    return $this->canEdit;
  }

  public function setCanEdit($canEdit)
  {
    $this->canEdit = $canEdit;
  }

  public function getCanShare()
  {
    return $this->canShare;
  }

  public function setCanShare($canShare)
  {
    $this->canShare = $canShare;
  }
}

class Google_Service_Drive_DriveFileContentHints extends Google_Model
{
  public $indexableText;
  protected $internal_gapi_mappings = array(
  );
  protected $thumbnailType = 'Google_Service_Drive_DriveFileContentHintsThumbnail';
  protected $thumbnailDataType = '';

  public function getIndexableText()
  {
    return $this->indexableText;
  }

  public function setIndexableText($indexableText)
  {
    $this->indexableText = $indexableText;
  }

  public function setThumbnail(Google_Service_Drive_DriveFileContentHintsThumbnail $thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
  public function getThumbnail()
  {
    return $this->thumbnail;
  }
}

class Google_Service_Drive_DriveFileContentHintsThumbnail extends Google_Model
{
  public $image;
  public $mimeType;
  protected $internal_gapi_mappings = array(
  );

  public function getImage()
  {
    return $this->image;
  }

  public function setImage($image)
  {
    $this->image = $image;
  }

  public function getMimeType()
  {
    return $this->mimeType;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
}

class Google_Service_Drive_DriveFileImageMediaMetadata extends Google_Model
{
  public $aperture;
  public $cameraMake;
  public $cameraModel;
  public $colorSpace;
  public $exposureBias;
  public $exposureMode;
  public $exposureTime;
  public $flashUsed;
  public $focalLength;
  public $height;
  public $isoSpeed;
  public $lens;
  public $maxApertureValue;
  public $meteringMode;
  public $rotation;
  public $sensor;
  public $subjectDistance;
  public $time;
  public $whiteBalance;
  public $width;
  protected $internal_gapi_mappings = array(
  );
  protected $locationType = 'Google_Service_Drive_DriveFileImageMediaMetadataLocation';
  protected $locationDataType = '';

  public function getAperture()
  {
    return $this->aperture;
  }

  public function setAperture($aperture)
  {
    $this->aperture = $aperture;
  }

  public function getCameraMake()
  {
    return $this->cameraMake;
  }

  public function setCameraMake($cameraMake)
  {
    $this->cameraMake = $cameraMake;
  }

  public function getCameraModel()
  {
    return $this->cameraModel;
  }

  public function setCameraModel($cameraModel)
  {
    $this->cameraModel = $cameraModel;
  }

  public function getColorSpace()
  {
    return $this->colorSpace;
  }

  public function setColorSpace($colorSpace)
  {
    $this->colorSpace = $colorSpace;
  }

  public function getExposureBias()
  {
    return $this->exposureBias;
  }

  public function setExposureBias($exposureBias)
  {
    $this->exposureBias = $exposureBias;
  }

  public function getExposureMode()
  {
    return $this->exposureMode;
  }

  public function setExposureMode($exposureMode)
  {
    $this->exposureMode = $exposureMode;
  }

  public function getExposureTime()
  {
    return $this->exposureTime;
  }

  public function setExposureTime($exposureTime)
  {
    $this->exposureTime = $exposureTime;
  }

  public function getFlashUsed()
  {
    return $this->flashUsed;
  }

  public function setFlashUsed($flashUsed)
  {
    $this->flashUsed = $flashUsed;
  }

  public function getFocalLength()
  {
    return $this->focalLength;
  }

  public function setFocalLength($focalLength)
  {
    $this->focalLength = $focalLength;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getIsoSpeed()
  {
    return $this->isoSpeed;
  }

  public function setIsoSpeed($isoSpeed)
  {
    $this->isoSpeed = $isoSpeed;
  }

  public function getLens()
  {
    return $this->lens;
  }

  public function setLens($lens)
  {
    $this->lens = $lens;
  }

  public function setLocation(Google_Service_Drive_DriveFileImageMediaMetadataLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }

  public function getMaxApertureValue()
  {
    return $this->maxApertureValue;
  }

  public function setMaxApertureValue($maxApertureValue)
  {
    $this->maxApertureValue = $maxApertureValue;
  }

  public function getMeteringMode()
  {
    return $this->meteringMode;
  }

  public function setMeteringMode($meteringMode)
  {
    $this->meteringMode = $meteringMode;
  }

  public function getRotation()
  {
    return $this->rotation;
  }

  public function setRotation($rotation)
  {
    $this->rotation = $rotation;
  }

  public function getSensor()
  {
    return $this->sensor;
  }

  public function setSensor($sensor)
  {
    $this->sensor = $sensor;
  }

  public function getSubjectDistance()
  {
    return $this->subjectDistance;
  }

  public function setSubjectDistance($subjectDistance)
  {
    $this->subjectDistance = $subjectDistance;
  }

  public function getTime()
  {
    return $this->time;
  }

  public function setTime($time)
  {
    $this->time = $time;
  }

  public function getWhiteBalance()
  {
    return $this->whiteBalance;
  }

  public function setWhiteBalance($whiteBalance)
  {
    $this->whiteBalance = $whiteBalance;
  }

  public function getWidth()
  {
    return $this->width;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }
}

class Google_Service_Drive_DriveFileImageMediaMetadataLocation extends Google_Model
{
  public $altitude;
  public $latitude;
  public $longitude;
  protected $internal_gapi_mappings = array(
  );

  public function getAltitude()
  {
    return $this->altitude;
  }

  public function setAltitude($altitude)
  {
    $this->altitude = $altitude;
  }

  public function getLatitude()
  {
    return $this->latitude;
  }

  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }

  public function getLongitude()
  {
    return $this->longitude;
  }

  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
}

class Google_Service_Drive_DriveFileVideoMediaMetadata extends Google_Model
{
  public $durationMillis;
  public $height;
  public $width;
  protected $internal_gapi_mappings = array(
  );

  public function getDurationMillis()
  {
    return $this->durationMillis;
  }

  public function setDurationMillis($durationMillis)
  {
    $this->durationMillis = $durationMillis;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getWidth()
  {
    return $this->width;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }
}

class Google_Service_Drive_FileList extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'files';
  protected $internal_gapi_mappings = array(
  );
  protected $filesType = 'Google_Service_Drive_DriveFile';
  protected $filesDataType = 'array';

  public function setFiles($files)
  {
    $this->files = $files;
  }
  public function getFiles()
  {
    return $this->files;
  }

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
}

class Google_Service_Drive_GeneratedIds extends Google_Collection
{
  public $ids;
  public $kind;
  public $space;
  protected $collection_key = 'ids';
  protected $internal_gapi_mappings = array(
  );

  public function getIds()
  {
    return $this->ids;
  }

  public function setIds($ids)
  {
    $this->ids = $ids;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getSpace()
  {
    return $this->space;
  }

  public function setSpace($space)
  {
    $this->space = $space;
  }
}

class Google_Service_Drive_Permission extends Google_Model
{
  public $allowFileDiscovery;
  public $displayName;
  public $domain;
  public $emailAddress;
  public $id;
  public $kind;
  public $photoLink;
  public $role;
  public $type;
  protected $internal_gapi_mappings = array(
  );

  public function getAllowFileDiscovery()
  {
    return $this->allowFileDiscovery;
  }

  public function setAllowFileDiscovery($allowFileDiscovery)
  {
    $this->allowFileDiscovery = $allowFileDiscovery;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDomain()
  {
    return $this->domain;
  }

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  public function getEmailAddress()
  {
    return $this->emailAddress;
  }

  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
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

  public function getPhotoLink()
  {
    return $this->photoLink;
  }

  public function setPhotoLink($photoLink)
  {
    $this->photoLink = $photoLink;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function setRole($role)
  {
    $this->role = $role;
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

class Google_Service_Drive_PermissionList extends Google_Collection
{
  public $kind;
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );
  protected $permissionsType = 'Google_Service_Drive_Permission';
  protected $permissionsDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class Google_Service_Drive_Reply extends Google_Model
{
  public $action;
  public $content;
  public $createdTime;
  public $deleted;
  public $htmlContent;
  public $id;
  public $kind;
  public $modifiedTime;
  protected $internal_gapi_mappings = array(
  );
  protected $authorType = 'Google_Service_Drive_User';
  protected $authorDataType = '';

  public function getAction()
  {
    return $this->action;
  }

  public function setAction($action)
  {
    $this->action = $action;
  }

  public function setAuthor(Google_Service_Drive_User $author)
  {
    $this->author = $author;
  }
  public function getAuthor()
  {
    return $this->author;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getCreatedTime()
  {
    return $this->createdTime;
  }

  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }

  public function getDeleted()
  {
    return $this->deleted;
  }

  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }

  public function getHtmlContent()
  {
    return $this->htmlContent;
  }

  public function setHtmlContent($htmlContent)
  {
    $this->htmlContent = $htmlContent;
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

  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }

  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }
}

class Google_Service_Drive_ReplyList extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'replies';
  protected $internal_gapi_mappings = array(
  );
  protected $repliesType = 'Google_Service_Drive_Reply';
  protected $repliesDataType = 'array';

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

  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  public function getReplies()
  {
    return $this->replies;
  }
}

class Google_Service_Drive_Revision extends Google_Model
{
  public $id;
  public $keepForever;
  public $kind;
  public $md5Checksum;
  public $mimeType;
  public $modifiedTime;
  public $originalFilename;
  public $publishAuto;
  public $published;
  public $publishedOutsideDomain;
  public $size;
  protected $internal_gapi_mappings = array(
  );
  protected $lastModifyingUserType = 'Google_Service_Drive_User';
  protected $lastModifyingUserDataType = '';

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKeepForever()
  {
    return $this->keepForever;
  }

  public function setKeepForever($keepForever)
  {
    $this->keepForever = $keepForever;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLastModifyingUser(Google_Service_Drive_User $lastModifyingUser)
  {
    $this->lastModifyingUser = $lastModifyingUser;
  }
  public function getLastModifyingUser()
  {
    return $this->lastModifyingUser;
  }

  public function getMd5Checksum()
  {
    return $this->md5Checksum;
  }

  public function setMd5Checksum($md5Checksum)
  {
    $this->md5Checksum = $md5Checksum;
  }

  public function getMimeType()
  {
    return $this->mimeType;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }

  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }

  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }

  public function getOriginalFilename()
  {
    return $this->originalFilename;
  }

  public function setOriginalFilename($originalFilename)
  {
    $this->originalFilename = $originalFilename;
  }

  public function getPublishAuto()
  {
    return $this->publishAuto;
  }

  public function setPublishAuto($publishAuto)
  {
    $this->publishAuto = $publishAuto;
  }

  public function getPublished()
  {
    return $this->published;
  }

  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getPublishedOutsideDomain()
  {
    return $this->publishedOutsideDomain;
  }

  public function setPublishedOutsideDomain($publishedOutsideDomain)
  {
    $this->publishedOutsideDomain = $publishedOutsideDomain;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }
}

class Google_Service_Drive_RevisionList extends Google_Collection
{
  public $kind;
  protected $collection_key = 'revisions';
  protected $internal_gapi_mappings = array(
  );
  protected $revisionsType = 'Google_Service_Drive_Revision';
  protected $revisionsDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setRevisions($revisions)
  {
    $this->revisions = $revisions;
  }
  public function getRevisions()
  {
    return $this->revisions;
  }
}

class Google_Service_Drive_StartPageToken extends Google_Model
{
  public $kind;
  public $startPageToken;
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

  public function getStartPageToken()
  {
    return $this->startPageToken;
  }

  public function setStartPageToken($startPageToken)
  {
    $this->startPageToken = $startPageToken;
  }
}

class Google_Service_Drive_User extends Google_Model
{
  public $displayName;
  public $emailAddress;
  public $kind;
  public $me;
  public $permissionId;
  public $photoLink;
  protected $internal_gapi_mappings = array(
  );

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getEmailAddress()
  {
    return $this->emailAddress;
  }

  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMe()
  {
    return $this->me;
  }

  public function setMe($me)
  {
    $this->me = $me;
  }

  public function getPermissionId()
  {
    return $this->permissionId;
  }

  public function setPermissionId($permissionId)
  {
    $this->permissionId = $permissionId;
  }

  public function getPhotoLink()
  {
    return $this->photoLink;
  }

  public function setPhotoLink($photoLink)
  {
    $this->photoLink = $photoLink;
  }
}
