<?php

namespace Leanlink\Provider;

use Leanlink\Model\Resource;

class ResourceProvider extends BaseProvider
{
    public function find(string $id)
    {
        $response = $this->get(self::BASE_URL . 'resources/' . $id);
        if ($response->getStatusCode() == 404) {
            return null;
        }
        if ($response->getStatusCode() == 401) {
            return null;
        }

        $data = json_decode($response->getBody()->getContents(), true);

        $resource = new Resource($data['id']);
        $resource->setFirstName($data['firstName']);
        $resource->setLastName($data['lastName']);
        $resource->setEmail($data['email']);
        $resource->setPhone1($data['phone1']);
        $resource->setPhone2($data['phone2']);
        $resource->setPhone3($data['phone3']);
        $resource->setPhone4($data['phone4']);

        return $resource;
    }
}
