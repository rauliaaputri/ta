<?php
	// mysqli_connect(HOST, USERNAME, PASSWORD, NAMA DB)
	// @ digunakan untuk melakukan suppress errors
	$conn = @mysqli_connect("localhost","root","","satub_4754");
	// cek koneksinya error atau tidak
	if (mysqli_connect_errno())
	  {
	  // jika error tampilkan pesan error
	  echo "Gagal : " . mysqli_connect_error();
	  }