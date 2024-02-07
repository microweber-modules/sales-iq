<?php

event_bind('mw.front', function () {

    $widgetUrl = get_option('widget_url', 'sales-iq');
    $widgetUrl = trim($widgetUrl);

    // check url is valid
    if (filter_var($widgetUrl, FILTER_VALIDATE_URL)) {

        $widgetcCode = '';
        $parseWidgetUrl = parse_url($widgetUrl);
        $parseWidgetQuery = [];
        if (isset($parseWidgetUrl['query'])) {
            parse_str($parseWidgetUrl['query'], $parseWidgetQuery);
        }
        if (isset($parseWidgetQuery['widgetcode'])) {
            $widgetcCode = $parseWidgetQuery['widgetcode'];
        }

        if (!empty($widgetcCode)) {
            $htmlCode = view('microweber-module-sales-iq::chat-widget', ['widgetcCode' => $widgetcCode])->render();
            mw()->template->foot($htmlCode);
        }
    }

});
