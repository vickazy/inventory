<?php// include headerinclude "header.php";$createdDate = date('Y-m-d H:i:s');$staffID = $_SESSION['staffID'];$bbmNo = $_POST['bbmNo'];$bbmID = $_POST['bbmID'];$bbmFaktur = $_SESSION['bbmFaktur'];$rDate = explode("-", $_POST['receiveDate']);if ($bbmID != '' && $bbmNo != '' && $rDate != ''){	$receiveDate = $rDate[2]."-".$rDate[1]."-".$rDate[0];		$queryBbm = "UPDATE as_bbm SET receiveDate = '$receiveDate' WHERE bbmNo = '$bbmNo' AND bbmID = '$bbmID' AND bbmFaktur = '$bbmFaktur'";	$sqlBbm = mysqli_query($connect, $queryBbm);		if ($sqlBbm)	{		echo json_encode(OK);	}	}exit();?>