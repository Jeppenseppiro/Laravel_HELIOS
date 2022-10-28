<template>
  <table id="primarydistribution-table" class="display compact font-montserrat">
    <thead class="border-b bg-gray-800">
      <tr>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Distribution ID</th>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Distribution Type</th>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Latitude</th>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Longitude</th>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Description</th>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</template>

<script>
export default {
  created() {
    $(document).ready(function(){
      $('#dataTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "api/getPrimary",
        "columns": [
          {data: "distribution_id"},
          {data: "distribution_type"},
          {data: "distribution_latitude"},
          {data: "distribution_longitude"},
          {data: "distribution_description"},
          {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
      });
    });
  },
}
</script>