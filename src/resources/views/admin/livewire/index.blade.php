<div>

    <div class="d-flex justify-content-between">
        <div>
        <h2>{{_e('Zoho - Sales IQ')}}</h2>
        <p>
            {{_e('Integrate Zoho Sales IQ with your website.')}}
        </p>
        </div>
    </div>

    <div class="mb-3 mt-4 gap-3">


        <div class="card mt-4">
            <div class="card-body mb-4">
                <div>
                    <small class="live-edit-label"><?php _e("Widget Url"); ?></small>
                    <livewire:microweber-option::text optionKey="widget_url" optionGroup="sales-iq" module="sales-iq"  />
                </div>
            </div>
        </div>


    </div>

</div>
