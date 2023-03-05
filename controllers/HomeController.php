<?php
include("services/ArticleService.php");
require "controllers/BaseController.php";
class HomeController extends BaseController{
    // Hàm xử lý hành động index
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $articelService = new ArticleService();
        $articles = $articelService->getAllArticles();
        // Nhiệm vụ 2: Tương tác với View
        return $this->view(
            "home.index", [
            'articles'=>$articles,
            ]
        );
    }
    public function detail(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $id=$_GET["sid"];
        $articelService = new ArticleService();
        $articleA = $articelService->getArticlebyID($id);
        // Nhiệm vụ 2: Tương tác với View
        return $this->view(
            "home.detail", [
            'articleA'=>$articleA,
            ]
        );
    }
}