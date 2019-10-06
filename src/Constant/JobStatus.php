<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Constant;

/**
 * The status values of the export jobs.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface JobStatus
{
    /**
     * The export job is currently queued and has not been touched yet.
     */
    public const QUEUED = 'queued';

    /**
     * A node has taken the export job and is currently downloading the missing mods from the Mod Portal.
     */
    public const DOWNLOADING = 'downloading';

    /**
     * The node is currently running a Factorio instance and parsing the dumped data.
     */
    public const PROCESSING = 'processing';

    /**
     * The node is currently uploading the gathered data to the importer.
     */
    public const UPLOADING = 'uploading';

    /**
     * The data has been uploaded to the importer and is currently waiting to actually get imported into the database.
     */
    public const UPLOADED = 'uploaded';

    /**
     * The importer is running and currently importing the data into the database.
     */
    public const IMPORTING = 'importing';

    /**
     * The export job is done and its data is available through the API server.
     */
    public const DONE = 'done';

    /**
     * An error occurred while processing the export job. No further updates are expected.
     */
    public const ERROR = 'error';
}
