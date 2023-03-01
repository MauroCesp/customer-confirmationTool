<div class="wk-row product" id="embase">
    <div class="wk-col-6" style="padding-top: 40px;">
            <p class="wk-size-8 wk-weight-500">EMBASE on Ovid<sup>®</sup></p>
            <p class="wk-size-6">Current and comprehensive global biomedical research for drugs, diseases, and devices</p>
            <p style="margin-top: 15px;">Ovid offers seamless, integrated access to the current, daily updated Embase database as well as the Embase Classic archive. The extensive Emtree thesaurus—with up-to-date drug, disease, and device terms—combined with Ovid’s robust search technology and time-saving workflow tools means you’ll find exactly what you’re looking for quickly.</p>
            <p style="margin-top: 15px;">With a vast selection of biomedical content plus state-of-the-art indexing, Elsevier’s Embase database is ideal for anyone involved in pharmaceutical science and pharmacology, clinical medicine, and medical devices and biotechnology who can’t afford to miss critical and timely information on clinical or product breakthroughs, adverse events, safety, and more.</p>
            <p style="margin-top: 30px;">
                <a class="wk-button wk-button-icon-right" style="text-decoration: none;" href="#" target="_blank">Access EMBASE in Ovid <span class="wk-icon-arrow-right" aria-hidden="true"></span></a>
                <a class="wk-button wk-button-icon-right" style="text-decoration: none; margin-left: 10px;" href="#" target="_blank">Training Video <span title="video" class="wk-icon-video"></span></a>
                <a class="wk-button wk-button-icon-right" style="text-decoration: none; margin-left: 10px;" href="#" target="_blank">Factsheet <span title="file-pdf" class="wk-icon-file-pdf"></span></a>

            </p>
    </div>
    <div class="wk-col-6 search_column">
        <div style="margin-top: 10px; visibility: visible;" class="searchbox">
            <div style="margin-top:5px; margin-bottom:10px" align="center">
                <img src="images/search_embase.png" width="100%" class="img-responsive"/>
            </div>
                <div id="search_embase_bloque" style="padding: 20px; padding-top: 0px;">
                    <div class="wk-row">
                        <div class="wk-col-10">
                            <input type="text" id="embase_search_text" onkeydown="btnSearchEmbase(event)" class="wk-field-input" placeholder="Enter your keywords ..." control-id="ControlID-1">
                        </div>
                        <div class="wk-col-2">
                            <button id="embasebtnsearch" onclick="SearchEmbaseWidget()" class="wk-button wk-button-icon-right" type="button">Search</button>
                        </div>
                    </div>




                    <div align="center" style="clear:both;margin-bottom:5px; margin-top: 10px;">
                        <input type="radio" name="embase_radio" value="easy" checked="" control-id="ControlID-3"> <a href="http://site.ovid.com/site/help/documentation/osp/en/index.htm#CSHID=basic.htm|StartTopic=Content/basic.htm|SkinName=OvidSP_WebHelp_Skin">Basic Search</a>
                        <input type="radio" name="embase_radio" value="ovidclassic" control-id="ControlID-4"> <a href="http://site.ovid.com/site/help/documentation/osp/en/index.htm#CSHID=syntax.htm|StartTopic=Content/syntax.htm|SkinName=OvidSP_WebHelp_Skin">Advanced Search</a>
                    </div>
                </div>


                <script language="javascript" type="text/javascript" id="jsTagEmbase">
                    function SearchEmbaseWidget() {
                    var db_select ='oemezd';
                      var dbString = "&D=" + db_select;

                      var mpField = "";
                        var SearchContent = "&SEARCH=" + document.getElementById('embase_search_text').value + mpField;
                        var url = "http://ovidsp.ovid.com/ovidweb.cgi?&T=JS&PAGE=main&NEWS=n&CSC=y";

                      var radios = document.getElementsByName('embase_radio');
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

                    function btnSearchEmbase(event) {
                        var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
                        if (keyCode == 13) {
                            SearchEmbaseWidget();
                            }
                        }
                    </script>

                </div>
    </div>

</div>
