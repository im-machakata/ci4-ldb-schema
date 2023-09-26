<?php
namespace CI4Extensions\LaravelMigrations\Traits;

trait BlueprintTrait {
    public function id(){
        $this->forge->addField('id');
    }
}