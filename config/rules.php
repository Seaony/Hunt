<?php

return [
    'proposals' => [
        'name'    => 'required|max:50',
        'email'   => 'required|email',
        'content' => 'required|max:191',
    ],
    'nominates' => [
        'name'     => 'required|max:50',
        'link'     => 'required|max:191|url',
        'describe' => 'required|max:191',
    ],

    'admin' => [
        'users'       => [
            'login'  => [
                'email'    => 'required|email|exists:users',
                'password' => 'required|between:6,20',
            ],
            'store'  => [
                'roles'    => 'array|nullable',
                'name'     => 'required|between:2,20|unique:users',
                'email'    => 'required|email|unique:users',
                'password' => 'required|between:6,20',
            ],
            'update' => [
                'roles'    => 'array|nullable',
                'name'     => 'required|between:2,20',
                'email'    => 'required|email',
                'password' => 'between:6,20|nullable',
            ],
            'batch'  => [
                'id' => 'required|array',
            ],
        ],
        'menus'       => [
            'store'  => [
                'name'     => 'required|max:191',
                'icon'     => 'nullable|max:191',
                'slug'     => 'required|max:191',
                'weight'   => 'required|numeric',
                'top_id'   => 'required|numeric',
                'describe' => 'max:191|nullable',
            ],
            'update' => [
                'name'     => 'required|max:191',
                'icon'     => 'nullable|max:191',
                'slug'     => 'required|max:191',
                'weight'   => 'required|numeric',
                'top_id'   => 'required|numeric',
                'describe' => 'max:191|nullable',
            ],
        ],
        'permissions' => [
            'store'  => [
                'alias'    => 'required',
                'describe' => 'nullable',
                'name'     => 'required|between:2,50|unique:permissions',
            ],
            'update' => [
                'alias'    => 'required',
                'describe' => 'nullable',
                'name'     => 'required|between:2,50',
            ],
            'batch'  => [
                'id' => 'required|array',
            ],
        ],
        'roles'       => [
            'store'  => [
                'alias'       => 'required',
                'permissions' => 'array|nullable',
                'describe'    => 'nullable',
                'name'        => 'required|between:2,20|unique:roles',
            ],
            'update' => [
                'alias'       => 'required',
                'permissions' => 'array|nullable',
                'describe'    => 'nullable',
                'name'        => 'required|between:2,20',
            ],
            'batch'  => [
                'id' => 'required|array',
            ],
        ],
        'categorys'   => [
            'store'  => [
                'name'      => 'required|unique:categories',
                'cover'     => 'required|unique:categories',
                'describe'  => 'required',
                'weight'    => 'required|numeric',
                'is_active' => 'required|boolean',
            ],
            'update' => [
                'name'      => 'required',
                'cover'     => 'required',
                'describe'  => 'required',
                'weight'    => 'required|numeric',
                'is_active' => 'required|boolean',
            ],
            'batch'  => [
                'id' => 'required|array',
            ],
        ],
        'triggers'    => [
            'store'  => [
                'name'        => 'required',
                'cover'       => 'required',
                'link'        => 'required|url',
                'describe'    => 'required',
                'form'        => 'nullable|max:50',
                'category_id' => 'required|numeric|exists:categories,id',
                'tag_id'      => 'required|numeric|exists:tags,id',
                'is_active'   => 'required|boolean',
            ],
            'update' => [
                'name'        => 'required',
                'cover'       => 'required',
                'link'        => 'required|url',
                'describe'    => 'required',
                'form'        => 'nullable|max:50',
                'category_id' => 'required|numeric|exists:categories,id',
                'tag_id'      => 'required|numeric|exists:tags,id',
                'is_active'   => 'required|boolean',
            ],
            'batch'  => [
                'id' => 'required|array',
            ],
        ],
        'friendships' => [
            'store'  => [
                'name'      => 'required',
                'cover'     => 'required',
                'link'      => 'required|url',
                'describe'  => 'required',
                'is_active' => 'required|boolean',
            ],
            'update' => [
                'name'      => 'required',
                'cover'     => 'required',
                'link'      => 'required|url',
                'describe'  => 'required',
                'is_active' => 'required|boolean',
            ],
            'batch'  => [
                'id' => 'required|array',
            ],
        ],
        'tags'        => [
            'store'  => [
                'name'     => 'required|unique:tags',
                'weight'   => 'required|numeric',
                'describe' => 'required',
                'icon'     => 'required',
            ],
            'update' => [

                'name'     => 'required',
                'weight'   => 'required|numeric',
                'describe' => 'required',
                'icon'     => 'required',
            ],
            'batch'  => [
                'id' => 'required|array',
            ],
        ],
        'upload' => [
            'file' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000'
        ],
    ],
];