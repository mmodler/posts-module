<?php namespace Anomaly\BlogModule\Category\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class CategoryTableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\BlogModule\Category\Table
 */
class CategoryTableBuilder extends TableBuilder
{

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'title',
        'slug',
        'description'
    ];

    /**
     * The table actions.
     *
     * @var array
     */
    protected $actions = [
        'delete'
    ];

}
