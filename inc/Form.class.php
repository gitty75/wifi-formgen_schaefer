
<?PHP

class Form{

private $html_accumulator; 

public function __construct($conf){

    $this->html_accumulator = '';

    foreach($conf As $field => $property){
        if(array_key_exists('type', $property) && $property['type']==='text'){
            $textfeld = new FormField($property);
            $this->html_accumulator = $textfeld->render();
        }
        
        if(array_key_exists('type', $property) && $property['type']==='textarea'){
            $userName = new Textarea($property);
            echo $userName->render();
        }

        if(array_key_exists('type', $property) && $property['type']==='checkbox'){
            $userName = new Checkbox($property);
            echo $userName->render();
        }

        if(array_key_exists('type', $property) && $property['type']==='select'){
            $userName = new Select($property);
            echo $userName->render();
        }
        
    }

}

public function render(){

    echo $this->html_accumulator;

}

}


?>