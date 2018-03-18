<?php
namespace Arndtteunissen\RealurlClearCache\Command;

/*
 * This file is part of the TYPO3 responsive images project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read
 * LICENSE file that was distributed with this source code.
 *
 */

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\CommandController;

class RealurlCommandController extends CommandController
{
    /**
     * @var array
     */
    protected $realurlCachingTables = [
        'tx_realurl_pathdata',
        'tx_realurl_uniqalias',
        'tx_realurl_uniqalias_cache_map',
        'tx_realurl_urldata',
    ];

    /**
     * Flush all realurl caches
     *
     * @cli
     */
    public function flushCacheCommand()
    {
        foreach ($this->realurlCachingTables as $tableName) {
            $this->getQueryBuilder($tableName)->delete($tableName)->execute();
        }
    }

    /**
     * @param string $tableName
     * @return QueryBuilder
     */
    protected function getQueryBuilder(string $tableName): QueryBuilder
    {
        return GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($tableName);
    }
}
