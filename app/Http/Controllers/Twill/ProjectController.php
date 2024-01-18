<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ProjectController extends BaseModuleController
{
    protected $moduleName = 'projects';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->enableReorder();
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Medias::make()->name('cover')->label('Cover image')
        );

        $form->add(
            Medias::make()->name('share')->label('Share image')
        );

        $form->add(
            Input::make()->name('year')->label('Year')
        );

        $form->add(
            Input::make()->name('client')->label('Client')
        );

        $form->add(
            Input::make()->name('company')->label('Company')
        );

        $form->add(
            Input::make()->name('description')->label('Description')->type('textarea')
        );

        $form->add(
            Input::make()->name('type')->label('Type')
        );

        $form->add(
            Input::make()->name('role')->label('Role')->type('textarea')
        );

        $form->add(
            Input::make()->name('process')->label('Process')->type('textarea')
        );

        $form->add(
            Wysiwyg::make()->name('tools')->label('Tools')
        );

        $form->add(
            Medias::make()->name('images')->label('Images')->max(10)
        );

        $form->add(
            Input::make()->name('link_primary')->label('Primary Link')
        );

        $form->add(
            Input::make()->name('link_primary_label')->label('Primary link label')
        );

        $form->add(
            Input::make()->name('link_secondary')->label('Secondary Link')
        );

        $form->add(
            Input::make()->name('link_secondary_label')->label('Secondary link label')
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }
}
