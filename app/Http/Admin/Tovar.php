<?php

namespace App\Http\Admin;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Facades\Display as AdminDisplay;
use SleepingOwl\Admin\Facades\TableColumn as AdminColumn;
use SleepingOwl\Admin\Facades\Form as AdminForm;
use SleepingOwl\Admin\Facades\FormElement as AdminFormElement;

/**
 * Class Tovar
 *
 * @property \App\Tovar $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Tovar extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa fa-lightbulb-o');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        return AdminDisplay::datatablesAsync()
            ->setHtmlAttribute('class', 'table-primary d-flex flex-wrap')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::text('name', 'Name')->setWidth('100px'),
                AdminColumn::text('category', 'Category')->setWidth('100px'),
                AdminColumn::text('slug', 'Slug')->setWidth('100px'),
                AdminColumn::text('price', 'Price')->setWidth('50px'),
                AdminColumn::text('image', 'Image')->setWidth('100px'),
                AdminColumn::text('description', 'Description')

            )
            ->setOrder([1, 'ASC'])
            ->paginate(20)
        ;
    }

    /**
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     */
    public function onEdit($id = null, $payload = [])
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', 'Name')->required(),
                AdminFormElement::select('category', 'Категория')->setModelForOptions('\App\Category')->setDisplay('name'),
                AdminFormElement::text('slug', 'Slug'),
                AdminFormElement::number('price', 'Price'),
                AdminFormElement::image('image', 'Image')->mutateValue(function ($value){
                    return \Illuminate\Support\Str::start($value, '/');
                }),
                AdminFormElement::textarea('description', 'Description')
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate($payload = [])
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @return bool
     */
    public function isDeletable( $model)
    {
        return true;
    }
}