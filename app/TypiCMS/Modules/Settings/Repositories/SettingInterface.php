<?php
namespace TypiCMS\Modules\Settings\Repositories;

interface SettingInterface
{

    /**
     * Get all models
     *
     * @param  boolean  $all  Show published or all
     * @param  array    $with Eager load related models
     * @return StdClass Object with $items
     */
    public function getAll(array $with = array(), $all = false);

    /**
     * Update an existing item
     *
     * @param array  Data to update an item
     * @return boolean
     */
    public function store(array $data);

    /**
     * Build Settings Array
     *
     * @return array
     */
    public function getAllToArray();
}
