@twillBlockTitle('Description List')
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

<x-twill::repeater
    type="description_list_item"
/>
