@twillRepeaterTitle('Description List Item')

<x-twill::input
    name="label"
    label="Label"
/>

<x-twill::wysiwyg
    name="value"
    label="Value"
    :toolbar-options="[
        'bold',
        'link',
        'clean'
    ]"
    :edit-source="true"
/>
