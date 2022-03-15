@extends('layout.master')

@section('breadcrumbs')
<div class="row page-titles">
	<div class="col-md-6 col-8 align-self-center">
		<h3 class="text-themecolor m-b-0 m-t-0">Template de email</h3>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item active">Editar template de email</li>
		</ol>
	</div>
</div>
@stop

@section('content')

<style>
	.text_edit {
		width: 500px;
		height: 300px;
		resize: none;
	}

	#view_text {
		width: 500px;
	}
</style>
<!-- Row -->
<div id="email-templates">
	<template-edit id="{{$id}}"> </template-edit>
</div>
<!-- Row -->

<script>
	window.routes = {
		list: "{{route('EmailTemplates')}}",
		get: "{{route('EmailTemplate', $id)}}",
		edit: "{{route('EmailTemplateEdit', $id)}}",
		update: "{{route('EmailTemplateUpdate')}}",
		delete: "{{route('EmailTemplateDelete', $id)}}",
		test: "{{route('EmailTemplateTestApi')}}",
		validate: "{{route('EmailTemplateValidateApi')}}"
	}
</script>

<script src="/js/lang.trans/detail"> </script>
<script src="/js/lang/email_template"> </script>
<script src="{{asset('vendor/codificar/email-templates/js/email-templates.vue.js')}}"></script>


@stop