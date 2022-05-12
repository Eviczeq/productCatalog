<?php
include "inlcudes/livesearch.inc.php";
require "inlcudes/category.inc.php";

?>

<div class="side2 col-md-6 order-md-1 sidebar" id="aside">
<form action="search.php" method="post">

  <div class="search-box ">
      <input id="searchInput" class="form-control py-2 border-right-0 border" name="text" type="text" autocomplete="off" placeholder="Search product..." />
      <input id="search" type="submit" name="search" placeholder="Search" class="btn mt-2 btnHover" style="width: -webkit-fill-available;">
      <br>
      <div class="result mb-5">Suggestions:</div>
  </div>
  </form>



 

  <!-- products -->
  <h4 class="ttl-deco h6"> Categories</h4>
  <h5 class="text-warning h6"><i class="fas fa-diaMod" style="font-size:.65rem; vertical-align: 2px;"></i> Type</h5>
  <ul class="mb-20px">
    <?php
      foreach ($rowsType as $rowType) {
        printf('<li><a href="product.type?type='.$rowType.'">'.ucfirst($rowType).'<i class="far fa-chevron-right"></i></a></li>');
      }
    ?>        
  </ul>
  <h5 class="text-warning h6"><i class="fas fa-diaMod" style="font-size:.65rem; vertical-align: 2px;"></i> Category</h5>
  <ul class="mb-20px">
    <?php
      foreach ($rows as $row) {
        printf('<li><a href="product.type?category='.$row.'">'.$row.'<i class="far fa-chevron-right"></i></a></li>');
      }
    ?>        
  </ul>


  <!-- calendar -->
    <h4 class="ttl-deco h6"> Calendar</h4>
      
    <style type="text/css">
        table.calbase_rakuten     {
            background-color: #FFFFFF;
            border:1px solid #CECECE;
            width: 210px;
            border-collapse: collapse;
            padding: 0px 0px 10px 0px;
            }
        table.calbase_rakuten *   {
            font-size: 99%;
            color: #000000;
            border-collapse: collapse;
            padding: 0px;
            margin: 0px;
            }
        table.calbase_rakuten th  {
            text-align: center;
            }
        th.caltitle_rakuten       {
            font-size: 95%;
            padding: 10px 0px 0px 0px;
            }
        table.calframe_rakuten    {
            border-collapse: collapse;
            margin: 10px 10px 0px 10px;
            table-layout: fixed;
            width: 190px;
            }
        table.calframe_rakuten th {
            text-align: center;
            padding: 0px 0px 3px 0px;
            }
        table.calframe_rakuten td {
            border:1px solid #FFFFFF;
            background-color: #FFFFFF;
            width:26px;
            height:26px;
            text-align: center;
            }
        tr.weektitle_rakuten td   {
            background-color: #EEEEEE;
            }
        td.event1day_rakuten      {
            background-color: #FFC6C6 !important;
            }
        font.event1day_rakuten    {
            color: #FFC6C6;
            }
        td.event2day_rakuten      {
            background-color: #B5DAFF !important;
            }
        font.event2day_rakuten    {
            color: #B5DAFF;
            }
        td.event3day_rakuten      {
            background-color: #FEDE93 !important;
            }
        font.event3day_rakuten    {
            color: #FEDE93;
            }
        table.event_rakuten       {
            text-align: left;
            word-break: break-all;
            margin: 7px 10px 7px 10px;
            border-collapse: collapse;
            line-height:120%;
            table-layout: fixed;
            width: 190px;
            }
        table.event_rakuten td   {
            padding: 0px 0px 0px 0px;
            }
        table.text_rakuten       {
            text-align: left;
            word-break: break-all;
            margin: 0px 10px 10px 10px;
            border-collapse: collapse;
            line-height:120%;
            table-layout: fixed;
            width: 190px;
            }
    </style>

    <table class="m-auto calbase_rakuten">
      <tr>
        <th class="caltitle_rakuten">Calendar</th>
      </tr>
      <tr>
        <td>
          <table>
            <tr>
              <td align="center">

                <table class="calframe_rakuten">
                  <tr>
                    <th colspan="7">2021/12</th>
                  </tr>
                  <tr class="weektitle_rakuten">
                    <td style="color:#BF0000">Su</td>
                    <td style="color:#000000">Mo</td>
                    <td style="color:#000000">Tu</td>
                    <td style="color:#000000">We</td>
                    <td style="color:#000000">Th</td>
                    <td style="color:#000000">Fr</td>
                    <td style="color:#1D54A7">Sa</td>
                  </tr>
                  <tr>
                    <td style="color:#CECECE">28</td>
                    <td style="color:#CECECE">29</td>
                    <td style="color:#CECECE">30</td>
                    <td style="color:#000000">1</td>
                    <td style="color:#000000">2</td>
                    <td style="color:#000000">3</td>
                    <td style="color:#1D54A7" class="event1day_rakuten">4</td>
                  </tr>
                  <tr>
                    <td style="color:#BF0000" class="event1day_rakuten">5</td>
                    <td style="color:#000000">6</td>
                    <td style="color:#000000">7</td>
                    <td style="color:#000000">8</td>
                    <td style="color:#000000">9</td>
                    <td style="color:#000000">10</td>
                    <td style="color:#1D54A7" class="event1day_rakuten">11</td>
                  </tr>
                  <tr>
                    <td style="color:#BF0000" class="event1day_rakuten">12</td>
                    <td style="color:#000000">13</td>
                    <td style="color:#000000">14</td>
                    <td style="color:#000000">15</td>
                    <td style="color:#000000">16</td>
                    <td style="color:#000000">17</td>
                    <td style="color:#1D54A7" class="event1day_rakuten">18</td>
                  </tr>
                  <tr>
                    <td style="color:#BF0000" class="event1day_rakuten">19</td>
                    <td style="color:#000000">20</td>
                    <td style="color:#000000">21</td>
                    <td style="color:#000000">22</td>
                    <td style="color:#000000">23</td>
                    <td style="color:#000000">24</td>
                    <td style="color:#1D54A7" class="event1day_rakuten">25</td>
                  </tr>
                  <tr>
                    <td style="color:#BF0000" class="event1day_rakuten">26</td>
                    <td style="color:#000000">27</td>
                    <td style="color:#000000">28</td>
                    <td style="color:#000000">29</td>
                    <td style="color:#000000" class="event1day_rakuten">30</td>
                    <td style="color:#000000" class="event1day_rakuten">31</td>
                    <td style="color:#CECECE">1</td>
                  </tr>
                </table>

                <table class="calframe_rakuten">
                  <tr>
                    <th colspan="7">2022/1</th>
                  </tr>
                  <tr class="weektitle_rakuten">
                    <td style="color:#BF0000">Su</td>
                    <td style="color:#000000">Mo</td>
                    <td style="color:#000000">Tu</td>
                    <td style="color:#000000">We</td>
                    <td style="color:#000000">Th</td>
                    <td style="color:#000000">Fr</td>
                    <td style="color:#1D54A7">Sa</td>
                  </tr>
                  <tr>
                    <td style="color:#CECECE">26</td>
                    <td style="color:#CECECE">27</td>
                    <td style="color:#CECECE">28</td>
                    <td style="color:#CECECE">29</td>
                    <td style="color:#CECECE">30</td>
                    <td style="color:#CECECE">31</td>
                    <td style="color:#BF0000" class="event1day_rakuten">1</td>
                  </tr>
                  <tr>
                    <td style="color:#BF0000" class="event1day_rakuten">2</td>
                    <td style="color:#000000" class="event1day_rakuten">3</td>
                    <td style="color:#000000" class="event1day_rakuten">4</td>
                    <td style="color:#000000" class="event1day_rakuten">5</td>
                    <td style="color:#000000">6</td>
                    <td style="color:#000000">7</td>
                    <td style="color:#1D54A7" class="event1day_rakuten">8</td>
                  </tr>
                  <tr>
                    <td style="color:#BF0000" class="event1day_rakuten">9</td>
                    <td style="color:#BF0000" class="event1day_rakuten">10</td>
                    <td style="color:#000000">11</td>
                    <td style="color:#000000">12</td>
                    <td style="color:#000000">13</td>
                    <td style="color:#000000">14</td>
                    <td style="color:#1D54A7" class="event1day_rakuten">15</td>
                  </tr>
                  <tr>
                    <td style="color:#BF0000" class="event1day_rakuten">16</td>
                    <td style="color:#000000">17</td>
                    <td style="color:#000000">18</td>
                    <td style="color:#000000">19</td>
                    <td style="color:#000000">20</td>
                    <td style="color:#000000">21</td>
                    <td style="color:#1D54A7" class="event1day_rakuten">22</td>
                  </tr>
                  <tr>
                    <td style="color:#BF0000" class="event1day_rakuten">23</td>
                    <td style="color:#000000">24</td>
                    <td style="color:#000000">25</td>
                    <td style="color:#000000">26</td>
                    <td style="color:#000000">27</td>
                    <td style="color:#000000">28</td>
                    <td style="color:#1D54A7" class="event1day_rakuten">29</td>
                  </tr>
                  <tr>
                    <td style="color:#BF0000" class="event1day_rakuten">30</td>
                    <td style="color:#000000">31</td>
                    <td style="color:#CECECE">1</td>
                    <td style="color:#CECECE">2</td>
                    <td style="color:#CECECE">3</td>
                    <td style="color:#CECECE">4</td>
                    <td style="color:#CECECE">5</td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td colspan="2">
                <table class="event_rakuten">
                  <tr><td><font class="event1day_rakuten">■</font> Holiday</td></tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>






  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('#searchInput').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("inlcudes/livesearch.inc.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<script>
var input = document.getElementById("searchInput");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("search").click();
  }
});
</script>
        <!-- calendar -->
      </div>