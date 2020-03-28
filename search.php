<?php 
require_once 'actions/db_connect.php';

if(isset($_GET['search_term']) && isset($_GET['search_button']))
{
      $search_term = $_GET['search_term'];
    if(!isset($first_pos))
    {
        $first_pos = "0";
    }
    $start_search = getmicrotime();
    $sql_query = mysql_query("SELECT * FROM pet WHERE MATCH(name,breed,city) AGAINST('$search_term')");
many mathces (too many matches cause returning of 0 results)
    if($results = mysql_num_rows($sql_query) != 0)
            {
                $sql =  "SELECT * FROM pet WHERE MATCH(name,breed,city) AGAINST('$search_term') LIMIT $first_pos, $RESULTS_LIMIT";
                  $sql_result_query = mysql_query($sql);  
            }
    else
            {
                  $sql = "SELECT * FROM pet WHERE (name LIKE '%".mysql_real_escape_string($search_term)."%' OR breed LIKE '%".mysql_real_escape_string($search_term)."%' OR city '%".mysql_real_escape_string($search_term)."%';
                  $sql_query = mysql_query($sql);
                  $results = mysql_num_rows($sql_query);
                  $sql_result_query = mysql_query("SELECT * FROM pet WHERE (name LIKE '%".$search_term."%' OR breed LIKE '%".$search_term."%' OR cityLIKE '%".$search_term."%') LIMIT $first_pos, $RESULTS_LIMIT ");
            }
    $stop_search = getmicrotime();
    $time_search = ($stop_search - $start_search);
}
?>