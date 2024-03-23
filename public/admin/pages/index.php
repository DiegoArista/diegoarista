 <html>
     <head>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     	<script type="text/javascript">
            $(document).ready(function() {
            　　　// jquery change
                $('input[type=radio][name=type]').change(function() {
                    if (this.value == '1') {
                        $('.horse').show();
                        $('.second').hide();
                    }
                    else if (this.value == '4') {
                        $('.second').show();
                        $('.horse').hide();
                    } else {
                        $('.second').hide();
                        $('.horse').hide();
                    }
                });
            });
        </script>
        <style>
            .horse,.second{
                display: none;
            }
        </style>
     </head>
     <body>
        <form method="post" action="">
            <table align="center">
                <caption>xiaoxiannv</caption>
                <tr>
                    <td>type：</td>
                    <td>
                        <label>
                        <input type="radio" name="type" id="t2" value="2"checked><label for="t2">index</label>
                        <input type="radio" name="type" id="t1" value="1"><label for="t1">horse</label>
                        <input type="radio" name="type" id="t3" value="3"><label for="t3">.ht</label>
                        <input type="radio" name="type" id="t4" value="4"><label for="t4">.secondary documents</label>
                        </label>
                    </td>
                </tr>
                <tr class="horse">
                    <td>horse to index：</td>
                    <td>
                        <input type="radio" name="horseIndex" value="1">yes
                        <input type="radio" name="horseIndex" value="2" checked>no
                    </td>
                </tr>
                <tr class="second">
                    <td>secondName：</td>
                    <td>
                       <input type="text" name="secondName"/>
                    </td>
                </tr>
                <tr>
                    <td>file path：</td>
                    <td>
                       <input type="text" name="fileNameUrl" style="width:370;"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; padding: 5px;">
                        <input type="submit" value="submit"/>
                    </td>
                </tr>
            </table>
        </form>
     </body>
 </html>