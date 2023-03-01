<div class="wk-row product" id="embase">
    <div class="wk-col-6" style="padding-top: 40px;">
            <p class="wk-size-8 wk-weight-500">SOPPDB<sup>®</sup></p>

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
