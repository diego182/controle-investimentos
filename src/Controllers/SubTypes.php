<?php

namespace App\Controllers;

class SubTypes extends Controller
{
    public function index()
    {
        //build query
        $query = "SELECT subtipo FROM investdb.sub_tipo_invest";

        //Execute query
        $qry_result = mysqli_query($db, $query) or die(mysql_error());

        //Build Result String
        $display_string = "";
        $i = 1;

        // Insere uma nova linha na tabela para cada subtipo encontrado
        while ($row = mysqli_fetch_array($qry_result, MYSQLI_ASSOC)) {
            //$display_string .= '<li><a href="#">. $row[subtipo] . </a></li>';
            $display_string .= '<div class="row">';
            if ($i % 2 == 0) {
                $display_string .= '  <div class="col-xs-12" style="background-color:lightgray">' . $row[subtipo];
            } else {
                $display_string .= '  <div class="col-xs-12">' . $row[subtipo];
            }
            $display_string .= '  </div>';
            $display_string .= '</div>';
            $i = $i + 1;
        }
        echo $display_string;
    }
}