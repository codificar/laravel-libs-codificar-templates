@extends('layout.master')


@section('breadcrumbs')
<div class="row page-titles">
	<div class="col-md-6 col-8 align-self-center">
		<h3 class="text-themecolor m-b-0 m-t-0">Template de email</h3>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item active">Listar templates de email</li>
		</ol>
	</div>
	<div class="col-md-6 col-4 align-self-center">
		@if(AuthUtils::hasPermissionByUrl('/admin/email_template/edit/0'))
		<button onclick="location.href='{{ URL::Route('EmailTemplateEdit', 0) }}'" class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> {{trans('email_template.new_email')}}</button>
		@endif
	</div>
</div>
@stop


@section('content')

<div class="col-12">
	<div class="card">
		<div class="card-block">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<th>{{ trans('email_template.id') }}</th>
						<th>{{ trans('email_template.key') }}</th>
						<th>{{ trans('email_template.copy_emails') }}</th>
						<th>{{ trans('email_template.actions') }}</th>
					</tr>
					@foreach ($emailtemplate as $emailtemplate)
					<tr>
					@php
						$notUsedOpen = $emailtemplate->is_used ? '' : '<abbr title="'.trans('email_template.not_used').'">';
						$notUsedClose = $emailtemplate->is_used ? '' : '</abbr>'
					@endphp
						<td>{{ $emailtemplate->id }}</td>
						<td>{!! $notUsedOpen . $emailtemplate->key . $notUsedClose !!}</td>
						<td>{{ $emailtemplate->copy_emails }}</td>
						<td>
							<form action="email_template/test" method="POST" class="form form-inline">
							<input type="hidden" name="id" value="{{$emailtemplate->id}}">
								<button type="submit" class="btn btn-warning mr-2" @if(!$emailtemplate->is_used) disabled @endif>{{trans('email_template.test')}}</button>
								@if(AuthUtils::hasPermissionByUrl('EmailTemplateEdit'))
								<a id="edit" href="{{ URL::Route('EmailTemplateEdit', $emailtemplate->id) }}" class="btn btn-success mr-2">{{trans('email_template.edit')}}</a>
								@endif
								@if(AuthUtils::hasPermissionByUrl('EmailTemplateDelete'))
								<a id="delete" href="{{ URL::Route('EmailTemplateDelete', $emailtemplate->id) }}" class="btn btn-danger">{{trans('email_template.delete')}}</a>
								@endif
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop