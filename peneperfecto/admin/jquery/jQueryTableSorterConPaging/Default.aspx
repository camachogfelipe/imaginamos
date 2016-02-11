<%@ Page Language="C#" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script runat="server">

</script>    
    
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>Table Sorting, Paging and Filtering with jQuery Demo</title>    
    <link href="_assets/themes/yui/style.css" rel="stylesheet" type="text/css" />
    <script src="_assets/js/jquery-1.2.6.min.js" type="text/javascript"></script>
    <script src="_assets/js/jquery.tablesorter-2.0.3.js" type="text/javascript"></script>
    <script src="_assets/js/jquery.tablesorter.filer.js" type="text/javascript"></script>
    <script src="_assets/js/jquery.tablesorter.pager.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#tableOne").tablesorter({ debug: false, sortList: [[0, 0]], widgets: ['zebra'] })
                        .tablesorterPager({ container: $("#pagerOne"), positionFixed: false })
                        .tablesorterFilter({ filterContainer: $("#filterBoxOne"),
                            filterClearContainer: $("#filterClearOne"),
                            filterColumns: [0, 1, 2, 3 ,4, 5, 6],
                            filterCaseSensitive: false
                        });

            $("#tableTwo").tablesorter({ debug: false, sortList: [[0, 0]], widgets: ['zebra'] })
                .tablesorterPager({ container: $("#pagerTwo"), positionFixed: false })
                .tablesorterFilter({ filterContainer: $("#filterBoxTwo"),
                    filterClearContainer: $("#filterClearTwo"),
                    filterColumns: [0, 1, 2, 3, 4, 5, 6],
                    filterCaseSensitive: false
                });

            $("#tableTwo .header").click(function() {
                $("#tableTwo tfoot .first").click();
            });                
        });    
        
             
    </script>    
</head>
<body>
<form runat="server">

<h1>Table Sorting, Paging and Filtering with jQuery Demo</h1>
<h3>Table One without Paging Reset on Sort</h3>            
<ul>
    <li>
        Click the next button on the pager to go to a page other than the first.
    </li>
    <li>
        Now click one of the headers to sort and notice that the pager does not reset and there is sorted data before and possibly after the current page.
    </li>
</ul>
<div style="padding:0px 0px 30px 30px;">                
<table id="tableOne" class="yui">    
	<thead>
        <tr>
            <td class="tableHeader">
                Students
            </td>
            <td colspan="8" class="filter">
                Search: <input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
                <img id="filterClearOne" src="_assets/img/cross.png" title="Click to clear filter." alt="Clear Filter Image" />
            </td>
        </tr> 	
		<tr>
			<th><a href='#' title="Click Header to Sort">Name</a></th>
			<th><a href='#' title="Click Header to Sort">Major</a></th>
			<th><a href='#' title="Click Header to Sort">Sex</a></th>
			<th><a href='#' title="Click Header to Sort">English</a></th>
			<th><a href='#' title="Click Header to Sort">Japanese</a></th>
			<th><a href='#' title="Click Header to Sort">Calculus</a></th>
			<th><a href='#' title="Click Header to Sort">Geometry</a></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Student01</td>
			<td>Languages</td>
			<td>M</td>

			<td>80</td>
			<td>70</td>
			<td>75</td>
			<td>80</td>
		</tr>
		<tr>

			<td>Student02</td>

			<td>Mathematics</td>
			<td>M</td>
			<td>90</td>
			<td>88</td>
			<td>100</td>

			<td>90</td>

		</tr>
		<tr>
			<td>Student03</td>
			<td>Languages</td>
			<td>F</td>

			<td>85</td>
			<td>95</td>

			<td>80</td>
			<td>85</td>
		</tr>
		<tr>

			<td>Student04</td>
			<td>Languages</td>
			<td>M</td>

			<td>60</td>
			<td>55</td>
			<td>100</td>

			<td>100</td>
		</tr>
		<tr>
			<td>Student05</td>

			<td>Languages</td>
			<td>F</td>

			<td>68</td>
			<td>80</td>
			<td>95</td>
			<td>80</td>

		</tr>
		<tr>

			<td>Student06</td>
			<td>Mathematics</td>
			<td>M</td>
			<td>100</td>
			<td>99</td>

			<td>100</td>

			<td>90</td>
		</tr>
		<tr>
			<td>Student07</td>
			<td>Mathematics</td>
			<td>M</td>

			<td>85</td>
			<td>68</td>
			<td>90</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student08</td>

			<td>Languages</td>
			<td>M</td>
			<td>100</td>
			<td>90</td>
			<td>90</td>
			<td>85</td>

		</tr>
		<tr>
			<td>Student09</td>
			<td>Mathematics</td>
			<td>M</td>
			<td>80</td>

			<td>50</td>

			<td>65</td>
			<td>75</td>
		</tr>
		<tr>
			<td>Student10</td>

			<td>Languages</td>
			<td>M</td>

			<td>85</td>
			<td>100</td>
			<td>100</td>
			<td>90</td>

		</tr>
		<tr>
			<td>Student11</td>

			<td>Languages</td>
			<td>M</td>
			<td>86</td>

			<td>85</td>
			<td>100</td>
			<td>100</td>

		</tr>
		<tr>
			<td>Student12</td>

			<td>Mathematics</td>
			<td>F</td>
			<td>100</td>
			<td>75</td>

			<td>70</td>
			<td>85</td>

		</tr>
		<tr>
			<td>Student13</td>
			<td>Languages</td>
			<td>F</td>

			<td>100</td>

			<td>80</td>
			<td>100</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student14</td>

			<td>Languages</td>
			<td>F</td>
			<td>50</td>
			<td>45</td>
			<td>55</td>
			<td>90</td>

		</tr>
		<tr>
			<td>Student15</td>
			<td>Languages</td>
			<td>M</td>
			<td>95</td>

			<td>35</td>

			<td>100</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student16</td>

			<td>Languages</td>
			<td>F</td>

			<td>100</td>
			<td>50</td>
			<td>30</td>
			<td>70</td>

		</tr>
		<tr>
			<td>Student17</td>

			<td>Languages</td>
			<td>F</td>
			<td>80</td>

			<td>100</td>
			<td>55</td>
			<td>65</td>

		</tr>
		<tr>
			<td>Student18</td>

			<td>Mathematics</td>
			<td>M</td>
			<td>30</td>
			<td>49</td>

			<td>55</td>
			<td>75</td>

		</tr>
		<tr>
			<td>Student19</td>
			<td>Languages</td>
			<td>M</td>

			<td>68</td>

			<td>90</td>
			<td>88</td>
			<td>70</td>
		</tr>
		<tr>
			<td>Student20</td>

			<td>Mathematics</td>
			<td>M</td>
			<td>40</td>
			<td>45</td>
			<td>40</td>
			<td>80</td>

		</tr>
		<tr>
			<td>Student21</td>
			<td>Languages</td>
			<td>M</td>
			<td>50</td>

			<td>45</td>

			<td>100</td>
			<td>100</td>
		</tr>
		<tr>
			<td>Student22</td>

			<td>Mathematics</td>
			<td>M</td>

			<td>100</td>
			<td>99</td>
			<td>100</td>
			<td>90</td>

		</tr>
		<tr>
			<td>Student23</td>

			<td>Languages</td>
			<td>F</td>
			<td>85</td>

			<td>80</td>
			<td>80</td>
			<td>80</td>

		</tr>
	<tr><td>student23</td><td>Mathematics</td><td>M</td><td>82</td><td>77</td><td>0</td><td>79</td></tr><tr><td>student24</td><td>Languages</td><td>F</td><td>100</td><td>91</td><td>13</td><td>82</td></tr><tr><td>student25</td><td>Mathematics</td><td>M</td><td>22</td><td>96</td><td>82</td><td>53</td></tr></tbody>
	<tfoot>
	    <tr id="pagerOne">
	        <td colspan="7">
		        <img src="_assets/img/first.png" class="first"/>
		        <img src="_assets/img/prev.png" class="prev"/>
		        <input type="text" class="pagedisplay"/>
		        <img src="_assets/img/next.png" class="next"/>
		        <img src="_assets/img/last.png" class="last"/>
		        <select class="pagesize">
			        <option selected="selected"  value="10">10</option>

			        <option value="20">20</option>
			        <option value="30">30</option>
			        <option  value="40">40</option>
		        </select>
		    </td>
	    </tr>
	</tfoot>
</table>
    
</div>   


<h3>Table Two <u>with</u> Paging Reset on Sort</h3>            
<ul>
    <li>
        Click the next button on the pager to go to a page other than the first.
    </li>
    <li>
        Now click one of the headers to sort and notice that the pager <u>resets</u> to the first page.
    </li>
</ul>
<div style="padding:0px 0px 20px 30px;">                
<table id="tableTwo" class="yui">    
	<thead>
        <tr>
            <td class="tableHeader">
                Students
            </td>
            <td colspan="8" class="filter">
                Search: <input id="filterBoxTwo" value="" maxlength="30" size="30" type="text" />
                <img id="filterClearTwo" src="_assets/img/cross.png" title="Click to clear filter." alt="Clear Filter Image" />
            </td>
        </tr> 	
		<tr>
			<th><a href='#' title="Click Header to Sort">Name</a></th>
			<th><a href='#' title="Click Header to Sort">Major</a></th>
			<th><a href='#' title="Click Header to Sort">Sex</a></th>
			<th><a href='#' title="Click Header to Sort">English</a></th>
			<th><a href='#' title="Click Header to Sort">Japanese</a></th>
			<th><a href='#' title="Click Header to Sort">Calculus</a></th>
			<th><a href='#' title="Click Header to Sort">Geometry</a></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Student01</td>
			<td>Languages</td>
			<td>M</td>

			<td>80</td>
			<td>70</td>
			<td>75</td>
			<td>80</td>
		</tr>
		<tr>

			<td>Student02</td>

			<td>Mathematics</td>
			<td>M</td>
			<td>90</td>
			<td>88</td>
			<td>100</td>

			<td>90</td>

		</tr>
		<tr>
			<td>Student03</td>
			<td>Languages</td>
			<td>F</td>

			<td>85</td>
			<td>95</td>

			<td>80</td>
			<td>85</td>
		</tr>
		<tr>

			<td>Student04</td>
			<td>Languages</td>
			<td>M</td>

			<td>60</td>
			<td>55</td>
			<td>100</td>

			<td>100</td>
		</tr>
		<tr>
			<td>Student05</td>

			<td>Languages</td>
			<td>F</td>

			<td>68</td>
			<td>80</td>
			<td>95</td>
			<td>80</td>

		</tr>
		<tr>

			<td>Student06</td>
			<td>Mathematics</td>
			<td>M</td>
			<td>100</td>
			<td>99</td>

			<td>100</td>

			<td>90</td>
		</tr>
		<tr>
			<td>Student07</td>
			<td>Mathematics</td>
			<td>M</td>

			<td>85</td>
			<td>68</td>
			<td>90</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student08</td>

			<td>Languages</td>
			<td>M</td>
			<td>100</td>
			<td>90</td>
			<td>90</td>
			<td>85</td>

		</tr>
		<tr>
			<td>Student09</td>
			<td>Mathematics</td>
			<td>M</td>
			<td>80</td>

			<td>50</td>

			<td>65</td>
			<td>75</td>
		</tr>
		<tr>
			<td>Student10</td>

			<td>Languages</td>
			<td>M</td>

			<td>85</td>
			<td>100</td>
			<td>100</td>
			<td>90</td>

		</tr>
		<tr>
			<td>Student11</td>

			<td>Languages</td>
			<td>M</td>
			<td>86</td>

			<td>85</td>
			<td>100</td>
			<td>100</td>

		</tr>
		<tr>
			<td>Student12</td>

			<td>Mathematics</td>
			<td>F</td>
			<td>100</td>
			<td>75</td>

			<td>70</td>
			<td>85</td>

		</tr>
		<tr>
			<td>Student13</td>
			<td>Languages</td>
			<td>F</td>

			<td>100</td>

			<td>80</td>
			<td>100</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student14</td>

			<td>Languages</td>
			<td>F</td>
			<td>50</td>
			<td>45</td>
			<td>55</td>
			<td>90</td>

		</tr>
		<tr>
			<td>Student15</td>
			<td>Languages</td>
			<td>M</td>
			<td>95</td>

			<td>35</td>

			<td>100</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Student16</td>

			<td>Languages</td>
			<td>F</td>

			<td>100</td>
			<td>50</td>
			<td>30</td>
			<td>70</td>

		</tr>
		<tr>
			<td>Student17</td>

			<td>Languages</td>
			<td>F</td>
			<td>80</td>

			<td>100</td>
			<td>55</td>
			<td>65</td>

		</tr>
		<tr>
			<td>Student18</td>

			<td>Mathematics</td>
			<td>M</td>
			<td>30</td>
			<td>49</td>

			<td>55</td>
			<td>75</td>

		</tr>
		<tr>
			<td>Student19</td>
			<td>Languages</td>
			<td>M</td>

			<td>68</td>

			<td>90</td>
			<td>88</td>
			<td>70</td>
		</tr>
		<tr>
			<td>Student20</td>

			<td>Mathematics</td>
			<td>M</td>
			<td>40</td>
			<td>45</td>
			<td>40</td>
			<td>80</td>

		</tr>
		<tr>
			<td>Student21</td>
			<td>Languages</td>
			<td>M</td>
			<td>50</td>

			<td>45</td>

			<td>100</td>
			<td>100</td>
		</tr>
		<tr>
			<td>Student22</td>

			<td>Mathematics</td>
			<td>M</td>

			<td>100</td>
			<td>99</td>
			<td>100</td>
			<td>90</td>

		</tr>
		<tr>
			<td>Student23</td>

			<td>Languages</td>
			<td>F</td>
			<td>85</td>

			<td>80</td>
			<td>80</td>
			<td>80</td>

		</tr>
	<tr><td>student23</td><td>Mathematics</td><td>M</td><td>82</td><td>77</td><td>0</td><td>79</td></tr><tr><td>student24</td><td>Languages</td><td>F</td><td>100</td><td>91</td><td>13</td><td>82</td></tr><tr><td>student25</td><td>Mathematics</td><td>M</td><td>22</td><td>96</td><td>82</td><td>53</td></tr></tbody>
	<tfoot>
	    <tr id="pagerTwo">
	        <td colspan="7">
		        <img src="_assets/img/first.png" class="first"/>
		        <img src="_assets/img/prev.png" class="prev"/>
		        <input type="text" class="pagedisplay"/>
		        <img src="_assets/img/next.png" class="next"/>
		        <img src="_assets/img/last.png" class="last"/>
		        <select class="pagesize">
			        <option selected="selected"  value="10">10</option>

			        <option value="20">20</option>
			        <option value="30">30</option>
			        <option  value="40">40</option>
		        </select>
		    </td>
	    </tr>
	</tfoot>
</table>
    
</div>
<div style="padding-bottom:20px;">
<h3>Poll Powered By JS-Kit</h3>
<div class="js-kit-poll" style="width: 350px;"></div>
<script type="text/javascript" src="http://js-kit.com/polls.js"></script>
</div>
</form>
    
    <ul>
        <li>
            Table sorting and paging done by the TableSorter jQuery Plugin <a href='http://tablesorter.com/docs/'>http://tablesorter.com/docs/</a>.
        </li>
        <li>
            Filtering done by code found here <a href='http://www.compulsivoco.com/2008/08/tablesorter-filter-results-based-on-search-string/'>http://www.compulsivoco.com/2008/08/tablesorter-filter-results-based-on-search-string/</a>
        </li>
        <li>
            Cross icon from <a href='http://www.pinvoke.com/'>http://www.pinvoke.com/</a>.
        </li>
    </ul>
    
    
</body>
</html>
