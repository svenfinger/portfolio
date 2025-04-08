@twillBlockTitle('List')
@twillBlockIcon('b-checklist')
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

<x-twill::repeater
    type="list_item"
/>
