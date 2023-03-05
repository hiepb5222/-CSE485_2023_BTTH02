<?php
require_once "services/MemberService.php";
require_once "services/ArticleService.php";
require_once "services/AuthorService.php";
require_once 'services/CategoryService.php';
class AdminController
{
    // Hàm xử lý hành động index
    public function index()
    {
        // Nhiệm vụ 1: Tương tác với Services/Models
        echo "Tương tác với Services/Models from Admin";
        // Nhiệm vụ 2: Tương tác với View
        echo "Tương tác với View from Admin";
    }
    public function list()
    {
        // Nhiệm vụ 1: Tương tác với Services/Models
        $articelService = new ArticleService();
        $articles = $articelService->countArticle();
        $authorService = new AuthorService();
        $authors = $authorService->countAuthor();
        $categoryService = new CategoryService();
        $categorys = $categoryService->countCategory();
        $userService = new MemberService();
        $users = $userService->countUser();
        // Nhiệm vụ 2: Tương tác với View
        include "views/admin/index.php";

    }
}
