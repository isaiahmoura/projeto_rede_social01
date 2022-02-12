<?php

class headerController extends controller {

	public function __construct() {
	}

	public function index() {}

    public function sair() {
        session_destroy();
        header("Location: ".BASE_URL."");
    }
}