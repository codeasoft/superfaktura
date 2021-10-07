<?php

declare(strict_types=1);

namespace Tuzex\Superfaktura;

use Tuzex\Superfaktura\Api\Stock;
use Tuzex\Superfaktura\Http\HttpClient;

final class NativeApiClient implements ApiClient
{
    public function __construct(
        private HttpClient $httpClient,
    ) {
    }

    public function stock(): Stock
    {
        return new Stock($this->httpClient);
    }
}