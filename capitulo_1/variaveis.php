<?php

/**
 * A variável "firstname" possui o valor "anderson"
 * Quando nós adicionamos $$firstname à variável "$firstname", o seu conteúdo passa a ser uma variável
 * Logo, temos uma variável "$anderson" com o valor "césar";
 */

$firstname = 'anderson';
$$firstname = 'césar';

print $anderson; // césar

