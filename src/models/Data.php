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

    public function searchAll($start){
        $end = $start + 25;
        return static::getResultSetFromSelectBetweenAndText(["areas" => $this->areas, "matter" => $this->matter], $this->search, $start, $end, 'access', 'title');
    }

    public function searchTextAndAreas($start){
        $end = $start + 25;
        return static::getResultSetFromSelectBetweenAndText(["areas" => $this->areas], $this->search, $start, $end, 'access', 'title');
    }
}