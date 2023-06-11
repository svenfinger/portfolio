@twillBlockTitle('Headline + Text')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    name="title"
    label="Title"
/>

<x-twill::select
    name="visual_tag"
    label="Visual Tag"
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
        ]
    ]"
/>

<x-twill::select
    name="tag"
    label="Tag"
    :default="0"
    :options="[
        [
            'value' => 0,
            'label' => 'Default'
        ],
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
