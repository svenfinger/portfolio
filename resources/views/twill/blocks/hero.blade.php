@twillBlockTitle('Hero')
@twillBlockIcon('text')
@twillBlockGroup('app')

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

<x-twill::wysiwyg
    name="sidenote"
    label="Sidenote"
    placeholder="Sidenote"
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

<x-twill::browser
    label="Primary Button Link"
    :max="1"
    name="primary_button_link"
    module-name="pages"
/>

<x-twill::input
    name="primary_button_label"
    label="Primary button label"
/>

<x-twill::browser
    label="Secondary Button Link"
    :max="1"
    name="secondary_button_link"
    module-name="pages"
/>

<x-twill::input
    name="secondary_button_label"
    label="Secondary button label"
/>
