<?php
namespace Cours\Revisions;

class GlobalPage {

    protected $classe = "GlobalPage";

    const TYPE = "text";
    
    public function header()
    {
        return "
        <header>
            <nav>
                <a href='index.php'>Accueil</a>
            </nav>
        </header>
        ";
    }

    /**
     * Undocumented function
     *
     * @param string ...$contents
     * @return void
     */
    public function main(...$contents)
    {
        $page="";
        foreach ($contents as $content) {
           $page .= "<div>$content </div>";
        }
        return "
        <main>
            $page
        </main>
        ";
    }

    public function footer()
    {
        return "
            <footer>
            <p> Merci de visiter notre site </p>
            </footer>
        ";
    }

    public function aside()
    {

    }
}