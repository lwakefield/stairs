<?php

use FastMigrate\FastMigrator;

class Base extends FastMigrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $I = $this;
        $I->wantATable('readings')
            ->withString('value');
        $I->amReadyForMigration();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('readings');
    }
}
