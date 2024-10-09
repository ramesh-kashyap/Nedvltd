<?php
use App\Models\GeneralSetting;
use App\Models\User;
use App\Models\Income;
use App\Models\Extension;
use App\Models\Investment;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;
use Carbon\Carbon; 
$downline="";

function siteName()
{
    $general = GeneralSetting::first();
    return $general->sitename;
}

function currency()
{
    $general = GeneralSetting::first();
    return $general->cur_sym;
}

function generalDetail()
{
    $general = GeneralSetting::first();
    return $general;
}

function changeDateToUTC($date)
{
     $time = Carbon::parse($date)->setTimezone('UTC')->toDateTimeString();
    return $time;
}

function paginationLimit()
{
    $general = GeneralSetting::first();
    return $general->PaginationLimit;
}


function sendEmail($user, $type = null, $shortCodes = [])
{

  $mail_data=array('subject'=>$type,'MailDetail'=>$shortCodes);
  \Mail::to($user)->send(new Sendmail($mail_data));
}


function isEven($number)
{
  return $number % 2 === 0;
}


function coinrates() 
{
  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.coincap.io/v2/assets?ids=bitcoin,ethereum,tron,tether,binance-coin,dogecoin,solana,xrp,cardano");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result = json_decode($result, true);
$btc = $result["data"][0]["priceUsd"];
$eth = $result["data"][1]["priceUsd"];
$usdt = $result["data"][2]["priceUsd"];
$bnb = $result["data"][3]["priceUsd"];
$doge = $result["data"][7]["priceUsd"];
$trx = $result["data"][8]["priceUsd"];
$sol = $result["data"][5]["priceUsd"];
$xrp = $result["data"][4]["priceUsd"];
$car = $result["data"][6]["priceUsd"];

$tcoins_arr = array("eth" => $eth, "btc" => $btc, "bnb" => $bnb, "usdt" => $usdt, "trx" => $trx,"doge" => $doge, "trx" => $trx, "sol" => $sol, "xrp" => $xrp, "car" => $car);
return $tcoins_arr;
curl_close($ch);
}


function captchaVerify($code, $secret)
{
    $captcha = Extension::where('act', 'custom-captcha')->where('status', 1)->first();
    $wwww = json_decode($captcha->shortcode);
    $captchaSecret = hash_hmac('sha256', $code, $wwww->random_key->value);
    if ($captchaSecret == $secret) {
        return true;
    }
    return false;
}

function reCaptcha()
{
    $reCaptcha = Extension::where('act', 'google-recaptcha2')->where('status', 1)->first();
    return $reCaptcha ? $reCaptcha->generateScript() : '';
}


  function getCustomCaptcha($height = 46, $width = '300px', $bgcolor = '#003', $textcolor = '#03f356')
{
    $textcolor = '#'.GeneralSetting::first()->base_color;
    $captcha = Extension::where('act', 'custom-captcha')->where('status', 1)->first();
 
    if($captcha){
        $code = rand(100000, 999999);
        $char = str_split($code);
        $ret = '<link href="https://fonts.googleapis.com/css?family=Henny+Penny&display=swap" rel="stylesheet">';
        $ret .= '<div style="height: ' . $height . 'px; line-height: ' . $height . 'px; width:' . $width . '; text-align: center; background-color: ' . $bgcolor . '; color:#03f356; font-size: ' . ($height - 20) . 'px; font-weight: bold; letter-spacing: 20px; font-family: \'Henny Penny\', cursive;  -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none;user-select: none;  display: flex; justify-content: center;">';
        foreach ($char as $value) {
            $ret .= '<span style="    float:left;     -webkit-transform: rotate(' . rand(-60, 60) . 'deg);">' . $value . '</span>';
        }
        $ret .= '</div>';
        $wwww = json_decode($captcha->shortcode);
        
        $captchaSecret = hash_hmac('sha256', $code, $wwww->random_key->value);
        $ret .= '<input type="hidden" name="captcha_secret" value="' . $captchaSecret . '">';
        return $ret;
    }else{
        return false;
    }
}



//moveable
function getIpInfo()
{
    $ip = null;
    $deep_detect = TRUE;

    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }


    $xml = @simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=" . $ip);


    $country = @$xml->geoplugin_countryName;
    $city = @$xml->geoplugin_city;
    $area = @$xml->geoplugin_areaCode;
    $code = @$xml->geoplugin_countryCode;
    $long = @$xml->geoplugin_longitude;
    $lat = @$xml->geoplugin_latitude;

    $data['country'] = $country;
    $data['city'] = $city;
    $data['area'] = $area;
    $data['code'] = $code;
    $data['long'] = $long;
    $data['lat'] = $lat;
    $data['ip'] = request()->ip();
    $data['time'] = date('d-m-Y h:i:s A');


    return $data;
}

function osBrowser(){
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform = "Unknown OS Platform";
    $os_array = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }
    $browser = "Unknown Browser";
    $browser_array = array(
        '/msie/i' => 'Internet Explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/netscape/i' => 'Netscape',
        '/maxthon/i' => 'Maxthon',
        '/konqueror/i' => 'Konqueror',
        '/mobile/i' => 'Handheld Browser'
    );
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }

    $data['os_platform'] = $os_platform;
    $data['browser'] = $browser;

    return $data;
}


function verificationCode($length)
{
    if ($length == 0) return 0;
    $min = pow(10, $length - 1);
    $max = 0;
    while ($length > 0 && $length--) {
        $max = ($max * 10) + 9;
    }
    return random_int($min, $max);
}






function add_leadership_bonus($id,$amt)
{

  //$user_id =$this->session->userdata('user_id_session')
$data = User::where('id',$id)->orderBy('id','desc')->first();

$user_id = $data->username;
$fullname=$data->name;

$rname = $data->username;
$user_mid = $data->id;


      $cnt = 1;

      $amount = $amt/100;


        while ($user_mid!="" && $user_mid!="1"){

              $Sposnor_id = User::where('id',$user_mid)->orderBy('id','desc')->first();
              $sponsor=$Sposnor_id->sponsor;
              if (!empty($sponsor))
               {
                $Sposnor_status = User::where('id',$sponsor)->orderBy('id','desc')->first();
                $Sposnor_cnt = User::where('sponsor',$sponsor)->where('active_status','Active')->count("id");
                $sp_status=$Sposnor_status->active_status;
                $rank=$Sposnor_status->rank;
                $lastPackage = \DB::table('investments')->where('user_id',$Sposnor_status->id)->where('status','Active')->sum("amount");
                $total_profit = \DB::table('incomes')->where('user_id',$Sposnor_status->id)->sum("comm");
                $total_get = $lastPackage*200/100;
              }
              else
              {
                $Sposnor_status =array();
                $sp_status="Pending";
                $Sposnor_cnt=0;
                $rank=0;
                $total_get=0;
                $total_profit=0;
              }

              $pp=0;
               if($sp_status=="Active")
               {
                 if($cnt==1)
                  {
                    $pp= $amount*5;

                  } if($cnt==2)
                  {
                    $pp= $amount*3;

                  } if($cnt==3)
                  {
                    $pp= $amount*1;

                  }  
                  
                 

                }
                else
                {
                  $pp=0;
                }


              $max_income=$total_get;
             $n_m_t = $max_income - $total_profit;
           // dd($total_received);
             if($pp >= $n_m_t)
             {
                 $pp = $n_m_t;
             }  


              $user_mid = @$Sposnor_status->id;
              $spid = @$Sposnor_status->id;
              $idate = date("Y-m-d");

              $user_id_fk=$sponsor;
              if($spid>0 && $cnt<=3){
                if($pp>0){

                 $data = [
                'user_id' => $user_mid,
                'user_id_fk' =>$Sposnor_status->username,
                'amt' => $amt,
                'comm' => $pp,
                'remarks' =>'Leadership Income',
                'level' => $cnt,
                'rname' => $rname,
                'fullname' => $fullname,
                'ttime' => Date("Y-m-d"),

            ];
             $user_data =  Income::create($data);


        }
       }

        $cnt++;
}

return true;
}



// function add_level_income($id, $amt)
// {
//     // Get user details
//     $user = User::where('id', $id)->first();
//     if (!$user) {
//         return false;  // User not found, handle error
//     }

//     $username = $user->username;
//     $fullname = $user->name;
//     $user_id = $user->id;
//     $amount = $amt / 100;
//     $cnt = 1;  // Start with level 1
    
//     while ($user_id != "" && $user_id != "1" && $cnt <= 3) {
//       // Get sponsor details for the current user
//       $sponsorData = User::where('id', $user_id)->first();
//       if ($sponsorData) {
//           $sponsorId = $sponsorData->sponsor; // Current user's sponsor
//           $sponsorStatus = $sponsorData->active_status;
//           $rank = $sponsorData->rank;
//           $sponsorUsername = $sponsorData->username;
  
//           // Get the last active package of the sponsor
//           $lastPackage = \DB::table('investments')
//               ->where('user_id', $sponsorData->id)
//               ->where('status', 'Active')
//               ->orderBy('id', 'desc')
//               ->first();
  
//           $plan = ($lastPackage) ? $lastPackage->plan : 0;
//       } else {
//           // Handle case where sponsor is not found
//           $sponsorId = null;
//           $sponsorStatus = "Pending";
//           $rank = 0;
//       }
  
//       // Process level income distribution if sponsor is active
//       if ($sponsorStatus === "Active") {
//           $commission = processLevelIncomeDistribution($user_id, $amt, $cnt, $amount); // Pass $sponsorId
//       } else {
//           $commission = 0;  // No commission if sponsor is not active
//       }
  
//       // Save commission data if the sponsor exists and level is within the first three levels
//       if ($sponsorId && $commission > 0) {
//           saveIncomeData($user_id, $sponsorUsername, $amt, $commission, $cnt, $username, $fullname); // Save data with $sponsorId
//       }
  
//       // Move to the next sponsor
//       $user_id = $sponsorId;  // Move to the next level by setting the current sponsor's ID as the next user
//       $cnt++;  // Increment the level counter
//   }
  
//     return true;  // Successfully processed
// }

// // Function to handle level income distribution logic
// function processLevelIncomeDistribution($userId, $amt, $cnt, $amount)
// {
//     $user = User::where('id', $userId)->first();
//     if (!$user) {
//         return 0;  // Return 0 if user not found
//     }

//     $firstLevelUserCount = User::where('sponsor', $user->id)
//         ->where('active_status', 'Active')
//         ->count();

//     // Count second and third level users
//     $secondLevelUserCount = 0;
//     $thirdLevelUserCount = 0;

//     if ($firstLevelUserCount > 0) {
//         $firstLevelUserIds = User::where('sponsor', $user->id)
//             ->where(column: 'active_status', 'Active')
//             ->pluck('id');

//         $secondLevelUserCount = User::whereIn('sponsor', $firstLevelUserIds)
//             ->where('active_status', 'Active')
//             ->count();

//         if ($secondLevelUserCount > 0) {
//             $secondLevelUserIds = User::whereIn('sponsor', $firstLevelUserIds)
//                 ->where('active_status', 'Active')
//                 ->pluck('id');

//             $thirdLevelUserCount = User::whereIn('sponsor', $secondLevelUserIds)
//                 ->where('active_status', 'Active')
//                 ->count();
//         }
//     }

//     $combineTwoThree = $thirdLevelUserCount + $secondLevelUserCount;

//     // Calculate commission based on amount and level
//     $commission = 0;
//     if ($amt == 50) {
//         $commission = calculateCommission($cnt, $amount, [0, 0, 0]);
//     } elseif ($amt == 100) {
//         $commission = calculateCommission($cnt, $amount, [5, 3, 1]);
//     } elseif ($amt == 200 && $firstLevelUserCount == 3) {
//         $commission = calculateCommission($cnt, $amount, [6, 4, 2]);
//     } elseif ($amt == 600 && $firstLevelUserCount == 5 && $combineTwoThree == 15) {
//         $commission = calculateCommission($cnt, $amount, [7, 5, 3]);
//     } elseif ($amt == 1200 && $firstLevelUserCount == 10 && $combineTwoThree == 30) {
//         $commission = calculateCommission($cnt, $amount, [8, 6, 4]);
//     } elseif ($amt == 3000 && $firstLevelUserCount == 20 && $combineTwoThree == 60) {
//         $commission = calculateCommission($cnt, $amount, [9, 7, 5]);
//     } elseif ($amt == 6000 && $firstLevelUserCount == 30 && $combineTwoThree == 100) {
//         $commission = calculateCommission($cnt, $amount, [10, 8, 6]);
//     }

//     return $commission;
// }

// // Helper function to calculate commission based on count
//  function calculateCommission($cnt, $amount, $multipliers)
// {
//     return isset($multipliers[$cnt - 1]) ? $amount * $multipliers[$cnt - 1] : 0;
// }

// Helper function to save income data
 function saveIncomeData($userId, $username, $amt, $commission, $level, $rname, $fullname)
{
    Income::create([
        'user_id' => $userId,
        'user_id_fk' => $username,
        'amt' => $amt,
        'comm' => $commission,
        'remarks' => 'Quantify Level Income',
        'level' => $level,
        'rname' => $rname,
        'fullname' => $fullname,
        'ttime' => now(),
    ]);
}


function add_direct_income_new($id,$amt,$newDate,$newDateTime)
{

  //$user_id =$this->session->userdata('user_id_session')
$data = User::where('id',$id)->orderBy('id','desc')->first();

$user_id = $data->username;
$fullname=$data->name;

$rname = $data->username;
$user_mid = $data->id;


      $cnt = 1;

        $amount = $amt/100;

              $Sposnor_id = User::where('id',$user_mid)->orderBy('id','desc')->first();
              $sponsor=$Sposnor_id->sponsor;
              if (!empty($sponsor))
               {
                $Sposnor_status = User::where('id',$sponsor)->orderBy('id','desc')->first();
              $sp_status=$Sposnor_status->active_status;
              $Sposnor_cnt = User::where('sponsor',$sponsor)->where('active_status','Active')->count("id");
              }
              else
              {
                $Sposnor_status =array();
                $sp_status="Pending";
                $Sposnor_cnt =0;
              }
             $percent = 5;

             if($sp_status=="Active")
               {

                $pp = $amount*$percent;

              }else
              {
                $pp=0;
              }

              $user_mid = @$Sposnor_status->id;
              //echo $user_id;
             //die;
              $idate = date("Y-m-d");

              $spid = @$Sposnor_status->id;


              $user_id_fk=$sponsor;
              //print_r($user_id_fk);die;
             // echo $cnt." ".$spid." ".$pp."<br>";
              if($spid>0 && $pp>0){
                 $data = [
                'user_id' => $user_mid,
                'user_id_fk' =>$Sposnor_status->username,
                'amt' => $amt,
                'comm' => $pp,
                'remarks' => 'Direct Bonus',
                'level' => $cnt,
                'rname' => $rname,
                'fullname' => $fullname,
                'ttime' => $newDate,
                'created_at' => $newDateTime,

            ];
            $user_data =  Income::Create($data);


       }


return true;
}


function add_direct_income($id,$amt)
{

  //$user_id =$this->session->userdata('user_id_session')
$data = User::where('id',$id)->orderBy('id','desc')->first();

$user_id = $data->username;
$fullname=$data->name;

$rname = $data->username;
$user_mid = $data->id;


      $cnt = 1;

        $amount = $amt/100;

              $Sposnor_id = User::where('id',$user_mid)->orderBy('id','desc')->first();
              $sponsor=$Sposnor_id->sponsor;
              if (!empty($sponsor))
               {
                $Sposnor_status = User::where('id',$sponsor)->orderBy('id','desc')->first();
                $sp_status=$Sposnor_status->active_status;
                $Sposnor_cnt = User::where('sponsor',$sponsor)->where('active_status','Active')->count("id");
                $lastPackage = \DB::table('investments')->where('user_id',$Sposnor_status->id)->where('status','Active')->sum("amount");
                $total_profit = \DB::table('incomes')->where('user_id',$Sposnor_status->id)->sum("comm");
                $total_get = $lastPackage*200/100;
              }
              else
              {
                $Sposnor_status =array();
                $sp_status="Pending";
                $Sposnor_cnt =0;
                $total_profit =0;
                $total_get =0;
              }
             $percent = 8;

             if($sp_status=="Active")
               {

                $pp = $amount*$percent;

              }else
              {
                $pp=0;
              }

              $user_mid = @$Sposnor_status->id;
              //echo $user_id;
             //die;
              $idate = date("Y-m-d");

              $spid = @$Sposnor_status->id;
        
                 $max_income=$total_get;
             $n_m_t = $max_income - $total_profit;
           // dd($total_received);
             if($pp >= $n_m_t)
             {
                 $pp = $n_m_t;
             }  
             

              $user_id_fk=$sponsor;
              //print_r($user_id_fk);die;
             // echo $cnt." ".$spid." ".$pp."<br>";
              if($spid>0 && $pp>0){
                 $data = [
                'user_id' => $user_mid,
                'user_id_fk' =>$Sposnor_status->username,
                'amt' => $amt,
                'comm' => $pp,
                'remarks' => 'Direct Income',
                'level' => $cnt,
                'rname' => $rname,
                'fullname' => $fullname,
                'ttime' => Date("Y-m-d"),

            ];
            $user_data =  Income::Create($data);


       }


return true;
}





?>
