<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Columns;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Files;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class WorkController extends BaseModuleController
{
    protected $moduleName = 'works';

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->enableReorder();
        $this->setPermalinkBase('work');
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Columns::make()
                ->left([
                    Medias::make()->name('feature')->label('Feature Image'),
                ])
                ->right([
                    Files::make()->name('feature_video')->label('Feature Video'),
                ]),
        );

        $form->add(
            Columns::make()
                ->left([
                    Medias::make()->name('grid')->label('Grid Image'),
                ])
                ->right([
                    Files::make()->name('grid_video')->label('Grid Video'),
                ]),
        );

        $form->add(
            BlockEditor::make()
        );

        return $form;
    }

    public function getSideFieldsets(TwillModelContract $model): Form
    {
        $form = Form::make();

        $options = ['bold',
            'italic',
            ['list' => 'bullet'],
            ['list' => 'ordered'],
            [ 'script' => 'super' ],
            [ 'script' => 'sub' ],
            'link',
            'clean'
        ];

        $form->addFieldset(
            Fieldset::make()->title('Meta')->id('side_meta')->fields([
                Input::make()->name('year')->label('Year'),
                Input::make()->name('company')->label('Company'),
                Wysiwyg::make()->name('description')->label('Description')->toolbarOptions($options),
            ])
        );

        $form->addFieldset(
            Fieldset::make()->title('Social')->id('side_social')->fields([
                Medias::make()->name('social_preview')->label('Preview')
            ])
        );

        return $form;
    }

    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }
}
