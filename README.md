###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
```
object(Checkout\Models\Payments\Payment)#23 (18) {
  ["source"]=>
  array(18) {
    ["id"]=>
    string(30) "src_2jjfnr672t4u3dmi4e243l476e"
    ["type"]=>
    string(4) "card"
    ["expiry_month"]=>
    int(12)
    ["expiry_year"]=>
    int(2023)
    ["scheme"]=>
    string(4) "Visa"
    ["last4"]=>
    string(4) "4242"
    ["fingerprint"]=>
    string(64) "C63152B5BEF7AC645FC14B4DF0F7A4CBC4A9AADFB7508C76BEF3BF560D5430D1"
    ["bin"]=>
    string(6) "424242"
    ["card_type"]=>
    string(6) "Credit"
    ["card_category"]=>
    string(8) "Consumer"
    ["issuer"]=>
    string(22) "JPMORGAN CHASE BANK NA"
    ["issuer_country"]=>
    string(2) "US"
    ["product_id"]=>
    string(1) "A"
    ["product_type"]=>
    string(16) "Visa Traditional"
    ["avs_check"]=>
    string(1) "S"
    ["cvv_check"]=>
    string(1) "Y"
    ["payouts"]=>
    bool(true)
    ["fast_funds"]=>
    string(1) "d"
  }
  ["currency"]=>
  string(3) "GBP"
  ["id"]=>
  string(30) "pay_h6ehwo7pdtcu3ee2i5ufxoj3eq"
  ["action_id"]=>
  string(30) "act_h6ehwo7pdtcu3ee2i5ufxoj3eq"
  ["amount"]=>
  int(86000)
  ["approved"]=>
  bool(true)
  ["status"]=>
  string(10) "Authorized"
  ["auth_code"]=>
  string(6) "689539"
  ["eci"]=>
  string(2) "05"
  ["scheme_id"]=>
  string(15) "624740305910858"
  ["response_code"]=>
  string(5) "10000"
  ["response_summary"]=>
  string(8) "Approved"
  ["risk"]=>
  array(1) {
    ["flagged"]=>
    bool(false)
  }
  ["customer"]=>
  array(3) {
    ["id"]=>
    string(30) "cus_rwiaedzd7hbedao76mdgtxhtou"
    ["email"]=>
    string(18) "liutao@liutao.work"
    ["name"]=>
    string(7) "Liu Tao"
  }
  ["processed_on"]=>
  string(20) "2021-05-04T13:44:46Z"
  ["processing"]=>
  array(2) {
    ["acquirer_transaction_id"]=>
    string(10) "0079587608"
    ["retrieval_reference_number"]=>
    string(12) "045207873489"
  }
  ["_links"]=>
  array(4) {
    ["self"]=>
    array(1) {
      ["href"]=>
      string(72) "https://api.sandbox.checkout.com/payments/pay_h6ehwo7pdtcu3ee2i5ufxoj3eq"
    }
    ["actions"]=>
    array(1) {
      ["href"]=>
      string(80) "https://api.sandbox.checkout.com/payments/pay_h6ehwo7pdtcu3ee2i5ufxoj3eq/actions"
    }
    ["capture"]=>
    array(1) {
      ["href"]=>
      string(81) "https://api.sandbox.checkout.com/payments/pay_h6ehwo7pdtcu3ee2i5ufxoj3eq/captures"
    }
    ["void"]=>
    array(1) {
      ["href"]=>
      string(78) "https://api.sandbox.checkout.com/payments/pay_h6ehwo7pdtcu3ee2i5ufxoj3eq/voids"
    }
  }
  ["http_code"]=>
  int(201)
}
```
