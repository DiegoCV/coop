<?php



/**
 * Description of Recibo
 *
 * @author DiegoCarrascal
 */
class Recibo {
    private $fechaInicial;
    private $fechaFinal;
    private $codigo;
    private $nombre;
    private $cedula;
    private $subsidio;
    private $compensacionO;
    private $compensacionE;
    private $pension;
    private $aportes;
    private $fondo;
    private $salud;
    private $cementerio;
    
    function __construct($fechaInicial, $fechaFinal, $codigo, $nombre, $cedula, $subsidio, $compensacionO, $compensacionE, $pension, $aportes, $fondo, $salud, $cementerio) {
        $this->fechaInicial = $fechaInicial;
        $this->fechaFinal = $fechaFinal;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->subsidio = $subsidio;
        $this->compensacionO = $compensacionO;
        $this->compensacionE = $compensacionE;
        $this->pension = $pension;
        $this->aportes = $aportes;
        $this->fondo = $fondo;
        $this->salud = $salud;
        $this->cementerio = $cementerio;
    }

    
    function getFechaInicial() {
        return $this->fechaInicial;
    }

    function getFechaFinal() {
        return $this->fechaFinal;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getSubsidio() {
        return $this->subsidio;
    }

    function getCompensacionO() {
        return $this->compensacionO;
    }

    function getCompensacionE() {
        return $this->compensacionE;
    }

    function getPension() {
        return $this->pension;
    }

    function getAportes() {
        return $this->aportes;
    }

    function getFondo() {
        return $this->fondo;
    }

    function getSalud() {
        return $this->salud;
    }

    function getCementerio() {
        return $this->cementerio;
    }

    function setFechaInicial($fechaInicial) {
        $this->fechaInicial = $fechaInicial;
    }

    function setFechaFinal($fechaFinal) {
        $this->fechaFinal = $fechaFinal;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setSubsidio($subsidio) {
        $this->subsidio = $subsidio;
    }

    function setCompensacionO($compensacionO) {
        $this->compensacionO = $compensacionO;
    }

    function setCompensacionE($compensacionE) {
        $this->compensacionE = $compensacionE;
    }

    function setPension($pension) {
        $this->pension = $pension;
    }

    function setAportes($aportes) {
        $this->aportes = $aportes;
    }

    function setFondo($fondo) {
        $this->fondo = $fondo;
    }

    function setSalud($salud) {
        $this->salud = $salud;
    }

    function setCementerio($cementerio) {
        $this->cementerio = $cementerio;
    }


    
}
