<?php

namespace Mhgolestani77\Smsir\Classes;

use Mhgolestani77\Smsir\Exceptions\HttpException;
use Mhgolestani77\Smsir\Objects\CreditResponse;
use Mhgolestani77\Smsir\Objects\LineResponse;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class Setting {

    private $smsir;

    /**
     * @param Smsir $smsir
     */
    public function __construct(Smsir $smsir) {
        $this->smsir = $smsir;
    }

    /**
     * get account credit
     *
     * @return CreditResponse
     * @throws GuzzleException
     * @throws HttpException
     * @throws JsonException
     */
    public function getCredit(): CreditResponse {
        $response = $this->smsir->get('/v1/credit');
        return new CreditResponse($response);
    }

    /**
     * get account line numbers
     *
     * @return LineResponse
     * @throws HttpException
     * @throws GuzzleException
     * @throws JsonException
     */
    public function getLines(): LineResponse {
        $response = $this->smsir->get('/v1/line');
        return new LineResponse($response);
    }

}
