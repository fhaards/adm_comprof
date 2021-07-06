<?php 
include 'koneksi.php';
	if (!empty($_GET['profile']))
	{
		if($_GET['profile']=='read')
		{
			require_once "profile/read.php";
			// include "profile/read.php";
		}
        else if($_GET['profile']=='form_input'){
			include "profile/form_insert.php";
		}
		else if($_GET['profile']=='input'){
			include "profile/insert.php";
		}
		else if($_GET['profile']=='update'){
			include "profile/update.php";
		}
		else if($_GET['profile']=='delete'){
			include "profile/delete.php";
		}		
	}
    else if (!empty($_GET['admin']))
	{
        if($_GET['admin']=='read'){
			include "admin/read.php";
		} else if($_GET['admin']=='update') {
            include "admin/form_update.php";
        }
    }
    else {
        include "dashboard.php";
    }
?>