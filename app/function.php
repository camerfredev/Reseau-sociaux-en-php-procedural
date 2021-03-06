<?php 

// if(!function_exists('dd')){
//     function dd($data,... )
//     {

//     }
// }
//cette function verifie que les champs sont remplies
if(!function_exists('not_empty'))
{
    function not_empty($fields = []){

        if(count($fields) != 0 ){
            foreach($fields as $field){

                if(empty($_POST[$field]) || trim($_POST[$field]) ==""){
                    return false;
                }
            }

            return true;
        }

    }
}

//cette function verfie l'unicité de pseudo, email, etc... 
if(!function_exists('is_already_in_use')){
    function is_already_in_use($field,$value, $table)
    {
        global $db;

        $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");

        $q->execute([$value]);

        $found = $q->rowCount();

        $q->closeCursor();

        return $found;

    }
}



if(!function_exists('set_flash')){
    function set_flash($message, $type='info'){
        $_SESSION['notification']['message']= $message;
        $_SESSION['notification']['type'] = $type;
    }
}


if(!function_exists('redirect')){
    function redirect($page){

        header('location:'.$page);
        exit();

    }
}

//cette function permet de replir automentiquement le formulaire en car d'erreur de validation
if(!function_exists('save_input_data')){
    function save_input_data()
    {
        foreach($_POST as $key => $value)
        {

            
            if(strpos($key, 'password') === false)
            {
                $_SESSION['input'][$key] = $value;

            }

        }
    }
}

if(!function_exists('get_input_data')){
    function get_input_data( $key)
    {
        
       return  !empty($_SESSION['input'][$key])? e($_SESSION['input'][$key]) :null;
    }
}

//
if(!function_exists('clear_input_data')){

    function clear_input_data()
    {
        if(isset($_SESSION['input'])){

         $_SESSION['input'] = [] ;

        }
    }
}


if(!function_exists('e')){
    function e($string)
    {
        if($string)
        {
            return htmlspecialchars($string); 
        }
    }
}

//attibut la classe active sur le menu
if(!function_exists('set_active')){
    function set_active($file){
      $page=  array_pop(explode('/',$_SERVER['SCRIPT_NAME']));

      if($page == $file.'.php'){
          return 'active';
      }else{
          return null;
      }
    }
}


if(!function_exists('get_session')){
    function get_session($key)
    {
        if($key){
            return !empty($_SESSION[$key])?
                        e($_SESSION[$key])
                        : null;
        }
    }
}

if(!function_exists('find_user_by_id')){

    function find_user_by_id($id){

         global $db;
       
        $q = $db->prepare('SELECT * FROM users WHERE id = :id');

        $q->execute(['id'=>$id]);

        $data = $q->fetch(PDO::FETCH_OBJ);

     
        $q->closeCursor();

        return $data;

    }
}


if(!function_exists('get_avatar')){
    function get_avatar($email, $size= 25) {

        $gravatar_url ="http://gravatar.com/avatar/".md5(strtolower(trim($email)))."?s=".$size;
        return $gravatar_url; 
    }
  
}


//verifier que l'utilisateur est connecter
if(!function_exists('is_auth(')){
    function is_auth(){
        return (bool) isset($_SESSION['user_id']);
    }
}


if(!function_exists('get_current_local')){
    function get_current_local()
    {
        return $_SESSION['locale'];
    }
}
//ce function permet de hacher le mot de passe
if(!function_exists('bcrypt_hasd_password')){
    function bcrypt_hasd_password($value, $option= array())
    {
        $const = isset($option['rounds'])? $option['rounds'] : 10;

        $hash = password_hash($value, PASSWORD_BCRYPT,array('const'=>$const));

        if($hash === false)
        {
            throw new Exception("Bcrypt hashing n'est pas supporté");
        }

        return $hash;
    }
}

if(!function_exists('redirect_interne')){
    function redirect_interne($default_url)
    {
        if($_SESSION['forwarding_url']){
            $url = $_SESSION['forwarding_url'];
        }else{
            $url = $default_url;
        }

        $_SESSION['forwarding_url']=null;
        redirect($url);
    }
}


// if(!function_exists('')){
//     function 
// }