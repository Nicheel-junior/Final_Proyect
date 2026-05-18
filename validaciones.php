<?php 
    function validarDatos($dato, $tipo, $rangoMin=0, $rangoMax=1000, $longMin=0, $longMax=100){
        if($dato == ""){
            return ['valido' => false,
                    'error' => "No has colocado nada ! Error en el archivo: ". __DIR__,
                    'return' => "<a href='javascript:history.back()' > Regresar al formulario anterior</a>",
                    ];
        }

        switch($tipo){
            case 'int':
                if(!is_numeric($dato)){
                    return ['valido' => false,
                        'error' => "Error, '$dato' no es de tipo numerico! Error en el archivo: ". __DIR__,
                        'return' => "<a href='javascript:history.back()' > Regresar al formulario anterior</a>",
                        ];
                }

                if($dato < $rangoMin || $dato > $rangoMax){
                    return ['valido' => false,
                        'error' => "El numero $dato no esta dentro del rango valido! Error en el archivo: ". __DIR__,
                        'return' => "<a href='javascript:history.back()' > Regresar al formulario anterior</a>",
                        ];
                }
                break;
            case 'string':
                if(!ctype_alpha($dato)){
                    return ['valido' => false,
                        'error' => "El dato que ingresaste '$dato' no es una cadena de texto/palabra! Error en el archivo: ". __DIR__,
                        'return' => "<a href='javascript:history.back()' > Regresar al formulario anterior</a>",
                        ];
                }

                if(strlen($dato) < $longMin){
                    return ['valido' => false,
                        'error' => "Has colocado muy pocos caracteres, el minimo es $longMin! Error en el archivo: ". __DIR__,
                        'return' => "<a href='javascript:history.back()' > Regresar al formulario anterior</a>",
                        ];
                }

                if(strlen($dato) > $longMax){
                    return ['valido' => false,
                        'error' => "Has colocado demasiados caracteres, el maximo es $longMax! Error en el archivo: ". __DIR__,
                        'return' => "<a href='javascript:history.back()' > Regresar al formulario anterior</a>",
                        ];
                }
                break;
        }

        return ['valido' => true];
        
    }
?>