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

    public function validateInputs() {
        $errors = [];

        if(!$this->title){
            $errors['title'] = "O campo título é obrigatório!";
        }

        if(!$this->abstract){
            $errors['abstract'] = "O campo resumo é obrigatório!";
        }

        if(!$this->verifyAreas()){
            $errors['areas'] = "Este campo é obrigatório!";
        }

        if(!$this->verifyType()){
            $errors['type'] = "Este campo é obrigatório!";
        }

        if(!$this->verifyMaterias()){
            $errors['mat'] = "Este campo é obrigatório!";
        }

        if(count($errors) > 0){
            throw new AppArrayException($errors);
        }
    }

    private function verifyAreas() {
        $areas = ['re', 'at', 'au'];
        foreach($areas as $element){
            if($this->areas == $element){
                return true;
            }
        }
        return false;
    }

    private function verifyType() {
        $types = ['pdf', 'video'];
        foreach($types as $element){
            if($this->type == $element){
                return true;
            }
        }
        return false;
    }

    private function verifyMaterias() {
        $materias = ['mat', 'por', 'his', 'geo', 'bio', 'qui','fis'];
        foreach($materias as $element){
            if($this->mat == $element){
                return true;
            }
        }
        return false;
    }

    public function validateURL(){
        if(!$this->link){
            throw new AppException('Este campo é obrigatório!');
        }

        if(!filter_var($this->link, FILTER_VALIDATE_URL)){
            throw new AppException('Envie um link válido!');
        }

        if((substr($this->link, 0, 24) != "https://www.youtube.com/") && (substr($this->link, 0, 17) != "https://youtu.be/")){
            throw new AppException('Apenas vídeos do youtube!');
        }
    }

    public function insert(){
        $this->access = 0;
        parent::insert();
    }
}