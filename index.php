<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "views/includes/header.php"; ?>
</head>
<body>


    <div class="wk-docs-research-example">
        <!-- Artificial wrapper for auto-hiding functionality, should be removed from final usage -->
        <header class="wk-banner wk-banner-extra-margins" role="banner">
            <div class="wk-banner-container">
                <a class="wk-logo-container" href="javascript:void(0)" title="Wolters Kluwer">
                    <img class="wk-logo wk-logo-medium" src="https://cdn.wolterskluwer.io/wk/fundamentals/2.x.x/logo/assets/large.svg" alt="Wolters Kluwer"/>
                    <img class="wk-logo wk-logo-small" src="https://cdn.wolterskluwer.io/wk/fundamentals/2.x.x/logo/assets/small.svg" alt="Wolters Kluwer"/>
                </a>
                <div class="wk-banner-content">
                    <div class="wk-banner-left-content">
                    </div>
                    <div class="wk-banner-right-content">
                        <div class="wk-banner-action-bar">
                            <a href="javascript:void(0)" class="wk-banner-action-bar-item wk-button wk-button-text wk-button-icon-left">
                                <span class="wk-icon-clock"></span>History</a>
                            <a href="javascript:void(0)" class="wk-banner-action-bar-item wk-button wk-button-text wk-button-icon-left">
                                <span class="wk-icon-star"></span>Favorites</a>
                            <a href="javascript:void(0)" class="wk-banner-action-bar-item wk-button wk-button-text wk-button-icon-left">
                                <span class="wk-icon-alarm-on"></span>Notifications</a>
                            <div class="wk-dropdown">
                                <button class="wk-button wk-button-icon wk-dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="wk-icon-filled-more" aria-hidden="true"></span>
                                    <span class="wk-sr-only">More</span>
                                </button>
                                <div class="wk-dropdown-menu">
                                    <div>
                                        <div class="wk-dropdown-close-area">
                                            <button type="button" class="wk-button wk-button-icon wk-button-close wk-dropdown-close">
                                                <span class="wk-icon-filled-close" aria-hidden="true" ></span>
                                                <span class="wk-sr-only">Close dropdown</span>
                                            </button>
                                        </div>
                                        <ul class="wk-dropdown-menu-list">
                                            <li>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="wk-dropdown-item"
                                                >
                                                    <span
                                                        class="wk-icon-clock"
                                                        aria-hidden="true"
                                                    ></span
                                                    >History
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="wk-dropdown-item"
                                                >
                                                    <span
                                                        class="wk-icon-star"
                                                        aria-hidden="true"
                                                    ></span
                                                    >Favorites
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="fluid-container">

        <div class="wk-page-container" style="padding-left: 0px!important;">
            <div class="wk-row">
                <div class="wk-col-6" style="padding-top: 80px;">
                    <h1 class="wk-display-3">Wolters Kluwer Resources</h1>
                    <p style="padding-top: 30px;">Trusted clinical technology and evidence-based solutions that drive effective decision-making and outcomes across healthcare.</p>
                </div>
                <div class="wk-col-6">
                    <img src="images/main_banner.png"/>


                </div>
            </div>
        </div>

    </div>

    <div class="wk-page-container" style="padding-left: 0px!important;">

        <!-- ##################################### DYNAMIC BLOCKS START HERE  ###########################-->

        <?php
        // Toda la infroamcion del site esta en los headers que envia el URL
        //Le meto unos tags para que sea mas legible
        //echo "<pre>";
        //var_dump($_SERVER);
        //echo "</pre>";

        // Toda la inforamcion esta contenida en un array y cojo la parte que deseo pillar
        // La parte nos interesa el URI que la info que se le envia a la ruta
        // Creamos una variables que guarde los parametros que recibimos por la URL
        $request = $_SERVER["REQUEST_URI"];


        if ($request ){

            $url_components = parse_url($request);
            // Use parse_str() function to parse the
            // string passed via URL
            parse_str($url_components['query'], $params);

            // Cojo el string de PRODUCTS y veo lo que trae
            // Para ello lo paso a un array y lo divido por CHAR
            $product = str_split($params['products']);

            // ---------------------------------------//
            //                                        //
            //              MAIN STRUCTURE            //
            //                                        //
            // ---------------------------------------//

            // Revisamos el parametro de los productos y los clasificamos
            foreach($product as $i){
                //------- Journals
                if($i == 'j'){
                    require "views/layouts/journals.php";
                //--------- Books 
                }elseif($i == 'b'){
                    require "views/layouts/books.php"; 
                //--------- Databases
                }elseif($i == 'd'){

                    // El explote permite fijar un delimitador dentro del string
                    $db = explode(":", $params['dbs']);

                    // 
                    foreach($db as $i){
                        switch($i){

                            case '1':            
                                $var = 'ovftdb'; 
                                require "views/layouts/databases/$var.php";           
                            break;

                            case '2':
                                $var = 'emcadb';
                                require "views/layouts/databases/$var.php";           
                            break;

                            case '3':
                                $var = 'ericdb';
                                require "views/layouts/databases/$var.php";            
                            break;

                            case '4':
                                $var = 'embase';
                                require "views/layouts/databases/$var.php";
                            break;

                            case '5':
                                $var = 'medline';
                                require "views/layouts/databases/$var.php";
                            break;

                            case '6':
                                $var = 'ebmr';
                                require "views/layouts/databases/$var.php";
                            break;

                            case '7':
                                $var = 'jbindb';
                                require "views/layouts/databases/$var.php";
                            break;

                            case '8' :
                                $var = 'MWIC';
                                require "views/layouts/databases/$var.php";
                            break;

                            case '9':
                                $var = 'psycdb';
                                require "views/layouts/databases/$var.php";
                            break;

                            case '10':
                                $var = 'booksall';
                                require "views/layouts/databases/$var.php";
                            break;

                            case '11':
                                $var = 'ebmr';
                                require "views/layouts/databases/$var.php";
                            break;

                            case '12' :
                                $var = 'ameddb';
                                require "views/layouts/databases/$var.php";
                            break;

                            default:
                                break;       
                        }

                        
                    } 
                    // Los valores con los que trabajo son los de este array.
                    $list_dbs = array(
                            'ovftdb' => 'Your Journals@Ovid',
                            'emcadb'=> 'Ovid Emcare',
                            'ericdb'=> 'ERIC',
                            'embase'=> 'EMBASE',
                            'medline'=> 'Ovid MEDLINE(R)',
                            'ebmr'=> 'EBM Reviews Full Text',
                            'jbindb'=> 'Joanna Briggs Institute EBP Database',
                            'MWIC'=> 'Maternity & Infant Care Database (MIDIRS)',
                            'psycdb'=> 'APA PsycINFO',
                            'booksall' => 'Books@Ovid',
                            'ebmr'=> 'EBM Reviews (Includes All)',
                            'ameddb' => 'AMED- Allied and Complementary Database',
                    );

                }else{
                echo '';
                }

            }



            // -----------------------------  ACCESS -----------------------------

            // Reviso si el acceso es open athens para extraer el Entity ID
            if(str_starts_with($params['access'], 'o')){
            // Si lo trae divido el string con EXPLODE para sacar el segundo parametro que es el ENTITY ID 
                // El explote permite fijar un delimitador dentro del string
                $var = explode(":", $params['access']);
                $entity_id= $var[1];
                $authentication_type= 'Open Athens';
                echo $entity_id;
                echo $authentication_type;
            }elseif(str_starts_with($params['access'], 's')){
                $authentication_type= 'Shibboleth';
                echo $authentication_type;

            }elseif(str_starts_with($params['access'], 'i')){
                $authentication_type= 'Ip address';
                echo $authentication_type;

            }

            // -----------------------------  SILVER CHAIR -----------------------------

            // El explote permite fijar un delimitador dentro del string
            $silver_chair_array = explode(":", $params['silver_chair']);

            // -----------------------------  ATYPON -----------------------------

            // El explote permite fijar un delimitador dentro del string
            $atypon_array = explode(":", $params['atypon']);

            // -----------------------------  NEUROLOGY -----------------------------


        }
        ?>
        <!-- ##################################### DYNAMIC BLOCKS END HERE  ############################################## -->

    </div>
    <!-- ##################################### FOOTER  ############################################## -->

    

    <!-- ##################################### FOOTER END HERE  ############################################## -->

    </body>

    <!-- ##################################### JS  ############################################## -->
    <!-- polyfills for Chrome, FF, and Safari -->
    <script src="https://unpkg.com/@webcomponents/custom-elements@^1.2.4/src/native-shim"></script>
    <!-- for IE11 and Edge -->
    <script src="https://unpkg.com/@webcomponents/custom-elements@^1.2.4"></script>
    <!-- the rest is for IE11 -->
    <script src="https://unpkg.com/polyfill-array-includes@^2.0.0/index.js"></script>
    <script src="https://unpkg.com/es6-shim@^0.35.3"></script>

    <script>
            if (!Element.prototype.matches) {
                Element.prototype.matches = Element.prototype.msMatchesSelector ||
                    Element.prototype.webkitMatchesSelector;
            }

            if (!Element.prototype.closest) {
                Element.prototype.closest = function(s) {
                    var el = this;
                    if (!document.documentElement.contains(el)) { return null; }
                    do {
                        if (el.matches(s)) { return el; }
                        el = el.parentElement || el.parentNode;
                    } while (el !== null && el.nodeType === 1);
                    return null;
                };
            }

            if (!Element.prototype.append) {
                Element.prototype.append = function() {
                    var argArr = Array.prototype.slice.call(arguments),
                        docFrag = document.createDocumentFragment();
                    argArr.forEach(function(argItem) {
                        var isNode = argItem instanceof Node;
                        docFrag.appendChild(isNode ? argItem : document.createTextNode(String(argItem)));
                    });
                    this.appendChild(docFrag);
                }
            }
    </script>
 
    <!-- ##################################### JS END HERE  ############################################## -->

</html>