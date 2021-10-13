@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex bd-highlight mb-4">
        <div class="p-2 w-100 bd-highlight">
            <br>
            <h2>Postcode</h2>
        </div>
        <div class="p-2 flex-shrink-0 bd-highlight">

           
                <a href="/todo" class="btn btn-success" >User Data</a> 
        </div>
       
    </div>

    <div>
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Postcode</th>
                    <th>State</th>
                </tr>
            </thead>

            <tbody id="pcodes-list" name="pcodes-list">
                @foreach ($pcode as $data)
                <tr id="pcode{{$data->id}}">
                    <td>{{$data->id}}</td>
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
                        <h4 class="modal-title" id="formModalLabel">Postcode</h4>
                    </div>
                    <div class="modal-body">
                        <form id="postcodeForm" name="postcodeForm" class="form-horizontal" novalidate="">

                            <div class="form-group">
                                <label>Postcode</label>
                                <input type="text" class="form-control" id="name" name="postcode"
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
                        <input type="hidden" id="pcode_id" name="pcode_id" value="0">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection