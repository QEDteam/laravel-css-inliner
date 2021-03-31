<?php

namespace Qed\LaravelCssInliner\Listeners;

use Illuminate\Mail\Events\MessageSending;
use Pelago\Emogrifier\CssInliner;

class FormatEmailContent
{
    /**
     * Handle message sending event - format email html to inline css
     *
     * @param MessageSending $event Swift Mailer Event
     *
     * @return void
     */
    public function handle(MessageSending $event)
    {
        // If css format is enabled in config, set style inline
        if (config('cssinliner.format_css') == true) {
            $visualHtml = CssInliner::fromHtml($event->message->getBody())
                                    ->inlineCss()->render();

            $event->message->setBody($visualHtml);
        }
    }
}
