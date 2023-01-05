<?php

function getRandId($tableName, $idName)
{
    $db      = \Config\Database::connect();
    $builder = $db->table($tableName);
    $builder->select($idName);

    $data = [];
    foreach ($builder->get()->getResultArray() as $id_user) {
        $data[] = $id_user[$idName];
    }

    $k = array_rand($data);
    return $data[$k];
};

function formatTanggal($date)
{
    // ubha string menjadi format tanggal
    return date(' D, d M Y. H:i:s e', strtotime($date));
}

function getLastId()
{
    $db      = \Config\Database::connect();
    return $db->insertID();
}

function getAllById($namatabel, $namaKolom, $id)
{
    $db      = \Config\Database::connect();
    $builder = $db->table($namatabel);
    $builder->select('*');
    $builder->where($namaKolom, $id);
    return $builder->get()->getResultArray();
}

function getInisial($initial)
{
    $initial = explode(' ', $initial);
    $theInitial = substr($initial[0], 0, 1);

    if (isset($initial[1])) {
        $theInitial .= substr($initial[1], 0, 1);
    }

    return $theInitial;
}

function getInitialD($initial)
{
    $initial = explode('@', $initial);
    $theInitial = substr($initial[0], 0, 1);

    if (isset($initial[1])) {
        $theInitial .= substr($initial[1], 0, 1);
    }

    return strtoupper($theInitial);
}
