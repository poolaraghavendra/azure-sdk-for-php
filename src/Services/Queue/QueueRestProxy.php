<?php

/**
 * Includes QueueRestProxy which implements Queue interface.
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    azure-sdk-for-php
 * @author     Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright  2012 Microsoft Corporation
 * @license    http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link       http://pear.php.net/package/azure-sdk-for-php
 */

namespace  PEAR2\Services\Queue;

/**
* This class constructs HTTP requests and receive HTTP responses for queue 
* service service layer.
*
* @package    azure-sdk-for-php
* @author     Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
* @copyright  2012 Microsoft Corporation
* @license    http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
* @version    Release: @package_version@
* @link       http://pear.php.net/package/azure-sdk-for-php
*/
class QueueRestProxy implements QueueContract
{
    public function listQueues()
    {
      return 10;
    }
}

?>
