<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__User__CLASSMETADATA__' => 0,
'App__Entity__Posts__CLASSMETADATA__' => 1,
'App__Entity__Tag__CLASSMETADATA__' => 2,
'App__Entity__Contact__CLASSMETADATA__' => 3,
'App__Entity__ResetPasswordRequest__CLASSMETADATA__' => 4,
'Vich__UploaderBundle__Entity__File__CLASSMETADATA__' => 5,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\User',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => true,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'roles' => [
                            'fieldName' => 'roles',
                            'type' => 'json',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'roles',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                        'nom' => [
                            'fieldName' => 'nom',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'nom',
                        ],
                        'prenom' => [
                            'fieldName' => 'prenom',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'prenom',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'nom' => 'nom',
                        'prenom' => 'prenom',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'nom' => 'nom',
                        'prenom' => 'prenom',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'cod_user',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Posts',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Posts',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\PostsRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'titre' => [
                            'fieldName' => 'titre',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'titre',
                        ],
                        'description' => [
                            'fieldName' => 'description',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'description',
                        ],
                        'url' => [
                            'fieldName' => 'url',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'url',
                        ],
                        'date' => [
                            'fieldName' => 'date',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'date',
                        ],
                        'image' => [
                            'fieldName' => 'image',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'image',
                        ],
                        'slug' => [
                            'fieldName' => 'slug',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'slug',
                        ],
                        'active' => [
                            'fieldName' => 'active',
                            'type' => 'boolean',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'active',
                        ],
                        'pseudo' => [
                            'fieldName' => 'pseudo',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'pseudo',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'titre' => 'titre',
                        'description' => 'description',
                        'url' => 'url',
                        'date' => 'date',
                        'image' => 'image',
                        'slug' => 'slug',
                        'active' => 'active',
                        'pseudo' => 'pseudo',
                        'email' => 'email',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'titre' => 'titre',
                        'description' => 'description',
                        'url' => 'url',
                        'date' => 'date',
                        'image' => 'image',
                        'slug' => 'slug',
                        'active' => 'active',
                        'pseudo' => 'pseudo',
                        'email' => 'email',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'cod_posts',
                        'indexes' => [
                            [
                                'columns' => [
                                    'titre',
                                    'description',
                                ],
                                'flags' => [
                                    'fulltext',
                                ],
                            ],
                        ],
                    ],
                ],
                'associationMappings' => [
                    [
                        'tags' => [
                            'fieldName' => 'tags',
                            'joinTable' => [
                                'name' => 'posts_tag',
                                'joinColumns' => [
                                    [
                                        'name' => 'posts_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                                'inverseJoinColumns' => [
                                    [
                                        'name' => 'tag_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                            ],
                            'targetEntity' => 'App\\Entity\\Tag',
                            'mappedBy' => null,
                            'inversedBy' => 'cod_posts',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Posts',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'joinTableColumns' => [
                                'posts_id',
                                'tag_id',
                            ],
                            'isOnDeleteCascade' => true,
                            'relationToSourceKeyColumns' => [
                                'posts_id' => 'id',
                            ],
                            'relationToTargetKeyColumns' => [
                                'tag_id' => 'id',
                            ],
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Tag',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Tag',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\TagRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'nom' => [
                            'fieldName' => 'nom',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'nom',
                        ],
                        'slug' => [
                            'fieldName' => 'slug',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'slug',
                        ],
                        'couleur' => [
                            'fieldName' => 'couleur',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'couleur',
                        ],
                        'isActive' => [
                            'fieldName' => 'isActive',
                            'type' => 'boolean',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'is_active',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'nom' => 'nom',
                        'slug' => 'slug',
                        'couleur' => 'couleur',
                        'is_active' => 'isActive',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'nom' => 'nom',
                        'slug' => 'slug',
                        'couleur' => 'couleur',
                        'isActive' => 'is_active',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'cod_tag',
                    ],
                ],
                'associationMappings' => [
                    [
                        'posts' => [
                            'fieldName' => 'posts',
                            'joinTable' => [
                                'name' => 'posts_tags',
                                'schema' => null,
                                'joinColumns' => [
                                    [
                                        'name' => 'tag_id',
                                        'unique' => false,
                                        'nullable' => true,
                                        'onDelete' => null,
                                        'columnDefinition' => null,
                                        'referencedColumnName' => 'id',
                                    ],
                                ],
                                'inverseJoinColumns' => [
                                    [
                                        'name' => 'post_id',
                                        'unique' => false,
                                        'nullable' => true,
                                        'onDelete' => null,
                                        'columnDefinition' => null,
                                        'referencedColumnName' => 'id',
                                    ],
                                ],
                            ],
                            'targetEntity' => 'App\\Entity\\Posts',
                            'mappedBy' => 'tags',
                            'inversedBy' => null,
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Tag',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Contact',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Contact',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ContactRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'nom' => [
                            'fieldName' => 'nom',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'nom',
                        ],
                        'prenom' => [
                            'fieldName' => 'prenom',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'prenom',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'objet' => [
                            'fieldName' => 'objet',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'objet',
                        ],
                        'texte' => [
                            'fieldName' => 'texte',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'texte',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'nom' => 'nom',
                        'prenom' => 'prenom',
                        'email' => 'email',
                        'objet' => 'objet',
                        'texte' => 'texte',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'nom' => 'nom',
                        'prenom' => 'prenom',
                        'email' => 'email',
                        'objet' => 'objet',
                        'texte' => 'texte',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'cod_contact',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
4 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\ResetPasswordRequest',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\ResetPasswordRequest',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ResetPasswordRequestRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'selector' => [
                            'fieldName' => 'selector',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 20,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'selector',
                        ],
                        'hashedToken' => [
                            'fieldName' => 'hashedToken',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 100,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'hashed_token',
                        ],
                        'requestedAt' => [
                            'fieldName' => 'requestedAt',
                            'type' => 'datetime_immutable',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'requested_at',
                        ],
                        'expiresAt' => [
                            'fieldName' => 'expiresAt',
                            'type' => 'datetime_immutable',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'expires_at',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'selector' => 'selector',
                        'hashed_token' => 'hashedToken',
                        'requested_at' => 'requestedAt',
                        'expires_at' => 'expiresAt',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'selector' => 'selector',
                        'hashedToken' => 'hashed_token',
                        'requestedAt' => 'requested_at',
                        'expiresAt' => 'expires_at',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'reset_password_request',
                    ],
                ],
                'associationMappings' => [
                    [
                        'user' => [
                            'fieldName' => 'user',
                            'joinColumns' => [
                                [
                                    'name' => 'user_id',
                                    'unique' => false,
                                    'nullable' => false,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => null,
                            'targetEntity' => 'App\\Entity\\User',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\ResetPasswordRequest',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'user_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'user_id' => 'user_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'user_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
5 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\AssignedGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\AssignedGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Vich\\UploaderBundle\\Entity\\File',
                ],
                'namespace' => [
                    'Vich\\UploaderBundle\\Entity',
                ],
                'rootEntityName' => [
                    'Vich\\UploaderBundle\\Entity\\File',
                ],
                'isEmbeddedClass' => [
                    true,
                ],
                'fieldMappings' => [
                    [
                        'name' => [
                            'fieldName' => 'name',
                            'nullable' => true,
                            'type' => 'string',
                            'columnName' => 'name',
                        ],
                        'originalName' => [
                            'fieldName' => 'originalName',
                            'columnName' => 'original_name',
                            'nullable' => true,
                            'type' => 'string',
                        ],
                        'mimeType' => [
                            'fieldName' => 'mimeType',
                            'columnName' => 'mime_type',
                            'nullable' => true,
                            'type' => 'string',
                        ],
                        'size' => [
                            'fieldName' => 'size',
                            'type' => 'integer',
                            'nullable' => true,
                            'columnName' => 'size',
                        ],
                        'dimensions' => [
                            'fieldName' => 'dimensions',
                            'type' => 'simple_array',
                            'nullable' => true,
                            'columnName' => 'dimensions',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'name' => 'name',
                        'original_name' => 'originalName',
                        'mime_type' => 'mimeType',
                        'size' => 'size',
                        'dimensions' => 'dimensions',
                    ],
                ],
                'columnNames' => [
                    [
                        'name' => 'name',
                        'originalName' => 'original_name',
                        'mimeType' => 'mime_type',
                        'size' => 'size',
                        'dimensions' => 'dimensions',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'file',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
