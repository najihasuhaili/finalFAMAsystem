<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'bilik' => [
        'title'          => 'Bilik',
        'title_singular' => 'Bilik',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'kapasiti'          => 'Kapasiti',
            'kapasiti_helper'   => ' ',
            'lokasi'            => 'Lokasi',
            'lokasi_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'nama_bilik'        => 'Nama Bilik',
            'nama_bilik_helper' => ' ',
        ],
    ],
    'borangPermohonan' => [
        'title'          => 'Borang Permohonan',
        'title_singular' => 'Borang Permohonan',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'nama_pemohon'           => 'Nama Pemohon',
            'nama_pemohon_helper'    => ' ',
            'no_sambungan'           => 'No Sambungan',
            'no_sambungan_helper'    => ' ',
            'jawatan'                => 'Jawatan',
            'jawatan_helper'         => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'unit_bahagian'          => 'Unit Bahagian',
            'unit_bahagian_helper'   => ' ',
            'nama_mesyuaarat'        => 'Nama Mesyuaarat',
            'nama_mesyuaarat_helper' => ' ',
            'pengerusi'              => 'Pengerusi',
            'pengerusi_helper'       => ' ',
            'dari'                   => 'Dari',
            'dari_helper'            => ' ',
            'hingga'                 => 'Hingga',
            'hingga_helper'          => ' ',
            'bil_ahli'               => 'Bilangan Ahli',
            'bil_ahli_helper'        => ' ',
            'status'                 => 'Status',
            'status_helper'          => ' ',
            'nama_bilik'             => 'Nama Bilik',
            'nama_bilik_helper'      => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
        ],
    ],

];