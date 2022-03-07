<?php

/**
 * O estado deve ser alterado pelos propios estados,
 *  assim mantendo o contexto e os estados isolados
 */

interface EstrategiaInterface {

    public function run(Contexto $contexto);

}