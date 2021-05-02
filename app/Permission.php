<?php

namespace App;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
    {
        return [
            array('name' => 'permissions_view', 'description' => 'Visualiza as permissões'),
            array('name' => 'permissions_create', 'description' => 'Cria nova permissão'),
            array('name' => 'permissions_edit', 'description' => 'Edita permissões'),
            array('name' => 'permissions_delete', 'description' => 'Deleta permissões'),
            array('name' => 'roles_view', 'description' => 'Visualiza as atribuições'),
            array('name' => 'roles_create', 'description' => 'Cria nova atribuição'),
            array('name' => 'roles_edit', 'description' => 'Edita atribuições'),
            array('name' => 'roles_delete', 'description' => 'Deleta atribuições'),
            array('name' => 'users_view', 'description' => 'Visualiza  usuários'),
            array('name' => 'users_create', 'description' => 'Cria novo usuário'),
            array('name' => 'users_edit', 'description' => 'Edita usuários'),
            array('name' => 'users_delete', 'description' => 'Deleta usuários'),
            array('name' => 'parameters_view', 'description' => 'Visualiza  parâmetros'),
            array('name' => 'parameters_create', 'description' => 'Cria novo parâmetro'),
            array('name' => 'parameters_edit', 'description' => 'Edita parâmetros'),
            array('name' => 'parameters_delete', 'description' => 'Deleta parâmetros')


        ];
    }
}