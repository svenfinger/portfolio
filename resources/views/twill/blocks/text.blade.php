@twillBlockTitle('Text')
@twillBlockIcon('text')
@twillBlockGroup('text')

<x-twill::select
    name="size"
    label="Size"
    :required="true"
    default="medium"
    :options="[
        [
            'value' => 'small',
            'label' => 'Small'
        ],
        [
            'value' => 'medium',
            'label' => 'Medium'
        ],
        [
            'value' => 'large',
            'label' => 'Large'
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
