<?php

namespace Sawirricardo\Replicate;

use Saloon\Http\Connector;
use Sawirricardo\Replicate\Resources\ModelResource;
use Sawirricardo\Replicate\Resources\PredictionResource;
use Sawirricardo\Replicate\Resources\TrainingResource;

class Replicate extends Connector
{
    public function __construct(protected string $apiKey)
    {
        $this->withTokenAuth($this->apiKey, 'Token');
    }

    public function predictions()
    {
        return new PredictionResource($this);
    }

    public function models(string $owner, string $name)
    {
        return new ModelResource($this, $owner, $name);
    }

    public function trainings()
    {
        return new TrainingResource($this);
    }

    public function resolveBaseUrl(): string
    {
        return 'https://api.replicate.com/v1/';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }
}
