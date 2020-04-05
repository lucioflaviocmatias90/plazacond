<?php


namespace App\Repositories;


use App\Models\Owner;

class OwnerRepository
{
    private $owner;

    /**
     * OwnerRepository constructor.
     * @param $owner
     */
    public function __construct(Owner $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Retorna todos os proprietários do condomínio
     */
    public function getAll()
    {
        return $this->owner->paginate();
    }

    /**
     * Retorna apenas um proprietários pelo ID informado
     *
     * @param int $id
     * @return \App\Models\Owner
     */
    public function getById(int $id)
    {
        return $this->owner->findOrFail($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function createOwner(array $data)
    {
        return $this->owner->create($data);
    }
}