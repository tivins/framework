<?php

namespace Tivins\Framework;

enum HTTPMethod: string
{
    case NONE   = '';
    case GET    = 'GET';
    case POST   = 'POST';
    case DELETE = 'DELETE';
    case PUT    = 'PUT';
}