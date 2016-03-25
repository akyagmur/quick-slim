<?php
/**
 * @author: Ali Kenan Yağmur
 * Date: 25.03.2016
 * Time: 19:03
 */
use Illuminate\Database\Capsule\Manager as Capsule;

class BookMigration
{
    public function run()
    {
        $table = 'books';

        if (!Capsule::schema()->hasTable($table)) {

            return Capsule::schema()->create($table, function ($table) {
                $table->increments('id');
                $table->string('name');
                $table->string('author');
                $table->timestamps();
            });

        }

        return print "Table '" . $table . "' already exists \n";
    }
}