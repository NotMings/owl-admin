<?php

namespace Slowlyo\OwlAdmin\Traits;

use Slowlyo\OwlAdmin\Renderers\Page;
use Slowlyo\OwlAdmin\Renderers\Form;
use Slowlyo\OwlAdmin\Renderers\Button;
use Slowlyo\OwlAdmin\Renderers\Dialog;
use Slowlyo\OwlAdmin\Renderers\CRUDTable;
use Slowlyo\OwlAdmin\Renderers\Operation;
use Slowlyo\OwlAdmin\Renderers\LinkAction;
use Slowlyo\OwlAdmin\Renderers\AjaxAction;
use Slowlyo\OwlAdmin\Renderers\OtherAction;
use Slowlyo\OwlAdmin\Renderers\DialogAction;

trait PageElement
{
    /**
     * 基础页面
     *
     * @return Page
     */
    protected function basePage(): Page
    {
        return Page::make()->className('m:overflow-auto');
    }

    /**
     * 返回列表按钮
     *
     * @return OtherAction|null
     */
    protected function backButton(): OtherAction|null
    {
        return OtherAction::make()
            ->label(__('admin.back'))
            ->icon('fa-solid fa-chevron-left')
            ->level('primary')
            ->onClick('window.history.back()');
    }

    /**
     * 批量删除按钮
     *
     * @return AjaxAction
     */
    protected function bulkDeleteButton(): AjaxAction
    {
        return AjaxAction::make()
            ->api($this->getBulkDeletePath())
            ->icon('fa-solid fa-trash-can')
            ->label(__('admin.delete'))
            ->confirmText(__('admin.confirm_delete'));
    }

    /**
     * 新增按钮
     *
     * @param bool $dialog
     * @param string $dialogSize
     *
     * @return DialogAction|LinkAction
     */
    protected function createButton(bool $dialog = false, string $dialogSize = ''): DialogAction|LinkAction
    {
        $form = $this->form(false)->api($this->getStorePath());

        if ($dialog) {
            $button = DialogAction::make()->dialog(
                Dialog::make()->title(__('admin.create'))->body($form)->size($dialogSize)
            );
        } else {
            $button = LinkAction::make()->link($this->getCreatePath());
        }

        return $button->label(__('admin.create'))->icon('fa fa-add')->level('primary');
    }

    /**
     * 行编辑按钮
     *
     * @param bool $dialog
     * @param string $dialogSize
     *
     * @return DialogAction|LinkAction
     */
    protected function rowEditButton(bool $dialog = false, string $dialogSize = ''): DialogAction|LinkAction
    {
        if ($dialog) {
            $form = $this->form(true)->api($this->getUpdatePath())->initApi($this->getEditGetDataPath());

            $button = DialogAction::make()->dialog(
                Dialog::make()->title(__('admin.edit'))->body($form)->size($dialogSize)
            );
        } else {
            $button = LinkAction::make()->link($this->getEditPath());
        }

        return $button->label(__('admin.edit'))->icon('fa-regular fa-pen-to-square')->level('link');
    }

    /**
     * 行详情按钮
     *
     * @param bool $dialog
     * @param string $dialogSize
     *
     * @return DialogAction|LinkAction
     */
    protected function rowShowButton(bool $dialog = false, string $dialogSize = ''): DialogAction|LinkAction
    {
        if ($dialog) {
            $button = DialogAction::make()->dialog(
                Dialog::make()->title(__('admin.show'))->body($this->detail('$id'))->size($dialogSize)
            );
        } else {
            $button = LinkAction::make()->link($this->getShowPath());
        }

        return $button->label(__('admin.show'))->icon('fa-regular fa-eye')->level('link');
    }

    /**
     * 行删除按钮
     *
     * @return AjaxAction
     */
    protected function rowDeleteButton(): AjaxAction
    {
        return AjaxAction::make()
            ->label(__('admin.delete'))
            ->icon('fa-regular fa-trash-can')
            ->level('link')
            ->actionType('ajax')
            ->confirmText(__('admin.confirm_delete'))
            ->api($this->getDeletePath());
    }

    /**
     * 操作列
     *
     * @param bool $dialog
     * @param string $dialogSize
     *
     * @return Operation
     */
    protected function rowActions(bool $dialog = false, string $dialogSize = ''): Operation
    {
        return Operation::make()->label(__('admin.actions'))->buttons([
            $this->rowShowButton($dialog, $dialogSize),
            $this->rowEditButton($dialog, $dialogSize),
            $this->rowDeleteButton(),
        ]);
    }

    protected function rowActionsOnlyEditAndDelete($dialog = false, string $dialogSize = ''): Operation
    {
        return Operation::make()->label(__('admin.actions'))->buttons([
            $this->rowEditButton($dialog, $dialogSize),
            $this->rowDeleteButton(),
        ]);
    }

    /**
     * 基础筛选器
     *
     * @return Form
     */
    protected function baseFilter(): Form
    {
        return Form::make()
            ->panelClassName('base-filter')
            ->title('')
            ->actions([
                Button::make()->label(__('admin.reset'))->actionType('clear-and-submit'),
                amis('submit')->label(__('admin.search'))->level('primary'),
            ]);
    }

    /**
     * @return CRUDTable
     */
    protected function baseCRUD(): CRUDTable
    {
        return CRUDTable::make()
            ->perPage(20)
            ->affixHeader(false)
            ->filterTogglable()
            ->filterDefaultVisible(false)
            ->set('primaryField', $this->service->primaryKey())
            ->api($this->getListGetDataPath())
            ->bulkActions([$this->bulkDeleteButton()])
            ->perPageAvailable([10, 20, 30, 50, 100, 200])
            ->footerToolbar(['switch-per-page', 'statistics', 'pagination'])
            ->headerToolbar([
                $this->createButton(),
                ...$this->baseHeaderToolBar(),
            ]);
    }

    protected function baseHeaderToolBar()
    {
        return [
            'bulkActions',
            amis('reload')->align('right'),
            amis('filter-toggler')->align('right'),
        ];
    }

    /**
     * 基础表单
     *
     * @return Form
     */
    protected function baseForm(): Form
    {
        return Form::make()
            ->panelClassName('px-48 m:px-0')
            ->title(' ')
            ->mode('horizontal')
            ->redirect($this->getListPath());
    }

    /**
     * @return Form
     */
    protected function baseDetail(): Form
    {
        return Form::make()
            ->panelClassName('px-48 m:px-0')
            ->title(' ')
            ->mode('horizontal')
            ->actions([])
            ->initApi($this->getShowGetDataPath());
    }

    /**
     * 基础列表
     *
     * @param $crud
     *
     * @return Page
     */
    protected function baseList($crud): Page
    {
        return $this->basePage()->body($crud);
    }

    /**
     * 导出按钮
     *
     * @return \Slowlyo\OwlAdmin\Renderers\Alert|\Slowlyo\OwlAdmin\Renderers\DropdownButton
     */
    protected function exportAction($disableSelectedItem = false)
    {
        if (!class_exists('\Maatwebsite\Excel\Excel')) {
            return amisMake()
                ->Alert()
                ->level('warning')
                ->body(__('admin.export.please_install_laravel_excel'))
                ->showIcon(true)
                ->showCloseButton(true);
        }

        $primaryKey = $this->service->primaryKey();

        $downloadPath   = '/' . admin_url('_download_export', true);
        $exportPath     = $this->getExportPath();
        $pageNoData     = __('admin.export.page_no_data');
        $selectedNoData = __('admin.export.selected_rows_no_data');
        $event          = fn($script) => ['click' => ['actions' => [['actionType' => 'custom', 'script' => $script]]]];
        $doAction       = <<<JS
doAction([
    { actionType: "ajax", args: { api: { url: url.toString(), method: "get" } } },
    {
        actionType: "custom",
        expression: "\${event.data.responseResult.responseStatus === 0}",
        script: "window.open('{$downloadPath}?path='+event.data.responseResult.responseData.path)"
    }
])
JS;
        $buttons        = [
            amisMake()->VanillaAction()->label(__('admin.export.all'))->onEvent(
                $event(<<<JS
let data = event.data.__super.__super
let params = Object.keys(data).filter(key => key !== "page" && key !== "__super").reduce((obj, key) => {
    obj[key] = data[key];
    return obj;
}, {})
let url = new URL("{$exportPath}", window.location.origin)
Object.keys(params).forEach(key => url.searchParams.append(key, params[key]))
{$doAction}
JS

                )
            ),
            amisMake()->VanillaAction()->label(__('admin.export.page'))->onEvent(
                $event(<<<JS
let ids = event.data.items.map(item => item.{$primaryKey})
if(ids.length === 0) { return doAction({ actionType: "toast", args: { msgType: "warning", msg: "{$pageNoData}" } }) }
let url = new URL("{$exportPath}", window.location.origin)
url.searchParams.append("_ids", ids.join(","))
{$doAction}
JS
                )
            ),
        ];

        if (!$disableSelectedItem) {
            $buttons[] = amisMake()->VanillaAction()->label(__('admin.export.selected_rows'))->onEvent(
                $event(<<<JS
let ids = event.data.selectedItems.map(item => item.{$primaryKey})
if(ids.length === 0) { return doAction({ actionType: "toast", args: { msgType: "warning", msg: "{$selectedNoData}" } }) }
let url = new URL("{$exportPath}", window.location.origin)
url.searchParams.append("_ids", ids.join(","))
{$doAction}
JS
                )
            );
        }

        return amisMake()
            ->DropdownButton()
            ->label(__('admin.export.title'))
            ->set('icon', 'fa-solid fa-download')
            ->buttons($buttons)
            ->align('right')
            ->closeOnClick(true);
    }
}
