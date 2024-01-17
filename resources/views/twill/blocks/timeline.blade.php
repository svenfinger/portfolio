@twillBlockTitle('Timeline')
@twillBlockIcon('text-2col')
@twillBlockGroup('app')

<x-twill::select
    name="layout"
    label="Layout"
    :required="true"
    :default="1"
    :options="[
        [
            'value' => 1,
            'label' => 'Default'
        ],
        [
            'value' => 2,
            'label' => 'Narrow'
        ]
    ]"
/>

<x-twill::input
    name="title"
    label="Title"
/>

<x-twill::input
    name="primary_button_link"
    label="Primary button link"
/>

<x-twill::input
    name="primary_button_label"
    label="Primary button label"
/>

<x-twill::input
    name="secondary_button_link"
    label="Secondary button link"
/>

<x-twill::input
    name="secondary_button_label"
    label="Secondary button label"
/>

<x-twill::repeater
    type="timeline_item"
/>
