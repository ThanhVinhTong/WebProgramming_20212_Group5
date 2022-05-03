<!DOCTYPE html>
<html>
    <head>
        <title>Pages</title>
        <style>
            .header {
                width: 100%;
                height: 50px;
                font-size: 30px;
                text-align:center;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .body {
                min-height: 400px;
                width: 90%;
                margin: 0;
                padding: 10px;
                display: flex;
            }
            .footer {
                width: 100%;
                font-size: 20px;
                color: gray;
                text-align: center;
            }
            input {
                display: block;
                padding: 0.375rem 0.75rem;
                font-weight: 400;
                line-height: 1.5;
                border: solid 1px #999;
                appearance: none;
                border-radius: 0.25rem;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                margin-bottom: 20px;
            }
            input[type="submit"], input[type="reset"] {
                font-size: 15px ;
                font-weight: bold;
                width: 100%;        
                padding: .5em 1em;
                border-radius: 6px;
                background-color: #333;
                color: #fff;
                font-family: 'Lato', sans-serif;
            }
            textarea {
                display: block;
                padding: 0.375rem 0.75rem;
                font-weight: 400;
                line-height: 1.5;
                border: 1px solid #800000;
                appearance: none;
                border-radius: 0.25rem;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                margin-bottom: 20px;
                min-height: 100px;
                border: solid 1px #999;
            }
            label {
                margin-bottom: 8px;
                display: block;
                background-color: #333;
                color: #fff;   
                width: 100%; 
                border: 1px solid #999;
                border-radius: 0.5rem;
                line-height: 1.5;
                text-align: center;
                font-family: 'Lato', sans-serif;
            }
        </style>
    </head>
    <body>
        <?php
            class Pages {
                private $page;
                private $title;
                private $year;
                private $copyright;

                public function __construct($title, $year, $copyright) {
                    $this->title = $title;
                    $this->year = $year;
                    $this->copyright = $copyright;
                }

                private function addHeader() {
                    $header = '<div class="header"> ' . $this->title . ' </div><hr>';
                    $this->page .= $header;
                }

                public function addContent($content) {
                    $this->addHeader();
                    $bodyContent = '<div class="body"> ' . $content . ' </div>';
                    $this->page .= $bodyContent;
                    $this->addFooter();
                }

                private function addFooter() {
                    $footer = ' <hr>
                                    <div class="footer" style="height:40px; font-family:Helvetica; font-weight: bold;
                                            display:flex; align-items:center; justify-content:center;">
                                    <div> Copyright: ' . $this->copyright . ' - ' . $this->year . '</div>
                                </div>
                            ';
                    $this->page .= $footer;
                }

                public function get() {
                    return ($this->page);
                }
            }
        ?>
        <div style="display: flex; align-items: flex-start;">
            <?php
                if (array_key_exists("submit", $_POST)) {
                    $title = $_POST["title"];
                    $copyright = $_POST["copyright"];
                    $year = $_POST["year"];
                    $content = $_POST["content"];
                } else {
                    $title = 'Title';
                    $copyright = 'Copyright information';
                    $year = 'Copyright year';
                    $content = 'Content';
                }
            ?>
            <form action="" target="_blank" method="POST">
                <div>
                    <div style="margin-bottom: 20px;">
                        <label>Page title</label>
                        <?php
                            print('<input type="text" name="title" required value=""></input>');
                        ?>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label>Year of publication</label>
                        <?php
                            print('<input type="number" name="year" required value=""></input>');
                        ?>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label>Copyright information</label>
                        <?php
                            print('<input type="text" name="copyright" required value=""></input>');
                        ?>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label>Page content</label>
                        <?php
                            print('<textarea type="text" name="content" required></textarea>');
                        ?>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </div>
                </div>
            </form>
            <div style="flex:1; margin-left:10%; margin-right:10%; border:1px solid #333;">
                <?php
                    $page = new Pages($title, $year, $copyright);
                    $page->addContent($content);
                    echo $page->get();
                ?>
            </div>
        </div>
    </body>
</html>