@twillRepeaterTitle('Teaser Item')

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

<x-twill::browser
    label="Link"
    :max="1"
    name="link"
    module-name="pages"
/>

<x-twill::input
    name="link_text"
    label="Link text"
/>
