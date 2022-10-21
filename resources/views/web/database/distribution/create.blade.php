@extends('app')

@section('title', 'Create Distribution')

@section('content')


  <div>
    <form action="{{ route('database.distribution.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <table-distribution-component />
    </form>
  </div>

@endsection

@section('script')
  <script>
    // var vm = new Vue({
    //   el: '#app',
    // });
  </script>
@endsection
