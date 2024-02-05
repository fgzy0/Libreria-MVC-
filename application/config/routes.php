<?php
namespace application\config\routes;

return [
    '' => [
        'controller' => 'main',
        'action' => 'home',
    ],
    'absolute' => [
        'controller' => 'main',
        'action' => 'absolute',
    ],

    'login' => [
        'controller' => 'main',
        'action' => 'login'
    ],

    'register' => [
        'controller' => 'main',
        'action' => 'register'
    ],

    'logout' => [
        'controller' => 'account',
        'action' => 'logout',
    ],

    'profile' => [
        'controller' => 'account',
        'action' => 'profile'
    ],

    'personal-data' => [
        'controller' => 'account',
        'action' => 'persondata'
    ],

    'orders' => [
        'controller' => 'account',
        'action' => 'orders'
    ],

    'updateavatar' => [
        'controller' => 'account',
        'action' => 'updateavatar'
    ],

    'updatephoneusername' => [
        'controller' => 'account',
        'action' => 'updatephoneusername'
    ],

    'updatefio' => [
        'controller' => 'account',
        'action' => 'updatefio'
    ],

    'updateemail' => [
        'controller' => 'account',
        'action' => 'updateemail'
    ],

    'updatepassword' => [
        'controller' => 'account',
        'action' => 'updatepassword'
    ],

    'datausers' => [
        'controller' => 'admin',
        'action' => 'datausers'
    ],

    'reductuser' => [
        'controller' => 'admin',
        'action' => 'reductuser'
    ],

    'user/(.*)' => [
        'controller' => 'admin',
        'action' => 'reductuserID'
    ],

    'deleteuser' => [
        'controller' => 'admin',
        'action' => 'deleteuser'
    ],

    'deleteuser/(.*)' => [
        'controller' => 'admin',
        'action' => 'deleteuserID'
    ],

    'products' => [
        'controller' => 'admin',
        'action' => 'products'
    ],

    'addproduct' => [
        'controller' => 'admin',
        'action' => 'addproduct'
    ],

    'addnewproduct' => [
        'controller' => 'admin',
        'action' => 'addnewproduct'
    ],

    'reductproduct/(.*)' => [
        'controller' => 'admin',
        'action' => 'reductproductID'
    ],

    'reductproduct' => [
        'controller' => 'admin',
        'action' => 'reductproduct'
    ],

    'deleteproduct/(.*)' => [
        'controller' => 'admin',
        'action' => 'deleteproductID'
    ],

    'deleteproduct' => [
        'controller' => 'admin',
        'action' => 'deleteproduct'
    ],  

    'categories' => [
        'controller' => 'admin',
        'action' => 'categories'
    ],

    'addcategory' => [
        'controller' => 'admin',
        'action' => 'addcategory'
    ],

    'addcategories' => [
        'controller' => 'admin',
        'action' => 'addcategories'
    ],

    'reductcategory/(.*)' => [
        'controller' => 'admin',
        'action' => 'reductcategoryID'
    ],

    'reductcategory' => [
        'controller' => 'admin',
        'action' => 'reductcategory'
    ],

    'deletecategory/(.*)' => [
        'controller' => 'admin',
        'action' => 'deletecategoryID'
    ],

    'deletecategory' => [
        'controller' => 'admin',
        'action' => 'deletecategory'
    ],

    'genres' => [
        'controller' => 'admin',
        'action' => 'genres'
    ],

    'addgenre' => [
        'controller' => 'admin',
        'action' => 'addgenre'
    ],

    'addgenres' => [
        'controller' => 'admin',
        'action' => 'addgenres'
    ],

    'reductgenre/(.*)' => [
        'controller' => 'admin',
        'action' => 'reductgenreID'
    ],

    'reductgenre' => [
        'controller' => 'admin',
        'action' => 'reductgenre'
    ],

    'deletegenre/(.*)' => [
        'controller' => 'admin',
        'action' => 'deletegenreID'
    ],

    'deletegenre' => [
        'controller' => 'admin',
        'action' => 'deletegenre'
    ],

    'dashboard' => [
        'controller' => 'admin',
        'action' => 'dashboard'
    ],

    'book/(.*)' => [
        'controller' => 'main',
        'action' => 'bookID',
    ],

    'genre/(.*)' => [
        'controller' => 'main',
        'action' => 'genreID',
    ],

];
?>