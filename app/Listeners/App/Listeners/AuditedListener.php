<?php
/**
 * Created by shalvah
 * Date: 16-Apr-18
 * Time: 22:50
 */

namespace App\Listeners;


use OwenIt\Auditing\Events\Audited;
use Pusher\Laravel\Facades\Pusher;

class AuditedListener
{
    public function handle(Audited $event)
    {
        $audit = $event->audit->toArray();
        $audit['user_name'] = $event->audit->user->name;
        Pusher::trigger('audits', 'new-audit', ['audit' => $audit]);
    }
}
