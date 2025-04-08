@twillBlockTitle('Editor')
@twillBlockIcon('editor')
@twillBlockGroup('app')

<x-twill::wysiwyg
    name="editor"
    label="Editor"
    :toolbar-options="[
        ['header' => [1, 2, 3]],
        'bold',
        'italic',
        'strike',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        'link'
    ]"
    :edit-source="true"
/>
