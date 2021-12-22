<?php

namespace Leanlink\Provider;

use Leanlink\Model\TimelineEntry;

class TimelineProvider extends BaseProvider
{
    public function create(string $type, string $id, TimelineEntry $timelineEntry)
    {
        $data = [
            'content' => $timelineEntry->getContent(),
            'type' => $timelineEntry->getType(),
            'date' => $timelineEntry->getDate()->format('Y-m-d H:i:s'),
            'parameters' => $timelineEntry->getParameters(),
        ];

        $response = $this->post(self::BASE_URL.$type.'/'.$id.'/events', $data);
        if ($response->getStatusCode() == 404) {
            return null;
        }
    }
}
