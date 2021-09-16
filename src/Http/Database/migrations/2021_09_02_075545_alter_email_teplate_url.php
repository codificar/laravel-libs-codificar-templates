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
		$listUrl = \Permission::where('url', 'like', '%/admin/email_template%')->first();
		$listUrl->url = '/admin/libs/email_template';
		$listUrl->save();

		$addUrl = \Permission::where('url', 'like', '%/admin/email_template/edit/0%')->first();
		$addUrl->url = '/admin/libs/email_template/edit/0';
		$addUrl->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

	}
}
