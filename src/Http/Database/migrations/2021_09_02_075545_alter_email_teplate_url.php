<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEmailTeplateUrl extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('email_template', function(Blueprint $table) {
			$table->json('sample')->after('content')->nullable();
			$table->boolean('is_used')->after('sample')->default(true);
		});

		$listUrl = \Permission::where('url', 'like', '%/admin/email_template%')->first();
		if($listUrl) {
			$listUrl->url = '/admin/libs/email_template';
			$listUrl->save();
		}

		$addUrl = \Permission::where('url', 'like', '%/admin/email_template/edit/0%')->first();
		if($addUrl) {
			$addUrl->url = '/admin/libs/email_template/edit/0';
			$addUrl->save();
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('email_template', function(Blueprint $table) {
			$table->dropColumn('sample');
			$table->dropColumn('is_used');
		});
	}
}
