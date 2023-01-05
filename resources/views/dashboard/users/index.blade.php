@extends('dashboard.layouts.layout')

@section('body')
    <div class=" container-fluid">
        <div class="card">
            <div class=" card-header">
                <i class="fa fa-align-justify"></i> Striped Table
            </div>
            <div class=" card-block">
                <table class=" table table-striped" id="table_id">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Data registered</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>karim gouda</td>
                            <td>2020/1/1</td>
                            <td>Staff</td>
                            <td>
                                <span class=" tag tag-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>mohamed gouda</td>
                            <td>2018/1/1</td>
                            <td>Staff</td>
                            <td>
                                <span class=" tag tag-danger">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>ramy</td>
                            <td>2015/1/1</td>
                            <td>Staff</td>
                            <td>
                                <span class=" tag tag-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td> ziyad</td>
                            <td>2013/1/1</td>
                            <td>Staff</td>
                            <td>
                                <span class=" tag tag-success">Active</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
