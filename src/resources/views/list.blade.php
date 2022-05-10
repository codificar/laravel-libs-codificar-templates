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
		<button onclick="location.href='{{ URL::Route('EmailTemplateEdit', 0) }}'" class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> {{trans('templates::email_template.new')}}</button>
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
						<th>{{ trans('templates::email_template.id') }}</th>
						<th>{{ trans('templates::email_template.key') }}</th>
						<th>{{ trans('templates::email_template.copy_emails') }}</th>
						<th>{{ trans('templates::email_template.actions') }}</th>
					</tr>
					@foreach ($emailtemplate as $emailtemplate)
					<tr>
					@php
						$notUsedOpen = $emailtemplate->is_used ? '' : '<abbr title="'.trans('templates::email_template.not_used').'">';
						$notUsedClose = $emailtemplate->is_used ? '' : '</abbr>'
					@endphp
						<td>{{ $emailtemplate->id }}</td>
						<td>{!! $notUsedOpen . $emailtemplate->key . $notUsedClose !!}</td>
						<td>{{ $emailtemplate->copy_emails }}</td>
						<td>
							<form action="email_template/test" method="POST" class="form form-inline">
							<input type="hidden" name="id" value="{{$emailtemplate->id}}">
								<button type="submit" class="btn btn-warning mr-2" @if(!$emailtemplate->is_used) disabled @endif>{{trans('templates::email_template.test')}}</button>
							</form>
							
							<a  href="{{ URL::Route('EmailTemplatePreview', $emailtemplate->id) }}" target='_blank' class="btn btn-info mr-2">{{trans('templates::email_template.preview')}}</a>

							@if(AuthUtils::hasPermissionByUrl('EmailTemplateEdit'))
							<a href="{{ URL::Route('EmailTemplateEdit', $emailtemplate->id) }}" class="btn btn-success mr-2">{{trans('templates::email_template.edit')}}</a>
							@endif
							@if(AuthUtils::hasPermissionByUrl('EmailTemplateDelete'))
							<a href="{{ URL::Route('EmailTemplateDelete', $emailtemplate->id) }}" class="btn btn-danger">{{trans('templates::email_template.delete')}}</a>
							@endif
							
							
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="/js/lang.trans/detail"> </script>
<script src="/js/lang/email_template"> </script>
@stop