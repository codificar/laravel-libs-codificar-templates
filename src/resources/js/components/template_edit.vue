<script>
import { LayoutPlugin, BTabs, BTab } from "bootstrap-vue";
import tinymce from "vue-tinymce-editor";
// import swal from "vue-sweetalert2";
import Swal from 'sweetalert2';
import axios from "axios";
export default {
	props: ['id',],
	data() {
		return {
			template: {
				sample: {}
			},
			routes: {},
			fields: [],
			jsonError: false,
			tinyPlugins: [
				"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
				"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
				"save table contextmenu directionality emoticons template paste textcolor fullpage"
			],
			protect : [
				/<\?php.*?\?>/g,  // Protect php code
				/{{.*}}/g
			],
			cleaup: false,
			tinyToolbar: "insert file undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
			tinyOptions: {
				theme: "modern",
				height: 300,
				convert_urls: false,
				link_assume_external_targets: false ,
				remove_script_host : false,
				valid_children: '+head[style]',
				extended_valid_elements: '+*[*]',
				valid_elements: '+*[*]',
			}
		}
	},
	components: {
		LayoutPlugin, BTabs, BTab, tinymce
	},
	methods: {
		submitForm() {
			axios.post(this.routes.update, this.template).then(response => {
				this.window.location.href = this.routes.list;
			}).catch(error => {
				this.alert('', this.joinErrors(error.response.data.errors), 'error');
			});
		},
		addNewField() {
			this.fields.push({
				field_name: "",
				field_value: ""
			});
		},
		removeField(index) {
			this.fields.splice(index, 1);
			this.convertToJson();
		},
		convertToJson() {
			let jsonFields = {};
			this.fields.forEach(field => {
				jsonFields[field.field_name] = field.field_value;
			});
			this.template.sample = JSON.stringify(jsonFields);
		},
		convertToForm() {
			this.jsonError = false;
			let jsonFields = null;
			try{
				jsonFields = JSON.parse(this.template.sample);
			} catch(e) {
				this.jsonError = true;
			}
			this.fields = [];
			for (const field_name in jsonFields) {
				if (jsonFields.hasOwnProperty(field_name)) {
					const field_value = jsonFields[field_name];
					this.fields.push({ field_name, field_value });
				}
			}
		},
		test() {
			axios.post(this.routes.test, {
				'id': this.template.id,
				'content': this.template.content,
				'sample': this.template.sample
			}).then(response => {
				if(response.data.success) {
					this.alert('OK');
				} else {
					this.alert('', response.data.message, 'error');
				}
			}).catch(error => {
				this.alert('', this.joinErrors(error.response.data.errors), 'error');
			});
		},
		validate() {
			axios.post(this.routes.validate, {
				'content': this.template.content,
				'sample': this.template.sample
			}).then(response => {
				if(response.data.success) {
					this.alert(response.data.message);
				} else {
					this.alert('', response.data.message, 'error');
				}
			}).catch(error => {

				this.alert('', this.joinErrors(error.response.data.errors), 'error');
			});
		},
		joinErrors(errors) {
			let string = '';
			for (let error in errors) {
				string += errors[error].join(';') + '\n';
			}
			return string;
		},
		alert(title, text, icon) {
			Swal.fire({title, text, icon});
		}
	},
	created() {
		this.routes = window.routes;
		this.window = window;
		axios.get(this.routes.get).then(response => {
			this.template = response.data;
			this.convertToForm();
		});
	},
	mounted() {
	}
}
</script>

<template>
	<div class="row">
	<div class="col-lg-12">
		<div class="card card-outline-info">
			<div class="card-header">
				<h4 class="m-b-0 text-white">Template</h4>
			</div>
			<div class="card-block">
				<form method="post" ref="email_form" id="basic-form" :action="routes.update" data-toggle="validator" enctype="multipart/form-data">
					<div class="form-body">
						<div class="row p-t-20">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">{{trans('email_template.new_key') }}</label>
									<input type="text" id="firstName" class="form-control" :placeholder="trans('email_template.new_key')" v-model="template.new_key">
									<small class="form-control-feedback"> {{trans('email_template.new_key_ex') }} </small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">{{trans('email_template.from') }}</label>
									<input type="text" class="form-control" id="from" name="from" :placeholder="trans('email_template.from')" v-model="template.from"><br>
									<small class="form-control-feedback"> {{trans('email_template.from_ex') }} </small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">{{trans('email_template.key') }} *</label>
									<input v-if="id==0" type="text" class="form-control" required id="key" name="key" :placeholder="trans('email_template.key')" v-model="template.key">
									<input v-else readonly type="text" class="form-control" id="key" :placeholder="trans('email_template.key')" name="key" v-model="template.key">
									<br>
									<small class="form-control-feedback"> {{trans('email_template.key_ex') }} </small>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">{{trans('email_template.copy_emails') }}</label>
									<input type="text" class="form-control" id="copy_emails" name="copy_emails" placeholder="Copy emails" v-model="template.copy_emails"><br>
									<small class="form-control-feedback">  </small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">{{trans('email_template.subject') }} *</label>
									<input type="text" class="form-control" required id="subject" name="subject" :placeholder="trans('email_template.subject')" v-model="template.subject"><br>
									<small class="form-control-feedback"> {{trans('email_template.subject_ex') }} </small>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-12">
								<b-tabs>
									<b-tab :title="trans('email_template.fields')">
										<div class="row">
											<div class="col-3">
												<p>{{trans('email_template.field_names')}}</p>
											</div>
											<div class="col-3">
												<p>{{trans('email_template.field_values')}}</p>
											</div>
										</div>
										<div class="row" v-for="(field, index) in fields" v-bind:key="index">
											<div class="col-5 col-lg-3">
												<input type="text" name="names[]" v-model="field.field_name" @blur="convertToJson" class="form-control" required>
											</div>
											<div class="col-6 col-lg-3">
												<input type="text" name="values[]" v-model="field.field_value" @blur="convertToJson" class="form-control">
											</div>
											<div class="col-1">
												<button type="button" @click="removeField(index)" class="btn btn-danger">X</button>
											</div>
										</div>
										<button type="button" class="btn btn-primary" @click="addNewField" :disabled="jsonError">{{trans('email_template.new')}}</button>
									</b-tab>
									<b-tab :title="trans('email_template.json')">
										<textarea
											name="template_json"
											id="template_json"
											cols="50" rows="5"
											@blur="convertToForm"
											v-model="template.sample"
											:class="{'error':jsonError}">
										</textarea>
									</b-tab>
								</b-tabs>
								<span v-if="jsonError" class="error">{{trans('email_template.json_error')}}</span>
							</div>
							<div class="col-md-12">
								<div class="col-12">
									<div class="card">
										<div class="card-block">
											<form method="post">
												<tinymce id="mymce"
													v-model="template.content"
													:toolbar1="tinyToolbar"
													:plugins="tinyPlugins"
													:other_options="tinyOptions"
												></tinymce>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!--Buttons-->
							<div class="box-footer">
								<div class="pull-right">
									<div class="row">
										<div class="col">
											<button type="button" onclick="location.href=window.routes.list" id="email-template-cancel" name="button" class="btn btn-inverse btn-flat">
												{{trans('email_template.cancel') }}
											</button>
										</div>
										<div class="col">
											<button type="button" @click="test" id="email-template-test" name="button" class="btn btn-warning btn-flat">
												{{trans('email_template.test') }}
											</button>
										</div>
										<div class="col">
											<button type="button" id="validate" class="btn btn-info btn-flat btn-block" @click="validate">
												{{trans('email_template.validate') }}
											</button>
										</div>
										<div class="col">
											<button type="button" id="save_tamplate" class="btn btn-success btn-flat btn-block" @click="submitForm">
												{{trans('email_template.save_change') }}
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</template>

<style>
.error {
	border-color: #FF1111;
	color: #FF1111;
}
</style>