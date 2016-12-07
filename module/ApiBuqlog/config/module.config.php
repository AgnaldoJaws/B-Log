<?php
return [
    'router' => [
        'routes' => [
            'api-buqlog.rest.quotes-message' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/quotes[/:quotes_id]',
                    'defaults' => [
                        'controller' => 'ApiBuqlog\\V1\\Rest\\QuotesMessage\\Controller',
                    ],
                ],
            ],
            'api-buqlog.rest.transportadora' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/transportadora[/:transportadora_id]',
                    'defaults' => [
                        'controller' => 'ApiBuqlog\\V1\\Rest\\Transportadora\\Controller',
                    ],
                ],
            ],
            'api-buqlog.rest.tipo-transporte' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tipo_transporte[/:tipo_transporte_id]',
                    'defaults' => [
                        'controller' => 'ApiBuqlog\\V1\\Rest\\TipoTransporte\\Controller',
                    ],
                ],
            ],
            'api-buqlog.rest.quotes-register' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/quotes_resgiter[/:quotes_resgiter_id]',
                    'defaults' => [
                        'controller' => 'ApiBuqlog\\V1\\Rest\\QuotesRegister\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'api-buqlog.rest.quotes-message',
            1 => 'api-buqlog.rest.transportadora',
            2 => 'api-buqlog.rest.tipo-transporte',
            3 => 'api-buqlog.rest.quotes-register',
        ],
    ],
    'zf-rest' => [
        'ApiBuqlog\\V1\\Rest\\QuotesMessage\\Controller' => [
            'listener' => 'ApiBuqlog\\V1\\Rest\\QuotesMessage\\QuotesMessageResource',
            'route_name' => 'api-buqlog.rest.quotes-message',
            'route_identifier_name' => 'quotes_message_id',
            'collection_name' => 'quotes_message',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApiBuqlog\V1\Rest\QuotesMessage\QuotesMessageEntity::class,
            'collection_class' => \ApiBuqlog\V1\Rest\QuotesMessage\QuotesMessageCollection::class,
            'service_name' => 'quotes_message',
        ],
        'ApiBuqlog\\V1\\Rest\\Transportadora\\Controller' => [
            'listener' => 'ApiBuqlog\\V1\\Rest\\Transportadora\\TransportadoraResource',
            'route_name' => 'api-buqlog.rest.transportadora',
            'route_identifier_name' => 'transportadora_id',
            'collection_name' => 'transportadora',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApiBuqlog\V1\Rest\Transportadora\TransportadoraEntity::class,
            'collection_class' => \ApiBuqlog\V1\Rest\Transportadora\TransportadoraCollection::class,
            'service_name' => 'transportadora',
        ],
        'ApiBuqlog\\V1\\Rest\\TipoTransporte\\Controller' => [
            'listener' => 'ApiBuqlog\\V1\\Rest\\TipoTransporte\\TipoTransporteResource',
            'route_name' => 'api-buqlog.rest.tipo-transporte',
            'route_identifier_name' => 'tipo_transporte_id',
            'collection_name' => 'tipo_transporte',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApiBuqlog\V1\Rest\TipoTransporte\TipoTransporteEntity::class,
            'collection_class' => \ApiBuqlog\V1\Rest\TipoTransporte\TipoTransporteCollection::class,
            'service_name' => 'tipo_transporte',
        ],
        'ApiBuqlog\\V1\\Rest\\QuotesRegister\\Controller' => [
            'listener' => 'ApiBuqlog\\V1\\Rest\\QuotesRegister\\QuotesRegisterResource',
            'route_name' => 'api-buqlog.rest.quotes-register',
            'route_identifier_name' => 'quotes_register_id',
            'collection_name' => 'quotes_register',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApiBuqlog\V1\Rest\QuotesRegister\QuotesRegisterEntity::class,
            'collection_class' => \ApiBuqlog\V1\Rest\QuotesRegister\QuotesRegisterCollection::class,
            'service_name' => 'quotes_register',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'ApiBuqlog\\V1\\Rest\\QuotesMessage\\Controller' => 'HalJson',
            'ApiBuqlog\\V1\\Rest\\Transportadora\\Controller' => 'HalJson',
            'ApiBuqlog\\V1\\Rest\\TipoTransporte\\Controller' => 'HalJson',
            'ApiBuqlog\\V1\\Rest\\QuotesRegister\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'ApiBuqlog\\V1\\Rest\\QuotesMessage\\Controller' => [
                0 => 'application/vnd.api-buqlog.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApiBuqlog\\V1\\Rest\\Transportadora\\Controller' => [
                0 => 'application/vnd.api-buqlog.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApiBuqlog\\V1\\Rest\\TipoTransporte\\Controller' => [
                0 => 'application/vnd.api-buqlog.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApiBuqlog\\V1\\Rest\\QuotesRegister\\Controller' => [
                0 => 'application/vnd.api-buqlog.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'ApiBuqlog\\V1\\Rest\\QuotesMessage\\Controller' => [
                0 => 'application/vnd.api-buqlog.v1+json',
                1 => 'application/json',
            ],
            'ApiBuqlog\\V1\\Rest\\Transportadora\\Controller' => [
                0 => 'application/vnd.api-buqlog.v1+json',
                1 => 'application/json',
            ],
            'ApiBuqlog\\V1\\Rest\\TipoTransporte\\Controller' => [
                0 => 'application/vnd.api-buqlog.v1+json',
                1 => 'application/json',
            ],
            'ApiBuqlog\\V1\\Rest\\QuotesRegister\\Controller' => [
                0 => 'application/vnd.api-buqlog.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \ApiBuqlog\V1\Rest\QuotesMessage\QuotesMessageEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api-buqlog.rest.quotes-message',
                'route_identifier_name' => 'quotes_message_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \ApiBuqlog\V1\Rest\QuotesMessage\QuotesMessageCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api-buqlog.rest.quotes-message',
                'route_identifier_name' => 'quotes_message_id',
                'is_collection' => true,
            ],
            \ApiBuqlog\V1\Rest\Transportadora\TransportadoraEntity::class => [
                'entity_identifier_name' => 'company_ids',
                'route_name' => 'api-buqlog.rest.transportadora',
                'route_identifier_name' => 'transportadora_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \ApiBuqlog\V1\Rest\Transportadora\TransportadoraCollection::class => [
                'entity_identifier_name' => 'company_ids',
                'route_name' => 'api-buqlog.rest.transportadora',
                'route_identifier_name' => 'transportadora_id',
                'is_collection' => true,
            ],
            \ApiBuqlog\V1\Rest\TipoTransporte\TipoTransporteEntity::class => [
                'entity_identifier_name' => 'transport_type_ids',
                'route_name' => 'api-buqlog.rest.tipo-transporte',
                'route_identifier_name' => 'tipo_transporte_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \ApiBuqlog\V1\Rest\TipoTransporte\TipoTransporteCollection::class => [
                'entity_identifier_name' => 'transport_type_ids',
                'route_name' => 'api-buqlog.rest.tipo-transporte',
                'route_identifier_name' => 'tipo_transporte_id',
                'is_collection' => true,
            ],
            \ApiBuqlog\V1\Rest\QuotesRegister\QuotesRegisterEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api-buqlog.rest.quotes-register',
                'route_identifier_name' => 'quotes_register_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \ApiBuqlog\V1\Rest\QuotesRegister\QuotesRegisterCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api-buqlog.rest.quotes-register',
                'route_identifier_name' => 'quotes_register_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'ApiBuqlog\\V1\\Rest\\QuotesMessage\\QuotesMessageResource' => [
                'adapter_name' => 'buqlogAdapter',
                'table_name' => 'quotes_message',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'ApiBuqlog\\V1\\Rest\\QuotesMessage\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'ApiBuqlog\\V1\\Rest\\QuotesMessage\\QuotesMessageResource\\Table',
            ],
            'ApiBuqlog\\V1\\Rest\\Transportadora\\TransportadoraResource' => [
                'adapter_name' => 'buqlogAdapter',
                'table_name' => 'transportadora',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'ApiBuqlog\\V1\\Rest\\Transportadora\\Controller',
                'entity_identifier_name' => 'company_ids',
                'table_service' => 'ApiBuqlog\\V1\\Rest\\Transportadora\\TransportadoraResource\\Table',
            ],
            'ApiBuqlog\\V1\\Rest\\TipoTransporte\\TipoTransporteResource' => [
                'adapter_name' => 'buqlogAdapter',
                'table_name' => 'tipo_transporte',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'ApiBuqlog\\V1\\Rest\\TipoTransporte\\Controller',
                'entity_identifier_name' => 'transport_type_ids',
                'table_service' => 'ApiBuqlog\\V1\\Rest\\TipoTransporte\\TipoTransporteResource\\Table',
            ],
            'ApiBuqlog\\V1\\Rest\\QuotesRegister\\QuotesRegisterResource' => [
                'adapter_name' => 'buqlogAdapter',
                'table_name' => 'quotes_register',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'ApiBuqlog\\V1\\Rest\\QuotesRegister\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'ApiBuqlog\\V1\\Rest\\QuotesRegister\\QuotesRegisterResource\\Table',
            ],
        ],
    ],
    'zf-content-validation' => [
        'ApiBuqlog\\V1\\Rest\\Transportadora\\Controller' => [
            'input_filter' => 'ApiBuqlog\\V1\\Rest\\Transportadora\\Validator',
        ],
        'ApiBuqlog\\V1\\Rest\\QuotesMessage\\Controller' => [
            'input_filter' => 'ApiBuqlog\\V1\\Rest\\QuotesMessage\\Validator',
        ],
        'ApiBuqlog\\V1\\Rest\\TipoTransporte\\Controller' => [
            'input_filter' => 'ApiBuqlog\\V1\\Rest\\TipoTransporte\\Validator',
        ],
        'ApiBuqlog\\V1\\Rest\\QuotesRegister\\Controller' => [
            'input_filter' => 'ApiBuqlog\\V1\\Rest\\QuotesRegister\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'ApiBuqlog\\V1\\Rest\\Transportadora\\Validator' => [
            0 => [
                'name' => 'descricao',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
        ],
        'ApiBuqlog\\V1\\Rest\\QuotesMessage\\Validator' => [
            0 => [
                'name' => 'text',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'to_id',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            2 => [
                'name' => 'state',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'data',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'ApiBuqlog\\V1\\Rest\\TipoTransporte\\Validator' => [
            0 => [
                'name' => 'tipo_transporte',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
        ],
        'ApiBuqlog\\V1\\Rest\\QuotesRegister\\Validator' => [
            0 => [
                'name' => 'company_ids',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'buqlogAdapter',
                            'table' => 'transportadora',
                            'field' => 'company_ids',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'origin_region_id',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            2 => [
                'name' => 'cargo_type_id',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            3 => [
                'name' => 'transport_type_ids',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'buqlogAdapter',
                            'table' => 'tipo_transporte',
                            'field' => 'transport_type_ids',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'volume',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '250',
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'weight',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            6 => [
                'name' => 'comments',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '1024',
                        ],
                    ],
                ],
            ],
            7 => [
                'name' => 'title',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
