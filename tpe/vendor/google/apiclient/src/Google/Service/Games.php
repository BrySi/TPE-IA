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
 * Service definition for Games (v1).
 *
 * <p>
 * The API for Google Play Game Services.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/games/services/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Games extends Google_Service
{
  /** View and manage its own configuration data in your Google Drive. */
  const DRIVE_APPDATA =
      "https://www.googleapis.com/auth/drive.appdata";
  /** Share your Google+ profile information and view and manage your game activity. */
  const GAMES =
      "https://www.googleapis.com/auth/games";
  /** Know the list of people in your circles, your age range, and language. */
  const PLUS_LOGIN =
      "https://www.googleapis.com/auth/plus.login";

  public $achievementDefinitions;
  public $achievements;
  public $applications;
  public $events;
  public $leaderboards;
  public $metagame;
  public $players;
  public $pushtokens;
  public $questMilestones;
  public $quests;
  public $revisions;
  public $rooms;
  public $scores;
  public $snapshots;
  public $turnBasedMatches;
  

  /**
   * Constructs the internal representation of the Games service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'games/v1/';
    $this->version = 'v1';
    $this->serviceName = 'games';

    $this->achievementDefinitions = new Google_Service_Games_AchievementDefinitions_Resource(
        $this,
        $this->serviceName,
        'achievementDefinitions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'achievements',
              'httpMethod' => 'GET',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
    $this->achievements = new Google_Service_Games_Achievements_Resource(
        $this,
        $this->serviceName,
        'achievements',
        array(
          'methods' => array(
            'increment' => array(
              'path' => 'achievements/{achievementId}/increment',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'stepsToIncrement' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/achievements',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'state' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reveal' => array(
              'path' => 'achievements/{achievementId}/reveal',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'setStepsAtLeast' => array(
              'path' => 'achievements/{achievementId}/setStepsAtLeast',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'steps' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'unlock' => array(
              'path' => 'achievements/{achievementId}/unlock',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateMultiple' => array(
              'path' => 'achievements/updateMultiple',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->applications = new Google_Service_Games_Applications_Resource(
        $this,
        $this->serviceName,
        'applications',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'applications/{applicationId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'platformType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'played' => array(
              'path' => 'applications/played',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'verify' => array(
              'path' => 'applications/{applicationId}/verify',
              'httpMethod' => 'GET',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->events = new Google_Service_Games_Events_Resource(
        $this,
        $this->serviceName,
        'events',
        array(
          'methods' => array(
            'listByPlayer' => array(
              'path' => 'events',
              'httpMethod' => 'GET',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
            ),'listDefinitions' => array(
              'path' => 'eventDefinitions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
            ),'record' => array(
              'path' => 'events',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->leaderboards = new Google_Service_Games_Leaderboards_Resource(
        $this,
        $this->serviceName,
        'leaderboards',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'leaderboards/{leaderboardId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'leaderboards',
              'httpMethod' => 'GET',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
    $this->metagame = new Google_Service_Games_Metagame_Resource(
        $this,
        $this->serviceName,
        'metagame',
        array(
          'methods' => array(
            'getMetagameConfig' => array(
              'path' => 'metagameConfig',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'listCategoriesByPlayer' => array(
              'path' => 'players/{playerId}/categories/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
    $this->players = new Google_Service_Games_Players_Resource(
        $this,
        $this->serviceName,
        'players',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'players/{playerId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/me/players/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
    $this->pushtokens = new Google_Service_Games_Pushtokens_Resource(
        $this,
        $this->serviceName,
        'pushtokens',
        array(
          'methods' => array(
            'remove' => array(
              'path' => 'pushtokens/remove',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'update' => array(
              'path' => 'pushtokens',
              'httpMethod' => 'PUT',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->questMilestones = new Google_Service_Games_QuestMilestones_Resource(
        $this,
        $this->serviceName,
        'questMilestones',
        array(
          'methods' => array(
            'claim' => array(
              'path' => 'quests/{questId}/milestones/{milestoneId}/claim',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'questId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'milestoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->quests = new Google_Service_Games_Quests_Resource(
        $this,
        $this->serviceName,
        'quests',
        array(
          'methods' => array(
            'accept' => array(
              'path' => 'quests/{questId}/accept',
              'httpMethod' => 'POST',
              'parameters' => array(
                'questId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/quests',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
    $this->revisions = new Google_Service_Games_Revisions_Resource(
        $this,
        $this->serviceName,
        'revisions',
        array(
          'methods' => array(
            'check' => array(
              'path' => 'revisions/check',
              'httpMethod' => 'GET',
              'parameters' => array(
                'clientRevision' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rooms = new Google_Service_Games_Rooms_Resource(
        $this,
        $this->serviceName,
        'rooms',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'rooms/create',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'decline' => array(
              'path' => 'rooms/{roomId}/decline',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'dismiss' => array(
              'path' => 'rooms/{roomId}/dismiss',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'rooms/{roomId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'join' => array(
              'path' => 'rooms/{roomId}/join',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leave' => array(
              'path' => 'rooms/{roomId}/leave',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'rooms',
              'httpMethod' => 'GET',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
            ),'reportStatus' => array(
              'path' => 'rooms/{roomId}/reportstatus',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->scores = new Google_Service_Games_Scores_Resource(
        $this,
        $this->serviceName,
        'scores',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'players/{playerId}/leaderboards/{leaderboardId}/scores/{timeSpan}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeRankType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
            ),'list' => array(
              'path' => 'leaderboards/{leaderboardId}/scores/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
            ),'listWindow' => array(
              'path' => 'leaderboards/{leaderboardId}/window/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'resultsAbove' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'returnTopIfAbsent' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'submit' => array(
              'path' => 'leaderboards/{leaderboardId}/scores',
              'httpMethod' => 'POST',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'score' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'scoreTag' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'submitMultiple' => array(
              'path' => 'leaderboards/scores',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->snapshots = new Google_Service_Games_Snapshots_Resource(
        $this,
        $this->serviceName,
        'snapshots',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'snapshots/{snapshotId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'snapshotId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/snapshots',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
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
    $this->turnBasedMatches = new Google_Service_Games_TurnBasedMatches_Resource(
        $this,
        $this->serviceName,
        'turnBasedMatches',
        array(
          'methods' => array(
            'cancel' => array(
              'path' => 'turnbasedmatches/{matchId}/cancel',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'create' => array(
              'path' => 'turnbasedmatches/create',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'decline' => array(
              'path' => 'turnbasedmatches/{matchId}/decline',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'dismiss' => array(
              'path' => 'turnbasedmatches/{matchId}/dismiss',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'finish' => array(
              'path' => 'turnbasedmatches/{matchId}/finish',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'turnbasedmatches/{matchId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'join' => array(
              'path' => 'turnbasedmatches/{matchId}/join',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leave' => array(
              'path' => 'turnbasedmatches/{matchId}/leave',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leaveTurn' => array(
              'path' => 'turnbasedmatches/{matchId}/leaveTurn',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'matchVersion' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pendingParticipantId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'turnbasedmatches',
              'httpMethod' => 'GET',
              'parameters' => array(
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxCompletedMatches' => array(
                  'location' => 'query',
                  'type' => 'integer',
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
            ),'rematch' => array(
              'path' => 'turnbasedmatches/{matchId}/rematch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'sync' => array(
              'path' => 'turnbasedmatches/sync',
              'httpMethod' => 'GET',
              'parameters' => array(
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxCompletedMatches' => array(
                  'location' => 'query',
                  'type' => 'integer',
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
            ),'takeTurn' => array(
              'path' => 'turnbasedmatches/{matchId}/turn',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
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
 * The "achievementDefinitions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $achievementDefinitions = $gamesService->achievementDefinitions;
 *  </code>
 */
class Google_Service_Games_AchievementDefinitions_Resource extends Google_Service_Resource
{

  /**
   * Lists all the achievement definitions for your application.
   * (achievementDefinitions.listAchievementDefinitions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of achievement resources to
   * return in the response, used for paging. For any response, the actual number
   * of achievement resources returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_AchievementDefinitionsListResponse
   */
  public function listAchievementDefinitions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_AchievementDefinitionsListResponse");
  }
}

/**
 * The "achievements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $achievements = $gamesService->achievements;
 *  </code>
 */
class Google_Service_Games_Achievements_Resource extends Google_Service_Resource
{

  /**
   * Increments the steps of the achievement with the given ID for the currently
   * authenticated player. (achievements.increment)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param int $stepsToIncrement The number of steps to increment.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId A randomly generated numeric ID for each request
   * specified by the caller. This number is used at the server to ensure that the
   * request is handled correctly across retries.
   * @return Google_Service_Games_AchievementIncrementResponse
   */
  public function increment($achievementId, $stepsToIncrement, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'stepsToIncrement' => $stepsToIncrement);
    $params = array_merge($params, $optParams);
    return $this->call('increment', array($params), "Google_Service_Games_AchievementIncrementResponse");
  }

  /**
   * Lists the progress for all your application's achievements for the currently
   * authenticated player. (achievements.listAchievements)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of achievement resources to
   * return in the response, used for paging. For any response, the actual number
   * of achievement resources returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param string state Tells the server to return only achievements with the
   * specified state. If this parameter isn't specified, all achievements are
   * returned.
   * @return Google_Service_Games_PlayerAchievementListResponse
   */
  public function listAchievements($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_PlayerAchievementListResponse");
  }

  /**
   * Sets the state of the achievement with the given ID to REVEALED for the
   * currently authenticated player. (achievements.reveal)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_AchievementRevealResponse
   */
  public function reveal($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('reveal', array($params), "Google_Service_Games_AchievementRevealResponse");
  }

  /**
   * Sets the steps for the currently authenticated player towards unlocking an
   * achievement. If the steps parameter is less than the current number of steps
   * that the player already gained for the achievement, the achievement is not
   * modified. (achievements.setStepsAtLeast)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param int $steps The minimum value to set the steps to.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_AchievementSetStepsAtLeastResponse
   */
  public function setStepsAtLeast($achievementId, $steps, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'steps' => $steps);
    $params = array_merge($params, $optParams);
    return $this->call('setStepsAtLeast', array($params), "Google_Service_Games_AchievementSetStepsAtLeastResponse");
  }

  /**
   * Unlocks this achievement for the currently authenticated player.
   * (achievements.unlock)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_AchievementUnlockResponse
   */
  public function unlock($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('unlock', array($params), "Google_Service_Games_AchievementUnlockResponse");
  }

  /**
   * Updates multiple achievements for the currently authenticated player.
   * (achievements.updateMultiple)
   *
   * @param Google_AchievementUpdateMultipleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_AchievementUpdateMultipleResponse
   */
  public function updateMultiple(Google_Service_Games_AchievementUpdateMultipleRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateMultiple', array($params), "Google_Service_Games_AchievementUpdateMultipleResponse");
  }
}

/**
 * The "applications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $applications = $gamesService->applications;
 *  </code>
 */
class Google_Service_Games_Applications_Resource extends Google_Service_Resource
{

  /**
   * Retrieves the metadata of the application with the given ID. If the requested
   * application is not available for the specified platformType, the returned
   * response will not include any instance data. (applications.get)
   *
   * @param string $applicationId The application ID from the Google Play
   * developer console.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param string platformType Restrict application details returned to the
   * specific platform.
   * @return Google_Service_Games_Application
   */
  public function get($applicationId, $optParams = array())
  {
    $params = array('applicationId' => $applicationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_Application");
  }

  /**
   * Indicate that the the currently authenticated user is playing your
   * application. (applications.played)
   *
   * @param array $optParams Optional parameters.
   */
  public function played($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('played', array($params));
  }

  /**
   * Verifies the auth token provided with this request is for the application
   * with the specified ID, and returns the ID of the player it was granted for.
   * (applications.verify)
   *
   * @param string $applicationId The application ID from the Google Play
   * developer console.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_ApplicationVerifyResponse
   */
  public function verify($applicationId, $optParams = array())
  {
    $params = array('applicationId' => $applicationId);
    $params = array_merge($params, $optParams);
    return $this->call('verify', array($params), "Google_Service_Games_ApplicationVerifyResponse");
  }
}

/**
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $events = $gamesService->events;
 *  </code>
 */
class Google_Service_Games_Events_Resource extends Google_Service_Resource
{

  /**
   * Returns a list showing the current progress on events in this application for
   * the currently authenticated user. (events.listByPlayer)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of events to return in the
   * response, used for paging. For any response, the actual number of events to
   * return may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_PlayerEventListResponse
   */
  public function listByPlayer($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listByPlayer', array($params), "Google_Service_Games_PlayerEventListResponse");
  }

  /**
   * Returns a list of the event definitions in this application.
   * (events.listDefinitions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of event definitions to return
   * in the response, used for paging. For any response, the actual number of
   * event definitions to return may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_EventDefinitionListResponse
   */
  public function listDefinitions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listDefinitions', array($params), "Google_Service_Games_EventDefinitionListResponse");
  }

  /**
   * Records a batch of changes to the number of times events have occurred for
   * the currently authenticated user of this application. (events.record)
   *
   * @param Google_EventRecordRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_EventUpdateResponse
   */
  public function record(Google_Service_Games_EventRecordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('record', array($params), "Google_Service_Games_EventUpdateResponse");
  }
}

/**
 * The "leaderboards" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $leaderboards = $gamesService->leaderboards;
 *  </code>
 */
class Google_Service_Games_Leaderboards_Resource extends Google_Service_Resource
{

  /**
   * Retrieves the metadata of the leaderboard with the given ID.
   * (leaderboards.get)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_Leaderboard
   */
  public function get($leaderboardId, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_Leaderboard");
  }

  /**
   * Lists all the leaderboard metadata for your application.
   * (leaderboards.listLeaderboards)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of leaderboards to return in the
   * response. For any response, the actual number of leaderboards returned may be
   * less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_LeaderboardListResponse
   */
  public function listLeaderboards($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_LeaderboardListResponse");
  }
}

/**
 * The "metagame" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $metagame = $gamesService->metagame;
 *  </code>
 */
class Google_Service_Games_Metagame_Resource extends Google_Service_Resource
{

  /**
   * Return the metagame configuration data for the calling application.
   * (metagame.getMetagameConfig)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_MetagameConfig
   */
  public function getMetagameConfig($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getMetagameConfig', array($params), "Google_Service_Games_MetagameConfig");
  }

  /**
   * List play data aggregated per category for the player corresponding to
   * playerId. (metagame.listCategoriesByPlayer)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param string $collection The collection of categories for which data will be
   * returned.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of category resources to return
   * in the response, used for paging. For any response, the actual number of
   * category resources returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_CategoryListResponse
   */
  public function listCategoriesByPlayer($playerId, $collection, $optParams = array())
  {
    $params = array('playerId' => $playerId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('listCategoriesByPlayer', array($params), "Google_Service_Games_CategoryListResponse");
  }
}

/**
 * The "players" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $players = $gamesService->players;
 *  </code>
 */
class Google_Service_Games_Players_Resource extends Google_Service_Resource
{

  /**
   * Retrieves the Player resource with the given ID. To retrieve the player for
   * the currently authenticated user, set playerId to me. (players.get)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_Player
   */
  public function get($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_Player");
  }

  /**
   * Get the collection of players for the currently authenticated user.
   * (players.listPlayers)
   *
   * @param string $collection Collection of players being retrieved
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of player resources to return in
   * the response, used for paging. For any response, the actual number of player
   * resources returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_PlayerListResponse
   */
  public function listPlayers($collection, $optParams = array())
  {
    $params = array('collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_PlayerListResponse");
  }
}

/**
 * The "pushtokens" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $pushtokens = $gamesService->pushtokens;
 *  </code>
 */
class Google_Service_Games_Pushtokens_Resource extends Google_Service_Resource
{

  /**
   * Removes a push token for the current user and application. Removing a non-
   * existent push token will report success. (pushtokens.remove)
   *
   * @param Google_PushTokenId $postBody
   * @param array $optParams Optional parameters.
   */
  public function remove(Google_Service_Games_PushTokenId $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('remove', array($params));
  }

  /**
   * Registers a push token for the current user and application.
   * (pushtokens.update)
   *
   * @param Google_PushToken $postBody
   * @param array $optParams Optional parameters.
   */
  public function update(Google_Service_Games_PushToken $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params));
  }
}

/**
 * The "questMilestones" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $questMilestones = $gamesService->questMilestones;
 *  </code>
 */
class Google_Service_Games_QuestMilestones_Resource extends Google_Service_Resource
{

  /**
   * Report that a reward for the milestone corresponding to milestoneId for the
   * quest corresponding to questId has been claimed by the currently authorized
   * user. (questMilestones.claim)
   *
   * @param string $questId The ID of the quest.
   * @param string $milestoneId The ID of the milestone.
   * @param string $requestId A numeric ID to ensure that the request is handled
   * correctly across retries. Your client application must generate this ID
   * randomly.
   * @param array $optParams Optional parameters.
   */
  public function claim($questId, $milestoneId, $requestId, $optParams = array())
  {
    $params = array('questId' => $questId, 'milestoneId' => $milestoneId, 'requestId' => $requestId);
    $params = array_merge($params, $optParams);
    return $this->call('claim', array($params));
  }
}

/**
 * The "quests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $quests = $gamesService->quests;
 *  </code>
 */
class Google_Service_Games_Quests_Resource extends Google_Service_Resource
{

  /**
   * Indicates that the currently authorized user will participate in the quest.
   * (quests.accept)
   *
   * @param string $questId The ID of the quest.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_Quest
   */
  public function accept($questId, $optParams = array())
  {
    $params = array('questId' => $questId);
    $params = array_merge($params, $optParams);
    return $this->call('accept', array($params), "Google_Service_Games_Quest");
  }

  /**
   * Get a list of quests for your application and the currently authenticated
   * player. (quests.listQuests)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of quest resources to return in
   * the response, used for paging. For any response, the actual number of quest
   * resources returned may be less than the specified maxResults. Acceptable
   * values are 1 to 50, inclusive. (Default: 50).
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_QuestListResponse
   */
  public function listQuests($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_QuestListResponse");
  }
}

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $revisions = $gamesService->revisions;
 *  </code>
 */
class Google_Service_Games_Revisions_Resource extends Google_Service_Resource
{

  /**
   * Checks whether the games client is out of date. (revisions.check)
   *
   * @param string $clientRevision The revision of the client SDK used by your
   * application. Format: [PLATFORM_TYPE]:[VERSION_NUMBER]. Possible values of
   * PLATFORM_TYPE are:   - "ANDROID" - Client is running the Android SDK.  -
   * "IOS" - Client is running the iOS SDK.  - "WEB_APP" - Client is running as a
   * Web App.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_RevisionCheckResponse
   */
  public function check($clientRevision, $optParams = array())
  {
    $params = array('clientRevision' => $clientRevision);
    $params = array_merge($params, $optParams);
    return $this->call('check', array($params), "Google_Service_Games_RevisionCheckResponse");
  }
}

/**
 * The "rooms" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $rooms = $gamesService->rooms;
 *  </code>
 */
class Google_Service_Games_Rooms_Resource extends Google_Service_Resource
{

  /**
   * Create a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.create)
   *
   * @param Google_RoomCreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_Room
   */
  public function create(Google_Service_Games_RoomCreateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Games_Room");
  }

  /**
   * Decline an invitation to join a room. For internal use by the Games SDK only.
   * Calling this method directly is unsupported. (rooms.decline)
   *
   * @param string $roomId The ID of the room.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_Room
   */
  public function decline($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Google_Service_Games_Room");
  }

  /**
   * Dismiss an invitation to join a room. For internal use by the Games SDK only.
   * Calling this method directly is unsupported. (rooms.dismiss)
   *
   * @param string $roomId The ID of the room.
   * @param array $optParams Optional parameters.
   */
  public function dismiss($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }

  /**
   * Get the data for a room. (rooms.get)
   *
   * @param string $roomId The ID of the room.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_Room
   */
  public function get($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_Room");
  }

  /**
   * Join a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.join)
   *
   * @param string $roomId The ID of the room.
   * @param Google_RoomJoinRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_Room
   */
  public function join($roomId, Google_Service_Games_RoomJoinRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('join', array($params), "Google_Service_Games_Room");
  }

  /**
   * Leave a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.leave)
   *
   * @param string $roomId The ID of the room.
   * @param Google_RoomLeaveRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_Room
   */
  public function leave($roomId, Google_Service_Games_RoomLeaveRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('leave', array($params), "Google_Service_Games_Room");
  }

  /**
   * Returns invitations to join rooms. (rooms.listRooms)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of rooms to return in the
   * response, used for paging. For any response, the actual number of rooms to
   * return may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_RoomList
   */
  public function listRooms($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_RoomList");
  }

  /**
   * Updates sent by a client reporting the status of peers in a room. For
   * internal use by the Games SDK only. Calling this method directly is
   * unsupported. (rooms.reportStatus)
   *
   * @param string $roomId The ID of the room.
   * @param Google_RoomP2PStatuses $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_RoomStatus
   */
  public function reportStatus($roomId, Google_Service_Games_RoomP2PStatuses $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportStatus', array($params), "Google_Service_Games_RoomStatus");
  }
}

/**
 * The "scores" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $scores = $gamesService->scores;
 *  </code>
 */
class Google_Service_Games_Scores_Resource extends Google_Service_Resource
{

  /**
   * Get high scores, and optionally ranks, in leaderboards for the currently
   * authenticated player. For a specific time span, leaderboardId can be set to
   * ALL to retrieve data for all leaderboards in a given time span. NOTE: You
   * cannot ask for 'ALL' leaderboards and 'ALL' timeSpans in the same request;
   * only one parameter may be set to 'ALL'. (scores.get)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param string $leaderboardId The ID of the leaderboard. Can be set to 'ALL'
   * to retrieve data for all leaderboards for this application.
   * @param string $timeSpan The time span for the scores and ranks you're
   * requesting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string includeRankType The types of ranks to return. If the
   * parameter is omitted, no ranks will be returned.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of leaderboard scores to return
   * in the response. For any response, the actual number of leaderboard scores
   * returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_PlayerLeaderboardScoreListResponse
   */
  public function get($playerId, $leaderboardId, $timeSpan, $optParams = array())
  {
    $params = array('playerId' => $playerId, 'leaderboardId' => $leaderboardId, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_PlayerLeaderboardScoreListResponse");
  }

  /**
   * Lists the scores in a leaderboard, starting from the top. (scores.listScores)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param string $collection The collection of scores you're requesting.
   * @param string $timeSpan The time span for the scores and ranks you're
   * requesting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of leaderboard scores to return
   * in the response. For any response, the actual number of leaderboard scores
   * returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_LeaderboardScores
   */
  public function listScores($leaderboardId, $collection, $timeSpan, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_LeaderboardScores");
  }

  /**
   * Lists the scores in a leaderboard around (and including) a player's score.
   * (scores.listWindow)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param string $collection The collection of scores you're requesting.
   * @param string $timeSpan The time span for the scores and ranks you're
   * requesting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of leaderboard scores to return
   * in the response. For any response, the actual number of leaderboard scores
   * returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int resultsAbove The preferred number of scores to return above
   * the player's score. More scores may be returned if the player is at the
   * bottom of the leaderboard; fewer may be returned if the player is at the top.
   * Must be less than or equal to maxResults.
   * @opt_param bool returnTopIfAbsent True if the top scores should be returned
   * when the player is not in the leaderboard. Defaults to true.
   * @return Google_Service_Games_LeaderboardScores
   */
  public function listWindow($leaderboardId, $collection, $timeSpan, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('listWindow', array($params), "Google_Service_Games_LeaderboardScores");
  }

  /**
   * Submits a score to the specified leaderboard. (scores.submit)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param string $score The score you're submitting. The submitted score is
   * ignored if it is worse than a previously submitted score, where worse depends
   * on the leaderboard sort order. The meaning of the score value depends on the
   * leaderboard format type. For fixed-point, the score represents the raw value.
   * For time, the score represents elapsed time in milliseconds. For currency,
   * the score represents a value in micro units.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param string scoreTag Additional information about the score you're
   * submitting. Values must contain no more than 64 URI-safe characters as
   * defined by section 2.3 of RFC 3986.
   * @return Google_Service_Games_PlayerScoreResponse
   */
  public function submit($leaderboardId, $score, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'score' => $score);
    $params = array_merge($params, $optParams);
    return $this->call('submit', array($params), "Google_Service_Games_PlayerScoreResponse");
  }

  /**
   * Submits multiple scores to leaderboards. (scores.submitMultiple)
   *
   * @param Google_PlayerScoreSubmissionList $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_PlayerScoreListResponse
   */
  public function submitMultiple(Google_Service_Games_PlayerScoreSubmissionList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('submitMultiple', array($params), "Google_Service_Games_PlayerScoreListResponse");
  }
}

/**
 * The "snapshots" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $snapshots = $gamesService->snapshots;
 *  </code>
 */
class Google_Service_Games_Snapshots_Resource extends Google_Service_Resource
{

  /**
   * Retrieves the metadata for a given snapshot ID. (snapshots.get)
   *
   * @param string $snapshotId The ID of the snapshot.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_Snapshot
   */
  public function get($snapshotId, $optParams = array())
  {
    $params = array('snapshotId' => $snapshotId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_Snapshot");
  }

  /**
   * Retrieves a list of snapshots created by your application for the player
   * corresponding to the player ID. (snapshots.listSnapshots)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of snapshot resources to return
   * in the response, used for paging. For any response, the actual number of
   * snapshot resources returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_SnapshotListResponse
   */
  public function listSnapshots($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_SnapshotListResponse");
  }
}

/**
 * The "turnBasedMatches" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $turnBasedMatches = $gamesService->turnBasedMatches;
 *  </code>
 */
class Google_Service_Games_TurnBasedMatches_Resource extends Google_Service_Resource
{

  /**
   * Cancel a turn-based match. (turnBasedMatches.cancel)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   */
  public function cancel($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params));
  }

  /**
   * Create a turn-based match. (turnBasedMatches.create)
   *
   * @param Google_TurnBasedMatchCreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function create(Google_Service_Games_TurnBasedMatchCreateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Decline an invitation to play a turn-based match. (turnBasedMatches.decline)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function decline($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Dismiss a turn-based match from the match list. The match will no longer show
   * up in the list and will not generate notifications.
   * (turnBasedMatches.dismiss)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   */
  public function dismiss($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }

  /**
   * Finish a turn-based match. Each player should make this call once, after all
   * results are in. Only the player whose turn it is may make the first call to
   * Finish, and can pass in the final match state. (turnBasedMatches.finish)
   *
   * @param string $matchId The ID of the match.
   * @param Google_TurnBasedMatchResults $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function finish($matchId, Google_Service_Games_TurnBasedMatchResults $postBody, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('finish', array($params), "Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Get the data for a turn-based match. (turnBasedMatches.get)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeMatchData Get match data along with metadata.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function get($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Join a turn-based match. (turnBasedMatches.join)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function join($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('join', array($params), "Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Leave a turn-based match when it is not the current player's turn, without
   * canceling the match. (turnBasedMatches.leave)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function leave($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('leave', array($params), "Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Leave a turn-based match during the current player's turn, without canceling
   * the match. (turnBasedMatches.leaveTurn)
   *
   * @param string $matchId The ID of the match.
   * @param int $matchVersion The version of the match being updated.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param string pendingParticipantId The ID of another participant who
   * should take their turn next. If not set, the match will wait for other
   * player(s) to join via automatching; this is only valid if automatch criteria
   * is set on the match with remaining slots for automatched players.
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function leaveTurn($matchId, $matchVersion, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'matchVersion' => $matchVersion);
    $params = array_merge($params, $optParams);
    return $this->call('leaveTurn', array($params), "Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Returns turn-based matches the player is or was involved in.
   * (turnBasedMatches.listTurnBasedMatches)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeMatchData True if match data should be returned in the
   * response. Note that not all data will necessarily be returned if
   * include_match_data is true; the server may decide to only return data for
   * some of the matches to limit download size for the client. The remainder of
   * the data for these matches will be retrievable on request.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxCompletedMatches The maximum number of completed or
   * canceled matches to return in the response. If not set, all matches returned
   * could be completed or canceled.
   * @opt_param int maxResults The maximum number of matches to return in the
   * response, used for paging. For any response, the actual number of matches to
   * return may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_TurnBasedMatchList
   */
  public function listTurnBasedMatches($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_TurnBasedMatchList");
  }

  /**
   * Create a rematch of a match that was previously completed, with the same
   * participants. This can be called by only one player on a match still in their
   * list; the player must have called Finish first. Returns the newly created
   * match; it will be the caller's turn. (turnBasedMatches.rematch)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param string requestId A randomly generated numeric ID for each request
   * specified by the caller. This number is used at the server to ensure that the
   * request is handled correctly across retries.
   * @return Google_Service_Games_TurnBasedMatchRematch
   */
  public function rematch($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('rematch', array($params), "Google_Service_Games_TurnBasedMatchRematch");
  }

  /**
   * Returns turn-based matches the player is or was involved in that changed
   * since the last sync call, with the least recent changes coming first. Matches
   * that should be removed from the local cache will have a status of
   * MATCH_DELETED. (turnBasedMatches.sync)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeMatchData True if match data should be returned in the
   * response. Note that not all data will necessarily be returned if
   * include_match_data is true; the server may decide to only return data for
   * some of the matches to limit download size for the client. The remainder of
   * the data for these matches will be retrievable on request.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxCompletedMatches The maximum number of completed or
   * canceled matches to return in the response. If not set, all matches returned
   * could be completed or canceled.
   * @opt_param int maxResults The maximum number of matches to return in the
   * response, used for paging. For any response, the actual number of matches to
   * return may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_Games_TurnBasedMatchSync
   */
  public function sync($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('sync', array($params), "Google_Service_Games_TurnBasedMatchSync");
  }

  /**
   * Commit the results of a player turn. (turnBasedMatches.takeTurn)
   *
   * @param string $matchId The ID of the match.
   * @param Google_TurnBasedMatchTurn $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function takeTurn($matchId, Google_Service_Games_TurnBasedMatchTurn $postBody, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('takeTurn', array($params), "Google_Service_Games_TurnBasedMatch");
  }
}




class Google_Service_Games_AchievementDefinition extends Google_Model
{
  public $achievementType;
  public $description;
  public $experiencePoints;
  public $formattedTotalSteps;
  public $id;
  public $initialState;
  public $isRevealedIconUrlDefault;
  public $isUnlockedIconUrlDefault;
  public $kind;
  public $name;
  public $revealedIconUrl;
  public $totalSteps;
  public $unlockedIconUrl;
  protected $internal_gapi_mappings = array(
  );

  public function getAchievementType()
  {
    return $this->achievementType;
  }

  public function setAchievementType($achievementType)
  {
    $this->achievementType = $achievementType;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getExperiencePoints()
  {
    return $this->experiencePoints;
  }

  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
  }

  public function getFormattedTotalSteps()
  {
    return $this->formattedTotalSteps;
  }

  public function setFormattedTotalSteps($formattedTotalSteps)
  {
    $this->formattedTotalSteps = $formattedTotalSteps;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInitialState()
  {
    return $this->initialState;
  }

  public function setInitialState($initialState)
  {
    $this->initialState = $initialState;
  }

  public function getIsRevealedIconUrlDefault()
  {
    return $this->isRevealedIconUrlDefault;
  }

  public function setIsRevealedIconUrlDefault($isRevealedIconUrlDefault)
  {
    $this->isRevealedIconUrlDefault = $isRevealedIconUrlDefault;
  }

  public function getIsUnlockedIconUrlDefault()
  {
    return $this->isUnlockedIconUrlDefault;
  }

  public function setIsUnlockedIconUrlDefault($isUnlockedIconUrlDefault)
  {
    $this->isUnlockedIconUrlDefault = $isUnlockedIconUrlDefault;
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

  public function getRevealedIconUrl()
  {
    return $this->revealedIconUrl;
  }

  public function setRevealedIconUrl($revealedIconUrl)
  {
    $this->revealedIconUrl = $revealedIconUrl;
  }

  public function getTotalSteps()
  {
    return $this->totalSteps;
  }

  public function setTotalSteps($totalSteps)
  {
    $this->totalSteps = $totalSteps;
  }

  public function getUnlockedIconUrl()
  {
    return $this->unlockedIconUrl;
  }

  public function setUnlockedIconUrl($unlockedIconUrl)
  {
    $this->unlockedIconUrl = $unlockedIconUrl;
  }
}

class Google_Service_Games_AchievementDefinitionsListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_AchievementDefinition';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_AchievementIncrementResponse extends Google_Model
{
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;
  protected $internal_gapi_mappings = array(
  );

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }

  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
}

class Google_Service_Games_AchievementRevealResponse extends Google_Model
{
  public $currentState;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getCurrentState()
  {
    return $this->currentState;
  }

  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
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

class Google_Service_Games_AchievementSetStepsAtLeastResponse extends Google_Model
{
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;
  protected $internal_gapi_mappings = array(
  );

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }

  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
}

class Google_Service_Games_AchievementUnlockResponse extends Google_Model
{
  public $kind;
  public $newlyUnlocked;
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

  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }

  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
}

class Google_Service_Games_AchievementUpdateMultipleRequest extends Google_Collection
{
  public $kind;
  protected $collection_key = 'updates';
  protected $internal_gapi_mappings = array(
  );
  protected $updatesType = 'Google_Service_Games_AchievementUpdateRequest';
  protected $updatesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }
  public function getUpdates()
  {
    return $this->updates;
  }
}

class Google_Service_Games_AchievementUpdateMultipleResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'updatedAchievements';
  protected $internal_gapi_mappings = array(
  );
  protected $updatedAchievementsType = 'Google_Service_Games_AchievementUpdateResponse';
  protected $updatedAchievementsDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setUpdatedAchievements($updatedAchievements)
  {
    $this->updatedAchievements = $updatedAchievements;
  }
  public function getUpdatedAchievements()
  {
    return $this->updatedAchievements;
  }
}

class Google_Service_Games_AchievementUpdateRequest extends Google_Model
{
  public $achievementId;
  public $kind;
  public $updateType;
  protected $internal_gapi_mappings = array(
  );
  protected $incrementPayloadType = 'Google_Service_Games_GamesAchievementIncrement';
  protected $incrementPayloadDataType = '';
  protected $setStepsAtLeastPayloadType = 'Google_Service_Games_GamesAchievementSetStepsAtLeast';
  protected $setStepsAtLeastPayloadDataType = '';

  public function getAchievementId()
  {
    return $this->achievementId;
  }

  public function setAchievementId($achievementId)
  {
    $this->achievementId = $achievementId;
  }

  public function setIncrementPayload(Google_Service_Games_GamesAchievementIncrement $incrementPayload)
  {
    $this->incrementPayload = $incrementPayload;
  }
  public function getIncrementPayload()
  {
    return $this->incrementPayload;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setSetStepsAtLeastPayload(Google_Service_Games_GamesAchievementSetStepsAtLeast $setStepsAtLeastPayload)
  {
    $this->setStepsAtLeastPayload = $setStepsAtLeastPayload;
  }
  public function getSetStepsAtLeastPayload()
  {
    return $this->setStepsAtLeastPayload;
  }

  public function getUpdateType()
  {
    return $this->updateType;
  }

  public function setUpdateType($updateType)
  {
    $this->updateType = $updateType;
  }
}

class Google_Service_Games_AchievementUpdateResponse extends Google_Model
{
  public $achievementId;
  public $currentState;
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;
  public $updateOccurred;
  protected $internal_gapi_mappings = array(
  );

  public function getAchievementId()
  {
    return $this->achievementId;
  }

  public function setAchievementId($achievementId)
  {
    $this->achievementId = $achievementId;
  }

  public function getCurrentState()
  {
    return $this->currentState;
  }

  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }

  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }

  public function getUpdateOccurred()
  {
    return $this->updateOccurred;
  }

  public function setUpdateOccurred($updateOccurred)
  {
    $this->updateOccurred = $updateOccurred;
  }
}

class Google_Service_Games_AggregateStats extends Google_Model
{
  public $count;
  public $kind;
  public $max;
  public $min;
  public $sum;
  protected $internal_gapi_mappings = array(
  );

  public function getCount()
  {
    return $this->count;
  }

  public function setCount($count)
  {
    $this->count = $count;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMax()
  {
    return $this->max;
  }

  public function setMax($max)
  {
    $this->max = $max;
  }

  public function getMin()
  {
    return $this->min;
  }

  public function setMin($min)
  {
    $this->min = $min;
  }

  public function getSum()
  {
    return $this->sum;
  }

  public function setSum($sum)
  {
    $this->sum = $sum;
  }
}

class Google_Service_Games_AnonymousPlayer extends Google_Model
{
  public $avatarImageUrl;
  public $displayName;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getAvatarImageUrl()
  {
    return $this->avatarImageUrl;
  }

  public function setAvatarImageUrl($avatarImageUrl)
  {
    $this->avatarImageUrl = $avatarImageUrl;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
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

class Google_Service_Games_Application extends Google_Collection
{
  public $achievementCount;
  public $author;
  public $description;
  public $enabledFeatures;
  public $id;
  public $kind;
  public $lastUpdatedTimestamp;
  public $leaderboardCount;
  public $name;
  public $themeColor;
  protected $collection_key = 'instances';
  protected $internal_gapi_mappings = array(
        "achievementCount" => "achievement_count",
        "leaderboardCount" => "leaderboard_count",
  );
  protected $assetsType = 'Google_Service_Games_ImageAsset';
  protected $assetsDataType = 'array';
  protected $categoryType = 'Google_Service_Games_ApplicationCategory';
  protected $categoryDataType = '';
  protected $instancesType = 'Google_Service_Games_Instance';
  protected $instancesDataType = 'array';

  public function getAchievementCount()
  {
    return $this->achievementCount;
  }

  public function setAchievementCount($achievementCount)
  {
    $this->achievementCount = $achievementCount;
  }

  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  public function getAssets()
  {
    return $this->assets;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setAuthor($author)
  {
    $this->author = $author;
  }

  public function setCategory(Google_Service_Games_ApplicationCategory $category)
  {
    $this->category = $category;
  }
  public function getCategory()
  {
    return $this->category;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getEnabledFeatures()
  {
    return $this->enabledFeatures;
  }

  public function setEnabledFeatures($enabledFeatures)
  {
    $this->enabledFeatures = $enabledFeatures;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  public function getInstances()
  {
    return $this->instances;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }

  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }

  public function getLeaderboardCount()
  {
    return $this->leaderboardCount;
  }

  public function setLeaderboardCount($leaderboardCount)
  {
    $this->leaderboardCount = $leaderboardCount;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getThemeColor()
  {
    return $this->themeColor;
  }

  public function setThemeColor($themeColor)
  {
    $this->themeColor = $themeColor;
  }
}

class Google_Service_Games_ApplicationCategory extends Google_Model
{
  public $kind;
  public $primary;
  public $secondary;
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

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }

  public function getSecondary()
  {
    return $this->secondary;
  }

  public function setSecondary($secondary)
  {
    $this->secondary = $secondary;
  }
}

class Google_Service_Games_ApplicationVerifyResponse extends Google_Model
{
  public $kind;
  public $playerId;
  protected $internal_gapi_mappings = array(
        "playerId" => "player_id",
  );

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getPlayerId()
  {
    return $this->playerId;
  }

  public function setPlayerId($playerId)
  {
    $this->playerId = $playerId;
  }
}

class Google_Service_Games_Category extends Google_Model
{
  public $category;
  public $experiencePoints;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getCategory()
  {
    return $this->category;
  }

  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getExperiencePoints()
  {
    return $this->experiencePoints;
  }

  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
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

class Google_Service_Games_CategoryListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_Category';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_EventBatchRecordFailure extends Google_Model
{
  public $failureCause;
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $rangeType = 'Google_Service_Games_EventPeriodRange';
  protected $rangeDataType = '';

  public function getFailureCause()
  {
    return $this->failureCause;
  }

  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setRange(Google_Service_Games_EventPeriodRange $range)
  {
    $this->range = $range;
  }
  public function getRange()
  {
    return $this->range;
  }
}

class Google_Service_Games_EventChild extends Google_Model
{
  public $childId;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getChildId()
  {
    return $this->childId;
  }

  public function setChildId($childId)
  {
    $this->childId = $childId;
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

class Google_Service_Games_EventDefinition extends Google_Collection
{
  public $description;
  public $displayName;
  public $id;
  public $imageUrl;
  public $isDefaultImageUrl;
  public $kind;
  public $visibility;
  protected $collection_key = 'childEvents';
  protected $internal_gapi_mappings = array(
  );
  protected $childEventsType = 'Google_Service_Games_EventChild';
  protected $childEventsDataType = 'array';

  public function setChildEvents($childEvents)
  {
    $this->childEvents = $childEvents;
  }
  public function getChildEvents()
  {
    return $this->childEvents;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getImageUrl()
  {
    return $this->imageUrl;
  }

  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }

  public function getIsDefaultImageUrl()
  {
    return $this->isDefaultImageUrl;
  }

  public function setIsDefaultImageUrl($isDefaultImageUrl)
  {
    $this->isDefaultImageUrl = $isDefaultImageUrl;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getVisibility()
  {
    return $this->visibility;
  }

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
}

class Google_Service_Games_EventDefinitionListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_EventDefinition';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_EventPeriodRange extends Google_Model
{
  public $kind;
  public $periodEndMillis;
  public $periodStartMillis;
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

  public function getPeriodEndMillis()
  {
    return $this->periodEndMillis;
  }

  public function setPeriodEndMillis($periodEndMillis)
  {
    $this->periodEndMillis = $periodEndMillis;
  }

  public function getPeriodStartMillis()
  {
    return $this->periodStartMillis;
  }

  public function setPeriodStartMillis($periodStartMillis)
  {
    $this->periodStartMillis = $periodStartMillis;
  }
}

class Google_Service_Games_EventPeriodUpdate extends Google_Collection
{
  public $kind;
  protected $collection_key = 'updates';
  protected $internal_gapi_mappings = array(
  );
  protected $timePeriodType = 'Google_Service_Games_EventPeriodRange';
  protected $timePeriodDataType = '';
  protected $updatesType = 'Google_Service_Games_EventUpdateRequest';
  protected $updatesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setTimePeriod(Google_Service_Games_EventPeriodRange $timePeriod)
  {
    $this->timePeriod = $timePeriod;
  }
  public function getTimePeriod()
  {
    return $this->timePeriod;
  }
  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }
  public function getUpdates()
  {
    return $this->updates;
  }
}

class Google_Service_Games_EventRecordFailure extends Google_Model
{
  public $eventId;
  public $failureCause;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getEventId()
  {
    return $this->eventId;
  }

  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }

  public function getFailureCause()
  {
    return $this->failureCause;
  }

  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
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

class Google_Service_Games_EventRecordRequest extends Google_Collection
{
  public $currentTimeMillis;
  public $kind;
  public $requestId;
  protected $collection_key = 'timePeriods';
  protected $internal_gapi_mappings = array(
  );
  protected $timePeriodsType = 'Google_Service_Games_EventPeriodUpdate';
  protected $timePeriodsDataType = 'array';

  public function getCurrentTimeMillis()
  {
    return $this->currentTimeMillis;
  }

  public function setCurrentTimeMillis($currentTimeMillis)
  {
    $this->currentTimeMillis = $currentTimeMillis;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function setTimePeriods($timePeriods)
  {
    $this->timePeriods = $timePeriods;
  }
  public function getTimePeriods()
  {
    return $this->timePeriods;
  }
}

class Google_Service_Games_EventUpdateRequest extends Google_Model
{
  public $definitionId;
  public $kind;
  public $updateCount;
  protected $internal_gapi_mappings = array(
  );

  public function getDefinitionId()
  {
    return $this->definitionId;
  }

  public function setDefinitionId($definitionId)
  {
    $this->definitionId = $definitionId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getUpdateCount()
  {
    return $this->updateCount;
  }

  public function setUpdateCount($updateCount)
  {
    $this->updateCount = $updateCount;
  }
}

class Google_Service_Games_EventUpdateResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'playerEvents';
  protected $internal_gapi_mappings = array(
  );
  protected $batchFailuresType = 'Google_Service_Games_EventBatchRecordFailure';
  protected $batchFailuresDataType = 'array';
  protected $eventFailuresType = 'Google_Service_Games_EventRecordFailure';
  protected $eventFailuresDataType = 'array';
  protected $playerEventsType = 'Google_Service_Games_PlayerEvent';
  protected $playerEventsDataType = 'array';


  public function setBatchFailures($batchFailures)
  {
    $this->batchFailures = $batchFailures;
  }
  public function getBatchFailures()
  {
    return $this->batchFailures;
  }
  public function setEventFailures($eventFailures)
  {
    $this->eventFailures = $eventFailures;
  }
  public function getEventFailures()
  {
    return $this->eventFailures;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setPlayerEvents($playerEvents)
  {
    $this->playerEvents = $playerEvents;
  }
  public function getPlayerEvents()
  {
    return $this->playerEvents;
  }
}

class Google_Service_Games_GamesAchievementIncrement extends Google_Model
{
  public $kind;
  public $requestId;
  public $steps;
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

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getSteps()
  {
    return $this->steps;
  }

  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
}

class Google_Service_Games_GamesAchievementSetStepsAtLeast extends Google_Model
{
  public $kind;
  public $steps;
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

  public function getSteps()
  {
    return $this->steps;
  }

  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
}

class Google_Service_Games_ImageAsset extends Google_Model
{
  public $height;
  public $kind;
  public $name;
  public $url;
  public $width;
  protected $internal_gapi_mappings = array(
  );

  public function getHeight()
  {
    return $this->height;
  }

  public function setHeight($height)
  {
    $this->height = $height;
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

  public function getUrl()
  {
    return $this->url;
  }

  public function setUrl($url)
  {
    $this->url = $url;
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

class Google_Service_Games_Instance extends Google_Model
{
  public $acquisitionUri;
  public $kind;
  public $name;
  public $platformType;
  public $realtimePlay;
  public $turnBasedPlay;
  protected $internal_gapi_mappings = array(
  );
  protected $androidInstanceType = 'Google_Service_Games_InstanceAndroidDetails';
  protected $androidInstanceDataType = '';
  protected $iosInstanceType = 'Google_Service_Games_InstanceIosDetails';
  protected $iosInstanceDataType = '';
  protected $webInstanceType = 'Google_Service_Games_InstanceWebDetails';
  protected $webInstanceDataType = '';

  public function getAcquisitionUri()
  {
    return $this->acquisitionUri;
  }

  public function setAcquisitionUri($acquisitionUri)
  {
    $this->acquisitionUri = $acquisitionUri;
  }

  public function setAndroidInstance(Google_Service_Games_InstanceAndroidDetails $androidInstance)
  {
    $this->androidInstance = $androidInstance;
  }
  public function getAndroidInstance()
  {
    return $this->androidInstance;
  }
  public function setIosInstance(Google_Service_Games_InstanceIosDetails $iosInstance)
  {
    $this->iosInstance = $iosInstance;
  }
  public function getIosInstance()
  {
    return $this->iosInstance;
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

  public function getPlatformType()
  {
    return $this->platformType;
  }

  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }

  public function getRealtimePlay()
  {
    return $this->realtimePlay;
  }

  public function setRealtimePlay($realtimePlay)
  {
    $this->realtimePlay = $realtimePlay;
  }

  public function getTurnBasedPlay()
  {
    return $this->turnBasedPlay;
  }

  public function setTurnBasedPlay($turnBasedPlay)
  {
    $this->turnBasedPlay = $turnBasedPlay;
  }

  public function setWebInstance(Google_Service_Games_InstanceWebDetails $webInstance)
  {
    $this->webInstance = $webInstance;
  }
  public function getWebInstance()
  {
    return $this->webInstance;
  }
}

class Google_Service_Games_InstanceAndroidDetails extends Google_Model
{
  public $enablePiracyCheck;
  public $kind;
  public $packageName;
  public $preferred;
  protected $internal_gapi_mappings = array(
  );

  public function getEnablePiracyCheck()
  {
    return $this->enablePiracyCheck;
  }

  public function setEnablePiracyCheck($enablePiracyCheck)
  {
    $this->enablePiracyCheck = $enablePiracyCheck;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getPackageName()
  {
    return $this->packageName;
  }

  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }

  public function getPreferred()
  {
    return $this->preferred;
  }

  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }
}

class Google_Service_Games_InstanceIosDetails extends Google_Model
{
  public $bundleIdentifier;
  public $itunesAppId;
  public $kind;
  public $preferredForIpad;
  public $preferredForIphone;
  public $supportIpad;
  public $supportIphone;
  protected $internal_gapi_mappings = array(
  );

  public function getBundleIdentifier()
  {
    return $this->bundleIdentifier;
  }

  public function setBundleIdentifier($bundleIdentifier)
  {
    $this->bundleIdentifier = $bundleIdentifier;
  }

  public function getItunesAppId()
  {
    return $this->itunesAppId;
  }

  public function setItunesAppId($itunesAppId)
  {
    $this->itunesAppId = $itunesAppId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getPreferredForIpad()
  {
    return $this->preferredForIpad;
  }

  public function setPreferredForIpad($preferredForIpad)
  {
    $this->preferredForIpad = $preferredForIpad;
  }

  public function getPreferredForIphone()
  {
    return $this->preferredForIphone;
  }

  public function setPreferredForIphone($preferredForIphone)
  {
    $this->preferredForIphone = $preferredForIphone;
  }

  public function getSupportIpad()
  {
    return $this->supportIpad;
  }

  public function setSupportIpad($supportIpad)
  {
    $this->supportIpad = $supportIpad;
  }

  public function getSupportIphone()
  {
    return $this->supportIphone;
  }

  public function setSupportIphone($supportIphone)
  {
    $this->supportIphone = $supportIphone;
  }
}

class Google_Service_Games_InstanceWebDetails extends Google_Model
{
  public $kind;
  public $launchUrl;
  public $preferred;
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

  public function getLaunchUrl()
  {
    return $this->launchUrl;
  }

  public function setLaunchUrl($launchUrl)
  {
    $this->launchUrl = $launchUrl;
  }

  public function getPreferred()
  {
    return $this->preferred;
  }

  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }
}

class Google_Service_Games_Leaderboard extends Google_Model
{
  public $iconUrl;
  public $id;
  public $isIconUrlDefault;
  public $kind;
  public $name;
  public $order;
  protected $internal_gapi_mappings = array(
  );

  public function getIconUrl()
  {
    return $this->iconUrl;
  }

  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIsIconUrlDefault()
  {
    return $this->isIconUrlDefault;
  }

  public function setIsIconUrlDefault($isIconUrlDefault)
  {
    $this->isIconUrlDefault = $isIconUrlDefault;
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

  public function getOrder()
  {
    return $this->order;
  }

  public function setOrder($order)
  {
    $this->order = $order;
  }
}

class Google_Service_Games_LeaderboardEntry extends Google_Model
{
  public $formattedScore;
  public $formattedScoreRank;
  public $kind;
  public $scoreRank;
  public $scoreTag;
  public $scoreValue;
  public $timeSpan;
  public $writeTimestampMillis;
  protected $internal_gapi_mappings = array(
  );
  protected $playerType = 'Google_Service_Games_Player';
  protected $playerDataType = '';

  public function getFormattedScore()
  {
    return $this->formattedScore;
  }

  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }

  public function getFormattedScoreRank()
  {
    return $this->formattedScoreRank;
  }

  public function setFormattedScoreRank($formattedScoreRank)
  {
    $this->formattedScoreRank = $formattedScoreRank;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setPlayer(Google_Service_Games_Player $player)
  {
    $this->player = $player;
  }
  public function getPlayer()
  {
    return $this->player;
  }

  public function getScoreRank()
  {
    return $this->scoreRank;
  }

  public function setScoreRank($scoreRank)
  {
    $this->scoreRank = $scoreRank;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreValue()
  {
    return $this->scoreValue;
  }

  public function setScoreValue($scoreValue)
  {
    $this->scoreValue = $scoreValue;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }

  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }

  public function getWriteTimestampMillis()
  {
    return $this->writeTimestampMillis;
  }

  public function setWriteTimestampMillis($writeTimestampMillis)
  {
    $this->writeTimestampMillis = $writeTimestampMillis;
  }
}

class Google_Service_Games_LeaderboardListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_Leaderboard';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_LeaderboardScoreRank extends Google_Model
{
  public $formattedNumScores;
  public $formattedRank;
  public $kind;
  public $numScores;
  public $rank;
  protected $internal_gapi_mappings = array(
  );

  public function getFormattedNumScores()
  {
    return $this->formattedNumScores;
  }

  public function setFormattedNumScores($formattedNumScores)
  {
    $this->formattedNumScores = $formattedNumScores;
  }

  public function getFormattedRank()
  {
    return $this->formattedRank;
  }

  public function setFormattedRank($formattedRank)
  {
    $this->formattedRank = $formattedRank;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNumScores()
  {
    return $this->numScores;
  }

  public function setNumScores($numScores)
  {
    $this->numScores = $numScores;
  }

  public function getRank()
  {
    return $this->rank;
  }

  public function setRank($rank)
  {
    $this->rank = $rank;
  }
}

class Google_Service_Games_LeaderboardScores extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  public $numScores;
  public $prevPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_LeaderboardEntry';
  protected $itemsDataType = 'array';
  protected $playerScoreType = 'Google_Service_Games_LeaderboardEntry';
  protected $playerScoreDataType = '';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

  public function getNumScores()
  {
    return $this->numScores;
  }

  public function setNumScores($numScores)
  {
    $this->numScores = $numScores;
  }

  public function setPlayerScore(Google_Service_Games_LeaderboardEntry $playerScore)
  {
    $this->playerScore = $playerScore;
  }
  public function getPlayerScore()
  {
    return $this->playerScore;
  }

  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }

  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }
}

class Google_Service_Games_MetagameConfig extends Google_Collection
{
  public $currentVersion;
  public $kind;
  protected $collection_key = 'playerLevels';
  protected $internal_gapi_mappings = array(
  );
  protected $playerLevelsType = 'Google_Service_Games_PlayerLevel';
  protected $playerLevelsDataType = 'array';

  public function getCurrentVersion()
  {
    return $this->currentVersion;
  }

  public function setCurrentVersion($currentVersion)
  {
    $this->currentVersion = $currentVersion;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setPlayerLevels($playerLevels)
  {
    $this->playerLevels = $playerLevels;
  }
  public function getPlayerLevels()
  {
    return $this->playerLevels;
  }
}

class Google_Service_Games_NetworkDiagnostics extends Google_Model
{
  public $androidNetworkSubtype;
  public $androidNetworkType;
  public $iosNetworkType;
  public $kind;
  public $networkOperatorCode;
  public $networkOperatorName;
  public $registrationLatencyMillis;
  protected $internal_gapi_mappings = array(
  );

  public function getAndroidNetworkSubtype()
  {
    return $this->androidNetworkSubtype;
  }

  public function setAndroidNetworkSubtype($androidNetworkSubtype)
  {
    $this->androidNetworkSubtype = $androidNetworkSubtype;
  }

  public function getAndroidNetworkType()
  {
    return $this->androidNetworkType;
  }

  public function setAndroidNetworkType($androidNetworkType)
  {
    $this->androidNetworkType = $androidNetworkType;
  }

  public function getIosNetworkType()
  {
    return $this->iosNetworkType;
  }

  public function setIosNetworkType($iosNetworkType)
  {
    $this->iosNetworkType = $iosNetworkType;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNetworkOperatorCode()
  {
    return $this->networkOperatorCode;
  }

  public function setNetworkOperatorCode($networkOperatorCode)
  {
    $this->networkOperatorCode = $networkOperatorCode;
  }

  public function getNetworkOperatorName()
  {
    return $this->networkOperatorName;
  }

  public function setNetworkOperatorName($networkOperatorName)
  {
    $this->networkOperatorName = $networkOperatorName;
  }

  public function getRegistrationLatencyMillis()
  {
    return $this->registrationLatencyMillis;
  }

  public function setRegistrationLatencyMillis($registrationLatencyMillis)
  {
    $this->registrationLatencyMillis = $registrationLatencyMillis;
  }
}

class Google_Service_Games_ParticipantResult extends Google_Model
{
  public $kind;
  public $participantId;
  public $placing;
  public $result;
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

  public function getParticipantId()
  {
    return $this->participantId;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getPlacing()
  {
    return $this->placing;
  }

  public function setPlacing($placing)
  {
    $this->placing = $placing;
  }

  public function getResult()
  {
    return $this->result;
  }

  public function setResult($result)
  {
    $this->result = $result;
  }
}

class Google_Service_Games_PeerChannelDiagnostics extends Google_Model
{
  public $kind;
  public $numMessagesLost;
  public $numMessagesReceived;
  public $numMessagesSent;
  public $numSendFailures;
  protected $internal_gapi_mappings = array(
  );
  protected $bytesReceivedType = 'Google_Service_Games_AggregateStats';
  protected $bytesReceivedDataType = '';
  protected $bytesSentType = 'Google_Service_Games_AggregateStats';
  protected $bytesSentDataType = '';
  protected $roundtripLatencyMillisType = 'Google_Service_Games_AggregateStats';
  protected $roundtripLatencyMillisDataType = '';


  public function setBytesReceived(Google_Service_Games_AggregateStats $bytesReceived)
  {
    $this->bytesReceived = $bytesReceived;
  }
  public function getBytesReceived()
  {
    return $this->bytesReceived;
  }
  public function setBytesSent(Google_Service_Games_AggregateStats $bytesSent)
  {
    $this->bytesSent = $bytesSent;
  }
  public function getBytesSent()
  {
    return $this->bytesSent;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNumMessagesLost()
  {
    return $this->numMessagesLost;
  }

  public function setNumMessagesLost($numMessagesLost)
  {
    $this->numMessagesLost = $numMessagesLost;
  }

  public function getNumMessagesReceived()
  {
    return $this->numMessagesReceived;
  }

  public function setNumMessagesReceived($numMessagesReceived)
  {
    $this->numMessagesReceived = $numMessagesReceived;
  }

  public function getNumMessagesSent()
  {
    return $this->numMessagesSent;
  }

  public function setNumMessagesSent($numMessagesSent)
  {
    $this->numMessagesSent = $numMessagesSent;
  }

  public function getNumSendFailures()
  {
    return $this->numSendFailures;
  }

  public function setNumSendFailures($numSendFailures)
  {
    $this->numSendFailures = $numSendFailures;
  }

  public function setRoundtripLatencyMillis(Google_Service_Games_AggregateStats $roundtripLatencyMillis)
  {
    $this->roundtripLatencyMillis = $roundtripLatencyMillis;
  }
  public function getRoundtripLatencyMillis()
  {
    return $this->roundtripLatencyMillis;
  }
}

class Google_Service_Games_PeerSessionDiagnostics extends Google_Model
{
  public $connectedTimestampMillis;
  public $kind;
  public $participantId;
  protected $internal_gapi_mappings = array(
  );
  protected $reliableChannelType = 'Google_Service_Games_PeerChannelDiagnostics';
  protected $reliableChannelDataType = '';
  protected $unreliableChannelType = 'Google_Service_Games_PeerChannelDiagnostics';
  protected $unreliableChannelDataType = '';

  public function getConnectedTimestampMillis()
  {
    return $this->connectedTimestampMillis;
  }

  public function setConnectedTimestampMillis($connectedTimestampMillis)
  {
    $this->connectedTimestampMillis = $connectedTimestampMillis;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function setReliableChannel(Google_Service_Games_PeerChannelDiagnostics $reliableChannel)
  {
    $this->reliableChannel = $reliableChannel;
  }
  public function getReliableChannel()
  {
    return $this->reliableChannel;
  }
  public function setUnreliableChannel(Google_Service_Games_PeerChannelDiagnostics $unreliableChannel)
  {
    $this->unreliableChannel = $unreliableChannel;
  }
  public function getUnreliableChannel()
  {
    return $this->unreliableChannel;
  }
}

class Google_Service_Games_Played extends Google_Model
{
  public $autoMatched;
  public $kind;
  public $timeMillis;
  protected $internal_gapi_mappings = array(
  );

  public function getAutoMatched()
  {
    return $this->autoMatched;
  }

  public function setAutoMatched($autoMatched)
  {
    $this->autoMatched = $autoMatched;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getTimeMillis()
  {
    return $this->timeMillis;
  }

  public function setTimeMillis($timeMillis)
  {
    $this->timeMillis = $timeMillis;
  }
}

class Google_Service_Games_Player extends Google_Model
{
  public $avatarImageUrl;
  public $bannerUrlLandscape;
  public $bannerUrlPortrait;
  public $displayName;
  public $kind;
  public $originalPlayerId;
  public $playerId;
  public $title;
  protected $internal_gapi_mappings = array(
  );
  protected $experienceInfoType = 'Google_Service_Games_PlayerExperienceInfo';
  protected $experienceInfoDataType = '';
  protected $lastPlayedWithType = 'Google_Service_Games_Played';
  protected $lastPlayedWithDataType = '';
  protected $nameType = 'Google_Service_Games_PlayerName';
  protected $nameDataType = '';

  public function getAvatarImageUrl()
  {
    return $this->avatarImageUrl;
  }

  public function setAvatarImageUrl($avatarImageUrl)
  {
    $this->avatarImageUrl = $avatarImageUrl;
  }

  public function getBannerUrlLandscape()
  {
    return $this->bannerUrlLandscape;
  }

  public function setBannerUrlLandscape($bannerUrlLandscape)
  {
    $this->bannerUrlLandscape = $bannerUrlLandscape;
  }

  public function getBannerUrlPortrait()
  {
    return $this->bannerUrlPortrait;
  }

  public function setBannerUrlPortrait($bannerUrlPortrait)
  {
    $this->bannerUrlPortrait = $bannerUrlPortrait;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function setExperienceInfo(Google_Service_Games_PlayerExperienceInfo $experienceInfo)
  {
    $this->experienceInfo = $experienceInfo;
  }
  public function getExperienceInfo()
  {
    return $this->experienceInfo;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLastPlayedWith(Google_Service_Games_Played $lastPlayedWith)
  {
    $this->lastPlayedWith = $lastPlayedWith;
  }
  public function getLastPlayedWith()
  {
    return $this->lastPlayedWith;
  }
  public function setName(Google_Service_Games_PlayerName $name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }

  public function getOriginalPlayerId()
  {
    return $this->originalPlayerId;
  }

  public function setOriginalPlayerId($originalPlayerId)
  {
    $this->originalPlayerId = $originalPlayerId;
  }

  public function getPlayerId()
  {
    return $this->playerId;
  }

  public function setPlayerId($playerId)
  {
    $this->playerId = $playerId;
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

class Google_Service_Games_PlayerAchievement extends Google_Model
{
  public $achievementState;
  public $currentSteps;
  public $experiencePoints;
  public $formattedCurrentStepsString;
  public $id;
  public $kind;
  public $lastUpdatedTimestamp;
  protected $internal_gapi_mappings = array(
  );

  public function getAchievementState()
  {
    return $this->achievementState;
  }

  public function setAchievementState($achievementState)
  {
    $this->achievementState = $achievementState;
  }

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getExperiencePoints()
  {
    return $this->experiencePoints;
  }

  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
  }

  public function getFormattedCurrentStepsString()
  {
    return $this->formattedCurrentStepsString;
  }

  public function setFormattedCurrentStepsString($formattedCurrentStepsString)
  {
    $this->formattedCurrentStepsString = $formattedCurrentStepsString;
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

  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }

  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }
}

class Google_Service_Games_PlayerAchievementListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_PlayerAchievement';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_PlayerEvent extends Google_Model
{
  public $definitionId;
  public $formattedNumEvents;
  public $kind;
  public $numEvents;
  public $playerId;
  protected $internal_gapi_mappings = array(
  );

  public function getDefinitionId()
  {
    return $this->definitionId;
  }

  public function setDefinitionId($definitionId)
  {
    $this->definitionId = $definitionId;
  }

  public function getFormattedNumEvents()
  {
    return $this->formattedNumEvents;
  }

  public function setFormattedNumEvents($formattedNumEvents)
  {
    $this->formattedNumEvents = $formattedNumEvents;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNumEvents()
  {
    return $this->numEvents;
  }

  public function setNumEvents($numEvents)
  {
    $this->numEvents = $numEvents;
  }

  public function getPlayerId()
  {
    return $this->playerId;
  }

  public function setPlayerId($playerId)
  {
    $this->playerId = $playerId;
  }
}

class Google_Service_Games_PlayerEventListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_PlayerEvent';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_PlayerExperienceInfo extends Google_Model
{
  public $currentExperiencePoints;
  public $kind;
  public $lastLevelUpTimestampMillis;
  protected $internal_gapi_mappings = array(
  );
  protected $currentLevelType = 'Google_Service_Games_PlayerLevel';
  protected $currentLevelDataType = '';
  protected $nextLevelType = 'Google_Service_Games_PlayerLevel';
  protected $nextLevelDataType = '';

  public function getCurrentExperiencePoints()
  {
    return $this->currentExperiencePoints;
  }

  public function setCurrentExperiencePoints($currentExperiencePoints)
  {
    $this->currentExperiencePoints = $currentExperiencePoints;
  }

  public function setCurrentLevel(Google_Service_Games_PlayerLevel $currentLevel)
  {
    $this->currentLevel = $currentLevel;
  }
  public function getCurrentLevel()
  {
    return $this->currentLevel;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastLevelUpTimestampMillis()
  {
    return $this->lastLevelUpTimestampMillis;
  }

  public function setLastLevelUpTimestampMillis($lastLevelUpTimestampMillis)
  {
    $this->lastLevelUpTimestampMillis = $lastLevelUpTimestampMillis;
  }

  public function setNextLevel(Google_Service_Games_PlayerLevel $nextLevel)
  {
    $this->nextLevel = $nextLevel;
  }
  public function getNextLevel()
  {
    return $this->nextLevel;
  }
}

class Google_Service_Games_PlayerLeaderboardScore extends Google_Model
{
  public $kind;
  public $leaderboardId;
  public $scoreString;
  public $scoreTag;
  public $scoreValue;
  public $timeSpan;
  public $writeTimestamp;
  protected $internal_gapi_mappings = array(
        "leaderboardId" => "leaderboard_id",
  );
  protected $publicRankType = 'Google_Service_Games_LeaderboardScoreRank';
  protected $publicRankDataType = '';
  protected $socialRankType = 'Google_Service_Games_LeaderboardScoreRank';
  protected $socialRankDataType = '';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }

  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }

  public function setPublicRank(Google_Service_Games_LeaderboardScoreRank $publicRank)
  {
    $this->publicRank = $publicRank;
  }
  public function getPublicRank()
  {
    return $this->publicRank;
  }

  public function getScoreString()
  {
    return $this->scoreString;
  }

  public function setScoreString($scoreString)
  {
    $this->scoreString = $scoreString;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreValue()
  {
    return $this->scoreValue;
  }

  public function setScoreValue($scoreValue)
  {
    $this->scoreValue = $scoreValue;
  }

  public function setSocialRank(Google_Service_Games_LeaderboardScoreRank $socialRank)
  {
    $this->socialRank = $socialRank;
  }
  public function getSocialRank()
  {
    return $this->socialRank;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }

  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }

  public function getWriteTimestamp()
  {
    return $this->writeTimestamp;
  }

  public function setWriteTimestamp($writeTimestamp)
  {
    $this->writeTimestamp = $writeTimestamp;
  }
}

class Google_Service_Games_PlayerLeaderboardScoreListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_PlayerLeaderboardScore';
  protected $itemsDataType = 'array';
  protected $playerType = 'Google_Service_Games_Player';
  protected $playerDataType = '';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

  public function setPlayer(Google_Service_Games_Player $player)
  {
    $this->player = $player;
  }
  public function getPlayer()
  {
    return $this->player;
  }
}

class Google_Service_Games_PlayerLevel extends Google_Model
{
  public $kind;
  public $level;
  public $maxExperiencePoints;
  public $minExperiencePoints;
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

  public function getLevel()
  {
    return $this->level;
  }

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getMaxExperiencePoints()
  {
    return $this->maxExperiencePoints;
  }

  public function setMaxExperiencePoints($maxExperiencePoints)
  {
    $this->maxExperiencePoints = $maxExperiencePoints;
  }

  public function getMinExperiencePoints()
  {
    return $this->minExperiencePoints;
  }

  public function setMinExperiencePoints($minExperiencePoints)
  {
    $this->minExperiencePoints = $minExperiencePoints;
  }
}

class Google_Service_Games_PlayerListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_Player';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_PlayerName extends Google_Model
{
  public $familyName;
  public $givenName;
  protected $internal_gapi_mappings = array(
  );

  public function getFamilyName()
  {
    return $this->familyName;
  }

  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }

  public function getGivenName()
  {
    return $this->givenName;
  }

  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }
}

class Google_Service_Games_PlayerScore extends Google_Model
{
  public $formattedScore;
  public $kind;
  public $score;
  public $scoreTag;
  public $timeSpan;
  protected $internal_gapi_mappings = array(
  );

  public function getFormattedScore()
  {
    return $this->formattedScore;
  }

  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }

  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }
}

class Google_Service_Games_PlayerScoreListResponse extends Google_Collection
{
  public $kind;
  protected $collection_key = 'submittedScores';
  protected $internal_gapi_mappings = array(
  );
  protected $submittedScoresType = 'Google_Service_Games_PlayerScoreResponse';
  protected $submittedScoresDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setSubmittedScores($submittedScores)
  {
    $this->submittedScores = $submittedScores;
  }
  public function getSubmittedScores()
  {
    return $this->submittedScores;
  }
}

class Google_Service_Games_PlayerScoreResponse extends Google_Collection
{
  public $beatenScoreTimeSpans;
  public $formattedScore;
  public $kind;
  public $leaderboardId;
  public $scoreTag;
  protected $collection_key = 'unbeatenScores';
  protected $internal_gapi_mappings = array(
  );
  protected $unbeatenScoresType = 'Google_Service_Games_PlayerScore';
  protected $unbeatenScoresDataType = 'array';

  public function getBeatenScoreTimeSpans()
  {
    return $this->beatenScoreTimeSpans;
  }

  public function setBeatenScoreTimeSpans($beatenScoreTimeSpans)
  {
    $this->beatenScoreTimeSpans = $beatenScoreTimeSpans;
  }

  public function getFormattedScore()
  {
    return $this->formattedScore;
  }

  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }

  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function setUnbeatenScores($unbeatenScores)
  {
    $this->unbeatenScores = $unbeatenScores;
  }
  public function getUnbeatenScores()
  {
    return $this->unbeatenScores;
  }
}

class Google_Service_Games_PlayerScoreSubmissionList extends Google_Collection
{
  public $kind;
  protected $collection_key = 'scores';
  protected $internal_gapi_mappings = array(
  );
  protected $scoresType = 'Google_Service_Games_ScoreSubmission';
  protected $scoresDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setScores($scores)
  {
    $this->scores = $scores;
  }
  public function getScores()
  {
    return $this->scores;
  }
}

class Google_Service_Games_PushToken extends Google_Model
{
  public $clientRevision;
  public $kind;
  public $language;
  protected $internal_gapi_mappings = array(
  );
  protected $idType = 'Google_Service_Games_PushTokenId';
  protected $idDataType = '';

  public function getClientRevision()
  {
    return $this->clientRevision;
  }

  public function setClientRevision($clientRevision)
  {
    $this->clientRevision = $clientRevision;
  }

  public function setId(Google_Service_Games_PushTokenId $id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLanguage()
  {
    return $this->language;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
  }
}

class Google_Service_Games_PushTokenId extends Google_Model
{
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $iosType = 'Google_Service_Games_PushTokenIdIos';
  protected $iosDataType = '';

  public function setIos(Google_Service_Games_PushTokenIdIos $ios)
  {
    $this->ios = $ios;
  }
  public function getIos()
  {
    return $this->ios;
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

class Google_Service_Games_PushTokenIdIos extends Google_Model
{
  public $apnsDeviceToken;
  public $apnsEnvironment;
  protected $internal_gapi_mappings = array(
        "apnsDeviceToken" => "apns_device_token",
        "apnsEnvironment" => "apns_environment",
  );

  public function getApnsDeviceToken()
  {
    return $this->apnsDeviceToken;
  }

  public function setApnsDeviceToken($apnsDeviceToken)
  {
    $this->apnsDeviceToken = $apnsDeviceToken;
  }

  public function getApnsEnvironment()
  {
    return $this->apnsEnvironment;
  }

  public function setApnsEnvironment($apnsEnvironment)
  {
    $this->apnsEnvironment = $apnsEnvironment;
  }
}

class Google_Service_Games_Quest extends Google_Collection
{
  public $acceptedTimestampMillis;
  public $applicationId;
  public $bannerUrl;
  public $description;
  public $endTimestampMillis;
  public $iconUrl;
  public $id;
  public $isDefaultBannerUrl;
  public $isDefaultIconUrl;
  public $kind;
  public $lastUpdatedTimestampMillis;
  public $name;
  public $notifyTimestampMillis;
  public $startTimestampMillis;
  public $state;
  protected $collection_key = 'milestones';
  protected $internal_gapi_mappings = array(
  );
  protected $milestonesType = 'Google_Service_Games_QuestMilestone';
  protected $milestonesDataType = 'array';

  public function getAcceptedTimestampMillis()
  {
    return $this->acceptedTimestampMillis;
  }

  public function setAcceptedTimestampMillis($acceptedTimestampMillis)
  {
    $this->acceptedTimestampMillis = $acceptedTimestampMillis;
  }

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function getBannerUrl()
  {
    return $this->bannerUrl;
  }

  public function setBannerUrl($bannerUrl)
  {
    $this->bannerUrl = $bannerUrl;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getEndTimestampMillis()
  {
    return $this->endTimestampMillis;
  }

  public function setEndTimestampMillis($endTimestampMillis)
  {
    $this->endTimestampMillis = $endTimestampMillis;
  }

  public function getIconUrl()
  {
    return $this->iconUrl;
  }

  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIsDefaultBannerUrl()
  {
    return $this->isDefaultBannerUrl;
  }

  public function setIsDefaultBannerUrl($isDefaultBannerUrl)
  {
    $this->isDefaultBannerUrl = $isDefaultBannerUrl;
  }

  public function getIsDefaultIconUrl()
  {
    return $this->isDefaultIconUrl;
  }

  public function setIsDefaultIconUrl($isDefaultIconUrl)
  {
    $this->isDefaultIconUrl = $isDefaultIconUrl;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastUpdatedTimestampMillis()
  {
    return $this->lastUpdatedTimestampMillis;
  }

  public function setLastUpdatedTimestampMillis($lastUpdatedTimestampMillis)
  {
    $this->lastUpdatedTimestampMillis = $lastUpdatedTimestampMillis;
  }

  public function setMilestones($milestones)
  {
    $this->milestones = $milestones;
  }
  public function getMilestones()
  {
    return $this->milestones;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNotifyTimestampMillis()
  {
    return $this->notifyTimestampMillis;
  }

  public function setNotifyTimestampMillis($notifyTimestampMillis)
  {
    $this->notifyTimestampMillis = $notifyTimestampMillis;
  }

  public function getStartTimestampMillis()
  {
    return $this->startTimestampMillis;
  }

  public function setStartTimestampMillis($startTimestampMillis)
  {
    $this->startTimestampMillis = $startTimestampMillis;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }
}

class Google_Service_Games_QuestContribution extends Google_Model
{
  public $formattedValue;
  public $kind;
  public $value;
  protected $internal_gapi_mappings = array(
  );

  public function getFormattedValue()
  {
    return $this->formattedValue;
  }

  public function setFormattedValue($formattedValue)
  {
    $this->formattedValue = $formattedValue;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
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

class Google_Service_Games_QuestCriterion extends Google_Model
{
  public $eventId;
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $completionContributionType = 'Google_Service_Games_QuestContribution';
  protected $completionContributionDataType = '';
  protected $currentContributionType = 'Google_Service_Games_QuestContribution';
  protected $currentContributionDataType = '';
  protected $initialPlayerProgressType = 'Google_Service_Games_QuestContribution';
  protected $initialPlayerProgressDataType = '';

  public function setCompletionContribution(Google_Service_Games_QuestContribution $completionContribution)
  {
    $this->completionContribution = $completionContribution;
  }
  public function getCompletionContribution()
  {
    return $this->completionContribution;
  }
  public function setCurrentContribution(Google_Service_Games_QuestContribution $currentContribution)
  {
    $this->currentContribution = $currentContribution;
  }
  public function getCurrentContribution()
  {
    return $this->currentContribution;
  }

  public function getEventId()
  {
    return $this->eventId;
  }

  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }

  public function setInitialPlayerProgress(Google_Service_Games_QuestContribution $initialPlayerProgress)
  {
    $this->initialPlayerProgress = $initialPlayerProgress;
  }
  public function getInitialPlayerProgress()
  {
    return $this->initialPlayerProgress;
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

class Google_Service_Games_QuestListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_Quest';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_QuestMilestone extends Google_Collection
{
  public $completionRewardData;
  public $id;
  public $kind;
  public $state;
  protected $collection_key = 'criteria';
  protected $internal_gapi_mappings = array(
  );
  protected $criteriaType = 'Google_Service_Games_QuestCriterion';
  protected $criteriaDataType = 'array';

  public function getCompletionRewardData()
  {
    return $this->completionRewardData;
  }

  public function setCompletionRewardData($completionRewardData)
  {
    $this->completionRewardData = $completionRewardData;
  }

  public function setCriteria($criteria)
  {
    $this->criteria = $criteria;
  }
  public function getCriteria()
  {
    return $this->criteria;
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

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }
}

class Google_Service_Games_RevisionCheckResponse extends Google_Model
{
  public $apiVersion;
  public $kind;
  public $revisionStatus;
  protected $internal_gapi_mappings = array(
  );

  public function getApiVersion()
  {
    return $this->apiVersion;
  }

  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getRevisionStatus()
  {
    return $this->revisionStatus;
  }

  public function setRevisionStatus($revisionStatus)
  {
    $this->revisionStatus = $revisionStatus;
  }
}

class Google_Service_Games_Room extends Google_Collection
{
  public $applicationId;
  public $description;
  public $inviterId;
  public $kind;
  public $roomId;
  public $roomStatusVersion;
  public $status;
  public $variant;
  protected $collection_key = 'participants';
  protected $internal_gapi_mappings = array(
  );
  protected $autoMatchingCriteriaType = 'Google_Service_Games_RoomAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  protected $autoMatchingStatusType = 'Google_Service_Games_RoomAutoMatchStatus';
  protected $autoMatchingStatusDataType = '';
  protected $creationDetailsType = 'Google_Service_Games_RoomModification';
  protected $creationDetailsDataType = '';
  protected $lastUpdateDetailsType = 'Google_Service_Games_RoomModification';
  protected $lastUpdateDetailsDataType = '';
  protected $participantsType = 'Google_Service_Games_RoomParticipant';
  protected $participantsDataType = 'array';

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function setAutoMatchingCriteria(Google_Service_Games_RoomAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }
  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }
  public function setAutoMatchingStatus(Google_Service_Games_RoomAutoMatchStatus $autoMatchingStatus)
  {
    $this->autoMatchingStatus = $autoMatchingStatus;
  }
  public function getAutoMatchingStatus()
  {
    return $this->autoMatchingStatus;
  }
  public function setCreationDetails(Google_Service_Games_RoomModification $creationDetails)
  {
    $this->creationDetails = $creationDetails;
  }
  public function getCreationDetails()
  {
    return $this->creationDetails;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getInviterId()
  {
    return $this->inviterId;
  }

  public function setInviterId($inviterId)
  {
    $this->inviterId = $inviterId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLastUpdateDetails(Google_Service_Games_RoomModification $lastUpdateDetails)
  {
    $this->lastUpdateDetails = $lastUpdateDetails;
  }
  public function getLastUpdateDetails()
  {
    return $this->lastUpdateDetails;
  }
  public function setParticipants($participants)
  {
    $this->participants = $participants;
  }
  public function getParticipants()
  {
    return $this->participants;
  }

  public function getRoomId()
  {
    return $this->roomId;
  }

  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }

  public function getRoomStatusVersion()
  {
    return $this->roomStatusVersion;
  }

  public function setRoomStatusVersion($roomStatusVersion)
  {
    $this->roomStatusVersion = $roomStatusVersion;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getVariant()
  {
    return $this->variant;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }
}

class Google_Service_Games_RoomAutoMatchStatus extends Google_Model
{
  public $kind;
  public $waitEstimateSeconds;
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

  public function getWaitEstimateSeconds()
  {
    return $this->waitEstimateSeconds;
  }

  public function setWaitEstimateSeconds($waitEstimateSeconds)
  {
    $this->waitEstimateSeconds = $waitEstimateSeconds;
  }
}

class Google_Service_Games_RoomAutoMatchingCriteria extends Google_Model
{
  public $exclusiveBitmask;
  public $kind;
  public $maxAutoMatchingPlayers;
  public $minAutoMatchingPlayers;
  protected $internal_gapi_mappings = array(
  );

  public function getExclusiveBitmask()
  {
    return $this->exclusiveBitmask;
  }

  public function setExclusiveBitmask($exclusiveBitmask)
  {
    $this->exclusiveBitmask = $exclusiveBitmask;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMaxAutoMatchingPlayers()
  {
    return $this->maxAutoMatchingPlayers;
  }

  public function setMaxAutoMatchingPlayers($maxAutoMatchingPlayers)
  {
    $this->maxAutoMatchingPlayers = $maxAutoMatchingPlayers;
  }

  public function getMinAutoMatchingPlayers()
  {
    return $this->minAutoMatchingPlayers;
  }

  public function setMinAutoMatchingPlayers($minAutoMatchingPlayers)
  {
    $this->minAutoMatchingPlayers = $minAutoMatchingPlayers;
  }
}

class Google_Service_Games_RoomClientAddress extends Google_Model
{
  public $kind;
  public $xmppAddress;
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

  public function getXmppAddress()
  {
    return $this->xmppAddress;
  }

  public function setXmppAddress($xmppAddress)
  {
    $this->xmppAddress = $xmppAddress;
  }
}

class Google_Service_Games_RoomCreateRequest extends Google_Collection
{
  public $capabilities;
  public $invitedPlayerIds;
  public $kind;
  public $requestId;
  public $variant;
  protected $collection_key = 'invitedPlayerIds';
  protected $internal_gapi_mappings = array(
  );
  protected $autoMatchingCriteriaType = 'Google_Service_Games_RoomAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  protected $clientAddressType = 'Google_Service_Games_RoomClientAddress';
  protected $clientAddressDataType = '';
  protected $networkDiagnosticsType = 'Google_Service_Games_NetworkDiagnostics';
  protected $networkDiagnosticsDataType = '';

  public function setAutoMatchingCriteria(Google_Service_Games_RoomAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }
  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }

  public function getCapabilities()
  {
    return $this->capabilities;
  }

  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }

  public function setClientAddress(Google_Service_Games_RoomClientAddress $clientAddress)
  {
    $this->clientAddress = $clientAddress;
  }
  public function getClientAddress()
  {
    return $this->clientAddress;
  }

  public function getInvitedPlayerIds()
  {
    return $this->invitedPlayerIds;
  }

  public function setInvitedPlayerIds($invitedPlayerIds)
  {
    $this->invitedPlayerIds = $invitedPlayerIds;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setNetworkDiagnostics(Google_Service_Games_NetworkDiagnostics $networkDiagnostics)
  {
    $this->networkDiagnostics = $networkDiagnostics;
  }
  public function getNetworkDiagnostics()
  {
    return $this->networkDiagnostics;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getVariant()
  {
    return $this->variant;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }
}

class Google_Service_Games_RoomJoinRequest extends Google_Collection
{
  public $capabilities;
  public $kind;
  protected $collection_key = 'capabilities';
  protected $internal_gapi_mappings = array(
  );
  protected $clientAddressType = 'Google_Service_Games_RoomClientAddress';
  protected $clientAddressDataType = '';
  protected $networkDiagnosticsType = 'Google_Service_Games_NetworkDiagnostics';
  protected $networkDiagnosticsDataType = '';

  public function getCapabilities()
  {
    return $this->capabilities;
  }

  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }

  public function setClientAddress(Google_Service_Games_RoomClientAddress $clientAddress)
  {
    $this->clientAddress = $clientAddress;
  }
  public function getClientAddress()
  {
    return $this->clientAddress;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setNetworkDiagnostics(Google_Service_Games_NetworkDiagnostics $networkDiagnostics)
  {
    $this->networkDiagnostics = $networkDiagnostics;
  }
  public function getNetworkDiagnostics()
  {
    return $this->networkDiagnostics;
  }
}

class Google_Service_Games_RoomLeaveDiagnostics extends Google_Collection
{
  public $androidNetworkSubtype;
  public $androidNetworkType;
  public $iosNetworkType;
  public $kind;
  public $networkOperatorCode;
  public $networkOperatorName;
  public $socketsUsed;
  protected $collection_key = 'peerSession';
  protected $internal_gapi_mappings = array(
  );
  protected $peerSessionType = 'Google_Service_Games_PeerSessionDiagnostics';
  protected $peerSessionDataType = 'array';

  public function getAndroidNetworkSubtype()
  {
    return $this->androidNetworkSubtype;
  }

  public function setAndroidNetworkSubtype($androidNetworkSubtype)
  {
    $this->androidNetworkSubtype = $androidNetworkSubtype;
  }

  public function getAndroidNetworkType()
  {
    return $this->androidNetworkType;
  }

  public function setAndroidNetworkType($androidNetworkType)
  {
    $this->androidNetworkType = $androidNetworkType;
  }

  public function getIosNetworkType()
  {
    return $this->iosNetworkType;
  }

  public function setIosNetworkType($iosNetworkType)
  {
    $this->iosNetworkType = $iosNetworkType;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNetworkOperatorCode()
  {
    return $this->networkOperatorCode;
  }

  public function setNetworkOperatorCode($networkOperatorCode)
  {
    $this->networkOperatorCode = $networkOperatorCode;
  }

  public function getNetworkOperatorName()
  {
    return $this->networkOperatorName;
  }

  public function setNetworkOperatorName($networkOperatorName)
  {
    $this->networkOperatorName = $networkOperatorName;
  }

  public function setPeerSession($peerSession)
  {
    $this->peerSession = $peerSession;
  }
  public function getPeerSession()
  {
    return $this->peerSession;
  }

  public function getSocketsUsed()
  {
    return $this->socketsUsed;
  }

  public function setSocketsUsed($socketsUsed)
  {
    $this->socketsUsed = $socketsUsed;
  }
}

class Google_Service_Games_RoomLeaveRequest extends Google_Model
{
  public $kind;
  public $reason;
  protected $internal_gapi_mappings = array(
  );
  protected $leaveDiagnosticsType = 'Google_Service_Games_RoomLeaveDiagnostics';
  protected $leaveDiagnosticsDataType = '';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLeaveDiagnostics(Google_Service_Games_RoomLeaveDiagnostics $leaveDiagnostics)
  {
    $this->leaveDiagnostics = $leaveDiagnostics;
  }
  public function getLeaveDiagnostics()
  {
    return $this->leaveDiagnostics;
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

class Google_Service_Games_RoomList extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_Room';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_RoomModification extends Google_Model
{
  public $kind;
  public $modifiedTimestampMillis;
  public $participantId;
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

  public function getModifiedTimestampMillis()
  {
    return $this->modifiedTimestampMillis;
  }

  public function setModifiedTimestampMillis($modifiedTimestampMillis)
  {
    $this->modifiedTimestampMillis = $modifiedTimestampMillis;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }
}

class Google_Service_Games_RoomP2PStatus extends Google_Model
{
  public $connectionSetupLatencyMillis;
  public $error;
  public $errorReason;
  public $kind;
  public $participantId;
  public $status;
  public $unreliableRoundtripLatencyMillis;
  protected $internal_gapi_mappings = array(
        "errorReason" => "error_reason",
  );

  public function getConnectionSetupLatencyMillis()
  {
    return $this->connectionSetupLatencyMillis;
  }

  public function setConnectionSetupLatencyMillis($connectionSetupLatencyMillis)
  {
    $this->connectionSetupLatencyMillis = $connectionSetupLatencyMillis;
  }

  public function getError()
  {
    return $this->error;
  }

  public function setError($error)
  {
    $this->error = $error;
  }

  public function getErrorReason()
  {
    return $this->errorReason;
  }

  public function setErrorReason($errorReason)
  {
    $this->errorReason = $errorReason;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getUnreliableRoundtripLatencyMillis()
  {
    return $this->unreliableRoundtripLatencyMillis;
  }

  public function setUnreliableRoundtripLatencyMillis($unreliableRoundtripLatencyMillis)
  {
    $this->unreliableRoundtripLatencyMillis = $unreliableRoundtripLatencyMillis;
  }
}

class Google_Service_Games_RoomP2PStatuses extends Google_Collection
{
  public $kind;
  protected $collection_key = 'updates';
  protected $internal_gapi_mappings = array(
  );
  protected $updatesType = 'Google_Service_Games_RoomP2PStatus';
  protected $updatesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }
  public function getUpdates()
  {
    return $this->updates;
  }
}

class Google_Service_Games_RoomParticipant extends Google_Collection
{
  public $autoMatched;
  public $capabilities;
  public $connected;
  public $id;
  public $kind;
  public $leaveReason;
  public $status;
  protected $collection_key = 'capabilities';
  protected $internal_gapi_mappings = array(
  );
  protected $autoMatchedPlayerType = 'Google_Service_Games_AnonymousPlayer';
  protected $autoMatchedPlayerDataType = '';
  protected $clientAddressType = 'Google_Service_Games_RoomClientAddress';
  protected $clientAddressDataType = '';
  protected $playerType = 'Google_Service_Games_Player';
  protected $playerDataType = '';

  public function getAutoMatched()
  {
    return $this->autoMatched;
  }

  public function setAutoMatched($autoMatched)
  {
    $this->autoMatched = $autoMatched;
  }

  public function setAutoMatchedPlayer(Google_Service_Games_AnonymousPlayer $autoMatchedPlayer)
  {
    $this->autoMatchedPlayer = $autoMatchedPlayer;
  }
  public function getAutoMatchedPlayer()
  {
    return $this->autoMatchedPlayer;
  }

  public function getCapabilities()
  {
    return $this->capabilities;
  }

  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }

  public function setClientAddress(Google_Service_Games_RoomClientAddress $clientAddress)
  {
    $this->clientAddress = $clientAddress;
  }
  public function getClientAddress()
  {
    return $this->clientAddress;
  }

  public function getConnected()
  {
    return $this->connected;
  }

  public function setConnected($connected)
  {
    $this->connected = $connected;
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

  public function getLeaveReason()
  {
    return $this->leaveReason;
  }

  public function setLeaveReason($leaveReason)
  {
    $this->leaveReason = $leaveReason;
  }

  public function setPlayer(Google_Service_Games_Player $player)
  {
    $this->player = $player;
  }
  public function getPlayer()
  {
    return $this->player;
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

class Google_Service_Games_RoomStatus extends Google_Collection
{
  public $kind;
  public $roomId;
  public $status;
  public $statusVersion;
  protected $collection_key = 'participants';
  protected $internal_gapi_mappings = array(
  );
  protected $autoMatchingStatusType = 'Google_Service_Games_RoomAutoMatchStatus';
  protected $autoMatchingStatusDataType = '';
  protected $participantsType = 'Google_Service_Games_RoomParticipant';
  protected $participantsDataType = 'array';

  public function setAutoMatchingStatus(Google_Service_Games_RoomAutoMatchStatus $autoMatchingStatus)
  {
    $this->autoMatchingStatus = $autoMatchingStatus;
  }
  public function getAutoMatchingStatus()
  {
    return $this->autoMatchingStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setParticipants($participants)
  {
    $this->participants = $participants;
  }
  public function getParticipants()
  {
    return $this->participants;
  }

  public function getRoomId()
  {
    return $this->roomId;
  }

  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatusVersion()
  {
    return $this->statusVersion;
  }

  public function setStatusVersion($statusVersion)
  {
    $this->statusVersion = $statusVersion;
  }
}

class Google_Service_Games_ScoreSubmission extends Google_Model
{
  public $kind;
  public $leaderboardId;
  public $score;
  public $scoreTag;
  public $signature;
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

  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }

  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getSignature()
  {
    return $this->signature;
  }

  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
}

class Google_Service_Games_Snapshot extends Google_Model
{
  public $description;
  public $driveId;
  public $durationMillis;
  public $id;
  public $kind;
  public $lastModifiedMillis;
  public $progressValue;
  public $title;
  public $type;
  public $uniqueName;
  protected $internal_gapi_mappings = array(
  );
  protected $coverImageType = 'Google_Service_Games_SnapshotImage';
  protected $coverImageDataType = '';

  public function setCoverImage(Google_Service_Games_SnapshotImage $coverImage)
  {
    $this->coverImage = $coverImage;
  }
  public function getCoverImage()
  {
    return $this->coverImage;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDriveId()
  {
    return $this->driveId;
  }

  public function setDriveId($driveId)
  {
    $this->driveId = $driveId;
  }

  public function getDurationMillis()
  {
    return $this->durationMillis;
  }

  public function setDurationMillis($durationMillis)
  {
    $this->durationMillis = $durationMillis;
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

  public function getLastModifiedMillis()
  {
    return $this->lastModifiedMillis;
  }

  public function setLastModifiedMillis($lastModifiedMillis)
  {
    $this->lastModifiedMillis = $lastModifiedMillis;
  }

  public function getProgressValue()
  {
    return $this->progressValue;
  }

  public function setProgressValue($progressValue)
  {
    $this->progressValue = $progressValue;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getUniqueName()
  {
    return $this->uniqueName;
  }

  public function setUniqueName($uniqueName)
  {
    $this->uniqueName = $uniqueName;
  }
}

class Google_Service_Games_SnapshotImage extends Google_Model
{
  public $height;
  public $kind;
  public $mimeType;
  public $url;
  public $width;
  protected $internal_gapi_mappings = array(
        "mimeType" => "mime_type",
  );

  public function getHeight()
  {
    return $this->height;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMimeType()
  {
    return $this->mimeType;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setUrl($url)
  {
    $this->url = $url;
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

class Google_Service_Games_SnapshotListResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_Snapshot';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_TurnBasedAutoMatchingCriteria extends Google_Model
{
  public $exclusiveBitmask;
  public $kind;
  public $maxAutoMatchingPlayers;
  public $minAutoMatchingPlayers;
  protected $internal_gapi_mappings = array(
  );

  public function getExclusiveBitmask()
  {
    return $this->exclusiveBitmask;
  }

  public function setExclusiveBitmask($exclusiveBitmask)
  {
    $this->exclusiveBitmask = $exclusiveBitmask;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMaxAutoMatchingPlayers()
  {
    return $this->maxAutoMatchingPlayers;
  }

  public function setMaxAutoMatchingPlayers($maxAutoMatchingPlayers)
  {
    $this->maxAutoMatchingPlayers = $maxAutoMatchingPlayers;
  }

  public function getMinAutoMatchingPlayers()
  {
    return $this->minAutoMatchingPlayers;
  }

  public function setMinAutoMatchingPlayers($minAutoMatchingPlayers)
  {
    $this->minAutoMatchingPlayers = $minAutoMatchingPlayers;
  }
}

class Google_Service_Games_TurnBasedMatch extends Google_Collection
{
  public $applicationId;
  public $description;
  public $inviterId;
  public $kind;
  public $matchId;
  public $matchNumber;
  public $matchVersion;
  public $pendingParticipantId;
  public $rematchId;
  public $status;
  public $userMatchStatus;
  public $variant;
  public $withParticipantId;
  protected $collection_key = 'results';
  protected $internal_gapi_mappings = array(
  );
  protected $autoMatchingCriteriaType = 'Google_Service_Games_TurnBasedAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  protected $creationDetailsType = 'Google_Service_Games_TurnBasedMatchModification';
  protected $creationDetailsDataType = '';
  protected $dataType = 'Google_Service_Games_TurnBasedMatchData';
  protected $dataDataType = '';
  protected $lastUpdateDetailsType = 'Google_Service_Games_TurnBasedMatchModification';
  protected $lastUpdateDetailsDataType = '';
  protected $participantsType = 'Google_Service_Games_TurnBasedMatchParticipant';
  protected $participantsDataType = 'array';
  protected $previousMatchDataType = 'Google_Service_Games_TurnBasedMatchData';
  protected $previousMatchDataDataType = '';
  protected $resultsType = 'Google_Service_Games_ParticipantResult';
  protected $resultsDataType = 'array';

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function setAutoMatchingCriteria(Google_Service_Games_TurnBasedAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }
  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }
  public function setCreationDetails(Google_Service_Games_TurnBasedMatchModification $creationDetails)
  {
    $this->creationDetails = $creationDetails;
  }
  public function getCreationDetails()
  {
    return $this->creationDetails;
  }
  public function setData(Google_Service_Games_TurnBasedMatchData $data)
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getInviterId()
  {
    return $this->inviterId;
  }

  public function setInviterId($inviterId)
  {
    $this->inviterId = $inviterId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setLastUpdateDetails(Google_Service_Games_TurnBasedMatchModification $lastUpdateDetails)
  {
    $this->lastUpdateDetails = $lastUpdateDetails;
  }
  public function getLastUpdateDetails()
  {
    return $this->lastUpdateDetails;
  }

  public function getMatchId()
  {
    return $this->matchId;
  }

  public function setMatchId($matchId)
  {
    $this->matchId = $matchId;
  }

  public function getMatchNumber()
  {
    return $this->matchNumber;
  }

  public function setMatchNumber($matchNumber)
  {
    $this->matchNumber = $matchNumber;
  }

  public function getMatchVersion()
  {
    return $this->matchVersion;
  }

  public function setMatchVersion($matchVersion)
  {
    $this->matchVersion = $matchVersion;
  }

  public function setParticipants($participants)
  {
    $this->participants = $participants;
  }
  public function getParticipants()
  {
    return $this->participants;
  }

  public function getPendingParticipantId()
  {
    return $this->pendingParticipantId;
  }

  public function setPendingParticipantId($pendingParticipantId)
  {
    $this->pendingParticipantId = $pendingParticipantId;
  }

  public function setPreviousMatchData(Google_Service_Games_TurnBasedMatchData $previousMatchData)
  {
    $this->previousMatchData = $previousMatchData;
  }
  public function getPreviousMatchData()
  {
    return $this->previousMatchData;
  }

  public function getRematchId()
  {
    return $this->rematchId;
  }

  public function setRematchId($rematchId)
  {
    $this->rematchId = $rematchId;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }
  public function getResults()
  {
    return $this->results;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getUserMatchStatus()
  {
    return $this->userMatchStatus;
  }

  public function setUserMatchStatus($userMatchStatus)
  {
    $this->userMatchStatus = $userMatchStatus;
  }

  public function getVariant()
  {
    return $this->variant;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }

  public function getWithParticipantId()
  {
    return $this->withParticipantId;
  }

  public function setWithParticipantId($withParticipantId)
  {
    $this->withParticipantId = $withParticipantId;
  }
}

class Google_Service_Games_TurnBasedMatchCreateRequest extends Google_Collection
{
  public $invitedPlayerIds;
  public $kind;
  public $requestId;
  public $variant;
  protected $collection_key = 'invitedPlayerIds';
  protected $internal_gapi_mappings = array(
  );
  protected $autoMatchingCriteriaType = 'Google_Service_Games_TurnBasedAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';

  public function setAutoMatchingCriteria(Google_Service_Games_TurnBasedAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }
  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }

  public function getInvitedPlayerIds()
  {
    return $this->invitedPlayerIds;
  }

  public function setInvitedPlayerIds($invitedPlayerIds)
  {
    $this->invitedPlayerIds = $invitedPlayerIds;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getVariant()
  {
    return $this->variant;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }
}

class Google_Service_Games_TurnBasedMatchData extends Google_Model
{
  public $data;
  public $dataAvailable;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getData()
  {
    return $this->data;
  }

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getDataAvailable()
  {
    return $this->dataAvailable;
  }

  public function setDataAvailable($dataAvailable)
  {
    $this->dataAvailable = $dataAvailable;
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

class Google_Service_Games_TurnBasedMatchDataRequest extends Google_Model
{
  public $data;
  public $kind;
  protected $internal_gapi_mappings = array(
  );

  public function getData()
  {
    return $this->data;
  }

  public function setData($data)
  {
    $this->data = $data;
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

class Google_Service_Games_TurnBasedMatchList extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_TurnBasedMatch';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
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

class Google_Service_Games_TurnBasedMatchModification extends Google_Model
{
  public $kind;
  public $modifiedTimestampMillis;
  public $participantId;
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

  public function getModifiedTimestampMillis()
  {
    return $this->modifiedTimestampMillis;
  }

  public function setModifiedTimestampMillis($modifiedTimestampMillis)
  {
    $this->modifiedTimestampMillis = $modifiedTimestampMillis;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }
}

class Google_Service_Games_TurnBasedMatchParticipant extends Google_Model
{
  public $autoMatched;
  public $id;
  public $kind;
  public $status;
  protected $internal_gapi_mappings = array(
  );
  protected $autoMatchedPlayerType = 'Google_Service_Games_AnonymousPlayer';
  protected $autoMatchedPlayerDataType = '';
  protected $playerType = 'Google_Service_Games_Player';
  protected $playerDataType = '';

  public function getAutoMatched()
  {
    return $this->autoMatched;
  }

  public function setAutoMatched($autoMatched)
  {
    $this->autoMatched = $autoMatched;
  }

  public function setAutoMatchedPlayer(Google_Service_Games_AnonymousPlayer $autoMatchedPlayer)
  {
    $this->autoMatchedPlayer = $autoMatchedPlayer;
  }
  public function getAutoMatchedPlayer()
  {
    return $this->autoMatchedPlayer;
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

  public function setPlayer(Google_Service_Games_Player $player)
  {
    $this->player = $player;
  }
  public function getPlayer()
  {
    return $this->player;
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

class Google_Service_Games_TurnBasedMatchRematch extends Google_Model
{
  public $kind;
  protected $internal_gapi_mappings = array(
  );
  protected $previousMatchType = 'Google_Service_Games_TurnBasedMatch';
  protected $previousMatchDataType = '';
  protected $rematchType = 'Google_Service_Games_TurnBasedMatch';
  protected $rematchDataType = '';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setPreviousMatch(Google_Service_Games_TurnBasedMatch $previousMatch)
  {
    $this->previousMatch = $previousMatch;
  }
  public function getPreviousMatch()
  {
    return $this->previousMatch;
  }
  public function setRematch(Google_Service_Games_TurnBasedMatch $rematch)
  {
    $this->rematch = $rematch;
  }
  public function getRematch()
  {
    return $this->rematch;
  }
}

class Google_Service_Games_TurnBasedMatchResults extends Google_Collection
{
  public $kind;
  public $matchVersion;
  protected $collection_key = 'results';
  protected $internal_gapi_mappings = array(
  );
  protected $dataType = 'Google_Service_Games_TurnBasedMatchDataRequest';
  protected $dataDataType = '';
  protected $resultsType = 'Google_Service_Games_ParticipantResult';
  protected $resultsDataType = 'array';


  public function setData(Google_Service_Games_TurnBasedMatchDataRequest $data)
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMatchVersion()
  {
    return $this->matchVersion;
  }

  public function setMatchVersion($matchVersion)
  {
    $this->matchVersion = $matchVersion;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }
  public function getResults()
  {
    return $this->results;
  }
}

class Google_Service_Games_TurnBasedMatchSync extends Google_Collection
{
  public $kind;
  public $moreAvailable;
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_Games_TurnBasedMatch';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMoreAvailable()
  {
    return $this->moreAvailable;
  }

  public function setMoreAvailable($moreAvailable)
  {
    $this->moreAvailable = $moreAvailable;
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

class Google_Service_Games_TurnBasedMatchTurn extends Google_Collection
{
  public $kind;
  public $matchVersion;
  public $pendingParticipantId;
  protected $collection_key = 'results';
  protected $internal_gapi_mappings = array(
  );
  protected $dataType = 'Google_Service_Games_TurnBasedMatchDataRequest';
  protected $dataDataType = '';
  protected $resultsType = 'Google_Service_Games_ParticipantResult';
  protected $resultsDataType = 'array';


  public function setData(Google_Service_Games_TurnBasedMatchDataRequest $data)
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMatchVersion()
  {
    return $this->matchVersion;
  }

  public function setMatchVersion($matchVersion)
  {
    $this->matchVersion = $matchVersion;
  }

  public function getPendingParticipantId()
  {
    return $this->pendingParticipantId;
  }

  public function setPendingParticipantId($pendingParticipantId)
  {
    $this->pendingParticipantId = $pendingParticipantId;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }
  public function getResults()
  {
    return $this->results;
  }
}
