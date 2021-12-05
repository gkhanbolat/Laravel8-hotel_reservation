@extends('layouts.admin')

@section('title','Category List')

@section('content')

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Parent</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datalist as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->parent_id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->status}}</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>

@endsection

