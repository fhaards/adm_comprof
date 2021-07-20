<?php

if (!empty($_GET['company'])) {
	require_once "company/about/comp_about_functions.php";
	if ($_GET['company'] == 'read') {
		require_once "company/read.php";
	} else if ($_GET['company'] == 'input') {
		require_once "company/input.php";
	} else if ($_GET['company'] == 'update') {
		require_once "company/update.php";
	} else if ($_GET['company'] == 'about') {
		require_once "company/about/read.php";
	}
} else if (!empty($_GET['profile'])) {
	if ($_GET['profile'] == 'read') {
		require_once "profile/read.php";
	} else if ($_GET['profile'] == 'form_input') {
		require_once "profile/form_input.php";
	} else if ($_GET['profile'] == 'input') {
		require_once "profile/input.php";
	} else if ($_GET['profile'] == 'update') {
		require_once "profile/update.php";
	} else if ($_GET['profile'] == 'delete') {
		require_once "profile/delete.php";
	}
} else if (!empty($_GET['client'])) {
	require_once "client/functions.php";
	if ($_GET['client'] == 'read') {
		require_once "client/read.php";
	} else if ($_GET['client'] == 'update') {
		require_once "client/ubah.php";
	} else if ($_GET['client'] == 'delete') {
		require_once "client/hapus.php";
	}
} else if (!empty($_GET['produk'])) {
	require_once "produk/functions.php";
	if ($_GET['produk'] == 'read') {
		require_once "produk/read.php";
	} else if ($_GET['produk'] == 'update') {
		require_once "produk/ubah.php";
	} else if ($_GET['produk'] == 'delete') {
		require_once "produk/hapus.php";
	}
} else if (!empty($_GET['portofolio'])) {
	require_once "portofolio/functions.php";
	if ($_GET['portofolio'] == 'read') {
		require_once "portofolio/read.php";
	} else if ($_GET['portofolio'] == 'update') {
		require_once "portofolio/ubah.php";
	} else if ($_GET['portofolio'] == 'delete') {
		require_once "portofolio/hapus.php";
	} else if ($_GET['portofolio'] == 'delete_category') {
		require_once "portofolio/portofolio_category/hapus.php";
	}
} else if (!empty($_GET['team'])) {
	require_once "team/functions.php";
	if ($_GET['team'] == 'read') {
		require_once "team/read.php";
	} else if ($_GET['team'] == 'update') {
		require_once "team/ubah.php";
	} else if ($_GET['team'] == 'delete') {
		require_once "team/hapus.php";
	}
} else if (!empty($_GET['admin'])) {
	if ($_GET['admin'] == 'read') {
		require_once "admin/read.php";
	} else if ($_GET['admin'] == 'update') {
		require_once "admin/form_update.php";
	}
} else {
	require_once "dashboard_functions.php";
	require_once "dashboard.php";
}
