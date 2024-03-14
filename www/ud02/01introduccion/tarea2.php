<?php

/**
 * Indica cuál de los siguientes son nombres de variables válidas e inválidos, indica por qué (en comentarios) y corrige los fallos:
 
- valor >> invalida debe comenzar por $ -> $valor
- $_N  >> valida, puede comenzar por _
- $valor_actual >> valida el nombre debe empezar por letra o _
- $n >>  valida el nombre debe empezar por letra o _
- $#datos >> invalida debe empezar por letra o por _  y los caracteres especiales no están permitidos -> $datos
- $valorInicial0 >> valida, comienza por letra, y puede contener números
- $proba,valor >> invalida, la coma no es valida -> $proba_valor
- $2saldo >> invalida debe empezar por letra o por _ no puede empezar por un número -> $a2saldo
- $n >> valida
- $meuProblema >> valida
- $meu Problema >> invalida, no se admiten espacios, no se podría quitar el espacio sin más puesto que estaría ya declarada -> $meu_Problema
- $echo >> invalida, echo es una palabra reservada, se usa para imprimir por pantalla
- $m&m >> invalida, & es un caracter no permitido -> $m_m 
- $registro >> valida, puede contener mayúsculas
- $ABC >> valida
- $85 Nome >> invalida debe empezar por letra o por _ no puede empezar por un número además no puede tener espacios-> $a85_Nome
- $AAAAAAAAA >> valida, puede contener mayúsculas
- $nome_apelidos >> valida
- $saldoActual >> valida
- $92 >> invalida debe empezar por letra o por _ no puede empezar por un número -> $a92
- $*143idade  >> invalida debe empezar por letra o por _  y ademá * no está permitido ->  $a143idade
 */
?>