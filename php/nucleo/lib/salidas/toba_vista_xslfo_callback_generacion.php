<?php
/**
 * @package SalidaGrafica
 */
interface toba_vista_xslfo_callback_generacion
{
    /**
     * Realizara el procesamiento para generar el archivo pdf correspondiente
     */
    public function generar(toba_vista_xslfo $vista);
}
