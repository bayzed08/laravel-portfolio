@extends('Layout.app')
@section('content')
    <div id="mainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <table id="serviceTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Image</th>
                            <th class="th-sm">Name</th>
                            <th class="th-sm">Description</th>
                            <th class="th-sm">Delete</th>
                            <th class="th-sm">Edit</th>
                        </tr>
                    </thead>
                    <tbody id="serviceTableBody">
                        {{-- <tr>
                            <th class="th-sm"><img class="table-img" src="images/Knowledge.svg"></th>
                            <th class="th-sm">আইটি কোর্স</th>
                            <th class="th-sm">মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট</th>
                            <th class="th-sm"><a href=""><i class="fas fa-edit"></i></a></th>
                            <th class="th-sm"><a href=""><i class="fas fa-trash-alt"></i></a></th>
                        </tr> --}}
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div id="loaderDiv" class="container">
        <div class="row">
            <div class="text-center col-md-12 p-5">
                <img class="loading-icon" src="{{ asset('images/loader2.gif') }}" alt="" style="">
            </div>
        </div>
    </div>
    <div id="wrongDiv" class="container d-none">
        <div class="row">
            <div class="text-center col-md-12 p-5">
                <h3>Something went wrong!</h3>
            </div>
        </div>
    </div>
    {{-- //modal --}}
    <div class="modal" tabindex="-1" role="dialog" id="deleteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Data ??</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure??</p>
                    <h3 id="servicedeleteID"></h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script>
        getServiceData();
    </script>
@endsection
