<?php
class Users extends Stalker_Table
{
    public function schema()
    {
        return Stalker_Schema::build(function ($table) {
            $table->int("id", 11);
            $table->varchar("firstName", 45);
            $table->varchar("lastName", 45);
            $table->varchar("email", 45);
            $table->varchar("password", 45);
            $table->varchar("birthDate", 35);
            $table->varchar("gender", 20);
            $table->id("id")->primary();
            $table->email("email")->unique();
        });
    }
}
