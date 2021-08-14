<?php
//countries
$data = $_GET['datavalue'];

$indianStates = [ 'Arunachal Pradesh',
'Arunachal Pradesh',
 'Assam',
'Bihar',
'Chhattisgarh',
'Goa',
'Gujarat',
'Haryana',
'Himachal Pradesh',
'Jammu and Kashmir',
'Jharkhand',
'Karnataka',
'Kerala',
'Madhya Pradesh',
'Maharashtra',
 'Manipur',
  'Meghalaya',
'Mizoram',
 'Nagaland',
'Odisha',
  'Punjab',
  'Rajasthan',
  'Sikkim',
  'Tamil Nadu',
  'Telangana',
  'Tripura',
  'Uttar Pradesh',

'Uttarakhand',
   'West Bengal',
   'Andaman and Nicobar Islands',
   'Chandigarh',
   'Dadra and Nagar Haveli',
  'Daman and Diu',
 'Lakshadweep',
'National Capital Territory of Delhi',
 'Puducherry'];

 
$pakistanStates = [ 
 '	Balochistan',
'Gilgit-Baltistan',
'Islamabad Capital Territory',
'	Khyber Pakhtunkhwa',
'Punjab',
'	Sindh',
];


 
$chinaStates = [ 
	'	Anhui',
   'Beijing ',
   'Chongqing',
   'Fujian',
   'Gansu',
   'Guangdong',
   ];

if($data == "India"){
	foreach($indianStates as $aone){
		echo "<option>$aone</option>";
	}
}


if($data == "Pakistan"){
	foreach($pakistanStates as $bone){
		echo "<option>$bone</option>";
	}
}


if($data == "China"){
	foreach($chinaStates as $cone){
		echo "<option>$cone</option>";
	}
}

$Assam=[
	'Adilabad',
	'Anantapur',
	'Chittoor',
	'Kakinada',
	'Guntur',
	'Hyderabad',
	'Karimnagar',
	'Khammam',
	'Krishna',
	'Kurnool',
	'Mahbubnagar',
	'Medak',
	'Nalgonda',
	'Nizamabad',
	'Ongole',
	'Hyderabad',
	'Srikakulam',
	'Nellore',
	'Visakhapatnam',
	'Vizianagaram',
	'Warangal',
	'Eluru',
	'Kadapa',
];
$Bihar=[
	'Araria',
	'Arwal',
	'Aurangabad',
	'Banka',
	'Begusarai',
	'Bhagalpur',
	'Bhojpur',
	'Buxar',
	'Darbhanga',
	'East Champaran',
	'Gaya',
	'Gopalganj',
	'Jamui',
	'Jehanabad',
	'Kaimur',
	'Katihar',
	'Khagaria',
	'Kishanganj',
	'Lakhisarai',
	'Madhepura',
	'Madhubani',
	'Munger',
	'Muzaffarpur',
	'Nalanda',
	'Nawada',
	'Patna',
	'Purnia',
	'Rohtas',
	'Saharsa',
	'Samastipur',
	'Saran',
	'Sheikhpura',
	'Sheohar',
	'Sitamarhi',
	'Siwan',
	'Supaul',
	'Vaishali',
	'West Champaran',
	'Chandigarh',
];


if($data == "data"){
	foreach($Assam as $done){
		echo "<option>$done</option>";
	}
}

if($data == "data"){
	foreach($Bihar as $eone){
		echo "<option>$eone</option>";
	}
}
?>