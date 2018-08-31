<?php

    function dd($var)
    {
        echo"<pre>";
        die(var_dump($var));
        echo "</pre>";
    }

    function old($user_input)
    {
        if (isset($_POST["$user_input"])) {
            return $_POST["$user_input"];
        }
    }

    //////

    function validate ($datos) {
            $errores = [];
        // USERNAME
            $username = trim ($datos['username']);

            if ($username == "") {
        
                $errores['username']="El campo nombre de usuario está vacío";
            } elseif (strlen($username)<=3) {
                $errores['username'] = "El nombre de usuario debe tener mínimo 4 caracteres";
            }
        // EMAIL
            $email = trim($datos['email']);

            if($datos['email'] == "") {
                $errores['email'] = "El mail es obligatorio titan"; 
            } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
            if($datos['email'] == "") {
                $errores['email'] = "Capo el email no es valido";
            }
        // PASSWORD
            if($datos['password'] == "") {
                $errores['password'] = "La password la dejaste vacia";
            } elseif (strlen($datos['password']) <= 5) {
                $errores['password'] = "Minimo 6 caracteres para la pass!";
            } elseif ($datos['password'] != $datos['cpassword']) {
                $errores['password'] = "Las contraseñas no coinciden";
            }
        // CONFIRMAR DATOS
            if(!isset($datos['confirm'])) {
                $errores['confirm'] = "Aceptame los terminos y condiciones";
            }
        
            return $errores;

    }
    

// COPIADO

    function createUser($datos)
    {
        $usuario = [
            'username' => $datos['username'],
            'email' => $datos['email'],
            'password' => password_hash($datos['password'], PASSWORD_DEFAULT)
        ];

        $usuario['id'] = idGenerate();

        return $usuario;
    }

    function idGenerate()
    {
        $file = file_get_contents('users.json');

        if($file == ""){
            return 1;
        }
        
        $users = explode(PHP_EOL, $file);
        array_pop($users);

        $lastUser = $users[count($users) - 1];
        $lastUser = json_decode($lastUser, true);

        return $lastUser["id"] + 1;

    }

    function saveUser($usuario) 
    {
        $jsonUser = json_encode($usuario);
        file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
    }
    
    // 1- TRAER TODA LA BASE
  
            function  traerTodaLaBase() 
            {
                $baseJason = file_get_contents ('user.json');
                $users = explode(PHP_EOL, $baseJason);
                array_pop($users);

                foreach($users as $user) {
                    $arrayUsers [] = json_decode ($user, true);
                }
                return $arrayUsers;
            }

      // 2 - BUSQUEDA POR EMAIL
            
            function buscamePorEmail ($email) 
            {
                $arrayDeUsuariosTraidos = traerTodaLaBase ();
                foreach($arrayDeUsuariosTraidos as $user) {
                    if($user['email'] == $email) {
                        return $user;
                    }
                }
                return null;
            }







