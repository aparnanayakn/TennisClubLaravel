<?php

namespace App\Repositories;

use App\Models\users;
use App\Repositories\BaseRepository;

/**
 * Class usersRepository
 * @package App\Repositories
 * @version March 24, 2026, 10:53 am UTC
*/

class usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return users::class;
    }
}
