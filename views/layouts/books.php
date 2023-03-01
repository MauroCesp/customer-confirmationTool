<div class="wk-row product" id="books">
    <div class="wk-col-6" style="padding-top: 40px;">
            <p class="wk-size-8 wk-weight-500">Books@Ovid</p>
            <p class="wk-size-6">High-quality scholarly resources in a range of disciplines.</p>
            <p style="margin-top: 15px;">Books@Ovid offers a growing list of eBooks from the world’s most prestigious scholarly publishers, including one of the largest selections of core clinical titles.</p>
            <p style="margin-top: 15px;">Natural language searching makes it easy to find what you are looking for without complex search terminology.</p>
            <p style="margin-top: 15px;">Seamless linking to full-text journals and databases and even more resources outside of the Ovid environment.</p>
            <p style="margin-top: 45px;">
                <a class="wk-button wk-button-icon-right" style="text-decoration: none;" href="#" target="_blank">View all Your Books<span class="wk-icon-arrow-right" aria-hidden="true"></span></a>
                <a class="wk-button wk-button-icon-right" style="text-decoration: none; margin-left: 10px;" href="#" target="_blank">Training Video <span title="video" class="wk-icon-video"></span></a>
                <a class="wk-button wk-button-icon-right" style="text-decoration: none; margin-left: 10px;" href="#" target="_blank">Factsheet <span title="file-pdf" class="wk-icon-file-pdf"></span></a>

            </p>
    </div>
    <div class="wk-col-6 search_column">
        <div style="margin-top: 10px; visibility: visible;" class="searchbox">
            <div style="margin-top:5px; margin-bottom:10px" align="center">
                <img src="images/search_books.png" width="100%" class="img-responsive"/>

            </div>
                <div id="search_books_bloque" style="padding: 20px; padding-top: 0px;">
                    <div class="wk-row">
                        <div class="wk-col-10">
                            <input type="text" id="books_search_text" onkeydown="btnSearchBooks(event)" class="wk-field-input" placeholder="Enter your keywords ..." control-id="ControlID-1">
                        </div>
                        <div class="wk-col-2">
                            <button id="booksbtnsearch" onclick="SearchBooksWidget()" class="wk-button wk-button-icon-right" type="button">Search</button>
                        </div>
                    </div>




                    <div align="center" style="clear:both;margin-bottom:5px; margin-top: 10px;">
                        <input type="radio" name="books_radio" value="easy" checked="" control-id="ControlID-3"> <a href="http://site.ovid.com/site/help/documentation/osp/en/index.htm#CSHID=basic.htm|StartTopic=Content/basic.htm|SkinName=OvidSP_WebHelp_Skin">Basic Search</a>
                        <input type="radio" name="books_radio" value="ovidclassic" control-id="ControlID-4"> <a href="http://site.ovid.com/site/help/documentation/osp/en/index.htm#CSHID=syntax.htm|StartTopic=Content/syntax.htm|SkinName=OvidSP_WebHelp_Skin">Advanced Search</a>
                    </div>
                </div>


                <script language="javascript" type="text/javascript" id="jsTagBooks">
                    function SearchBooksWidget() {
                    var db_select ='books';
                      var dbString = "&D=" + db_select;

                      var mpField = "";
                        var SearchContent = "&SEARCH=" + document.getElementById('books_search_text').value + mpField;
                        var url = "http://ovidsp.ovid.com/ovidweb.cgi?&T=JS&PAGE=main&NEWS=n&CSC=y";

                      var radios = document.getElementsByName('books_radio');
                      for (var i = 0, length = radios.length; i < length; i++) {
                          if (radios[i].checked) {
                              var searchMode = radios[i].value;
                              break;
                          }
                      }
                        var mpField = "";
                        var nlpString = "";
                          if (searchMode == 'easy') {
                            nlpString = '&NLPSPEED=nohypos&NLP=y';
                          }
                          else {mpField = ".mp.";}
                        if (SearchContent != null && SearchContent != "" && SearchContent != "&SEARCH=") {
                            window.open(url.concat(nlpString).concat(dbString).concat(SearchContent).concat(mpField));    }
                        else {alert('Please enter your search terms.');}
                    }

                    function btnSearchBooks(event) {
                        var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
                        if (keyCode == 13) {
                            SearchBooksWidget();
                            }
                        }
                    </script>

                </div>
    </div>

</div>
