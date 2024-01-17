@twillBlockTitle('Intro')
@twillBlockIcon('image')
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

<x-twill::medias
    name="image"
    label="Image"
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
