@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added companies</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            <th>@lang('quickadmin.companies.fields.name')</th>
                            <th>@lang('quickadmin.companies.fields.address')</th>
                            <th>@lang('quickadmin.companies.fields.logo')</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{$company->name}}</td>
                                <td>{{$company->address}}</td>
                                <td><img src={{asset(env('UPLOAD_PATH').'/thumb/' . $company->logo)}}/></td>
                                <td><a href="{{url('admin/companies/' . $company->id)}}"
                                       class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    <a href="{{url('admin/companies/' . $company->id . '/edit')}}"
                                       class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    {!! Form::open(array(
                                       'style' => 'display: inline-block;',
                                       'method' => 'DELETE',
                                       'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                       'route' => ['admin.companies.destroy', $company->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added Employees</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.name')</th>
                            <th>@lang('quickadmin.employees.fields.email')</th>
                            <th>@lang('quickadmin.employees.fields.company')</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->company->name}}</td>
                                <td><a href="{{url('admin/employees/' . $employee->id)}}"
                                       class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    <a href="{{url('admin/employees/' . $employee->id . '/edit')}}"
                                       class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    {!! Form::open(array(
                                       'style' => 'display: inline-block;',
                                       'method' => 'DELETE',
                                       'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                       'route' => ['admin.employees.destroy', $employee->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
