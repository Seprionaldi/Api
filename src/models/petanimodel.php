<?php

class PetaniModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllPetani()
    {
        return $this->db->table('master_petani')->get();
    }

    public function getPetaniById($id)
    {
        return $this->db->table('master_petani')->where('id', $id)->first();
    }

    public function createPetani($data)
    {
        return $this->db->table('master_petani')->insert($data);
    }

    public function updatePetani($id, $data)
    {
        return $this->db->table('master_petani')->where('id', $id)->update($data);
    }

    public function deletePetani($id)
    {
        return $this->db->table('master_petani')->where('id', $id)->delete();
    }
}
