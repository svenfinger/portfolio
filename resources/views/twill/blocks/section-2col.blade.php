@twillBlockTitle('Section 2 Columns')
@twillBlockIcon('revision-compare')
@twillBlockGroup('app')

<x-twill::select
    name="space_top"
    label="Space Top"
    :required="true"
    default="large"
    :options="[
        [
            'value' => 'none',
            'label' => 'None'
        ],
        [
            'value' => 'medium',
            'label' => 'Medium'
        ],
        [
            'value' => 'large',
            'label' => 'Large'
        ],
    ]"
/>

<x-twill::select
    name="space_bottom"
    label="Space Bottom"
    :required="true"
    default="large"
    :options="[
        [
            'value' => 'none',
            'label' => 'None'
        ],
        [
            'value' => 'medium',
            'label' => 'Medium'
        ],
        [
            'value' => 'large',
            'label' => 'Large'
        ],
    ]"
/>

<x-twill::block-editor name="left"/>
<x-twill::block-editor name="right"/>
