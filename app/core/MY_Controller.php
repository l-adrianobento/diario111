<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Extensão do controller padrão
 *
 * Seta a localidade e (se necessário) verifica a autencidade do Usuário
 *
 *
 * @author  Henrique de Castro
 * @since   10/2009
 */
abstract class MY_Controller extends CI_Controller {

    /**
     * Construtor
     *
     * Carrega os models e helpers, inicia a sessão, seta a localidade e autentica se necessário.
     *
     * @access public
     * @author Henrique de Castro
     * @since  11/2008
     * @return void
     */
    public function __construct() {
        parent::__construct();

        //Por padrão, todos os controles terão a sessão iniciada
        session_start();

        //Seta a localidade
        setlocale(LC_ALL, "pt_BR", "pt-br", "pt", "pt_BR.iso-8859-1", "pt_BR.utf-8", "pt_BR.UTF-8", "portuguese");

    }

}
?>
