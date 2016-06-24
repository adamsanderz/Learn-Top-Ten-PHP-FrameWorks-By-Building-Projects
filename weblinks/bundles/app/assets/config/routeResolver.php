<?php

return array(
    'type'      => 'group',
    'resolvers' => array(


        'view' => array(
    'type'     => 'pattern',

    //Since the id parameter is mandatory
    //we don't wrap it in brackets
    'path'     => 'weblink/view/<id>',
    'defaults' => array(
        'processor' => 'weblink',
        'action'    => 'view'
    )
    ),

        'edit' => array(
    'type'     => 'pattern',

    //Since the id parameter is mandatory
    //we don't wrap it in brackets
    'path'     => 'weblink/edit/<id>',
    'defaults' => array(
        'processor' => 'weblink',
        'action'    => 'edit'
    )
    ),

          'add' => array(
    'type'     => 'pattern',

    //Since the id parameter is mandatory
    //we don't wrap it in brackets
    'path'     => 'weblink/add',
    'defaults' => array(
        'processor' => 'weblink',
        'action'    => 'add'
    )
    ),


          'delete' => array(
          'type'     => 'pattern',

    
    'path'     => 'weblink/delete/<id>',
    'defaults' => array(
        'processor' => 'weblink',
        'action'    => 'delete'
    )
    ),
        
        'default' => array(
            'type'     => 'pattern',
            'path'     => '(<processor>(/<action>))',
            'defaults' => array(
                'processor' => 'weblink',
                'action'    => 'default'
            )
        )
        
    )
);
