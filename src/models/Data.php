<?php

class Data extends Model {
    protected static $tableName = 'data';
    protected static $columns = ['id','areas','title', 'matter', 'abstract','access','path', 'link','type'];

    public function searchAreasAndMatter($start){
        return static::getResultSetFromSelectBetween($this->quantItms,["areas" => $this->areas, "matter" => $this->matter], $start, 'access', 'title');
    }

    public function searchAreas($start){
        return static::getResultSetFromSelectBetween($this->quantItms,["areas" => $this->areas], $start, 'access', 'title');
    }

    public function searchAll($start){
        return static::getResultSetFromSelectBetweenAndText($this->quantItms,["areas" => $this->areas, "matter" => $this->matter], $this->search, $start, 'access', 'title');
    }

    public function searchTextAndAreas($start){
        return static::getResultSetFromSelectBetweenAndText($this->quantItms,["areas" => $this->areas], $this->search, $start, 'access', 'title');
    }
    
    public function searchResulCount($switch){
        switch($switch){
            case "searchAreasAndMatter":
                return static::getResultCount(["areas" => $this->areas, "matter" => $this->matter],'title');
                break;

            case "searchAreas":
                return static::getResultCount(["areas" => $this->areas],'title');
                break;

            case "searchAll":
                return static::getResultCount(["areas" => $this->areas, "matter" => $this->matter],'title', $this->search);
                break;

            case "searchTextAndAreas":
                return static::getResultCount(["areas" => $this->areas],'title', $this->search);
                break;
        }

    }
}