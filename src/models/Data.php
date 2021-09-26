<?php

class Data extends Model {
    protected static $tableName = 'data';
    protected static $columns = ['id','areas','title', 'matter', 'abstract','access','path','type'];

    public function searchAreasAndMatter($start){
        $end = $start + 25;
        return static::getResultSetFromSelectBetween(["areas" => $this->areas, "matter" => $this->matter], $start, $end, 'access', 'title');
    }

    public function searchAreas($start){
        $end = $start + 25;
        return static::getResultSetFromSelectBetween(["areas" => $this->areas], $start, $end, 'access', 'title');
    }
}