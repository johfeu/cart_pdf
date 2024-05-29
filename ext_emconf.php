<?php

$EM_CONF['cart_pdf'] = [
    'title' => 'Cart - PDF',
    'description' => 'Shopping Cart(s) for TYPO3 - PDF Renderer for Invoices and Delivery Notes',
    'category' => 'services',
    'author' => 'Daniel Gohlke',
    'author_email' => 'ext.cart@extco.de',
    'author_company' => 'extco.de UG (haftungsbeschränkt)',
    'state' => 'beta',
    'version' => '5.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'cart' => '7.0.0-8.99.99',
            'tcpdf' => '3.0.0-4.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
