@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex bd-highlight mb-4">
        <div class="p-2 w-100 bd-highlight">
            <br>
            <h2>User Data</h2>
        </div>
        <div class="p-2 flex-shrink-0 bd-highlight">
            <button class="btn btn-success" id="btn-add">
                Add User
            </button>
        </div>
         <div class="p-2 flex-shrink-0 bd-highlight">

           
                <a href="/postcode" class="btn btn-success" >View Postcode</a> 
        </div>
    </div>

    <div>
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Postcode</th>
                    <th>State</th>
                </tr>
            </thead>

            <tbody id="todos-list" name="todos-list">
                @foreach ($todo as $data)
                <tr id="todo{{$data->id}}">
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->dob}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->postcode}}</td>
                    <td>{{$data->state_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


        <div class="modal fade" id="formModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="formModalLabel">User Data</h4>
                    </div>
                    <div class="modal-body">
                        <form id="myForm" name="myForm" class="form-horizontal" novalidate="">

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter name" value="">
                            </div>

                            <div class="form-group">
                                <label>Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob"
                                        placeholder="Enter date" value="">
                            </div>

                             <div class="form-group">
                                <label>Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Enter address" value="">
                            </div>

                             <div class="form-group">
                                <label>Postcode</label>
                                    <input type="text" class="form-control" id="postcode" name="postcode"
                                        placeholder="Enter postcode" value="">
                            </div>

                             <div class="form-group">
                                <label>State</label>
                                    <input type="text" class="form-control" id="state_id" name="state_id"
                                        placeholder="Enter state" value="">
                            </div>



                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes
                        </button>
                        <input type="hidden" id="todo_id" name="todo_id" value="0">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection