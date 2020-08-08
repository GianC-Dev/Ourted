<?php

namespace Ourted\Model\Channel;

use React\EventLoop;
use Ourted\Bot;
use stdClass;

class Channel
{

    public $id;
    public $type;
    public $name;
    public $guild_id;
    public $position;
    public $permission_overwrites = [];
    public $rate_limit_per_user;
    public $nsfw;
    public $topic;
    public $last_message_id;
    public $parent_id;


    /**
     * Init the instance and set the bot and loop instance
     *
     * @param Bot $bot
     * @param int|string $channel_id
     */
    public function __construct($bot, $channel_id)
    {
        $headers = array();
        $headers[] = 'Authorization: Bot ' . $bot->token;
        $headers[] = 'User-Agent: Ourted (http://example.com, v0.1)';
        $headers[] = 'Content-Type: application/json';
        $result = $bot->functions->init_curl_with_header(
            "channels/{$channel_id}",
            $headers, "", "GET");
        $json = json_decode($result);
        $this->id = $json->id;
        $this->last_message_id = $json->last_message_id;
        $this->type = $json->type;
        $this->name = $json->name;
        $this->position = $json->position;
        $this->parent_id = $json->parent_id;
        $this->topic = $json->topic;
        $this->guild_id = $json->guild_id;
        $this->nsfw = $json->nsfw;
        $this->permission_overwrites = $json->permission_overwrites;
        $this->rate_limit_per_user = $json->rate_limit_per_user;
        return $this;
    }

}