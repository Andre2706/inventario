<?php
include('db.php');
/** Include PHPExcel */
require_once("Classes/PHPExcel.php");

//Create a PHPExcel object
$objPHPExcel = new PHPExcel();

//Set document properties
$objPHPExcel->getProperties()->setCreator("Mitrajit Samanta")
							 ->setLastModifiedBy("Mitrajit Samanta")
							 ->setTitle("User's Information")
							 ->setSubject("User's Personal Data")
							 ->setDescription("Description of User's")
							 ->setKeywords("")
							 ->setCategory("");

// Set default font
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')
                                          ->setSize(10);

//Set the first row as the header row
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID')
							  ->setCellValue('B1', 'NAME')
							  ->setCellValue('C1', 'MOBILE')
							  ->setCellValue('D1', 'COUNTRY');
							  
//Rename the worksheet
$objPHPExcel->getActiveSheet()->setTitle('USER INFO');

//Set active worksheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);



/*************** Fetching data from database ***************/
$sql = "select * from `user_details`";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res)>0)
{
	 $i = 1;
	 while($row = mysqli_fetch_object($res)) {
		$objPHPExcel->getActiveSheet()->setCellValue('A'.($i+1), $row->id)
									  ->setCellValue('B'.($i+1), $row->name)
									  ->setCellValue('C'.($i+1), $row->mobile)
									  ->setCellValue('D'.($i+1), $row->country);									  
	    $i++;
	 }
}
							  

//Dynamic name, the combination of date and time
$filename = date('d-m-Y_H-i-s').".xlsx";

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

//if you want to save the file on the server instead of downloading, 
//comment the last 3 lines and remove the comment from the next line
//$objWriter->save(str_replace('.php', '.xlsx', $filename));
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
$objWriter->save("php://output");
