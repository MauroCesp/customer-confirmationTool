<div class="wk-row product" id="emcare">
    <div class="wk-col-6" style="padding-top: 40px;">
            <p class="wk-size-8 wk-weight-500">Ovid<sup>®</sup> EMCARE</p>
            <p class="wk-size-6">The New Standard in Nursing and Allied Health Research</p>
            <p style="margin-top: 15px;">Premium nursing and allied health database of over 5 million records across 3,700 journals</p>
            <p style="margin-top: 15px;"><strong>Ovid Emcare</strong>, a partnership with Elsevier, sets a new standard in nursing and allied health research—providing more records and trusted content than any other leading nursing database.</p>
            <p style="margin-top: 15px;">Pairing premium content with the world’s most trusted medical research platform, Ovid Emcare empowers your patrons to deliver high-quality care and improve research processes.</p>
            <p style="margin-top: 45px;">
                <a class="wk-button wk-button-icon-right" style="text-decoration: none;" href="#" target="_blank">Access EMCARE in Ovid <span class="wk-icon-arrow-right" aria-hidden="true"></span></a>
                <a class="wk-button wk-button-icon-right" style="text-decoration: none; margin-left: 10px;" href="#" target="_blank">Training Video <span title="video" class="wk-icon-video"></span></a>
                <a class="wk-button wk-button-icon-right" style="text-decoration: none; margin-left: 10px;" href="#" target="_blank">Factsheet <span title="file-pdf" class="wk-icon-file-pdf"></span></a>
                
            </p>
    </div>
    <div class="wk-col-6 search_column">
        <div style="margin-top: 10px; visibility: visible;" class="searchbox">
            <div style="margin-top:5px; margin-bottom:10px" align="center">
                <img src="assets/images/search_emcare.png" width="100%" class="img-responsive">
            </div>
                <div id="search_emcare_bloque" style="padding: 20px; padding-top: 0px;">
                    <div class="wk-row">
                        <div class="wk-col-10">
                            <input type="text" id="emcare_search_text" onkeydown="btnSearchEmcare(event)" class="wk-field-input" placeholder="Enter your keywords ..." control-id="ControlID-1">
                        </div>
                        <div class="wk-col-2">
                            <button id="emcarebtnsearch" onclick="SearchEmcareWidget()" class="wk-button wk-button-icon-right" type="button">Search</button>
                        </div>
                    </div>

                    


                    <div align="center" style="clear:both;margin-bottom:5px; margin-top: 10px;">
                        <input type="radio" name="emcare_radio" value="easy" checked="" control-id="ControlID-3"> <a href="http://site.ovid.com/site/help/documentation/osp/en/index.htm#CSHID=basic.htm|StartTopic=Content/basic.htm|SkinName=OvidSP_WebHelp_Skin">Basic Search</a>
                        <input type="radio" name="emcare_radio" value="ovidclassic" control-id="ControlID-4"> <a href="http://site.ovid.com/site/help/documentation/osp/en/index.htm#CSHID=syntax.htm|StartTopic=Content/syntax.htm|SkinName=OvidSP_WebHelp_Skin">Advanced Search</a>
                    </div>
                </div>


                <script language="javascript" type="text/javascript" id="jsTagEmcare">
                    function SearchEmcareWidget() {
                    var db_select ='emcr';
                      var dbString = "&D=" + db_select;
                    
                      var mpField = "";
                        var SearchContent = "&SEARCH=" + document.getElementById('emcare_search_text').value + mpField;
                        var url = "http://ovidsp.ovid.com/ovidweb.cgi?&T=JS&PAGE=main&NEWS=n&CSC=y";
                      
                      var radios = document.getElementsByName('emcare_radio');
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
                    
                    function btnSearchEmcare(event) {
                        var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
                        if (keyCode == 13) {
                            SearchEmcareWidget();
                            }
                        } 
                    </script>                        
                    
                </div>
    </div>

</div>
