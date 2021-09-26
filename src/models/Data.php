<?php

class Data extends Model {
    protected static $tableName = 'data';
    protected static $columns = ['id','areas','title', 'matter', 'abstract','access','path', 'link','type'];

    public function searchAreasAndMatter($start){
        return static::getResultSetFromSelectBetween(["areas" => $this->areas, "matter" => $this->matter], $start, 'access', 'title');
    }

    public function searchAreas($start){
        return static::getResultSetFromSelectBetween(["areas" => $this->areas], $start, 'access', 'title');
    }

    public function searchAll($start){
        return static::getResultSetFromSelectBetweenAndText(["areas" => $this->areas, "matter" => $this->matter], $this->search, $start, 'access', 'title');
    }

    public function searchTextAndAreas($start){
        return static::getResultSetFromSelectBetweenAndText(["areas" => $this->areas], $this->search, $start, 'access', 'title');
    }
}