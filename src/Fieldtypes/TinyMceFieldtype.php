<?php

namespace Addons\TinyMceFieldtype\Fieldtypes;

class TinyMceFieldtype extends \Fusion\Fieldtypes\Fieldtype
{
    /**
     * @var string
     */
    public $name = 'TinyMce';

    /**
     * @var string
     */
    public $icon = 'text-height';

    /**
     * @var string
     */
    public $description = 'An easy to use "what you see is what you get" (WYSIWYG) field.';

    /**
     * @var string
     */
    public $cast = 'string';

    /**
     * @var array
     */
    public $settings = [
        'placeholder'           => '',
        'limit'                 => null,
        'root_directory'        => null,
        'filetype_restrictions' => [],
        'uploader'              => null,
    ];

    /**
     * @var array
     */
    public $column = [
        'type' => 'text',
    ];
}
