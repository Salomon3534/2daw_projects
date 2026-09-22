#!/bin/bash
CREATOR="salomon"
usrs_created="0"

if [ -z $SUDO_USER ]; then
    echo Usa sudo
    exit 1

else
    if [ $SUDO_USER != $CREATOR ]; then
        echo No autorizado
        exit 1

    else
        for user in usu1 usu2; do
            if id $user &>/dev/null; then
                echo Ya existe el usuario $user
            else
                useradd -m $user
                mkdir -p /home/$user/proyectos/laravel
                touch /home/$user/proyectos/laravel/leeme1.txt
                touch -r /home/$user/proyectos/laravel/leeme1.txt /home/$user/proyectos/laravel/leeme2.txt
                chown -R $user:$user /home/$user

                $usrs_created = $usrs_created + 1
            fi
        done

        if [ $usrs_created != 0 ]; then
            echo Estructura creada correctamente
            echo $usrs_created
        fi

        exit 1
    fi
fi