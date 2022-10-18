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
  <div class="flex items-start">
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
          aria-controls="tabs-profileVertical" aria-selected="false">Profile</a>
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
        <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab"
          role="tablist">
          <li class="nav-item text-center" role="presentation">
            <a href="#tabs-primary-distribution-line" data-mdb-ripple="true"
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
              id="tabs-primary-distribution-line-tab" data-bs-toggle="pill"
              data-bs-target="#tabs-primary-distribution-line" role="tab"
              aria-controls="tabs-primary-distribution-line" aria-selected="true">Primary Distribution Line</a>
          </li>
          <li class="nav-item text-center" role="presentation">
            <a href="#tabs-secondary-distribution-line" data-mdb-ripple="true"
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
              id="tabs-secondary-distribution-line-tab" data-bs-toggle="pill"
              data-bs-target="#tabs-secondary-distribution-line" role="tab"
              aria-controls="tabs-secondary-distribution-line" aria-selected="false">Secondary
              Distribution Line</a>
          </li>
          <li class="nav-item text-center" role="presentation">
            <a href="#tabs-distribution-transformer" data-mdb-ripple="true"
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
              id="tabs-distribution-transformer-tab" data-bs-toggle="pill" data-bs-target="#tabs-distribution-transformer"
              role="tab" aria-controls="tabs-distribution-transformer" aria-selected="false">Distribution
              Transformer</a>
          </li>
        </ul>
        <div class="tab-content" id="tabs-tabContent">
          <div class="tab-pane fade show active" id="tabs-primary-distribution-line" role="tabpanel"
            aria-labelledby="tabs-primary-distribution-line-tab">

            {{-- <table id="dataTable" class="display compact font-oswald">
              <thead>
                <tr>
                  <th>Line Segment ID</th>
                  <th>Bus ID</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>d</td>
                  <td>d</td>
                  <td>d</td>
                  <td>d</td>
                </tr>
              </tbody>
            </table> --}}
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

                      <div class="hidden md:flex space-x-3 font-bold text-xl ">
                        <div id="datatableButtons" class="font-montserrat text-white"></div>
                      </div>


                      <div class="hidden md:flex space-x-3 font-bold text-xl font-montserrat">
                        <a href="{{ route('database.distribution.create') }}"
                          class="rounded-t-lg rounded-b-lg bg-purple-500 text-white px-2 py-1">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                          </svg>
                        </a>
                      </div>

                    </div>

                    <table id="dataTable" class="display compact font-montserrat">
                      <thead class="border-b bg-gray-800">
                        <tr>
                          <th scope="col" class="text-sm font-medium text-white px-6 py-4">#</th>
                          <th scope="col" class="text-sm font-medium text-white px-6 py-4">First</th>
                          <th scope="col" class="text-sm font-medium text-white px-6 py-4">Last</th>
                          <th scope="col" class="text-sm font-medium text-white px-6 py-4">Handle</th>
                        </tr>
                      </thead class="border-b">
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="tabs-secondary-distribution-line" role="tabpanel"
            aria-labelledby="tabs-secondary-distribution-line-tab">
            Tab 2 content
          </div>
          <div class="tab-pane fade" id="tabs-distribution-transformer" role="tabpanel"
            aria-labelledby="tabs-distribution-transformer-tab">
            DISTRIBUTION
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
    $(document).ready(function() {
      var dataTable = $('#dataTable').DataTable({
        lengthMenu: [
          [10, 25, 50, -1],
          [10, 25, 50, 'All'],
        ],
        language: {
          "lengthMenu": "Show _MENU_",
        },
      });

      var buttons = new $.fn.dataTable.Buttons(dataTable, {
        buttons: [{
          extend: 'print',
          text: 'PRINT',
          className: '-pt-1 bg-purple-500',
          exportOptions: {
            columns: 'th:not(:last-child)'
          }
        }, ]
        /* buttons: [
          'copyHtml5',
          'excelHtml5',
          'csvHtml5',
          'pdfHtml5'
        ] */
      }).container().appendTo($('#datatableButtons'));
    });
  </script>
@endsection
