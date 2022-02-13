<?php

namespace App\DataTables;

use App\Models\HomeContent;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class HomeContentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('head_image','<img class="img-thumbnail" src="{{$head_image}}" style="height: 75px; width: 75px;">')
            ->addColumn('action', 'dashboard.content.parts.action')
            ->rawColumns(['action','head_image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\HomeContent $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(HomeContent $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('home-content-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->lengthMenu(
                [
                    [10, 25, 50, -1],
                    ['10 صـفوف', '25 صـف', '50 صـف', 'كل الصـفوف']
                ])
            ->parameters([
                'language' => ['url' => '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json']
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('head_image')->title('الصوره'),
            Column::make('head_title')->title('عنوان الرائيسيه'),
            Column::make('action')->title('الاجرائات'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'HomeContent_' . date('YmdHis');
    }
}
