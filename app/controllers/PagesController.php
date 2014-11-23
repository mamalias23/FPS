<?php

class PagesController extends BaseController {

    public function getIndex() {
        return View::make('hello');
    }

    public function getAboutUs() {
        return View::make('about');
    }

    public function getContactUs() {
        return View::make('contact');
    }

    public function getWebDevelopment() {
        return View::make('web-development');
    }

    public function getWebDesign() {
        return View::make('web-design');
    }

    public function getSeo() {
        return View::make('seo');
    }

}
