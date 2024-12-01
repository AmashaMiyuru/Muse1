<?php

namespace App\Controllers;

use PDO;
use Kaviru\MuseCore\Database;
use Kaviru\MuseCore\Controller;
use Kaviru\MuseCore\DataHandling;
use Kaviru\MuseCore\ErrorHandling;

class ParentController extends Controller
{
    public function index()
    {
        $data = new DataHandling;

        view('user/index.php');
    }

    public function home()
    {
        //$dbh = new Database();
        //$conn = $dbh->connect();

        // Query the database to get all books
        //$books = MuseCoreDatabase::table("display_books")->setFetchMode(PDO::FETCH_ASSOC)->get();

       // view('parentuser/home.php', ['books' => $books]);
        view('parentuser/home.php');
    }

    public function aboutus()
    {
        view('parentuser/aboutus.php');
    }

    public function whymuse()
    {
        view('parentuser/whymuse.php');
    }

    public function contactus()
    {
        view('parentuser/contactus.php');
    }

    public function loginGet()
    {
        // Render the login form view
        view('parentuser/login.php');
    }
    

    public function signupGet()
    {
        // Render the signup form view
        view('parentuser/signup.php');
    }
    
}
