@twillBlockTitle('Section List')
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

<x-twill::wysiwyg
    name="text"
    label="Text"
    placeholder="Text"
    :toolbar-options="[
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        [ 'script' => 'super' ],
        [ 'script' => 'sub' ],
        'link',
        'clean'
    ]"
    :edit-source="true"
/>

<x-twill::repeater
    type="section_list_item"
/>
