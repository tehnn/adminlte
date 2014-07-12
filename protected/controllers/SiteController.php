<?php

class SiteController extends Controller {

    public function actionIndex() {

        $this->render('index');
    }

    public function actionWidgets() {
        $this->render('pages/widgets');
    }

    public function actionMorris() {
        $this->render('pages/charts/morris');
    }

}