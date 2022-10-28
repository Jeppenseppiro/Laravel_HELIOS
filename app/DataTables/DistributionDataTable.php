<?php

namespace App\DataTables;

use App\Models\Distribution;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\Route;

class DistributionDataTable extends DataTable
{
  // protected $actions = ['myCustomAction'];
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
      ->addColumn('action', function ($distribution) {
        return
          '<a href="' . route("database.index") . '/distribution/' . $distribution->uuid . '" id="' . $distribution->uuid . '" class="button-success bg-blue-500 text-white p-1"><i class="fas fa-info-circle"></i></a>
          <a href="#" id="' . $distribution->uuid . '" class="button-danger text-white p-1"><i class="fas fa-trash"></i></a>';
      });
  }

  /**
   * Get query source of dataTable.
   *
   * @param \App\Models\PrimaryDistribution $model
   * @return \Illuminate\Database\Eloquent\Builder
   */
  public function query(Distribution $model)
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
      ->setTableId('distributions-table')
      ->columns($this->getColumns())
      ->minifiedAjax()
      ->orderBy(1)
      ->addTableClass('display row-border')
      ->dom('Bfrtip')
      ->parameters([
        'buttons' => [
          'dom' => [
            'button' => [
              'tag' => 'button',
              'className' => ''
            ]
          ],
          'buttons' => [
            [
              'extend' => 'print',
              'text' => 'PRINT',
              'className' => 'inline-block 
              p-2 
              border-2 
              border-blue-600 
              text-blue-600 
              font-medium 
              text-xs 
              leading-tight 
              uppercase 
              rounded 
              hover:bg-black 
              hover:bg-opacity-5 
              focus:outline-none 
              focus:ring-0 transition 
              duration-150 ease-in-out',
              'exportOptions' => [
                'columns' => 'th:not(:first-child)'
              ]
            ],
            [
              'extend' => 'copy',
              'text' => 'COPY',
              'className' => 'inline-block 
              p-2 
              border-2 
              border-blue-600 
              text-blue-600 
              font-medium 
              text-xs 
              leading-tight 
              uppercase 
              rounded 
              hover:bg-black 
              hover:bg-opacity-5 
              focus:outline-none 
              focus:ring-0 transition 
              duration-150 ease-in-out',
              'exportOptions' => [
                'columns' => 'th:not(:first-child)'
              ]
            ],
          ]
        ],
        //['print', 'pdf', 'excel', 'csv', 'copy']
      ]);
  }

  public function myCustomAction()
  {
    //...your code here.
  }

  /**
   * Get columns.
   *
   * @return array
   */
  protected function getColumns()
  {
    return [
      'action',
      'distribution_id',
      'distribution_type',
      'distribution_latitude',
      'distribution_longitude',
    ];
  }

  /**
   * Get filename for export.
   *
   * @return string
   */
  protected function filename(): string
  {
    return 'Distribution_' . date('YmdHis');
  }
}
