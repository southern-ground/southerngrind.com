<?php
/**
 * Created by PhpStorm.
 * User: fst
 * Date: 6/28/17
 * Time: 2:22 PM
 */

define('EMPTY_FIELD', "[None Provided]");

function spoofCheck()
{
    if ((!isset($_POST['SpamCheck']) && !isset($_POST['SpamCheck2'])) ||
        ($_POST['SpamCheck'] != 'NotSpam') ||
        ($_POST['SpamCheck2'] != '1')
    ) {
        // For 4.3.0 <= PHP <= 5.4.0
        if (!function_exists('http_response_code')) {
            function http_response_code($code = NULL)
            {
                if ($code !== NULL) {

                    switch ($code) {
                        case 100:
                            $text = 'Continue';
                            break;
                        case 101:
                            $text = 'Switching Protocols';
                            break;
                        case 200:
                            $text = 'OK';
                            break;
                        case 201:
                            $text = 'Created';
                            break;
                        case 202:
                            $text = 'Accepted';
                            break;
                        case 203:
                            $text = 'Non-Authoritative Information';
                            break;
                        case 204:
                            $text = 'No Content';
                            break;
                        case 205:
                            $text = 'Reset Content';
                            break;
                        case 206:
                            $text = 'Partial Content';
                            break;
                        case 300:
                            $text = 'Multiple Choices';
                            break;
                        case 301:
                            $text = 'Moved Permanently';
                            break;
                        case 302:
                            $text = 'Moved Temporarily';
                            break;
                        case 303:
                            $text = 'See Other';
                            break;
                        case 304:
                            $text = 'Not Modified';
                            break;
                        case 305:
                            $text = 'Use Proxy';
                            break;
                        case 400:
                            $text = 'Bad Request';
                            break;
                        case 401:
                            $text = 'Unauthorized';
                            break;
                        case 402:
                            $text = 'Payment Required';
                            break;
                        case 403:
                            $text = 'Forbidden';
                            break;
                        case 404:
                            $text = 'Not Found';
                            break;
                        case 405:
                            $text = 'Method Not Allowed';
                            break;
                        case 406:
                            $text = 'Not Acceptable';
                            break;
                        case 407:
                            $text = 'Proxy Authentication Required';
                            break;
                        case 408:
                            $text = 'Request Time-out';
                            break;
                        case 409:
                            $text = 'Conflict';
                            break;
                        case 410:
                            $text = 'Gone';
                            break;
                        case 411:
                            $text = 'Length Required';
                            break;
                        case 412:
                            $text = 'Precondition Failed';
                            break;
                        case 413:
                            $text = 'Request Entity Too Large';
                            break;
                        case 414:
                            $text = 'Request-URI Too Large';
                            break;
                        case 415:
                            $text = 'Unsupported Media Type';
                            break;
                        case 500:
                            $text = 'Internal Server Error';
                            break;
                        case 501:
                            $text = 'Not Implemented';
                            break;
                        case 502:
                            $text = 'Bad Gateway';
                            break;
                        case 503:
                            $text = 'Service Unavailable';
                            break;
                        case 504:
                            $text = 'Gateway Time-out';
                            break;
                        case 505:
                            $text = 'HTTP Version not supported';
                            break;
                        default:
                            exit('Unknown http status code "' . htmlentities($code) . '"');
                            break;
                    }

                    $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

                    header($protocol . ' ' . $code . ' ' . $text);

                    $GLOBALS['http_response_code'] = $code;

                } else {
                    $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);
                }
                return $code;
            }
        }
        die(http_response_code(400));
    }
}

function postVar($which, $default = EMPTY_FIELD)
{
    if (!isset($_POST[$which]) || ($default !== "" && $_POST[$which] === "")) {
        return strtoupper($default);
    }

    return strtoupper($_POST[$which]);
}

function label($what)
{
    return "<strong>$what:</strong> ";
}

function getPlainText($message = "", $boundary)
{
    $message .= "\r\n\r\n--$boundary\r\n" .
        "Content-type: text/plain;charset=utf-8\r\n\r\n" .
        "Southern Grind/Case Dealer Application Form Submission\r\n" .
        "======================================================\r\n\r\n" .
        "Contact Information:\r\n" .
        "--------------------\r\n" .
        "Contact Name:     " . postVar('Contact_Name') . "\r\n" .
        "Company Name:     " . postVar('Company_Name') . "\r\n" .
        "Company Address:  " . postVar('Company_Address') . "\r\n" .
        "                  " . postVar('Company_City') . ', ' . postVar('Company_State') . ' ' . postVar('Company_Zip') . "\n\r" .
        "Company Phone:    " . postVar('Company_Phone') . "\r\n" .
        "Company Fax:      " . postVar('Company_Fax') . "\r\n" .
        "Email:            " . postVar('Email') . "\r\n\r\n" .
        "Questions:\r\n" .
        "----------\r\n" .
        "*Do you have a walk-in retail establishment?*: " . postVar('Walkin') . "\r\n" .
        "*Is this location a residence?*: " . postVar('Residence') . "\r\n" .
        "*How many days is your store open?*: " . postVar('Day') . "\r\n" .
        "*Do you plan to sell Case via a website?*: " . postVar('Website') . "\r\n" .
        "*Do you plan to sell Case via internet auction (e.g. ebay)?*: " . postVar('Auction') . "\r\n" .
        /*"*Are you interested in selling Zippo lighters, too?*: " . postVar('Zippo', "No") . "\r\n\r\n" .*/
        "Bankining Information:\r\n" .
        "----------------------\r\n" .
        "Bank Name:     " . postVar('Bank_Name') . "\r\n" .
        "Bank Location: " . postVar('Bank_City') . ', ' . postVar('Bank_State') . "\r\n" .
        "Bank Phone:    " . postVar('Bank_Phone') . "\r\n\r\n" .
        "Supplier #1:\r\n" .
        "------------\r\n" .
        "Supplier Name:      " . postVar('Supplier_Name') . "\r\n" .
        "Supplier Location:  " . postVar('Supplier_City') . ', ' . postVar('Supplier_State') . "\r\n" .
        "Supplier Phone:     " . postVar('Supplier_Phone') . "\r\n" .
        "Supplier Account #: " . postVar('Supplier_Account_Number') . "\r\n\r\n" .
        "Supplier #2:\r\n" .
        "------------\r\n" .
        "Supplier Name:      " . postVar('Supplier_2_Name') . "\r\n" .
        "Supplier Location:  " . postVar('Supplier_2_City') . ', ' . postVar('Supplier_2_State') . "\r\n" .
        "Supplier Phone:     " . postVar('Supplier_2_Phone') . "\r\n" .
        "Supplier Account #: " . postVar('Supplier_2_Account_Number') . "\r\n\r\n";
    return $message;
}

function getHTMLText($message, $boundary)
{
    $message .= "\r\n\r\n--$boundary\r\n" .
        "Content-type: text/html;charset=utf-8\r\n\r\n" .
        "<h1><u>Southern Grind/Case Dealer Application Form Submission</u></h1>\r\n" .
        "<div>\r\n" .
        "<h2>Contact Information</h2>\r\n" .
        "<strong>Contact Name:</strong> \t" . postVar('Contact_Name') . "<br />\r\n" .
        "<strong>Company Name:</strong> \t" . postVar('Company_Name') . "<br />\r\n" .
        "<strong>Company Address:</strong> \t" . postVar('Company_Address') . "<br />\r\n" .
        "\t\t\t" . postVar('Company_City') . ', ' . postVar('Company_State') . ' ' . postVar('Company_Zip') . "<br />\n\r" .
        "<strong>Company Phone:</strong> \t" . postVar('Company_Phone') . "<br />\r\n" .
        "<strong>Company Fax:</strong> \t" . postVar('Company_Fax') . "<br />\r\n" .
        "<strong>Email:</strong> \t" . postVar('Email') . "\r\n" .
        "</div>\r\n" .
        "<div>\r\n" .
        "<h2>Questions:</h2>\r\n" .
        "<strong>Do you have a walk-in retail establishment?:</strong> \t" . postVar('Walkin') . "<br />\r\n" .
        "<strong>Is this location a residence?:</strong> \t" . postVar('Residence') . "<br />\r\n" .
        "<strong>How many days is your store open?:</strong> \t" . postVar('Day') . "<br />\r\n" .
        "<strong>Do you plan to sell Case via a website?:</strong> \t" . postVar('Website') . "<br />\r\n" .
        "<strong>Do you plan to sell Case via internet auction (e.g. ebay)?:</strong> \t" . postVar('Auction') . "<br />\r\n" .
        /*"<strong>Are you interested in selling Zippo lighters, too?:</strong> \t" . postVar('Zippo', 'No') . "\r\n" .*/
        "</div>\r\n" .
        "<div>\r\n" .
        "<h2>Banking Information</h2>\r\n" .
        "<strong>Bank Name:</strong> \t" . postVar('Bank_Name') . "<br />\r\n" .
        "<strong>Bank Location:</strong> \t" . postVar('Bank_City') . ', ' . postVar('Bank_State') . "<br />\r\n" .
        "<strong>Bank Phone:</strong> \t" . postVar('Bank_Phone') . "\r\n" .
        "</div>\r\n" .
        "<div>\r\n" .
        "<h2>Supplier Information</h2>\r\n" .
        "<h3>Supplier #1</h3>\r\n" .
        "<p><strong>Supplier Name:</strong> \t" . postVar('Supplier_Name') . "<br />\r\n" .
        "<strong>Supplier Location:</strong> \t" . postVar('Supplier_City') . ', ' . postVar('Supplier_State') . "<br />\r\n" .
        "<strong>Supplier Phone:</strong> \t" . postVar('Supplier_Phone') . "<br />\r\n" .
        "<strong>Supplier Account #:</strong> \t" . postVar('Supplier_Account_Number') . "\r\n" .
        "</p>" .
        "<h3>Supplier #2</h3>\r\n" .
        "<p><strong>Supplier Name:</strong> \t" . postVar('Supplier_2_Name') . "<br />\r\n" .
        "<strong>Supplier Location:</strong> \t" . postVar('Supplier_2_City') . ', ' . postVar('Supplier_2_State') . "<br />\r\n" .
        "<strong>Supplier Phone:</strong> \t" . postVar('Supplier_2_Phone') . "<br />\r\n" .
        "<strong>Supplier Account #:</strong> \t" . postVar('Supplier_2_Account_Number') . "\r\n" .
        "</p>\r\n";

    return $message;
}

// Fire off the spoof check:
spoofCheck();

$boundary = uniqid('np');
$headers = "MIME-Version: 1.0\r\n" .
    "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n" .
    "Bcc: Info <info@southerngrind.com>,Ferris Thomas <ferris@southernground.com>\r\n" .
    "From: Southern Grind <info@southerngrind.com>\r\n" .
    'X-Mailer: PHP/' . phpversion();
// Content body
$message = getPlainText("", $boundary);
$message = getHTMLText($message, $boundary);
$message .= "\r\n\r\n--" . $boundary . "--";
$message = wordwrap($message, 70, "\r\n");

$email = "M Lawson <mlawson@jessupsales.com>";
$subject = "Southern Grind/Case Dealer Application Form Submission";

//invoke the PHP mail function
mail($email, $subject, $message, $headers);

header('Location: http://southerngrind.com/dealers/?submit=success');
