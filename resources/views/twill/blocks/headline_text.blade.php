@twillBlockTitle('Headline Text')
@twillBlockIcon('editor')
@twillBlockGroup('app')

<x-twill::input
    name="title"
    label="Title"
/>

<x-twill::select
    name="size"
    label="Size"
    :required="true"
    :default="1"
    :options="[
        [
            'value' => 1,
            'label' => 'h1'
        ],
        [
            'value' => 2,
            'label' => 'h2'
        ],
        [
            'value' => 3,
            'label' => 'h3'
        ],
        [
            'value' => 4,
            'label' => 'h4'
        ]
    ]"
/>

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
