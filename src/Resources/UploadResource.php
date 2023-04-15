<?php

namespace Sawirricardo\Replicate\Resources;

use Sawirricardo\Replicate\Requests\CreateUploadRequest;
use Sawirricardo\Replicate\Requests\UpdateUploadRequest;

class UploadResource extends Resource
{
    public function create(string $zipPath)
    {
        $res = $this->connector->send(new CreateUploadRequest(basename($zipPath)));

        $req = new UpdateUploadRequest($res->json('upload_url'));
        $req->body()->add(basename($zipPath), fopen($zipPath, 'rb'));

        return $this->connector->send($req)->json('serving_url');
    }
}
