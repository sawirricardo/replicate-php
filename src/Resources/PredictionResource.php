<?php

namespace Sawirricardo\Replicate\Resources;

use Sawirricardo\Replicate\Requests\CancelPredictionRequest;
use Sawirricardo\Replicate\Requests\CreatePredictionRequest;
use Sawirricardo\Replicate\Requests\GetAllPredictionsRequest;
use Sawirricardo\Replicate\Requests\GetPredictionRequest;

class PredictionResource extends Resource
{
    public function create(string $version, array $input)
    {
        $req = new CreatePredictionRequest;
        $req->body()->add('version', $version);
        $req->body()->add('input', $input);

        return $this->connector->send($req);
    }

    public function get(string $id)
    {
        return $this->connector->send(new GetPredictionRequest($id));
    }

    public function all()
    {
        return $this->connector->send(new GetAllPredictionsRequest);
    }

    public function cancel(string $id)
    {
        return $this->connector->send(new CancelPredictionRequest($id));
    }
}
