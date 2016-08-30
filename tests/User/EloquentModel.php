<?php

namespace Rougin\Datatables\Test\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent Model
 *
 * @package Datatables
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class EloquentModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';
}