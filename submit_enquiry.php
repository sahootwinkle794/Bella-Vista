<?php
include("../super-admin/app/model/config.php");
$response = array('status' => 0, 'message' => 'invalid request');
if (isset($_POST['request_type']) && $_POST['request_type'] == 'submit_enquiry') {
    $secret = '6LdISUUpAAAAAMTFOTL6T55HfGTqg3tzDf7s0EJ_';
    $captcha = $_POST['g-recaptcha-response'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $action = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
    $result = json_decode($action, 1);
    if ($result['success'] == 1) {
        $enq_guest_count = ($_POST['guest'] == 'Other') ? $_POST['othersgc'] : $_POST['guest'];
        // SELECT id, enq_name, enq_email, enq_for_date, enq_guest_count, enq_meal, created_at, updated_at FROM bvr_wedding_enquiry WHERE 1
        $InsertQry = "INSERT INTO bvr_wedding_enquiry (`enq_name`, `enq_email`, `enq_phone`, `enq_for_date`, `enq_guest_count`, `enq_meal`, `created_at`, `updated_at`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "', '" . date("Y-m-d", strtotime($_POST['date'])) . "', '" . $enq_guest_count . "', '" . $_POST['meal'] . "', '" . date("Y-m-d H:i:s") . "', '" . date("Y-m-d H:i:s") . "')";
        $conn->query($InsertQry);

        $to = "sales@bellavistaresort.com";
        $subject = "Enquiry Email";

        $message = '<!DOCTYPE html>
                    <html>
                    <head>
                        <title>Enquiry Mail</title>
                    </head>
                    <body>
                        <table style="width:60%;margin:0 auto;text-align:left;border-collapse:collapse;">
                            <tr>
                            <td colspan="2" style="background-color:#0661b0;text-align:center;padding:10px;color:white;border:1px solid grey;font-weight:800;font-size:20px">
                                User Enquiry
                            </td>
                            </tr>
                            <tr style="padding:10px;">
                                <th style="border:1px solid grey;padding:10px">Name</th>
                                <td style="border:1px solid grey;padding:10px">'. $_POST['name'] .'</td>
                            </tr>
                            <tr style="padding:10px;">
                                <th style="border:1px solid grey;padding:10px">Email</th>
                                <td style="border:1px solid grey;padding:10px">'. $_POST['email'] .'</td>
                            </tr>
                            <tr style="padding:10px;">
                                <th style="border:1px solid grey;padding:10px">Phone</th>
                                <td style="border:1px solid grey;padding:10px">'. $_POST['phone'] .'</td>
                            </tr>
                            <tr style="padding:10px;">
                                <th style="border:1px solid grey;padding:10px">For Date</th>
                                <td style="border:1px solid grey;padding:10px">'. date("d M Y", strtotime($_POST['date'])) .'</td>
                            </tr>
                            <tr style="padding:10px;">
                                <th style="border:1px solid grey;padding:10px">Number of Guests</th>
                                <td style="border:1px solid grey;padding:10px">'. $enq_guest_count .'</td>
                            </tr>
                            <tr style="padding:10px;">
                                <th style="border:1px solid grey;padding:10px">Meal Preference</th>
                                <td style="border:1px solid grey;padding:10px">'. $_POST['meal'] .'</td>
                            </tr>
                        </table>
                    </body>
                    </html>';

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: sales@bellavistaresort.com' . "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to, $subject, $message, $headers);

        $response['status'] = 1;
        $response['message'] = 'Your enquiry submitted successfully. We will contact you soon.';
    } else {
        $response['message'] = 'Invalid captcha.';
    }
}
echo json_encode($response);
exit;
