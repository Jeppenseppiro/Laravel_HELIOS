@extends('app')

@section('title', 'Database')

@section('head')
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/dt/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css" />
  <style>
    .dataTables_length select {
      width: 100%;
    }

    .dataTables_filter input {
      width: 70%;
    }
  </style>
@endsection

@section('content')
  <div class="flex items-start bg-white p-3 shadow-md">
    <ul class="nav nav-tabs flex flex-col flex-wrap list-none border-b-0  mr-4" id="tabs-tabVertical" role="tablist">
      <li class="nav-item flex-grow text-center" role="presentation">
        <a href="#tabs-homeVertical"
          class="
            nav-link
            block
            font-medium
            text-xs
            leading-tight
            uppercase
            border-x-0 border-t-0 border-b-2 border-transparent
            px-6
            py-3
            my-2
            hover:border-transparent hover:bg-gray-100
            focus:border-transparent
            active"
          id="tabs-home-tabVertical" data-bs-toggle="pill" data-bs-target="#tabs-homeVertical" role="tab"
          aria-controls="tabs-homeVertical" aria-selected="true">Distribution</a>
      </li>
      <li class="nav-item flex-grow text-center" role="presentation">
        <a href="#tabs-profileVertical"
          class="
            nav-link
            block
            font-medium
            text-xs
            leading-tight
            uppercase
            border-x-0 border-t-0 border-b-2 border-transparent
            px-6
            py-3
            my-2
            hover:border-transparent hover:bg-gray-100
            focus:border-transparent"
          id="tabs-profile-tabVertical" data-bs-toggle="pill" data-bs-target="#tabs-profileVertical" role="tab"
          aria-controls="tabs-profileVertical" aria-selected="false">Users</a>
      </li>
      <li class="nav-item flex-grow text-center" role="presentation">
        <a href="#tabs-messagesVertical"
          class="
            nav-link
            block
            font-medium
            text-xs
            leading-tight
            uppercase
            border-x-0 border-t-0 border-b-2 border-transparent
            px-6
            py-3
            my-2
            hover:border-transparent hover:bg-gray-100
            focus:border-transparent"
          id="tabs-messages-tabVertical" data-bs-toggle="pill" data-bs-target="#tabs-messagesVertical" role="tab"
          aria-controls="tabs-messagesVertical" aria-selected="false">Messages</a>
      </li>
    </ul>
    <div class="tab-content w-full" id="tabs-tabContentVertical">
      <div class="tab-pane fade show active" id="tabs-homeVertical" role="tabpanel"
        aria-labelledby="tabs-home-tabVertical">
        <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">

                <div class="pl-4 pb-2 flex items-center justify-between">
                  {{-- <div class="hidden md:flex space-x-3 font-bold text-xl font-montserrat">
                    <div id="datatableButtons" class="font-montserrat text-white"></div>
                  </div>

                  <div class="hidden md:flex space-x-3 font-bold text-xl">
                    <button class="rounded-t-lg rounded-b-lg bg-purple-500 text-white px-2 py-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>
                    </button>
                  </div> --}}

                  <div class="hidden md:flex space-x-3 font-bold text-lg ">
                    <div id="datatableButtons" class="font-montserrat text-white"></div>
                  </div>


                  <div class="hidden md:flex space-x-3 font-bold text-lg font-poppins">
                    <a href="{{ route('database.distribution.create') }}"
                      class="rounded-none bg-blue-500 text-white px-2 py-1">
                      ADD
                    </a>
                  </div>

                </div>

                {{-- <table-primary-distribution-component /> --}}
                {!! $dataTable->table() !!}


              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade pt-3.5 break-normal" id="tabs-profileVertical" role="tabpanel"
        aria-labelledby="tabs-profile-tabVertical">
        asd
      </div>
      <div class="tab-pane fade pt-3.5" id="tabs-messagesVertical" role="tabpanel"
        aria-labelledby="tabs-profile-tabVertical">
        Tab 3 content vertical
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js">
  </script>




  <script>
    // $(document).ready(function() {
    //   var dataTable = $('#distributions-table').DataTable({
    //     lengthMenu: [
    //       [10, 25, 50, -1],
    //       [10, 25, 50, 'All'],
    //     ],
    //     language: {
    //       "lengthMenu": "Show _MENU_",
    //     },
    //   });

    //   var buttons = new $.fn.dataTable.Buttons(dataTable, {
    //     buttons: [{
    //       extend: 'print',
    //       text: 'PRINT',
    //       className: '-pt-1 bg-purple-500',
    //       exportOptions: {
    //         columns: 'th:not(:last-child)'
    //       }
    //     }, ]
    //     buttons: [
    //       'copyHtml5',
    //       'excelHtml5',
    //       'csvHtml5',
    //       'pdfHtml5'
    //     ]
    //   }).container().appendTo($('#datatableButtons'));
    // });
  </script>
  {{ $dataTable->scripts() }}
@endsection
