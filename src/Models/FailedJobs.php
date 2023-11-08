<?php

namespace Admin\Extend\AdminFailedJobs\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Admin\Extend\AdminFailedJobs\Models\FailedJobs
 *
 * @property int $id
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property string $failed_at
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs query()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs whereConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs whereFailedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs whereQueue($value)
 * @property string $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJobs whereUuid($value)
 * @mixin \Eloquent
 */
class FailedJobs extends Model
{
    protected $table = "failed_jobs";
}
