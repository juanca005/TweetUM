<?php

class MensajeModel {

    private $id;
    private $contenido;
    private $cantidadRetweet;
    private $fecha;
    private $etiqueta;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }/**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }/**
     * @return mixed
     */
    public function getContenido()
    {
        return $this->contenido;
    }/**
     * @param mixed $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }/**
     * @return mixed
     */
    public function getCantidadRetweet()
    {
        return $this->cantidadRetweet;
    }/**
     * @param mixed $cantidadRetweet
     */
    public function setCantidadRetweet($cantidadRetweet)
    {
        $this->cantidadRetweet = $cantidadRetweet;
    }/**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }/**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }/**
     * @return mixed
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }/**
     * @param mixed $etiqueta
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;
    }



}

?>