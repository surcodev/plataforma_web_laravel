<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $message_id
 * @property int $user_id
 * @property int $agent_id
 * @property string $sender
 * @property string $reply
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Agent $agent
 * @property-read \App\Models\Message $message
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereSender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MessageReply whereUserId($value)
 * @mixin \Eloquent
 */
class MessageReply extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
