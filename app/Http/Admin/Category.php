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
 * Class Category
 *
 * @property \App\Category $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Category extends Section implements Initializable
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
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::text('name', 'Name'),
                AdminColumn::text('slug', 'Slug'),
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
            AdminFormElement::text('slug', 'Slug'),

        ]);
        $name = AdminFormElement::text('name', 'Name');
        if(empty('slug')){
            AdminFormElement::text($name, 'Slug');
        }

    }

    /**
     * @return FormInterface
     */
    public function onCreate($payload = [])
    {
        if(empty('slug')){
            
        }
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