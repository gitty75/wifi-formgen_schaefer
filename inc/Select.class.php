

<?PHP

class Select extends FormField{

private $choice = [];

public function __construct(array $conf){

    if (array_key_exists('choice', $conf) && is_array($conf['choice'])){
        $this->choice = $conf['choice'];
    }

    parent::__construct($conf);

}

public function renderField() : string {
        $out = '';

    if($this->type==='select'){

        $out .= '<select name="' . 
        $this->name .
        '"';
        // TODO: value 

        // tagAttributes
        $out .= $this->renderTagAttributes(); 
        $out .= '>';
        
        if(isset($this->choice)){

            foreach($this->choice as $value){
                $out .= '<option value="'. $value . '">' . $value .'</option>';
            }

        }

        $out .= '</select>';
        return $out;
    }
    else{
        return $out;
    }
       
}



/*
<form action="/action_page.php" id="carform">
Firstname:<input type="text" name="fname">
<input type="submit">
</form>

<select name="carlist" form="carform">
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
<option value="opel">Opel</option>
<option value="audi">Audi</option>
</select>
*/

}

?>